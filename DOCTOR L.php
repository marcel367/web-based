<html>
<title>DOCTOR L
</title>
<head>
	<link rel="stylesheet" href="DOCTOR L.css">
	<link rel="icon" type="image" href="medic1.png">
</head>

<header>
	<center><br>

		<div class="header">
    <?php echo '<input type=text value="' . date("d F Y H:i:s") . '" readonly/>';?>   
   <h1>TRI-HUB MEDICAL SERVICES</h1>
  
</div>


</header></center><br>
<body>
 <form method = "post" action = "<?php $_PHP_SELF ?>">

<center>
<table><tr><td><font size="6"><a href="DOCTOR H.php">HOME</a></font></td><td></td><td></td><td></td><td></td><td></td>
<td></td><td></td><td></td><td></td>
<td><font size="6"><a href="DOCTOR NP.php">NEW PATIENT</a></font></td><td></td><td></td><td></td>
<td><font size="6"><a href="DOCTOR PR.php">PATIENT</a></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td><font size="6"><a href="DOCTOR R.php">RESULTS</a></font></td> <td></td><td></td><td></td><td></td>  <td><font size="6"><a href="contact us.php">CONTACT US</a></font></td>
</tr></table></center>
<center><table border='1' width="90%"><tr><td> Number</td><td>name</td><td>date</td><td>Address</td><td>Occupation</td><td>age</td><td>sex</td><td>contact</td><td>file</td></tr>
<?php
$count=1;
$con=mysqli_connect("localhost","root","","clinic");
$sel_query="Select * from pat order by patno desc";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)){?>
<tr><td><?php echo$row['patno'];?></td><td><?php echo$row['Name'];?></td><td><?php echo$row['date'];?></td><td><?php echo$row['address'];?></td><td><?php echo$row['occupation'];?></td><td><?php echo$row['age'];?></td><td><?php echo$row['gender'];?></td><td><?php echo$row['contact'];?></td><td>
  <?php echo$row['file'];?> </td></tr>
    <?php $count++; }?>
</table></center><br><br><br><br><br><br><br>



  <center>  PATIENT NO:<select height="30px" width="100px" name='pn'><option>---select ab </option> </b><br><br><br>
    <?php
      $con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
      $qy="select patno from pat";
      $res=mysqli_query($con,$qy);
      while($rw=mysqli_fetch_assoc($res)){
      echo"<option>".$rw['patno']."</option>";
      }
    ?> </select>    <button name='delete'>delete</button>
		<br><br>
</center><br><br>

<?php

$con= mysqli_connect("localhost", "root", "", "clinic");
 if(isset($_POST['delete']))

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE  FROM pat WHERE patno=''";
if(mysqli_query($con, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}?>



		<div class="container"></div>
    <footer>
      <!-- Footer main -->
      <section class="ft-main">
        <div class="ft-main-item">
          <h2 class="ft-title">About</h2>
          <ul>
            <li><a href="#">Services</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Resources</h2>
          <ul>
            <li><a href="#">mobile apps</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">websites</a></li>
            <li><a href="#">embeded sysrems</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Contact</h2>
          <ul>
            <li><a href="#">0777732783</a></li>
            <li><a href="#">0708428803</a></li>
            <li><a href="#">tri-hubtech@tri-hubtechgroup.com</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Stay Updated</h2>
          <p>Subscribe to our newsletter to get our latest news.</p>
          <form>
            <input type="email" name="email" placeholder="Enter email address">
            <input type="submit" value="Subscribe">
          </form>
        </div>
                  <div class="ft-main-item">
                  <h2 class="ft-title"><a href="index.php">LOG OUT</a></h2></div>

      </section>
     
     
     
      <!-- Footer legal -->
      <section class="ft-legal">
        <ul class="ft-legal-list">
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><center>TWINOMUGISHA MARCELINO BSC-IT 2018-B071-10039</center></li>
          <li>&copy; 2020 Copyright TRI-HUB TECH</li>
        </ul>
      </section>
    </footer>

</body>
</html>