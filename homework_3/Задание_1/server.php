<?php
require_once 'connect.php';

//для index.php

class Galary{
   public $db_name;
   public $link;

   function __construct($db_name, $link){
       $this->db_name = $db_name;
       $this->link = $link;
   }

   function getImg(){
       $query = "SELECT * FROM {$this->db_name}";
       $res = mysqli_query($this->link, $query);
       $a = [];
       $i=0;
       while($row = mysqli_fetch_assoc($res)){
           $a[$i]=$row;
           ++$i; 
           }
       return $a;
   }

}

$obj = new Galary('img', Singleton::getInstance());
$a = $obj->getImg();



// для full.php
$name = $_GET['name'];