<?php

function getCategories() {
    return [
        ['id' => 1, 'name' => 'Fiksi'],
        ['id' => 2, 'name' => 'Non-Fiksi'],
        ['id' => 3, 'name' => 'Sains'],
        ['id' => 4, 'name' => 'Sejarah']
    ];
}

function getCategory($id) {
    $categories = getCategories();
    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category;
        }
    }
    return null;
}