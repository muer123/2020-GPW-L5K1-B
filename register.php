<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Register</title>
<link type="text/css" rel="stylesheet" href="css/register.css" />
</head>
<body>
<!--head-->
   <div class="header">
   		<div class="inner">
   			<div class="logo">
   <a href="interface.php" title="ticket"><img src="img/logo.jpg" width="350" height="60"/></a>
   			</div>
   			<div class="headlink">
   				<a href="login.php">Login</a>
   			</div>
   		</div>
   </div>
<!--head end-->
<div class="middle">
   <div class="cont">
     <ul>
        <li>
        <span class="user_t" style="box-shadow:0px 0px 5px 4px #fff; ">
        </span>Fill in
        </li>
        <li><span class="user_y"></span>Verify</li>
        <li><span class="user_z"></span>Registered successfully</li>
     </ul>
     
     <div class="user">
     <h3>User Register</h3>
 <form method="post" action="">
 <div class="input">
 <label>Username</label><input value="" placeholder=""  autocomplete="off" type="text" name="name" id="name" />&nbsp;<span class="t"></span></div>
 <div class="input">
 <label >Password</label><input placeholder="" type="password" name="pw" id="pw" />&nbsp;<span class="t1"></span>
 <br />
 </div>
  <div class="input">
 <label for="pw">Indentify</label><input value="" placeholder="" type="password" name="pw1" id="pw1" />&nbsp;<span class="t2"></span>
 </div>
 
 <div class="input" id="input">
 <label></label>
 <input type="button" id="submit" class="submit" style="width:220px;" value="Next step" />
 </div>
</form> 
<br />
<a href="#" style="color:#FFC; display:block; margin-top:20px;">
By registering, you agree to our service agreement and privacy policy.
</a>
    </div>

  
  <!--verify-->
   <div class="validate">
      <h3>User authentication </h3>
      <p id="tel">Please click to get the phone number below<span style="text-decoration:underline;" id="tell"></span>The verification code,
<br />Please complete the validation before obtaining the validation again.
Note: do not refresh the page!</p>
    <div style="padding-left:88px;">
      <input type="text" id="yz" name="yz" placeholder="case sensitive" />
      
     

      <button style=" cursor:pointer;background:#fabf1f; border:0; border-radius:5px; color:#FFF;width:100px; height:30px" onclick="document.getElementById('y_z_m').innerHTML = y_z_m();">Click to get the captcha</button> <span id="y_z_m"></span>
      &nbsp;<span class="yzm"></span>
    </div>
    <div style="padding-left:88px; margin-top:50px;">
    <input type="button" id="wanc" class="wanc" style="width:220px;" autocomplete="off" value="complete registration" />
    </div>
     <div style="padding-left:88px; margin-top:50px;">
    <input type="button" id="enter" class="enter" style="width:220px;" autocomplete="off" value="Return to the previous layer" />
    </div>
   </div>
  <!--verify end-->
       
      <div class="complete">
         
          <p><img src="images/timg.png" width="100" height="100" />Congratulations, use<span id="mob"></span>Mobile phone number registered successfully!</p>
          
          <div class="dj">Click on me to log in!</div>
      
      
      </div>
  
   </div>
   </div>
       
</body>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
</html>
