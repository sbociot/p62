<?php
require_once 'base_php/user_authenticate.php'; // Code pour authentification
define('PS_USERNAME', 'ps_username');

session_start(); // Démarrage session

/**
 * Indique si l'utilisateur est connecté ou pas
 * @return bool
 */
function is_logged_in() {
    return (array_key_exists(PS_USERNAME, $_SESSION) && (! empty($_SESSION[PS_USERNAME]))); // Par convention, l'utilisateur est connecté si la données de session username n'est pas vide
}


// Réception des données de formulaire
if (is_logged_in() && array_key_exists('logout_btn', $_POST)) {
    // Déconnexion à effectuer
    $_SESSION[PS_USERNAME] = ''; // Username vide signifie non connecté
} else if ( ! is_logged_in()
    && array_key_exists('login_btn', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)) {
    // Connexion à effectuer ici
    // Filtrage et Validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username_valide = (1===preg_match('/\w{5,}/', $username));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1===preg_match('/\w{6,}/', $password));
    if ($username_valide
        && $password_valide
        && user_authenticate($username, $password)) {
        // Si tout se passe bien on le connecte
        $_SESSION[PS_USERNAME] = $username;
    }
}
