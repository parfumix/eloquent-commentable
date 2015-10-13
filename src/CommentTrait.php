<?php

namespace Eloquent\Commentable;

trait CommentTrait {

    /**
     * Return all comments .
     */
    public function comments() {
        return $this->morphMany(Comment::class, 'commentable');
    }
}