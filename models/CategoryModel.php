<?php

namespace App\Models;

use App\Models\BaseModel;

require_once 'BaseModel.php';

class CategoryModel extends BaseModel
{
  public function CategoryModel()
  {
    $sql = "SELECT * FROM category WHERE option=0 ";
    return  $this->ProData($sql);
  }
  public function addCategoryModel($name, $description)
  {
    $sql = "INSERT INTO `category`( `name`, `description`) 
    VALUES ('$name','$description')";
    // var_dump($sql);die();

    return  $this->ProData($sql);
  }
  public function DeleteHardCategoryModel($id){
    $sql="DELETE FROM category WHERE id=$id";
    return  $this->ProData($sql);

  }
  public function deleteCategorySoftModel($id){
    $sql="UPDATE category SET option=1 WHERE id=$id";
    return  $this->ProData($sql);

  }
  public function RestoreCategoryModel(){
    $sql = "SELECT * FROM category WHERE option=1";
    return  $this->ProData($sql);
  }
  public function RestoresCategoryModel($id){
    $sql="UPDATE category SET option=0 WHERE id=$id";
    // var_dump($sql);die();
    return  $this->ProData($sql);

  }
  public function fillDataCategoryModel($id){
    $sql="SELECT * FROM category WHERE id=$id";
    return  $this->ProData($sql,false);
  }
  public function updateCategoryModel($id,$name,$description){
    $sql="UPDATE `category` SET `name`='$name',`description`='$description' WHERE id=$id";
    // var_dump($sql);die();
    return  $this->ProData($sql);

  }
}
