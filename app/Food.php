<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable=['name','description','price','category_id','image'];

    //for displaying category

    public function category(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
}
