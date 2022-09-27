<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
            margin-top:100px;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            font-size: 25px;
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-height: 45px;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title select {
            border-color: #ddd;
            border-width: 0 0 1px 0;
            padding: 3px 10px 3px 5px;
            margin: 0 5px;
        }

        .table-title .show-entries {
            margin-top: 7px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box .input-group {
            min-width: 200px;
            position: absolute;
            right: 0;
        }

        .search-box .input-group-addon,
        .search-box input {
            border-color: #ddd;
            border-radius: 0;
        }

        .search-box .input-group-addon {
            border: none;
            border: none;
            background: transparent;
            position: absolute;
            z-index: 9;
        }

        .search-box input {
            height: 34px;
            padding-left: 28px;
            box-shadow: none !important;
            border-width: 0 0 1px 0;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
            position: relative;
            top: 8px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            padding: 0 10px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
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
            margin-top:0px;
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

        .th{
            font-size:20px;
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


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Student <b>Details</b></h2>
                        </div>

                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

                    <tbody>
                    <tr>
                                <th>Name</th>
                                
                                <th>Gender</th>
                                
                                <th>Email</th>
                                
                                <th>Mobile_No</th>
                                
                                <th>Creation Date</th>
                            </tr>  

                        <?php
                        $ret = mysqli_query($conn, "select * from student");
                        $cnt = 1;
                        
                        while ($row = mysqli_fetch_array($ret)) {

                        ?>
                           <tr>
                           <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Gender']; ?></td>
                                <td><?php echo $row['Email_Address']; ?></td>
                                <td><?php echo $row['Mobile_No']; ?></td>
                                <td><?php echo $row['Course']; ?></td>

                           </tr>
                                
                            
                            
                            
                        <?php
                            $cnt = $cnt + 1;
                        } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>