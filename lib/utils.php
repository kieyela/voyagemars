<?php

require_once __DIR__.DIRECTORY_SEPARATOR."Database.php";

function returnIfNotAuthorizedMethod($method)
{
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    if ($requestMethod !== $method) {
        redirect("/");
    }
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

function redirectIfNotLoggedIn()
{
    if (empty($_SESSION["login"])) {
        redirect("/");
    }
}


function validateFormElement($name, $validator = FILTER_SANITIZE_STRING, $options=[])
{
    $opt = [
        "options" => $options
    ];
    return filter_input(INPUT_POST, $name, $validator, $opt);
}

function addMessage($type, $message)
{
    $_SESSION["flash_messages"][]= [
     "type" => $type,
     "message" => $message
 ];
}

function computeMessages()
{
    $messages = '';

    foreach ($_SESSION["flash_messages"] as $flash) {
        $messages = $messages.'<div class="toast">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-grav"></i> '.$flash["type"].'</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        '.$flash["message"].'
    </div>
</div>';

        return $messages;
    }
}
