<?php

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])){
  // $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);

  $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  echo $name;
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
<label>Age: </label>
  <input type="text" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>