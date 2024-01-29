<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
    ];

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class);
        // Equivalent to belongsTo(User::class, 'user_id')
    }

    // Relationship to User
    public function desk() {
        return $this->belongsTo(Desk::class);
    }
}
