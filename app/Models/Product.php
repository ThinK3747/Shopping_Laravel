<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','price','sale_price','image','category_id','slug','description','stock'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function imgProduct(){
        return $this->hasMany(ImgProduct::class,'product_id','id');
    }
}
