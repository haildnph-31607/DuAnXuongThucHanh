<?php

namespace App\Controller;

use App\Models\BlogModel;

require './models/BlogModel.php';
class BlogController
{
    public $blog;
    public function __construct()
    {
        $this->blog = new BlogModel();
    }
    public function viewBlogController()
    { 
       $listBlog = $this->blog->getBlog();
        include_once './view/blog.php';
    }
    public function addBlogController()
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $contentTile = $_POST['content'];
            $contentDetail = $_POST['contentDetail'];
            $id = $_POST['id'];
            // date_default_timezone_set('Asia/Ha_Noi');
            $date = date("Y-m-d h:i:sa");
            $target_dir = './Upload/';
            $nameFile = $_FILES['file']['name'];
            $target_file = $target_dir . rand(1, 1000) . $nameFile;
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            $this->blog->addBlogModel($title, $contentTile, $contentDetail, $date, $target_file, $id);
            $getlateID = $this->blog->getLateIDBlog();
            $idLate = $getlateID['id'];
            if (isset($_FILES['files'])) {
                $fileArrr = $_FILES['files'];
                $file_names = $fileArrr['name'];
                foreach ($file_names as $key => $value) {
                    $ext = $target_dir.'.'.rand(1, 100).'.' . $value;
                    move_uploaded_file($fileArrr['tmp_name'][$key], $ext);
                    $this->blog->addImgPost($ext, $idLate);
                }
            }
            // echo '<pre>';
            // print_r($fileArrr);die();
          header('location:?href=blog');

        }
        include_once './view/addBlog.php';
    }
    public function blogDetailController(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
          $blogDetail =  $this->blog->getBlogDetail($id);  
        //   var_dump($blogDetail);die(); 
        }
    
        include_once './view/blogDetail.php';
    }
}
