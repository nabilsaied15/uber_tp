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
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'produit_list', '_controller' => 'App\\Controller\\ProduitController::list'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vender' => [[['_route' => 'app_vender', '_controller' => 'App\\Controller\\TableController::vender'], null, null, null, false, false, null]],
        '/user/add' => [[['_route' => 'user_add', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
        '/add-user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
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
                .'|/produit(?'
                    .'|/([^/]++)(?'
                        .'|(*:225)'
                        .'|/edit(*:238)'
                    .')'
                    .'|s/delete/([^/]++)(*:264)'
                .')'
                .'|/commander(?:/([^/]++))?(*:297)'
                .'|/livrer(?:/([^/]++))?(*:326)'
                .'|/user/([^/]++)(*:348)'
                .'|/edit\\-user/([^/]++)(*:376)'
                .'|/delete\\-user/([^/]++)(*:406)'
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
        225 => [
            [['_route' => 'produit_details', '_controller' => 'App\\Controller\\ProduitController::details'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'produit_detail', '_controller' => 'App\\Controller\\ProduitController::detail'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        238 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], null, null, false, false, null]],
        264 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'app_commander', 'status' => 'all', '_controller' => 'App\\Controller\\TableController::commander'], ['status'], null, null, false, true, null]],
        326 => [[['_route' => 'app_livrer', 'status' => 'all', '_controller' => 'App\\Controller\\TableController::livrer'], ['status'], null, null, false, true, null]],
        348 => [[['_route' => 'user_details', '_controller' => 'App\\Controller\\UserController::userDetails'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        406 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
