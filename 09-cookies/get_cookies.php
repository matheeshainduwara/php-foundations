<?php

setcookie("user","John",time()+(86400*30),"/"); //86400= 1 day
setcookie("email","john@gmil.com",time()+(86400*30),"/");

echo "Cookies are set<br>";

if(isset($_COOKIE["user"])){
    echo "User is ".$_COOKIE["user"]."<Br>";
}
else{
    echo "User cookie is not set.<br>";
}

if(isset($_COOKIE["email"])){
    echo "Email is ".$_COOKIE["email"]."<br>";
}
else{
    echo "Email cookie is not set.<br>";
}

?>