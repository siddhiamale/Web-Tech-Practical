<!-- Write a PHP script to accept username and password. If in the first three chances, username and
password entered is correct then display second form with “Welcome message” otherwise display error
message. [Use Session] -->
<?php
session_start();

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}
?>

<html>
<body>
<h2>Login Page</h2>
<form action="bform2.php" method="POST">
    Enter username : <input type="text" name="uname" required><br><br>
    Enter password : <input type="password" name="upass" required><br><br>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>

