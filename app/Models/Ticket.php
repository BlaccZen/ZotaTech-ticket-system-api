<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model

{
    use HasFactory, HasUlids;
    protected $fillable = [
        'event_id',
        'user_id',
        'ticket_type',
        'amount',
        'quantity',
        'available',
    ];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class)->withPivot('quantity');
    }
}
