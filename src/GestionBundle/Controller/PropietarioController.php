<?php

namespace GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use GestionBundle\Entity\Propietario;
use GestionBundle\Entity\Vehiculos;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use GestionBundle\Form\PropietarioType;

class PropietarioController extends Controller
{
    /**
     * @Route("/propietarios/index", name="propietarios_index")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dql="SELECT p FROM GestionBundle:Propietario p";
        $deleteFormAjax= $this->createCustomForm(':PROPIETARIO_ID','DELETE','propietario_delete');
        $propietarios=$em->createQuery($dql);
        return $this->render('GestionBundle:propietarios:index.html.twig',array('propietarios'=>$propietarios->getResult(),'delete_form_ajax'=> $deleteFormAjax->createView()));
    }

    /**
     * @Route("/propietario/add", name="propietario_add")
     * @Method({"GET"})
     */
    public function addAction()
    {
        $propietario= new Propietario();

        $form = $this->createCreateForm($propietario);
        return $this->render('GestionBundle:propietarios:add.html.twig',array('form' => $form -> createView()));

    }

    private function createCreateForm(Propietario $entity){
        $form = $this->createForm(new PropietarioType(),$entity,array('action'=>$this->generateUrl('propietario_create'),'method'=>'POST'));
        return $form;
    }


    /**
     * @Route("/propietario/create", name="propietario_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request){

        $propietario = new Propietario();
        $form =$this->createCreateForm($propietario);
        $form->handleRequest($request);

        if($form->isValid()){

            $password= $form->get('password')->getData();

            $encoder= $this->container->get('security.password_encoder');
            $encoded=$encoder->encodePassword($propietario,$password);
            $propietario->setPassword($encoded);

            $em = $this->getDoctrine()->getManager();
            $propietarios=$em->getRepository('GestionBundle:Propietario')->findAll();

            $username=$form->get('username')->getData();
            $email=$form->get('email')->getData();
            $documento=$form->get('documento')->getData();

            $bandera_email=false;
            $bandera_username=false;
            $bandera_documento=false;

            foreach ($propietarios as $rpropietario){
                $nombre_usuario=$rpropietario->getUsername();
                $correo=$rpropietario->getEmail();
                $num_documento=$rpropietario->getDocumento();
                if($username == $nombre_usuario){
                    $bandera_username=true;
                }elseif ($email == $correo){
                    $bandera_email=true;
                }elseif($documento == $num_documento){
                    $bandera_documento=true;
                }
            }

            if($bandera_username){

                $message='el nombre de usuario ya se encuentra registrado,intente con otro!';
                $this->addFlash('mensaje_error',$message);


            }elseif($bandera_email){
                $message='La direccion de correo ya se encuentran registrada,intente con otra direccion!';
                $this->addFlash('mensaje_error',$message);

            }elseif($bandera_documento){
                $message='Este numero de documento ya se encuentra registrado!';
                $this->addFlash('mensaje_error',$message);
            }
            else{

                $password=$form->get('password')->getData();
                $passwordconst=new Assert\NotBlank();
                $error=$this->get('validator')->validate($password,$passwordconst);

                if (count($error) == 0){
                    $em=$this->getDoctrine()->getManager();
                    $em->persist($propietario);
                    $em->flush();
                    $this->addFlash('mensaje','El usuario ha sido creado correctamente!');

                    return $this->redirectToRoute('propietarios_index');
                }else{

                    $errormsm = new FormError($error[0]->getMessage());
                    $form->get('password')->addError($errormsm);
                }

            }

        }
        return $this->render('GestionBundle:propietarios:add.html.twig',array('form' => $form -> createView()));

    }

    /**
     * @Route("/propietario/view/{id}", name="propietario_view", requirements={"id": "\d+"})
     *@Method({"GET"})
     */

    public function viewAction($id,Request $request){

        $em = $this->getDoctrine()->getManager();
        $propietario =$em->getRepository('GestionBundle:Propietario')->find($id);

        if (!$propietario) {
            throw $this->$this->createNotFoundException('Propietario no encontrado'.$id);
        }
        $deleteForm = $this->createCustomForm($propietario->getId(),'DELETE','propietario_delete');

        return $this->render('GestionBundle:propietarios:view.html.twig',array('propietario'=>$propietario,'delete_form'=>$deleteForm
            ->createView()));

    }

    private function createCustomForm($id,$metodo,$ruta){
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($ruta,array('id' => $id)))
            ->setMethod($metodo)
            ->getForm();
    }

    /**
     * @Route("/propietario/delete/{id}", name="propietario_delete")
     *@Method({"POST","DELETE"})
     */

    public function deleteAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $propietario = $em->getRepository('GestionBundle:Propietario')->find($id);

        if (!$propietario) {
            $this->addFlash('mensaje_error','El propietario NO se ha encontrado!');
            throw $this->$this->createNotFoundException('Propietario no encontrado'.$id);
        }

        $propietarios=$em->getRepository('GestionBundle:Propietario')->findAll();
        $num_usuarios= count($propietarios);
        $form=$this->createCustomForm($propietario->getId(),'DELETE','propietario_delete');
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            if ($request->isXmlHttpRequest()){

                $res = $this->deleteUser($propietario->getRole(),$em,$propietario);

                return new Response(
                    json_encode(array('removed'=> $res['removed'],'message'=>$res['message'],'usuarios'=>$num_usuarios)),200,
                    array('Content-Type'=>'application/json')
                );

            }

            $res=$this->deleteUser($propietario->getRole(),$em,$propietario);

            $this->addFlash($res['alert'],$res['message']);

            return $this->redirectToRoute('propietarios_index');
        }

    }

    private function deleteUser($rol,$em,$propietario){
        if($rol == 'ROLE_USER'){
            $em -> remove($propietario);
            $em -> flush();
            $message = 'El propietario se ha Eliminado correctamente!';
            $removed = 1;
            $alert = 'mensaje';

        }elseif ($rol == 'ROLE_ADMIN'){
            $message = 'El propietario NO se ha Eliminado! Usuario Administrador';
            $removed = 0;
            $alert = 'mensaje_error';
        }

        return array('removed'=>$removed,'message'=>$message,'alert' => $alert);
    }


    /**
     * @Route("/propietario/edit/{id}", name="propietario_edit", requirements={"id": "\d+"})
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $propietario =$em->getRepository('GestionBundle:Propietario')->find($id);

        if (!$propietario) {
            throw $this->$this->createNotFoundException('Propietario no encontrado'.$id);
        }

        $form= $this->createEditForm($propietario);

        return $this->render('GestionBundle:propietarios:edit.html.twig',array('propietario'=>$propietario,'form'=> $form -> createView()));

    }

    private function createEditForm(Propietario $entity){
        $form=$this->createForm(new PropietarioType(),$entity,array('action'=>$this->
        generateUrl('propietario_update',array('id'=>$entity->getId())),'method'=>'PUT'));
        return $form;
    }



    /**
     * @Route("/propietario/update/{id}", name="propietario_update", requirements={"id": "\d+"})
     *@Method({"POST","PUT"})
     */
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $propietario =$em->getRepository('GestionBundle:Propietario')->find($id);
        if (!$propietario) {
            throw $this->$this->createNotFoundException('propietario no encontrado'.$id);
        }

        $form=$this->createEditForm($propietario);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $password=$form->get('password')->getData();


            if(!empty($password)){

                $encoder= $this->container->get('security.password_encoder');
                $encoded=$encoder->encodePassword($propietario,$password);
                $propietario->setPassword($encoded);

            }else
            {
                $passactual = $this->recoverPass($id);
                $propietario->setPassword($passactual[0]['password']);
                print_r($passactual);

            }

            if($form->get('role')->getData()=='ROLE_ADMIN'){
                $propietario->setIsActive(1);
            }

            $em->flush();

            $this->addFlash('mensaje','El usuario se ha actualizado correctamente!');
            return $this->redirectToRoute('propietario_edit',array('id'=>$propietario->getId()));
        }

        return $this->render('GestionBundle:Propietario:edit.html.twig',array('propietario'=> $propietario,'form'=>$form -> createView()));

    }

    public function recoverPass($id){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p.password FROM GestionBundle:Propietario p WHERE p.id = :id')->setParameter('id',$id);
        $passactual=$query->getResult();
        return $passactual;
    }


}
