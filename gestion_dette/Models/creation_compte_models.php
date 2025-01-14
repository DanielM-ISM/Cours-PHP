<?php
function creation_compte($email, $password) {
    $filePath = '../DB/users.json';
    if (!file_exists($filePath)) {
        file_put_contents($filePath, json_encode([]));
    }
    $users = json_decode(file_get_contents($filePath), true);
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            return false;
        }
    }
    $newUser = [
        'email' => $email,
        'password' => $password,
    ];
    $users[] = $newUser;
    file_put_contents($filePath, json_encode($users, JSON_PRETTY_PRINT));
    return true;
}
?>
