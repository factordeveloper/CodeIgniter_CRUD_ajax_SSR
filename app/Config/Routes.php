<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group("user",function($routes){
    $routes->get('home','UserController::index',['as'=>'user.home']);
    $routes->get('profile','UserController::profile',['as'=>'user.profile']);
    $routes->get('countries','UserController::countries',['as'=>'countries']);
    $routes->post('addCountry','UserController::addCountry',['as'=>'add.country']);
    $routes->get('getAllCountries','UserController::getAllCountries',['as'=>'get.all.countries']);
    $routes->post('getCountryInfo','UserController::getCountryInfo',['as'=>'get.country.info']);
    $routes->post('updateCountry','UserController::updateCountry',['as'=>'update.country']);
    $routes->post('deleteCountry','UserController::deleteCountry',['as'=>'delete.country']);
});