<?php

namespace Modules\Category\Model\Category;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    protected $fillable = ['category_name','type_id','category_id'];
    protected $table='categorytype';

    public function type(){
        return $this->belongsToMany('Modules\Category\Model\Type\Type','categorytype');
    }


}
