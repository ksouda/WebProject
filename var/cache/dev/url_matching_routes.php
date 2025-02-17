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
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/atelierenligne/admin' => [[['_route' => 'app_atelierenligneadmin', '_controller' => 'App\\Controller\\AtelierenligneController::indexadmin'], null, ['GET' => 0], null, false, false, null]],
        '/atelierenligne' => [[['_route' => 'app_atelierenligne', '_controller' => 'App\\Controller\\AtelierenligneController::index'], null, ['GET' => 0], null, false, false, null]],
        '/atelierenligne/new' => [[['_route' => 'app_atelierenligne_new', '_controller' => 'App\\Controller\\AtelierenligneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/atelier' => [[['_route' => 'app_front_atelier', '_controller' => 'App\\Controller\\FrontAtelierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontUser::index'], null, null, null, false, false, null]],
        '/app_home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/front/materiaux' => [[['_route' => 'app_front_materiaux', '_controller' => 'App\\Controller\\IndexController::indexfront'], null, null, null, false, false, null]],
        '/client/liste' => [[['_route' => 'app_reclamation_liste_client', '_controller' => 'App\\Controller\\IndexController::listeClient'], null, null, null, false, false, null]],
        '/inscriptionclient' => [[['_route' => 'app_inscriptions', '_controller' => 'App\\Controller\\InscriptionAtelierController::showinscri'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/materiaux' => [[['_route' => 'app_materiaux_index', '_controller' => 'App\\Controller\\MateriauxController::index'], null, ['GET' => 0], null, false, false, null]],
        '/materiaux/new' => [[['_route' => 'app_materiaux_new', '_controller' => 'App\\Controller\\MateriauxController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/ajouter' => [[['_route' => 'app_reclamation_ajouter', '_controller' => 'App\\Controller\\ReclamationController::ajouter'], null, null, null, false, false, null]],
        '/reclamation/admin/liste' => [[['_route' => 'app_reclamation_liste_admin', '_controller' => 'App\\Controller\\ReclamationController::liste'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reponse/admin/liste' => [[['_route' => 'app_reponse_liste_admin', '_controller' => 'App\\Controller\\ReponseController::liste'], null, null, null, false, false, null]],
        '/reponse/client/liste' => [[['_route' => 'app_reponse_liste_client', '_controller' => 'App\\Controller\\ReponseController::listeClient'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'app_users', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|telier(?'
                        .'|enligne/(?'
                            .'|([^/]++)/edit(*:240)'
                            .'|admin/([^/]++)(*:262)'
                            .'|([^/]++)(*:278)'
                        .')'
                        .'|/inscription/([^/]++)(*:308)'
                    .')'
                    .'|nnulation/([^/]++)(*:335)'
                .')'
                .'|/fournisseur/(?'
                    .'|fournisseur/([^/]++)(*:380)'
                    .'|([^/]++)(?'
                        .'|/edit(*:404)'
                        .'|(*:412)'
                    .')'
                .')'
                .'|/profil/(?'
                    .'|(\\d+)(*:438)'
                    .'|update/(\\d+)(*:458)'
                    .'|photo/update/(\\d+)(*:484)'
                .')'
                .'|/materiaux/([^/]++)(?'
                    .'|(*:515)'
                    .'|/edit(*:528)'
                    .'|(*:536)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|modifier(?'
                            .'|/([^/]++)(*:584)'
                            .'|\\-statut/([^/]++)(*:609)'
                        .')'
                        .'|supprimer/([^/]++)(*:636)'
                        .'|admin/([^/]++)/consulter(*:668)'
                        .'|client/([^/]++)/consulter(*:701)'
                    .')'
                    .'|ponse/(?'
                        .'|ajouter/([^/]++)(*:735)'
                        .'|modifier/([^/]++)(*:760)'
                    .')'
                .')'
                .'|/edituser/([^/]++)(*:788)'
                .'|/deleteuser/([^/]++)(*:816)'
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
        240 => [[['_route' => 'app_atelierenligne_edit', '_controller' => 'App\\Controller\\AtelierenligneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'app_atelierenligne_deleteadmin', '_controller' => 'App\\Controller\\AtelierenligneController::deleteadmin'], ['id'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_atelierenligne_delete', '_controller' => 'App\\Controller\\AtelierenligneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'app_inscription_atelier', '_controller' => 'App\\Controller\\InscriptionAtelierController::inscrire'], ['id'], null, null, false, true, null]],
        335 => [[['_route' => 'app_annulation', '_controller' => 'App\\Controller\\InscriptionAtelierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        380 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'profil_page', '_controller' => 'App\\Controller\\IndexController::profile'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'profil_update', '_controller' => 'App\\Controller\\IndexController::updateProfile'], ['id'], ['POST' => 0], null, false, true, null]],
        484 => [[['_route' => 'update_photo', '_controller' => 'App\\Controller\\IndexController::updatePhoto'], ['id'], ['POST' => 0], null, false, true, null]],
        515 => [[['_route' => 'app_materiaux_show', '_controller' => 'App\\Controller\\MateriauxController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'app_materiaux_edit', '_controller' => 'App\\Controller\\MateriauxController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        536 => [[['_route' => 'app_materiaux_delete', '_controller' => 'App\\Controller\\MateriauxController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        584 => [[['_route' => 'app_reclamation_modifier', '_controller' => 'App\\Controller\\ReclamationController::modifier'], ['id'], null, null, false, true, null]],
        609 => [[['_route' => 'app_reclamation_modifier_statut', '_controller' => 'App\\Controller\\ReclamationController::modifierStatut'], ['id'], ['POST' => 0], null, false, true, null]],
        636 => [[['_route' => 'app_reclamation_supprimer', '_controller' => 'App\\Controller\\ReclamationController::supprimer'], ['id'], ['POST' => 0], null, false, true, null]],
        668 => [[['_route' => 'app_reclamation_consulter_admin', '_controller' => 'App\\Controller\\ReclamationController::consulterAdmin'], ['id'], ['GET' => 0], null, false, false, null]],
        701 => [[['_route' => 'app_reclamation_consulter_client', '_controller' => 'App\\Controller\\ReclamationController::consulterClient'], ['id'], ['GET' => 0], null, false, false, null]],
        735 => [[['_route' => 'app_reponse_ajouter', '_controller' => 'App\\Controller\\ReponseController::ajouter'], ['id'], null, null, false, true, null]],
        760 => [[['_route' => 'app_reponse_modifier', '_controller' => 'App\\Controller\\ReponseController::modifier'], ['id'], null, null, false, true, null]],
        788 => [[['_route' => 'edit_user', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], ['POST' => 0], null, false, true, null]],
        816 => [
            [['_route' => 'deleteuser', '_controller' => 'App\\Controller\\UserController::deleteauth'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
