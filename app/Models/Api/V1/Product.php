<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model ;
class Product extends Model
{
    use HasFactory;

//    protected $connection = 'lifeweb';
    protected $collection = 'products';
    protected $guarded=[];
    protected $hidden=['updated_at','created_at'];
}
