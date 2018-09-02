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
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:#556B2F;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color:gray;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 40%; /* Set width to 100% */
      margin: auto;
      min-height:10px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
  </style>
    
</head>
<body> 
    <img src="logo.jpg" alt="Trulli" width="1500" height="133">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HFB</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account Information<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Total Amount</a></li>
            <li><a href="#">Expenses</a></li>
            <li><a href="#">Running Process</a></li> 
          </ul>
        </li>
        <li><a href="http://localhost/tutorialspoint/HFB/members.php">Members</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="rsz_sp1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>HFB</h3>
          <p>This is the new committee</p>
        </div>      
      </div>

      <div class="item">
        <img src="sp2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>HFB</h3>
          <p>Once upon a time in BAUET</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container">
  <h2>Latest News</h2>
  <a href="http://localhost/tutorialspoint/HFB/1st%20committee.php" class="btn btn-info">First Committee(2017)</a>
  <div id="demo" class="collapse">
    This was first executive committee which had four members.
  </div>
</div>
<footer class="container-fluid text-center">
  <p>@Copyright SP,member(HFB)</p>
</footer>  
</body>
</html>
