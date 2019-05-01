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
background-position:fixed;
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

width:1349px;
height:66px;
background-color:#000;
top: 0%;
box-sizing: border-box;
position:fixed;

}
.footer
{

width:2800px;
height:50px;
background-color:#000;
bottom: 0%;
position :fixed;
left:-10%;
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
.aa
{
background:white;
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
background:#6FAAED;
color:black;
top: -30%;
left:991px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 11px;
}
.sitting:hover
{
background:#fb2525;
color:White;
}
.User:hover
{
background:#fb2525;
color:White;
}
.avatar 
{
width:100px;
height:100px;
border-radius:50px;
top:10%;
left:20%;
}
.addfriends
{
width:200px;
display: inline-block;
text-align:center;
top:20%;
bottom:20%;
left:20%;
}
.all
{
padding: 20px 20px;
}
.addfriends input[type="submit"]
{
display: inline-block;
height:30px;
width:60px;
border:none;
background:#6FAAED;
color:black;
border-radius:20px;
left:15%;
}
.addfriends input[type="submit"]:hover
{
background:#fb2525;
color:White;
}
.h4
{
left:100%;
bottom:65%;
position:absolute;
}
.Hello h3
{
margin:0;
position:absolute;
right:100px;
top:25px;
color:white;
}
.photo
{
width:60px;
height:60px;
text-align:center;
position:absolute;
    border-radius: 50%;
left:25px;
top:2px;
}
.photo:hover
{
filter:blur(1px) brightness(70%);
}
.Hello h2
{
color:white;
position:fixed;
left:90px;
top:5px;
}
.search
{
    margin-top: 100px ;
    margin-left: 100px;
}
    .search input[type="text"]
    {
        width: 600px;
        height: 70px;
        border-radius: 15%;
        border: none;

    }
   .search input[type="submit"]
   {
       border: none;
       width: 60px;
       height: 60px;
       border-radius: 30%;
       background: #6FAAED;
   }
    .avatar:hover
    {
        filter:blur(1px) brightness(70%);
    }

.error
{
    width:580px;
    height:fit-content;
    top:15.25%;
    left: 8%;
    text-align: center;
    color: white;
    background: black;
    opacity: 0.5;
    position: absolute;
    border-radius: 30%;

}
</style>
<body>
<div class="header">
<a href="project.php"><img src="title.jpg" class="logo"></a>
<a href="project3.php"><div class="home">
<h2> Home </h2>
</div></a>
<a href="project4.php"><div class="Sitting">
<h2> Setting </h2>
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
<h2>
<?php
echo "login";
?>
</h2>
</div>
<?php
}
else
{
?>
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
<div class="profilepic">
<?php 
$db=mysqli_connect('localhost','root','POTO','register');
$queryqq="SELECT image FROM userdata WHERE Username = '$username'";
$resultqq=mysqli_query($db,$queryqq);
$psqlqq=mysqli_fetch_array($resultqq);
?>
<a href="Project2%20New.php"><img src=<?php echo $psqlqq[0]; ?> class="photo" >
</a>
</div>
</div>
<div class="error" id="search_error"></div>

<div class="search">
<form method="post" action="" name="vform" onsubmit="return validation()">
    <input type="text" name="search" placeholder="Type any name to follow..">
    <input type="submit" name="searchbutton" value="Search">
</form>
</div>
<?php


if (isset($_POST['searchbutton']))
{
    $search=$_POST['search'];
    $query=mysqli_query($db,"SELECT Username,image FROM userdata where Username='$search' ");
    $result=mysqli_fetch_array($query);
    if(empty($result))
    {
        echo "There is no account called this";
    }
    else {
        ?>
        <div class="addfriends">

            <form action="project7.php" method="post">
                <input type="image" src=<?php echo $result[1]; ?> class="avatar" name=<?php echo $result[0]; ?>>
            </form>
        <h3>
            <?php
            echo $result[0];
            $_SESSION['friendname']=$result[0];
            ?>

        </h3>
        </div>
        <?php

    }}

if(!$db)
{
echo "error conection with database";
}
$query="SELECT Username FROM userdata";
$query2="SELECT image FROM userdata";
$result=mysqli_query($db,$query);
$result2=mysqli_query($db,$query2);
$psql=mysqli_fetch_array($result);
$psql2=mysqli_fetch_array($result2);
?>
<div class="all">

   <?php
while($psql=mysqli_fetch_array($result))
{ $psql2=mysqli_fetch_array($result2);

if($psql[0] != $username)
{
$friendname=$psql[0];
$queryf="SELECT Friendname From friends WHERE Username='$username' AND Friendname='$friendname'";
$resultf=mysqli_query($db,$queryf);
$psqlf=mysqli_fetch_array($resultf);
$ff=$psqlf[0];

$na=$psql[0]."un";
   ?>
<div class="addfriends">
    <form action="project7.php" method="post"> <input type="image" src=<?php echo $psql2[0]; ?> class="avatar" name=<?php echo $friendname; ?>></form>
<h3> <?php echo $psql[0]; ?> </h3>
<form action="" method="post">
<?php
if(empty($ff))
{
?>
<input type="submit" name="<?php echo "$psql[0]";?>" value="Follow" >
<?php
$f=$psql[0];
$na=$psql[0]."un";
if(isset($_POST[$f]))
{
$query="INSERT INTO friends (Username,Friendname) VALUES ('$username','$friendname')";
$result=mysqli_query($db,$query);
?>
<h4>
you followed <?php echo $friendname; ?> successfully
</h4>
<?php
break;
}
}
else
{
?>
<input type="submit" name=<?php echo $psql[0]; echo"un";?> value="unfollow" >
<?php
if(isset($_POST[$na]))
{
$query3="DELETE FROM friends WHERE Friendname ='$friendname'";
$result=mysqli_query($db,$query3);
?>
<h4>
you unfollowed <?php echo $friendname; ?> successfully
</h4>
<?php
break;
}
}
?>
</form>
</div>
<?php
}  
}
?>
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
<script>

    var search=document.forms["vform"]["search"];
    var searcherror =document.getElementById("search_error");

    search.addEventListener("blur",postVerfiy,true);
    function validation() {
        if (search.value == "") {
            search.style.border = "1px solid red";
            searcherror.textContent = "write something...";
            search.focus();
            return false;

        }
    }
    function postVerfiy() {

        if (search.value != "") {
            search.style.border = "";
            return true;

        }

    }
</script>