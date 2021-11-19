<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// route jenis cuti
    $routes->get('jeniscuti', 'JenisCutiController::index');
    $routes->get('jeniscuti/create', 'JenisCutiController::create');
// akhir route jenis cuti
// route detail level
    $routes->get('detaillevel', 'DetailLevelController::index');
// akhir route detail level
// route level
    $routes->get('level', 'LevelController::index');
// akhir route level
// route user
    $routes->get('user', 'UserController::index');
// akhir route user
// route Pegawai
    $routes->get('pegawai', 'PegawaiController::index');
// akhir route Pegawai
// route cuti
    $routes->get('cuti', 'CutiController::index');
// akhir route cuti

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
