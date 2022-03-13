<?php

session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";

$_SESSION["flash_messages"] = [];

$errors = [];

#validation des données
$mandatoryValues = [
"username",
"password"
];

$mandatoryValuesNotProvided = array_diff($mandatoryValues, array_keys($_POST));

if (!empty($mandatoryValuesNotProvided)) {
    $errors["obligatoire"] = "Les paramètres obligatoire suivant n'ont pas été fournis: ".implode(",", $mandatoryValuesNotProvided);
}

$username = validateFormElement("username", FILTER_VALIDATE_EMAIL);
if (!$username) {
    $errors["username"] = "L'adresse email n'est pas valide";
}

$password = validateFormElement("password", FILTER_SANITIZE_STRING);
if (!$password) {
    $errors["password"] = "Le mot de passe n'est pas valide.";
}

$user = Database::get()->selectQuery("SELECT * FROM agents WHERE email=:username AND password=MD5(:password)", ["username"=>$username, "password"=>$password]);

if (empty($user)){
    $errors["logged"] = false;
    $_SESSION["errors"] = ["L'email et/ou le mot de passe incorrect."];

    redirect("/login.php");
}else {
    $_SESSION["login"] = $user[0]["email"];
    $_SESSION["agent"] = $user[0]["nom"];
    $_SESSION["agent_id"] = $user[0]["idag"];

    if ($_SESSION["previous_url"]){
        redirect($_SESSION["previous_url"]);
    }else{
        redirect("/");
    }
}