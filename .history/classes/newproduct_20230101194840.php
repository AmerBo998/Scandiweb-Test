<?php

//The 'NewProduct' class holds definition of methods needed for getting user inputs
//from input fields and setting them as values to be stored in database.
include_once("database.php");

class NewProduct extends Database
{
    public  function AddData($sku, $name, $price, $attribute)
    {
        
        $con=$this->connection();
        mysqli_query($con,"insert into products values('".$sku."', '".$name."', '".$price."', '".$attribute."')");
        Header("Location:../index.php");
        exit();
    }
}