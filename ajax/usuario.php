<?php

include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

switch ($_POST["type"]) {
    case 'doLogin':
        $username = strip_tags($_POST['username']);
        $passwd = strip_tags($_POST['passwd']);
        $user->setUsername($username);
        $user->setPassword($passwd);
        if ($user->doLogin()) {
            //Save History Data         
            $user->setModule('Login');
            $user->setAction('Login');
            $user->SaveHistory();
            echo "ok[#]";
        } else {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        break;
}
