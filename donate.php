<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST["submit"]))
{

$name=$_POST["name"];
$bloodgroup=$_POST["bloodgroup"];
$locality=$_POST["locality"];
$phno=$_POST["phno"];
$name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }




$sql = "INSERT INTO  inputdetails(name,bloodgroup,locality,phno)
VALUES ('$name','$bloodgroup','$locality','$phno')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<style>
#background{
	
    padding: 300px;
	background:url("accept_donate.jpg");
	background-repeat: no-repeat; 
background-size: 1400px 500px;}


</style>
<body>
<div id="background">
<form method ="post">
<div>
<table width="200" height = "200" border ="0" align ="center">

Name : <input type="text" name="name"  required />
<br>
<br>
Blood Group: <select name="bloodgroup">
  <option value="O+VE">O+VE</option>
  <option value="A+VE">A+VE</option>
  <option value="B+VE">B+VE</option>
  <option value="AB+VE">AB+VE</option>
  <option value="B+VE">O-VE</option> 
  <option value="B+VE">A-VE</option>
  <option value="B+VE">B-VE</option>
   <option value="B+VE">AB-VE</option>
</select>
<br>
<br>

Locality:<input type="text"  name="locality" required>
<br><br>
phno:<input type="text"  name="phno" required>
<br><br>

<input type="submit" name="submit"  value="submit">
</div>
</table>
</form>
</div>
</body>
</html>