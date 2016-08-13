<?php

session_start();

// unset($_COOKIE["id"]);
setcookie("id", null, -1);

header("Location: http://localhost:8080/");