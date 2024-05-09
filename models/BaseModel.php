<?php

namespace App\Models;

use PDO;

require_once 'env.php';

class BaseModel
{

    protected $connect;
    function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST
                . ";dbname=" . DBNAME,
            DBUSER,
            DBPASS
        );
    }
    public function Chuoi($param)
		{
			$sql=$this->connect->prepare($param);
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}
    function ProData($sql, $getDataALL = true)
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        if ($getDataALL) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
