<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];

    public function blogpost(){
        return $this->hasMany(Blog::class,'cate_id','id')->where('status','0') ;
    }

}
