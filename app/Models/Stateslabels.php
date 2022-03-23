<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stateslabels extends Model
{
    protected $fillable = ['state_id', 'state_name'];
    use HasFactory;
}
