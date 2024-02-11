<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/about', 'MainController::about');
$routes->get('/shop', 'MainController::shop');
$routes->get('/news', 'MainController::news');
$routes->get('/cart', 'MainController::cart');
$routes->get('/contact', 'MainController::contact');
$routes->get('/checkout', 'MainController::checkout');



//admin
$routes->get('/admindashboard', 'AdminController::admindashboard');
$routes->get('/adminproductlist', 'AdminController::adminproductlist');
$routes->get('/adminproductadd', 'AdminController::adminproductadd');
$routes->get('/admincategorylist', 'AdminController::admincategorylist');
$routes->get('/adminaddcategory', 'AdminController::adminaddcategory');
$routes->get('/adminsalelist', 'AdminController::adminsalelist');
$routes->get('/adminaddsale', 'AdminController::adminaddsale');
$routes->get('/adminpurchaselist', 'AdminController::adminpurchaselist');
$routes->get('/adminaddpurchase', 'AdminController::adminaddpurchase');
$routes->get('/adminreturnlist', 'AdminController::adminreturnlist');
$routes->get('/adminaddreturn', 'AdminController::adminaddreturn');

$routes->get('/admincustomerlist', 'AdminController::admincustomerlist');

$routes->get('/adminsupplierlist', 'AdminController::adminsupplierlist');
$routes->get('/adminaddsupplier', 'AdminController::adminaddsupplier');
$routes->get('/adminreport', 'AdminController::adminreport');
$routes->get('/adminaddsupplier', 'AdminController::adminaddsupplier');
$routes->get('/adminPOS', 'AdminController::adminPOS');


$routes->get('/signin', 'AdminController::signin');

$routes->get('/signup', 'AdminController::signup');