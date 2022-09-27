<?php
include('dbconnection.php');

 
  if(isset($_GET['deletex'])){
    
    $emailx=$_GET['emailx'];
    $query2 ="select * from student where Email_Address = '$emailx';";
 
      $result = mysqli_query($conn, $query2);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);  
        
      if($count == 1){  
        // echo "<script>alert('You have successfully logged in !!!');</script>";
        $query3 = mysqli_query($conn,"delete from student where Email_Address = '$emailx';");
        
          $result1 = mysqli_query($conn, $query2);  
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
        $count1 = mysqli_num_rows($result1);  
          
        if($count1 == 1){  
          echo "<script>alert('Something went wrong. Please Try Again !!!');</script>"; 
        }  
        else{  
          echo "<script type='text/javascript'> document.location ='success.html'; </script>";
        } 
      }  
      else{  
        echo "<script>alert('No Record Found !!!');</script>";
       
      } 

      
  }
  
?>

<!DOCTYPE html>
<html lang="en">



<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 

  

<style>
     
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
  
  

  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: rgb(255, 255, 255);
    position:sticky;
  }

  .p1 {
    font-size: 16px;
    margin-top: 30px;
    margin-bottom: 30px;
    
  }

  .block1{
    background-color: #1abc9c;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    border-radius: 15px;
    -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
    box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
    padding:50px;
    margin-top: 100px;
    width:30%;
    margin-bottom:120px;
    font: 15px Montserrat, sans-serif;
    line-height: 1.8;
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
  }

  
  
  h1{
    font: 30px Montserrat, sans-serif;
    font-size:25px;
    color: white;
  }
  
  hr{
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
    font: 16px Montserrat, sans-serif;
    line-height: 1.8;
  }

  .div1{
    font-size: 15px;
    color:black;
   
  }

  .modal{
    margin-top: 60px;
    
  }

  .modal-body{
    padding-left:40px;
    padding-right:40px;
    font: 13px Montserrat, sans-serif;
      line-height: 1.8;
  }

  .modal-title{
    margin-left: 20px;
    margin-right: auto;
    margin-top: 10px;
    margin-bottom: -30px;
    font-size: 20px;
    font: 20px Montserrat, sans-serif;
      line-height: 1.8;
    color:#ffffff;
  }

  .modal-header{
    background-color:#1abc9c;

  }

  .close{
    font-size: 30px;
    color:black;
  }

  .modal-footer{
    background-color: #1abc9c;
    width:100%;
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
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid bg-1 text-center">
    
    <h3 class="margin"></h3><br>
    <div class="row">
      
      <div class="col-sm-12">
        
        <div class="block1">
       
        <h1>Admin</h1>

        <br>
        <form method="GET">
        <div class="form-group">
              <input type="email" class="form-control left-border-none" placeholder="Enter email address to be deleted" name="emailx">             
            </div>    
            <br>
          <button class="btn1" type="submit" name="deletex" id="deletex">Delete</button>

        </form>
        <hr> 
        <button class="btn1" onclick="location.href='users.php'" href="users.php">Show All Users</button>
       

          
        </div>
        
      </div>
    </div>
  </div>



  <div class="footer">
    <p class="p1">Designed By Kaustubh</p>
  </div>



</body>


</html>