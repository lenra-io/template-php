<?php
require "./services/api.php";

function run($props, $event, $api)
{
    $counters = executeQuery($api, "counter", array(
        "user" => "global"
    ));

    if (sizeof($counters) == 0) {
        createDoc($api, "counter", array(
            "count" => 0,
            "user" => "global"
        ));
    };
}
