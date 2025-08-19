<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['cname']   = $_POST['cname'];
    $_SESSION['cadd'] = $_POST['cadd'];
    $_SESSION['cno']  = $_POST['cno'];
}
?>

<html>
<body>
<form action="c1form3.php" method="POST">
<h2>Product Information Page 2</h2>
    Enter Product name : <input type="text" name="pname" required><br><br>
    Enter Product QTY : <input type="text" name="pqty" required><br><br>
    Enter Product Rate : <input type="text" name="prate" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
