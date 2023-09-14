<?php

session_start();

session_destroy();
header('Location: /php-crash/12_sessions.php');