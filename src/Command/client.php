<?php

namespace App\Command;

require_once '/app/vendor/autoload.php';

$operators = [
    '+' => AddCommand::class,
    '-' => SubtractCommand::class,
    'x' => MultiplyCommand::class,
    '/' => DivideCommand::class,
];

if ($argv[3] && $operators[$argv[3]] !== null) {
    $calculator = new Calculator((float) $argv[1], (float) $argv[2]);

    $invoker = new CommandInvoker(new $operators[$argv[3]]($calculator));

    $output = $invoker->handle();
    echo $output . "\n";
}
