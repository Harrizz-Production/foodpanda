<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_restaurant_rating extends Model
{
    use HasFactory;

    protected $table = 'eva_restaurant_rating';    

    public static function eva_restaurant_rating(){
      $user_easy_desc = eva_restaurant_rating::get();
      return $user_easy_desc;
    }
}
