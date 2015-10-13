<?php

namespace Eloquent\Commentable;

interface Commentable {

    /**
     * Return all comments .
     *
     * @return mixed
     */
    public function comments();
}