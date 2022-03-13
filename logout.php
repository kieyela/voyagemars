<?php

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";

session_start();

unset($_SESSION);

session_destroy();

redirect("/");