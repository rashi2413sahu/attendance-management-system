
<?php
ob_start();
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

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
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<form action="" method="POST">
<table class="striped">
        <thead>
          <tr>
              <th data-field="sl">Sl.No.</th>
              <th data-field="id">Name</th>
              <th data-field="name">Email</th>
              <th data-field="price">Mobile</th>
              <th data-field="id">Date Of Birth</th>
              <th data-field="price">Gender</th>
              <th data-field="name">ID</th>
              <th data-field="name">Update</th>
          </tr>
        </thead>

        <tbody>
          <?php


$qry1 = "select * from addInstructor";
$qry2= mysqli_query($conn,$qry1);
$i=1;
$myArray=array();
while($result=mysqli_fetch_array($qry2)){
  
?>

<tr>
<td><?php echo $i;$i++;?></td>
<td><?php echo $result['Iname'];?></td>
<td><?php echo $result['Iemail'];?></td>
<td><?php echo $result['Imobile'];?></td>
<td><?php echo $result['Idate'];?></td>
<td><?php echo $result['Igender'];?></td>
<td><?php echo $result['Iid']; array_push($myArray, $result['Iid']);?></td>
<td> <button> <?php echo (string)$i; ?> <input type="submit" value="Update" name="<?php echo (string)$i; ?>"></button></td>
</tr>
<?php }?>
        </tbody>
      </table>
     </form>       
<?php
  //echo $myArray[0];
  $b=0;
  while($b<50){
    //echo "Hi";
    $c=(string)$b;
    //echo $c;
    if(isset($_POST[$c])){
      //echo "Hi there";
      //print_r($myArray);
      //echo $myArray[$b];
      $_SESSION['d']=$myArray[$b-2];
      echo $_SESSION['d'];
     header("location:update_instructor.php");
      break;
    }
    $b++;
  }
  ob_end_flush();
  ?>


    </body>

</html>
