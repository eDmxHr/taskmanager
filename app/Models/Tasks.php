<?php

namespace App\Models;

use App\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tasks extends Model
{
    use HasFactory;

    protected $guarded = [];

    //  a task belongs to an user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $casts = [
        'status' => TaskStatus::class,
    ];
}
