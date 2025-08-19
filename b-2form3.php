<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['basic'] = $_POST['basic'];
    $_SESSION['da']    = $_POST['da'];
    $_SESSION['hra']   = $_POST['hra'];
}

$eno   = $_SESSION['eno'];
$ename = $_SESSION['ename'];
$eadd  = $_SESSION['eadd'];
$basic = $_SESSION['basic'];
$da    = $_SESSION['da'];
$hra   = $_SESSION['hra'];
?>

<html>
<body>
<h2> Employee Details </h2>
<p>Emaployee no : <?php echo $eno ?> </p>
<p>Emaployee name : <?php echo $ename ?> </p>
<p>Emaployee address : <?php echo $eadd ?> </p>
<p>Emaployee Basic : <?php echo $basic ?> </p>
<p>Emaployee DA : <?php echo $da ?> </p>
<p>Emaployee HRA : <?php echo $hra ?> </p>

</body>
</html>
