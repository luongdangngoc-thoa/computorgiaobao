<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $table = 'blogs_comments';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function blog(){
        return $this->belongsTo(Blog::class,foreignKey:'blog_id',ownerKey:'id');
    }
}
