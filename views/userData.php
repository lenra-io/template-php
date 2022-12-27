<?php
function build($data, $props)
{
    return array(
        "type" => "text",
        "value" => json_encode($data[0]),
    );
}
