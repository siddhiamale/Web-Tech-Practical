<?php
session_start();
?>

<html>
<body>
<h2>Fill employee details form 1</h2>
<form action="b-2form2.php" method="POST">
    Enter Eno : <input type="text" name="eno" required><br><br>
    Enter Ename : <input type="text" name="ename" required><br><br>
    Enter Address : <input type="password" name="eadd" required><br><br>
    <input type="submit" name="submit" value="Next">
</form>
</body>
</html>
