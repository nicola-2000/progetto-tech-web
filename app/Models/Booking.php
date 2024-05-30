<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    public $timestamps = false;

    /* Questo metodo è un relazione tra il booking (effettuato da) e un customer
       Uno a uno o uno a molti  */
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}