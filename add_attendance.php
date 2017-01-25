<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","attendance") or die;

  
  ?>


<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      
       
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
    <a href="#!" class="brand-logo">ATTENADANCE MANAGMENT SYSTEM</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="instructor1.php">Profile</a></li>
      <li><a href="add_attendance.php">Add Attendance</a></li>
      <li><a href="instructor.php">View Attendance</a></li>
      
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

<div class=" s12 m6 l3">
</div>

<div class="input-field col s12 m6 l3">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Choose the Course</label>
  </div>


<table class="striped" style="margin-top: 50px;">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Email</th>
              <th data-field="price">Mobile</th>
              <th data-field="id">Date Of Birth</th>
              <th data-field="price">Gender</th>
              <th data-field="name">ID</th>
              <th data-field="Attenadnce">Attendance</th>
          </tr>
        </thead>

        <tbody>
          <?php


$qry1 = "select * from addStudent";
$qry2= mysqli_query($conn,$qry1);
while($result=mysqli_fetch_array($qry2)){
  
?>

<tr>
<td><?php echo $result['Sname'];?></td>
<td><?php echo $result['Semail'];?></td>
<td><?php echo $result['Smobile'];?></td>
<td><?php echo $result['Sdate_birth'];?></td>
<td><?php echo $result['Sgender'];?></td>
<td><?php echo $result['Sroll_no'];?></td>
<td> <div class="switch">
    <label>
      Off
      <input type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div></td>
</tr>
<?php }?>
        </tbody>
      </table>


      

    </body>

    <script>$(document).ready(function() {
    $('select').material_select();
  });
    </script>

</html>