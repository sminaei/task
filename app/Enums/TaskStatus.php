<?php

namespace App\Enums;

enum TaskStatus:string
{
    case Done = "done";
    case Incomplete = "incomplete";
}
