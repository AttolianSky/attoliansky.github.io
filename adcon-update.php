<?php
include_once 'dbconnection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE contact set value='" . $_POST['value'] . "', hname='" . $_POST['hname'] . "', state='" . $_POST['state'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM contact WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="assets/css/styling.css">
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>


<div class="form-element">
	<h3>ID: <?php echo $row['id'];?></h3>
	<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
	<br><br>
	<h3>Hospital Number:</h3>
	<input type="text" name="value" class="txtField" value="<?php echo $row['value']; ?>">
	<br><br>
	<h3>Hospital Name:</h3>
	<input type="text" name="hname" class="txtField" value="<?php echo $row['hname']; ?>">
	<br><br>
	<h3>State:</h3>
	<input type="text" name="state" class="txtField" value="<?php echo $row['state']; ?>">
	<br><br>
	<button input type="submit" name="submit" value="Submit" <a href="adcon-update.php?id=<?php echo $row["id"]; ?>">Update</a></button>
</div>

</form>
</body>
</html>