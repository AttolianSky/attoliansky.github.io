<?php
include_once 'dbconnection.php';
$result = mysqli_query($conn,"SELECT * FROM contact");
//header ("Location: OSCC/admin_access");
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Edit Contact</title>
   <link rel="stylesheet" href="assets/css/styling.css">
 </head>
<body>
<h1>Edit Contact Details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td><b>ID</b></td>
		<td><b>State</b></td>
		<td><b>Hospital Number</b></td>
		<td><b>Hospital Name</b></td>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["state"]; ?></td>
		<td><?php echo $row["value"]; ?></td>
		<td><?php echo $row["hname"]; ?></td>
		<td><a href="adcon-update.php?id=<?php echo $row["id"]; ?>"><div class="update">Update</div></a></td>
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