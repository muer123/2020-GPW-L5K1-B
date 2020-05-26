  
 $(".submit").click(function(){
   	     var name = $("input[name='name']").val().trim();
   	     var pw = $("input[name='pw']").val().trim();
		  var pw1 = $("input[name='pw1']").val().trim();
         var phone=/^1[34578]\d{9}$/;/*验证手机号*/
		 var p=/^.{8,20}$/;/*匹配8-20的除开空格*/
   

   	   if(name.length<1)
   	   {
   	   	   $(".t").html('请输入手机号').css("color","#F00").css("font-size","16px");
		   alert("请输入手机号");
   	   	   return;
   	   }
   	   if(!phone.test(name)/* && !patrn_1.test(username)*/)
   	   {
          $(".t").html('×').css("color","#F00").css("font-size","25px");
		   alert("手机号格式不正确");
   	   	   return;
   	   } 
	  
        if(pw.length==0)
        {
        	$(".t1").html('请输入密码').css("font-size","16px").css("color","red");
			 alert("请输入密码");
   	   	   return;
        }
		if(!p.test(pw)){
			
			$(".t1").html('密码格式不正确').css("font-size","16px").css("color","red");
			 alert("密码格式不正确");
			 return;
			}
			if(pw!=pw1){
				$(".t2").html('密码不一致,请重试！').css("font-size","16px").css("color","red");
				}
		
		else{
			document.getElementById("submit").value="请稍后... ...";
			<!--window.location="";js页面跳转-->
			
			$(".validate").show(200)
			$(".user").hide(200);
             document.getElementById("tell").innerHTML=name;
			 $(".user_y").css("box-shadow","0px 0px 5px 4px #fff"); 
			}
			
	 

   });
 
$(document).ready(function(e) {
	$(".enter").on("click",function(){
		$(".validate").hide(200);
		$(".user").show(200);
		document.getElementById("submit").value="下一步";
		 $(".user_y").css("box-shadow","none");
		});
});

<!--完成-->
 function y_z_m(){
        var arr = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'];
        var str = '';
        for(var i = 0 ; i < 4 ; i ++ )
            str += ''+arr[Math.floor(Math.random() * arr.length)];
        return str;
    }
$("#wanc").click(function(){
	   
	var name = $("input[name='name']").val().trim();
	    var yz= $("input[name='yz']").val().trim();
	    var yz1=/^['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9']{4}$/;
			if(yz.length==0){
				$(".yzm").html('请输入验证码').css("font-size","16px").css("color","red");
				return;		
				}
				if(document.getElementById("y_z_m").innerHTML!=yz){
					$(".yzm").html('请输正确入验证码').css("font-size","16px").css("color","red");
					return;	
					
					}
			if(!yz1.test(yz)){
				
				$(".yzm").html('验证码格式不正确').css("font-size","16px").css("color","red");
				return;		
				
				}
				else{
					$(".complete").show(200);
					$(".validate").hide(200);
					document.getElementById("mob").innerHTML=name;
					$(".user_z").css("box-shadow","0px 0px 5px 4px #fff");		
					}
	
	});
$(".dj").click(function(){
	
	window.location="login.html";
	});
<!--完成 end-->
  
   //清空
   $("#name,#pw,#pw1,#yz").focus(function(){
   	   $(".t,.t1,.t2,.yzm").html('');
   });
