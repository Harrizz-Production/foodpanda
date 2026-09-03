<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_food_description extends Model
{
    use HasFactory;

    protected $table = 'eva_food_description';    

    public static function eva_food_description(){
      $user_easy_desc = eva_food_description::get();
      return $user_easy_desc;
    }
}

