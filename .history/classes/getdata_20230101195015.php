<?php 

//The 'GetData' clas is created to handle all methods needed for getting data from database and 
//displaying them properly. 
//It extends abstract class 'Database'  and imeplements 'CollectAttributes' interface
include_once("database.php");

class GetData extends Database
{
    public function showData()
    {
        $con=$this->connection();
        $sql = "SELECT * FROM products ORDER BY sku desc";
        $resultSet = $con->query($sql);
        while ($row = $resultSet->fetch_assoc()) {
        $this->setSKU($row['SKU']);
        $this->setName($row['Name']);
        $this->setPrice($row['Price($)']);
        $this->setAttribute($row['attribute']);
           
        $dataArray[] = [
                
          "SKU" => $this->getSKU($row['SKU']),
          "name" => $this->getName($row['Name']),
          "price"=> $this->getPrice($row['Price($)']),
          "attribute" => $this->getAttribute($row['attribute'])

        ];
        }
        
        return $dataArray;
    }
}



