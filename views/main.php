<?php
function build($data, $props)
{
    return array(
        "type" => "flex",
        "direction" => "vertical",
        "scroll" => true,
        "spacing" => 4,
        "crossAxisAlignment" => "center",
        "children" => [
            array(
                "type" => "view",
                "name" => "menu",
            ),
            array(
                "type" => "view",
                "name" => "home"
            )
        ]
    );
}
