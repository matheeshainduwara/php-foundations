<?php
session_start();

if(isset($_SESSION['count'])){
    $_SESSION['count']+=1;
}
else{
    $_SESSION['count']=1;
}

echo "You have visited this page ".$_SESSION['count']." times in this session.<br>";

if($_SESSION['count']>=5){
    echo "You have visited this page 5 times so that this session variable will be setted to zero.<br>";
  
    echo "Now the session will be destroyed.<br>";
session_destroy();
}