<?php

namespace App\ControllerAD;
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
	
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PHPExcel_IOFactory;


// use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
require '../models/ProductModel.php';
require '../vendor/autoload.php';
require './Classes/PHPExcel.php';

// require '../vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx.php';
class ProductController
{
    protected $product;
    protected $category;
    protected  $spreadsheet;
    public function __construct()
    {     
       $this->spreadsheet = new Spreadsheet();
        $this->product = new ProductModel();
        $this->category = new CategoryModel();
    }
    public function getProductController()

    {
        if (isset($_POST['search-outline'])) {
            if (isset($_POST['codeSerch'])) {
                $iddm = $_POST['codeSerch'];
            } else {
                $iddm = '';
            }
            // if(isset($_POST['price'])){
            //     $price = $_POST['price'];
            // }
        //    var_dump('hahha');die();


            $listProduct = $this->product->getProductModel($iddm);
        } else {
            $listProduct = $this->product->getProductModel();
        }

        $listCategory = $this->category->CategoryModel();
        include_once './View/product/list.php';
    }
    public function addProductController()
    {
        $listCategory = $this->category->CategoryModel();
        if (!empty($_POST['submit'])) {
            $code = $_POST['code'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $iddm = $_POST['iddm'];
            $target_dir = '../Upload/';
            $random = rand(1, 100);
            $nameFile = $_FILES['file']['name'];
            $target_file = $target_dir . $random . $nameFile;
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            $this->product->addProductModel($code, $name, $target_file, $description, $price, $iddm);
            header('location:?href=product');
        }
        include_once './View/product/add.php';
    }
    public function deleteProductController()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->product->deleteProductModel($id);
            header('location:?href=product');
        }
    }
    public function deleteProductSoftController()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->product->deleteProductSoftModel($id);

            header('location:?href=product');
        }
    }
    public function restoreProductController()
    {
        $productRestore = $this->product->restoreProduct();
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->product->retoreProductUpdate($id);
            header('location:?href=product');
        }
        include_once './View/product/restore.php';
    }
    public function updateProductController()
    {
        $listCategory = $this->category->CategoryModel();
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $dataFillProduct = $this->product->fillDataProductModel($id);
        }
        if (!empty($_POST['submit'])) {
            $id = $_POST['id'];
            $code = $_POST['code'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $target_file = $_POST['file'];
            $size = $_FILES['file']['size'];
            $iddm = $_POST['iddm'];

            if ($size > 0) {
                $target_dir = '../Upload/';
                $random = rand(1, 100);
                $nameFile = $_FILES['file']['name'];
                $target_file = $target_dir . $random . $nameFile;
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            }
            $this->product->updateProductModel($id, $code, $name, $target_file, $description, $price, $iddm);
            header('location:?href=product');
        }
        include_once './View/product/update.php';
    }
    public function addProducteExelController()
    {
       
        if (isset($_POST["import"])) {
            if ($_FILES["file"]["error"] > 0) {
                echo '<h1 style="text-align:center;">Chưa chọn file</h1>';
            } else {
                $inputFileName = 'file.xlsx';
                move_uploaded_file($_FILES["file"]["tmp_name"],  $inputFileName);
                $spreadsheet = IOFactory::load($inputFileName);
                $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                $arrayCount = count($sheetData);
    
                for ($i = 2; $i <= $arrayCount; $i++) {
                    $code = trim($sheetData[$i]["B"]);
                    $name = trim($sheetData[$i]["C"]);
                    $description = trim($sheetData[$i]["D"]);
                    $iddm = trim($sheetData[$i]["E"]);
                    $this->product->ThemMoi("product", ["code_product", "name", "description", "id_category"], ["code_product" => $code, "name" => $name, "description" => $description, "id_category" => $iddm]);
                }
                unlink('file.xlsx');
            }
            header('location:?href=product');
        }
        include_once './View/product/exel.php';
    }
    public function exportExcelController(){
   
        $sheet = $this->spreadsheet->getActiveSheet();
        if(isset($_POST['export']))
	{
		// Get list data
		$dataTin = $this->product->DanhSach("product", ["id", "code_product", "name", "description", "id_category"]);
		// var_dump($dataTin);die();
	
		// Tạo tiêu đề
		$sheet
			->setCellValue('A1', 'STT')
			->setCellValue('B1', 'ID')
			->setCellValue('C1', 'code_product')
			->setCellValue('D1', 'name')
			->setCellValue('E1', 'description')
            ->setCellValue('F1', 'id_category');
		
		// Ghi dữ liệu
		$rowCount = 2;
		foreach ($dataTin as $key => $value) 
		{
			$sheet->setCellValue('A'.$rowCount, $rowCount-1); 
			$sheet->setCellValue('B'.$rowCount, $value->id);
			$sheet->setCellValue('C'.$rowCount, $value->code_product);
			$sheet->setCellValue('D'.$rowCount, $value->name);
			$sheet->setCellValue('E'.$rowCount, $value->description);
            $sheet->setCellValue('F'.$rowCount, $value->id_category);
			$rowCount++;
		}

		// Xuất file
		$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($this->spreadsheet);
		$writer->setOffice2003Compatibility(true);
		$filename=time().".xlsx";
		$writer->save($filename);
		header("location:".$filename);
	}
    }
}

