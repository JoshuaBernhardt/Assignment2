<?php

require '../DAOs/DAO.php';

$dao = new filmDAO();

$row = $dao->getFilm("Bruce Almighty");

echo "<table border=1><tr>";


foreach ($row as $field) echo "<td>$field</td>";

echo "</tr></table>";

/*
$rows = $dao->getFilms();

echo "<table border=1>";

foreach ($rows as $newrow)
{
    echo "<tr>";

    foreach ($newrow as $field) echo "<td>$field</td>";
    echo "</tr>";
}

echo "</table>";*/

$dao->closeDB();

