<?php

namespace App\Models;

use Eloquent;

class Project extends Eloquent
{
    protected $table = 'project';

    protected $fillable = ['name', 'description', 'technology', 'role', 'img'];
}