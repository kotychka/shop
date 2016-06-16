<?php

session_start();

setcookie("id", null, -1);

header("Location: http://localhost:8080/");

