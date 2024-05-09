<?php

namespace App\ControllerAD;

use App\Models\BlogModel;

require '../models/BlogModel.php';


class BlogController
{
    public $blog;
    public function __construct()
    {
        $this->blog = new BlogModel();
    }
    public function getBlogADmin(){
      
        if(isset($_POST['search-outline'])){
            $title = $_POST['titleSearch'];
            $listBlog = $this->blog->getBlogModel($title);
        }else{
            $listBlog = $this->blog->getBlogModels();
        }
        include_once './View/post/list.php';

    }
    public function deleteBlogController(){
        if(isset($_GET['id'])){
             $this->blog->deleteBlogModel($_GET['id']);
             header('location:?href=post');
        }
       
    }
    public function updateBlogController(){
        if(isset($_GET['id'])){
          $fillBlog =  $this->blog->fillBlogModel($_GET['id']);
            // header('location:?href=post');
       }
       if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $contentDetail = $_POST['contentDetail'];
        $target_file = $_POST['file'];
        $size = $_FILES['file']['size'];
        $id=$_POST['id'];
        if($size>0){
            $target_dir = './Upload/';
            $nameFile = $_FILES['file']['name'];
            $target_file = $target_dir . rand(1, 1000) . $nameFile;
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
        }
        $this->blog->updateBlogModel($title,$content,$contentDetail,$target_file,$id);  
        header('location:?href=post');
    }
       include_once './View/post/update.php';
    }
}
