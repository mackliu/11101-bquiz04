<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類 <input type="text" name="big" id="big"><button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    新增中分類 
    <select name="bigtype" id="bigtype"></select>
    <input type="text" name="mid" id="mid"><button onclick="addType('mid')">新增</button>
</div>
<div id="typeList">

</div>



<h2 class="ct">商品管理</h2>
<div class="ct"><button>新增商品</button></div>
<div id="goodsList">

</div>


<script>
    bigtypes();
    typeList();
    goodsList();
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
            typeList();
        })
    }

    function typeList(){
        $.get("./api/type_list.php",(list)=>{
            $("#typeList").html(list)
        })
    }

    function bigtypes(){
        $.get("./api/get_types.php",{type:'big',parent:0},(options)=>{
            $("#bigtype").html(options)
        })
    }

    function goodsList(){
        $("#goodsList").load("./api/goods_list.php")
    }
</script>