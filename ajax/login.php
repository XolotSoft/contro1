<?php
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');
session_start();

switch ($_POST['type']) {
    case 'doLogin':
        $username = strip_tags($_POST['username']);
        $passwd = strip_tags($_POST['password']);
        $user->setUsername($username);
        $user->setPassword($passwd);
        if ($user->DoLogin()) {
            echo "ok";
        } else {
            echo "fail[#]";
            $util->ShowErrors();
        }
        break;
}
