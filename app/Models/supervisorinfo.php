<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervisorinfo extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Userinfo()
    {
        return $this->hasOne(Userinfo::class);
    }
}
