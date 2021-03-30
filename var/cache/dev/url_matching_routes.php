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
        '/' => [[['_route' => 'app_homepage_index', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/programme' => [[['_route' => 'app_homepage_programme', '_controller' => 'App\\Controller\\HomepageController::programme'], null, null, null, false, false, null]],
        '/livevideos' => [[['_route' => 'app_homepage_livevideos', '_controller' => 'App\\Controller\\HomepageController::livevideos'], null, null, null, false, false, null]],
        '/aide' => [[['_route' => 'app_homepage_aide', '_controller' => 'App\\Controller\\HomepageController::aide'], null, null, null, false, false, null]],
        '/manage/utilisateurs' => [[['_route' => 'utilisateurs', '_controller' => 'App\\Controller\\HomepageController::usersList'], null, null, null, false, false, null]],
        '/manage/admins' => [[['_route' => 'admins', '_controller' => 'App\\Controller\\HomepageController::adminsList'], null, null, null, false, false, null]],
        '/manage/juges' => [[['_route' => 'juges', '_controller' => 'App\\Controller\\HomepageController::jugesList'], null, null, null, false, false, null]],
        '/manage/mentors' => [[['_route' => 'mentors', '_controller' => 'App\\Controller\\HomepageController::mentorsList'], null, null, null, false, false, null]],
        '/manage/competitions' => [[['_route' => 'competitionsList', '_controller' => 'App\\Controller\\HomepageController::competitionsList'], null, null, null, false, false, null]],
        '/manage/equipes' => [[['_route' => 'equipes', '_controller' => 'App\\Controller\\HomepageController::equipeList'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new_utilisateur', '_controller' => 'App\\Controller\\HomepageController::newUser'], null, null, null, false, false, null]],
        '/new_competition' => [[['_route' => 'new_competition', '_controller' => 'App\\Controller\\HomepageController::newCompetition'], null, null, null, false, false, null]],
        '/manage_competition' => [[['_route' => 'manage_competition', '_controller' => 'App\\Controller\\HomepageController::manage_competition'], null, null, null, false, false, null]],
        '/new_competiton' => [[['_route' => 'new_competiton', '_controller' => 'App\\Controller\\HomepageController::new_competiton'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_registration_register', '_controller' => 'App\\Controller\\RegistrationController::registerAction'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registrationMentor'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                .'|/competition(?'
                    .'|/([^/]++)(?'
                        .'|(*:196)'
                        .'|/(?'
                            .'|classement(*:218)'
                            .'|new_equipe(*:236)'
                        .')'
                    .')'
                    .'|sList/modifier/([^/]++)(*:269)'
                .')'
                .'|/utilisateurs/modifier/([^/]++)(*:309)'
                .'|/equipes/modifier/([^/]++)(*:343)'
                .'|/delete(?'
                    .'|User/([^/]++)(*:374)'
                    .'|Competition/([^/]++)(*:402)'
                    .'|Equipe/([^/]++)(*:425)'
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
        196 => [[['_route' => 'app_homepage_competition', '_controller' => 'App\\Controller\\HomepageController::competition'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'classement_competition', '_controller' => 'App\\Controller\\HomepageController::classement_competition'], ['id'], null, null, false, false, null]],
        236 => [[['_route' => 'new_equipe', '_controller' => 'App\\Controller\\HomepageController::newEquipe'], ['id'], null, null, false, false, null]],
        269 => [[['_route' => 'modifier_competition', '_controller' => 'App\\Controller\\HomepageController::editCompetition'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'modifier_utilisateur', '_controller' => 'App\\Controller\\HomepageController::editUser'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'modifier_equipe', '_controller' => 'App\\Controller\\HomepageController::editEquipe'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'delete_utilisateur', '_controller' => 'App\\Controller\\HomepageController::deleteUser'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'delete_competition', '_controller' => 'App\\Controller\\HomepageController::deleteCompetition'], ['id'], null, null, false, true, null]],
        425 => [
            [['_route' => 'delete_equipe', '_controller' => 'App\\Controller\\HomepageController::deleteEquipe'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
