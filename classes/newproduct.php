<?php

//The 'NewProduct' class holds definition of methods needed for getting user inputs
//from input fields and setting them as values to be stored in database.
include("abstract/database.php");

class NewProduct extends Database
{
    public $host="sql206.epizy.com";
    public $user="epiz_32973326";
    public $pass="oULi57G0LB0";
    public $db="epiz_32973326_products";
    public $conn;
    public $sku;
    public $name;
    public $price;
    public $attribute;
    public $type;

    public  function connection()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        return $conn;
    }

    public function setSKU($sku)
    {
        $this->sku = $sku;
    }

    public function getSKU()
    {
        return $this->sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public  function AddData($sku, $name, $price, $attribute)
    {
        $con=$this->connection();
        mysqli_query($con,"insert into products values('".$sku."', '".$name."', '".$price."', '".$attribute."')");
        Header("Location:../index.php");
        exit();
    }
}