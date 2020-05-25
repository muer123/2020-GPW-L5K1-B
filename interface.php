<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBC Reservation System</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<!--head-->
   <div class="header">
   		<div class="inner">
   			<div class="logo">
   <a href="interface.html" title="railway ticket"><img src="img/logo.jpg" width="350" height="60"/></a>
   			</div>
   			<div class="headlink">
   				<a href="login.php">Login</a>
   				&nbsp;|&nbsp;
   				<a href="register.php">Register</a>
   				
   				
   			</div>
   		</div>
   </div>
<!--head end-->
   <!--middle-->
<div class="middle">
   <div class="cont">
   <!--menu-->
       <div class="class">
         <ul>
           <h3 style="color:#FFF;">Column Sorting</h3>
           <a href="#" class="net"><li>Apply for Booking</li></a>
           <a href="#" class="_all2"><li>Bus Schedule</li></a>
           <a href="#" class="_all3"><li>My Ticket</li></a>
           <a href="#" class="_all4"><li>Change Password</li></a>
           <a href="#" class="_all5"><li>Contact Us</li></a>
         </ul>
       </div>
       <!--menu end-->
       <!--guide-->
     <div class="class_a">
      <!--Apply for Booking-->
           <div class="all1">
             <h4 style="color:#fff">Apply for Booking</h4>
             <form runat="server" method="get" action="">
             <table width="800" height="300" style="margin:auto; margin-top:50px; border:1px solid #FFF;" border="1" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="120">Name:</td>
    <td width="277.6"><input style="width:250px; background:none;" type="text" /><span>*</span></td>
    <td width="120">ID Card:</td>
    <td width="277.6"><input style="width:250px; background:none;" type="text" /><span>*</span></td>
  </tr>
  <tr>
    <td width="120">Phone:</td>
     <td width="277.6"><input style="width:250px; background:none;" type="text" /><span>*</span></td>
    <td width="120">Alternate Phone:</td>
    <td  width="277.6"><input style="width:250px; background:none;" type="text" /></td>
  </tr>
  <tr>
    <td width="120">Bus Number:</td>
    <td width="277.6"><select  style="width:250px; background:none; border:0; outline:none; color:#CCC">
      <option>6402</option>
      <option>8708</option>
        <option>1018</option>
       
    </select><span>*</span></td>
    <td width="120">Origin Station:</td>
     <td width="277.6"><select  style="width:250px; background:none; border:0; outline:none; color:#CCC">
        <option>Chengdu</option>        
    </select><span>*</span></td>
  </tr>
                 
  <tr>
    <td width="120">Terminus:</td>
     <td width="277.6"><select  style="width:250px; background:none; border:0; outline:none; color:#CCC">
        <option>Chengdu</option>
        <option>Jiuzhaigou Valley </option>
        <option>Ya'an City</option>
        <option>Daocheng County</option>
        <option>Kangting</option>
        <option>Lac Son</option>
        <option>Kwong</option>
        <option>Neijiang City</option>
        <option>Mount Emei</option>
        <option>Dujiang Dam</option>
        <option>Conch's Ditch</option>
        <option>Xilin Snow Hill</option>
        
    </select><span>*</span></td>
      
    <td width="120">Date of Departure:</td>
    <td><input  style="width:250px; background:none;" type="datetime-local" /><span>*</span></td>
  </tr>
  <tr>
    <td>Remarks:</td>
    <td colspan="3">
    <textarea placeholder="Please fill in details if necessary！" style="; color:#FFF; outline:none;resize:none;width:670px; height:70px; border:0; background:none;"   name="" cols="0" rows="0"></textarea></td>
    </tr>
</table>
<div class="tom" style="margin-top:20px;">
<input name="clear" style="width:80px; height:30px;" type="reset" value="Empty" />

<input name="play" style="width:80px; height:30px; " type="submit" value="Reserve" />

</div>
<span style="float:right;">Note: note * is required!</span>
</form>                     
   </div>
  <!--apply to ticket end--> 
  <!--bus schedule-->
           <div class="all2">
           <h4 style="color:#fff">Bus schedule</h4>
        <iframe style="border:0; background:rgba(255,255,255,0.5);" scrolling="auto" href="bus-schedule.php" width="1000" height="544"></iframe>
           </div>
   <!--bus schedule--> 
    <!--my ticket--> 
           <div class="all3">
           <h4 style="color:#fff">My ticket</h4>
           
           </div>
         <!--my ticket end--> 
          <!--change password-->    
           <div class="all4" id="all4">
           <h4 style="color:#fff">Change password</h4>
           </div>
           
            <!--change password end--> 
             <!--contact us--> 
           <div class="all5">
          <h4 style="color:#fff">☏&nbsp;&nbsp;Contact Us</h4>
          
       
          </div>
             <!--contact us end--> 
         </div>
          <!--guide end-->
   </div>
   </div>
   
   
   <!--middle end-->
<div class="foot">
      
   
</div>
</body>
<script src="js/jquery.min1.js"></script>
<script src="js/home.js"></script>

</html>
