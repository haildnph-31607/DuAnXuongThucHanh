<?php
namespace App\ControllerAD;
use App\Models\ColorModel;
require '../models/ColorModel.php';

class ColorController{
    protected $color;
    public function __construct(){
      $this->color = new ColorModel();
    }
    public function getColorController(){
        $listColor = $this->color -> getColorModel();
        include_once './View/color/list.php';

    }
    public function addColorController(){
     if(isset($_POST['submit'])){
      $color = $_POST['color'];
      $this->color->addColorModel($color);
      header('location:?href=color');
     }
      include_once './View/color/add.php';
    }
    public function deleteColorController(){
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $this->color->deleteColorModel($id);
        header('location:?href=color');
      }
    }
    public function updateColorController(){
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $fixColor =$this->color->fixColorModel($id); 
        // header('location:?href=color');
      }
      if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $color = $_POST['color'];
        $this->color->updateColorModel($id,$color);
        
        header('location:?href=color');
       }
      include_once './View/color/update.php';
    }
}