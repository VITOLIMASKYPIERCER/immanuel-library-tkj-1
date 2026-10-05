<?php

function getUsers() {
    return [
        ['id' => 1, 'name' => 'Budi Santoso', 'email' => 'budi@gmail.com', 'role' => 'Member'],
        ['id' => 2, 'name' => 'Siti Aminah', 'email' => 'siti@gmail.com', 'role' => 'Admin']
    ];
}

function getUser($id) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function getProfile() {
    return [
        'id' => 1,
        'name' => 'Budi Santoso',
        'email' => 'budi@gmail.com',
        'role' => 'Member'
    ];
}