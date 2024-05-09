<?php

namespace App\ControllerAD;

use App\Models\CategoryModel;

require '../models/CategoryModel.php';
class CategoryController
{
    public $category;
    public function __construct()
    {
        $this->category = new CategoryModel();;
    }
    public function CategoryController()
    {
        $listCategory = $this->category->CategoryModel();

        include_once './View/category/list.php';
    }
    public function addCategoryController()
    {
        if (!empty($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            // var_dump($description);die();
            $this->category->addCategoryModel($name, $description);
            header('location:?href=category');
        }
        include_once './View/category/add.php';
    }
    public function DeleteHardCategoryController()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->category->DeleteHardCategoryModel($id);
            header('location:?href=category');
        }
        include_once './View/category/list.php';
    }
    public function deleteCategorySoftController()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->category->deleteCategorySoftModel($id);

            header('location:?href=category');
        }
    }
    public function restoreCategoryController()
    {
        $restoreCategory = $this->category->RestoreCategoryModel();
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->category->RestoresCategoryModel($id);
            header('location:?href=category');

        }
        include_once './View/category/restore.php';
    }
    public function updateCategoryController()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->category->fillDataCategoryModel($id);
        
           
        }
        if(!empty($_POST['submit'])){
            $idp=$_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $this->category->updateCategoryModel($idp,$name,$description);   
            header('location:?href=category');
        }
        include_once './View/category/update.php';
    }
}
