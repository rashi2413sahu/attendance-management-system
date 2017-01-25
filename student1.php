
<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

  if(!isset($_SESSION['login']) || $_SESSION['login']==false){
    header("location:student.php");
  }
?>


<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
       
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">ATTENADANCE</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="instructor1.php">Profile</a></li>
      <li><a href="admin.php">Add Attendance</a></li>
      <li><a href="instructor.php">View Attendance</a></li>
      
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>


<div class="container" style="margin-top:150px;">
  <div class="col-lg-1"></div>
  <div class="col-lg-5">
    <table class="table">
      <tr><td>Name</td><td><?php echo $_SESSION['name'] ?></td></tr>
      <tr><td>Email</td><td><?php echo $_SESSION['email'] ?></td></tr>
      <tr><td>Mobile</td><td><?php echo $_SESSION['mobile'] ?></td></tr>
      <tr><td>ID</td><td><?php echo $_SESSION['roll'] ?></td></tr>
      <tr><td>Date Of Birth</td><td><?php echo $_SESSION['date'] ?></td></tr>
      <tr><td>Gender</td><td><?php echo $_SESSION['gender'] ?></td></tr>
      <tr><td>Mobile</td><td><?php echo $_SESSION['guard_name'] ?></td></tr>
      <tr><td>ID</td><td><?php echo $_SESSION['guard_email'] ?></td></tr>
      <tr><td>Date Of Birth</td><td><?php echo $_SESSION['guard_mobile'] ?></td></tr>
      <tr><td>Gender</td><td><?php echo $_SESSION['semester'] ?></td></tr>
    </table>
  </div>
  <div class="col-lg-5">
    <a href="logout3.php">Logout</a>
  </div>
  <div class="col-lg-1"></div>

</div>

    </body>

</html>



   