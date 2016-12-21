<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
  protected $table = 'Organ';

  public function scopeNAME($query,$name){
      if(!empty($name)){
        $query = $query->where('name','like',"%$name%");
      }
      return $query;
    }

}
