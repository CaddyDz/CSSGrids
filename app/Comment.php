<?php

namespace blog;

class Comment extends Model
{
    public function post()
    {
      return $this->belongsTo(Post::class);
    }
}
