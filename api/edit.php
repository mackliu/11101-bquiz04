<?php
include_once "../base.php";
$DB=new DB($_POST['table']);
$id=$_POST['id'];
$row=$DB->find($id);
 foreach($_POST['form'] as  $col){
    $row[$col['name']]  =$col['value'];
} 

$DB->save($row);