<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<!-- <form action="action2.php" method="post"> -->
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit" name='save'>
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
<?php
   if(isset($_POST['save'])){
    echo $_POST['fname'];
   }
?>
</body>
</html>