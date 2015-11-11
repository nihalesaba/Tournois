<?php
/**LIBRARIES LOADER**/
require('app/core/autoloader.php');

//define routes

/**INDEX ROUTE**/
Router::get('index', 'welcome@index');

/**LOGIN/LOGOUT ROUTES**/
Router::get('login', 'login@login');
Router::post('login', 'login@login');
Router::get('logout', 'login@logout');
Router::get('register', 'login@register');
Router::post('register', 'login@register');

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
Router::get('staff/courts/edit/(:num)', 'staff@editcourt');
Router::post('staff/courts/edit/(:num)', 'staff@editcourt');
Router::get('staff/courts/create', 'staff@addcourt');
Router::post('staff/courts/create', 'staff@addcourt');
Router::get('staff/courts/delete/(:num)', 'staff@deletecourt');


/**TOURNAMENT MANAGEMENT**/
Router::get('staff/tours', 'staff@tours');
Router::get('staff/tours/create', 'staff@addtour');
Router::post('staff/tours/create', 'staff@addtour');
Router::get('staff/tours/delete/(:num)', 'staff@deletetour');
Router::get('staff/tours/delete/(:num)', 'staff@deletetour');


/**USER ROUTES**/
Router::get('user/profile','user@profil');

Router::get('user', 'user@index');
Router::get('user/courts', 'user@courts');
Router::get('user/courts/create', 'user@addcourt');
Router::post('user/courts/create', 'user@addcourt');
Router::get('user/courts/edit/(:num)', 'user@editcourt');
Router::post('user/courts/edit/(:num)', 'user@editcourt');
Router::get('user/courts/delete/(:num)','user@deletecourt');

Router::get('user/tours', 'user@listtour');
Router::post('user/tours', 'user@listtour');
Router::get('user/tours/partnerchoose/(:num)', 'user@choosepartner');
Router::post('user/tours/partnerchoose/(:num)', 'user@choosepartner');



/**ADMIN ROUTES**/
Router::get('admin', 'admin@index');
Router::get('admin/staffs', 'admin@staffs');
Router::get('admin/staffs/create', 'admin@addstaff');
Router::post('admin/staffs/create','admin@addstaff');
Router::get('admin/staffs/delete/(:num)', 'admin@deletestaff');


//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();
