<?php
include_once "../base.php";
$_POST['no']=date("Ymd").rand(100000,999999);
$_POST['acc']=$_SESSION['mem'];
$_POST['goods']=serialize($_SESSION['cart']);
$_POST['orddate']=date("Y-m-d");
$Order->save($_POST);
