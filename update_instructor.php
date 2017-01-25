<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

  $y = $_SESSION['d'];
  $sel_item = "SELECT * from addInstructor where Iid='$y'";
  $done_item = mysqli_query($conn,$sel_item);
  if (mysqli_affected_rows($conn)>=1){
    $get_item = mysqli_fetch_array($done_item) or die ("no fire");
  }
  
  if ($get_item['Igender']=='Male') $flag=0;
  else $flag=1;

  

  if(isset($_POST['Ireg'])){
    $name=$_POST['Iname'];
    $email=$_POST['Iemail'];
    $mobile=$_POST['Imob'];
    $date=$_POST['Idate'];
    $gender=$_POST['Igen'];
    $id=$_POST['Iid'];
    $password=$_POST['Ipass'];
    

    $qry="SELECT * from addInstructor where Iid='$id'";
    $res=mysqli_query($conn,$qry) or die("not fire1");
    $result1 = mysqli_num_rows($res);
    
    if($result1!=0){
      $qry1="UPDATE addInstructor SET Iname='$name',Iemail='$email',Imobile='$mobile',Idate='$date',Igender='$gender' WHERE Iid='$id'";
      $result2=mysqli_query($conn,$qry1) or die;
      if($result2){
        $xlogm="<p style='color:green;''> Successfully Update</p>";
      }
  }
  header("location:update_instructor.php");
  //unset($_SESSION['d']);
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
          <td><input type="text" name="Iname" value="<?php echo $get_item['Iname'];?>"></td></tr>
        <tr><td><label>E-Mail</label></td>
          <td><input type="text" name="Iemail" value="<?php echo $get_item['Iemail'];?>"></td></tr>
        <tr><td><label>Mobile</label></td>
          <td><input type="int" name="Imob" value="<?php echo $get_item['Imobile'];?>"></td></tr>
        <tr><td><label>ID</label></td>
          <td><input type="text" name="Iid" value="<?php echo $get_item['Iid'];?>"></td></tr>
        <tr><td><label>Password</label></td>
          <td><input type="password" name="Ipass" value="<?php echo $get_item['Ipassword'];?>"></td></tr>
        <tr><td><label>Date Of Birth</label></td>
          <td><input type="date" class="datepicker" name="Idate" value="<?php echo $get_item['Idate'];?>"></td></tr>
        <tr><td><label>Gender</label></td>
          <td>
           
    
    
    <p>
      <input class="with-gap" name="Igen" type="radio" id="test3" value="Male" <?php echo($flag==0?'checked="checked"':''); ?>/>
      <label for="test3">Male</label>
    </p>
      <p>
        <input class="with-gap" name="Igen" type="radio" id="test4" value="Female" <?php echo($flag==1?'checked="checked"':''); ?> />
        <label for="test4">Female</label>
    </p>
  
    </td></tr>
    
        <tr><td></td><td><button class = "btn btn-primary"  type="submit" name="Ireg">Register Me</button></td></tr>
      </form>
    </table>
  </div>

    </body>

    <script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
    </script>

</html>