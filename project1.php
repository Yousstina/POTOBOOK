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
.signupbox{
width:320px;
height:540px;
background:#6FAAED;
color:#fff;
    position: fixed;
margin-top: 25%;
margin-left:50%;
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
h
{
margin:0;
padding:2;
font-size:13px;
}
h1{
margin:0;
padding:0 0 20px;
text-align:center;
font-size:22px;
}
.signupbox p{
margin: 0;
padding: 0;
font-weight: bold;
}
.signupbox input{
width: 100%;
margin-bottom:20px;
}

.signupbox input[type="text"],input[type="password"]
{
 border-radius:15%;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height : 20px;
color: #E9B301;
font-size:16px;
}

.signupbox input[type="submit"]
{
border: none;
outline: none;
height: 35px;
background: gray;
color: white;
font-size: 18px;
border-radius:20px;
}

.signupbox input[type="submit"]:hover
{
cursor: pointer;
background: #fb2525;
color: #000;
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
font-style: Monospace;
}
.Home:hover
{
background:#fb2525;
color:White;
}
.error
{
width:350px;
height:170px;
background:#6FAAED;
color:red;
top: 50%;
left:900px;
position :absolute;
box-sizing: border-box;
border-radius:10px;
padding: 0px 15px;
}
.errord
{
    color: red;
}
</style>
<body>
<div class="header">
<a href="project.php"><img src="title.jpg" class="logo"></a>
<a href="project3.php"><div class="home">
<h2> Home </h2>
</div>
</a>
</div>

<div class="signupbox" >
<img src="login.png" class="avatar" >
<h1>Sign Up</h1>
<form method="post" action="" name="vform" onsubmit="return validation()">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username">
    <div class="errord" id="Username_error"></div>
<p>Email</p>
<input type="text" name="email" placeholder="example@ex.com ">
    <div class="errord" id="email_error" ></div>
<p>Gender</p>
<input type="text" name="gender" placeholder="Female/Male">
    <div class="errord" id="gender_error" ></div>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password">
<p>confirm password</p>
<input type="password" name="passwordC" placeholder="Enter Password">
    <div class="errord" id="password_error"></div>
<input type="submit" name="submit" value="Register">

<?php
$username="";
$email="";
$gender="";
$password="";
$errors=0;
$db=mysqli_connect('localhost','root','POTO','register');
if($db->connect_error)
{
echo "tef fy wshy";
 echo "can't connect";
}


if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $query = mysqli_query($db, "SELECT Username From userdata WHERE Username='$username'");
    $query2 = mysqli_query($db, "SELECT email From userdata WHERE Email='$email'");
    $array = mysqli_fetch_array($query);
    $array2=mysqli_fetch_array($query2);

    if (!empty( $array[0])||!empty($array2[0])) {
        if (!empty( $array[0])) {
            ?>
            <div class="errord"> -Username used before! <br></div>
            <?php
        }
        if(!empty($array2[0]))
        {
            ?>
            <div class="errord">-Email used before!  </div>
            <?php
        }
    }

    else {


        $image = "login.png";
        if ($gender == "Male") {
            $image = "man.png";
        } else {
            $image = "woman.png";
        }
        $sql = "INSERT INTO userdata (Username,Email,Password,Gender,image) VALUES ('$username','$email','$password','$gender','$image')";
        mysqli_query($db, $sql);
        header("Location: http://localhost/project.php");
        exit;
    }
}
?>
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
    var username=document.forms["vform"]["username"];
    var password=document.forms["vform"]["password"];
    var email=document.forms ["vform"]["email"];
    var gender=document.forms["vform"]["gender"];
    var Cpassword=document.forms["vform"]["passwordC"];
    var nameerror =document.getElementById("Username_error");
    var passworderror =document.getElementById("password_error");
    var emailerror=document.getElementById("email_error");
    var gendererror=document.getElementById("gender_error");

    username.addEventListener("blur",nameVerfiy,true);
    password.addEventListener("blur",passwordVerfiy,true);
    Cpassword.addEventListener("blur",passwordVerfiy,true);
    email.addEventListener("blur",emailVerfiy,true);
    gender.addEventListener("blur",genderVerfiy,true);



    function validation() {


        if(username.value=="")
        {
            username.style.border="1px solid red";
            nameerror.textContent="Username is required!!";
            username.focus();
            return false;

        }
        if(email.value==""||!((email.value.indexOf('@') > -1)&&(email.value.indexOf('.')>-1)))
        {
            email.style.border="1px solid red";
            emailerror.textContent="email is required!! ";
            email.focus();
            return false;
        }
        if(gender.value=="")
        {
            gender.style.border="1px solid red";
            gendererror.textContent="gender is required!! ";
            gender.focus();
            return false;
        }
        if(password.value==""||Cpassword.value=="")
        {
            password.style.border="1px solid red";
            Cpassword.style.border="1px solid red";
            passworderror.textContent="Password is required!! ";
            password.focus();
            return false;
        }
        if(password.value!=Cpassword.value)
        {
            password.style.border="1px solid red";
            Cpassword.style.border="1px solid red";
            passworderror.textContent=" Password is not match!! ";
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