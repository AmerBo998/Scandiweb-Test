<?php 

//Action file that is executed when validating SKU input

include_once("../classes/skuCheck.php");

$check=new skuCheck();

$check->dbSkuCheck();




?>
