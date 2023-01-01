<?php 

//Abstract class 'Database' is created for establishing database connection and 
//setting and getting basic data about products, both when inserting data and when getting data
//from database

abstract class Database
{
    abstract public function connection();

    abstract public function setSKU($sku);

    abstract public function setName($name);

    abstract public function setPrice($price);

    abstract public function getSKU();

    abstract public function getName();
    
    abstract public function getPrice();
}