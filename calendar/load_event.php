<?php
    require '../includes/conn.php';

    $json = array();
    $sqlQuery = "SELECT * FROM table_events ORDER BY sno";

    $result = mysqli_query($conn, $sqlQuery);
    $alldata = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        array_push($alldata, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($alldata);
?>