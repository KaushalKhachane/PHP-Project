

<!DOCTYPE html>
<html lang="en">

<?php
include('dbconnection.php');
  session_start();
  
  $fff = $_SESSION['emailx'];
  $query2 = "select * from student where Email_Address = '$fff'";
  $result1 = mysqli_query($conn, $query2);
  $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
  if(isset($_POST['update'])){
    // $emailx=$_GET[$fff];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    // $emailx = $_POST['emailx'];
    $query = mysqli_query($conn,"update student set Mobile_No = '$mobile',Password = '$password',Name = '$name' where Email_Address = '$fff'");
    if ($query) {
      // echo "<script>alert('You have successfully update the data');</script>";
      echo "<script type='text/javascript'> document.location ='success.html'; </script>";
    }
    else
      {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
      }
  }
  
?>

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
<script>
  function validateForm() {
    let x = document.forms["myForm"]["uname"].value;
    if (x == "") {
      alert("Name must be filled out");
      document.myForm.uname.focus() ;
      return false;
    }

    let y = document.forms["myForm"]["mobile"].value;
    if(y<999999999||y>9999999999){
      alert("Enter a valid mobile number");
      document.myForm.mobile.focus() ;
      return false;
    }

    if (myForm.id_password.value == "") {
      alert("Password cannot be blank");
      document.myForm.id_password.focus() ;
      return false;
    }

    if (myForm.confirm_pwd.value == "") {
      alert("Please confirm your password");
      document.myForm.id_password.focus() ;
      return false;
    }
    
    if(document.forms["myForm"]["confirm_pwd"].value==document.forms["myForm"]["pwd"].value){
      alert("Please enter correct password")
      document.myForm.confirm_pwd.focus() ;
    }   
  }
  function sh_password(){
    let z = document.getElementById("id_password");
        if(z.type==="password"){
          z.type = "text";
        }
        else{
          z.type = "password";
        }
  }
</script>
  

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
    padding:60px;
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
    font: 20px Montserrat, sans-serif;
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
          <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="admin.php"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid bg-1 text-center">
    
    <h3 class="margin"></h3><br>
    <div class="row">
      
      <div class="col-sm-12">
        
        <div class="block1">
       
        <h3><?php echo "Hi, ", $row1['Name'], "!"; ?></h3>
        <br>
        <button class="btn1" type="submit" data-toggle="modal" data-target="#exampleModalLong" name="submit" id="submit">Update Profile</button>
              
          

          
        </div>
        
      </div>
    </div>
  </div>


  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLongTitle">Update Profile:  </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="myForm" onsubmit="return validateForm()" method="POST" >
              
        <p>
              <div class="form-group">
                <label for="name"> Name:</label>
                <input type="text" name = "name" class="form-control" id="uname" placeholder="Enter your name" 
                value="<?php echo $row1['Name']; ?>">
                
              </div>
              </p>
              
              

              <br>
              <div class="form-group">

                <label>Email address:</label>
                <input type="text" class="form-control" placeholder="Enter Email Address" name="email2" id="email2" value="<?php echo $row1['Email_Address']?>" readonly> 
              </div>

              <br>

              <div class="form-group">

                <label for="mobile">Mobile No.:</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter your Mobile Number" value="<?php echo $row1['Mobile_No']; ?>">
              </div>
              <br>
              <div class="form-group">
                <label for="pwd">New Password:</label>
                
                <input type="password" class="form-control" name="password" id="id_password" >

              </div>
              <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" id="sh_pwd" onclick="sh_password()">Show
                  Password</label>

              </div>
              <br>

              <div class="form-group">
                <label for="pwd">Confirm New Password:</label>
                <input type="password" class="form-control" id="confirm_pwd" name="pwd1">
              </div>  
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>       
        </form>
      </div>
      
    </div>
  </div>
</div>


  <div class="footer">
    <p class="p1">Designed By Kaustubh</p>
  </div>



</body>


</html>