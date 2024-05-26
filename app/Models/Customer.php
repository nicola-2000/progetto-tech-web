<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [
        'first_name', 
        'last_name',
        'email',
        'fiscal_code',
        'password'];

        protected $hidden = [
            'password',
            'remember_token'
        ];

    public $timestamps = false;

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
