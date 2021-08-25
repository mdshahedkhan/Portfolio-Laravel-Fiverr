<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = ['create_by', 'title', 'prefix', 'meta_description',
                            'meta_keyword', 'meta_author', 'email', 'facebook', 'linkedin', 'twitter', 'logo'];
}
