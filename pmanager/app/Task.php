<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'days',
        'hours',
        'company_id'
    ];

    public function user(){
        return $this->belongsTO('App\User');
    }

    public function project(){
        return $this->belongsTO('App\Project');
    }

    public function company(){
        return $this->belongsTO('App\Company');
    }

    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }
}
