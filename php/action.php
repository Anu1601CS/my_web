<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "NAME:".$_POST["name"]."<br>";
echo "EMAIL:".$_POST["email"]."<br>";
echo "MESSAGE : ".$_POST["message"];
}

?>
