<h2 class="ct">會員管理</h2>
<table class="all">
    <tr class="tt ct">
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
    <?php
    $rows=$Mem->all();
    foreach($rows as $row){
    ?>
    <tr class="pp ct">
        <td><?=$row['name'];?></td>
        <td><?=$row['acc'];?></td>
        <td><?=$row['regdate'];?></td>
        <td>
            <button>修改</button>
            <button>刪除</button>
        </td>
    </tr>
    <?php
    }

    ?>    
</table>