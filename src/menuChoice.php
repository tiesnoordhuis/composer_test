<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    require("menuForm.php");
} else {
    if (isset($_POST["userEmail"])) {
        echo("dankje");
    } else if (isset($_POST["menuChoice"])) {
        require("emailForm.php");
    }
}



?>