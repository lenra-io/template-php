<?php
require "./services/api.php";

function run($props, $event, $api)
{
    $counter = getDoc($api, "counter", $props->id)->getBody();
    $counter->count += 1;
    updateDoc($api, "counter", $counter);
}
