<?php

namespace App\Behavioral\ChainOfResponsibility;

enum LogType: string
{
    case INFORMATION = 'information';
    case DEBUG = 'debug';
    case ERROR = 'error';
}
