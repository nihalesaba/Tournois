<?php
/**LIBRARIES LOADER**/
require('app/core/autoloader.php');

//define routes

/**INDEX ROUTE**/
Router::get('', 'welcome@index');

/**LOGIN/LOGOUT ROUTES**/
Router::get('login', 'login@login');
Router::post('login', 'login@login');
Router::get('logout', 'login@logout');
Router::get('register', 'login@register');

/**STAFF ROUTES**/
Router::get('staff', 'staff@index');

/**USERS MANAGEMENT**/

Router::get('staff/users', 'staff@users');
Router::get('staff/users/create', 'staff@adduser');
Router::post('staff/users/create', 'staff@adduser');

Router::get('staff/users/edit/(:num)', 'staff@edituser');
Router::post('staff/users/edit/(:num)', 'staff@edituser');
Router::get('staff/users/update/(:num)', 'staff@updateuser');
Router::get('staff/users/delete/(:num)', 'staff@deleteuser');



/**COURTS MANAGEMENT**/
Router::get('staff/courts', 'staff@courts');


/**TOURNAMENT MANAGEMENT**/
Router::get('staff/tours', 'staff@tours');


/**USER ROUTES**/
Router::get('user', 'user@index');

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();