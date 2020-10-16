<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home_Slider extends Model
{
    protected $fillable = [
        'title_ar', 'title_en','description_ar','description_en','image','order'
    ];
    protected $table = 'home_slideres';
    public $timestamps = true;

}