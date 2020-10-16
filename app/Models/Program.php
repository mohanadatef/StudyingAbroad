<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use Sluggable;
    protected $fillable = [
        'name_ar', 'name_en','image','order','slug','description_ar','description_en'
    ];
    public function description_program()
    {
        return $this->hasMany('App\Models\Description_Program');
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
    protected $table = 'programs';
    public $timestamps = true;

}