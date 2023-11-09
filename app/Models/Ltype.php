<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ltype extends Model
{
    use HasFactory;
    protected $fillable = [
        'ltype', 'num_leaves'
    ];
}
