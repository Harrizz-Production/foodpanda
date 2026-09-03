<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_food_cat extends Model
{
    use HasFactory;

    protected $table = 'eva_food_cat';    

    public static function eva_food_cat(){
      $user_easy_desc = eva_food_cat::get();
      return $user_easy_desc;
    }
}
