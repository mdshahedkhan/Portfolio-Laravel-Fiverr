<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $fillable = ['create_by', 'name', 'short_story', 'email_address', 'mobile', 'about_me', 'download_resume', 'signature', 'avatar'];

}
