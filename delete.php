<?php  
include "db.php";

$sql = "DELETE FROM telebe WHERE id=".$_GET["id"];
$query= mysqli_query($db_con,$sql);
if($query){
	header("Location:index.php");
}else{
	echo "Data silinmedi";
}
?>