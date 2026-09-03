<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_food_pic extends Model
{
    use HasFactory;

    protected $table = 'eva_food_pic';    

    public static function eva_food_pic(){
      $user_easy_desc = eva_food_pic::get();
      return $user_easy_desc;
    }
}

