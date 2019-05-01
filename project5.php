<html>
<head>
<link rel="shortcut icon"  href="title.jpg">
<title>
 POTOBOOK
</title> 
</head>
<style>
body{
margin:0;
padding:0;
background:url(back.jpg);
background-size:cover;
background-position:center;
background-repeat:no-repeat;                   
font-family:sans-serif;
}
.footer p{
margin:0;
padding:15px 260px 20px;
font-size:16px;
color:grey;

}
.header
{

width:2732px;
height:66px;
background-color:#000;
top: 0%;
position :fixed;
box-sizing: border-box;

}
.footer
{

width:2000px;
height:50px;
background-color:#000;
bottom: 0%;
position :fixed;
left:0px;
box-sizing: border-box;

}
.logo
{
width:66px;
  height:66px;
  position:fixed;
  top: 0px;
  right: 0px;
}
.facebook
{
width:40px;
  height:40px;
 top:5px;
  position:absolute;
  left: 480px;
}
.twitter
{
width:40px;
  height:40px;
 top:5px;
  position:absolute;
  left: 525px;
}
.gmail
{
width:40px;
  height:40px;
 top:5px;
  position:absolute;
  left: 570px;
}
.instagram
{
width:40px;
  height:40px;
 top:5px;
  position:absolute;
  left: 615px;
}
.blog
{
width:40px;
  height:40px;
 top:5px;
  position:absolute;
  left: 660px;
}
.youtube
{
width:40px;
  height:40px;
 top:5px;
  position:absolute;
  left: 705px;
}
.Home
{
width:100px;
height:91px;
background:#6FAAED;
color:#000;
top: -30%;
left:750px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 19px;
font-style: Monospace;
}
.Home:hover
{
background:#fb2525;
color:White;
}
.User
{
width:100px;
height:91px;
background:#6FAAED;
color:black;
top: -30%;
left:872px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 16px;
font-style: Monospace;
}
.Sitting
{
width:100px;
height:91px;
background:#fb2525;
color:White;
top: -30%;
left:991px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 11px;
font-style: Monospace;
}
.User:hover
{
background:#fb2525;
color:White;
}
.Hello h2
{
margin:0;
padding:25px 120px ;
color:white;
}
.header h3
{
margin:-80px 1200px;
padding:30px 10px ;
color:white;
}
.uploadphoto
{
width:400px;
height:400px;
background:black;
color:White;
top: 20%;
left:40%;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 11px;
font-style: Monospace;
}
.uploadphoto  input[type="submit"]
{
border: none;
outline: none;
height: 40px;
background: #0A78F6;
color: white;
font-size: 18px;
border-radius:20px;
}
.uploadphoto input[type="submit"]:hover
{
filter:blur(1px) ;
background:#fb2525;
}
.avatar 
{
width:200px;
height:200px;
border-radius:50px;
top:100px;
left:10ppx;
}
.profilepic
{ position:fixed;
  top: 5px;
  left: 20px;
border-radius:50%;
width:50px;
height:100px;
}
.profilepic :hover
{
filter:blur(1px) brightness(70%);
}
.avatar
{
width:60px;
height:60px;
text-align:center;
}
</style>
<body>
<div class="header">
<a href="project.php"><img src="title.jpg" class="logo"></a>
<a href="project3.php"><div class="home">
<h2> Home </h2>
</div></a>

 <?php 
session_start();
$username=$_SESSION["username"];

if(empty($username))
{
?>
<a href="project.php"><div class="User">
<h2> login </h2>
</div></a>

<div class="Hello">
<h3>
<?php
echo "login";
?>
</h3>
</div>
<?php
}
else
{
?>
<a href="project4.php"><div class="Sitting">
<h2> Setting </h2>
</div></a>
<div class="Hello">
<h2>
<?php
 echo $_SESSION["username"]; 
?>
</h2>
<h3>
logout
</h3>
</div>
<a href="Project2%20New.php"><div class="User">
<h2> Profile </h2>
</div></a>
<?php
}
?>

</div>

<div class="uploadphoto">
<form action="" method="post">
 <input type="file" name="fileupload" value="choose" >
<br>
<br>
<input type="submit" name="Submit" value="Change profile picture" >
 </form>

<?php
$db=mysqli_connect('localhost','root','POTO','register');
if(isset($_POST['Submit']))
{
echo dirname($_POST["fileupload"]);
$path= $_POST["fileupload"];


$query=" UPDATE userdata SET image='$path' WHERE Username='$username'" ;
$result=mysqli_query($db,$query);
mysqli_query($db," UPDATE postes SET image='$path' WHERE Username='$username'");

?>

<?php
$query="SELECT image FROM userdata WHERE Username = '$username' ";
$result=mysqli_query($db,$query);
$psql=mysqli_fetch_array($result);
?>
<img src=<?php echo $psql[0]; ?> class="avatar">

<?php
}
?>
</div>
<div class="profilepic">
<?php
$queryqq="SELECT image FROM userdata WHERE Username = '$username'";
$resultqq=mysqli_query($db,$queryqq);
$psqlqq=mysqli_fetch_array($resultqq);
?>
<div class="photo">
<a href="Project2%20New.php"><img src=<?php echo $psqlqq[0]; ?> class="avatar" >
</a>
</div>
<div class="footer">
<p> Contact With Us </p> 
<a href="https://www.facebook.com/"><img src="facebook.png" class="facebook"></a>
<a href="https://www.twitter.com/"><img src="twitter.png" class="twitter"></a>
<a href="https://mail.google.com/mail/"><img src="gmail.png" class="gmail"></a>
<a href="https://www.instagram.com/?hl=en"><img src="insagram.png" class="instagram"></a>
<a href="https://wordpress.com/create-blog/?utm_source=adwords&utm_medium=cpc&keyword=blog&creative=289908980634&campaignid=655562324&adgroupid=60055999404&matchtype=e&device=c&network=g&sgmt=gb&utm_source=adwords&utm_campaign=Google_WPcom_Search_Non_Desktop_RoW_en&utm_medium=cpc&keyword=blog&creative=289908980634&campaignid=655562324&adgroupid=60055999404&matchtype=e&device=c&network=g&targetid=aud-298466965340:kwd-21745101&locationid=21469&gclid=Cj0KCQiAurjgBRCqARIsAD09sg9nKCX6oCF7C8z4HoNnvZ5VcmFfTsLeO6l9D86J7VsLSBAiF3pEb4EaAgTsEALw_wcB"><img src="blog.png" class="blog"></a>
<a href="https://www.youtube.com/"><img src="youtube.png" class="youtube"></a>
</div>
</body>


</html>