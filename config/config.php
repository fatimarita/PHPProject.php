<?php

use Generic\Renderer\TwigRenderer;

return [
    "root-dir" => dirname(__DIR__),
    "database_name" => "bdd_mysql_command",
    "database_user" => "php-user_bdd1",
    "database_pass" => "IxHJAVYJjPkDtNZN",

    TwigRenderer::class => function(){
        return new TwigRenderer(dirname(__DIR__) . '/templates');
    }
];