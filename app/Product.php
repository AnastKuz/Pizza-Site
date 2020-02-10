<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','image','description','price_dollar','price_euro'];
    protected $guarded = ['id','created_at','updated_at'];

    public function order()
    {
        return $this->hasMany(Order::class,'product_id','id');
    }
}
