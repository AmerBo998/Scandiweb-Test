<?php 

//Action file when submitting form 'mass_delete' for mass deleting selected products
include_once("../classes/massdelete.php");

$deleteObject=new MassDelete();

$deleteObject->MassDeleteData('toDelete');
