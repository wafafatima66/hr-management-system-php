<?php
require '../includes/conn.php';

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sqlInsert = "INSERT INTO table_events (title,start,end) VALUES ('".$title."','".$start."','".$end ."')";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>