<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
       'full_name','phone','email','english_level','country_level','country_id','program_id'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function program()
    {
        return $this->belongsTo('App\Models\Program','program_id');
    }
    public function service()
    {
        return $this->belongsToMany(Service::class, 'book_service')->withTimestamps('created_at','updated_at');
    }
    protected $table = 'books';
    public $timestamps = true;

}