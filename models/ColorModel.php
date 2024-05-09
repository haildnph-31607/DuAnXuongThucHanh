<?php
namespace App\Models;
// require 'BaseModel.php';

class ColorModel extends BaseModel{
    public function getColorModel(){
        $sql="SELECT * FROM color";
        return $this->ProData($sql);
    }
    public function addColorModel($color){
        $sql="INSERT INTO `color`( `color`) VALUES ('$color')";
        return $this->ProData($sql);
    }
    public function deleteColorModel($id){
        $sql="DELETE FROM color WHERE id=$id";
        return $this->ProData($sql);
    }
    public function fixColorModel($id){
        $sql="SELECT * FROM color WHERE id=$id";
        return $this->ProData($sql,false);
    }
    public function updateColorModel($id,$color){
        $sql="UPDATE `color` SET `color`='$color' WHERE id=$id";
        return $this->ProData($sql);
    }
}