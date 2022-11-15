<?php 

//class SkuCheck extends abstract class checkSku and
//defines connection, setter, getter and function for checking if 
//input already exists in the table and returne appropriate answer

include_once("abstract/checkSku.php");

class SkuCheck extends checkSku
{

    public $sku;

    public function dbConnection()
    {      

         $connection = mysqli_connect("sql206.epizy.com", "epiz_32973326",
         "oULi57G0LB0", "epiz_32973326_products" );

        
      
        return $connection;
    }

    //the function for checking SKU validity

    public function dbSkuCheck()
    {
        
            $new_sku= $_GET['sku'];
        $con=$this->dbConnection();
        $sql = "SELECT SKU FROM products WHERE SKU='".$new_sku."'";
        $result= $con->query($sql);
        if($result->num_rows > 0) 
        
            echo  json_encode("Product with this SKU already exists!");
        
        else
            
            echo json_encode("true");
    
    }
    
}




?>