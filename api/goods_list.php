<?php 

include_once "../base.php";
?>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <?php
    $rows=$Goods->all();
    foreach($rows as $row){
    ?>
    <tr class="pp ct">
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['qt'];?></td>
        <td><?=($row['sh']==1)?"販售中":"已下架";?></td>
        <td>
            <button>修改</button>
            <button onclick="del('goods',<?=$row['id'];?>)">刪除</button>
            <button onclick="sh(<?=$row['id'];?>,'on')">上架</button>
            <button onclick="sh(<?=$row['id'];?>'off')">下架</button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>