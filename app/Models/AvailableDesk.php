<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableDesk extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'desk_id',
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('date', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship to Desks
    public function desk() {
        return $this->belongsTo(Desk::class);
    }
}
