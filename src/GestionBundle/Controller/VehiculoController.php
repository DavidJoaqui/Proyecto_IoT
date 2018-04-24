<?php

namespace GestionBundle\Controller;
use Doctrine\ORM\EntityRepository;
use GestionBundle\Entity\Vehiculos;
use GestionBundle\Entity\Propietario;
use GestionBundle\Form\VehiculoType;
use GestionBundle\GestionBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class VehiculoController extends Controller
{

    /**
     * @Route("/vehiculos/index", name="vehiculos_index")
     *
     */
    public function listVehiculosAction(){
        $em= $this->getDoctrine()->getRepository('GestionBundle:Vehiculos');
        $vehiculos = $em->findAll();
        $deleteFormAjax= $this->createCustomForm(':VEHICULO_ID','DELETE','vehiculo_delete');
        return $this->render('GestionBundle:Vehiculos:index.html.twig',array('vehiculos'=>$vehiculos,'delete_form_ajax'=> $deleteFormAjax->createView()));
    }

    /**
     * @Route("/vehiculo/add", name="vehiculos_add")
     * @Method({"GET"})
     */
    public function addAction()
    {
        $vehiculo=new Vehiculos();
        $form = $this->createCreateForm($vehiculo);
        return $this->render('GestionBundle:Vehiculos:add.html.twig',array('form'=>$form->createView()));

    }

    private function createCreateForm(Vehiculos $vehiculo){
        $form = $this->createForm(new VehiculoType(),$vehiculo,array('action'=>$this->generateUrl('create_vehiculo'),'method'=>'POST'));
        return $form;
    }

    /**
     * @Route("/vehiculo/create", name="create_vehiculo")
     * @Method({"POST"})
     */
    public function createAction(Request $request){
        $vehiculo = new Vehiculos();
        $form = $this->createCreateForm($vehiculo);
        $form-> handleRequest($request);

        if($form->isValid()){

           $em=$this->getDoctrine()->getManager();
           $em->persist($vehiculo);
           $em->flush();

            $this->addFlash(
                'mensaje',
                'El vehiculo se ha creado correctamente!'
            );

            return $this->redirectToRoute('vehiculos_index');

        }
        return $this->render('GestionBundle:Vehiculos:add.html.twig',array('form' => $form -> createView()));

    }



    /**
     * @Route("/vehiculo/view/{id}", name="vehiculo_view", requirements={"id": "\d+"})
     *@Method({"GET"})
     */

    public function viewAction($id,Request $request){

        $em = $this->getDoctrine()->getManager();
        $vehiculo =$em->getRepository('GestionBundle:Vehiculos')->find($id);

        if (!$vehiculo) {
            throw $this->$this->createNotFoundException('Vehiculo no encontrado'.$id);
        }

        $deleteForm = $this->createCustomForm($vehiculo->getId(),'DELETE','vehiculo_delete');
        return $this->render('GestionBundle:Vehiculos:view.html.twig',array('vehiculo'=>$vehiculo,'delete_form'=>$deleteForm
            ->createView()));

    }


    /**
     * @Route("/vehiculo/delete/{id}", name="vehiculo_delete")
     *@Method({"POST","DELETE"})
     */

    public function deleteAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $vehiculo = $em->getRepository('GestionBundle:Vehiculos')->find($id);

        if (!$vehiculo) {
            $this->addFlash('mensaje','El vehiculo NO se ha encontrado!');
            throw $this->$this->createNotFoundException('Vehiculo no encontrado'.$id);
        }

        $vehiculos=$em->getRepository('GestionBundle:Vehiculos')->findAll();
        $num_vehiculos= count($vehiculos);

        $form=$this->createCustomForm($vehiculo->getId(),'DELETE','vehiculo_delete');
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            if ($request->isXmlHttpRequest()){

                $res = $this->deleteVehiculo($vehiculo->getPropietario(),$em,$vehiculo);

                return new Response(
                    json_encode(array('removed'=>$res['removed'],'message'=>$res['message'],'vehiculos'=>$num_vehiculos)),200,
                    array('Content-Type'=>'application/json')
                );

            }

            $propietario=$vehiculo->getPropietario();
            $res=$this->deleteVehiculo($propietario,$em,$vehiculo);

            $this->addFlash($res['alert'],$res['message']);

            return $this->redirectToRoute('vehiculos_index');
        }


    }

    private function deleteVehiculo($propietario,$em,$vehiculo){
        if($propietario->getRole() == 'ROLE_USER'){
            $em -> remove($vehiculo);
            $em -> flush();
            $message = 'El vehiculo se ha Eliminado correctamente! user';
            $removed = 1;
            $alert = 'mensaje';

        }elseif ($propietario->getRole() == 'ROLE_ADMIN'){
            $message = 'El vehiculo NO se ha Eliminado! admin';
            $removed = 0;
            $alert = 'error';
        }

        return array('removed'=>$removed,'message'=>$message,'alert' => $alert);
    }

    private function createCustomForm($id,$metodo,$ruta){
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($ruta,array('id' => $id)))
            ->setMethod($metodo)
            ->getForm();
    }


    /**
     * @Route("/vehiculo/edit/{id}", name="vehiculo_edit", requirements={"id": "\d+"})
     *
     */

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $vehiculo =$em->getRepository('GestionBundle:Vehiculos')->find($id);

        if (!$vehiculo) {
            throw $this->$this->createNotFoundException('Vehiculo no encontrado'.$id);
        }

        $form= $this->createEditForm($vehiculo);

        return $this->render('GestionBundle:Vehiculos:edit.html.twig',array('vehiculo'=>$vehiculo,'form'=> $form -> createView()));

    }

    private function createEditForm(Vehiculos $entity){
        $form=$this->createForm(new VehiculoType(),$entity,array('action'=>$this->
        generateUrl('vehiculo_update',array('id'=>$entity->getId())),'method'=>'PUT'));

        return $form;
    }

    /**
     * @Route("/vehiculo/update/{id}", name="vehiculo_update", requirements={"id": "\d+"})
     *@Method({"POST","PUT"})
     */

    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $vehiculo =$em->getRepository('GestionBundle:Vehiculos')->find($id);

        if (!$vehiculo) {
            throw $this->$this->createNotFoundException('Vehiculo no encontrado'.$id);
        }

        $form=$this->createEditForm($vehiculo);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em->flush();

            $this->addFlash('mensaje','La informacion del Vehiculo se ha actualizado correctamente!');
            return $this->redirectToRoute('vehiculo_edit',array('id'=>$vehiculo->getId()));
        }

        return $this->render('GestionBundle:Vehiculos:edit.html.twig',array('vehiculo'=> $vehiculo,'form'=>$form -> createView()));

    }

}
