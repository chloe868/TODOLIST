<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'tasks', 'description', 'due',
    ];


    protected $hidden = [
        'timestamps',
    ];
}
