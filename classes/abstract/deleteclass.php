<?php 

//Abstract class 'DeleteClass' is created to help establishing connection with database and to
//execute deleting process when option 'Mass delete' is clicked

abstract class DeleteClass
{
    abstract public function dbConnection();
    
    abstract public function massDeleteData($selected);
}


