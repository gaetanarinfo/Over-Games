<?php 

require 'req.php';

if($_SESSION['email'] == $membre_visible_result['email']) {

if($_GET['nom'] == 'oui') {

    $nom = '1';

}else if($_GET['nom'] == 'non'){
    $nom = '0';
}

if($_GET['prenom'] == 'oui') {

    $prenom = '1';

}else if($_GET['prenom'] == 'non'){
    $prenom = '0';
}

if($_GET['email'] == 'oui') {

    $email = '1';

}else if($_GET['email'] == 'non'){
    $email = '0';
}

if($_GET['pseudo'] == 'oui') {

    $pseudo = '1';

}else if($_GET['pseudo'] == 'non'){
    $pseudo = '0';
}

if($_GET['sexe'] == 'oui') {

    $sexe = '1';

}else if($_GET['sexe'] == 'non'){
    $sexe = '0';
}

if($_GET['age'] == 'oui') {

    $age = '1';

}else if($_GET['age'] == 'non'){
    $age = '0';
}

if($_GET['adresse'] == 'oui') {

    $adresse = '1';

}else if($_GET['adresse'] == 'non'){
    $adresse = '0';
}

if($_GET['adresse2'] == 'oui') {

    $noadresse2m = '1';

}else if($_GET['adresse2'] == 'non'){
    $adresse2 = '0';
}

if($_GET['ville'] == 'oui') {

    $ville = '1';

}else if($_GET['ville'] == 'non'){
    $ville = '0';
}

if($_GET['pays'] == 'oui') {

    $pays = '1';

}else if($_GET['pays'] == 'non'){
    $pays = '0';
}

if($_GET['postalCode'] == 'oui') {

    $postalCode = '1';

}else if($_GET['postalCode'] == 'non'){
    $postalCode = '0';
}

$data = [
    'nom' => $nom,
    'prenom' => $prenom,
    'adresse' => $adresse,
    'adresse2' => $adresse,
    'ville' => $ville,
    'pays' => $pays,
    'postalCode' => $postalCode,
    'sexe' => $sexe,
    'age' => $age,
    'email' => $_SESSION['email'],
    'emails' => $email,
];

$sql = "UPDATE membres_visible SET nom = :nom, prenom = :prenom, adresse = :adresse, adresse2 = :adresse2, ville = :ville, pays = :pays, postalCode = :postalCode, sexe = :sexe, age = :age, emails = :emails WHERE email = :email";
$stmt= $db->prepare($sql);
$stmt->execute($data);

echo $nom;

}

?>