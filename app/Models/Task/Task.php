<?php

namespace App\Models\Task;

use App\Models\Project\Project;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id', 'done_by_user_id', 'value', 'done_at', 'archived'];
    
    public function project()
    {
        return $this->belongsTo('App\Models\Project\Project');
    }

    public function doneBy()
    {
        return $this->belongsTo(User::class, 'done_by_user_id');
    }
}
