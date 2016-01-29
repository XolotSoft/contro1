<?php

include_once('init.php');
include_once('config.php');
include_once(DOC_ROOT.'/libraries.php');

if (!isset($_SESSION)) {
    session_start();
}

$pages = array(
    'login',
    'logout',
    'homepage',
    'personal'
);

$page = $_GET['page'];
// $section = $_GET['section'];

if (!in_array($page, $pages)) {
    $page = 'homepage';
}

// include_once(DOC_ROOT.'/modules/user.php');
include_once(DOC_ROOT.'/modules/'.$page.'.php');

$smarty->assign('page', $page);
$smarty->assign('section', $section);
$pageTpl = ($section == '') ? $page : $page.'_'.$section;
$smarty->assign('pageTpl', $pageTpl);
$smarty->assign('lang', $lang);

if ($page == 'login') {
        $smarty->display(DOC_ROOT.'/templates/login.tpl');
} else {
        $smarty->display(DOC_ROOT.'/templates/index.tpl');
}
