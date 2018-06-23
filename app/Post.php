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
}
