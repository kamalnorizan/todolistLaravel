<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public $timestamps = true;

    protected $table = 'tasks';

    protected $primaryKey = 'task_id';

    public $incrementing = true;

    protected $fillable = ['user_id', 'title', 'due_date', 'status'];
}
