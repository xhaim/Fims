<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricehybrid extends Model
{
    use HasFactory;
    protected $table = 'ricedistributionhybrid';

    protected $fillable = [
        'rsbsa',
        'name_first',
        'name_middle',
        'name_last',
        'barangay',
        'farm_location',
        'birthdate',
        'farm_area',
        'sex',
        'y_n',
        'quantity',
        'date_received',
    ];
}

