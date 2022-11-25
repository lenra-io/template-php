<?php

$manifest = array(
  "widgets" => array(
    "main" => "./widgets/main.php",
    "userData" => "./widgets/userData.php",
    "counter" => "./widgets/counter.php",
    "home" => "./widgets/home.php",
    "menu" => "./widgets/menu.php",
  ),
  "listeners" => array(
    "increment" => "./listeners/increment.php",
    "onEnvStart" => "./listeners/onEnvStart.php",
    "onSessionStart" => "./listeners/onSessionStart.php",
    "onUserFirstJoin" => "./listeners/onUserFirstJoin.php"
  ),
  "rootWidget" => "main"
);
