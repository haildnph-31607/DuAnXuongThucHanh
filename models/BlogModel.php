<?php
namespace App\Models;

class BlogModel extends BaseModel{
    public function addBlogModel($title,$contentTile,$contentDetail,$date,$target_file,$id){
       $sql="INSERT INTO `post`( `title`, `content`, `contentDetail`, `img`, `date`,`id_user`)
        VALUES ('$title','$contentTile','$contentDetail','$target_file','$date','$id')";
        // var_dump($sql);die();
        return $this->ProData($sql);
    }
    public function getLateIDBlog(){
        $sql="SELECT * FROM post ORDER BY id DESC LIMIT 1";
        return $this->ProData($sql,false);
    }
    public function addImgPost($ext,$idLate){
         $sql="INSERT INTO `img_post`( `img`, `id_post`)
          VALUES ('$ext','$idLate')";
          return $this->ProData($sql);
    }
    public function getBlog(){
        $sql="SELECT * FROM post ORDER BY id DESC";
        return $this->ProData($sql);
    }
    public function getBlogDetail($id){
        $sql="SELECT pv.title AS title ,
         pv.content AS content ,
          pv.contentDetail AS contentDetail,
           pv.img AS img ,
           pv.date AS date ,
            ig.img AS imgpg FROM post pv INNER JOIN img_post ig ON ig.id_post = pv.id WHERE ig.id_post=$id";

        // var_dump($sql);die();
        return $this->ProData($sql);
    }
    public function getBlogModels(){
        $sql="SELECT * FROM post ORDER BY id DESC";
       return  $this->ProData($sql);
    }
    public function getBlogModel($title){
        $sql="SELECT * FROM post WHERE title LIKE '%".$title."%'";
       return  $this->ProData($sql);
    }
    public function deleteBlogModel($id){
        $sql="DELETE FROM post WHERE id=$id";
        $this->ProData($sql);
    }
    public function fillBlogModel($id){
         $sql="SELECT * FROM post WHERE id=$id";
         return $this->ProData($sql,false);
    }
    public function updateBlogModel($title,$content,$contentDetail,$target_file,$id){
        $sql="UPDATE `post` SET `title`='$title',`content`='$content',`contentDetail`='$contentDetail',`img`='$target_file' WHERE id=$id";
        $this->ProData($sql);
    }
}