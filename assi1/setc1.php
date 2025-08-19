<?php
session_start();
?>

<html>
<body>
<h2>Customer Information Page 1</h2>
<form action="c1form2.php" method="POST">
    Enter Customer Name : <input type="text" name="cname" required><br><br>
    Enter Customer Address : <input type="text" name="cadd" required><br><br>
    Enter Customer MobNo : <input type="text" name="cno" required><br><br>
    <input type="submit" name="submit" value="Next">
</form>
</body>
</html>
