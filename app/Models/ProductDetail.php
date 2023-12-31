<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $table = 'product_detail';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class,foreignKey:'product_detail_id',ownerKey:'id');
    }
}
