<?php

namespace App\Models;

use App\Models\Icon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','icon_id'];

    public function icon(){
        return $this->belongsTo(Icon::class);
    }
}
