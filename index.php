<?php
session_start();
define('BASE_PATH', __DIR__);

require_once BASE_PATH . '/config/database.php';
require_once BASE_PATH . '/models/User.php';
require_once BASE_PATH . '/controllers/AuthController.php';
require_once BASE_PATH . '/controllers/PasswordResetController.php';

$db = Database::getInstance()->getConnection();
$userModel = new User($db);


$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$path = rtrim($request_uri, '/');

$path = preg_replace('/:\d+/', '', $path);


error_log("Requested Path: " . $path);

switch ($path) {
    case '/login':
        $controller = new AuthController($userModel);
        echo $controller->login();
        break;
        
    case '/logout':
        $controller = new AuthController($userModel);
        $controller->logout();
        break;
        
    case '/password-reset-request':
        $controller = new PasswordResetController($userModel);
        echo $controller->requestReset();
        break;
        
    case '/password-reset':
        $controller = new PasswordResetController($userModel);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Tampil form reset password
            require BASE_PATH . '/views/auth/password-reset.php';
        } else {
            // Proses reset password
            echo $controller->resetPassword();
        }
        break;
        case '/verifyOTP':
            $controller = new AuthController($userModel);
            echo $controller->verifyOTP();
            break;
            
        
    default:
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found - Path: " . $path;
        break;
}