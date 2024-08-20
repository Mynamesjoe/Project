<?php
include("connect.php");
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT patients.Patient_id, patients.doc_in_charge, patients.name, patients.age, patients.gender, patients.birthdate, patients.address, patients.blood_type, patients.referred_by, patients.m_number, patients.email, diagnosis.diag_Treat
        FROM patients
        LEFT JOIN diagnosis ON patients.diagnosis_id = diagnosis.diagnosis_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Patient_id"] . "</td>";
        echo "<td>" . $row["doc_in_charge"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["birthdate"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["blood_type"] . "</td>";
        echo "<td>" . $row["referred_by"] . "</td>";
        echo "<td>" . $row["m_number"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["diag_Treat"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>