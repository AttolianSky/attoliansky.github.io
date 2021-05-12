<!DOCTYPE html>

<html lang="en">
<link href="assets/css/styling.css" rel="stylesheet">

<h1>Admin Login</h1>

<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM admins WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['username'] = $result['username'];
				header("Location: admenu.php");
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>

<form method="post" action="" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In as Admin</button>
</form>

<br><center><a href="adreg.php">Add new admin account</a><br><br>
<a href="adview.php">View Web Admin</a></center>