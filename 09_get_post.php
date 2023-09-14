<?php

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])){
  echo $_POST['name'];
  echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Brad&age=30" method='POST'>Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>