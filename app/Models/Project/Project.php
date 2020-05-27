<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'user_id'];
    
    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function parentProject()
    {
        return $this->belongsTo('App\Models\Project\Project');
    }

    public function subProjects()
    {
        return $this->hasMany('App\Models\Project\Project');
    }

    public function tasks()
    {
        return $this->hasMany('App\Models\Task\Task');
    }
}
