<?php
require_once("config.php");

$id = $_GET['id'];

$sq = "DELETE FROM users WHERE id = $id";
$conn->query($sql);

header("Locarion: admin.php");
exit();
?>
