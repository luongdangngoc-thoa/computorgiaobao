<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class,foreignKey:'product_id',ownerKey:'id');
    }
}
