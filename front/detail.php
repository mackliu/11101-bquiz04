<?php
$goods=$Goods->find($_GET['id']);

?>
<h2 class="ct"><?=$goods['name'];?></h2>
<div class='all pp' style="display:flex">
    <div style="width:66%">
        <img src="./upload/<?=$goods['img'];?>" style="width:90%">
    </div>
    <div style="width:34%">
        <div>分類:<?=$Type->find($goods['big'])['name'] . ">".$Type->find($goods['mid'])['name'];?></div>
        <div>編號:<?=$goods['no'];?></div>
        <div>價格:<?=$goods['price'];?></div>
        <div>詳細說明:<?=$goods['intro'];?></div>
        <div>庫存量:<?=$goods['qt'];?></div>
    </div>
</div>
<div class="ct tt">
    購買數量: <input type="number" name="qt" id="qt" value='1'>
    <a href="#" onclick="buycart()"> <img src="./icon/0402.jpg"></a>
</div>
<div class="ct">
    <button onclick="location.href='index.php'">返回</button>
</div>
<script>

    function buycart(){
        let qt=$("#qt").val()
        location.href=`?do=buycart&id=<?=$goods['id'];?>&qt=${qt}`
    }
</script>