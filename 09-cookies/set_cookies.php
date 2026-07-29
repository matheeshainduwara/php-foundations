<?php

setcookie("user","John",time()+(86400*30),"/"); //86400= 1 day
setcookie("email","john@gmil.com",time()+(86400*30),"/");

echo "Cookies are set";

?>