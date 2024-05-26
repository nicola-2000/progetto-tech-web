<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'businesses';
    protected $fillable = ['business_id'];
    public $timestamps = false;

    public function services(){
        return $this->hasMany(Service::class);
    }
}
