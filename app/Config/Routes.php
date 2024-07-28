<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('clientes','ClientesController::index');
$routes->get('hoteles','HotelesController::index');
$routes->get('reservaciones','ReservacionesController::index');

$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarClientes/$1');
$routes->get('eliminar_hotel/(:num)','HotelesController::eliminarHoteles/$1');
$routes->get('eliminar_reservacion/(:num)','ReservacionesController::eliminarReservaciones/$1');

$routes->get('buscar_reservacion/(:num)','ReservacionesController::buscarReservaciones');
$routes->post('modificar_reservaciones','ReservacionesController::modificarReservaciones');
$routes->get('nuevo_reservacion','ReservacionesController::nuevoReservacion');
$routes->post('agregar_reservaciones', 'ReservacionesController::agregarReservacion');

$routes->get('buscar_cliente/(:num)', 'ClientesController::buscarCliente');
$routes->post('modificar_clientes', 'ClientesController::modificarCliente');
$routes->get('nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('agregar_clientes','ClientesController::agregarCliente');

$routes->get('buscar_hotel/(:num)','HotelesController::buscarHoteles');
$routes->post('modificar_hoteles','HotelesController::modificarHoteles');
$routes->get('nuevo_hotel', 'HotelesController::nuevoHotel');
$routes->post('agregar_hoteles', 'HotelesController::agregarHotel');