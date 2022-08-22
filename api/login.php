<?php
include_once "../base.php";

$DB=new DB($_GET['table']);
$chk=$DB->math('count','id',['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);

if($chk>0){
    $_SESSION[$_GET['table']]=$_GET['acc'];
    echo 1;
}else{
    echo 0;
}