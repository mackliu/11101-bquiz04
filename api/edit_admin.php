<?php
include_once "../base.php";
$_POST['pr']=serialize($_POST['pr']);
$Admin->save($_POST);
to("../back.php?do=admin");

//$id=$_POST['id'];
//$row=$Admin->find($id);
/* dd($_POST);
dd($row); */

/* foreach($_POST as $col => $value){
    echo $col."=>".$value."<br>";
    $row[$col]  =$value;
}  */
