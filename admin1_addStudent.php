<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

  if(isset($_POST['Sreg'])){
    $name=$_POST['Sname'];
    $email=$_POST['Semail'];
    $mobile=$_POST['Smob'];
    $date=$_POST['Sdate'];
    $gender=$_POST['Sgen'];
    $password=$_POST['Spass'];
    $roll=$_POST['Sroll'];
    $semester=$_POST['Ssem'];
    $guard_name=$_POST['Sguard1'];
    $guard_mobile=$_POST['Sguard2'];
    $guard_email=$_POST['Sguard3'];
    
    

    //$qry="SELECT * from addInstructor where mobile='$mobile'";
    //$res=mysqli_query($conn,$qry) or die("not fire1");
    
    
      $qry="INSERT into addStudent VALUES('$name','$email','$mobile','$roll','$guard_name','$guard_email','$guard_mobile','$password','$date','$semester','$gender')";
      $result=mysqli_query($conn,$qry) or die;
      
  
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
    <a href="#!" class="brand-logo">ATTENADNCE </a>
    <ul class="right hide-on-med-and-down">
      <li><a href="admin1.php">Profile</a></li>
      <li><a href="admin1_addFaculty.php">Add Instructor</a></li>
      <li><a href="instructor_delete.php">Delete Instructor</a></li>
      <li><a href="badges.html">View Instructor</a></li>
      <li><a href="admin1_addStudent.php">Add Student</a></li>
      <li><a href="student_delete.php">Delete Student</a></li>
      <li><a href="sass.html">View Student</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>



<div class="col-lg-5"style="margin-top:10px;border-left:2px solid black;">
    <h4>Sign Up</h4>
    <table class="table table-responsive">
      <form name="form2" action="" method="post" action="#" >
        <tr><td><label>Name</label></td>
          <td><input type="text" name="Sname"></td></tr>
        <tr><td><label>E-Mail</label></td>
          <td><input type="text" name="Semail"></td></tr>
        <tr><td><label>Mobile</label></td>
          <td><input type="int" name="Smob"></td></tr>
        <tr><td><label>Password</label></td>
          <td><input type="password" name="Spass"></td></tr>
          <tr><td><label>Date Of Birth</label></td>
          <td><input type="date" class="datepicker" name="Sdate"></td></tr>
        <tr><td><label>Gardian's Name</label></td>
          <td><input type="text" name="Sguard1"></td></tr>
        <tr><td><label>Gardian's Mobile</label></td>
          <td><input type="int" name="Sguard2"></td></tr>
        <tr><td><label>Gaurdian's E-Mail</label></td>
          <td><input type="text" name="Sguard3"></td></tr>
          <tr><td><label>Roll No</label></td>
          <td><input type="text" name="Sroll"></td></tr>
          <tr><td><label>Semester</label></td>
          <td><input type="int" name="Ssem"></td></tr>
          <tr><td><label>Gender</label></td>
          <td><p>
      <input name="Sgen" type="radio" id="test1" />
      <label for="test1">Male</label>
    </p>
    <p>
      <input name="Sgen" type="radio" id="test2" />
      <label for="test2">Female</label>
    </p></td></tr>
        <tr><td></td><td><button class = "btn btn-primary"  type="submit" name="Sreg">Register Me</button></td></tr>
      </form>
    </table>
  </div>

    </body>

</html>



   