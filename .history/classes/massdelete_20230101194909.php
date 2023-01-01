<?php 

//The 'MassDelete'  class is created to define method for mass deleting process. 
include_once("database.php");


class MassDelete extends Database
{
    public function MassDeleteData($selected)
    {
        $con=$this->connection();
        foreach($_POST[$selected] as $productId)
        {
            $deleteProduct = "DELETE from products WHERE SKU='".$productId."'";
            $con->query($deleteProduct);
        }          
          Header("Location: ../index.php");
    }
}
