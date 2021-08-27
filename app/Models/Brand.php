<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['create_by', 'title', 'slug', 'brand_img', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'create_by')->select('id', 'name');
    }
}
