<?php

Route::get('/users/{id}/posts/{postId?}', function ($id, $postId = null) {
    echo $id . ' ' . $postId;
});
