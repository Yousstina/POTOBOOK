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
background: #6FAAED;
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
        width: 400px;
        margin: 150px 10px;
    }
.phot
{
    width:180px;
    height:150px;
    background:black;
    color:white;
    margin-top: 1%;
    margin-left: 50px;
    box-sizing: border-box;
    border-radius:10px;
    padding: 27px 60px;
    text-align:center;
}
.profile
{
    width:1100px;
    height:fit-content;
    background:white;
    margin-top: 5%;
    margin-left: 35px;
    margin-bottom: 100px;
    box-sizing: border-box;
    border-radius:10px;
    padding: 27px 60px;
    text-align:center;
}
    .postes
    {
        width:1000px;
        height:fit-content;
        background:black;
        color:white;
        margin-top: -10px;
        margin-bottom: 70px;
        box-sizing: border-box;
        border-radius:10px;
        padding: 27px 60px;
        text-align:center;
    }


</style>
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

$sql=mysqli_query($db,"SELECT Username FROM userdata ");
while($data=mysqli_fetch_array($sql))
{
    $aa=$data[0]."_x";
    if (isset($_POST[$aa])) {
        $_SESSION['accountfn'] = $data[0];
    }
}

?>
<a href="#email"> <div class="ee">
    Email <?php echo $_SESSION['accountfn']?>
</div></a>
<div class="profile">

    <div class="phot">
        <?php
        $fn=$_SESSION['accountfn'];
        $follower=mysqli_query($db,"SELECT Username From friends WHERE Friendname ='$fn'");
        $numberofollowers=mysqli_num_rows($follower);
        $following=mysqli_query($db,"SELECT Friendname From friends WHERE Username ='$fn'");
        $numberofollowing=mysqli_num_rows($following);
        ?>
        <form action="project9.php" method="post">
            <button class="numfollower" name="Followerf">Follower <br> <br> <?php echo$numberofollowers; ?> </button>
            <button class="numfollowing" name="Followingf">Following <br> <br> <?php echo$numberofollowing; ?> </button>
        </form>
        <?php

        $query=mysqli_query($db,"SELECT image,email FROM userdata WHERE username='$fn'");
        $ddd=mysqli_fetch_array($query);
        ?>
        <div class="ava">
        <img src=<?php echo $ddd[0]; ?> class="avatar">
        <h3>
            <?php echo $_SESSION['accountfn']; ?>
        </h3>
        </div>
    </div>
    <div class="postes">
        <?php
        $postq=mysqli_query($db,"SELECT post,image FROM postes WHERE Username='$fn' ");
        while ($resultpos=mysqli_fetch_array($postq))
        {
            ?>
        <div class="post">
        <?php
            echo $resultpos[0];
            if(!empty($resultpos[1])) {
                ?>
                <br>
                <img src=<?php echo $resultpos[1]; ?> class="photooo">
                <?php
            }
            ?>
        </div>
        <?php
        }

        ?>

    </div>
    <div class="email" id="email">
    <?php
    echo $ddd[1];
    ?>
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
<style>

    .post
    {
        background: white;
        opacity: 0.5;
        color: black;
        border: none;
        width: 800px;
        margin-top: 40px;
        margin-bottom: 50px;
        padding-top: 30px;
        padding-bottom: 10px;
        height: auto;
        border-radius: 20%;
    }
    .ava
    {
        width:60px;
        height:60px;
        text-align:center;
        margin-top: -175%;
        border-radius:50% ;
    }
    .numfollower
    {
        background:black;
        color:white;
        width:150px;
        height:100px;
        margin-left: 250px;
        border:1px solid gray;
        border-radius:30px;
        text-align: center;
        font-size: 18px;
        font-weight:bold ;

    }
    .numfollowing
    {
        background:black;
        color:white;
        width:150px;
        height:100px;
        margin-top: -166%;
        margin-left: 400px;
        border:1px solid gray;
        border-radius:30px;
        text-align: center;
        font-size: 18px;
        font-weight:bold ;
    }
    .ee
    {
        height: 5%;
        padding-top: 15px;
        width: 20%;
        color: white;
        position: fixed;
        background: black;
        border-radius: 20% ;
        left: 87%;
        top:30%;
        padding-left:1%;



    }
    .photooo
    {
        width: 200px;
        height: 300px;
    }
</style>

</html>