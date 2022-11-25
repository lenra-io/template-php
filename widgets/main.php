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
                "type" => "widget",
                "name" => "menu",
            ),
            array(
                "type" => "widget",
                "name" => "home"
            )
        ]
    );
}
