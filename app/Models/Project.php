<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Ordergroup()
    {
        return $this->hasMany(order_group::class);
    }
}
