<?php 
session_start();

$user = $_SESSION["user2"];

if ($user == "") {
    print ("<script> location = 'index.html'</script>");
}

?>