// JavaScript Document
function lof(x)
{
	location.href=x
}

function login(table){
	let ans=$("#code").val();
	let user={acc:$("#acc").val(),pw:$("#pw").val(),table}

	$.get("./api/ans.php",{ans},(chk)=>{
		if(parseInt(chk)===1){
			$.get("./api/login.php",user,(chk)=>{
				if(parseInt(chk)===1){
					switch(table){
						case 'mem':
							location.href='index.php'
						break;
						case 'admin':
							location.href='back.php'
						break;
					}
				}else{
					alert("帳號或密碼有誤")
				}
			})
		}else{
			alert("對不起，您輸入的驗證碼有誤請您重新登入")
		}
	})

}

function logout(table){
	$.get("./api/logout.php",{table},()=>{
			location.href='index.php'
	})
}

function del(table,id){
	$.post("./api/del.php",{table,id},()=>{
		location.reload()	
	})
}