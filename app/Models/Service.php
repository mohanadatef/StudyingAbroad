<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Sluggable;
    protected $fillable = [
        'name_ar', 'name_en','order','slug','description_ar','description_en','log'
    ];
    public function faq_service()
    {
        return $this->hasMany('App\Models\Faq_Service');
    }
    public function description_service()
    {
        return $this->hasMany('App\Models\Description_Service');
    }
    public function book()
    {
        return $this->belongsToMany('App\Models\book', 'book_service', 'service_id','book_id')->paginate();
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ]
        ];
    }
    protected $table = 'services';
    public $timestamps = true;

}