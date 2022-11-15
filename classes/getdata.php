<?php 

//The 'GetData' clas is created to handle all methods needed for getting data from database and 
//displaying them properly. 
//It extends abstract class 'Database'  and imeplements 'CollectAttributes' interface
include_once("abstract/database.php");
include_once("./interfaces/collectattributes.php");

class GetData extends Database implements CollectAttributes
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
     
    public  function connection()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db );
        
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
        
    public  function showData()
    {
        $con=$this->connection();
        $sql = "SELECT * FROM products ORDER BY sku desc";
        $resultSet = $con->query($sql);
        while($row = $resultSet->fetch_assoc()){
        $this->setSKU($row['SKU']);
        $this->setName($row['Name']);
        $this->setPrice($row['Price($)']);
        $this->setAttribute($row['attribute']);
    echo "<div class='product'>
    <input type='checkbox' class='delete-checkbox' name='toDelete[]' value='".$this->getSKU()."'>
    <div class='product_info'>".$this->getSKU()."<br>".$this->getName()."<br>".$this->getPrice()."$<br>".$this->getAttribute()."</div>
    </div>";
        }
    }
}
