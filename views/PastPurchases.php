<?php

include ("./DAOs/customerDAO.php");


$customerDAO = new customerDAO();


$purchases = $customerDAO->pastPurchases();

echo "<table border=1><tr>";


echo "<table border=1>";

echo $purchases;

foreach ($purchases as $newrow)
{
    echo "<tr>";

    foreach ($newrow as $field) echo "<td>$field</td>";
    echo "</tr>";
}

echo "</table>";

$customerDAO->closeDB();