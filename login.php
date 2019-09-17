<?php session_start(); /* Starts the session */

/* Check Login form submitted */
if(isset($_POST['submit'])){

/* Define username and associated password array */
$logins = array('fidelis' => 'login','uname1' => 'passw1','uname2' => 'passw2');


/* Check and assign submitted Username and Password to new variable */
$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$passw = isset($_POST['passw']) ? $_POST['passw'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$uname]) && $logins[$uname] == $passw){
	
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['udata']['uname']=$logins[$uname];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login, Please try again</span>";
}
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

	<meta name="viewport" content="width=device-width,user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container" id="sign_in">
        <div class="p-home">

        <div class="p-contact" id="contacts">
            <h1>User Login</h1>

<form action="login.php" method="post" name="Login_Form">
                <table><?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
        <?php } ?>

                    <tr>
                        <td>
                            <input name="uname" type="text" required id="uname" placeholder="Username">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input name="passw" type="text" required id="passw" placeholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="check" type="checkbox" class="check" checked>
					        <label for="check" id="rem_me"> Remember Me</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="submit" type="submit" id="submit" placeholder="Send" value="Sign In">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="forgotpass"><a href="#">Forgot Password</a></span>
                            <p id="para">New Here? <span class="red"><a href="#register" id="reg" onclick="myFunction()">Register</a></span></p>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        </div>
    </div>


            <div id="register" class="container" style="display: none">
            <div class="p-contact" >
            <h1>User Registration</h1>

            <form>
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Username" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="password" id="pass" name="password" placeholder="Password" minlength="8" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="password" id="pass" name="password" placeholder="Repeat Password" minlength="8" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" placeholder="Email Address" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" placeholder="Sign Up" value="Sign Up">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p id="reg2" style="margin-top: 20px;"><a href="#sign_in" onclick="myFunction()">Already a Member?</a></p>
                        </td>
                    </tr>
                </table>
            </form>
                </div>
            </div>

    
<script>
function myFunction() {
    var w = document.getElementById('reg');
	var x = document.getElementById('register');
	var y = document.getElementById('reg2');
	var z= document.getElementById('sign_in');

    if (x.style.display === "none") {
    x.style.display = "block";
    z.style.display = "none"
  } else if(z.style.display === "none"){
    x.style.display = "none";
    z.style.display = "block";
  }
    else{
       z.style.display = "block";
    }
}
</script>

</body>
</html>
