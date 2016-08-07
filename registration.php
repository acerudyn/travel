<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Registration</title>
<link rel="shortcut icon" type="image/x-icon" href="images/images/bl.ico">
 <style type="text/css">
 
header{
 float:left;	
 width:100%;
 height:50px;
 background:#4B9DD8;
text-align:center;

 }

	
	

 .registration 
 {  
    pos:relative;
	text-align:center;
	}
	
	
img.form-img{
   margin-top:10%;
   width:380px;
   height:460px;

 }

.field:nth-child(5) {
	
	margin-top:45%;
	width:165px;
	height:38px;
}

.field:nth-child(3) {
	margin-top:22%;
}


form{
	
    position:absolute;
	top:39%;
	left:39%
}
 input.field {	  
    
   
	text-align:center;
	display:block;
	height:25px;
	width:180px;
	margin-top:17%;
	background:none;
    border:none;
	outline:none;
	
	
}

 </style>
</head>

<body>
 
 <header>
  <a href="index.php"> 
   <img src="images/logo-home_03_03.png" alt="" class="home"> </a> </header>

  
   <div class="registration">
     <img src="images/D-_Web-Tool-Programing_My-Project_images_images_images_images_images_Form-Registrasi-er_03.jpg" alt="" class="form-img">
       </div> 
       
      
     <form action="" method="post">
       <input type="Username" name="username" placeholder="" class="field">
       <input type="password" name="password" maxlength="8" placeholder="********"  class="field">
       <input type="password" name="re-password" maxlength="8" placeholder="********" class="field">
       <input type="e-mail" name="e-mail" placeholder="" class="field">
       <input type="submit" value="" class="field">
     </form>
      

</body>

</html>
