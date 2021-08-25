<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['create_by', 'title', 'sub_title', 'image', 'status'];

    public static $ACTIVE_STATUS = 'active';

    public function user()
    {
        return $this->belongsTo(User::class, 'create_by')->select('id', 'name');
    }
}
