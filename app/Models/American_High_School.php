<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  American_High_School extends Model
{
    protected $fillable = [
        'subjects_en', 'subjects_ar','units_en','units_ar','country_id','order','information_en','information_ar'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    protected $table = 'american_high_schools';
    public $timestamps = true;

}