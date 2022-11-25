<?php
require "./services/api.php";

function run($props, $event, $api)
{
    $res = executeQuery($api, "counter", array(
        "user" => "@me"
    ));

    $counters = json_decode($res->getBody());

    if (sizeof($counters) == 0) {
        createDoc($api, "counter", array(
            "count" => 0,
            "user" => "@me"
        ));
    };
}
