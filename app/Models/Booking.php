<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\San;
=======
>>>>>>> 59a31c259dd5738860a794384b7502bb6d350ba5

class Booking extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'history_booking';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function san() {
        return $this->belongsTo(San::class);
=======
    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'field_id',
        'booking_date',
        'start_time',
        'end_time',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
>>>>>>> 59a31c259dd5738860a794384b7502bb6d350ba5
    }
}