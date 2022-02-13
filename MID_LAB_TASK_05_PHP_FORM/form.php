<?php
	$uerror ="";

if (isset($_REQUEST['submit'])){
	//print_r($_REQUEST);
	if ($_REQUEST['username']==null){
		$uerror "invalid username";
	}
	else{ 
		echo "ok"}
	

	}
?>
<html>
<head>
	<title>login</title>
</head>

<body>

<form method="POST" action="#">
	<table>
		<tr>
			<td>Username</td>
			<td>
				<input type= "test name="username value="">
			</td>
			<td><?php echo $uerror; ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" value="">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>

</form>

</body>
</html>