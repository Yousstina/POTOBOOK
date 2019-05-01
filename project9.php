<html>
<head>
<link rel="shortcut icon"  href="title.jpg">
<title>
 YM Login
</title>
</head>
<style>
body{
margin:0;
padding:0;
    background:url(back.jpg);
    background-size: cover;
    background-attachment: fixed;
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

width:2732px;
height:50px;
background-color:#000;
bottom: 0%;
position :fixed;

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
.Sitting:hover
{
    background:#fb2525;
    color:White;
}
.User:hover
{
background:#fb2525;
color:White;
}
.header h1
{
    color: white;
    position:fixed;
    right:90px;
    top:15px;
    font-size: large;
}
.Hello h3
{
margin:0;
padding:25px 120px ;
    font-size: x-large;
color:white;
}
.profilepic
{ position:fixed;
    top: 5px;
    left: 20px;
    border-radius:50%;
    width:50px;
    height:50px;
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

    border-radius:50% ;
}

.follow
{
    width: 400px;
    margin: 30px 10px;

}
.all
{
    margin-bottom: 50px;
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
<a href="Project2%20New.php"><div class="User">
<h2> Profile </h2>
</div></a>

 <?php
session_start();
$username=$_SESSION["username"];
?>
<div class="Hello">
<h3>
<?php
 echo $_SESSION["username"];
?>
</h3>
    <h1>
        Logout
    </h1>
</div>
</div>
<div class="profilepic">
    <?php
    $db=mysqli_connect('localhost','root','POTO','register');
    $queryqq="SELECT image FROM userdata WHERE Username = '$username'";
    $resultqq=mysqli_query($db,$queryqq);
    $psqlqq=mysqli_fetch_array($resultqq);
    ?>
    <div class="photo">
        <a href="Project2%20New.php"><img src=<?php echo $psqlqq[0]; ?> class="avatar" >
        </a>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php

if(isset($_POST['Follower']))
{
    $_SESSION['followw']="Follower";
    $_SESSION['user']=$username;
}
if(isset($_POST['Following']))
{
    $_SESSION['followw']="Following";
    $_SESSION['user']=$username;
}
if(isset($_POST['Followerf']))
{
    $fn=$_SESSION['accountfn'];
    $_SESSION['followw']="Follower";
    $_SESSION['user']=$fn;
}
if(isset($_POST['Followingf']))
{
    $fn=$_SESSION['accountfn'];
    $_SESSION['followw']="Following";
    $_SESSION['user']=$fn;
}
$user=$_SESSION['user'];
if($_SESSION['followw']=="Following")
{
    $query=mysqli_query($db,"SELECT Friendname FROM friends WHERE Username='$user'");
     ?>
    <div class="all">
<?php
        while($data=mysqli_fetch_array($query))
        {
            $imagq=mysqli_query($db,"SELECT image From userdata WHERE Username='$data[0]'");
            $imag=mysqli_fetch_array($imagq);
            ?>
            <div class="follow">

            <img src=<?php echo $imag[0];?> class="avatar">
            <h3>
                <?php echo $data[0];?>
            </h3>
            </div>
<?php
        }
        ?>
    </div>
<?php
}
if($_SESSION['followw']=="Follower")
{
    $query=mysqli_query($db,"SELECT Username  FROM friends WHERE Friendname='$user'");
    ?>
    <div class="all">
        <?php
        while($data=mysqli_fetch_array($query))
        {
            $imagq=mysqli_query($db,"SELECT image From userdata WHERE Username='$data[0]'");
            $imag=mysqli_fetch_array($imagq);
            ?>
            <div class="follow">

                <img src=<?php echo $imag[0];?> class="avatar">
                <h3>
                    <?php echo $data[0];?>
                </h3>
            </div>
            <?php
        }
        ?>
    </div>
    <?php

}
?>
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