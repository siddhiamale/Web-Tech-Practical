<?php
// Load XML file into SimpleXML object
$xml = simplexml_load_file("book.xml") or die("Error: Cannot load book.xml");

// Loop through each <book>
foreach ($xml->book as $b) {
    echo "Book No: " . $b->bno . "<br>";
    echo "Book Name: " . $b->bname . "<br>";
    echo "Author: " . $b->author . "<br>";
    echo "Price: " . $b->price . "<br>";
    echo "Year: " . $b->year . "<br>";
    echo "<hr>";
}
?>

