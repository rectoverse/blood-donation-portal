
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "miniproject");
$sid=$_GET['id'];
mysqli_query($con,"delete from inputdetails where id='$sid'");
?>
<script>
alert("data deleted successfully");
window.location="admin.php";
</script>