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

width:2732px;
height:66px;
background-color:#000;
top: 0%;
position :fixed;
box-sizing: border-box;

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
font-style: Monospace;
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
font-style: Monospace;
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
font-style: Monospace;
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
font-style: Monospace;
}
.avatar
{
width:60px;
height:60px;
text-align:center;
    border-radius: 50%;
position:fixed;
left:30px;
}
.avatar:hover
{
filter:blur(1px) brightness(70%);
}
.Hello h3
{
position:fixed;
right:90px;
top:3px;
}
.chatbox
{
background:black;
position:fixed;
width:700px;
height:500px;
margin-top:6%;
top:0%;
margin-left:43%;
border-radius:5%;
}
.chat
{
background:white;
margin-top:3%;
margin-left:3%;
color:black;
width:653px;
height:400px;
border-radius:5%;
display: block;
overflow :auto;
}
.enterchat input[type="submit"]
{
position:absolute;
width:50px;
right:3%;
bottom:3%;
background:#6FAAED;
border-radius:40%;
border:none;
height:50px;
}

.enterchat input[type="submit"]:hover
{
background:#fb2525;
}
.enterchat input[type="text"]
{
position:absolute;
width:580px;
left:3%;
bottom:3%;
border-radius:10%;
border:none;
height:50px;
}
.friendchoose input[type="image"]
{
height:60px;
width:60px;
border-radius:50%;
}
.friendchoose input[type="image"]:hover
{
filter:blur(1px) brightness(70%);

}
.friendchoose
{
background:black;
color:white;
border-radius:10%;
width:400px;
height:100px;
margin-top:1%;
}
.peoplesend
{
position:absolute;
margin-top:10%;
margin-bottom:10%;
}
.message
{
background:black;
color:white;
width:fit-content;
height:fit-content;
margin-left:0%;
margin-top:2%;
padding-left:4px;
padding-right:2%;
border-radius:7%;
}

.error
{
    width:652px;
    height:fit-content;
    bottom:9%;
    right: 7%;
    text-align: center;
    color: white;
    background: black;
    opacity: 0.5;
    position: absolute;

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

<div class="error" id="message_error"></div>
<div class="peoplesend">
<?php
$db=mysqli_connect('localhost','root','POTO','register');
$query=mysqli_query($db,"SELECT Friendname FROM friends WHERE Username='$username'");
$friendname="";

while($data=mysqli_fetch_array($query))
{

?>
<div class= "friendchoose">
<?php
$quu=mysqli_query($db,"SELECT image FROM userdata WHERE Username='$data[0]'");
$imag=mysqli_fetch_array($quu);
?>
<form action="" method="post" >
<input type="image" src=<?php echo $imag[0]; ?>  name=<?php echo $data[0]; ?>>
</form>
<?php
echo $data[0];

$x=$data[0]."_x";
?>
</div>

<?php
if(isset($_POST[$x]))
{
    $_SESSION['$chatfriend']=$data[0];
}
}
if(!empty($_SESSION['$chatfriend']))
{
    $friendname=$_SESSION['$chatfriend'];
    $data=mysqli_query($db,"SELECT Chat,Username From chat WHERE (Username='$username'OR Username='$friendname' )and (Friendname='$friendname' OR Friendname='$username')");
    ?>
    <div class="chatbox">
        <div class="chat" id="chat">
            <?php
            while($chat=mysqli_fetch_array($data))
            {
                ?>
                <div class="message">

                    <?php
                    $uu=$chat[1];
                    $ss=mysqli_query($db,"SELECT image FROM userdata WHERE username='$uu'");
                    $dd=mysqli_fetch_array($ss);
                    ?>
                    <img src=<?php echo $dd[0]; ?> width=20 height=20 style="border-radius: 50%">
                    <?php
                    echo $chat[1].":";

                    echo $chat[0];
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <script>
            var messageBody = document.getElementById("chat");
            messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
        </script>
        <div class="enterchat">
            <form action="" method="post" name="vform" onsubmit="return validation()">
                <input type="text" name="chatarea" placeholder="enter message...">
                <input type="submit" name="send" value="Send" >
            </form>
        </div>
    </div>
    <?php

    if( isset($_POST["send"]))
    { echo "sended";
        $chatarea=$_POST['chatarea'];
        mysqli_query($db,"INSERT INTO chat (Chat,Username,Friendname) VALUES ('$chatarea','$username','$friendname')");
        ?>
        <script type="text/javascript">location.href = 'project8.php';</script>
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

    var message=document.forms["vform"]["chatarea"];
    var messageerror =document.getElementById("message_error");

    username.addEventListener("blur",postVerfiy,true);
    function validation() {
        if (message.value == "") {
            message.style.border = "1px solid red";
            messageerror.textContent = "write some thing";
            message.focus();
            return false;

        }
    }
    function postVerfiy() {

        if (message.value != "") {
            message.style.border = "";
            messageerror.textContent = "sended";
            return true;

        }

    }
</script>