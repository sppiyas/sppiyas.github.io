<!DOCTYPE html>
<html lang="en">
<head>
  <title>HFB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:#556B2F;
    }
    footer {
      background-color: limegreen;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://localhost/tutorialspoint/HFB/HFB.php">HFB</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/tutorialspoint/HFB/HFB.php">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="http://localhost/tutorialspoint/HFB/piyasdetails.php">Piyas</a></p>
        <img src="piyas.jpg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="http://localhost/tutorialspoint/HFB/piyasdetails.php">Profile Details</a></p>
        <p style="text-align:center;color:green;">
            <b>Md. Muhaiminul Haque Piyas</b></bar></p>
      <p style="font-size:12px;">Email:muhaiminulhaquepiyas@gmail.com</bar>
      Mobile Number:01738304191</bar>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Another Contact</strong></p>
      </div>
      <p><a href="https://www.facebook.com/classical.piyas">Facebook</a></p>
      <p><a href="https://mail.google.com/mail/u/0/#inbox">Email</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true" style="text-align:center;color:green;font-size:30px;">My Account Information</p>
                  
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p style="text-align:center;color:green;font-size:40px;">2017</p>
           <img src="logo2017.jpg" class="img-circle" height="55" width="55" alt="">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p><a href="http://localhost/tutorialspoint/HFB/piyaspayment.php" class="btn btn-info" role="button">Monthly Payment checking</a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p style="text-align:center;color:green;font-size:40px;">2018</p>
           <img src="logo2017.jpg" class="img-circle" height="55" width="55" alt="">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p><a href="http://localhost/tutorialspoint/HFB/piyaspayment2018.php" class="btn btn-info" role="button">Monthly Payment checking</a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p style="text-align:center;color:green;font-size:40px;">2019</p>
           <img src="logo2017.jpg" class="img-circle" height="55" width="55" alt="">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p><a href="http://localhost/tutorialspoint/HFB/piyaspayment2019.php" class="btn btn-info" role="button">Monthly Payment checking</a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p style="text-align:center;color:green;font-size:40px;">2020</p>
           <img src="logo2017.jpg" class="img-circle" height="55" width="55" alt="">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p><a href="" class="btn btn-info" role="button">Monthly Payment checking</a></p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Total Amount Status</p>
        <img src="logo2017.jpg" alt="Paris" width="400" height="300">
        <p><strong>Dayarampur</strong></p>
        <p>Natore</p>
        <p><a href="http://localhost/tutorialspoint/HFB/totalamountstatus.php" class="btn btn-info" role="button">Check</a></p>
      </div>      
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>@Copyright SP,member(HFB)</p>
</footer>

</body>
</html>
