<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

protected $fillable = [

"user_id", "produit_name" ,"qty" , "price" , "total" , "paid" , "delivered"

];

public function user(){
    return $this->BelongsTo(User::class);
}
}
