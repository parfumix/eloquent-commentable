<?php

namespace Eloquent\Commentable;

use Illuminate\Database\Eloquent\Model;

trait CommentTrait {

    /**
     * Return all comments .
     */
    public function comments() {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     *  Add comment ..
     *
     * @param $comment
     * @param Model $author
     * @param string $status
     */
    public function addComment($comment, Model $author, $status = 'pending') {
        $commentRow = new Comment([
            'author_id' => $author->id,
            'author_type' => $author->getMorphClass(),
            'comment' => $comment,
            'status' => $status,
        ]);

        return $this->comments()->save($commentRow);
    }

    /**
     * Delete comment by id .
     *
     * @param $comment_id
     */
    public function deleteComment($comment_id) {
        return $this->comments()
            ->where('id', $comment_id)
            ->delete();
    }

}