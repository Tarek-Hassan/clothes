<?php

namespace App;
use QCod\ImageUp\HasImageUploads;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasImageUploads;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','apitoken'
    ];

    protected static $imageFields = [
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at'
    ];

    public function CategoryDetails(){
        return $this->hasMany('Modules\Category\Model\CategoryDetails\CategoryDetails','user_id');
    }
    public function favourate(){
        return $this->belongsToMany('Modules\Category\Entities\FavourateCategory','favourate_categories','user_id','categorydetails_id');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
