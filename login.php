<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up | By Code Info</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
     
      <form action="login.php" method="post">
        <label>First Name</label>
        <input type="text" class="input" name="firstname" required/>
        <label>Last Name</label>
        <input type="text" class="input" name="lastname" required/>
        <label>Email</label>
        <input type="email" class="input" name="email" required/>
        <label>Password</label>
        <input type="password" class="input" name="password" required/>
        <label>Confirm Password</label>
        <input type="password" class="input" name="conpassword"  required/>
        <section>
          <input type="submit"  value="register" class="btn" name="register"> 
        </section>
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.html">Login here</a>
    </p>
  </body>
</html>


<?php
// connection with database
$username ="root";
$password ="";
$server ="localhost";
$database = "paneltechnogy";
$con = mysqli_connect($server, $username,$password);
if(!$con){
    echo "Not Connected to Server";
}

if(!mysql_select_db($con,$database))
{
    echo "Database not selected";
}
// end 


// name
if($_POST['register'])
{

    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Email = $_POST['email'];
    $Pass = $_POST['password'];
    $Cpass = $_POST['conpassword'];
}

// for inserting values from user into database
$sql="INSERT INTO users (firstname	,lastname,email,password,confirmpassword) VALUES('$Fname','$Lname','$Email','$Pass','$Cpass')";
  

// for displaying sucessfull message 
if(!mysqli_query($con,$sql))
    {
        echo'<script language="javascript">';  
        echo'alert("User with same email already exists!")'; 
        echo'</script>';
    }else{
        echo'<script language="javascript">';  
        echo'alert("Registration successfull!")'; 
        echo'</script>';
    }

   // header("refresh:1; url=login.php");

?>