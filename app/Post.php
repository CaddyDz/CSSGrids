<?php

namespace blog;

class Post extends Model
{
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
}
