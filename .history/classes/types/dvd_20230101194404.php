<?php 
//Class DVD is created to get attribute when opetion 'DVD' is selected in #productType
//It implements Type interface which is created to help with getting attribute of selected type

include_once("../interfaces/type.php");

class DVD implements Type
{
    public function getAttribute()
    {
        return "Size: ".$_POST['size']." MB";
    }
}

