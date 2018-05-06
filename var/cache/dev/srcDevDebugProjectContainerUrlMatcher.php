<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/test')) {
            // app_test_detail
            if (0 === strpos($pathinfo, '/test/detail') && preg_match('#^/test/detail/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_test_detail')), array (  '_controller' => 'App\\Controller\\TestController::detail',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_app_test_detail;
                }

                return $ret;
            }
            not_app_test_detail:

            // app_test_list
            if ('/test/list' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\TestController::list',  '_route' => 'app_test_list',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_app_test_list;
                }

                return $ret;
            }
            not_app_test_list:

            // app_test_create
            if ('/test/create' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\TestController::create',  '_route' => 'app_test_create',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_app_test_create;
                }

                return $ret;
            }
            not_app_test_create:

        }

        elseif (0 === strpos($pathinfo, '/users')) {
            // new_users
            if (0 === strpos($pathinfo, '/users/new') && preg_match('#^/users/new/(?P<mail>[^/]++)/(?P<username>[^/]++)/(?P<pass>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'new_users')), array (  '_controller' => 'App\\Controller\\UserController::newUsersAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_new_users;
                }

                return $ret;
            }
            not_new_users:

            // users_auth
            if (0 === strpos($pathinfo, '/users/auth') && preg_match('#^/users/auth/(?P<email>[^/]++)/(?P<pass>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'users_auth')), array (  '_controller' => 'App\\Controller\\UserController::usersAuthAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_users_auth;
                }

                return $ret;
            }
            not_users_auth:

            // get_user
            if (preg_match('#^/users/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'App\\Controller\\UserController::getUserAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_user;
                }

                return $ret;
            }
            not_get_user:

            // new_usersnew_users
            if (0 === strpos($pathinfo, '/users/new') && preg_match('#^/users/new/(?P<mail>[^/]++)/(?P<username>[^/]++)/(?P<pass>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'new_usersnew_users')), array (  '_controller' => 'App\\Controller\\UserController:newUsersAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_new_usersnew_users;
                }

                return $ret;
            }
            not_new_usersnew_users:

            // users_authusers_auth
            if (0 === strpos($pathinfo, '/users/auth') && preg_match('#^/users/auth/(?P<email>[^/]++)/(?P<pass>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'users_authusers_auth')), array (  '_controller' => 'App\\Controller\\UserController:usersAuthAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_users_authusers_auth;
                }

                return $ret;
            }
            not_users_authusers_auth:

            // get_userget_user
            if (preg_match('#^/users/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_userget_user')), array (  '_controller' => 'App\\Controller\\UserController:getUserAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_userget_user;
                }

                return $ret;
            }
            not_get_userget_user:

        }

        // app.swagger
        if ('/api/doc.json' === $pathinfo) {
            $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger',  '_route' => 'app.swagger',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_appswagger;
            }

            return $ret;
        }
        not_appswagger:

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // fos_oauth_server_token
        if ('/oauth/v2/token' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_oauth_server_token;
            }

            return $ret;
        }
        not_fos_oauth_server_token:

        // fos_oauth_server_authorize
        if ('/oauth/v2/auth' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_oauth_server.controller.authorize:authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_oauth_server_authorize;
            }

            return $ret;
        }
        not_fos_oauth_server_authorize:

        // nelmio_api_doc.swagger_ui
        if ('/documentation' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'nelmio_api_doc.swagger_ui',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_nelmio_api_docswagger_ui;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'nelmio_api_doc.swagger_ui'));
            }

            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_nelmio_api_docswagger_ui;
            }

            return $ret;
        }
        not_nelmio_api_docswagger_ui:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
