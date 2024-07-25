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


//crear modelo cuando elimine la reservacion, 

/* use App\Models\DetalleReservacion

public function eliminarReservacion($id=null){
    $reservaciones = new ReservacionesModel();
    $detalle-> delete($id);

    $reservaciones = new ReservacionesModel();
    $reservaciones->delete($id);
    return redirect()->route('ver_reservaciones');
}*/