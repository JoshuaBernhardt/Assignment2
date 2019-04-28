<html>
<head></head>

<body>

<table>
    <tbody><tr><td>Title</td><td>Description</td>></tr></tbody>
    <?php

    foreach ($films as $title=>$film)
    {
        echo '<tr><td><a href="index.php?film='.$film->title.'">'.$film->title.'</a></td>
        <td>'.$film->description.'</td></tr>';
    }
    ?>
</table>
</body>
</html>
