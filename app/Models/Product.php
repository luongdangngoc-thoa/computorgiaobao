<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class,foreignKey:'brand_id',ownerKey:'id');
    }

    public function productCategory(){
        return $this->belongsTo(ProductCategory::class,foreignKey:'product_category_id',ownerKey:'id');
    }

    public function productImage(){
        return $this->hasMany(ProductImage::class,foreignKey:'product_id',ownerKey:'id');
    }

    public function productComment(){
        return $this->hasMany(ProductComment::class,foreignKey:'product_id',ownerKey:'id');
    }

    public function productDetails(){
        return $this->hasMany(ProductDetail::class,foreignKey:'product_id',ownerKey:'id');
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class,foreignKey:'product_id',ownerKey:'id');
    }
}
