<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageSave extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
