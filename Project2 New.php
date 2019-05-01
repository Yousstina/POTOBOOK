<html>
<head>
    <link rel="shortcut icon"  href="img/title.jpg">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/project2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>
        POTOBOOK
    </title>
</head>
<body>
<?php
session_start();
$username=$_SESSION["username"];
$db=mysqli_connect("localhost","root","POTO","register");
$query=mysqli_query($db,"SELECT * FROM userdata WHERE Username='$username'");
$array=mysqli_fetch_array($query);
?>
<div class="container-fluid bg-secondary ">
    <div class="container">
        <div class="row text-light pt-05 pb-0 ">
            <div class="col-md-3" id="username"><i class="fa fa-envelope-o"></i> <?php echo $array[2];?></div>
            <div class="col-md-3"><i></i></div>
            <div class="col-md-3" id="welcome"><i class="fa fa-smile" aria-hidden="true"></i> Welcome</div>

        </div>
    </div>
</div>
    <div class="container-fluid bg-primary d-none d-md-block">
            <div class="row text-dark pt-3 pb-3">
                <div class="col-md-3" >
                    <a href="project3.php"> <button type="submit" class="btn btn-outline-dark" id="home">
                            <i class="fa fa-home"></i>
                        </button></a></div>
                <div class="col-md-3" >
                    <a href="project4.php"> <button type="submit" class="btn btn-outline-dark" id="settings">
                            <i class="fa fa-cog"></i>
                        </button></a></div>
                <div class="col-md-3" >
                    <a href="project.php"> <button type="submit" class="btn btn-outline-dark" id="logout">
                            <i class="fa fa-plane"></i>
                        </button></a></div>
            </div>
    </div>
<div class="container-fluid bg-warning">
    <form action="" method="post">
    <button type="submit" class="btn btn-danger" id="DeleteBtn" name="Deletebtn">
        <i class="fa fa-close"></i>
    </button>
    </form>
    <?php
    if(isset($_POST['Deletebtn']))
    {
        $query2="DELETE FROM userdata WHERE Username='$username'";
        mysqli_query($db,$query2);
        $query2="DELETE FROM postes WHERE Username='$username'";
        mysqli_query($db,$query2);
        $query2="DELETE FROM friends where username='$username'";
        mysqli_query($db,$query2);
        $query2="DELETE FROM messages where Username='$username'and Friendname='$username'";
        mysqli_query($db,$query2);
        $_SESSION["username"]="";
        ?>
        <script type="text/javascript">location.href = 'project.php';</script>
        <?php
    }
    ?>
    <div class="row">

        <div class="profile-header-container" id="profile_header">
            <div class="profile-header-img">


                <div class="photo">
                    <a href="project5.php"><img class="avatar" src=<?php echo $array[4]; ?> >
                        <h3> Change<br> Photo <h3>
                    </a>
                </div>
                <!-- badge -->

            </div>
            <div class="rank-label-container">
                <span class="label label-default rank-label"><?php echo $array[0];?></span>
            </div>

            <?php
            $follower=mysqli_query($db,"SELECT Username From friends WHERE Friendname ='$username'");
            $numberofollowers=mysqli_num_rows($follower);
            $following=mysqli_query($db,"SELECT Friendname From friends WHERE Username ='$username'");
            $numberofollowing=mysqli_num_rows($following);
            ?>
            <form action="project9.php" method="post">
                <button class="numfollower" name="Follower">
                    <div class="rank-label-container" id="followers">
                <div class="d-inline-block text-black-50 text-decoration-none ">
                    <strong><?php echo$numberofollowers; ?></strong>
                    <span class="opacity-75">followers</span>
                </div>
                    </div>
                </button>

                <button class="numfollowing" name="Following">
                    <div class="rank-label-container" id="followers">
                    <div class="d-inline-block text-black-50 text-decoration-none ml-3">
                  <strong> <?php echo$numberofollowing; ?> </strong>
                    <span class="opacity-75">following</span>
                    </div>
                    </div>
                </button>

            </form>

        </div>
    </div>
</div>
<div class="container d-inline">
    <div class="row text-dark ">
        <div class="col-md-4 pl-5" >
                    <a href="project8.php"> <button type="submit" class="btn btn-outline-danger" id="Messages">
                    <i class="fa fa-comments"></i>
                        </button></a></div>
        <div class="col-md-6" >
            <a href="project6.php"> <button type="submit" class="btn btn-outline-dark" id="Users">
                <i class="fa fa-users"></i>
                </button></a></div>
    </div>
    <form action="" method="post">
            <div class="form-group row  mt-5 ">
                <label id="Place" class="col-sm-2 col-form-label"></label>
                <div class="col-lg-5 ml-5 pl-lg-5 ">
                    <input type="text" class="form-control" name="postt" id="postArea" placeholder="What is in your Mind ...?">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 ml-5 pl-lg-5 ">
                <button type="submit" class="btn btn-outline-dark" id="PostBtn" name="PostBtn">
        <i class="fa fa-arrow">Post</i>
                </button>
                </div>
                <div class="col-lg-5 ml-5 pl-lg-5 ">
                    <input type="file" class="btn btn-basic" id="Browse" name="photopost">
                </div>
            </div>


</form>
</div>
<?php
if(isset($_POST['PostBtn']))
{
    $post=$_POST['postt'];
    $photopost=$_POST['photopost'];
    $username=$_SESSION["username"];
    $sql="INSERT INTO Postes (Username,Post,image) VALUES ('$username','$post','$photopost')";
    mysqli_query($db,$sql);

}
?>


<div class="container bg-light mt-5 pt-5 pb-5">
    <?php
    $query3=mysqli_query($db,"SELECT * FROM postes WHERE Username='$username'");
    $query4=mysqli_query($db,"SELECT * FROM postes WHERE Username='$username'");;
    while ($num=mysqli_fetch_array($query4)) {
        $counter=0;
        ?>
        <div class="row">
            <?php while ($array3 = mysqli_fetch_array($query3)) { $counter=$counter+1;?>
                <div class="col-md-4 " id="images">
                    <div class="card" >
                        <div class="card-body">
                            <h5 style="margin-left: 20px;font-weight: bold;"><?php echo $array3[1];?> </h5></div>
                        <?php
                        if(!empty($array3[2]))
                        {
                            ?>
                            <img src=<?php echo$array3[2];?> alt="card-1" class="card-img-top">
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                if($counter==0)
                {
                    break;
                }
            } ?>

        </div>
        <?php
    }
    ?>
</div>

</body>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>

