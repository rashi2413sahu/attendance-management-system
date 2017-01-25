<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;
  
  if(isset($_POST['Csub'])){
    $course=$_POST['Ccourse'];
    $id=$_POST['Cid'];
   
    
    $qry="SELECT * from add_course where Cid='$id'";
    $res=mysqli_query($conn,$qry) or die("not fire1");
    if (mysqli_affected_rows($conn)>=1){
      $xlogm="<p style='color:red;'>User Already Registered</p>";
    }
    else{
    
    
      $qry="INSERT into add_course VALUES('$id','$course')";
      $result1=mysqli_query($conn,$qry) or die;
      if($result1){
        $xlogm="<p style='color:green;''>Registration Successfull</p>";
      }
    }
  
  }


  if(isset($_POST['Cdel'])){

  $iid=$_POST['Ciid'];
  $d2 = "delete from add_course where Cid = '$iid'";
  $result2=mysqli_query($conn,$d2) or die;

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


<div class="row">

<div class="col l6"style="margin-top:10px;border-left:2px solid black;">
    <h4>Add Course</h4>
    <table class="table table-responsive">
      <form name="form2" action="" method="post" action="#" >
        <tr><td><label>Course Name</label></td>
          <td><input type="text" name="Ccourse"></td></tr>
        <tr><td><label>COurse Id</label></td>
          <td><input type="text" name="Cid"></td></tr>
        
        <tr><td></td><td><button class = "btn btn-primary"  type="submit" name="Csub">Submit</button></td></tr>
      </form>
    </table>
  </div>

  <div class="col l6"style="margin-top:10px;border-left:2px solid black;">
    <h4>Delete Course</h4>
    <table class="table table-responsive">
      <form name="form2" action="" method="post" action="#" >
        
        <tr><td><label>COurse Id</label></td>
          <td><input type="text" name="Ciid"></td></tr>
        
        <tr><td></td><td><button class = "btn btn-primary"  type="submit" name="Cdel">Delete</button></td></tr>
      </form>
    </table>
  </div>
</div>
<table class="striped"   style="margin-top:50px;">
        <thead>
          <tr>
              <th data-field="id">S.No.</th>
              <th data-field="id">Course Id</th>
              <th data-field="name">Course Name</th>
              
          </tr>
        </thead>

        <tbody>
          <?php


$qry1 = "select * from add_course";
$qry2= mysqli_query($conn,$qry1);
$i=1;
while($result=mysqli_fetch_array($qry2)){
  
?>

<tr>
  <td><?php echo $i;$i++;?></td>
<td><?php echo $result['Cid'];?></td>
<td><?php echo $result['Ccourse_name'];?></td>

</tr>
<?php }?>
        </tbody>
      </table>
            


    </body>

</html>
