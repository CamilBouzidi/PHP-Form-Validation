<?php
session_start();
if ($_POST['submit']=="How many did I eat to date?"){
    $_SESSION["red"]=$_POST["red"];
    if((!isset($_SESSION["red"]))||(empty($_SESSION["red"]))||(!is_numeric($_SESSION["red"])))
        $_SESSION["red"]=0;
    $_SESSION["redTotal"]+=$_SESSION["red"];
    $_SESSION["yellow"]=$_POST["yellow"];
    if((!isset($_SESSION["yellow"]))||(empty($_SESSION["yellow"]))||(!is_numeric($_SESSION["yellow"])))
        $_SESSION["yellow"]=0;
    $_SESSION["yellowTotal"]+=$_SESSION["yellow"];
    $_SESSION["blue"]=$_POST["blue"];
    if((!isset($_SESSION["blue"]))||(empty($_SESSION["blue"]))||(!is_numeric($_SESSION["blue"])))
        $_SESSION["blue"]=0;
    $_SESSION["blueTotal"]+=$_SESSION["blue"];
    $_SESSION["green"]=$_POST["green"];
    if((!isset($_SESSION["green"]))||(empty($_SESSION["green"]))||(!is_numeric($_SESSION["green"])))
        $_SESSION["green"]=0;
    $_SESSION["greenTotal"]+=$_SESSION["green"];
}
$_SESSION["sTotal"]=$_SESSION["redTotal"]+$_SESSION["yellowTotal"]+$_SESSION["blueTotal"]+$_SESSION["greenTotal"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>form</title>
</head>
<body>
    <h1>Practice Smarties Eating</h1>
    <br />
    <br />
    <h4>Eating a box of Smarties</h4>
    <br />
    <br />
    <p>How many of each color do you want?:</p>

    <form action="" method="post">
        <label>Red:</label>
        <input type="text" name="red" />
        <br />
        <label>Yellow:</label>
        <input type="text" name="yellow" />
        <br />
        <label>Blue:</label>
        <input type="text" name="blue" />
        <br />
        <label>Green:</label>
        <input type="text" name="green" />
        <br />
        <input type="submit" name="submit" value="How many did I eat to date?" />
        <input type="submit" name="submit" value="I am done!!!" />
        <input type="reset" name="reset" value="Clear Choices" />

    </form>
    <p>To date you have eaten: </p>
    <ul>
        <li><?php echo $_SESSION["redTotal"]; ?> red ones</li>
        <li><?php echo $_SESSION["yellowTotal"]; ?> yellow ones</li>
        <li><?php echo $_SESSION["blueTotal"]; ?> blue ones</li>
        <li><?php echo $_SESSION["greenTotal"]; ?> green ones</li>
    </ul>
    <p>For a total of <?php echo $_SESSION["sTotal"]; ?> smarties!</p>

</body>

</html>