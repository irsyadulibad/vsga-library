<?php

require_once __DIR__ . '/system/app.php';

unset($_SESSION['user']);
header("Location: login.php");
