<?php 

//The 'Type' abstract class is created to help with getting product attributes 
//during the 'insert-new-product' process.

abstract class Type
{
    public abstract function getAttribute();
}
