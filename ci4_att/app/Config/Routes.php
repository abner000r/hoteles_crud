<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('reservacion','ReservacionController::index');
$routes->get('nueva_reservacion','ReservacionController::nuevasReservas');
$routes->post('agregar_reservacion','ReservacionController::agregarReservacion');


$routes->get('hoteles','HotelesController::index');
