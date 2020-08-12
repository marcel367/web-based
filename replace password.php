<html>
<head>
    <link rel="stylesheet" type="text/css" href="sign up.css">
  <link rel="icon" type="image" href="medic1.png">

  <h1><center><br>
<font color=#719B8B>TRI</font>
-
<font color=#DE6D79>HUB</font>
<font color=#00FFFF> MEDICAL</font>
<font color=#6BA7FF> SERVICES </font> </h1></center>
  
</head>

<title>Replace Password</title>

  <form method='post'>
  <div class="login-box">
    <img src="medic1.png" class="uganda">
  <center><br>

workno: <input type="text" name="workno" placeholder="Enter workno"><br><br>

 password: <input type="text" name="password" placeholder="Enter old password"><br><br>


newpassword: <input type="password" name="newpassword" placeholder="Enter new Password"><br>
<button name='update'>UPDATE</button><br><br>
 
  
 <a href="index.php">LOG IN</a><br><br>

<a href="sign up.php">SIGN UP</a><br><br>

 <a href="contact us l.php">CONTACT US</a><br><br> </center>


 <center>Powered By TRI-HUB TECHNOLOGY</center>

  <?php
	   if(isset($_POST['update'])){
    
	  $password=$_POST['password'];
	  $newpassword=$_POST['newpassword'];
	    $workno=$_POST['workno'];

	  $con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
	 
   $query = "SELECT * FROM `login` WHERE workno='$workno' and password='$password'";
		$result = mysqli_query($con,$query);
if($rw=mysqli_fetch_assoc($result))


	$query="UPDATE 'login' SET password='$newpassword' where workno=".$workno=['workno']."";
	if($rw=mysqli_query($con,$query))
	{
echo"<script>alert('Password successfully updated')</script>" ;
	}
else{
	echo"<font color=red size=16>Failed!! to change password</font>";
}
  }?>


  </div><br>
  </form>
    </body>
  </html>