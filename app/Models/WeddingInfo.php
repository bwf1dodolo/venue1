<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingInfo extends Model
{
    use HasFactory;
     
    public $fillable = [
        'couple_id',
    ];
}
