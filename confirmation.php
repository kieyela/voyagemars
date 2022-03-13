<?php

session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";

$_SESSION["billet_request"] = $_POST;

# assurons nous que l'utilisateur est enregistré
redirectIfNotLoggedIn();

returnIfNotAuthorizedMethod("POST");

$errors= [
];

#validation des données
$mandatoryValues = [
"client-name",
"client-tel",
"client-mail",
"billet-datdep",
"billet-datfin"
];

$mandatoryValuesNotProvided = array_diff($mandatoryValues, array_keys($_POST));

if (!empty($mandatoryValuesNotProvided)) {
    $errors["obligatoire"] = "Les paramètres obligatoire suivant n'ont pas été fournis: ".implode(",", $mandatoryValuesNotProvided);
}

$clientName = validateFormElement("client-name");
if (!$clientName) {
    $errors["client-name"] = "Le nom du client n'est pas une valeur valide.";
}

$clientTel = validateFormElement("client-tel", FILTER_VALIDATE_REGEXP, ["regexp"=>"/^[+]?[0-9]+$/"]);
if (!$clientTel) {
    $errors["client-tel"] = "Erreur sur le format du numéro. Entrez une valeur comme '+255070707070'";
}

$clientMail = validateFormElement("client-mail", FILTER_VALIDATE_EMAIL);
if (!$clientMail) {
    $errors["client-mail"] = "L'adresse email n'est pas valide";
}

$clientPassport = validateFormElement("client-passport", FILTER_SANITIZE_STRING);
if (!$clientPassport) {
    $errors["client-passport"] = "Le numéro du passeport n'est pas valide.";
}

$destinationId = validateFormElement("iddest", FILTER_VALIDATE_INT);
if (!$destinationId) {
    $errors["iddest"] = "Fournissez une destination valide";
}
$destination = Database::get()->selectQuery("SELECT * FROM destinations WHERE iddest=:id", ["id"=>$destinationId]);
if (empty($destination)) {
    $errors["iddest"] = "La destination choisie n'existe pas";
}

$billetDateDep = date_create_from_format("Y-m-d", $_POST["billet-datdep"]);
$billetDateFin = date_create_from_format("Y-m-d", $_POST["billet-datfin"]);

$correctDates = $billetDateDep !== false & $billetDateFin !==false;
$correctInterval = $billetDateDep < $billetDateFin;

if (!$correctDates && !$correctInterval) {
    $errors["billet-datdep"] = "La date ou l'intervalle entre les dates est incorrect.";
    $errors["billet-datfin"] ="La date ou l'intervalle entre les dates est incorrect.";
}

$client["nom"] = $clientName;
$client["tel"] = $clientTel;
$client["mail"] = $clientMail;
$client["passeport"] = $clientPassport;
$client["iddest"] = $destinationId;
$client["idag"] = $_SESSION["agent_id"];

#supprime les clés vides
$client = array_filter($client);

#Enregistre le client
$client["idclient"] = Database::get()->insertQuery("clients", $client);

#Enregistre le billet

$billet = [
    "idclient" => $client["idclient"],
    "datdep" => $billetDateDep,
    "datefin" => $billetDateFin,
];

$billet["idbill"] = Database::get()->insertQuery("billets", $billet);
unset($_SESSION["billet_request"]);

$_SESSION["billet"] = $billet;
addMessage("success", "message");

redirect("/index.php");
