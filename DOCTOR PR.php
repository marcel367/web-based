<html>
<title>DOCTORS PR
</title>
<head>
	<link rel="stylesheet" href="Doctor PR.css">
	<link rel="icon" type="image" href="medic1.png">
</head>

<header>
	<center><br>

		<div class="header">
    <?php echo '<input type=text value="' . date("d F Y H:i:s") . '" readonly/>';?>   
   <h1>TRI-HUB MEDICAL SERVICES</h1>
</div><br>

<style>

</style>
<center><h1></h1><br>
<table><tr>
<td><font size="6"><a href="DOCTOR H.php">HOME</a></font></td><td></td></td><td></td><td></td></td><td></td><td></td></td><td></td>
<td><font size="6"><a href="DOCTOR NP.php">NEW PATIENT</a></font></td><td></td></td><td></td><td></td></td><td></td><td></td></td><td></td>
<td></td><td></td><td></td><td></td><td></td>
<td><font size="6"><a href="DOCTOR R.php">FULL RESULTS</a></font></td><td></td><td></td><td></td><td></td>
<td><font size="6"><a href="DOCTOR L.php">LIST OF PATIENT</a></font></td> <td></td><td></td><td></td><td></td>
<td><font size="6"><a href="contact us.php">CONTACT US</a></font></td>
</tr></table></center><br><br><br>

<form method='post'>
			
<center>
		PATIENT NO:<select height="30px" width="100px" name='pn'><option>---select ab option---</option>
		<?php
			$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
			$qy="select patno from pat";
			$res=mysqli_query($con,$qy);
			while($rw=mysqli_fetch_assoc($res)){
			echo"<option>".$rw['patno']."</option>";
			}
		?></select>
		
		<br><br><br><br>
	
			SICKNESS OF PATIENT:<textarea wrap="virtual" name="sp" rows=5 cols=40 maxlength=100 required></textarea><br><br><br>
			CAUSE OF SICKNESS<textarea wrap="virtual" name="cs" rows=5 cols=40 maxlength=100 required></textarea><br><br><br>
			SIGNS AND SYMPTOMS<textarea wrap="virtual" name="ss" rows=5 cols=40 maxlength=100 required></textarea><br><br><br>
			CRONIC DISEASE:<textarea wrap="virtual" name="cd" rows=5 cols=40 maxlength=100 required></textarea><br><br><br><br>
			ALLERGIES inherit:<textarea wrap="virtual" name="ai" rows=5 cols=40 maxlength=100 required></textarea><br><br>
			WEIGHT:<input name='wg' value="" size="10" required><br><br><br>
			HEIGHT:<input name='hg' value="" size="10" required><br><br>
				
					
					REVIEWED BY:<input name='doc' value="" size="40" required><br><br>
	
					<button name='sub'>Save</button>
					<input type="Reset" value="Cancel" ><br>
	

</select></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

<?php
			if(isset($_POST['sub'])){
			$patno=$_POST['patno'];
			$sp=$_POST['sp'];
			$cs=$_POST['cs'];
			$ai=$_POST['ai'];
			$ss=$_POST['ss'];
			$cd=$_POST['cd'];
			$wg=$_POST['wg'];
			$hg=$_POST['hg'];
			$doc=$_POST['doc'];

	$con=mysqli_connect("localhost","root","","clinic");
	$qry="insert into reco values('$patno','$sp','$cs','$ai','$ss','$cd','$wg','$hg','$doc')";
		if($res=mysqli_query($con,$qry)){
			echo"<script>alert('Pateint records saved successfully')</script>";
			}else{
				echo"<center><font color=red>Records Not saved</font></center>";
					}
	}?>

</body>
</html>	
