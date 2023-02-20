<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/booking' => [[['_route' => 'app_booking_index', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/company' => [[['_route' => 'app_company_index', '_controller' => 'App\\Controller\\CompanyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/company/new' => [[['_route' => 'app_company_new', '_controller' => 'App\\Controller\\CompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_event_category_index', '_controller' => 'App\\Controller\\EventCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'app_event_category_new', '_controller' => 'App\\Controller\\EventCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/newAlmacen' => [[['_route' => 'app_event_newAlmacen', '_controller' => 'App\\Controller\\EventController::newAlmacen'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/job' => [[['_route' => 'app_job_index', '_controller' => 'App\\Controller\\JobController::index'], null, ['GET' => 0], null, true, false, null]],
        '/job/new' => [[['_route' => 'app_job_new', '_controller' => 'App\\Controller\\JobController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/monthly' => [[['_route' => 'app_monthly', '_controller' => 'App\\Controller\\MonthlyController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/task/seeAsignedTasks' => [[['_route' => 'app_seeAsignedTasks', '_controller' => 'App\\Controller\\TaskController::seeAsignedTasks'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/task/seeTaskToday' => [[['_route' => 'app_ seeTaskToday', '_controller' => 'App\\Controller\\TaskController::seeTaskToday'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/task' => [[['_route' => 'app_task_index', '_controller' => 'App\\Controller\\TaskController::index'], null, ['GET' => 0], null, true, false, null]],
        '/task/new' => [[['_route' => 'app_task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/warehouse' => [[['_route' => 'app_warehouse', '_controller' => 'App\\Controller\\WarehouseController::index'], null, null, null, false, false, null]],
        '/warehouse/vacations' => [[['_route' => 'app_warehouse_vacation', '_controller' => 'App\\Controller\\WarehouseController::vacation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/company/show/([^/]++)(*:191)'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ompany/([^/]++)/edit(*:233)'
                        .'|ategory/([^/]++)(?'
                            .'|(*:260)'
                            .'|/edit(*:273)'
                            .'|(*:281)'
                        .')'
                    .')'
                    .'|event/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:316)'
                            .'|report(*:330)'
                        .')'
                        .'|(*:339)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:364)'
                        .'|/(?'
                            .'|edit(*:380)'
                            .'|report(*:394)'
                            .'|verify(*:408)'
                        .')'
                        .'|(*:417)'
                    .')'
                .')'
                .'|/event/([^/]++)(*:442)'
                .'|/job/([^/]++)(?'
                    .'|(*:466)'
                    .'|/edit(*:479)'
                    .'|(*:487)'
                .')'
                .'|/register/([^/]++)(*:514)'
                .'|/task/([^/]++)(?'
                    .'|(*:539)'
                    .'|/(?'
                        .'|edit(?'
                            .'|(*:558)'
                            .'|/([^/]++)(*:575)'
                        .')'
                        .'|updateState(*:595)'
                    .')'
                    .'|(*:604)'
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
        191 => [[['_route' => 'app_company_show', '_controller' => 'App\\Controller\\CompanyController::show'], ['nif'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        233 => [[['_route' => 'app_company_edit', '_controller' => 'App\\Controller\\CompanyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_event_category_show', '_controller' => 'App\\Controller\\EventCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        273 => [[['_route' => 'app_event_category_edit', '_controller' => 'App\\Controller\\EventCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => 'app_event_category_delete', '_controller' => 'App\\Controller\\EventCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        330 => [[['_route' => 'app_event_report', '_controller' => 'App\\Controller\\EventController::report'], ['id'], ['GET' => 0], null, false, false, null]],
        339 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        380 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        394 => [[['_route' => 'app_user_report', '_controller' => 'App\\Controller\\UserController::report'], ['id'], ['GET' => 0], null, false, false, null]],
        408 => [[['_route' => 'app_user_verify', '_controller' => 'App\\Controller\\UserController::verify'], ['id'], ['GET' => 0], null, false, false, null]],
        417 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        442 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_job_show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_job_edit', '_controller' => 'App\\Controller\\JobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        487 => [[['_route' => 'app_job_delete', '_controller' => 'App\\Controller\\JobController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        514 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['nif'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        539 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        558 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        575 => [[['_route' => 'app_task_edit_State_request', '_controller' => 'App\\Controller\\TaskController::editState_request'], ['id', 'state_request'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        595 => [[['_route' => 'app_task_update_State', '_controller' => 'App\\Controller\\TaskController::UpdateState'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        604 => [
            [['_route' => 'app_task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
