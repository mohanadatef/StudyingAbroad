<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model 
{
    protected $fillable = [
        'address_ar','address_en','time_work_ar','time_work_en','latitude','longitude','phone_ar','phone_en','email'
    ];
    protected $table = 'contact_us';
    public $timestamps = true;

}