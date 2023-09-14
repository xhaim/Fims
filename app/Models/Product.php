<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'association_name', 'barangay', 'contact_number', 'chairman', 'number_of_farmers', 'registered_in_date',
    ];
}
