<?php
namespace App\ControllerAD;
use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\ProductModel;
use App\Models\VariationModel;
// use app\models\VariationModel;
require '../models/VariationModel.php';
class VariationController{

    public $variation;
    public $category;
    public $color;
    public $product;
    public function __construct(){
        $this->variation= new VariationModel;
        $this->category= new CategoryModel;
        $this->color= new ColorModel;
        $this->product = new ProductModel;

    }

    public function getVariationController(){
           $listVariation = $this->variation->getVariationModel();

           include_once './View/variation/list.php';
    } 
    public function addVariationController(){
        // $listCategory = $this->category->CategoryModel();
        $listColor = $this->color -> getColorModel();
        $listProduct = $this->product->getProductModel();
        if(isset($_POST['submit'])){
            $id_product= $_POST['idProduct'];
            $id_color = $_POST['idColor'];
            $price = $_POST['price'];
            $discout = $_POST['discout'];
            $quantity = $_POST['quantity'];
            $target_dir = '../Upload/';
            $random = rand(1, 100);
            $nameFile = $_FILES['file']['name'];
            $target_file = $target_dir . $random . $nameFile;
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            $this->variation->addVariationModel($id_product,$id_color,$target_file,$price,$discout,$quantity); 
            header('location:?href=variation');  
        }
        include_once './View/variation/add.php';
    }
    public function deleteVariationController(){
           if(isset($_GET['id'])){
            $id=$_GET['id'];
            $this->variation->deleteVariation($id);
            header('location:?href=variation');  
           }
    }
    public function updateVariationController(){
        $listColor = $this->color -> getColorModel();
        $listProduct = $this->product->getProductModel();
        if(isset($_GET['id'])){
            $id=$_GET['id'];    
            $variationDetail=$this->variation->fixVariation($id);
           }
           if(isset($_POST['submit'])){
            $id_product= $_POST['idProduct'];
            $id_color = $_POST['idColor'];
            $id=$_POST['id'];
            $price = $_POST['price'];
            $discout = $_POST['discout'];
            $quantity = $_POST['quantity'];
            $target_file = $_POST['file'];
            $size = $_FILES['file']['size'];
            if($size>0){
                $target_dir = '../Upload/';
                $random = rand(1, 100);
                $nameFile = $_FILES['file']['name'];
                $target_file = $target_dir . $random . $nameFile;
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            }
            $this->variation->updateVariationModel($id,$id_product,$id_color,$target_file,$price,$discout,$quantity);    
            header('location:?href=variation');  
        }
        include_once './View/variation/update.php';
    }
}