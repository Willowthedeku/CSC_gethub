<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type= "text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php 
$okay = true;

error_reporting(E_ALL);

if (empty($_post['email'])) { 
	print '<p class ="error">Please enter your email address.</p>';
	$okay = false;
}

if (empty($_post['password'])) { 
	print '<p class ="error">Please enter your password.</p>';
	$okay = false;
}
if ($okay) {
	print '<p>You have been successfully registered.</p>';
}
?>
</body>
</html>