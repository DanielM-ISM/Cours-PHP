<?php
function verifier_identifiants($email, $password) {
    $file_path = __DIR__ . '/../DB/users.json';
    
    if (!file_exists($file_path)) {
        return false;
    }
    
    $users = json_decode(file_get_contents($file_path), true);
    if (is_array($users)) {
        foreach ($users as $user) {
            if ($user['email'] === $email && $user['password'] === $password) {
                return $user; // Retourne les données de l'utilisateur.
            }
        }
    }
    return false;
}
?>
