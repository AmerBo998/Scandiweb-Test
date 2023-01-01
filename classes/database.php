<?php 

//Class 'Database' is created for establishing database connection and 
//setting and getting basic data about products, both when inserting data and when getting data
//from database

class Database
{

    public $sku;
    public $name;
    public $price;
    public $attribute;
    public $type;

    public function connection()
    {
        $conn = mysqli_connect("localhost", "root", "", "products");
        
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

    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }

    public function getAttribute()
    {
        return $this->attribute;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}