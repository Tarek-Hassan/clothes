<?php

namespace Modules\Category\Model\Type;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['gender'];
    protected $table = 'types';

    public function category(){
        return $this->belongsToMany('Modules\Category\Model\Category\Category','type_id');
    }
    protected $hidden = [
        'created_at','updated_at'
     ];
}
