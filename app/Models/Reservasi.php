<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'room_type',
        'firstname',
        'lastname',
        'email',
        'phone',
        'guest',
        'booking',
        'checkin',
        'checkout',
    ];
}
