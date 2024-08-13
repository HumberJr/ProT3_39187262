<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('importancia_valor', 'Home::importancia_valor');
$routes->get('voluntariado', 'Home::voluntariado');
$routes->get('login', 'Home::login');

/* rutas del REgistro de usuario*/ 
$routes->get('/voluntariado', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');
 
/*Ruteo del login */
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');

$routes->get('/admin', 'Admin_Controller::index');
$routes->get('/edit', 'Admin_Controller::editar');

//$routes->get('/Admin', 'Admin_Controller');

?>