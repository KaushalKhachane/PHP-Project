<?php 
//Database Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $pwd1=$_POST['pwd1'];
    
   
  // Query for data insertion
    $query=mysqli_query($conn, "insert into student(Name,Gender, Email_Address, Mobile_No, Course, Password) value('$name','$gender', '$email', '$mobile', '$course', '$pwd1' )");
    if ($query) {
    // echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='success.html'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="signup.js"></script>

  <style>
    body{
    background-image:url('https://images.pexels.com/photos/733857/pexels-photo-733857.jpeg?auto=compress&cs=tinysrgb&w=600');
    background-size:100% 100%;
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


    .container_1{
      
      padding:50px;
      background-color: #000000be;
      -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
      box-shadow:0 3px 50px 0 rgba(0, 0, 0, 0.486);
      text-align:left;
      border-radius:20px;
      width:50%;
      margin-left: auto;
      margin-right: auto;
      
    }

    .container_1 h1,.container_1 h6
    {
      font-family:Open Sans,sans-serif;
      color:rgb(255, 255, 255);
      letter-spacing:1px
    }
    .container_1 h1
    {
      font: size 30px;
      margin-bottom:40px;
      margin-top:5px;

    }
    .container_1 .form-group
    {
      margin-top:auto;
      margin-bottom:auto;
    }
    .container_1 .form-control
    {
      font-size:14px;
      border-radius:10px;
    }
    hr{
        border: 1px solid rgb(0, 0, 0);
        margin-bottom: 30px;
        fill-opacity: 100%;
        fill: black;
        
      }

    .container_1 .btn-block
    {
      margin-top:auto;
      padding-top: 10px;
      padding-bottom: 10px;
      background:#29aafe;
      border-color:#29aafe;
      font-family:Open Sans,sans-serif;
      font-size:large;
      border-radius: 10%;
      width: 10%;
      margin-right: auto;
      margin-left:auto;
      -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        margin-bottom: auto;

    }

    .form-group label{
        font-family:Open Sans,sans-serif;
        color:white;
        letter-spacing:1px
    }

    label{
        font-family:Open Sans,sans-serif;
        color:white;
        letter-spacing:1px
    }

    .glyphicon{
      color:white;
    }

    .input-icons i {
      position: absolute;
    }

    .input-icons {
      width: 100%;
      margin-bottom: 10px;
    }

    .icon {
      padding: 10px;
      min-width: 40px;
    }

    .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
    }
    p {
      font-size: 16px;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .block1{
      font: 15px Montserrat, sans-serif;

      background-color: #1abc9c;
      width: 50%;
      margin-left: auto;
      margin-right: auto;
      border-radius: 15px;
      -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
      box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
      padding:60px;
      margin-top:4%;
      margin-bottom:90px;
    }
    .margin {
      margin-bottom: 45px;
    }

    h1{
      color:white;
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
      margin-left:45%;
    }

    .footer{
      position: absolute;
      left: 0;
      margin-bottom: auto;
      width: 100%;
      background-color: #2f2f2f;
      color: white;
      text-align: center;
      font: 16px Montserrat, sans-serif;
      line-height: 1.8;
      margin-top: 30px;
        margin-bottom: 30px;
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
          <li width: 100px, text-align:center><a href="index.php"><span class="glyphicon glyphicon-home"></span>
              Home</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="admin.php"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <h3 class="margin"></h3><br>
    <div class="row">
      <div class="col-sm-12">
        <div class="block1">

          <h1>Sign Up</h1>

          <hr>
          <form name="myForm" onsubmit="return validateForm()" method="POST">
            <p>
            <div class="form-group">
              <label for="name"> Name:</label>
              <input type="text" name = "name" class="form-control" id="uname" placeholder="Enter your name">
            </div>
            </p>
            
            <label for="gender">Gender:</label>
            <div class="form-group">
              <label class="radio-inline"><input type="radio" value="Male" name="gender" id="r1">Male</label>
              <label class="radio-inline"><input type="radio" value="Female" name="gender" id="r2">Female</label>
              <label class="radio-inline"><input type="radio" value="Other" name="gender" id="r3">Other</label>
            </div>

            <br>
            <div class="form-group">

              <label for="email">Email address:</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email Address">
            </div>

            <br>

            <div class="form-group">

              <label for="mobile">Mobile No.:</label>
              <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter your Mobile Number">
            </div>
            <br>
            <label for="course">Courses:</label>

            <div class="form-group">
              <label class="radio-inline"><input type="radio" id="c1" value="AIES" name="course">AIES</label>
              <label class="radio-inline"><input type="radio" id="c2" value="FSD" name="course">FSD</label>
              <label class="radio-inline"><input type="radio" id="c3" value="ICS" name="course">ICS</label>
              <label class="radio-inline"><input type="radio" id="c4" value="PE-1" name="course">PE-1</label>
              <label class="radio-inline"><input type="radio" id="c5" value="DBMS" name="course">DBMS</label>

            </div>
            <br>
            <div class="form-group">
              <label for="pwd">Create Password:</label>
              <!-- <input type="password" class="form-control" id="pwd"> -->
              <input type="password" class="form-control" name="password" id="id_password">

            </div>
            <div class="form-group">
              <label class="checkbox-inline"><input type="checkbox" id="sh_pwd" onclick="sh_password()">Show
                Password</label>

            </div>
            <br>

            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control" id="confirm_pwd" name="pwd1">
            </div>

            <br>

            <button class="btn1" name="submit">Submit</button>

          </form>

        </div>
        
      </div>
      
    </div>

    
  </div>


</body>

<div class="footer">
  <p>Designed By Kaustubh</p> 
</div>

</html>


