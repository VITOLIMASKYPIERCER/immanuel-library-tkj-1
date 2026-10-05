<?php

function getAuthors() {
    return [
        ['id' => 1, 'name' => 'Andrea Hirata'],
        ['id' => 2, 'name' => 'Pramoedya Ananta Toer'],
        ['id' => 3, 'name' => 'Tere Liye']
    ];
}

function getAuthor($id) {
    $authors = getAuthors();
    foreach ($authors as $author) {
        if ($author['id'] == $id) {
            return $author;
        }
    }
    return null;
}