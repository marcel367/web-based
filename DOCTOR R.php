<html>
<title>DOCTOR R
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


</header></center><br>
<center><h1></h1>
<table><tr>
<td><font size="6"><a href="DOCTOR H.php">HOME</a></font></td><td></td></td><td></td><td></td></td><td></td><td></td></td><td></td>
<td><font size="6"><a href="DOCTOR NP.php">NEW PATIENT</a></font></td><td></td></td><td></td><td></td></td><td></td><td></td></td><td></td>
<td><font size="6"><a href="DOCTOR PR.php">PATIENT</a></font></td><td></td></td><td><td></td></td><td>
<td><font size="6"><a href="DOCTOR L.php">LIST OF PATIENT</a></font></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td>
<td><font size="6"><a href="contact us.php">CONTACT US</a></font></td>
</tr></table></center><br><br><br>
<form method='post'>
			
	<center>	PATIENT NO:<select height="30px" width="100px" name='pn'><option>---select ab </option> </b><br><br><br>
		<?php
			$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
			$qy="select pn from reco";
			$res=mysqli_query($con,$qy);
			while($rw=mysqli_fetch_assoc($res)){
			echo"<option>".$rw['pn']."</option>";
			}
		?> </select></center><br><br>









<center><table border='1' width="90%"><tr><td>Doctor</td><td>sickness</td><td>cause of sickness</td><td>signs and symptoms</td><td>cronic Disease</td><td>Allergies</td><td>weight</td><td>height</td></tr>
<?php
$count=1;
$con=mysqli_connect("localhost","root","","clinic");
$sel_query="Select * from reco ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)){?>
<tr><td><?php echo$row['doc'];?></td><td><?php echo$row['sp'];?></td><td><?php echo$row['cs'];?></td><td><?php echo$row['ss'];?></td><td><?php echo$row['cd'];?></td><td><?php echo$row['ai'];?></td><td><?php echo$row['wg'];?></td><td><?php echo$row['hg'];?></td></tr>
<?php $count++; }?>
</table></center><br><br><br><br><br>



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