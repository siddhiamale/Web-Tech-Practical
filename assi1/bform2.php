<?php
session_start();

// Correct credentials
$correctUser = "admin";
$correctPass = "1234";

// Check if form submitted
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    // Store in session
    $_SESSION['uname'] = $uname;
    $_SESSION['upass'] = $upass;

    // Check credentials
    if ($uname === $correctUser && $upass === $correctPass) {
        $_SESSION['logged_in'] = true;
        echo "<h2>Welcome, $uname!</h2>";
    } else {
        $_SESSION['attempts']++;

        if ($_SESSION['attempts'] >= 3) {
            echo "Too many failed attempts. Access Denied";
        } else {
            echo "Invalid username or password. Attempt ".$_SESSION['attempts']." of 3.";
            echo "<a href='setb1.php'>Try Again</a>";
        }
    }
} else {
    echo "No form submitted.";
}

