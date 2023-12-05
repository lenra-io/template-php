<?php
error_log(hrtime(true) . " - index.php");
require_once __DIR__ . '/../vendor/autoload.php';
error_log(hrtime(true) . " - after autoload");
\Lenra\App\Runner::run();
error_log(hrtime(true) . " - request handled");
