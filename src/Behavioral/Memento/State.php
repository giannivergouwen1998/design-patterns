<?php

namespace App\Behavioral\Memento;

enum State: string
{
    case CREATED = 'created';
    case OPENED = 'opened';
    case CLOSED = 'closed';
    case ASSIGNED = 'assigned';
    case DELETED = 'deleted';
}
