<?php

session_start();


// Check for PHP built-in server usage (php -S localhost:8000 -t public)
if (php_sapi_name() === 'cli-server') {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = trim($uri, '/');
    $_GET['url'] = $uri;
}

require_once __DIR__ . '/../src/Helpers/Router.php';

// 
Router::get('', 'UserController', 'showRegisterForm');          // Landing page
// Router::get('', 'AvocatController', 'index');                // Alternative: Direct to avocats
Router::get('showformpro', 'UserController', 'showformpro');   // Professional signup form
Router::get('showconn', 'UserController', 'showconn');         // Login form
Router::get('verificationform', 'UserController', 'showconfirm'); // Email verification form

// 
Router::get('User/signup', 'UserController', 'signUp');
Router::get('User/signin', 'UserController', 'signIn');
Router::get('User/verification', 'UserController', 'emailVerification');
Router::get('update/user', 'UserController', 'edit');          // Edit user profile
Router::get('store/user', 'UserController', 'update');         // Update user profile

Router::get('avocats', 'AvocatController', 'index');           // List all avocats
Router::get('avocat/profile', 'AvocatController', 'profile');  // View profile
Router::get('avocat/create', 'AvocatController', 'create');    // Create form
Router::get('avocat/edit', 'AvocatController', 'edit');        // Edit form
Router::get('avocat/update', 'AvocatController', 'update');    // Update action
Router::get('avocat/delete', 'AvocatController', 'delete');    // Delete action
Router::get('toggle_form/create', 'AvocatController', 'createDynamic'); // Dynamic form

Router::get('huissiers', 'HuissierController', 'index');       // List all huissiers
Router::get('huissier/profile', 'HuissierController', 'profile'); // View profile
Router::get('huissier/create', 'HuissierController', 'create'); // Create form
Router::get('huissier/edit', 'HuissierController', 'edit');    // Edit form
Router::get('huissier/update', 'HuissierController', 'update'); // Update action
Router::get('huissier/delete', 'HuissierController', 'delete'); // Delete action

Router::get('admin/profile', 'AdminController', 'profile');    // Admin profile
Router::get('admin/dashboard', 'AdminController', 'index');    // Admin dashboard
Router::get('admin/tout/demandes', 'AdminController', 'listDemandes'); // List all requests
Router::get('admin/professional/accept', 'AdminController', 'acceptProfessional');
Router::get('admin/professional/reject', 'AdminController', 'rejectProfessional');
Router::get('admin/professional/profile', 'AdminController', 'showProfile');
Router::get('admin/professional/pdf', 'AdminController', 'showPdf'); // View professional PDF

Router::get('stats', 'StatsController', 'index');              // General stats
Router::get('profs/stats', 'DashboardController', 'index');    // Professional dashboard

<<<<<<< HEAD
Router::get('reservations', 'ReservationController', 'index'); // List reservations
Router::get('reservations/create', 'ReservationController', 'create'); // Create reservation
Router::get('reservations/accept', 'ReservationController', 'accept'); // Accept reservation
Router::get('reservations/reject', 'ReservationController', 'reject'); // Reject reservation
Router::get('reservations/delete', 'ReservationController', 'delete'); // Delete reservation


Router::get('emploi', 'ProfessionnelController', 'AjouteEmploi'); // Add job schedule
Router::get('emploi/edit', 'ProfessionnelController', 'editEmploi'); // Edit job schedule

// Dispatch the router
Router::dispatch();
?>
=======
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
>>>>>>> feature/AvailabilityManagement
