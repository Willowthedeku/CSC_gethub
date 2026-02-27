<?php
if (isset($_POST['font_size'], $_POST['font_color'])) {
	
	setcookie('font_size', $_POST['font_size']);
	
	setcookie('font_color', $_POST['font_color']);
	
	$msg = '<p>Your settings have been entered!
	Now see them <a href="view_setting.php">in action<a/>.</p>'; }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customize your settings</title>
</head>
<body>
<?php
if (isset($msg)) {
	print $msg;
}
?>

<P>use this form to set your preferences:</p>
<form action="customize.php method="post">
	<select name="font_size">
	<option value="">Font Size</option>
	<option value="xx-small">xx-small</option>
	<option value="x-small">x-small</option>
	<option value="small">small</option>
	<option value="medium">medium</option>
	<option value="large">large</option>
	<option value="x-large">x-large</option>
	<option value="xx-large">xx-large</option>
	</select>
	<select name="font_color">
	<option value="">Font Color</option>
	<option value="999">gray</option>
	<option value="0c0">green</option>
	<option value="00f">blue</option>
	<option value="c00">red</option>
	<option value="000">black</option>
	</select>
	<input type="submit" name="submit" value="set my preferences">
</form>

</body>
</html>