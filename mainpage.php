<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mpStyles.css">
    <title>Patient Information Form</title>
</head>
<body>
    
    <div class="header">
        <h1>Patient Information Form</h1>
    </div>

    <form action="submit.php" method="post">

        <div class="container">
            <div class="left-side">

                <label for="name">Patient Name:</label><br>
                <input type="text" id="name" name="name" required><br>

                <label for="age">Patient Age:</label><br>
                <input type="number" id="age" name="age" required><br>

                <label for="gender">Patient Gender:</label><br>
                <input type="text" id="gender" name="gender" required><br>

                <label for="birthdate">Patient Birthdate:</label><br>
                <input type="date" id="birthdate" name="birthdate" required><br>

                <label for="address">Patient Address:</label><br>
                <textarea id="address" name="address" required></textarea><br>

                <label for="blood_type">Patient Blood Type:</label><br>
                <input type="text" id="blood_type" name="blood_type" required><br>

                <label for="referred_by">Referred By:</label><br>
                <input type="text" id="referred_by" name="referred_by"><br>

                <label for="mobile_number">Mobile Number:</label><br>
                <input type="tel" id="mobile_number" name="mobile_number" required><br>

                <label for="email">Active Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                
                <fieldset>
                    <legend>Doctor in Charge:</legend>
                    <label><input type="radio" name="doctor_in_charge" value="Dr. Bruno" required> Dr. Bruno</label><br>
                    <label><input type="radio" name="doctor_in_charge" value="Dr. Pajares" required> Dr. Pajares</label><br>
                </fieldset>

                <input type="hidden" name="doctor_id" value="<?php echo $_SESSION['doctor_id']; ?>">

            </div>
            <div class="right-side">

                <label for="diagnosis">Diagnosis:</label><br>
                <textarea class="diagnosis" name="diagnosis" required></textarea><br>
                <input type="submit" class="submit" value="Submit"> 
            </div>
        
        </div>
        
    </form>

    <form action="patients.php" method="post">
        <input type="submit" class="view" value="View Patients">
    </form>

</body>
</html>
