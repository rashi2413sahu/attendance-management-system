<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

  if(!isset($_SESSION['login']) || $_SESSION['login']==false){
    header("location:admin.php");
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
    <a href="#!" class="brand-logo">ATTENADNCE</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="admin1.php">Profile</a></li>
      <li><a href="admin1_addFaculty.php">Add Instructor</a></li>
      <li><a href="instructor_delete.php">Delete Instructor</a></li>
      <li><a href="view_instructor.php">View Instructor</a></li>
      <li><a href="admin1_addStudent.php">Add Student</a></li>
      <li><a href="sass.html">Delete Student</a></li>
      <li><a href="sass.html">View Student</a></li>
      <li><a href="add_courses.php">Add Courses</a></li>
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
    </table>
  </div>
  <div class="col-lg-5">
    <a href="logout1.php">Logout</a>
  </div>
  <div class="col-lg-1"></div>

</div>

    </body>

</html>



   