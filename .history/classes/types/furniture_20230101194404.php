<?php 

//Class Furniture is created to get attribute when opetion 'Furniture' is selected in #productType
//It implements Type interface which is created to help with getting attribute of selected type

include_once("../interfaces/type.php");

class Furniture implements Type
{
    public function getAttribute()
    {
        return "Dimensions: ".$_POST['height']."x".$_POST['width']."x".$_POST['length'];
    }
}

