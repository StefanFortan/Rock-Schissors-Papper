<?php
$computer= rand(1,3);
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
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
        pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<h1><b>Rock Paper Scissors</b></h1>
<P><?php
if ( isset($_REQUEST['name']) ) {
    echo "Welcome: ";
    echo htmlentities($_REQUEST['name']);
    echo "\n";
}
?></P>
<p>
<form method="post">
    <select name="choise">
        <option value="0">--Select --</option>
        <option value="1"> Rock</option>
        <option value="2"> Paper</option>
        <option value="3"> Scissors</option>
    </select>
    <input type="submit" name="play" value="Play">
    <input type="submit" name="logout" value="Log Out">
</form>
<pre>
<?php echo gameResults($computer);?>
</pre>

</body>
</html>

<?php

    function rockPaperScissors($computer)
    {
        if($_POST['choise']==$computer+1 && $_POST['choise']==$computer+2)
            return "You lose";
        if($_POST['choise']==$computer)
            return "Tie";
        return "You win";
    }

    function gameResults($compueter)
    {
        if($_POST['choise']>0)
            return rockPaperScissors($compueter);
        return "select rock, paper or scissors and press start";
    }
function computerWas($computer)
{
    if($computer==1)
        return "computer was Rock";
    if($computer==2)
        return "computer was Paper";
    return "computer was Scissors";
}

?>
