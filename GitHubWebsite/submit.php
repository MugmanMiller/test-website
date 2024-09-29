<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = htmlspecialchars($_POST['name']);

    $responseMessage = "Hello, ". $name . "! Welcome to our website!";

    echo $responseMessage;
} else{
    echo "Invalid request method.";
}
?>