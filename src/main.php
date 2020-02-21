<?php

require("../vendor/autoload.php");
require("./logging.php");

session_start();

// select language in lang.php; saved in object $userLang of class UserLang
require("langSelect.php");

$title = "Familie feest";

require("header.php");

require("content.php");

require("footer.php");

?>