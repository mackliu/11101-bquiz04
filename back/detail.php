<?php
$order=$Order->find($_GET['id']);


?>
<h2 class="ct">訂單<span style='color:red'><?=$order['no'];?></span>的詳細資料</h2>
<table class="all">
    <tr>
        <td class="tt ct">登入帳號</td>
        <td class="pp"><?=$order['acc'];?></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><?=$order['name'];?></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><?=$order['email'];?></td>
    </tr>
    <tr>
        <td class="tt ct">聯絡地址</td>
        <td class="pp"><?=$order['addr'];?></td>
    </tr>
    <tr>
        <td class="tt ct">聯絡電話</td>
        <td class="pp"><?=$order['tel'];?></td>
    </tr>
</table>
<table class="all">
    <tr class="tt ct">
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <?php
        $cart=unserialize($order['goods']);
        foreach ($cart as $id => $qt) {
            $row = $Goods->find($id);
        ?>
    <tr class="pp tc">
        <td><?= $row['name']; ?></td>
        <td><?= $row['no']; ?></td>
        <td><?= $qt; ?></td>
        <td><?= $row['price']; ?></td>
        <td><?= $row['price'] * $qt; ?></td>
    </tr>
    <?php
        } ?>
</table>
<div class="all ct tt">總價:<?=$order['total'];?></div>
<div class="ct">
    <button onclick="location.href='?do=order'">返回</button>
</div>