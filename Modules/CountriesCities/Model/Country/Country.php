<?php

namespace Modules\CountriesCities\Model\Country;


use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = ['country_name'];

   
    protected $hidden = [
        'updated_at','created_at'
    ];

}
