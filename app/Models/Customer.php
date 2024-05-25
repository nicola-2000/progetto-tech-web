<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = ['customer_id', 'name', 'surname', 'email', 'fiscal_code', 'password', 'role', 'creation_date'];
    public $timestamps = false;

    
}
