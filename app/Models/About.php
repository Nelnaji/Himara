<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['sub_title', 'body', 'card_bg_img', 'recommended_1', 'recommended_2', 'recommended_3', 'recommended_4','card_title', 'card_body'];
}
