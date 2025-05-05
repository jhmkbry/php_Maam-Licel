

<?php
$id = $_GET["id"] ?? null;

 
($id === null) && header("location: index.php") && exit;

$connection = new mysqli("localhost", "root", "", "shop") or die("Connection failed: " . mysqli_connect_error());

 



$stmt = $connection->prepare("DELETE FROM clients WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
$connection->close();
header("location: index.php");
exit;
?>
