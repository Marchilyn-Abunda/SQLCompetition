<?php
include 'connection.php';

$name = $_POST['name'];
$event = $_POST['event'];

$sql = "INSERT INTO tbl_facilitator (facilitator_id,fullname, assigned_event_id) VALUES (null,'$name', '$event')";

if (mysqli_query($conn, $sql)) {
    echo "Facilitator successfully added!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
