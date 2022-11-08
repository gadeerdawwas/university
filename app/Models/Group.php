<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Project()
    {
        return $this->hasMany(Project::class);
    }
    public function order_group()
    {
        return $this->hasMany(order_group::class);
    }

    public function scopeActive($query)
    {

        return $query->where('status', '=', 1);
    }
}
