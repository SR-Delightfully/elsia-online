<?php

declare(strict_types=1);

use App\Controllers\AuthController;
use App\Controllers\LandingController;
use App\Controllers\HomeController;
use App\Controllers\ForumCategoriesController;
use App\Controllers\ForumsController;
use App\Controllers\ProfileController;
use App\Controllers\SettingsController;
use App\Helpers\UserContext;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return static function(Slim\App $app): void {

    $app->get('/', [LandingController::class, 'index'])
        ->setName('landing.index');

    $app->get('/home', [HomeController::class, 'index'])
        ->setName('home.index');

    $app->get('/categories', [ForumCategoriesController::class, 'index'])
        ->setName('forums.categories.index');

    $app->get('/forums', [ForumsController::class, 'index'])
        ->setName('forums.index');

    $app->get('/profile', [ProfileController::class, 'index'])
        ->setName('profile.index');

    $app->get('/settings', [SettingsController::class, 'index'])
        ->setName('settings.index');

    $app->get('/sign-up', [AuthController::class, 'showSignupForm'])
        ->setName('auth.signup.form');

    $app->post('/sign-up', [AuthController::class, 'processSignup'])
        ->setName('auth.signup.submit');

    $app->get('/sign-in', [AuthController::class, 'showSigninForm'])
        ->setName('auth.signin.form');

    $app->post('/sign-in', [AuthController::class, 'processSignin'])
        ->setName('auth.signin.submit');

    $app->get('/sign-out', [AuthController::class, 'logout'])
        ->setName('auth.logout');

    $app->get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])
        ->setName('auth.forgotPassword.form');

    $app->post('/forgot-password', [AuthController::class, 'processForgotPassword'])
        ->setName('auth.forgotPassword.submit');

    $app->get('/forgot-email', [AuthController::class, 'showForgotEmailForm'])
        ->setName('auth.forgotEmail.form');

    $app->post('/forgot-email', [AuthController::class, 'processForgotEmail'])
        ->setName('auth.forgotEmail.submit');
};
