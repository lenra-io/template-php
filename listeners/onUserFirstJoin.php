<?php
require "./services/api.php";

function run($props, $event, $api)
{
    $counters = executeQuery($api, "counter", array(
        "user" => "@me"
    ));

    if (sizeof($counters) == 0) {
        createDoc($api, "counter", array(
            "count" => 0,
            "user" => "@me"
        ));
    };
}
