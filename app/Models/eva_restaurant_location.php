<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_restaurant_location extends Model
{
    use HasFactory;

    protected $table = 'eva_restaurant_location';    

    public static function eva_restaurant_location(){
      $user_easy_desc = eva_restaurant_location::get();
      return $user_easy_desc;
    }
}
