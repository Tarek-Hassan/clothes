<?php

namespace Modules\Category\Model\CategoryDetails;

use Illuminate\Database\Eloquent\Model;


class CategoryDetails extends Model
{

    protected $fillable = ['title','description','color','salary','discount','quantity','user_id','type_id','category_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function size(){
        return $this->hasMany('Modules\Category\Entities\SizeCategory','categorydetails_id');
    }

    public function image(){
        return $this->hasMany('Modules\Category\Entities\image','categorydetails_id');
    }
    public function type(){
        return $this->belongsTo('Modules\Category\Model\Type\Type','type_id');
    }
    public function category(){
        return $this->belongsTo('Modules\Category\Model\Category\Category','category_id');
    }
    protected $hidden = [
        'created_at','updated_at','user_id','type_id','category_id'
     ];
}

