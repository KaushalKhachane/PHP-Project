

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Registration System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>

<style>
  body {
  font: 20px Montserrat, sans-serif;
  line-height: 1.8;
  background-image: url("https://img.freepik.com/free-vector/seamless-white-interlaced-rounded-arc-patterned-background_53876-97975.jpg?w=2000");
  }
  p {
    font-size: 16px;
    
      font-size: 16px;
      margin-top: 50px;
      margin-bottom: 30px;
  }



  .bg-3 { 
    background-color: #ffffff00; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }

  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
    margin-top: 0px;
    background-color:#1abc9c;
    overflow: hidden;
    width: 100%;
    position:fixed;
    z-index: 9999;
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
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    border-radius: 15px;
    -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
    box-shadow:0 3px 50px 0 rgba(0,0,0,0.3);
    padding:60px;
    
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
<body>

<!-- Navbar -->
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
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin"></h3><br>
  <div class="row">
    <div class="col-sm-4">
      <div class="block1">
        <img class="img-circle" src="logo.png" height="100px" width="100px">
        <hr>
        <div>Manage your Profile</div>
        <br>
        <button class="btn1" onclick="location.href='login.php'">Login</button>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block1">
        <img class="img-circle" src="logo.png" height="100px" width="100px">
        <hr>
        <div>Create New Profile</div>
        <br>
        <button class="btn1" onclick="location.href='signup.php'">Sign Up</button>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block1">
        <img class="img-circle" src="logo.png" height="100px" width="100px">
        <hr>
        <div>Manage Student Data</div>
        <br>
        <button class="btn1" onclick="location.href='admin.php'">Admin</button>
      </div>
    </div>
  </div>
</div>

<!-- Second Container -->


<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dicta enim eaque eos eveniet soluta, dolorem facilis saepe nesciunt nam vitae minus pariatur, assumenda omnis nisi similique ut est voluptatem nihil iure. Consectetur tempore animi rerum nemo eligendi, odit natus nulla totam perspiciatis, eum itaque nostrum, quibusdam autem velit ducimus dolor. Amet ratione sint nostrum quia aut, neque et veniam aliquid similique natus deleniti eum odio, fugiat sed ab? Cumque molestiae explicabo excepturi minima quaerat! Unde, labore saepe. Sapiente magnam doloribus corrupti recusandae ad qui fuga aliquid exercitationem velit animi cumque, veritatis, error quo. Quaerat nihil possimus fugit libero non.
</div>

<!-- Footer -->
<div class="footer">
  <p>Designed By Kaustubh</p> 
</div>

</body>
</html>
