<?php


$en_reception = array_key_exists('nom', $_POST)
    && array_key_exists('prenom', $_POST)
    && array_key_exists('email', $_POST);
//formulaire mmm

// Réception du nom
$nom = '';
$nom_valide = true;
if (array_key_exists('nom', $_POST)) {
    // PHP assure le filtrage de la chaîne d'entrée
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{1,}/', $nom));
}

// Réception du prenom
$prenom = '';
$prenom_valide = true;
if (array_key_exists('prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    // 2 caractères minimum, le premier est un caractère majuscule
    $prenom_valide = (1 === preg_match('/[A-Z]\w{1,}/', $prenom));
}

// Réception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('email', $_POST)) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}
$Code_postal = '';
$Code_postal_valide = true;
if ($en_reception && empty($Code_postal)) {
    $Code_postal_valide = false;
}

if ($en_reception && $nom_valide && $prenom_valide && $email_valide && $Code_postal_valide) {
    // Les données de formulaire sont valides
    header('Location:ok.php');
    exit;
}




?>

<?php
require_once 'base_php/base_header.php';
require_once 'base_php/menu.php';
?>
<form method="post" action="envoyer.php">

    <div id="coordonnees">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <p>
                <label for="Nom">Votre nom :</label> <br />
                <input type="text" name="Nom" id="Nom" size="30" required />
            </p>
            <p>
                <label for="Prenom">Votre prénom :</label> <br />
                <input type="text" name="Prenom" id="Prenom" size="30" required />
            </p>
            <p>
                <label for="Adresse">Adresse :</label> <br />
                <textarea name="Adresse" id="Adresse" rows="3" cols="25" required ></textarea>
            </p>
            <p>
                <label for="Code_postal">Code postal :</label> <br />
                <input type="text" name="Code_postal" id="Code_postal" size="15" required />
            </p>
            <p>
                <label for="Ville">Ville* :</label> <br />
                <input type="text" name="Ville" id="Ville" size="25" required />
            </p>
            <p>
                <label for="E_mail">E-mail* :</label> <br />
                <input type="E_mail" name="E_mail" id="E_mail" size="40" required />
            </p>
            <p>
                <label for="date">date de debut:</label> <br />
            <input type="date" name="anniversaire">
            </p>
            <p>
                <label for="Telephone">Téléphone* :</label> <br />
                <input type="tel" name="Telephone" id="Telephone" placeholder="000 000 0000" size="20" required />
            </p>
            <p>
                <label for="nombrepersone">nombre de personne:</label> <br />
                <input type="number" step="8" value="1" min="1"  required />
            </p>
        </fieldset>
    </div>
    <input type="submit" value="passer la reservation" />
</form>
<?php
require_once 'base_php/page_end.php';
?>
