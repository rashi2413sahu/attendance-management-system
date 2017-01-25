<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

if (isset($_POST['slog'])){
    $mobile=$_POST['smob'];
    $password=$_POST['spass'];

    $qry="SELECT * from addStudent where Smobile='$mobile' and Spassword='$password'";
    $res=mysqli_query($conn,$qry) or die("not fire1");
    if (mysqli_affected_rows($conn)>=1){
      $row=mysqli_fetch_array($res) or die("not fire2");
      $_SESSION['name']=$row[0];
      $_SESSION['email']=$row[1];
      $_SESSION['mobile']=$row[2];
      $_SESSION['date']=$row[3];
      $_SESSION['gender']=$row[4];
      $_SESSION['roll']=$row[5];
      $_SESSION['password']=$row[6];
      $_SESSION['guard_name']=$row[7];
      $_SESSION['guard_email']=$row[8];
      $_SESSION['guard_mobile']=$row[9];
      $_SESSION['semester']=$row[10];
      $_SESSION['login']=true;
      header("location:student1.php");
    }
    else {
      $xlogl="<p style='color:red;''>Invalid Credentials</p>";
    }
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
      <li><a href="attendance.php">Home</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="instructor.php">Instructor</a></li>
      <li><a href="student.php">Student</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>


  <div class="container" style="margin-top:150px;">
  <div class="col-lg-1"></div>
  <div class="col-lg-5" style="margin-top:10px;">
    <h4>Login Here</h4>
    
    <table class="table table-responsive">
      <form name="form1" action="" method="post" onsubmit="funValidate1()">
        <tr><td><label>Mobile</label></td>
        <td><input type="text" name="smob"></td></tr>
        <tr><td><label>Password</label></td>
        <td><input type="password" name="spass"></td></tr>
        <tr><td></td><td><button class = "btn btn-primary" type="submit" name="slog" onMouseover("this.style.backgroundColor='red';return true;" )>Login</button></td></tr>
      </form>
    </table>
  </div>

    </body>

</html>



   