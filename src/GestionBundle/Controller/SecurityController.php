<?php

namespace GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{

    public function loginAction(){

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername=$authenticationUtils->getLastUsername();
        return $this->render('GestionBundle:Security:login.html.twig',array(
            'last_username'=>$lastUsername,
            'error'=>$error));
    }

    public function loginCheckAction(){

    }


}
