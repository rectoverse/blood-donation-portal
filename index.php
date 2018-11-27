<html>
<style>
#background{
	
    padding: 300px;
	background:url("bloodback.png");
	background-repeat: no-repeat;
background-size: 1400px 500px;}

.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  border: 10px solid #f1f1f1;
   top: 15%;
  left: 50%;
  width: 300px;
  transform: translate(-30%, -30%);
  font-size: 40px;
  position: fixed;
  z-index: 2;
  width: 100px;
  padding: 60px;
  text-align: center;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
<?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }

      }
    ?>
</style>
<h2>
<div class="bg-text">
Blood Donation Portal
</div>
</h2>
<body>
<div id="background">
<button type="button" class="button button1" onclick="window.location.href='donate.php'">Donate</button>
<button type="button" class="button button2" onclick="window.location.href='accept.php'">Accept</button>
<div >
<center>
<div class="container">
    <h3 class="text-center">Login</h3>
    
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
  </center>
</div>
</div>

</body>
</html>