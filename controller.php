<?php
include "model.php";

class controller
{   
    public function showAllMessage()
    {
    	
        $mo = new model;
        $allmessage = $mo->getAllMessage();
        //var_dump($allmessage);
        $var = array ();
        for ($i = 0; $i < $allmessage[1]; $i++) {
            $row = mysql_fetch_assoc($allmessage[0]);
            $var[]=$row;
        }
        //var_dump($var);
       return $var;
    }

   public function addMessage(){}

}	
/*
$co = new controller;
$co -> showAllMessage();*/