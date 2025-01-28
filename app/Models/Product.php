<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'description_product', 'price_product','qte_product'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
   
   
}



