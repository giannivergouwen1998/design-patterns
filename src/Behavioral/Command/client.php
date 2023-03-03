<?php

namespace App\Command;

use App\Behavioral\Command\AddCommand;
use App\Behavioral\Command\Calculator;
use App\Behavioral\Command\CommandInvoker;
use App\Behavioral\Command\DivideCommand;
use App\Behavioral\Command\MultiplyCommand;
use App\Behavioral\Command\SubtractCommand;

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
