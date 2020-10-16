<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description_Service extends Model
{
    protected $fillable = [
        'title_ar', 'title_en','description_ar','description_en','image','order','service_id', 'country_id'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }
    protected $table = 'description_services';
    public $timestamps = true;

}