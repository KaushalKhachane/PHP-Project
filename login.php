

<!DOCTYPE html>
<html lang="en">

<?php
include('dbconnection.php');
session_start();
if(isset($_POST['submit'])){
  
  $emailx = $_POST['emailx'];  
  $pwd1 = $_POST['pwd1'];  
   
    
      $query = "select * from student where Email_Address = '$emailx' and Password = '$pwd1'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);  
        echo $count;
      if($count == 1){  
        // echo "<script>alert('You have successfully logged in !!!');</script>";
        echo "<script type='text/javascript'> document.location ='user.php'; </script>";  
      }  
      else{  
        echo "<script>alert('Login failed. Invalid email or password.');</script>";
      } 
      $_SESSION['emailx']=$emailx;    
}

    
?>

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  <style>
    
    body{
      background-image:url('https://images.pexels.com/photos/733857/pexels-photo-733857.jpeg?auto=compress&cs=tinysrgb&w=600');
      background-size:cover;
      
    }

    .navbar {
      font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        padding-top: 15px;
        padding-bottom: 15px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0px;
        font-size: 12px;
        letter-spacing: 5px;
        margin-top:0%;
        margin-bottom:30%;
        background-color:#1abc9c;
        position:fixed;
        z-index: 9999;
        width:100%;
    }

    .navbar-brand{
      color: white !important;
    }

    .navbar-nav li a:hover {
      color: #000000 !important;
    }

    .navbar-nav li a {
      color: #ffffff !important;
    }

    .navbar-nav navbar-right li a{
      color:white !important; 
    }

    .active a{
      background-color:#4bad99 !important;
    }


    .block1{
      background-color: #1abc9c;
      width: 50%;
      margin-left: auto;
      margin-right: auto;
      border-radius: 15px;
      -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
      box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
      padding:60px;
      margin-top: 100px;
      width:30%;
      margin-bottom:120px;
      font: 10px Montserrat, sans-serif;
      line-height: 1.8;
      
    }

    .btn1{
      border-radius: 10px;
      font-size: medium;
      padding: 10px;
      background-color: rgb(255, 255, 255);
      color:#000000;
      -webkit-box-shadow:0 3px 50px 0 rgba(255, 255, 255, 0.3);
      box-shadow:0 3px 50px 0 rgba(255, 255, 255, 0.3);
      border-color:white;
    }

    h1{
      font: 20px Montserrat, sans-serif;
      font-size:25px;
      color: white;
    }

    hr{
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .logo{
      font-size: 40px;
      color:white;
    }

    .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
      
    }

    p {
      font-size: 16px;
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .footer{
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #2f2f2f;
      color: white;
      text-align: center;
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
    }
  </style>

</head>

  
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                   
          </button>
          <a class="navbar-brand" href="index.php">Student Registration System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li width: 100px, text-align:center><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="admin.php"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
        
        </div>
      </div>
    </nav>

  
<background-image:url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')>
  

  <div class="container-fluid bg-1 text-center">
    <h3 class="margin"></h3><br>
    <div class="row">
      <div class="col-sm-12">
        <div class="block1">
          <span class="glyphicon glyphicon-user logo"></span>
        <h1>Log into your account</h1>
        <hr >
        <form method="POST">
          <div class="form-group">  
              <input type="text" class="form-control" placeholder="Your email address" name="emailx" id="emailx">
            
          </div>        
          <br>        
            <div class="form-group">
              <input type="password" class="form-control left-border-none" placeholder="Enter password" name="pwd1">             
            </div>         
          <br>
          <button class="btn1" type="submit" name="submit">Login</button>        
        </form>
        </div>
      </div>
    </div>
  </div>

      
    

</body>

<<div class="footer">
  <p>Designed By Kaustubh</p> 
</div>
</html>
