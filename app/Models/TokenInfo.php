<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenInfo extends Model
{
    use HasFactory;
    protected $table = "token_infos";
    protected $guarded = [];
}
