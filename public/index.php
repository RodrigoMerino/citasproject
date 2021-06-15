<?php
session_start();
date_default_timezone_set("America/El_Salvador");
require '../vendor/autoload.php';
/**
 * calling global .env variables
 */
require_once __DIR__ . '/../app/Config/_env.php';
require_once __DIR__ . '/../app/Helpers/helpers.php';
require_once __DIR__ . '/../core/SessionHandler.php';

$router = new AltoRouter();
$router->map('GET', '/', 'App\controllers\auth\home@homeAction', 'homeAction');
$router->map('GET', '/admin/get-doctors', 'App\controllers\admin\Doctor@getAllAction', 'list_doctors');
$router->map('POST', '/admin/register', 'App\controllers\admin\Doctor@createAction', 'register_doctors');
$router->map('GET', '/admin/register', 'App\controllers\admin\Doctor@createAction', 'register');
$router->map('GET', '/admin/get-patients', 'App\controllers\admin\Patient@getAllAction', 'list_patients');
$router->map('POST', '/admin/delete/[i:id]', 'App\controllers\admin\Doctor@deleteAction', 'delete_delete');

$router->map('GET', '/admin/status/update/[i:id]', 'App\controllers\admin\Patient@changeStatusAction', 'status');

$router->map('GET', '/doctor/create-schedule', 'App\controllers\doctor\Appointment@createAction', 'doctor-schedule');
$router->map('POST', '/doctor/create-schedule', 'App\controllers\doctor\Appointment@createAction', 'create-doctor-schedule');
$router->map('GET', '/doctor/get-appointments', 'App\controllers\doctor\Appointment@getAllAction', 'get-appointments');
$router->map('GET', '/doctor/check-appointments', 'App\controllers\doctor\Appointment@updateAppointmentAction', 'view-appointments');
$router->map('POST', '/doctor/check-appointments', 'App\controllers\doctor\Appointment@checkAppointmentAction', 'check-appointments');
$router->map('POST', '/doctor/update-appointments', 'App\controllers\doctor\Appointment@updateAppointmentAction', 'update-appointments');

$router->map('GET', '/doctor/patient-today', 'App\controllers\doctor\Prescription@getPatientsAction', 'get-patients');
$router->map('POST', '/doctor/patient-today', 'App\controllers\doctor\Prescription@createPrescriptionAction', 'create-prescription');
$router->map('GET', '/prescription/[i:id]/[*:date]', 'App\controllers\doctor\Prescription@getPatientPrescriptionAction', 'get-prescription');
$router->map('GET', '/doctor/all-prescriptions', 'App\controllers\doctor\Prescription@getPrescriptionsAction', 'get-prescriptions');


$router->map('POST', '/book-appointment', 'App\controllers\auth\Home@createBookingAction', 'create-booking');

$router->map('GET', '/register', 'App\controllers\auth\auth@registerAction', 'registerAction');
$router->map('POST', '/register', 'App\controllers\auth\auth@registerAction', 'insertAction');
$router->map('GET', '/login', 'App\controllers\auth\auth@loginAction', 'loginAction');
$router->map('POST', '/login', 'App\controllers\auth\auth@loginAction', 'loginUserAction');
$router->map('GET', '/new-Appointment/[i:id]/[*:user]', 'App\controllers\auth\home@newAppointmentAction', 'newAppointmentAction');
$router->map('GET', '/logout', 'App\controllers\auth\auth@logoutAction', 'logoutAction');

$router->map('GET', '/admin/getDoctors', 'App\controllers\Admin\Doctor@getallAction', 'getAllAction');
$router->map('GET', '/my-bookings', 'App\controllers\auth\Home@getPatientBookingAction', 'patient-booking');
$router->map('GET', '/profile', 'App\controllers\auth\Home@userProfileAction', 'patient-profile');
$router->map('GET', '/my-prescriptions', 'App\controllers\auth\Home@myPrescriptionsAction', 'my-prescriptions');

$router->map('POST', '/profile', 'App\controllers\auth\Home@editProfileAction', 'edit-profile');
new Core\RouterHandler($router);

// $match = $router->match();
// var_dump($match);

// if ($match) {
//     list($controller,$method) = explode('@',$match['target']);
//     if (is_callable(array(new $controller,$method))) {
//         call_user_func_array(array(new $controller, $method),array($match['params']));
    
//     }
//     else{
//         echo 'the method'.$method. 'is not defined in' .$controller;
//     }
// } else {
//     echo 'home page no found';
// }

// $router = new Core\Router();
// new \Core\Model();

// //$router->add('', ['controller' => 'Home', 'action' => 'Admin','namespace'=>'Admin']);
// $router->add('', ['controller' => 'Home', 'action' => 'home','namespace'=>'Auth']);
// $router->add('{controller}/{action}');
// $router->add('{controller}/{action}/{id:\d+}');
// $router->add('admin/{controller}/{action}',['namespace'=>'Admin']);
// $router->add('admin/{controller}/{id:\d+}/{action}',['namespace'=>'Admin']);
// $router->add('{controller}/{action}',['namespace'=>'Auth']);
// $router->add('doctor/{controller}/{action}',['namespace'=>'doctor']);
// $router->add('{controller}/{action}/{id:\d+}/{id:\d+}',['namespace'=>'Auth']);

// // echo '<p>';
// // getenv('APP_URL');

// //  echo '</p>';
//  $router->dispatch($_SERVER['QUERY_STRING']);
// var_dump($router->getRoutes()); 
// var_dump($router->getParams()); 