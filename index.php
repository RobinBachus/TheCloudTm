<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  Email: <input type="text" name="email">
  <input type="submit">
</form>

<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "Name: ".$name;
    echo "<br>";
    echo "Email: ".$email;
  }
}
?>

</body>
</html>