<?php
// $Id: makepdf.php,v 1.7 2007/02/03 16:23:18 malanciault Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

error_reporting(0);
include_once 'header.php';
$myts =& MyTextSanitizer::getInstance();
require_once XOOPS_ROOT_PATH.'/modules/freesection/fpdf/fpdf.inc.php';

global $freesection_item_handler, $freesection_category_handler, $xoopsUser, $xoopsConfig, $xoopsModuleConfig, $xoopsModule;

$itemid = isset($_GET['itemid']) ? intval($_GET['itemid']) : 0;
$item_page_id = isset($_GET['page']) ? intval($_GET['page']) : -1;

if ($itemid == 0) {
	redirect_header("javascript:history.go(-1)", 1, _MD_FSECTION_NOITEMSELECTED);
	exit();
}

// Creating the item object for the selected item
$itemObj = $freesection_item_handler->get($itemid);

// if the selected item was not found, exit
if (!$itemObj) {
	redirect_header("javascript:history.go(-1)", 1, _MD_FSECTION_NOITEMSELECTED);
	exit();
}

// Creating the category object that holds the selected item
$categoryObj =& $freesection_category_handler->get($itemObj->categoryid());

// Check user permissions to access that category of the selected item
if (!(freesection_itemAccessGranted($itemObj->itemid(), $itemObj->categoryid()))) {
	redirect_header("javascript:history.go(-1)", 1, _NOPERM);
	exit;
}

$pdf_data['title'] = stripslashes($myts->undoHtmlSpecialChars($itemObj->title()));

//$pdf_data['subtitle'] = $myts->htmlSpecialChars($article->topic_title());
$pdf_data['subtitle'] = _MD_FSECTION_CATEGORY . ' : ' . $categoryObj->name();
$pdf_data['subsubtitle'] = '';
$pdf_data['date'] = sprintf(_MD_FSECTION_WHO_WHEN, $itemObj->posterName(), $itemObj->datesub());
$pdf_data['filename'] = preg_replace("/[^0-9a-z\-_\.]/i",'', $itemObj->title());

$content = html_entity_decode($itemObj->plain_maintext());

// Because fpdf does not support ul and li tags
$content = str_replace( '<ul>', "" , $content );
$content = str_replace( '<li>', "->" , $content );
$content = str_replace( '</li>', "\n" , $content );
$content = str_replace( '</ul>', "" , $content ); 

$pdf_data['content'] = $content;
$pdf_data['author'] = $itemObj->posterName();

//Other stuff
$puff='<br />';
$puffer='<br /><br /><br />';

//create the A4-PDF...
$pdf_config['slogan']=$xoopsConfig['sitename'].' - '.$xoopsConfig['slogan'];
// ML Hack by marcan
$pdf_config['slogan'] = $myts->displayTarea($pdf_config['slogan']);
// End of ML Hack by marcan

$pdf=new PDF();
$pdf->SetCreator($pdf_config['creator']);
$pdf->SetTitle($pdf_data['title']);
$pdf->SetAuthor($pdf_config['url']);
$pdf->SetSubject($pdf_data['author']);
$out=$pdf_config['url'].', '.$pdf_data['author'].', '.$pdf_data['title'].', '.$pdf_data['subtitle'].', '.$pdf_data['subsubtitle'];
$pdf->SetKeywords($out);
$pdf->SetAutoPageBreak(true,25);
$pdf->SetMargins($pdf_config['margin']['left'],$pdf_config['margin']['top'],$pdf_config['margin']['right']);
$pdf->Open();

//First page
$pdf->AddPage();
$pdf->SetXY(24,25);
$pdf->SetTextColor(10,60,160);
$pdf->SetFont($pdf_config['font']['slogan']['family'],$pdf_config['font']['slogan']['style'],$pdf_config['font']['slogan']['size']);
$pdf->WriteHTML($pdf_config['slogan'], $pdf_config['scale']);
$pdf_config['logo']['path'] = freesection_getConfig('printlogourl'); 
$pdf->Line(25,30,190,30);
$pdf->SetXY(25,35);
$pdf->SetFont($pdf_config['font']['title']['family'],$pdf_config['font']['title']['style'],$pdf_config['font']['title']['size']);
$pdf->WriteHTML($pdf_data['title'],$pdf_config['scale']);

if ($pdf_data['subtitle']<>''){
	$pdf->WriteHTML($puff,$pdf_config['scale']);
	$pdf->SetFont($pdf_config['font']['subtitle']['family'],$pdf_config['font']['subtitle']['style'],$pdf_config['font']['subtitle']['size']);
	$pdf->WriteHTML($pdf_data['subtitle'],$pdf_config['scale']);
}
if ($pdf_data['subsubtitle']<>'') {
	$pdf->WriteHTML($puff,$pdf_config['scale']);
	$pdf->SetFont($pdf_config['font']['subsubtitle']['family'],$pdf_config['font']['subsubtitle']['style'],$pdf_config['font']['subsubtitle']['size']);
	$pdf->WriteHTML($pdf_data['subsubtitle'],$pdf_config['scale']);
}

$pdf->WriteHTML($puff,$pdf_config['scale']);
$out=FSECTION_PDF_DATE;
$out.=$pdf_data['date'];
$pdf->WriteHTML($out,$pdf_config['scale']);
$pdf->WriteHTML($puff,$pdf_config['scale']);

$pdf->SetTextColor(0,0,0);
$pdf->WriteHTML($puffer,$pdf_config['scale']);

$pdf->SetFont($pdf_config['font']['content']['family'],$pdf_config['font']['content']['style'],$pdf_config['font']['content']['size']);
$pdf->WriteHTML($pdf_data['content'],$pdf_config['scale']);

//$pdf->Output($pdf_data['filename'],'');
$pdf->Output();
?>