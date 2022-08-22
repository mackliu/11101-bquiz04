<h2 class="ct">會員註冊</h2>
<table class="all" id="regform">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
            <button onclick="chkAcc()">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td class="tt ct">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct"><button onclick="reg()">註冊</button><button onclick="$('#regform input').val('')">重置</button></div>


<script>

function chkAcc(){
    let acc=$("#acc").val();
    $.post("./api/chk_acc.php",{table:'mem',acc},(chk)=>{
        if(parseInt(chk)===1 || acc==='admin'){
            alert("此帳號己被使用，請選擇其他帳號")
        }else{
            alert("此帳號可使用")
        }
    })
}

function reg(){
    let user={
        acc:$("#acc").val(),
        pw:$("#pw").val(),
        name:$("#name").val(),
        addr:$("#addr").val(),
        email:$("#email").val(),
        tel:$("#tel").val(),
    }
    $.post("./api/chk_acc.php",{table:'mem',acc:user.acc},(chk)=>{
        if(parseInt(chk)===1 || user.acc==='admin'){
            alert("此帳號己被使用，請選擇其他帳號")
        }else{
            $.post("./api/reg.php",user,()=>{
                location.href='index.php?do=login';
            })
        }
    })
}

</script>