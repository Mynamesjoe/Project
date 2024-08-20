<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient Records</title>
</head>
<body>
    <h1>Patient Records with Diagnosis Information</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Doctor in Charge</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Address</th>
                <th>Blood Type</th>
                <th>Referred By</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Diagnosis</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'view_records.php'; ?>
        </tbody>
    </table>
</body>
</html>
