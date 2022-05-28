<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';
    protected $fillable = [
        'seat_number',
    ];

    public function event() {
        return $this->belongsTo(Events::class, 'event_id', 'event_id');
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
