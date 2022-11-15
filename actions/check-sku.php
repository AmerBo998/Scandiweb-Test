<?php 

//Action file that is executed onece Ajax call was triggered

include_once("../classes/skuCheck.php");

$check=new skuCheck();

$check->dbSkuCheck();




?>