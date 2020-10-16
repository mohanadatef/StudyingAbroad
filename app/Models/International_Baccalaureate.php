<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class International_Baccalaureate extends Model
{
    protected $fillable = [
        'description_ar','description_en','country_id'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    protected $table = 'international_baccalaureates';
    public $timestamps = true;

}