<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactMail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','email', 'subject', 'message', 'read_as', 'phone_number', 'status'];

}
