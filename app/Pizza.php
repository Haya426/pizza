<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
     
    //
    protected $fillable = ["username","pizza_name","toppings","sauce","price"];
}
