<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="Ad" placeholder="Ad">
		<input type="text" name="Soyad" placeholder="Soyad">
		<input type="number" name="Yas" placeholder="Yas">
		<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>
<?php  

include "db.php";

if(isset($_POST["submit"])){
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$yas=$_POST["yas"];

		$sql="INSERT INTO telebe(name,surname,age) VALUES('$ad','$soyad','$yas')";
		$query=mysql_query($db_con,$sql);

		if($query){
			header("Location:index.php");
		}else{
			echo "error";
		}
}
?>