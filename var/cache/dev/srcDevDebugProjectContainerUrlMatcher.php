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

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/':
                // default
                return array('_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index');
                // index
                return array('_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index');
                break;
            default:
                $routes = array(
                    '/cj/offres/' => array(array('_route' => 'cj_offres_index', '_controller' => 'App\\Controller\\CjOffresController::index'), null, array('GET' => 0), null),
                    '/cj/offres/new' => array(array('_route' => 'cj_offres_new', '_controller' => 'App\\Controller\\CjOffresController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/deco' => array(array('_route' => 'deconnexion', '_controller' => 'App\\Controller\\ClientController::deco'), null, null, null),
                    '/client' => array(array('_route' => 'client', '_controller' => 'App\\Controller\\ClientController::index'), null, null, null),
                    '/apropos' => array(array('_route' => 'apropos', '_controller' => 'App\\Controller\\DefaultController::apropos'), null, null, null),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'), null, null, null),
                    '/alcalistore' => array(array('_route' => 'alcalistore', '_controller' => 'App\\Controller\\DefaultController::alcalistore'), null, null, null),
                    '/alcalistech' => array(array('_route' => 'alcalistech', '_controller' => 'App\\Controller\\DefaultController::alcalistech'), null, null, null),
                    '/test' => array(array('_route' => 'test', '_controller' => 'App\\Controller\\DefaultController::test'), null, null, null),
                    '/search' => array(array('_route' => 'search', '_controller' => 'App\\Controller\\SearchController::recherche'), null, array('POST' => 0), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null),
                    '/logout' => array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/profile/' => array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), null, array('GET' => 0), null),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/' => array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/cj/offres/([^/]++)(?'
                        .'|(*:29)'
                        .'|/edit(*:41)'
                        .'|(*:48)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:87)'
                        .'|wdt/([^/]++)(*:106)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:152)'
                                .'|router(*:166)'
                                .'|exception(?'
                                    .'|(*:186)'
                                    .'|\\.css(*:199)'
                                .')'
                            .')'
                            .'|(*:209)'
                        .')'
                    .')'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:248)'
                        .'|setting/reset/([^/]++)(*:278)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            29 => array(array('_route' => 'cj_offres_show', '_controller' => 'App\\Controller\\CjOffresController::show'), array('id'), array('GET' => 0), null),
                            41 => array(array('_route' => 'cj_offres_edit', '_controller' => 'App\\Controller\\CjOffresController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            48 => array(array('_route' => 'cj_offres_delete', '_controller' => 'App\\Controller\\CjOffresController::delete'), array('id'), array('DELETE' => 0), null),
                            87 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            106 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            152 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            166 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            186 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            199 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            209 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            248 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null),
                            278 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (278 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
