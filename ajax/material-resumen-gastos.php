<?php

include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();
$p = $_SESSION['matP'];

if(!isset($_SESSION['itemsPg']))
	$_SESSION['itemsPg'] = 25;
	
$itemsPage = $_SESSION['itemsPg'];

if(isset($_POST['action']))
	$_POST['type'] = $_POST['action'];

switch($_POST['type'])
{			
	case 'searchResumen':
			
			$categoryId = $_POST['categoryId2'];
			$subcategoryId = $_POST['subcategoryId2'];
			$conceptConId = $_POST['conceptConId2'];
			$showPrecio = 1;
			$conIva = $_POST['conIva'];
						
			$project->setProjectId($_SESSION['curProjId']);
			$projects = $project->EnumOne();
			
			$items = array();
			foreach($projects['items'] as $res){
				$card = $util->EncodeRow($res);
							
				$cuantificacion->setProjectId($res['projectId']);
				$resCategories = $cuantificacion->EnumMatCatsByProject();
				
				$totCant2 = 0;
				$total2 = 0;
				$categories = array();	
				foreach($resCategories as $res2){
					$card2 = $util->EncodeRow($res2);
					
					if($categoryId != '' && $res2['categoryId'] != $categoryId)
						continue;
								
					$cuantificacion->setCategoryId($res2['categoryId']);
					$resSubcats = $cuantificacion->EnumMatSubcatsByProj();
					
					$totCant3 = 0;
					$total3 = 0;
					$subcategories = array();
					foreach($resSubcats as $res3){
						$card3 = $util->EncodeRow($res3);
						
						if($subcategoryId != '' && $res3['subcategoryId'] != $subcategoryId)
							continue;
						
						$cuantificacion->setSubcategoryId($res3['subcategoryId']);
						$resConcepts = $cuantificacion->EnumMatConceptsByProj();
						
						$totCant4 = 0;
						$total4 = 0;
						$concepts = array();
						foreach($resConcepts as $res4){
							$card4 = $util->EncodeRow($res4);
							
							if($conceptConId != '' && $res4['conceptConId'] != $conceptConId)
								continue;
							
							$cuantificacion->setConceptConId($res4['conceptConId']);
							$resDesc = $cuantificacion->EnumMatConceptsByProjRes();
												
							$totCant5 = 0;
							$total5 = 0;					
							$descriptions = array();
							foreach($resDesc as $res5){
								
								$res5 = $util->EncodeRow($res5);
								
								$matPrice->setMaterialId($res5['materialId']);
								$infMP = $matPrice->GetMatPriceDefault();
								
								$totalInvoice = $infMP['price'];
								if($conIva == "0"){
									$totalInvoice = $totalInvoice - ($totalInvoice * 0.16);
									$infMP['price'] = number_format($totalInvoice,2,'.',''); 
								}
								
								$total = $infMP['price'];
								
								$material->setMaterialId($res5['materialId']);
								$infM = $material->Info();
								
								$unit->setUnitId($infM['unitId']);
								$res5['unit'] = $unit->GetClaveById();
								
								$res5['price'] = $infMP['price'];
								
								$cuantificacion->setMaterialId($res5['materialId']);
								$res5['cantidad'] = $cuantificacion->GetTotalMaterialRes2();
								
								$total *= $res5['cantidad'];
								
								$res5['total'] = $total;
								
								$total5 += $total;
								$totCant5 += $res5['cantidad'];
								
								$descriptions[] = $res5;
								
							}
							
							$total4 += $total5;
							$totCant4 += $totCant5;
																	
							$card4['descriptions'] = $descriptions;
							$card4['cantidad'] = $totCant5;				
							$card4['total'] = $total5;
												
							$concepts[] = $card4;
							
						}//foreach resConcepts
						
						$card3['concepts'] = $concepts;				
						
						/************ Conceptos sin Conceptos *******************/
						
						$concepts = array();				
										
						$cuantificacion->setConceptConId($res4['conceptConId']);
						$resDesc = $cuantificacion->EnumMatConcepts0ByProjRes();
						
						$totCant5 = 0;						
						$total5 = 0;					
						$descriptions = array();
						foreach($resDesc as $res5){
							
							$res5 = $util->EncodeRow($res5);
							
							$matPrice->setMaterialId($res5['materialId']);
							$infMP = $matPrice->GetMatPriceDefault();
							
							$totalInvoice = $infMP['price'];
							if($conIva == "0"){
								$totalInvoice = $totalInvoice - ($totalInvoice * 0.16);
								$infMP['price'] = number_format($totalInvoice,2,'.',''); 
							}
							
							$total = $infMP['price'];
							
							$material->setMaterialId($res5['materialId']);
							$infM = $material->Info();
																					
							$unit->setUnitId($infM['unitId']);
							$res5['unit'] = $unit->GetClaveById();
							
							$res5['price'] = $infMP['price'];
							
							$cuantificacion->setMaterialId($res5['materialId']);
							$res5['cantidad'] = $cuantificacion->GetTotalMaterialRes2();
							
							$total *= $res5['cantidad'];
							
							$res5['total'] = $total;
							
							$total5 += $total;
							$totCant5 += $res5['cantidad'];
												
							$descriptions[] = $res5;
							
						}//foreach resDesc
						
						$total4 += $total5;
						$totCant4 += $totCant5;
						
						$card4['cantidad'] = $totCant5;	
						$card4['descriptions'] = $descriptions;					
						$card4['total'] = $total5;
											
						$concepts[] = $card4;			
						
						$total3 += $total4;
						$totCant3 += $totCant4;
						
						if(count($descriptions))
							$card3['concepts2'] = $concepts;			
						
						/************* Fin Conceptos Sin Conceptos **********/
						
						$card3['cantidad'] = $totCant4;
						$card3['total'] = $total4;
						$subcategories[] = $card3;
						
					}//foreach resSubcats
																
					$card2['subcategories'] = $subcategories;			
					
					/***** Conceptos Sin Subcategorias *****/
					
					$card3 = array();
					$subcategories = array();
					
					$totCant4 = 0;
					$total4 = 0;
					$concepts = array();
								
					$cuantificacion->setConceptConId($res4['conceptConId']);
					$resDesc = $cuantificacion->EnumMatConcepts00ByProjRes();
					
					$totCant5 = 0;
					$total5 = 0;					
					$descriptions = array();
					foreach($resDesc as $res5){
						
						$res5 = $util->EncodeRow($res5);
						
						$matPrice->setMaterialId($res5['materialId']);
						$infMP = $matPrice->GetMatPriceDefault();
						
						$totalInvoice = $infMP['price'];
						if($conIva == "0"){
							$totalInvoice = $totalInvoice - ($totalInvoice * 0.16);
							$infMP['price'] = number_format($totalInvoice,2,'.',''); 
						}
						
						$total = $infMP['price'];
						
						$material->setMaterialId($res5['materialId']);
						$infM = $material->Info();
																		
						$unit->setUnitId($infM['unitId']);
						$res5['unit'] = $unit->GetClaveById();
						
						$res5['price'] = '$'.$infMP['price'];
						
						$cuantificacion->setMaterialId($res5['materialId']);
						$res5['cantidad'] = $cuantificacion->GetTotalMaterialRes2();
						
						$total *= $res5['cantidad'];
						
						$res5['total'] = $total;
						
						$total5 += $total;
						$totCant5 += $res5['cantidad'];
						
						$descriptions[] = $res5;
						
					}//foreach resDesc
					
					$total4 += $total5;
					$totCant4 += $totCant5;
															
					$card4['descriptions'] = $descriptions;
					$card4['cantidad'] = $totCant5;					
					$card4['total'] = $total5;
										
					$concepts[] = $card4;			
					
					$total3 += $total4;
					$totCant3 += $totCant4;
													
					$card3['concepts2'] = $concepts;
					$card3['cantidad'] = $totCant4;
					$card3['total'] = $total4;			
					
					if(count($descriptions))
						$subcategories[] = $card3;			
					
					$total2 += $total3;
					$totCant2 += $totCant3;
											
					$card2['subcategories2'] = $subcategories;
					$card2['cantidad'] = $totCant3;				
					$card2['total'] = $total3;
					
					/*** Fin Conceptos Sin Subcategorias ***/
					
					$categories[] = $card2;
					
				}//foreach resCategories
				
				$card['categories'] = $categories;
				$card['cantidad'] = $totCant2;
				$card['total'] = $total2;
				
				$items[] = $card;
				
			}//foreach projects['items']
			$projects['items'] = $items;
			
			echo 'ok[#]';
			
			$smarty->assign('showPrecio', $showPrecio);
			$smarty->assign('projects', $projects);
			$smarty->assign('DOC_ROOT', DOC_ROOT);
			
			if($showPrecio)
				$smarty->display(DOC_ROOT.'/templates/lists/material-resumen.tpl');
			else
				$smarty->display(DOC_ROOT.'/templates/lists/material-resumen2.tpl');
			
		break;
	
}

?>