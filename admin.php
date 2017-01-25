<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

  if(isset($_POST['xreg'])){
    $name=$_POST['xname'];
    $email=$_POST['xemail'];
    $mobile=$_POST['xmob'];
    $password=$_POST['xpass'];

    $qry="SELECT * from users where amobile='$mobile'";
    $res=mysqli_query($conn,$qry) or die("not fire1");
    if (mysqli_affected_rows($conn)>=1){
      $xlogm="<p style='color:red;'>User Already Registered</p>";
    }
    else{
      $qry="INSERT into add_admin VALUES('$name','$email','$mobile','$password')";
      $result=mysqli_query($conn,$qry) or die;
      if($result){
        $xlogm="<p style='color:green;''>Registration Successfull</p>";
      }
    }
  }

  if (isset($_POST['xlog'])){
    $mobile=$_POST['xmob'];
    $password=$_POST['xpass'];

    $qry="SELECT * from add_admin where amobile='$mobile' and apassword='$password'";
    $res=mysqli_query($conn,$qry) or die("not fire1");
    if (mysqli_affected_rows($conn)>=1){
      $row=mysqli_fetch_array($res) or die("not fire2");
      $_SESSION['name']=$row[0];
      $_SESSION['email']=$row[1];
      $_SESSION['mobile']=$row[2];
      $_SESSION['password']=$row[3];
      $_SESSION['login']=true;
      header("location:admin1.php");
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
    <a href="#!" class="brand-logo">ATTENADNCE MANAGMENT SYSTEM</a>
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


<p id="date" align="right"></p>
<div class="container" style="margin-top:50px;">
  <div class="row">
  <div class="col l1"></div>
  <div class="col l5" style="margin-top:10px;">
    <h4>Login Here</h4>
    <?php if(!empty($xlogl)) echo $xlogl; ?>
    <table class="table table-responsive">
      <form name="form1" action="" method="post" onsubmit="funValidate1()">
        <tr><td><label>Mobile</label></td>
        <td><input type="text" name="xmob"></td></tr>
        <tr><td><label>Password</label></td>
        <td><input type="password" name="xpass"></td></tr>
        <tr><td></td><td><button class = "btn btn-primary" type="submit" name="xlog" onMouseover("this.style.backgroundColor='red';return true;" )>Login</button></td></tr>
      </form>
    </table>
  </div>
  <div class="col l5"style="margin-top:10px;border-left:2px solid black;">
    <h4>Sign Up</h4>
    <table class="table table-responsive">
      <?php if(!empty($xlogm)) echo $xlogm; ?>
      <form name="form2" action="" method="post" onsubmit="funValidate2()">
        <tr><td><label>Name</label></td>
          <td><input type="text" name="xname"></td></tr>
        <tr><td><label>E-Mail</label></td>
          <td><input type="text" name="xemail"></td></tr>
        <tr><td><label>Mobile</label></td>
          <td><input type="text" name="xmob"></td></tr>
        <tr><td><label>Password</label></td>
          <td><input type="password" name="xpass"></td></tr>
        <tr><td></td><td><button class = "btn btn-primary"  type="submit" name="xreg">Register Me</button></td></tr>
      </form>
    </table>
  </div>
  <div class="col l1"></div>
</div>
</div>


<script type="">
    function funValidate2(){
      var x=document.forms["form2"]["xname"].value;
      var y=document.forms["form2"]["xemail"].value;
      var w=document.forms["form2"]["xmob"].value;
      var z=document.forms["form2"]["xpass"].value;

      if (x=="") {
        alert("Name must be filled out");
      }
      else if (y=="") {
        alert("Email must be filled out");
      }
      else if (w=="") {
        alert("Mobile must be filled out");
      }
      else if (z=="") {
        alert("Passoword must be filled out");
      }
      return;
    }

  </script>
</body>
</html>






























  