<?php 

//Interface 'CollectAttributes' is created to help with setting and getting attributes from database 
//using OOP approach(setters and getters)

interface CollectAttributes
{
    public function setAttribute($attribute);
    public function getAttribute();
}
