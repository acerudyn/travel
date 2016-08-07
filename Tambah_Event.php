<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Page</title>
<link rel="shortcut icon" type="image/x-icon" href="images/images/bl.ico">
<style type="text/css">
* {
	
	list-style-type:none;
	margin:0;
	padding:0;
}
header {
	
     width:100%;
     height:60px;
     background:#4B9DD8;
     float:left;
}
#isi-kiri {
    border: 1px	solid #4B9DD8;
    width:240px;
    height:510px;	
    margin-top:30px;
    margin-left:20px;
    text-align:center;
    float:left;

text-shadow: #6DBDE9;	

}
#name-admin {
	margin-top:10px;
	margin-left:20px;
	width:200px;
	height:30px;
	background:#4B9DD8;
	color:#fff;
}
img.home {
	margin-left:100px;
    margin-top:1px;	
    width:84px;
    height:80px;	
}

img.foto {
    width:200px;
    height:200px;
    margin-top:30px;	
}


nav ul {
    position:relative;
	margin-top:20px;
	margin-left:20px;
	float:left;
}
nav ul li {

   background:#4B9DD8;	
   width:200px;
   color:#fff;
   padding-top:20px;	
   height:20px;
   text-align:center;
   border-bottom:1px solid #FFFFFF;	
   
}

nav ul li a{

color:#fff;	

}
nav ul ul{
	
	display:none;
	
} nav ul li:hover > ul {
	
  display:block;
  position:relative;
  top:100%;
  bottom:100%;
  
}

#kontent {
	width:1000px; 
	height:350px;
	margin-left:30px;
    margin-top:30px;
    float:left;	

}
textarea {
	border-radius:10px;
	width:800px;
	height:200px;
	margin-left:40px;
	
}
footer {
	padding-top:10px;
	margin-top:30px;
	float:left;
    width:100%;
    height:50px;
    background:#4B9DD8;
    text-align:center;
	
 }

td{
	
	border:1px solid #4B9DD8;	
}


</style>
</head>

<body>
<header>
 <a href="Admin.php"> <img src="images/logo-home_03_03.png" alt="" class="home"> </a>

</header>
 <div id="isi-kiri">
  <div id="name-admin">
    <h3>Admin</h3>
  </div>
 <img src="images/user-admin_03.png" alt="" class="foto">
<nav>

<ul>
  <li><a href="Ganti_password.php">AKUN</a></li>
  <li><a href="List_berita.php">BERITA</a></li>
  <li><a href="List_Event.php">EVENT</a></li>
  <li><a href=".php">ANGGOTA</a></li>
  <li><a href="index.php">LOGOUT</a></li>
</ul>
</nav>
</div>
 <div id="kontent">
 <form action="" method="post">
 <table width="">
     <tr>
        <td colspan="2" width="800" align="center"><H3> TAMBAH EVENT</H3> </td>
    </tr>
  <tr>
     <td colspan="2" width="1000">Waktu  &nbsp;   &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;      : <input type="text" name="judul"></td>   
  </tr>
  <tr>
      <td colspan="2" width="1000">Tempat  &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
   <tr>
      <td colspan="2" width="1000">Upload File   &nbsp;  : <input type="file" value=""> </td>
   </tr>
   <tr>
      
      <td width="80">Keterangan</td>
      <td width="900" height="350"><textarea name="isi"></textarea></td>
   </tr> 
   <tr>
      <td colspan="2" width="900" height="40" align="center"><input type="submit" value="Simpan">
      <input type="reset"  value="Hapus"></td>
   </tr> 
 
 </table>
 </form>
 </div>
 <footer>
  <p>Copyright Design by &copy; D.Multiana_13</p>
 </footer>
</body>
</html>