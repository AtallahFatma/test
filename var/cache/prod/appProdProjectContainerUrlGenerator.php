<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'crud_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test3_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test3Controller::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test3/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test3_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test3Controller::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test3/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test3_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test3Controller::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test3_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test3Controller::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/test3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test3_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test3Controller::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test4_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test4Controller::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test4/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test4_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test4Controller::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test4/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test4_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test4Controller::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test4',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test4_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test4Controller::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/test4',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test4_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CrudBundle\\Controller\\Test4Controller::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test4',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
