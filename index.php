<?php
include("connect.php");
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM doctors WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        session_start();
        $_SESSION['username'] = $username;
        header("Location: mainpage.php");
        exit();
    } else {

        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Internist Hub</title>
</head>

<body>


    <div class="container" id="container">
        <div class="form-container staff">
            <form >
                <h1>Staff Login</h1>
                <span>or use your email for registeration</span>
                <input type="text" name="username" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input class="button" type="submit" value="Sign In">
            </form>
        </div>
        <div class="form-container doctor">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1>Doctor Login</h1>
                <span>or use your email password</span>
                <input type="text" name="username" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input class="button" type="submit" value="Sign In">
            </form>
            <?php if(isset($error)) echo "<p>$error</p>"; ?>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>INTERNIST HUB</h1>
                    <p>MEDICAL AND DIAGNOSTIC CENTER</p>
                    <button class="hidden" id="doclogin">Doctor Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Doc!</h1>
                    <p>Login with your personal details</p>
                    <button class="hidden" id="stafflogin">Staff Login</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>

?>
