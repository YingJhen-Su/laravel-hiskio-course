<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $appends = ['current_price'];

    public function getCurrentPriceAttribute() {
      return $this->quantity * 10;
    }

    public function cart() {
      return $this->belongsTo(Cart::class);
    }

  public function product() {
    return $this->belongsTo(Product::class);
  }
}