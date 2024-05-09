<?php

namespace App\Controller;

// use app\models\CategoryModel;
use App\Models\ProductModel;

require 'models/ProductModel.php';

class homeController
{
    public $productController;
    public function __construct()
    {
        $this->productController = new ProductModel();
    }

    public function viewHomeController()
    {
        // $productt = new CategoryModel();
        // $product = $this->productController->getDataModel();
          $listProductHomeController = $this->productController->getProductHomeModel();
        //   var_dump($listProductHomeController);die();
         
        include_once './view/home.php';
    }
    public function productDetailController(){
       if(isset($_GET['id'])){

        $id=$_GET['id'];
        // $viewNow = $this->productController->getViewProductModel($id);
        // var_dump($viewNow);die();
        $this->productController->upDateViewProductModel($id);
        $getVariation = $this->productController->getVariantDetailModel($id); 
        if(isset($_SESSION['user'])){
            $id_user=$_SESSION['user']['id'];
            $code = $getVariation[0]['id'];
            $checkUserNotify = $this->productController->getCheckUserNotify($id_user,$code);
            // var_dump($checkUserNotify);die();
        }
        if(isset($_POST['submit'])){
            $star = $_POST['star'];
            $name = $_POST['name'];
            $mess= $_POST['messenger'];
            $id_pr = $_POST['idpr'];
            $date = date('Y-m-d H:i:sa');

            $this->productController->insertRating($star,$mess,$name,$id_pr,$date);
            header('location:'.$_SERVER['HTTP_REFERER']);
        }
        $listRatiing = $this->productController->getRatingStar($getVariation[0]['id']); 
        // var_dump($listRatiing);die();  
       }

        include_once './view/productDetail.php';

    }
   
   
}
