<HTMLTYPE 5>
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
          <title> SIGN UP
          </title>
    <form method='post'>
           <div class="login-box">
           <img src="medic1.png" class="uganda">
  <center><br>
     
       name: <input type="text" name="name" placeholder="Enter name" required><br>
      email:<input type="text" name="email" placeholder="Enter email" required><br>
      password: <input type="password" name=" password" placeholder=" Password" required><br>
       workno:  <input type="text" name="workno" placeholder="Enter workno" required><br>
         <button name="sub">save</button><br><br>

            <a href="login.php">LOGIN</a><br><br>
          <a href="replace password.php">Forget Password</a><br><br>
          <a href="contact us l.php">CONTACT US</a><br><br> </center>

                 <center>Powered By TRI-HUB TECHNOLOGY</center>


   <?php
 $con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
   
  if(isset($_POST['sub'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $workno=$_POST['workno'];
 
 
  $qry="insert into login values('$name','$email','$password','$workno')";
 
 if($res=mysqli_query($con,$qry)){
if (file_exists('$email', '$workno'))
 {    
        echo 'file found!';
 } 

 
    echo"<script>alert('Records successfully saved')</script>"; header("Location: index.php");
  }else{
  echo"<center><font color=red size=15>Data Has not been saved</font></center>";}
  
  }
?>



