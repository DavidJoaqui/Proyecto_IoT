<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'GestionBundle\\Controller\\GestionController::homeAction',  '_route' => 'user_homepage',);
        }

        // ubicaciones_index
        if ($pathinfo === '/ubicaciones/index') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ubicaciones_index;
            }

            return array (  '_controller' => 'GestionBundle\\Controller\\GestionController::listUbicacionesAction',  '_route' => 'ubicaciones_index',);
        }
        not_ubicaciones_index:

        // crear_ubicacion
        if ($pathinfo === '/crear/ubicacion') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_crear_ubicacion;
            }

            return array (  '_controller' => 'GestionBundle\\Controller\\GestionController::addUbicacionAction',  '_route' => 'crear_ubicacion',);
        }
        not_crear_ubicacion:

        if (0 === strpos($pathinfo, '/vehiculo')) {
            // vehiculos_index
            if ($pathinfo === '/vehiculos/index') {
                return array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::listVehiculosAction',  '_route' => 'vehiculos_index',);
            }

            // vehiculos_add
            if ($pathinfo === '/vehiculo/add') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehiculos_add;
                }

                return array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::addAction',  '_route' => 'vehiculos_add',);
            }
            not_vehiculos_add:

            // create_vehiculo
            if ($pathinfo === '/vehiculo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_create_vehiculo;
                }

                return array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::createAction',  '_route' => 'create_vehiculo',);
            }
            not_create_vehiculo:

            // vehiculo_view
            if (0 === strpos($pathinfo, '/vehiculo/view') && preg_match('#^/vehiculo/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehiculo_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculo_view')), array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::viewAction',));
            }
            not_vehiculo_view:

            // vehiculo_delete
            if (0 === strpos($pathinfo, '/vehiculo/delete') && preg_match('#^/vehiculo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vehiculo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculo_delete')), array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::deleteAction',));
            }
            not_vehiculo_delete:

            // vehiculo_edit
            if (0 === strpos($pathinfo, '/vehiculo/edit') && preg_match('#^/vehiculo/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculo_edit')), array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::editAction',));
            }

            // vehiculo_update
            if (0 === strpos($pathinfo, '/vehiculo/update') && preg_match('#^/vehiculo/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vehiculo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculo_update')), array (  '_controller' => 'GestionBundle\\Controller\\VehiculoController::updateAction',));
            }
            not_vehiculo_update:

        }

        if (0 === strpos($pathinfo, '/propietario')) {
            // propietarios_index
            if ($pathinfo === '/propietarios/index') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_propietarios_index;
                }

                return array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::indexAction',  '_route' => 'propietarios_index',);
            }
            not_propietarios_index:

            // propietario_add
            if ($pathinfo === '/propietario/add') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_propietario_add;
                }

                return array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::addAction',  '_route' => 'propietario_add',);
            }
            not_propietario_add:

            // propietario_create
            if ($pathinfo === '/propietario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_propietario_create;
                }

                return array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::createAction',  '_route' => 'propietario_create',);
            }
            not_propietario_create:

            // propietario_view
            if (0 === strpos($pathinfo, '/propietario/view') && preg_match('#^/propietario/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_propietario_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_view')), array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::viewAction',));
            }
            not_propietario_view:

            // propietario_delete
            if (0 === strpos($pathinfo, '/propietario/delete') && preg_match('#^/propietario/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_propietario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_delete')), array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::deleteAction',));
            }
            not_propietario_delete:

            // propietario_edit
            if (0 === strpos($pathinfo, '/propietario/edit') && preg_match('#^/propietario/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_edit')), array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::editAction',));
            }

            // propietario_update
            if (0 === strpos($pathinfo, '/propietario/update') && preg_match('#^/propietario/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_propietario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_update')), array (  '_controller' => 'GestionBundle\\Controller\\PropietarioController::updateAction',));
            }
            not_propietario_update:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'GestionBundle\\Controller\\GestionController::homeAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'GestionBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'GestionBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'user_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
