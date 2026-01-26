<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$title = $_POST['title'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];
	print "<p>Thank you, $title $first_name $last_name, for your comments.</p>
	<p>You stated that you found this example to be '$response' and added:<br>$comments</p>";
?>
</body>
</html>