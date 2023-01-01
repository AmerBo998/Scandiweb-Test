<?php 

//class SkuCheck extends Database class and
//defines function for checking if 
//input already exists in the table and returne appropriate answer

include_once("database.php");

class SkuCheck extends Database
{
    public $sku;

    //the function for checking SKU validity

    public function dbSkuCheck()
    {
        $new_sku= $_GET['sku'];
        $con=$this->connection();
        $sql = "SELECT SKU FROM products WHERE SKU='".$new_sku."'";
        $result= $con->query($sql);
        
        if($result->num_rows > 0){
           echo  json_encode("Product with this SKU already exists!");
        }else{
           echo json_encode("true");
        }
    }
    
}




