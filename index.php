<?php 
if (isset($_POST["submit"])) {
$username = $_POST["username"];
$password = $_POST["password"];
$message = "Vormis esines vigu!"; 
	echo "<h2>{$message}</h2>";
} else {
	$message = "Palun logi sisse!";
	echo "<h2>{$message}</h2>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>2-periood-4-praktikum</title>
</head>
<body>

<form method="post"> 
<span>Kasutajanimi: </span><input type="text" name="username" 
value="
<?php if (isset($_POST["username"])) {
echo $username;}?>">
<br>

<span>Parool: </span><input type="password" name="password">
<br>
<input type="submit" value="Saada" name="submit">
</form>

<pre>
	<?php print_r($_POST);?>
</pre>

</body>
</html>