<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreedLabels extends Model
{
    protected $fillable = ['breedid','type','breedname'];
    use HasFactory;
}
