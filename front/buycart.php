<?php

if (isset($_GET['id'])) {
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}

if (!isset($_SESSION['mem'])) {
    to("?do=login");
}

if (empty($_SESSION['cart'])) {
    echo "<h2 class='ct'>購物車目前無商品</h2>";
} else {
?>

    <h2 class="ct"><?= $_SESSION['mem']; ?>的購物車</h2>
    <table class="all">
        <tr class="tt ct">
            <td>編號</td>
            <td>商品名稱</td>
            <td>數量</td>
            <td>庫存量</td>
            <td>單價</td>
            <td>小計</td>
            <td>刪除</td>
        </tr>

        <?php
        foreach ($_SESSION['cart'] as $id => $qt) {
            $row = $Goods->find($id);
        ?>

            <tr class="pp ct">
                <td><?= $row['no']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $qt; ?></td>
                <td><?= $row['qt']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['price'] * $qt; ?></td>
                <td>
                    <img src="./icon/0415.jpg" alt="">
                </td>
            </tr>

    <?php
        }
        echo "</table>";
    }
    ?>

    <div class="ct">
        <a href="index.php"><img src="./icon/0411.jpg" alt=""></a>
        <a href="?do=checkout"><img src="./icon/0412.jpg" alt=""></a>
    </div>