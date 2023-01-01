<?php 

//Class Book is created to get attribute when opetion 'Book' is selected in #productType
//It implements Type interface which is created to help with getting attribute of selected type
include_once("../interfaces/type.php");

class Book implements Type
{
    public function getAttribute()
    {
        return "Weight: ".$_POST['weight']."KG";
    }
}