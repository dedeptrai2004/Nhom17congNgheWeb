<?php
require_once 'config.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/AdminController.php';
require_once 'controllers/NewsController.php';
require_once 'models/News.php';
require_once 'models/User.php';
require_once 'models/Category.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'home':
        $controller = new HomeController();
        break;
    case 'admin':
        $controller = new AdminController();
        break;
    case 'news':
        $controller = new NewsController();
        break;
    default:
        $controller = new HomeController();
}

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Action not found!";
}
?>
