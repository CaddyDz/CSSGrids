<?php

namespace Fresh;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    protected $dates = [
        'reviewed_at'
    ];

    protected $appends = [
        'humanCreatedAt'
    ];

    public function getHumanCreatedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
