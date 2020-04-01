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
        '/projects' => [[['_route' => 'show_projects', '_controller' => 'App\\Controller\\ProjectsController::ShowProjects'], null, null, null, false, false, null]],
        '/projects/create' => [[['_route' => 'create_project', '_controller' => 'App\\Controller\\ProjectsController::new'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/ticket/new' => [[['_route' => 'ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/ticket/([^/]++)(?'
                    .'|/(?'
                        .'|comment(*:199)'
                        .'|edit(*:211)'
                        .'|delete(*:225)'
                    .')'
                    .'|(*:234)'
                .')'
                .'|/project/(?'
                    .'|edit/([^/]++)(*:268)'
                    .'|delete/([^/]++)(*:291)'
                    .'|([^/]++)(*:307)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'create_comment', '_controller' => 'App\\Controller\\CommentController::new_comment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        225 => [[['_route' => 'ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], null, null, false, false, null]],
        234 => [[['_route' => 'ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'edit_project', '_controller' => 'App\\Controller\\ProjectsController::update'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'delete_project', '_controller' => 'App\\Controller\\ProjectsController::delete'], ['id'], null, null, false, true, null]],
        307 => [
            [['_route' => 'show_project', '_controller' => 'App\\Controller\\ProjectsController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
