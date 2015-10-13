<?php

namespace Eloquent\Commentable;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    public $timestamps = true;

    public $fillable = ['author_id', 'author_type', 'comment', 'status'];

    /**
     * Get all of the owning commentable models.
     */
    public function commentable() {
        return $this->morphTo();
    }
}