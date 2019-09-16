<?php session_start(); /* Starts the session */

/* Check Login form submitted */
if(isset($_POST['submit'])){

/* Define username and associated password array */
$logins = array('start' => 'ng','uname1' => 'passw1','uname2' => 'passw2');

/* Check and assign submitted Username and Password to new variable */
$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$passw = isset($_POST['passw']) ? $_POST['passw'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$uname]) && $logins[$uname] == $passw){
	
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['udata']['uname']=$logins[$uname];
header("location:index1.html");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login, Please try again</span>";
}
}
?>    
    
<!DOCTYPE html>
<html>
<body>
<form action="login.php" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="uname" type="text" class="Input" id="uname"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="passw" type="password" class="Input" id="passw"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="submit" type="submit" value="Login" class="Button3" id="submit"></td>
    </tr>
  </table>
</form>

    </body>
    </html>