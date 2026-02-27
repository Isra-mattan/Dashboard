<?php
include 'process.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM student_registration WHERE student_id = $id";
    
    if($conn->query($sql)) {
        header("Location: view_students.php");
    } else {
        echo "Cillad ayaa dhacday: " . $conn->error;
    }
}
?>