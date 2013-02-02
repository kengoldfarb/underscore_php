<?php
if ( !defined( '_PROJECT_ROOT_PATH' ) ) {
	define( '_PROJECT_ROOT_PATH', realpath( dirname( __FILE__ ) . '/../../' ) . '/' );
}
require_once _PROJECT_ROOT_PATH . 'vendor/autoload.php';
require_once _PROJECT_ROOT_PATH . 'config/Config.php';
Config::init();

$_action = isset( $_GET ) && isset( $_GET['action'] ) ? $_GET['action'] : '';

 // Use _Libs

_\_Log::debug('Action called on default controller: ' . $_action);

switch ( $_action ) {
	// http://localhost/exception
	case 'exception':
		throw new Exception( 'test exception' );
		break;

		// http://localhost/
		// http://localhost/index
	case 'index':
		include _VIEWS . 'header.php';
		include _VIEWS . 'index.php';
		include _VIEWS . 'footer.php';
		break;

	case 'underscore_libs':
		include _VIEWS . 'header.php';
		include _VIEWS . 'underscore_libs.php';
		include _VIEWS . 'footer.php';
		break;

	case 'underscore_php':
		include _VIEWS . 'header.php';
		include _VIEWS . 'underscore_php.php';
		include _VIEWS . 'footer.php';
		break;

		// http://localhost/500
		// http://localhost/500.html
	case '500':
	case '500.html':
		header( "HTTP/1.0 500 Internal Server Error" );
		include _WEBROOT . '500.html';
		break;

		// The default
	case '404':
	case '404.html':
	default:
		header( "HTTP/1.0 404 Not Found" );

		include _WEBROOT . '404.html';
		break;
}
Config::finish();
