<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class SizeCategory extends Model
{
    protected $fillable = ['size','categorydetails_id'];
    protected $table="size__categories";
    public function categoryDetails(){
        return $this->belongsTo('Modules\Category\Model\CategoryDetails\CategoryDetails','categorydetails_id');
    }
    protected $hidden = [
        'created_at','updated_at'
     ];

}
