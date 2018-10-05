<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPortal extends Model
{
    protected $table = 'job_portals';
    protected $fillable = ['email', 'jTitle', 'jDetails', 'skillSet'];
}
