<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_restaurant_favs_btn extends Model
{
    use HasFactory;

    protected $table = 'eva_restaurant_favs_btn';    

    public static function eva_restaurant_favs_btn(){
      $user_easy_desc = eva_restaurant_favs_btn::get();
      return $user_easy_desc;
    }
}
