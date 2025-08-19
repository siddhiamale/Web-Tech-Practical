<html>
<body>
<form action="setb3.php" method="GET">
Enter 1st no<input type="text" name="a"><br><br>
Enter 2nd no<input type="text" name="b"><br><br>

Select Operation: 
<select name="op">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
</select><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

<?php
$a=$_GET['a'];
$b=$_GET['b'];
$op=$_GET['op'];
//$c=$a+$b;


    switch ($op) {
        case "add":
            $result = $a + $b;
            $operation = "Addition";
            break;
        case "sub":
            $result = $a - $b;
            $operation = "Subtraction";
            break;
        case "mul":
            $result = $a * $b;
            $operation = "Multiplication";
            break;
          case "div":
            $result= $a / $b;
            $operation = "Division";
            break;
        default:
            $result = "Invalid Operation";
            $operation = "";
           
    }

    echo "<h2>Result</h2>";
    echo $operation." of ".$a." and ".$b." is: ".$result;
?>
