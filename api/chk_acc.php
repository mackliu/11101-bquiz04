<?php

include_once "../base.php";

$table=$_POST['table'];
$DB=new DB($table);

$chk=$DB->math('count','id',['acc'=>$_POST['acc']]);

/* if($chk>0){
    echo 1;
}else{
    echo 0;
} */

echo ($chk>0)?1:0;