<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php 
$okay = true;

error_reporting(E_ALL);

if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = false;
}

if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = false;
}

if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = false;
}

if (is_numeric($_POST['year'])) {
	$age = 2026 - $_POST['year']; 
} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = false;
}

if ($_POST['year'] >= 2026) {
	print '<p class="error">Either youu enterd your birth year wrong or you come from the future!</p>';
	$okay = false;
}

if ($_POST['color'] == 'red') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'yellow') {
	$color_type = 'primary'; 
} elseif ($_POST['color'] == 'green') {
	$color_type = 'secondary'; 
} elseif ($_POST['color'] == 'blue') {
	$color_type = 'primary'; 
} elseif ($_POST['color'] == 'pink') {
	$color_type = 'primary'; 
} elseif ($_POST['color'] == 'orange') { 
	$color_type = 'secondary'; 
} else { 
	print '<p class="error">Please select your favorite color.</p>';
	$okay = false;
}

if ($okay) {
	print '<p>You have been successfully registered.</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>your favorite color is a $color_type color.</p>";
}
?>
</body>
</html>