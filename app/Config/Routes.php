<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

use App\Controllers\Accueil;
use App\Controllers\Apprenant;
use App\Controllers\Formateur;
use App\Controllers\Formation;
use App\Controllers\Session;



// FORMATION
$routes->get('formation', [Formation::class, 'index']);
$routes->get('formation/view/(:num)', [Formation::class, 'view/$1']);
$routes->get('formation/supprimer/(:num)', [Formation::class, 'supprimer/$1']);
$routes->get('formation/ajouter', 'Formation::ajouter');
$routes->post('formation/ajouter', 'Formation::ajouter');
$routes->get('formation/modifier', 'Formation::modifier');
$routes->post('formation/modifier', 'Formation::modifier');

// SESSION
$routes->get('session', [Session::class, 'index']);
$routes->get('session/view/(:num)', [Session::class, 'view/$1']);
$routes->get('session/supprimer/(:num)', [Session::class, 'supprimer/$1']);
$routes->get('session/ajouter', 'session::ajouter');
$routes->post('session/ajouter', 'session::ajouter');
$routes->get('session/modifier', 'session::modifier');
$routes->post('session/modifier', 'session::modifier');

// APPRENANT
$routes->get('apprenant', [Apprenant::class, 'index']);
$routes->get('apprenant/view/(:num)', [Apprenant::class, 'view/$1']);
$routes->get('apprenant/supprimer/(:num)', [Apprenant::class, 'supprimer/$1']);
$routes->get('apprenant/ajouter', 'apprenant::ajouter');
$routes->post('apprenant/ajouter', 'apprenant::ajouter');
$routes->get('apprenant/modifier/(:num)', [Apprenant::class, 'modifier/$1']);
$routes->post('apprenant/modifier', 'apprenant::modifier');

//FORMATEUR
$routes->get('formateur', [Formateur::class, 'index']);
$routes->get('formateur/(:segment)', [Formateur::class, 'view']);
$routes->get('formateur/supprimer/(:num)', [Formateur::class, 'supprimer/$1']);
$routes->get('formateur/ajouter', 'formateur::ajouter');
$routes->post('formateur/ajouter', 'formateur::ajouter');
$routes->get('formateur/modifier/(:num)', [Formateur::class, 'modifier/$1']);
$routes->post('formateur/modifier', 'formateur::modifier');

//DASHBOARD


//CONNEXION
$routes->get('/login', 'Accueil::index');
$routes->post('/autoriser', 'Accueil::autoriser');




$routes->get('accueil', [Accueil::class, 'index']);
$routes->get('(:segment)', [Accueil::class, 'view']);
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
