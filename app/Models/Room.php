<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = [
        'room_id',
        'admin_handle'
    ];

    public function player()
    {
        $this->hasMany(Player::class);
    }

    public function administrator()
    {
        $this->belongsTo(Administrator::class);
    }
}
