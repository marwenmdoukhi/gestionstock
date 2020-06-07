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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/achat' => [[['_route' => 'achat_index', '_controller' => 'App\\Controller\\AchatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/famille' => [[['_route' => 'famille_index', '_controller' => 'App\\Controller\\FamilleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/famille/new' => [[['_route' => 'famille_new', '_controller' => 'App\\Controller\\FamilleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fourniseur' => [[['_route' => 'fourniseur_index', '_controller' => 'App\\Controller\\FourniseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fourniseur/new' => [[['_route' => 'fourniseur_new', '_controller' => 'App\\Controller\\FourniseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/magazin' => [[['_route' => 'magazin_index', '_controller' => 'App\\Controller\\MagazinController::index'], null, ['GET' => 0], null, true, false, null]],
        '/magazin/new' => [[['_route' => 'magazin_new', '_controller' => 'App\\Controller\\MagazinController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reference/achat' => [[['_route' => 'reference_achat_index', '_controller' => 'App\\Controller\\ReferenceAchatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reference/achat/new' => [[['_route' => 'reference_achat_new', '_controller' => 'App\\Controller\\ReferenceAchatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reference' => [[['_route' => 'reference_entre_index', '_controller' => 'App\\Controller\\ReferenceEntreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reference/new' => [[['_route' => 'reference_entre_new', '_controller' => 'App\\Controller\\ReferenceEntreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vente' => [[['_route' => 'vente_index', '_controller' => 'App\\Controller\\VenteController::index'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|chat/(?'
                        .'|new/([^/]++)(*:194)'
                        .'|([^/]++)(?'
                            .'|(*:213)'
                            .'|/edit(*:226)'
                            .'|(*:234)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(?'
                        .'|(*:262)'
                        .'|/edit(*:275)'
                        .'|(*:283)'
                    .')'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:312)'
                    .'|/edit(*:325)'
                    .'|(*:333)'
                .')'
                .'|/f(?'
                    .'|amille/([^/]++)(?'
                        .'|(*:365)'
                        .'|/edit(*:378)'
                        .'|(*:386)'
                    .')'
                    .'|ourniseur/([^/]++)(?'
                        .'|(*:416)'
                        .'|/edit(*:429)'
                        .'|(*:437)'
                    .')'
                .')'
                .'|/magazin/([^/]++)(?'
                    .'|(*:467)'
                    .'|/edit(*:480)'
                    .'|(*:488)'
                .')'
                .'|/reference/(?'
                    .'|achat/([^/]++)(?'
                        .'|(*:528)'
                        .'|/edit(*:541)'
                        .'|(*:549)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:569)'
                        .'|/edit(*:582)'
                        .'|(*:590)'
                    .')'
                .')'
                .'|/vente/(?'
                    .'|new/([^/]++)(*:622)'
                    .'|([^/]++)(?'
                        .'|(*:641)'
                        .'|/edit(*:654)'
                        .'|(*:662)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'achat_new', '_controller' => 'App\\Controller\\AchatController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        213 => [[['_route' => 'achat_show', '_controller' => 'App\\Controller\\AchatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'achat_edit', '_controller' => 'App\\Controller\\AchatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'achat_delete', '_controller' => 'App\\Controller\\AchatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        262 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        283 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        312 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        365 => [[['_route' => 'famille_show', '_controller' => 'App\\Controller\\FamilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'famille_edit', '_controller' => 'App\\Controller\\FamilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        386 => [[['_route' => 'famille_delete', '_controller' => 'App\\Controller\\FamilleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        416 => [[['_route' => 'fourniseur_show', '_controller' => 'App\\Controller\\FourniseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'fourniseur_edit', '_controller' => 'App\\Controller\\FourniseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'fourniseur_delete', '_controller' => 'App\\Controller\\FourniseurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        467 => [[['_route' => 'magazin_show', '_controller' => 'App\\Controller\\MagazinController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'magazin_edit', '_controller' => 'App\\Controller\\MagazinController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'magazin_delete', '_controller' => 'App\\Controller\\MagazinController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        528 => [[['_route' => 'reference_achat_show', '_controller' => 'App\\Controller\\ReferenceAchatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'reference_achat_edit', '_controller' => 'App\\Controller\\ReferenceAchatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        549 => [[['_route' => 'reference_achat_delete', '_controller' => 'App\\Controller\\ReferenceAchatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        569 => [[['_route' => 'reference_entre_show', '_controller' => 'App\\Controller\\ReferenceEntreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'reference_entre_edit', '_controller' => 'App\\Controller\\ReferenceEntreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        590 => [[['_route' => 'reference_entre_delete', '_controller' => 'App\\Controller\\ReferenceEntreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        622 => [[['_route' => 'vente_new', '_controller' => 'App\\Controller\\VenteController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        641 => [[['_route' => 'vente_show', '_controller' => 'App\\Controller\\VenteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        654 => [[['_route' => 'vente_edit', '_controller' => 'App\\Controller\\VenteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        662 => [
            [['_route' => 'vente_delete', '_controller' => 'App\\Controller\\VenteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
