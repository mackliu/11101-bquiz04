
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
        <?php
            $a=rand(10,99);
            $b=rand(10,99);
            echo $a . " + " . $b . " = ";
            $_SESSION['ans']=$a+$b;
        ?>    
        <input type="text" name="code" id="code"></td>
    </tr>
</table>
<div class="ct"><button onclick="login('admin')">確認</button></div>