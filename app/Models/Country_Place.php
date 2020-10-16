<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Country_Place extends Model
{
    use Sluggable;
    protected $fillable = [
        'name_ar', 'name_en','description_ar','description_en','image','order','country_id','slug'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ]
        ];
    }
    protected $table = 'country_places';
    public $timestamps = true;

}