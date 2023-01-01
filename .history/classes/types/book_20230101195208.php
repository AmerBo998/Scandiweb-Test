<?php 

//Class Book is created to get attribute when opetion 'Book' is selected in #productType
//It extends Type abstract class which is created to help with getting attribute of selected type
include_once("../classes/abstract/type.php");

class Book extends Type
{
    public function getAttribute()
    {
        return "Weight: ".$_POST['weight']."KG";
    }
}