<?php
namespace App\Models;
use App\Models\BaseModel;

class  VariationModel extends BaseModel{

    public function getVariationModel(){
        $sql="SELECT * FROM `variation` WHERE 1";
        // var_dump($sql);die()

        return $this->ProData($sql);
    }
    public function addVariationModel($id_product,$id_color,$target_file,$price,$discout,$quantity){
        $sql="INSERT INTO `variation`( `id_product`, `id_color`,`img`, `price`, `discout`, `quatity`)
         VALUES ('$id_product','$id_color','$target_file','$price','$discout','$quantity')";
        //  var_dump($sql);die();
          return $this->ProData($sql);
    }
    public function deleteVariation($id){
        $sql="DELETE FROM variation WHERE id=$id";
        return $this->ProData($sql);
    }
    public function fixVariation($id){
        $sql="SELECT * FROM variation WHERE id=$id";
        return $this->ProData($sql,false);
    }
    public function updateVariationModel($id,$id_product,$id_color,$target_file,$price,$discout,$quantity){
        $sql="UPDATE `variation` SET `id_product`='$id_product',`id_color`='$id_color',`img`='$target_file',`price`='$price',`discout`='$discout',`quatity`='$quantity' WHERE id=$id";
        return $this->ProData($sql);
    }
}