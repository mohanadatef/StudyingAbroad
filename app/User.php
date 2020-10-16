<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    protected $fillable = [
        'name','email','password','statues'
    ];
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user')->withTimestamps('created_at','updated_at');
    }
    public function role_iformation()
    {
        return $this->belongsToMany('App\Role_user');
    }
    protected $table = 'users';
    public $timestamps = true;

}