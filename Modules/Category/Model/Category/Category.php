<?php

namespace Modules\Category\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name','type_id'];

    public function type(){
        return $this->belongsToMany('Modules\Category\Model\Type\Type','type_id');
    }
    protected $hidden = [
       'created_at','updated_at','type_id'
    ];

}
