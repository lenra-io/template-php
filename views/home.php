<?php
function build($data, $counter)
{
    return array(
        "type" => "flex",
        "direction" => "vertical",
        "spacing" => 4,
        "mainAxisAlignment" => "spaceEvenly",
        "crossAxisAlignment" => "center",
        "children" => [
            array(
                "type" => "view",
                "name" => "counter",
                "coll" => "counter",
                "query" => array(
                    "user" => "@me"
                ),
                "props" => array("text" => "My personnal counter")
            ),
            array(
                "type" => "view",
                "name" => "counter",
                "coll" => "counter",
                "query" => array(
                    "user" => "global"
                ),
                "props" => array("text" => "The common counter")
            )
        ]
    );
}
