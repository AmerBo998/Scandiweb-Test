<?php 

//The 'MassDelete'  class is created to define connection with database and 
//to define method for mass deleting process. 
include_once("abstract/deleteclass.php");


class MassDelete extends DeleteClass
{
    public function dbConnection()
    {      

        $connection = mysqli_connect("sql206.epizy.com", "epiz_32973326",
         "oULi57G0LB0", "epiz_32973326_products" );
      
        return $connection;
    }

    public function MassDeleteData($selected)
    {
        $con=$this->dbConnection();
        foreach($_POST[$selected] as $productId)
        {
            $deleteProduct = "DELETE from products WHERE SKU='".$productId."'";
            $con->query($deleteProduct);
          }          
          Header("Location: ../index.php");
    }
}
