<html>
<title>CONTACT US
</title>
<head>
</head>
<head>
	<link rel="stylesheet" href="DOCTOR R.css">
	<link rel="icon" type="image" href="medic1.png">
</head>

<header>
	<center><br>

		<div class="header">
  <?php echo '<input type=text value="' . date("d F Y H:i:s") . '" readonly/>';?>   
   <h1>TRI-HUB MEDICAL SERVICES</h1>
  
</div>

<center><h1></h1>
<table><tr>
<td><font size="6"><a href="DOCTOR H.php">HOME</a></font></td><td></td></td><td></td><td></td></td><td></td><td></td></td><td></td>
<td><font size="6"><a href="DOCTOR NP.php">NEW PATIENT</a></font></td><td></td></td><td></td><td></td></td><td></td><td></td></td><td></td>
<td><font size="6"><a href="DOCTOR PR.php">PATIENT</a></font></td><td></td></td><td><td></td></td><td>
<td><font size="6"><a href="DOCTOR L.php">LIST OF PATIENT</a></font></td><td></td><td></td><td></td><td></td>
</tr></table></center><br><br><br>


<center>


NAME:<input name="Name" value="" size="40" required><br><br><br>
		SUBJECT:<input name='Contact mail' value="" size="40" required><br><br><br>
		FROM:<input name='email' value="" size="40" required><br><br><br>
		HEADERS:<input name='cnt'type="number_format" value="" size="40" required><br><br><br>
		MESSAGE:<textarea wrap="virtual" name="cd" rows=5 cols=40 maxlength=100 required></textarea><br><br>


  <input name="SubmitBtn" type="submit" id="SubmitBtn" value="Submit"><br><br><br>
</form>

</center>



<?php
if(isset($_POST["SubmitBtn"])){
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
$to = "marrcel25@gmail.com";
$subject = "Contact mail";
$from=$_POST["email"];
$headers = "From: $from";
$msg=$_POST["msg"];


echo "Email successfully sent.";
}
?>


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
</form>
</center>
</body>
</html>	