<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'search_books' => [[], ['_controller' => 'App\\Controller\\HomeController::searchBooks'], [], [['text', '/search']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_book_index' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/book/']], [], [], []],
    'app_book_new' => [[], ['_controller' => 'App\\Controller\\BookController::new'], [], [['text', '/book/new']], [], [], []],
    'app_book_show' => [['id'], ['_controller' => 'App\\Controller\\BookController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'app_book_edit' => [['id'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'app_book_delete' => [['id'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'payement' => [[], ['_controller' => 'App\\Controller\\CartController::payement'], [], [['text', '/cartPayement']], [], [], []],
    'app_genre' => [[], ['_controller' => 'App\\Controller\\GenreController::index'], [], [['text', '/genre']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'cgu' => [[], ['_controller' => 'App\\Controller\\HomeController::indexCgu'], [], [['text', '/cgu']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\HomeController::indexContact'], [], [['text', '/contact']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::indexAbout'], [], [['text', '/about']], [], [], []],
    'ageVerif' => [[], ['_controller' => 'App\\Controller\\HomeController::verif'], [], [['text', '/ageVerif']], [], [], []],
    'searchBooks' => [[], ['_controller' => 'App\\Controller\\HomeController::searchBooks'], [], [['text', '/search']], [], [], []],
    'livres.detail' => [['id'], ['_controller' => 'App\\Controller\\LivresController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/livres']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'search_api' => [[], ['_controller' => 'App\\Controller\\HomeController::searchApi'], [], [['text', '/api/search']], [], [], []],
];
