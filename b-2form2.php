<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['eno']   = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['eadd']  = $_POST['eadd'];
}
?>

<html>
<body>
<form action="b-2form3.php" method="POST">
<h2>Fill employee details form 2</h2>
    Enter Basic : <input type="text" name="basic" required><br><br>
    Enter DA : <input type="text" name="da" required><br><br>
    Enter HRA : <input type="text" name="hra" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
