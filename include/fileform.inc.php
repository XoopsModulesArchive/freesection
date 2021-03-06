<?php

/**
* $Id: fileform.inc.php,v 1.13 2007/02/10 01:41:27 malanciault Exp $
* Module: FreeSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";

global $freesection_file_handler;

$fileid = isset($_GET['fileid']) ? intval($_GET['fileid']) : 0;

if ($fileid != 0) {
	$fileObj = new FreesectionFile($fileid);
} else {
	$fileObj =& $freesection_file_handler->create();
}

// FILES UPLOAD FORM
$files_form = new XoopsThemeForm(_MD_FSECTION_UPLOAD_FILE, "form", xoops_getenv('PHP_SELF'));
$files_form->setExtra( "enctype='multipart/form-data'" ) ;

// NAME

$name_text = new XoopsFormText(_MD_FSECTION_FILENAME, 'name', 50, 255, $fileObj->name());
$name_text->setDescription(_MD_FSECTION_FILE_NAME_DSC);
$files_form->addElement($name_text, true);

// DESCRIPTION
$description_text = new XoopsFormTextArea(_MD_FSECTION_FILE_DESCRIPTION, 'description', $fileObj->description());
$description_text->setDescription(_MD_FSECTION_FILE_DESCRIPTION_DSC);
$files_form->addElement($description_text, 7, 60);

// FILE TO UPLOAD
if ($fileid == 0) {
	$file_box = new XoopsFormFile(_MD_FSECTION_FILE_TO_UPLOAD, "userfile", 0);
	$file_box->setExtra( "size ='50'") ;
	$files_form->addElement($file_box);
}

$status_select = new XoopsFormRadioYN(_MD_FSECTION_FILE_STATUS, 'file_status', _FSECTION_STATUS_FILE_ACTIVE);
$status_select->setDescription(_MD_FSECTION_FILE_STATUS_DSC);
$files_form->addElement($status_select);

$files_button_tray = new XoopsFormElementTray('', '');
$files_hidden = new XoopsFormHidden('op', 'uploadfile');
$files_button_tray->addElement($files_hidden);

if ($fileid == 0) {
	$files_butt_create = new XoopsFormButton('', '', _MD_FSECTION_UPLOAD, 'submit');
	$files_butt_create->setExtra('onclick="this.form.elements.op.value=\'uploadfile\'"');
	$files_button_tray->addElement($files_butt_create);

	$files_butt_another = new XoopsFormButton('', '', _MD_FSECTION_FILE_UPLOAD_ANOTHER, 'submit');
	$files_butt_another->setExtra('onclick="this.form.elements.op.value=\'uploadanother\'"');
	$files_button_tray->addElement($files_butt_another);
} else {
	$files_butt_create = new XoopsFormButton('', '', _MD_FSECTION_MODIFY, 'submit');
	$files_butt_create->setExtra('onclick="this.form.elements.op.value=\'modify\'"');
	$files_button_tray->addElement($files_butt_create);
}

$files_butt_clear = new XoopsFormButton('', '', _MD_FSECTION_CLEAR, 'reset');
$files_button_tray->addElement($files_butt_clear);

$butt_cancel = new XoopsFormButton('', '', _MD_FSECTION_CANCEL, 'button');
$butt_cancel->setExtra('onclick="history.go(-1)"');
$files_button_tray->addElement($butt_cancel);

$files_form->addElement($files_button_tray);

// fileid
$files_form->addElement(new XoopsFormHidden('fileid', $fileid));

// itemid
$files_form->addElement(new XoopsFormHidden('itemid', $itemid));

$files_form->assign($xoopsTpl);

?>