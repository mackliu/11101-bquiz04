<?php
include_once "../base.php";

$type=$_GET['type'];
$parent=$_GET['parent'];
$rows=[];
switch($type){
    case 'big':
        $rows=$Type->all(['parent'=>0]);
    break;
    case "mid":
        $rows=$Type->all(['parent'=>$parent]);
    break;
}

foreach($rows as $row){
    echo "<option value='{$row['id']}'>{$row['name']}</option>";
}
