<?php
$SQL = " SELECT * FROM configuracion WHERE id = 1";
$util->DB()->setQuery($SQL);
$header = $util->DB()->GetRow();
$Centros = $centros->centrosHeader();
$iva  = $_SESSION['Iva'];
$ivap = $_SESSION['Ivap'];
$ceH  = $_SESSION['Centro'];
$Usr  = $_SESSION['Usr'];
$emp  = $_SESSION['Empresa'];
$smarty->assign('Centros', $Centros);
$smarty->assign('header', $header);
$smarty->assign('ceH', $ceH);
$smarty->assign('Usr', $Usr);
$smarty->assign('iva', $iva);
$smarty->assign('ivap', $ivap);
$smarty->assign('emp', $emp);