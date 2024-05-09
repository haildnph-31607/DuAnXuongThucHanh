<?php

namespace App\ControllerAD;

use App\Models\CategoryModel;


class HomeAdminController
{
 
    public function viewHomeController()
    {
        // $category = new CategoryModel();
       

        include_once './View/home.php';
    }
}
