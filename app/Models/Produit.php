<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;


protected $fillable = [
'name' , 'price'  , 'old_price' , 'description' , 'category_id' , 'slug', 'img' , 'inStock'

];

public function getRouteKeyName(){
    return "slug";
}

public function category(){
    return $this->belongsTo(Category::class);
}

}