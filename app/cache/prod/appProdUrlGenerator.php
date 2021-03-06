<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\GestionController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ubicaciones_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\GestionController::listUbicacionesAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ubicaciones/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crear_ubicacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\GestionController::addUbicacionAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crear/ubicacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vehiculos_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::listVehiculosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vehiculos/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vehiculos_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::addAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vehiculo/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_vehiculo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vehiculo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vehiculo_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::viewAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vehiculo/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vehiculo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vehiculo/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vehiculo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vehiculo/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vehiculo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\VehiculoController::updateAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vehiculo/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietarios_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/propietarios/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietario_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::addAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/propietario/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/propietario/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietario_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::viewAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/propietario/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietario_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/propietario/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/propietario/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'propietario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\PropietarioController::updateAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/propietario/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\GestionController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
