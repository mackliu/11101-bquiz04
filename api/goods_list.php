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
            <button onclick="sh(this,<?=$row['id'];?>,1)">上架</button>
            <button onclick="sh(this,<?=$row['id'];?>,0)">下架</button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<script>
    function sh(dom,id,sh){
        $.post('./api/sh.php',{id,sh},()=>{
            switch(sh){
                case 1:
                    $(dom).parent().prev().text('販售中')
                break;
                case 0:
                    $(dom).parent().prev().text('己下架')    
                break;

            }
        //     location.reload();
        })
    }
</script>