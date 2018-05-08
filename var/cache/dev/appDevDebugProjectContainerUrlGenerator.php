<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
<<<<<<< HEAD
        'nieuwproduct' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwProduct',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/nieuw',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
=======
        'alleartikelen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::alleArtikelen',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alle/artikelen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/arikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
<<<<<<< HEAD
<<<<<<< HEAD
        'artikelwijzigen' => array (  0 =>   array (    0 => 'artikelnummer',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::wijzigArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'artikelnummer',    ),    1 =>     array (      0 => 'text',      1 => '/artikel/wijzig',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
=======
        'alleklanten' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::alleKlanten',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alle/klanten',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/artikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
>>>>>>> 5619b66265752583316922f5d24c6a749114b969
=======
        'alleklanten' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::alleKlanten',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alle/klanten',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/artikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
=======
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/arikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
<<<<<<< HEAD
        'nieuwbestelserie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwBestelserie',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/bestelserie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
=======
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> 7bf0e977af59a647fc212a7e67a7f96dabb5c390
>>>>>>> 032539f35ec64cd2e4a6064ae989efdd5d67248b
>>>>>>> parent of 5619b66... homepage working again
=======
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/arikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> parent of 389fddd... homepage working
=======
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> parent of 05c9e36... wijzig artikel added
=======
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/arikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> parent of 389fddd... homepage working
=======
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/arikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> parent of 389fddd... homepage working
=======
        'nieuwartikel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArtikelController::nieuwArtikel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nieuw/arikel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> parent of 389fddd... homepage working
=======
>>>>>>> 55d5363a366b44b7467d0f3533b181173958f8eb
>>>>>>> parent of 05c9e36... wijzig artikel added
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomePageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomePageController::loadHomePage',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
