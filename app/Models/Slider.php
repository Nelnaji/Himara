<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['main_title',
    'star_title',
    'main_subtitle',
    'button1',
    'button2',
    'slider1_title',
    'slider1_img',
    'slider1_subtitle',
    'slider2_title',
    'slider2_img',
    'slider2_subtitle',
    'slider3_title',
    'slider3_img',
    'slider3_subtitle'];
}

