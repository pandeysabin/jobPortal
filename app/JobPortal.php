<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPortal extends Model
{
    protected $table = 'jobPortal';
    protected $fillable = ['email', 'jTitle', 'jDetails', 'skillSet'];
}
