<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq_Service extends Model
{
    protected $fillable = [
        'question_ar', 'question_en','answer_ar', 'answer_en','service_id', 'country_id','order'
    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }
    protected $table = 'faq_services';
    public $timestamps = true;

}