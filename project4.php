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

width:2732px;
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
.header h3
{
color: white;
position:fixed;
right:90px;
top:5px;
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
.settingbox
{
width:600px;
height:500px;
background:white;
color:black;
top: 14%;
left:359px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 20px 35px;
font-style: Monospace;
border-color: blue;
}
.settingbox input[type="text"],input[type="password"]
{
 border-radius:15%;
border-bottom: 1px solid #fff;
background: white;
outline: none;
height : 40px;
color: black;
font-size:16px;
padding: 15px 130px;
}
.settingbox input[type="submit"]
{
padding: 10px 12px;
 border-radius:40%;
background: #6FAAED;
outline: none;
border:none;
height : 40px;
color: white;
font-size:16px;
}
.settingbox input[type="submit"]:hover
{
background:#fb2525;
color:White;
}
.User:hover
{
background:#fb2525;
color:White;
}
.Hello h2
{
margin:0;
padding:22px 120px ;
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
    border-radius: 50%;
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
<h2>
<?php
 echo $_SESSION["username"]; 
?>
</h2>
<h3>
logout
</h3>
</div>
</div>

<div class="settingbox">
<form method="post" action="" name="vform" onsubmit="return validation()">
<h3> Username </h3>
<input type="text" id="username" name="username" placeholder="Enter Username">
<input type="submit" name="Eusername" value=" Edit">
<div id="Username_error"></div>
</form>

    <form method="post" action="" name="Pform" onsubmit="return validation2()">

    <h3> Password </h3>
<input type="text" id="password" name="password" placeholder="Enter password" required>
<input type="submit" name="Epassword" value=" Edit">
<div id="password_error"></div>
    </form>

    <form method="post" action="" name="eform" onsubmit="return validation3()">

    <h3> Email </h3>
<input type="text" name="email" placeholder="Enter Email">
<input type="submit" name="Eemail" value=" Edit">
<div id="email"></div>
    </form>

    <form method="post" action="" name="gform" onsubmit="return validation4()">

    <h3> gender </h3>
<input type="text" name="gender" placeholder="Enter gender">
<input type="submit" name="Egender" value=" Edit">
        <div id="gender"></div>
    </form>

<?php
$db=mysqli_connect('localhost','root','POTO','register');
if(isset($_POST["Eusername"])&&!empty($_POST['username']))
{
$name=$_POST['username'];
$query="UPDATE userdata SET Username='$name' WHERE Username= '$username'";
mysqli_query($db,$query);
$query="UPDATE postes SET Username='$name' WHERE Username= '$username'";
mysqli_query($db,$query);
mysqli_query($db,"UPDATE friends SET Username='$name' WHERE Username= '$username'");
mysqli_query($db,"UPDATE chat SET Username='$name' WHERE Username= '$username'");
mysqli_query($db,"UPDATE chat SET Friendname='$name' WHERE Friendname= '$username'");

$_SESSION["username"]=$name;
echo " Element edit successfully! ";
}

if(isset($_POST["Epassword"])&&!empty($_POST["password"]))
{
$password=$_POST["password"];
$query="UPDATE userdata SET Password='$password' WHERE Username= $username";
mysqli_query($db,$query);
echo " Element edit successfully! ";
}
if(isset($_POST["Eemail"])&&!empty($_POST["email"]))
{
$email=$_POST["email"];
$query="UPDATE userdata SET Email='$email' WHERE Username= $username";
mysqli_query($db,$query);
echo " Element edit successfully! ";
}
if(isset($_POST["Egender"])&&!empty($_POST['gender']))
{$gender=$_POST['gender'];
$query="UPDATE userdata SET Gender='$gender' WHERE Username= $username";
mysqli_query($db,$query);
echo "<bre> Element edit successfully! ";
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

<script type="text/javascript">
    var username=document.forms["vform"]["username"];
    var password=document.forms["pform"]["password"];

    var email=document.forms ["eform"]["email"];
    var gender=document.forms["gform"]["gender"];
    var nameerror =document.getElementById("Username_error");
    var passworderror =document.getElementById("password_error");
    var emailerror=document.getElementById("email_error");
    var gendererror=document.getElementById("gender_error");

    username.addEventListener("blur",nameVerfiy,true);
    password.addEventListener("blur",passwordVerfiy,true);
    email.addEventListener("blur",emailVerfiy,true);
    gender.addEventListener("blur",genderVerfiy,true);



    function validation() {


        if (username.value == "") {
            username.style.border = "1px solid red";
            nameerror.textContent = "Username is required!!";
            username.focus();
            return false;

        }
    }

    function validation3() {

        if (email.value == "" || !((email.value.indexOf('@') > -1) && (email.value.indexOf('.') > -1))) {
            email.style.border = "1px solid red";
            emailerror.textContent = "email is required!! ";
            email.focus();
            return false;
        }
    }

    function validation4() {

        if (gender.value == "") {
            gender.style.border = "1px solid red";
            gendererror.textContent = "gender is required!! ";
            gender.focus();
            return false;
        }
    }

    function validation2() {

        if(password.value=="")
        {
            password.style.border="1px solid red";
            passworderror.textContent="Password is required!! ";
            password.focus();
            return false;
        }

    }

    function nameVerfiy() {
        if(username.value!="")
        {
            username.style.border="";
            nameerror.innerHTML="";
            return true;
        }

    }
    function passwordVerfiy() {
        if(password.value!="")
        {
            password.style.border="";
            passworderror.textContent="";
            return true;
        }

    }
    function emailVerfiy() {
        if(email.value!="")
        {
            email.style.border="";
            emailerror.textContent="";
            return true;
        }

    }
    function genderVerfiy() {
        if(gender.value!="")
        {
            gender.style.border="";
            gendererror.textContent="";
            return true;
        }

    }
</script>