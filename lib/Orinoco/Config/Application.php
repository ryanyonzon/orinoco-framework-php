<?php
/**
 * Orinoco Framework - A lightweight PHP framework.
 *  
 * Copyright (c) 2008-2015 Ryan Yonzon <ryanyonzon@gmail.com>
 * Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
 */

// default debug mode
if (!defined('DEVELOPMENT')) {
    define('DEVELOPMENT', true);
}

// enable session, default is True
if (!defined('SESSION')) {
    define('SESSION', true);
}

// default PHP extension
if (!defined('PHP_FILE_EXTENSION')) {
    define('PHP_FILE_EXTENSION', '.php');
}

// controllers
if (!defined('SELF_CONTROLLER')) {
    define('SELF_CONTROLLER', 'SELF');
}

// actions
if (!defined('SELF_ACTION')) {
    define('SELF_ACTION', 'SELF');
}

// define default controller, if it's not yet defined
if (!defined('DEFAULT_CONTROLLER')) {
    define('DEFAULT_CONTROLLER', 'index');
}

// define default action/method, if it's not yet defined
if (!defined('DEFAULT_ACTION')) {
    define('DEFAULT_ACTION', 'index');
}

// define default controller name suffix
if (!defined('CONTROLLER_NAME_SUFFIX')) {
    define('CONTROLLER_NAME_SUFFIX', 'Controller');
}

// presentation layer stuff
if (!defined('DEFAULT_LAYOUT')) {
    define('DEFAULT_LAYOUT', 'application');
}

if (!defined('ERROR_404_PAGE')) {
    define('ERROR_404_PAGE', '404'); // app/view/error/404.php
}

if (!defined('ERROR_500_PAGE')) {
    define('ERROR_500_PAGE', '500'); // app/view/error/500.php
}
