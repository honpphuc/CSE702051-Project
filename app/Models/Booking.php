<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\San;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'history_booking';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function san() {
        return $this->belongsTo(San::class);
    }
}