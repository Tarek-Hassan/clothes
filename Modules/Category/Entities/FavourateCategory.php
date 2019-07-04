<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class FavourateCategory extends Model
{
    protected $table="favourate_categories";
    protected $fillable = ['user_id','categorydetails_id'];

    public function categoryDetails(){
        return $this->belongsTo('Modules\Category\Model\CategoryDetails\CategoryDetails','categorydetails_id');
    }
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    protected $hidden = [
        'created_at','updated_at'
     ];

}
