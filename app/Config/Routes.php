<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
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
$routes->get('/', 'Users::index');
$routes->match(['get','post'],'register','Users::register');
$routes->match(['get','post'],'homeview','Users::homeview');
$routes->match(['get','post'],'staff','Users::staff');
$routes->match(['get','post'],'add_user','Users::create');
$routes->get('/edit/(:num)','Users::edit/$1');
$routes->post('/update/(:num)','Users::update/$1');
$routes->get('/delete/(:num)','Users::delete/$1');

$routes->match(['get','post'],'customer','Customers::customer');
$routes->match(['get','post'],'add_customer','Customers::create');
$routes->get('/view_costumer/(:num)','Costumers::view/$1');

$routes->match(['get','post'],'book','Books::book');
$routes->match(['get','post'],'add_book','Books::create');
$routes->get('/delete/(:num)','Books::delete/$1');

$routes->match(['get','post'],'inventory_details','Inventory::inventory');
$routes->get('/inventory/(:num)','Inventory::save/$1');
$routes->match(['get','post'],'inventory','Inventory::save');
$routes->match(['get','post'],'join','Inventory::bookInfo');
$routes->match(['get','post'],'add_qty','Inventory::save');
$routes->get('/join/(:num)','Inventory::bookInfo/$1');

$routes->match(['get','post'],'transaction','Transactions::transaction');
$routes->match(['get','post'],'userDetails','Transactions::userDetails');

// custom routes

$routes->get('/', 'Signup::index');
$routes->get('/register', 'Signup::index');
$routes->get('/login', 'Signin::index');
$routes->get('/homeview', 'Profile::index',['filter' => 'authGuard']);


/*
 * --------------------------------------------------------------------
 * Additional Routing0
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
