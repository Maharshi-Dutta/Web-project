<?php
// Initialize session
session_start();

// Database configuration (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "login";

// Connect to the database
$conn = new mysqli($servername, $username, $pass, $dbname);
$pass="";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration form handling
if (isset($_POST['submit']) && $_POST['submit'] === 'Register') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = $_POST['confirm_password'];
$pass=$password;
    // Perform basic validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Please fill in all fields.');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.');</script>";
    } elseif (!preg_match('/^(?=.*[@])(?=.*[A-Z]).{8,}$/', $password)) {
        echo "<script>alert('Password must contain at least 8 characters with @ and one uppercase letter.');</script>";
    } else {
        // Check if the email is already registered
        $check_email_sql = "SELECT * FROM users WHERE email='$email'";
        $check_email_result = $conn->query($check_email_sql);

        if ($check_email_result->num_rows > 0) {
            echo "<script>alert('This email is already registered.');</script>";
        } else {
            // Hash the password before storing it in the database (using BCRYPT algorithm)
            $hashed_password = $password;

            // Insert user data into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Registration successful.');</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
            }
        }
    }
}

// Perform basic validation
// if (isset($_POST['submit']) && $_POST['submit'] === 'login') {
//     $email = trim($_POST['email']);
//     $password = trim($_POST['password']);

//     // Perform basic validation
//     if (empty($email) || empty($password)) {
//         echo "<script>alert('Please fill in all fields.');</script>";
//     } else {
//         // Retrieve user data from the database based on the email
//         $sql = "SELECT * FROM users WHERE email='$email'";
//         $result = $conn->query($sql);

//         if ($result->num_rows == 1) {
//             $user = $result->fetch_assoc();
//             // Verify the password
//             if (password_verify($password, $user['password'])) {
//                 // Password matches, user is logged in
//                 $_SESSION['user_id'] = $user['id'];
//                 $_SESSION['username'] = $user['username'];
//                 echo "<script>alert('Login successful. Welcome, " . $_SESSION['username'] . "!');</script>";
//                 header("Location: choose.php");
//                 exit(); // Terminate the script after redirecting
//             } else {
//                 echo "<script>alert('Invalid email or password.');</script>";
//             }
//         } else {
//             echo "<script>alert('Email not found.');</script>";
//         }
//     }
// }
// Login form handling





// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/admin.js"></script>
    <title>admin page</title>
</head>

<body>
   <div class="bar">
       <div class="container">
           <h1 onclick="hide()">Welcome</h1>
           <div class="content">
               <p class="btn" onclick="login()">Log in</p>
               <p class="btn" onclick="register()">Register</p>
           </div>
       </div>
       <!-- Register form -->
       <div class="form-container" id="register">
           <form action="" method="post">
               <h3>Register now</h3>
               <input type="text" name='username' required placeholder="Enter Your Name">
               <input type="email" name="email" required placeholder="Enter Your Email">
               <input type="password" name='password' required placeholder="Enter Your Password" id="password">
               <input type="password" name='confirm_password' required placeholder="Confirm Your Password">
               <input type="submit" name="submit" value="Register" class="form-btn">
               <p>already have an account? <button class="btn1" onclick="login()"><p>Login now</p></button></p>
           </form>
       </div>
       <!-- Login form -->
       <div class="form-containerlogi" id="login">
           <form action="login.php" method="post">
               <h3>Log in</h3>
               <input type="email" name="email" required placeholder="Enter Your Email">
               <input type="password" name="password" required placeholder="Enter Your Password" id="password">
               <input type="submit" name="submit" value="login" class="form-btn">
               <p>don't have an account? <button class="btn1" onclick="register()"><p>Register now</p></button></p>
           </form>
       </div>
   </div>
</body>
</html>
    


