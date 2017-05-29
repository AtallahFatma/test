<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // crud_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'crud_default_index');
            }

            return array (  '_controller' => 'CrudBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crud_default_index',);
        }

        if (0 === strpos($pathinfo, '/test')) {
            if (0 === strpos($pathinfo, '/test3')) {
                // test3_index
                if (rtrim($pathinfo, '/') === '/test3') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_test3_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'test3_index');
                    }

                    return array (  '_controller' => 'CrudBundle\\Controller\\Test3Controller::indexAction',  '_route' => 'test3_index',);
                }
                not_test3_index:

                // test3_new
                if ($pathinfo === '/test3/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_test3_new;
                    }

                    return array (  '_controller' => 'CrudBundle\\Controller\\Test3Controller::newAction',  '_route' => 'test3_new',);
                }
                not_test3_new:

                // test3_show
                if (preg_match('#^/test3/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_test3_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test3_show')), array (  '_controller' => 'CrudBundle\\Controller\\Test3Controller::showAction',));
                }
                not_test3_show:

                // test3_edit
                if (preg_match('#^/test3/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_test3_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test3_edit')), array (  '_controller' => 'CrudBundle\\Controller\\Test3Controller::editAction',));
                }
                not_test3_edit:

                // test3_delete
                if (preg_match('#^/test3/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_test3_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test3_delete')), array (  '_controller' => 'CrudBundle\\Controller\\Test3Controller::deleteAction',));
                }
                not_test3_delete:

            }

            if (0 === strpos($pathinfo, '/test4')) {
                // test4_index
                if (rtrim($pathinfo, '/') === '/test4') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_test4_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'test4_index');
                    }

                    return array (  '_controller' => 'CrudBundle\\Controller\\Test4Controller::indexAction',  '_route' => 'test4_index',);
                }
                not_test4_index:

                // test4_new
                if ($pathinfo === '/test4/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_test4_new;
                    }

                    return array (  '_controller' => 'CrudBundle\\Controller\\Test4Controller::newAction',  '_route' => 'test4_new',);
                }
                not_test4_new:

                // test4_show
                if (preg_match('#^/test4/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_test4_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test4_show')), array (  '_controller' => 'CrudBundle\\Controller\\Test4Controller::showAction',));
                }
                not_test4_show:

                // test4_edit
                if (preg_match('#^/test4/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_test4_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test4_edit')), array (  '_controller' => 'CrudBundle\\Controller\\Test4Controller::editAction',));
                }
                not_test4_edit:

                // test4_delete
                if (preg_match('#^/test4/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_test4_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test4_delete')), array (  '_controller' => 'CrudBundle\\Controller\\Test4Controller::deleteAction',));
                }
                not_test4_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
