<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

protected $fillable=['name','image'];
    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }
    public function getProductsNumberAttribute()
    {
        return $this->products ? $this->products->count() : 0;
    }

}
