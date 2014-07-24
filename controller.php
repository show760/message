<?php
include "model.php";
include "view.php";

class controller
{   
    public function showAllMessage()
    {
    	
        $mo = new model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array(count($var), $var);
        //var_dump($show);
        return view::AllMessage($show, "allmessage.php");
       // return $show;
    }

   public function addMessage(){}

}	

$co = new controller;
$co -> showAllMessage();
