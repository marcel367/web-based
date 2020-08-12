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

<title>LOGIN</title>

  <form method='post'>
  <div class="login-box">
  	 <img src="medic1.png" class="uganda">
  <center><br>
name: <input type="text" name="name" placeholder="Enter name"><br><br>

workno: <input type="text" name="workno" placeholder="Enter workno"><br><br>


password: <input type="password" name="password" placeholder="Enter Password"><br>
<button name='log'>Login</button><br><br>
 
  
 <a href="replace password.php">Forget Password</a><br><br>

<a href="index.php">SIGN UP</a><br><br>

 <a href="contact us l.php">CONTACT US</a><br><br> </center>


 <center>Powered By TRI-HUB TECHNOLOGY</center>

<?php
 $con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
		
	
			 if(isset($_POST['name'])){
			 $name = ($_REQUEST['name']);
			 $workno =($_REQUEST['workno']);
			 $password = ($_REQUEST['password']);



        $query = "SELECT * FROM `login` WHERE name='$name' and workno='$workno' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);


        if($rows==1){
			$_SESSION['name'] = $name;
			$_SESSION['workno'] =$workno;
			$_SESSION['password'] = $password;


			
				setcookie('id', 'cokiesa', time() + (86400 * 2), "/");
			header("Location:Doctor H.php"); // Redirect user to Doctors.php
            }
            

			else{
				echo "<div id='body'><h3><center><font color=red size=8>Details  are incorrect.</font></center></h3><br/><center></div>";
				}
			 }
?>


</div></form>
  </body>
  </html>