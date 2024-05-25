<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessService extends Model
{
    use HasFactory;
    protected $table = 'business_services';

    protected $fillable = ['service_id','description'];
    public $timestamps = false;
}
