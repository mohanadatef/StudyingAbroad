<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description_Program extends Model
{
    protected $fillable = [
        'title_ar', 'title_en','description_ar','description_en','image','order','program_id','country_id','log'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function program()
    {
        return $this->belongsTo('App\Models\Program','program_id');
    }
    protected $table = 'description_programs';
    public $timestamps = true;

}