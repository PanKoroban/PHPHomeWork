<?php
if($_POST['count']){
$count=$_POST['count']+5;
} else $count = 10;
header("Location:index.php?count=$count");