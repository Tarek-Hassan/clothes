<?php

namespace Modules\CountriesCities\Model\City;


use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $fillable = ['city_name','country_id'];
    public function countries(){
        return $this->belongsTo('Modules\CountriesCities\Model\Country\Country','country_id');
    }
    protected $hidden = [
        'updated_at','created_at','country_id'
    ];
}
