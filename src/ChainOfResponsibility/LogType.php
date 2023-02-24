<?php

namespace App\ChainOfResponsibility;

enum LogType: string
{
    case INFORMATION = 'information';
    case DEBUG = 'debug';
    case ERROR = 'error';
}
