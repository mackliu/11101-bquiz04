<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類 <input type="text" name="big" id="big"><button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    新增中分類 
    <select name="bigtype" id="bigtype"></select>
    <input type="text" name="mid" id="mid"><button onclick="addType('mid')">新增</button>
</div>
<table class="all">
    <tr class="tt">
        <td></td>
        <td>
            <button>修改</button><button>刪除</button>
        </td>
    </tr>
</table>



<h2 class="ct">商品管理</h2>
<div class="ct"><button>新增商品</button></div>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <tr class="pp ct">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button>修改</button>
            <button>刪除</button>
            <button>上架</button>
            <button>下架</button>
        </td>
    </tr>
</table>

<script>
    bigtypes();

    function addType(type){
        let name,parent;
        switch(type){
            case 'big':
                name=$("#big").val();
                parent=0;
            break;
            case 'mid':
                name=$("#mid").val();
                parent=$("#bigtype").val();
            break;
        }
        $.post("./api/save_type.php",{name,parent},()=>{
            bigtypes();
            $("#big,#mid").val('')
        })
    }

    function bigtypes(){
        $.get("./api/get_types.php",{type:'big',parent:0},(options)=>{
            $("#bigtype").html(options)
        })
    }
</script>