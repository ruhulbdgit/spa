/*This is user add view
first name ,last name , email , password  , regiser . 
*/ 
<?php
// define variables and set to empty values
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Frist Name: <input type="text" name="name">
  <br><br>
 Last Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
   Password: <input type="specialchars" name="password">
  <br><br>
 <input type="submit" name="submit" value="Registerd">  
</form>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>

