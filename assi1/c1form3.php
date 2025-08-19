<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['pname'] = $_POST['pname'];
    $_SESSION['pqty']    = $_POST['pqty'];
    $_SESSION['prate']   = $_POST['prate'];
}

$cname   = $_SESSION['cname'];
$cadd = $_SESSION['cadd'];
$cno  = $_SESSION['cno'];
$pname = $_SESSION['pname'];
$pqty    = $_SESSION['pqty'];
$prate  = $_SESSION['prate'];
?>

<html>
<body>
<head>
<style>
body{
    display: flex;
    flex-direction: column; /* stack elements vertically */
    align-items: center;    /* center horizontally */
    text-align: center;
}
table {
    border: 2px solid black;
    border-collapse: collapse;
    text-align: center;
    width: 50%;
}

th, td {
    border: 1px double black;
    padding: 8px;
}
</style>
</head>
<table>
<h2> Bill </h2>
<tr>
<th>Customer name </th>
<th>Customer Address </th>
<th>Customer Mob No </th>
</tr>
<tr>
<td><?php echo $cname ?></td>
<td><?php echo $cadd ?></td>
<td><?php echo $cno ?></td>
</tr>
<tr>
<th>Product name </th>
<th>Product Quantity </th>
<th>Product Rate </th>
</tr>
<tr>
<td><?php echo $pname ?></td>
<td><?php echo $pqty ?></td>
<td><?php echo $prate ?></td>
</tr>
</table>
</body>
</html>
