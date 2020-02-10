<?php

define('DEBUG', true);

// Database Name
define('DB_NAME', 'collection'); 

// Database User
define('DB_USER', 'root');

// Database Password
define('DB_PASS', '');

// Database host **use IP addresss to avoid DNS lookup
define('DB_HOST', '127.0.0.1');

// Default controller if it isnt passed in the $url
define('DEFAULT_CONTROLLER', 'Home');

// Default layout if it is not set in controller
define('DEFAULT_LAYOUT', 'default');

// Default site title if it is not set
define('SITE_TITLE', 'Collection MVC');

// set this to '/' for a live server
define('PROOT', '/collmvc/');