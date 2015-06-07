<?php
    if ($_SERVER["REQUEST METHOD"] == "POST"){
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
        $human = trim(intval($_POST["human"]));
    }

    //VALIDATION

    if ($name == "" || $email == "" || $message = ""){
        echo "ERROR";
    }

    //EMAIL
?>