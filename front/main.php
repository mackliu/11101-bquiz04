<?php
if(isset($_GET['type']) && $_GET['type']!=0){
    $type=$Type->find($_GET['type']);
    if($type['parent']==0){
        $typebig=$type['name'];
        $rows=$Goods->all(['sh'=>1,'big'=>$type['id']]);
    }else{
        $typemid=" > ".$type['name'];
        $typebig=$Type->find($type['parent'])['name'];
        $rows=$Goods->all(['sh'=>1,'mid'=>$type['id']]);
    }
}else{
    $typebig="全部商品";
    $rows=$Goods->all(['sh'=>1]);
}

?>
<h2><span><?=$typebig;?></span><span><?=$typemid??'';?></span></h2> 
<?php
foreach($rows as $row){
?>
<div style="width:90%;margin:auto;display:flex" class="pp">
    <div style="padding:1rem;width:35%;text-align:center">
        <a href="?do=detail&id=<?=$row['id'];?>">
            <img style="width:80%" src="./upload/<?=$row['img'];?>" alt="">
        </a>
    </div>
    <div style="width:65%">
        <div class="tt"><?=$row['name'];?></div>
        <div>
            價錢:<?=$row['price'];?>
            <a style="float:right" href="?do=buycart&id=<?=$row['id'];?>&qt=1">
                <img src="./icon/0402.jpg" alt="">
            </a>
        </div>
        <div>規格:<?=$row['spec'];?></div>
        <div>簡介:<?=mb_substr($row['intro'],0,25);?>...</div>
    </div>
</div>
<?php
}
?>