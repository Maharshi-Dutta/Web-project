




<?php


session_start();

// Database configuration (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $pass, $dbname);
$pass="";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email =  trim($_POST['email']);
    $password =  trim($_POST['password']);
    $hashedPassword = $password;

   
    $sql = "SELECT id, username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    print($email);
    print($hashedPassword);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $em=$user["email"];
        $pass=$user["password"];
        print($em);
        print($pass);
        if (password_verify($hashedPassword, $user["password"])) {
            echo "Login successful!";
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}
?>
<!-- if (isset($_POST['submit']) && $_POST['submit'] === 'login') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Perform basic validation
    if (empty($email) || empty($password)) {
        $loginError = 'Please fill in all fields.';
    } else {
        // Retrieve user data from the database based on the email
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Password matches, user is logged in
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $loginSuccess = 'Login successful. Welcome, ' . $_SESSION['username'] . '!';
            } else {
                $loginError = 'Invalid email or password.';
            }
        } else {
            $loginError = 'Invalid email or password.';
        }
    }
} -->