<?php

namespace App;

enum TaskStatus: string
{
    case PENDING = 'pending';
    case PROGRESS = 'in progress';
    case COMPLETED = 'completed';

    public function label()
    {
        return match ($this) {
            TaskStatus::PENDING => 'Pending',
            TaskStatus::PROGRESS => 'Progress',
            TaskStatus::COMPLETED => 'Completed',
        };
    }
}
