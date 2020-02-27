<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    protected $fillable = [
        'tasks', 'description', 'due',
    ];


    protected $hidden = [
        'timestamps',
    ];

    public function insert($data)
    {
        $this->create([
            'tasks' => $data['tasks'],
            'description' => $data['description'],
            'due' => Carbon::now()->format('Y-m-d'),
        ]);
    }

    public function getAll()
    {
        return $this->get();
    }
}
