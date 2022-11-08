<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_group extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function order_group()
    {
        return $this->belongsTo(order_group::class);
    }
    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
    public function Project()
    {
        return $this->belongsTo(Project::class);
    }

}
