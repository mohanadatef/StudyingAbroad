<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class National_Curriculum extends Model
{
    protected $fillable = [
        'country_name_en', 'country_name_ar','result','country_id','order','section_en','section_ar'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    protected $table = 'national_curriculums';
    public $timestamps = true;

}