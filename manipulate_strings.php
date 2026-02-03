<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>test</title>
</head>
<body>
<?php

$n1 = ("John doe");
$n2 = ("WillowTheDeku");

print "<p>$n1</p>";
print "<p>$n2</p>";

$word_count = (strlen($n2) - strlen($n1)); //compare letter count

print "<p>String 1 has $word_count less letters than String 2</p>"; 

$break1 = Strtok($n1, " "); //Find a break in the string.
$break2 = Strtok($n2, " ");

$word_count2 = (strlen($break2) - strlen($break1));

print "<p>$break1</p>";
print "<p>$break2</p>";

print "<p>String 1 has $word_count2 less letters than String 2</p>"; 

?>
</body>
</html>