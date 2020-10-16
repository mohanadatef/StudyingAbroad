<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = [
        'title_ar', 'title_en','description_ar','description_en','order','country_id'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    protected $table = 'requirements';
    public $timestamps = true;

}