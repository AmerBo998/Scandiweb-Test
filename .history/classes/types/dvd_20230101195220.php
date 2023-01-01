<?php 
//Class DVD is created to get attribute when opetion 'DVD' is selected in #productType
//It extends Type abstract class which is created to help with getting attribute of selected type

include_once("../classes/abstract/type.php");

class DVD extends Type
{
    public function getAttribute()
    {
        return "Size: ".$_POST['size']." MB";
    }
}

