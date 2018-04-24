<?php

namespace GestionBundle\Controller;

use FOS\RestBundle\FOSRestBundle;
use GestionBundle\Entity\Ubicacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use GestionBundle\GestionBundle;
use GestionBundle\Entity\Propietario;
use GestionBundle\Entity\Vehiculos;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use FOS\RestBundle\Controller\FOSRestController;

class GestionController extends FOSRestController
{
    /**
     * @Route("/", name="user_homepage")
     *
     */
    public function homeAction(){

        return $this->render('GestionBundle:propietarios:home.html.twig');
    }

    /**
     * @Route("/ubicaciones/index", name="ubicaciones_index")
     *@Method({"GET"})
     */
    public function listUbicacionesAction(Request $peticion){
        $em= $this->getDoctrine()->getManager();
        $dql="SELECT u FROM GestionBundle:Ubicacion u";
        $ubicaciones = $em->createQuery($dql);

        $paginator=$this->get('Knp_paginator');
        $paginacion=$paginator->paginate(
            $ubicaciones,$peticion->query->getInt('page',1),
            4
        );

        return $this->render('GestionBundle:Ubicaciones:index.html.twig',array('paginacion'=>$paginacion));
    }

    /**
     * @Route("/crear/ubicacion", name="crear_ubicacion")
     * @Method({"POST"})
     */
    public function addUbicacionAction(Request $peticion)
    {   //var_dump($request);

        $id_vehiculo = $peticion->get("id_vehiculo");

        $vehiculo = $this->getDoctrine()->getRepository('GestionBundle:Vehiculos')->find($id_vehiculo);

        //consulta en registros anteriores el estado del vehiculo que se esta ingresando
        //$em=$this->getDoctrine()->getManager();
        //$query1=$em->createQuery("SELECT u FROM GestionBundle:Ubicacion u WHERE u.vehiculo = $id_vehiculo and u.isActive = '0' ORDER BY u.createdAt DESC");

        //actualiza el estado de registros anteriores para el vehiculo ingresado
        $em=$this->getDoctrine()->getManager();
        $query=$em->createQuery("UPDATE GestionBundle:Ubicacion u SET u.isActive='0' WHERE u.vehiculo = $id_vehiculo and u.isActive = '1'");
        $query->getResult();
        $latitud = $peticion->get("latitud");
        $longitud = $peticion->get("longitud");
        //var_dump($vehiculo, $latitud, $longitud);
        $ubicacion = new Ubicacion();
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($ubicacion);
        $ubicacion->setLatitud($latitud);
        $ubicacion->setLongitud($longitud);
        $ubicacion->setIsActive(1);
        $ubicacion->setVehiculo($vehiculo);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($ubicacion);

        //Insertarmos en la base de datos
        $flush = $em->flush();

        if ($flush == null) {
            //return new Response('<html><h2>La ubicacion se ha creado correctamente!</h2></html>');
            $res=array('Estado'=>'OK','repuesta'=>'La ubicacion se ha insertado correctamente!');
            return new Response(json_encode($res));
        } else {
            return new Response('<html><h2>la ubicacion no se ha creado</h2></html>');
        }

    }


}
