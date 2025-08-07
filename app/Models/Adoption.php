<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    // app/Models/Adoption.php

protected $fillable = [
    'full_name',
    'email',
    'phone',
    'address',
    'animal_name',
    'animal_price',
];


}
