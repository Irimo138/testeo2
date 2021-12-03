<?php

namespace App\Models;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dni',
        'age',
    ];

    public function flights(){
        return $this->belongsToMany(Flight::class)->withTimestamps()->withPivot('ticket');
    }
}
