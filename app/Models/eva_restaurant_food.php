<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_restaurant_food extends Model
{
    use HasFactory;

    protected $table = 'eva_restaurant_food';    

    public static function eva_restaurant_food(){
      $user_easy_desc = eva_restaurant_food::get();
      return $user_easy_desc;
    }
}
