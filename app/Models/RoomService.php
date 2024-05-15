<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomService extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'service_name', 'service_description'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}