<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use Sluggable;
    protected $fillable = [
        'name_ar', 'name_en','about_country_ar','about_country_en','image','loge','order'
        , 'residence_country','residence_usd','transportation_country','transportation_usd','food_country',
        'food_usd','cinema_country','cinema_usd','net_country','net_usd','clothing_country','clothing_usd','slug'
    ];
    public function country_place()
    {
        return $this->hasMany('App\Models\Country_Place');
    }
    public function faq_service()
    {
        return $this->hasMany('App\Models\Faq_Service');
    }
    public function description_service()
    {
        return $this->hasMany('App\Models\Description_Service');
    }
    public function requirement()
    {
        return $this->belongsTo('App\Models\Requirement');
    }
    public function description_program()
    {
        return $this->hasMany('App\Models\Description_Program');
    }
    public function national_curriculum()
    {
        return $this->hasMany('App\Models\National_Curriculum');
    }
    public function american_high_school()
    {
        return $this->hasMany('App\Models\American_High_School');
    }
    public function gce()
    {
        return $this->hasMany('App\Models\Gce');
    }
    public function international_baccalaureate()
    {
        return $this->hasMany('App\Models\International_Baccalaureate');
    }
    public function book()
    {
        return $this->hasMany('App\Models\Book');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ]
        ];
    }
    protected $table = 'countries';
    public $timestamps = true;

}