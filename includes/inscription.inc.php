<h1>Inscription</h1>
<?php


if (isset($_POST['frmInscription'])) {
    echo "Je viens du formulaire";

    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : "";
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $mdp1 = isset($_POST['mdp1']) ? trim($_POST['mdp1']) :  "";
    $mdp2 = isset($_POST['mdp2']) ? trim($_POST['mdp2']) :  "";

    $erreur = array ();

    if (strlen($nom) === 0)
    array_push($erreur, "Veuillez saisir votre nom");

    if (strlen($prenom) === 0)
    array_push($erreur, "Veuillez saisir votre prenom");

    if (strlen($email) === 0)
    array_push($erreur, "Veuillez saisir une addresse mail");

    $messageerreur = "<ul>";
    for ($i=0; $i < count($erreur); $i++) { 
        $messageerreur .="<li>";
        $messageerreur .= $erreur[$i];
        $messageerreur .= "</li>";
    }

    $messageerreur .= "</ul>";


    
}

else {
    echo "Je viens du futur";
}

require_once 'frmInscription.php';