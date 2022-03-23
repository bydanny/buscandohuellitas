<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorLabels extends Model
{
    protected $fillable = ['color_id', 'color_name'];
    use HasFactory;
}
