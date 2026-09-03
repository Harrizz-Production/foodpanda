<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_restaurant_review extends Model
{
    use HasFactory;

    protected $table = 'eva_restaurant_review';    

    public static function eva_restaurant_review(){
      $user_easy_desc = eva_restaurant_review::get();
      return $user_easy_desc;
    }
}
