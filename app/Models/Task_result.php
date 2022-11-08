<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_result extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Task()
    {
        return $this->belongsTo(Task::class);
    }
}
