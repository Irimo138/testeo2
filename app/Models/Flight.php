<?php

namespace App\Models;

use App\Models\Passeneger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'origen',
        'destino',
    ];
    
    public function passengers(){
        return $this->belongsToMany(Passeneger::class)->withTimestamps()->withPivot('ticket');
    }
}