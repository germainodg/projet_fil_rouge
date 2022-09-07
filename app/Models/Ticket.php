<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prenom',
        'lieu_de_depart',
        'lieu_d_arrive',
        'chaise',
        'bus',
        
    ];
}
