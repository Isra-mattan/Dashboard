<?php
// 1. Isku xirka Database-ka
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "studentrg"; // Hubi magaca database-kaaga

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Xiriirku wuu xumaaday: " . $conn->connect_error);
}

// 2. Haddii badhanka la riixo
if (isset($_POST['register'])) {
    $student_id = $_POST['student_id'];
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $phone = $_POST['phone'];
    $parent_name = $_POST['parent_name'];
    $parent_phone = $_POST['parent_phone']; // Waad bedeli kartaa haddii input gaar ah loo sameeyo
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $reg_date = date('Y-m-d'); // Taariikhda maanta

    // 3. SQL Query
    $sql = "INSERT INTO student_registration (student_id, full_name, gender, date_of_birth, place_of_birth, phone, parent_name, parent_phone, faculty, department, year, registration_date) 
            VALUES ('$student_id', '$full_name', '$gender', '$date_of_birth', '$place_of_birth', '$phone', '$parent_name', '$parent_phone', '$faculty', '$department', '$year', '$reg_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Ardayga waa la diiwaangeliyay si guul leh!'); window.location='index.php';</script>";
        header("Location: view_students.php");

    } else {
        echo "Cillad: " . $sql . "<br>" . $conn->error;
    }
}

 
?>