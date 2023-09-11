<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'name', 'barangay', 'contact_number','chairman','name_of_association','number_of_farmers','registered_on_date' ];
}
