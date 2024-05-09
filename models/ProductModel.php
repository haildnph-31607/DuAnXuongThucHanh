<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;
require_once 'BaseModel.php';

class ProductModel extends BaseModel
{
  public function getProductModel($iddm='')
  {
    $sql = "SELECT * FROM product WHERE option=0";
    if($iddm!==""){
    $sql.=" AND code_product LIKE '%".$iddm."%'";
    
    }
   
    $sql.=" ORDER BY id DESC";
    // var_dump($sql);die();
    return  $this->ProData($sql);
  }
  public function getProductHomeModel(){
    $sql="SELECT * FROM product WHERE option=0";
    return $this->ProData($sql);
  }
  public function addProductModel($code, $name, $target_file, $description, $price, $iddm)
  {
    $sql = "INSERT INTO `product`( `code_product`, `name`, `img`, `description`, `price`, `id_category`) 
    VALUES ('$code','$name','$target_file','$description','$price','$iddm')";
    return  $this->ProData($sql);
  }
  public function deleteProductModel($id)
  {
    $sql = "DELETE FROM product WHERE id=$id";
    return  $this->ProData($sql);
  }
  public function deleteProductSoftModel($id){
    $sql="UPDATE product SET option=1 WHERE id=$id";
    return  $this->ProData($sql);

  }
  public function restoreProduct(){
    $sql="SELECT * FROM product WHERE option=1";
    return $this->ProData($sql);
  }
  public function retoreProductUpdate($id){
    $sql="UPDATE product SET option = 0 WHERE id=$id";
    return $this->ProData($sql);
  }
  public function fillDataProductModel($id){
    $sql="SELECT * FROM product WHERE id=$id";
    return $this->ProData($sql,false);
  }
  public function updateProductModel($id,$code,$name,$target_file,$description,$price,$iddm){
    $sql="UPDATE `product` SET `code_product`='$code',`name`='$name',`img`='$target_file',`description`='$description',`price`='$price',`id_category`='$iddm' WHERE id=$id";
    return $this->ProData($sql);

  }
  public function addProductExelModel($code,$name,$description,$price,$iddm){
    $sql="INSERT INTO `product`( `code_product`, `name`, `description`, `price`, `id_category`) 
    VALUES ('$code','$name','$description','$price','$iddm'";
    return $this->ProData($sql);
  }
  // public function getViewProductModel($id){
  //   $sql="SELECT product.view_product FROM product WHERE id=$id";
  //   return $this->ProData($sql);
  // }
  public function getVariantDetailModel($id){
    $sql="SELECT pr.id AS id,
     pr.name AS name ,
    pr.code_product AS code ,
    pr.img AS img,
    pr.description AS description,
    pr.view_product AS view ,
    c.color AS color ,
    vr.price AS price ,
    vr.discout AS discout,
    vr.quatity AS quantity,
    vr.img AS vrImg  FROM product pr
    INNER JOIN variation vr ON vr.id_product=pr.id 
    INNER JOIN color c ON vr.id_color=c.id 
    WHERE vr.id_product=$id";
    
   return $this->ProData($sql);
    // var_dump( $value);die();
  }
  public function upDateViewProductModel($id){
    $sql="UPDATE product SET view_product=view_product+1 WHERE id=$id";
    $this->proData($sql);
  }
  public function ThemMoi($table, $fields, $forms)
  {
    # table 		table database
    # fields 		field element in table is array string
    # forms			form submit data to table is array with index is like array fields
    # note			value array fields = index array forms
    # result 		number:Success
    # result 		0:Error input fields
    # result 		-1:Empty array fields
    $arr_fields = [];
    $arr_datas = [];
    $arr_forms = [];
    if(!empty($fields))
    {
      foreach ($fields as $key => $value) 
      {
        array_push($arr_fields, $value);
        array_push($arr_datas, ":".$value);
        if(isset($forms[$value]))
        {
          $arr_forms[$value] = $forms[$value];
        }
        else
        {
          $arr_forms[$value] = NULL;
        }
      }
      $str_fields = implode(",", $arr_fields);
      $str_datas = implode(",", $arr_datas);
      $query_string = 'INSERT INTO '.$table.' ('.$str_fields.') VALUES ('.$str_datas.')';
      $sql = $this->connect->prepare($query_string);
      $sql->execute($arr_forms);
      return $this->connect->lastInsertId();
    }
    else
    {
      return -1;
    }
  }
  public function DanhSach($table, $fields=[], $condition=[], $sorts=[], $limits=[], $forms=[])
		{
			# table 		table database
			# fields		value get from table. It is array empty or field of table
			# condition		array condition with value is field of table
			# $sorts 		fields in table sort ASC or DESC
			# $limits 		It has one number 5 or string 4,5
			# $forms 		index of forms like index of condition
			$query_string = '';
			$arr_forms = [];
			if(!empty($fields))
			{
				$str_fields = implode(",", $fields);
				$query_string .= 'SELECT '.$str_fields.' FROM '.$table;
			}
			else
			{
				$query_string .= 'SELECT * FROM '.$table;
			}
			if(!empty($condition))
			{
				$query_string .= ' WHERE';
				$number = 0;
				foreach ($condition as $key => $value) 
				{
					$arr_forms[':'.$key] = $forms[$key];
					if($number == 0)
					{
						$query_string .= ' '.$key." ".$value.' :'.$key;
					}
					else
					{
						$query_string .= ' AND '.$key." ".$value.' :'.$key;
					}
					$number ++;
				}
			}
			if(!empty($sorts))
			{
				$arr_sorts = [];
				$query_string .= ' ORDER BY ';
				foreach ($sorts as $key_sort => $value_sort) 
				{
					array_push($arr_sorts, $key_sort." ".$value_sort);
				}
				$str_sorts = implode(",", $arr_sorts);
				$query_string .= $str_sorts;
			}
			if(!empty($limits))
			{
				$query_string .= ' LIMIT ';
				$str_limit = implode(",", $limits);
				$query_string .= $str_limit;
			}
			$sql=$this->connect->prepare($query_string);
			$sql->execute($arr_forms);
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}
    public function getCheckUserNotify($id_user,$code){
      $sql="SELECT * FROM notification WHERE id_user=$id_user AND id_pr=$code";
      return $this->ProData($sql,false);
    }
    public function insertRating($star,$mess,$name,$id_pr,$date){
      $sql="INSERT INTO `comment`( `mesenger`, `name`, `date`, `rating`, `id_product`) 
      VALUES ('$mess','$name','$date','$star','$id_pr')";
      return $this->ProData($sql);
    }
    public function getRatingStar($id){
     $sql="SELECT * FROM comment WHERE id_product=$id";
     return $this->ProData($sql);
    }
  
}
