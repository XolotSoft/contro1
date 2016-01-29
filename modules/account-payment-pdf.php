<?php
	
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');
	include_once(DOC_ROOT.'/pdf/dompdf_config.inc.php');
	
	session_start();
	
	/* Start Session Control - Don't Remove This */
	$user->allowAccess();	
	/* End Session Control */
	
	$accountPagoId = intval($_GET['id']);
	
	$accountPayment->setAccountPagoId($accountPagoId);
	$info = $accountPayment->InfoPago();
	
	$info['total'] = $info['quantity'];
	
	$cents = ($info['total'] - floor($info['total'])) * 100;
	
	$centavosLetra = $util->GetCents($info['total']);
	if($cents >= 99)
	{
		$info['total'] = ceil($info['total']);
	}
	else
	{
		$info['total'] = floor($info['total']);
	}

	$cantidadLetra = $util->num2letras($info['total'], false);

	$tiposDeCambio = 'Pesos'; $tiposDeCambioSufix = 'M.N';
	$letra = '('.$cantidadLetra.' '.$tiposDeCambio.' '.$centavosLetra.'/100 '.$tiposDeCambioSufix.')';
		
	//Obtenemos informacion del Proveedor
	$supplier->setSupplierId($info['supplierId']);
	$infS = $supplier->Info();
			
	$html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Orden de Compra</title>
<style type="text/css">
<!--
body{
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
}
.Estilo1 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}

-->
</style>
</head>

<body>
<table width="550" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="right">'.date('d-m-Y',strtotime($info['fecha'])).'</td>
</tr>
</table>
<br><br><br>
<table width="550" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="left">'.strtoupper(utf8_encode($infS['name'])).'</td>
	<td align="right">'.number_format($info['quantity'],2).'</td>
</tr>
</table>
<br><br>
<table width="550" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="left">'.strtoupper($letra).'</td>
</tr>
</table>

</body>
</html>
';

	if($type == 'normal')
		$costeo->ResetSessionVars();
		
	$dompdf = new DOMPDF();
	$dompdf->set_paper('letter');
	$dompdf->load_html($html);
	$dompdf->render();
	
	$dompdf->stream("requisicion_cheque.pdf", array('Attachment'=>0));
	
	/*
	$projectId = $info['projectId'];
	$bankId = $info['bankId'];
	$anio = date('Y',strtotime($info['fecha']));
	$mes = date('m',strtotime($info['fecha']));
	$noCheque = $info['noCheque'];
	
	$path = DOC_ROOT.'/cheques/'.$projectId.'/'.$bankId.'/'.$anio.'/'.$mes.'/'.$noCheque;
	
	$path = DOC_ROOT.'/cheques/proy_'.$projectId;
	if(!file_exists($path))
		mkdir($path);
	
	$path = DOC_ROOT.'/cheques/proy_'.$projectId.'/ban_'.$bankId;
	if(!file_exists($path))
		mkdir($path);
	
	$path = DOC_ROOT.'/cheques/proy_'.$projectId.'/ban_'.$bankId.'/'.$anio;
	if(!file_exists($path))
		mkdir($path);
	
	$path = DOC_ROOT.'/cheques/proy_'.$projectId.'/ban_'.$bankId.'/'.$anio.'/'.$mes;
	if(!file_exists($path))
		mkdir($path);

		
	$pdfoutput = $dompdf->output(); 
	$filename = $path.'/'.$noCheque.'.pdf'; 
	$fp = fopen($filename, "a"); 
	fwrite($fp, $pdfoutput); 
	fclose($fp); 
	*/
?>