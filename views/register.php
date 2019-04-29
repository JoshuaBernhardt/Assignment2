<?php



$db = new PDO('mysql:host=selene.hud.ac.uk;dbname=u1753777','u1753777','30mar99');


?>

<html>
<head>
</head>

<body>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form method="post" action="">
                Email:<br>
                <input type="text" name="personemail" required="required">
                <br>
                Name:<br>
                <input type="text" name="personname" required="required">
                <br>
                Password:<br>
                <input type="password" name="custpassword" required="required">
                <br>
                Confirm Password:<br>
                <input type="password" name="custpasswordcheck" required="required">
                <br>
                Phone Number:<br>
                <input type="text" name="personphone" required="required">
                <br><br>
                <button type="submit" name="register-submit">Register</button>
            </form>
        </section>
    </div>
</main>
</body>
</html>

<?php

if (isset($_POST['register-submit'])) {

    $email = $_POST['personemail'];
    $name =  $_POST['personname'];
    $password = $_POST['custpassword'];
    $confirmPassword = $_POST['custpasswordcheck'];
    $number = $_POST['personphone'];

    if (empty($email) || empty($name) || empty($password) || empty($number) || empty($confirmPassword)) {
        header("Location: register.php?error=emptyfields");
        exit();
    }
//check valid name
    else if (!preg_match("/^[a-zA-Z0-9]*$/ ", $name)) {
        header ("Location: register.php?error=invalidName");
        exit();
    }
//check valid email
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: register.php?error=invalidEmail");
        exit();
    }

    else if ($password !== $confirmPassword) {
        header ("Location: register.php?error=passwordCheckFailed");
        exit();
    }

    else {
        $db->exec("INSERT INTO fss_person (personid,personname, personphone, personemail) VALUES ('160','$name','$number','$email')");


        $db->exec("INSERT INTO fss_customer (custid, custregdate,custendreg,custpassword) VALUES ('160','2019-04-29','0000-00-00','$password')");

        echo "<p>Registration Successful</p>";

        $db = null;

        header ("Location: register.php?=success");

        header ("Location: ./login.php");



    }
}

?>


