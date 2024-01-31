<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
     protected $fillable = ['date','user_id','desk_number','status'];

     protected $table = 'bookings';
    public $timestamps = true;

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class);
        // Equivalent to belongsTo(User::class, 'user_id')
    }

    // Relationship to Desks
    public function desk() {
        return $this->belongsTo(Desk::class);
    }
}
