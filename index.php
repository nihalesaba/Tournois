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

/**PROFIL STAFF**/
Router::get('staff/profil','staff@profil');
Router::post('staff/profil','staff@profil');


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
Router::post('staff/tours/delete/(:num)', 'staff@deletetour');

Router::get('staff/tours/group/(:num)', 'staff@group');
Router::post('staff/tours/group/(:num)', 'staff@group');

Router::get('staff/tours/knockoff/(:num)', 'staff@knockoff');
Router::post('staff/tours/knockoff/(:num)', 'staff@knockoff');


/**USER ROUTES**/
Router::get('user/profile','user@profil');
Router::post('user/profile','user@profil');

Router::get('user', 'user@index');
Router::get('user/courts', 'user@courts');
Router::get('user/courts/create', 'user@addcourt');
Router::post('user/courts/create', 'user@addcourt');
Router::get('user/courts/edit/(:num)', 'user@editcourt');
Router::post('user/courts/edit/(:num)', 'user@editcourt');
Router::get('user/courts/delete/(:num)','user@deletecourt');

Router::get('user/tours', 'user@tours');
Router::post('user/tours', 'user@tours');

Router::get('user/tours/(:num)', 'user@teams');
Router::post('user/tours/(:num)', 'user@teams');
Router::get('user/tours/createteam/(:num)', 'user@createteam');
Router::post('user/tours/createteam/(:num)', 'user@createteam');
Router::get('user/tours/jointeam/(:num)', 'user@jointeam');
Router::post('user/tours/jointeam/(:num)', 'user@jointeam');





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
