<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Book_Service  extends Model
{
    protected $fillable = [
        'book_id','service_id'
    ];

    protected $table = 'book_service';
    public $timestamps = true;

}