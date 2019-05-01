<html>
<head >
<link rel="shortcut icon"  href="title.jpg">
<title>
 POTOBOOK Login
</title>
</head>
<style>
body{
margin:0;
padding:0;
background:url(e.jpg);
background-position:Right;
background-size:1216px 677px;                    
font-family:sans-serif;

}
.loginbox{
width:320px;
height:420px;
background:#000;
color:#fff;
top: 55%;
left:20%;
position :absolute;
transform: translate(-50%,-50%);
box-sizing: border-box;
padding:70px 30px ;
border-radius:20px;
}
.avatar
{
  width:100px;
  height:100px;
  border-radius:50%;
  position:absolute;
  top: -50px;
  left: calc(50% - 50px);
}

h1{
margin:0;
padding:0 0 20px;
text-align:center;
font-size:22px;
}
.loginbox p{
margin: 0;
padding: 0;
font-weight: bold;
}
.loginbox input{
width: 100%;
margin-bottom:20px;
}
.loginbox input[type="text"], input[type="password"]
{
 border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height : 40px;
color: #E9B301;
font-size:16px;
}
.loginbox input[type="submit"]
{
border: none;
outline: none;
height: 40px;
background: #0A78F6;
color: white;
font-size: 18px;
border-radius:20px;
}
.loginbox input[type="submit"]:hover
{
cursor: pointer;
background: #fb2525;
color: #000;
}
.loginbox a{
text-decoration: none;
font-size: 12px;
line-height:20px;
color:darkgrey;
}
.loginbox a:hover
{
cursor:pointer;
color:#fb2525;
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
  
  position:absolute;
  top: 0px;
  left: 0;
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
.loginbox error
{

margin:0;
padding:0 0 20px;
font-size:15px;
color:red;

}

</style>
<body>
<div class="header">
<a href="project.php"><img src="title.jpg" class="logo"></a>
<a href="project3.php"><div class="home">
<h2> Home </h2>
</div></a>
</div>

<div class="loginbox"> 
<img src="login.png" class="avatar">
<h1>Login Here</h1>
<form method="post" action="" name="vform" onsubmit="return validation()">
<p>Username</p>
<input type="text" name="Username" placeholder="Enter Username" >
    <div class="error" id="Username_error"></div>
<p>Password</p>
<input type="password" name="Password" placeholder="Enter Password">
    <div class="error" id="Password_error"></div>
    <input type="submit" name="buttonlogin" value="Login" >
<a href="project10.php">Forget Your Password?</a><br>
<a href="http://localhost/project1.php">Don't have an account?</a>

<?php
session_start();
$username="";
$password="";
$userd="";
$error1="";
$error2="";
$_SESSION["username"]="";
$db=mysqli_connect('localhost','root','POTO','register');
if(!$db)
{
echo "error conection with database";
}

if(isset($_POST['buttonlogin']))
{
$username=$_POST['Username'];
$password=$_POST['Password'];
$query="SELECT Password FROM userdata WHERE Username = '$username'";
$result=mysqli_query($db,$query);
$psql=mysqli_fetch_array($result);

if($psql[0]==$password)
{
$_SESSION["username"] = $username;
header("Location: http://localhost/Project2 New.php");
    exit;
}
else
{
$error2="Wrong password !";
}
}
?>
<error>
<br>
<?php echo $error1; echo $error2; ?>
</error>
</form>
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
    var username=document.forms["vform"]["Username"];
    var password=document.forms["vform"]["Password"];
    var nameerror =document.getElementById("Username_error");
    var passworderror =document.getElementById("Password_error");

    username.addEventListener("blur",nameVerfiy,true);
    password.addEventListener("blur",passwordVerfiy,true);

    function validation() {
        if(username.value=="")
        {
            username.style.border="1px solid red";
            nameerror.textContent="Username is required!!";
            username.focus();
            return false;

        }
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

</script>