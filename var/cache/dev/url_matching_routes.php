<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/backoff' => [[['_route' => 'app_backoff', '_controller' => 'App\\Controller\\BackoffController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_hompage', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/produit/ajout' => [[['_route' => 'produit_ajout', '_controller' => 'App\\Controller\\ProduitController::ajout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/liste' => [[['_route' => 'produit_liste', '_controller' => 'App\\Controller\\ProduitController::liste'], null, ['GET' => 0], null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion', '_controller' => 'App\\Controller\\PromotionController::index'], null, null, null, false, false, null]],
        '/promotion/ajout' => [[['_route' => 'promotion_ajout', '_controller' => 'App\\Controller\\PromotionController::ajout'], null, null, null, false, false, null]],
        '/promotion/liste' => [[['_route' => 'promotion_liste', '_controller' => 'App\\Controller\\PromotionController::liste'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/pro(?'
                    .'|duit/(?'
                        .'|modifier/([^/]++)(*:234)'
                        .'|supprimer/([^/]++)(*:260)'
                    .')'
                    .'|motion/(?'
                        .'|modifier/([^/]++)(*:296)'
                        .'|supprimer/([^/]++)(*:322)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        234 => [[['_route' => 'produit_modifier', '_controller' => 'App\\Controller\\ProduitController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        260 => [[['_route' => 'produit_supprimer', '_controller' => 'App\\Controller\\ProduitController::supprimer'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'promotion_modifier', '_controller' => 'App\\Controller\\PromotionController::modifier'], ['id'], null, null, false, true, null]],
        322 => [
            [['_route' => 'promotion_supprimer', '_controller' => 'App\\Controller\\PromotionController::supprimer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
