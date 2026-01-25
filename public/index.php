<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$_SESSION["user"] = [
    "id" => 2,
    "name" => "hamza",
    "email"=> "hamza@gmail.com",
    "user_id" => 2,
    "role" => "client",
];

// php -S localhost:8000 -t public
if (php_sapi_name() === 'cli-server') { // check for php -S utilisation
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Get url
    $uri = trim($uri, '/');
    $_GET['url'] = $uri;
}

require_once __DIR__ . '/../src/Helpers/Router.php';


Router::get('', 'AvocatController', 'index');

Router::get('avocats', 'AvocatController', 'index');
Router::get('avocat/profile', 'AvocatController', 'profile');
Router::get('avocat/create', 'AvocatController', 'create');
Router::get('avocat/edit', 'AvocatController', 'edit');
Router::get('avocat/update', 'AvocatController', 'update');
Router::get('avocat/delete', 'AvocatController', 'delete');

Router::get('update/user', 'UserController', 'edit');
Router::get('store/user', 'UserController', 'update');

Router::get('profs/stats', 'DashboardController', 'index');

Router::get('huissiers', 'HuissierController', 'index');
Router::get('huissier/profile', 'HuissierController', 'profile');
Router::get('huissier/create', 'HuissierController', 'create');
Router::get('huissier/edit', 'HuissierController', 'edit');
Router::get('huissier/update', 'HuissierController', 'update');
Router::get('huissier/delete', 'HuissierController', 'delete');

Router::get('admin/profile', 'AdminController', 'profile');
Router::get('admin/dashboard', 'AdminController', 'index');
Router::get('admin/tout/demandes', 'AdminController', 'listDemandes');
Router::get('admin/professional/accept', 'AdminController', 'acceptProfessional');
Router::get('admin/professional/reject', 'AdminController', 'rejectProfessional');
Router::get('admin/professional/profile', 'AdminController', 'showProfile');
Router::get('admin/professional/pdf', 'AdminController', 'showPdf');

Router::get('stats', 'StatsController', 'index');

Router::get('toggle_form/create', 'AvocatController', 'createDynamic');

Router::get('reservations', 'ReservationController', 'index');
Router::get('reservations/create', 'ReservationController', 'create');
Router::get('reservations/accept', 'ReservationController', 'accept');
Router::get('reservations/reject', 'ReservationController', 'reject');
Router::get('reservations/delete', 'ReservationController', 'delete');
Router::get('User/signup', 'UserController', 'signUp');
Router::get('User/signin', 'UserController', 'signIn');
Router::get('User/verification', 'UserController', 'emailVerification');
Router::get('verificationform', 'UserController', 'showconfirm');
Router::get('showformpro', 'UserController', 'showformpro');
Router::get('showconn', 'UserController', 'showconn');

Router::get('emploi', 'ProfessionnelController', 'AjouteEmploi');
Router::get('emploi/edit', 'ProfessionnelController', 'editEmploi');
Router::get('reservation/disponibilite', 'ProfessionnelController', 'getProfsDispos');
Router::get('reservation', 'ReservationController', 'showReservationForm');
// Router::get('/reservations/create', 'ReservationController', 'create');

Router::dispatch();