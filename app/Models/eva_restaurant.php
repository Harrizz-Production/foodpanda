<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class eva_restaurant extends Model
{
    use HasFactory;

    protected $table = 'eva_restaurant';    

    public static function eva_restaurant(){
      $user_easy_desc = eva_restaurant::get();
      return $user_easy_desc;
    }
}
