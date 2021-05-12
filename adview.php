<?php
include_once 'dbconnection.php';
$result = mysqli_query($conn,"SELECT * FROM admins");
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Edit Contact</title>
   <link rel="stylesheet" href="assets/css/styling.css">
 </head>
<body>
<h1>Web Admin Details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td><b>Username</b></td>
		<td><b>Email</b></td>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	  </tr>
			<?php
			$i=1;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["username"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
      </tr>
	  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>