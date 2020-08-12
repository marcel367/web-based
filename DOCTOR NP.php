<html>
<title>DOCTOR NP
</title>
<head>
	<link rel="stylesheet" href="Doctor NP.css">
	<link rel="icon" type="image" href="medic1.png">
</head>

<header>
	<center><br>

		<div class="header">
   <?php echo '<input type=text value="' . date("d F Y H:i:s") . '" readonly/>';?>   
   <h1>TRI-HUB MEDICAL SERVICES</h1>
  
</div>


</header></center><br>

<center>
<table><tr><td><font size="6"><a href="DOCTOR H.php">HOME</a></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></td><td></td><td></td><td></td>
	<td></td><td></td><td></td><td></td><td><font size="6"><a href="DOCTOR PR.php">PATIENT</a></font></td><td></td><td></td><td></td><td></td><td></td><td><font size="6"><a href="DOCTOR L.php">LIST OF PATIENT</a></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td><font size="6"><a href="DOCTOR R.php">RESULTS</a></font></td>  <td></td><td></td><td></td><td></td> <td><font size="6"><a href="contact us.php">CONTACT US</a></font></td></tr>
</table></center>
<center>
<form method='post'>
<table>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>DATE RECEIVED:<input type='date' name='date'>

	</td><td></td><td></td><td></td><td></td><td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><br><br>
	<td>PATIENT NO:<input type='text' name='patno'  size="40" required></td></tr></table><br><br>
		NAME:<input name="Name" value="" size="40" required><br><br><br>
		ADDRESS:<input name='address' value="" size="40" required><br><br><br>
		OCCUPATION:<input name='occupation' value="" size="40" required><br><br><br>

		
	<table><tr><td>AGE:<input name="age" type='text' required value="" size="5"></td><td></td><td></td></tr>
		<tr><td>Gender:<input type="radio" name="gender" value="male">Male 
      <input type="radio" name="gender" value="female">Female </td></tr>
	</table><br><br><br>
		CONTACT:<input name='contact'type="number_format" value="" size="40" required><br><br><br>


<form action="upload.php" method="post" enctype="multipart/form-data">
  Select what to upload:
  <input type="file" name="file" id="upload">
<br><br>


	
		<button name='sub'>Save</button>
		<input type="Reset" value="Cancel" ></center></form><br><br><br><br><br>
</form><br><br>


    <?php
  if(isset($_POST['sub'])){
$date=$_POST['date'];
$patno=$_POST['patno'];
$Name=$_POST['Name'];
$address=$_POST['address'];
$occupation=$_POST['occupation'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$file=$_POST['file'];

$con=mysqli_connect("localhost","root","","clinic");
$qry="insert into pat values('$date','$patno','$Name','$address','$occupation','$age','$gender','$contact','$file')";
if($res=mysqli_query($con,$qry)){
  echo"<script>alert('Pateint records saved successfully')</script>";
}else{
  echo"<center><font color=red size=16>Records Not saved</font></center>";
}
}?><br><br
>


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