<?php
require "./services/api.php";

function run($props, $event, $api)
{
    $counter = json_decode(getDoc($api, "counter", $props["id"])->getBody(), true);
    $counter["count"] += 1;
    updateDoc($api, "counter", $counter);
}
