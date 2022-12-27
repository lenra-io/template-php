<?php
function build($data, $counter)
{
    return array(
        "type" => "flex",
        "spacing" => 2,
        "mainAxisAlignment" => "spaceEvenly",
        "crossAxisAlignment" => "center",
        "children" => [
            array(
                "type" => "text",
                "value" => $counter["text"] . " : " . $data[0]["count"]
            ),
            array(
                "type" => "button",
                "text" => "+",
                "onPressed" => array(
                    "action" => "increment",
                    "props" => array(
                        "id" => $data[0]["_id"]
                    )
                )
            )
        ]
    );
}
