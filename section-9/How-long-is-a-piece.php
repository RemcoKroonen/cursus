<!DOCTYPE html>
<html>
<head>
	<title>How long is a piece of string</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="string">
		<input type="submit" name="submit">
	</form>	

</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$string = $_POST['string'];
$length = strlen($string);

echo "the string is " . $length . " characters long";

};

?>
