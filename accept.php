<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "miniproject");     

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
#background{
	
    padding: 300px;
	background:url("accept_donate.jpg");
	background-repeat: no-repeat; 
background-size: 1400px 500px;}

}

</style>
<body>
<div id="background">

<form action="" method="post">
<table width="300" height = "300" border ="0" align ="center">

locality : <input type="text" name="locality"  required />
<br>
<br>
 bloodgroup: <input type="text" name="bloodgroup"  required />
<br>
<br>
<input type="submit" name="search"  value="search">

<table width="724" border="0">
  <tr>
    <th width="74" height="57" scope="col"><div align="left">name</div></th>
    <th width="160" scope="col"><div align="left">bloodgroup</div></th>
    <th width="135" scope="col"><div align="left">locality</div></th>
    <th width="72" scope="col"><div align="left">phno</div></th>
    <th width="70" scope="col"><div align="left"></div></th>
  </tr>
  <?php
  if (isset($_POST['search']))
{
  $bloodgroup=$_POST['bloodgroup'];
  $locality=$_POST['locality'];
  $res=mysqli_query($con,"select * from inputdetails WHERE bloodgroup='$bloodgroup' and locality='$locality'");//select all details of one person from table reg
  if(mysqli_num_rows($res)>0)//if id of the person is >0(id starts from 0) then select all attributes of that id
  {
	  while($row=mysqli_fetch_array($res))
	  {
		  
  ?>
</div>
<tr>
    <td height="49"><?php echo $row['name']; ?>&nbsp;</td>
    <td><?php echo $row['bloodgroup']; ?>&nbsp;</td>
    <td><?php echo $row['locality']; ?>&nbsp;</td>
	<td><?php  echo $row['phno']; ?>&nbsp;</td>
        
      </tr>
  <?php
	  }
  }
}
  ?>
</table>
</form>
</body>
</html>

