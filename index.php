<?php




ob_start();
session_start();
use App\Controller\BlogController;
use App\Controller\NotificationController;
use App\Controller\AccountController;
use App\Controller\homeController;

require './view/header.php';
require './vendor/autoload.php';
require './controller/AccountController.php';
require './controller/homeController.php';
require './controller/NotificationController.php';
require './controller/BlogController.php';
$home   = new homeController();
$account = new AccountController();
$notification = new NotificationController();
$blog = new BlogController();
// var_dump($home);die();
$url = isset($_GET['href']) == true ? $_GET['href'] : '/';
switch ($url) {
    case '/':
        // require_once './controller/homeController.php';
        $home->viewHomeController();

        break;
    case 'fogot':
        $account->FogotController();
        break;
    case 'fogotPass':
        $account->fogotPassController();
        break;
    case 'register':
        $account->RegisterController();
        break;
    case 'login':
        $account->LoginController();
        break;
    case 'logout':
        $account->LogoutController();
        break;
    case 'product-detail':
        $home->productDetailController();
        break;
    case 'addNotification':
        $notification->addNotificationController();
        break;
    case 'blog':
        $blog->viewBlogController();
        break;
    case 'addBlog':
        $blog->addBlogController();
        break;
    case 'blogDetail':
        $blog->blogDetailController();
        break;
    case 404:
        require './admin/View/404.php';
        break;
    default:
        require './admin/View/404.php';
        break;
}
require './view/footer.php';
ob_end_flush();
