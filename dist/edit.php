<?php
include 'process.php'; // Hubi in xiriirka database-ku halkan ku jiro

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['full_name'];
    $faculty = $_POST['faculty'];
    $phone = $_POST['phone'];

    // Ku soco database-ka si aad u update-garayso
    $sql = "UPDATE student_registration SET full_name='$name', faculty='$faculty', phone='$phone' WHERE student_id=$id";
    
    if ($conn->query($sql)) {
        // MUHIIM: Amarka halkan hoose ayaa dib kuugu soo celinaya view_students.php
        header("Location: view_students.php?msg=success");
        exit(); 
    } else {
        echo "Cilad ayaa dhacday: " . $conn->error;
    }
}
?>