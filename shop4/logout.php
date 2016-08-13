<?php

// session_start();

unset($_COOKIE['id']);

setcookie('id', null, time()-1);

header("Location: /login.php");