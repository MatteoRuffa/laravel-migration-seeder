<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'carriages_number',
        'on_time',
        'canceled',
        'duration_minutes',
        'train_type',
        'ticket_price',
        'train_status',
        // Aggiungere altre colonne se necessario
    ];
}
