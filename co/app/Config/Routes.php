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
$routes->get('/meesho/admin/add_category', 'meeshoController::meeshoadd_cat');
$routes->get('/meesho/admin/admin_user', 'meeshoController::meeshoadmin_user');
$routes->get('/meesho/admin/add_product/(:any)', 'meeshoController::meeshoadd_product/$1');
$routes->get('/meesho/admin/add_product', 'meeshoController::pr');
$routes->get('/meesho/admin/product_list', 'meeshoController::product_list');
$routes->get('/meesho/admin/category_list', 'meeshoController::category_list');
$routes->get('/meesho/admin/admin_user_list','meeshoController::adminuser_list');
$routes->get('/meesho/admin', 'meeshoController::meeshoadmin');
$routes->get('/meesho/detail', 'meeshoController::meeshod');
$routes->get('/meesho', 'meeshoController::meeshof');

$routes->post('ajaxadmin_user', 'meeshoController::ajaxadmin_user');
$routes->post('add_product', 'meeshoController::add_product');
$routes->post('update_product', 'meeshoController::update_product');
$routes->post('add_category', 'meeshoController::add_category');
$routes->post('update_category', 'meeshoController::update_category');
$routes->get('/meesho/admin/product_list', 'meeshoController::product_delete');
//$routes->get('/meesho', function(){echo view('meesho_view');});

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
