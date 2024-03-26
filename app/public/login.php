<?php

$salt = 'XyZzy12*_';
$storedHash = '1a52e17fa899cf40fb04cfc42e6352f1';
if (isset($_POST['cancel']) == 1) {
    header("Location: login.php");//luat din codul lor
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>3d3b608b</title>
    <style>
        body {
            padding-top: 50px;
            margin-left: 50px;
        }
    </style>

</head>
<body>
<h1> Please log in</h1>
<p> <?php echo functionWorkflow($salt, $storedHash); ?></p>
<form method="post">
    <p><b>User Name</b> <input type="text" name="who"></p>
    <p><b>Password</b><input type="text" name="pass"></p>
    <p><input type="submit" value="Log in"> <input type="submit" name="cancel" value="Cancel"></p>
    <p id="hint"> the password is in the comments</p>
    <!-- the password is php123 --!>
</form>
</body>

</html>

<?php


function checkSpaces()
{
    if (isset($_POST['who']) && isset($_POST['pass']))
        return 1;
    return "User name and password are required";
}

function checksPassword($salt, $passwordVerified)
{
    if(hash('md5',$salt.$_POST['pass'])==$passwordVerified)
        header("Location: game.php?name=" . urlencode($_POST['who']));
    return "Incorrect password";

}

function functionWorkflow($salt,$storedHash)
{
    $errors=checkSpaces();
    if(!$errors)
        return $errors;
    return checksPassword($salt, $storedHash);
}



?>