<?php
session_start();

if(isset($_SESSION['count'])){
    $_SESSION['count']+=1;
}
else{
    $_SESSION['count']=1;
}

$msg="You have visited this page ".$_SESSION['count']." times in this session";

?>

<html>
    <head>
        <title> Setting up session </title>
    </head>
    <body>
        <h1>
        <?php echo($msg); ?>
        </h1>
    </body>
</html>


