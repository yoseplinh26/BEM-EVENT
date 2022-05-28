<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey ='event_id';
    protected $fillable = [
        'name', 'description', 'image', 'quota', 'start_date', 'end_date',
    ];


    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'event_id')->whereNull('user_id');
    }

}
