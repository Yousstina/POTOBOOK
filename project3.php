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
background-attachment:fixed;
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
.Hello h2
{
position:fixed;
right:90px;
top:5px;
}

.footer
{

width:2700px;
height:50px;
background-color:#000;
bottom: 0%;
position :fixed;
left:0%;
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
background:#fb2525;
color:white;
top: -30%;
left:750px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 19px;
}
.page
{
    width:700px;
    background:#000;
    color:White;
    top: 60%;
    left:330px;
    padding-top: 100px;
    padding-bottom: 100px;
    box-sizing: border-box;
    border-radius:10px;
    display: flex;
    flex-wrap: wrap-reverse;
}
.User:hover
{
background:#fb2525;
color:White;
}
.User
{
width:100px;
height:91px;
background:#6FAAED;
color:Black;
top: -30%;
left:872px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 14px;
}
.Sitting
{
width:100px;
height:91px;
background:#6FAAED;
color:#000;
top: -30%;
left:991px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 11px;
}
.Sitting:hover
{
background:#fb2525;
color:White;
}
.Hello
{
width:350px;
height:85px;
background:#000;
color:White;
top: -30%;
left:90px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 25px 29px;
}
.po
{
width:500px;
height:250px;
background:#000;
color:White;
top: 18%;
left:800px;
position :fixed;
box-sizing: border-box;
border-radius:10px;
padding: 25px 29px;
}
.po input[type="text"]
{

border-bottom: 1px solid #fff;
background: white;
outline: none;
height : 200px;
width:445px;
color: #0A78F6;
font-size:16px;
}
.po input[type="submit"]
{
margin-left:94%;
border: none;
outline: none;
height: 40px;
background: #0A78F6;
color: white;
font-size: 18px;
border-radius:20px;
}
.po input[type="submit"]:hover
{
border: none;
outline: none;
height: 40px;
background: #fb2525;
color: black;
font-size: 18px;
border-radius:20px;
left:90%
top:80%
}

.whi
{
width:650px;
background:White;
color:#000;
box-sizing: border-box;
    margin-top: 5px;
border-radius:10px;
padding: 25px 29px;
display: block;
overflow: auto;
border-style: inset;
}
.avatar
{
width:60px;
height:60px;
text-align:center;
    border-radius: 50%;
}
.numfollower
{
background:#6FAAED;
color:black;
width:150px;
height:110px;
position:fixed;
top:60%;
left:63%;
border-radius:30px;
text-align:center;
border:2px solid gray;
    font-size: 18px;
    font-weight:bold ;
}
.numfollower:hover
{
background:#fb2525;
color:White;
}
.avatar:hover
{
    filter:blur(1px) brightness(70%);
}
.photooo
{
    width: 200px;
    height: 200px;
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
<h3>
<?php
 echo $_SESSION["username"]; 
?>
</h3>
<h2>
logout
</h2>
</div>
<a href="Project2%20New.php"><div class="User">
<h2> Profile </h2>
</div></a>
<?php
}
?>
</div>
<div class="error" id="post_error"></div>
<div class="po">
<form method="post" action="" name="vform" onsubmit="return validation()">
<input type="text" name="Post" placeholder="What is in your mind....?">
<br>
<input type="submit" name="buttonpost" value="Post">
</form>
</div>
<?php

$post="";
$error1="";
$error2="";
$db=mysqli_connect('localhost','root','POTO','register');
if(!$db)
{
echo "tef fy wshy";
 echo "can't connect";
}
if(isset($_POST['buttonpost']))
{ 
$post=$_POST['Post'];
if(empty($post))
{
$error1="You can't post empty post"; 
}
else
{
$username=$_SESSION["username"];
$sql="INSERT INTO Postes (Username,Post) VALUES ('$username','$post')";
mysqli_query($db,$sql);
header("Location: http://localhost/project3.php");
}

}
?>

<div class="page" id="page">
<br>
<br>
<br>
<br>
<br>
<?php 
$followfriend=mysqli_query($db,"SELECT Friendname From friends WHERE Username='$username'");
$sql2=mysqli_query($db,"SELECT * FROM postes");
$dfollow=mysqli_fetch_array($followfriend);
$data=mysqli_fetch_array($sql2);

while($data=mysqli_fetch_array($sql2))
{
while($dfollow=mysqli_fetch_array($followfriend))
{

if($data[0]==$dfollow[0])
{
?>
<div class="whi">
<?php
$img=mysqli_query($db,"SELECT image FROM userdata WHERE Username='$data[0]'");
$dimg=mysqli_fetch_array($img)
?>
    <form action="project7.php" method="post">
     <input type="image" src=<?php echo $dimg[0]; ?> class="avatar" name=<?php echo $data[0]; ?> >
    </form>

<h3>
<?php
echo $data[0];

?>
</h3>
<h4>
<?php
echo "<br>";
echo $data[1];
if(!empty($data[2]))
{
    ?>
    <br>
    <img src=<?php echo $data[2];?> class="photooo">
    <?php
}
?>
</h4>
</div>
<br>
<br>
<br>
<br>
<?php
}


}
    $followfriend=mysqli_query($db,"SELECT Friendname From friends WHERE Username='$username'");
}
?>

</div>

<?php
$follower=mysqli_query($db,"SELECT Username From friends WHERE Friendname ='$username'");
$numberofollowers=mysqli_num_rows($follower);
$following=mysqli_query($db,"SELECT Friendname From friends WHERE Username ='$username'");
$numberofollowing=mysqli_num_rows($following);
?>
<form action="project9.php" method="post">
    <button class="numfollower" name="Follower">Follower <br> <br> <?php echo$numberofollowers; ?> </button>
    <button class="numfollowing" name="Following">Following <br> <br> <?php echo$numberofollowing; ?> </button>
</form>


</body>
<style>

.whi h3
{
width:34%;
text-align:center;
}
.whi h4
{

text-align:center;
}
.numfollowing
{

background:#6FAAED;
color:black;
width:150px;
height:110px;
position:fixed;
top:60%;
left:75%;
border:2px solid gray;
border-radius:30px;
    text-align: center;
    font-size: 18px;
    font-weight:bold ;

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
.numfollowing:hover
{
background:#fb2525;
color:White;
}
.error
{
    width:480px;
    height:fit-content;
    top:15.25%;
    right: 4.5%;
    text-align: center;
    color: white;
    background: black;
    opacity: 0.5;
    position: absolute;

}

</style>



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

    var Post=document.forms["vform"]["Post"];
    var posterror =document.getElementById("post_error");

    post.addEventListener("blur",postVerfiy,true);
    function validation() {
        if (Post.value == "") {
            Post.style.border = "1px solid red";
            posterror.textContent = "write something...";
            Post.focus();
            return false;

        }
    }
    function postVerfiy() {

        if (Post.value != "") {
            post.style.border = "";
            posterror.textContent = "Post successfuly";
            return true;

        }

    }
</script>