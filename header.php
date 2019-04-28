<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Meta Desc">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>

    </title>
</head>

<body>
<header>
    <nav class = "nav-header-main">
        <a href="#"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Films.php">Films</a></li>
            <li><a href="Account.php">Account</a></li>
            <li><a href="Purchases.php">Purchases</a></li>
        </ul>
        <div class="header-login">

            <?php
                if(isset($_SESSION['personid'])) {
                    echo '<a href="logout.php">Logout</a>';
                }
                else {
                    echo '<a href="login.php">Login</a>';
                }
            ?>
            <a href="register.php">Register</a>
</header>
</body>
</html>
