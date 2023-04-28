<?php
include "config.php";
$id = $_GET['id'];

$qur = "DELETE FROM  note WHERE id = $id";
$result_delet = $conn->query($qur);


header('location: /all-my-projects/to-do-list/index.php');

?>