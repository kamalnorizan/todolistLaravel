<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_detail extends Model
{
    //
    public $timestamps = true;

    protected $table = 'task_details';

    protected $primaryKey = 'task_detail_id';

    public $incrementing = true;

    protected $fillable = ['task_id','title','status'];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'task_id');
    }
}
