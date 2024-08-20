<?php
session_start();
include("connect.php");
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$blood_type = $_POST['blood_type'];
$referred_by = $_POST['referred_by'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$diagnosis_name = $_POST['diagnosis'];
$doctor_in_charge = $_POST['doctor_in_charge']; 


$sql_diagnosis = "INSERT INTO diagnosis (diag_Treat) VALUES ('$diagnosis_name')";
if ($conn->query($sql_diagnosis) === TRUE) {
    $diagnosis_id = $conn->insert_id;

    $sql_patient = "INSERT INTO patients (name, age, gender, birthdate, address, blood_type, referred_by, m_number, email, diagnosis_id, doc_in_charge)
                    VALUES ('$name', '$age', '$gender', '$birthdate', '$address', '$blood_type', '$referred_by', '$mobile_number', '$email', '$diagnosis_id', '$doctor_in_charge')";

    if ($conn->query($sql_patient) === TRUE) {
        
    } else {
        echo "Error: " . $sql_patient . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql_diagnosis . "<br>" . $conn->error;
}

$conn->close();
?>