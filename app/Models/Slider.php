<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['main_title',
    'star_title',
    'main_title',
    'button1',
    'button2',
    'sub_title',
    'image',
];
}

