
<?php

//let's start the session
session_start();

//now, let's register our session variables
session_register('name');
session_register('email_address');

//finally, let's store our posted values in the session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['email_address'] = $_POST['email_address'];

?>


<form method="post" action="form3.php">
<input type="radio" name="membership_type" value="Free">
<input type="radio" name="membership_type" value="Normal">
<input type="radio" name="membership_type" value="Deluxe">
<input type="checkbox" name="terms_and_conditions">
<input type="submit" value="Go To Step 3">
</form>