<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/inkoper')) {
            // inkoperalleartikelen
            if ('/inkoper/alleartikelen' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::inkoperAlleartikelen',  '_route' => 'inkoperalleartikelen',);
            }

            // inkoperallebestelorders
            if ('/inkoper/allebestelorders' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BestellingController::inkoperAllebestelorders',  '_route' => 'inkoperallebestelorders',);
            }

            // inkopernieuwartikel
            if ('/inkoper/nieuwartikel' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::inkoperNieuwartikel',  '_route' => 'inkopernieuwartikel',);
            }

            // inkoperwijzigartikel
            if (0 === strpos($pathinfo, '/inkoper/wijzigartikel') && preg_match('#^/inkoper/wijzigartikel/(?P<artikelnummer>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inkoperwijzigartikel')), array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::inkoperWijzigartikel',));
            }

            // inkoperbestelorder
            if ('/inkoper/bestelorder' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BestellingController::inkoperBestelorder',  '_route' => 'inkoperbestelorder',);
            }

            // inkoperhome
            if ('/inkoper/home' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::loadInkoperHomePage',  '_route' => 'inkoperhome',);
            }

            // inkoperzoekomschrijving
            if ('/inkoper/zoekomschrijving' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SearchController::inkoperZoekomschrijving',  '_route' => 'inkoperzoekomschrijving',);
            }

            // inkoperzoekartikel
            if ('/inkoper/zoekartikel' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SearchController::inkoperZoekartikel',  '_route' => 'inkoperzoekartikel',);
            }

        }

        elseif (0 === strpos($pathinfo, '/magazijnmeester')) {
            // magazijnmeesteralleartikelen
            if ('/magazijnmeester/alleartikelen' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::magazijnmeesterAlleartikelen',  '_route' => 'magazijnmeesteralleartikelen',);
            }

            if (0 === strpos($pathinfo, '/magazijnmeester/nieuw')) {
                // magazijnmeesternieuwartikel
                if ('/magazijnmeester/nieuwartikel' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::magazijnmeesterNieuwartikel',  '_route' => 'magazijnmeesternieuwartikel',);
                }

                // magazijnmeesternieuwleverancier
                if ('/magazijnmeester/nieuwleverancier' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\GoederenontvangstController::magazijnmeesterNieuwgoederenontvangst',  '_route' => 'magazijnmeesternieuwleverancier',);
                }

                // magazijnmeesternieuwontvangstregel
                if ('/magazijnmeester/nieuwontvangstregel' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\OntvangstregelController::magazijnmeesterNieuwontvangstregel',  '_route' => 'magazijnmeesternieuwontvangstregel',);
                }

            }

            // magazijnmeesterwijzigartikel
            if (0 === strpos($pathinfo, '/magazijnmeester/wijzigartikel') && preg_match('#^/magazijnmeester/wijzigartikel/(?P<artikelnummer>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazijnmeesterwijzigartikel')), array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::magazijnmeesterWijzigartikel',));
            }

            // magazijnmeesterontvangstmelding
            if ('/magazijnmeester/ontvangstmelding' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\GoederenontvangstController::magazijnmeesterOntvangstmelding',  '_route' => 'magazijnmeesterontvangstmelding',);
            }

            // magazijnmeesterhome
            if ('/magazijnmeester/home' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::loadMagazijnmeesterHomePage',  '_route' => 'magazijnmeesterhome',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\HomePageController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // home
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::loadHomePage',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/administrator')) {
            // administratorhome
            if ('/administrator/home' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::loadAdministratorHomePage',  '_route' => 'administratorhome',);
            }

            // gebruikerregistreren
            if ('/administrator/registeren' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'gebruikerregistreren',);
            }

            // allegebruikers
            if ('/administrator/allegebruikers' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::AlleGebruikers',  '_route' => 'allegebruikers',);
            }

        }

        // alleklanten
        if ('/alle/klanten' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\KlantController::AlleKlanten',  '_route' => 'alleklanten',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
