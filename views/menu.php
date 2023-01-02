<?php
function build($data, $props)
{
    return array(
        "type" => "container",
        "decoration" => array(
            "color" => 0xFFFFFFFF,
            "boxShadow" => array(
                "blurRadius" => 8,
                "color" => 0x1A000000,
                "offset" => array(
                    "dx" => 0,
                    "dy" => 1
                )
            ),
        ),
        "padding" => array(
            "top" => 16,
            "bottom" => 16,
            "left" => 32,
            "right" => 32,
        ),
        "child" => array(
            "type" => "flex",
            "fillParent" => true,
            "mainAxisAlignment" => "spaceBetween",
            "crossAxisAlignment" => "center",
            "padding" => array("right" => 32),
            "children" => [
                array(
                    "type" => "container",
                    "constraints" => array(
                        "minWidth" => 32,
                        "minHeight" => 32,
                        "maxWidth" => 32,
                        "maxHeight" => 32,
                    ),
                    "child" => array(
                        "type" => "image",
                        "src" => "logo.png"
                    ),
                ),
                array(
                    "type" => "flexible",
                    "child" => array(
                        "type" => "container",
                        "child" => array(
                            "type" => "text",
                            "value" => "Hello World",
                            "textAlign" => "center",
                            "style" => array(
                                "fontWeight" => "bold",
                                "fontSize" => 24,
                            ),
                        )
                    )
                )
            ]
        ),
    );
}
