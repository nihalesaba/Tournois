<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','');
$DIRNAME  = strtok($_SERVER['REQUEST_URI'], '/');
$DIRNAME="/".$DIRNAME.'/';


//database details ONLY NEEDED IF USING A DATABASE

//set prefix for sessions
define('SESSION_PREFIX','');


//optionall create a constant for the name of the site
define('SITETITLE','Tournois de Charles Lorraine');
define('TEMPROOT',$DIRNAME.'app/');
define('TEMPLINK',$DIRNAME);





//set the default template
Session::set('template','default');
