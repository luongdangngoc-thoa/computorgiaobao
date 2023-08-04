<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table = 'product_comment';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class,foreignKey:'product_comment_id',ownerKey:'id');
    }
}
