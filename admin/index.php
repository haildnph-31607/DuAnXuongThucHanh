<?php
// require_once "Controller/";
session_start();
if ($_SESSION['user']['role'] == 0 && !isset($_SESSION['user'])) {
    header('location:die.php');
}
use App\ControllerAD\BlogController;
use App\ControllerAD\CategoryController;
use App\ControllerAD\ColorController;
use App\ControllerAD\HomeAdminController;
use App\ControllerAD\NotificationController;
use App\ControllerAD\ProductController;
use App\ControllerAD\VariationController;

// use admin\controller\CategoryController;

require_once "./View/header.php";
require './ControllerAD/CategoryController.php';
require './ControllerAD/ProductController.php';
require './ControllerAD/HomeAdminController.php';
require './ControllerAD/VariationController.php';
require './ControllerAD/NotificationController.php';
require './ControllerAD/ColorController.php';
require './ControllerAD/BlogController.php';
$admin = new HomeAdminController();
$category = new CategoryController();
$product = new ProductController();
$variation = new VariationController();
$color = new ColorController();
$notify = new NotificationController();
$blog = new BlogController();
// $category = new CategoryController();
$url = isset($_GET['href']) ? $_GET['href'] : "dashboard";
switch ($url) {
    case 'dashboard':
        $admin->viewHomeController();
        break;
    case 'category':
        $category->CategoryController();
        break;
    case 'addCategory':
        $category->addCategoryController();
        break;
    case 'deleteCategoryHard':
        $category->DeleteHardCategoryController();
        break;
    case 'deleteCategorySoft':
        $category->deleteCategorySoftController();
        break;
    case 'restoreCategory':
        $category->restoreCategoryController();
        break;
    case 'updateCategory':
        $category->updateCategoryController();
        break;
    case 'product':
        $product->getProductController();
        break;
    case 'addProduct':
        $product->addProductController();
        break;
    case 'deleteProductHard':
        $product->deleteProductController();
        break;
    case 'deleteProductSoft':
        $product->deleteProductSoftController();
        break;
    case 'restoreProduct':
        $product->restoreProductController();
        break;
    case 'updateProduct':
        $product->updateProductController();
        break;
    case 'addProductExel':
        $product->addProducteExelController();
        break;
    case 'exportExel':
        $product->exportExcelController();
        break;
    case 'variation':
        $variation->getVariationController();
        break;
    case 'addVariation':
        $variation->addVariationController();
        break;
    case 'deleteVariationHard':
        $variation->deleteVariationController();

        break;
    case 'updateVariation':
        $variation->updateVariationController();
        break;

    case 'color':
        $color->getColorController();
        break;
    case 'addColor':
        $color->addColorController();
        break;
    case 'deleteColor':
        $color->deleteColorController();    
        break;
    case 'updateColor':
        $color -> updateColorController();
        break;
    case 'notification':
        $notify->getNotificationController();
        break;
    case 'post':
        $blog->getBlogADmin();
        break;
    case 'deleteBlog':
        $blog->deleteBlogController();
        break;
    case 'updateBlog':
        $blog->updateBlogController();
        break;
    case 404:
        require './view/404.php';
        break;
    default:
        require './view/404.php';
}
require_once "./View/footer.php";
