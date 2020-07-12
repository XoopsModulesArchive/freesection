<?php

/**
* $Id: admin.php,v 1.66 2007/02/03 16:23:35 malanciault Exp $
* Module: FreeSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_AM_FSECTION_ABOUT", "About");
define("_AM_FSECTION_ACTION", "Action");
define("_AM_FSECTION_ACTIVEUSERS", "Active users: %s");
define("_AM_FSECTION_ADD_OPT","Add %s  more sub categories");
define("_AM_FSECTION_ADD_OPT_SUBMIT","Add");
define("_AM_FSECTION_ADMIN_CATS", "Select categories that each group can moderate");
define("_AM_FSECTION_ADMINCOLMNGMT", "Categories management");
define("_AM_FSECTION_ALL", "All");
define("_AM_FSECTION_ALL_EXP", "<b>All status</b> : All articles of the module, whatever their status.");
define("_AM_FSECTION_ALLITEMS", "All articles in the module");
define("_AM_FSECTION_ALLITEMSMSG", "Select a status to see all available articles in the selected status.");
define("_AM_FSECTION_ALLOWCOMMENTS", "Can article be commented?");
define("_AM_FSECTION_APPROVE", "Approve");
define("_AM_FSECTION_APPROVED", "Approved");
define("_AM_FSECTION_APPROVED_MODERATE", "Moderate this submission");
define("_AM_FSECTION_APPROVESUB", "Approve submission");
define("_AM_FSECTION_APPROVING", "Approving");
define("_AM_FSECTION_ASC", "Ascending");
define("_AM_FSECTION_AVAILABLE", "<span style='font-weight: bold; color: green;'>Available</span>");
define("_AM_FSECTION_AVAILABLE_PAGE_WRAP", "Available pages to wrap");
define("_AM_FSECTION_AVAILABLE_PAGE_WRAP_DSC", "Here are the pages available for wrapping in the body. Click on the page(s) you would like to wrap. Works with XOOPS editor only for the moment. Add manually if you are on another editor.");
define("_AM_FSECTION_BACK2IDX", "Cancelled. Taking you back to the index");
define("_AM_FSECTION_BLOCKS", "Blocks management");
define("_AM_FSECTION_BLOCKSANDGROUPS", "Blocks and groups");
define("_AM_FSECTION_BLOCKSGROUPSADMIN", "Blocks and Groups Management");
define("_AM_FSECTION_BLOCKSTXT", "This module has the following blocks, which you can configure here or in the system module.");
define("_AM_FSECTION_BODY", "Body");
define("_AM_FSECTION_BODY_DSC", "Main body of the article<br><b>Input Options</b><span style='font-size: xx-small; font-weight: normal; display: block;'><p>1-Usual text & images with formatting</p>2- Pagewrap as follows<p>[pagewrap=filename.html]</p><p>Or</p>[pagewrap=filename_1.html]<br>[pagebreak] <i>this paginates</i><br>[pagewrap=filename_2.html]<br>etc ... <p>Or</p><p>[pagewrap=filename_1.html]<br>[pagewrap=filename_2.html]<br><i>this combines pages</i><p>In order to Pagewrap, upload the necessary html page(s) in yoursite.com/uploads/freesection/content, or simply use the pagewrap uploader at the bottom of the page.</p><p>Note that just below the body field, you will find a list of available pages that you can insert in the body by simply clicking on the desired page.</p></span>");
define("_AM_FSECTION_BODY_REQ", "Body*");
define("_AM_FSECTION_BODY_SELECTFILE", "Body : pagewrap");
define("_AM_FSECTION_BODY_SELECTFILE_DSC", "Select the file that this article will use as its body.");
define("_AM_FSECTION_BUTTON_CANCEL", "Cancel");
define("_AM_FSECTION_BUTTON_DELETE", "Delete");
define("_AM_FSECTION_BUTTON_EDIT", "Edit");
define("_AM_FSECTION_BUTTON_SEARCH", "Search");
define("_AM_FSECTION_BUTTON_SUBMIT", "Submit");
define("_AM_FSECTION_BUTTON_UPDATE", "Update");
define("_AM_FSECTION_BY", "by");
define("_AM_FSECTION_CANCEL", "Cancel");
define("_AM_FSECTION_CAT_ITEMS", "Articles");
define("_AM_FSECTION_CAT_ITEMS_DSC", "Articles within this category");
define("_AM_FSECTION_CATCOLNAME","Title");
define("_AM_FSECTION_CATCREATED", "New category was created and saved!");
define("_AM_FSECTION_CATEGORIES", "Categories");
define("_AM_FSECTION_CATEGORIES_DSC", "Here is a list of all created categories of the module.");
define("_AM_FSECTION_CATEGORIES_TITLE", "Created categories");
define("_AM_FSECTION_CATEGORY", "Category");
define("_AM_FSECTION_CATEGORY_CREATE", "Create a category");
define("_AM_FSECTION_CATEGORY_CREATE_INFO", "Fill the following form in order to create a new category. The newly created category will be automatically displayed in the user side.");
define("_AM_FSECTION_CATEGORY_DSC", "Article's Category.");
define("_AM_FSECTION_CATEGORY_EDIT_INFO", "You can edit this category. Modifications will immediatly take effect in the user side.");
define("_AM_FSECTION_CATEGORY_HEADER", "Category header");
define("_AM_FSECTION_CATEGORY_HEADER_DSC", "");
define("_AM_FSECTION_CATEGORY_META_DESCRIPTION", "Meta Description");
define("_AM_FSECTION_CATEGORY_META_DESCRIPTION_DSC", "In order to help Search Engines, you can customize the meta description you would like to use for this category. if you leave this field empty when creating a category, it will automatically be populated with the Description field of this category.");
define("_AM_FSECTION_CATEGORY_META_KEYWORDS", "Meta Keywords");
define("_AM_FSECTION_CATEGORY_META_KEYWORDS_DSC", "In order to help Search Engines, you can customize the keywords you would like to use for this category. if you leave this field empty when creating a category, it will automatically be populated with words from the Description field of this category.");
define("_AM_FSECTION_CATEGORY_REQ", "Category*");
define("_AM_FSECTION_CATEGORY_SAVE_ERROR", "An error occured while saving the category. Here is a list of error(s) :");
define("_AM_FSECTION_CATEGORY_SHORT_URL", "Short URL");
define("_AM_FSECTION_CATEGORY_SHORT_URL_DSC", "When using the SEO features of this module, you can specify a Short URL for this category. This field is optional.");
define("_AM_FSECTION_CATHEADER", "Categories Management");
define("_AM_FSECTION_CATID","ID");
define("_AM_FSECTION_CLEAR", "Clear");
define("_AM_FSECTION_CLONE_ITEM", "Duplicate article");
define("_AM_FSECTION_CLONE_NEW", "Duplicating article");
define("_AM_FSECTION_COLDESCRIPT", "Category description");
define("_AM_FSECTION_COLISDELETED", "Category %s has been deleted");
define("_AM_FSECTION_COLMODIFIED", "The category was successfully modified.");
define("_AM_FSECTION_COLPOSIT", "Category position");
define("_AM_FSECTION_CREATE", "Create");
define("_AM_FSECTION_CREATECATEGORY", "Create a new category");
define("_AM_FSECTION_CREATED", "Created");
define("_AM_FSECTION_CREATEITEM", "Create article");
define("_AM_FSECTION_CREATEITEM_PAGEWRAP", "Create page wrap");
define("_AM_FSECTION_CREATESMARTITEM", "Create a new article");
define("_AM_FSECTION_CREATETHEDIR", "Create the folder");
define("_AM_FSECTION_CREATINGNEW", "Creating new");
define("_AM_FSECTION_DATESUB", "Published date");
define("_AM_FSECTION_DATESUB_DSC", "Select the date of publication");
define("_AM_FSECTION_DB_CHECKTABLES", "Check tables");
define("_AM_FSECTION_DB_CURRENTVER", "Current version: <span class='currentVer'>%s</span>");
define("_AM_FSECTION_DB_DBVER", "Database Version %s");
define("_AM_FSECTION_DB_MSG_ADD_DATA", "Data added in table %s");
define("_AM_FSECTION_DB_MSG_ADD_DATA_ERR", "Error adding data in table %s");
define("_AM_FSECTION_DB_MSG_CHGFIELD", "Changing field %s in table %s");
define("_AM_FSECTION_DB_MSG_CHGFIELD_ERR", "Error changing field %s in table %s");
define("_AM_FSECTION_DB_MSG_CREATE_TABLE", "Table %s created");
define("_AM_FSECTION_DB_MSG_CREATE_TABLE_ERR", "Error creating table %s");
define("_AM_FSECTION_DB_MSG_NEWFIELD", "Successfully added field %s");
define("_AM_FSECTION_DB_MSG_NEWFIELD_ERR", "Error adding field %s");
define("_AM_FSECTION_DB_NEEDUPDATE", "Your database is out-of-date. Please upgrade your database tables!");
define("_AM_FSECTION_DB_NEEDUPDATE_WARNING", "WARNING : The SmartFactory strongly recommends you to backup all FreeSection tables before running this upgrade script.");
define("_AM_FSECTION_DB_NOUPDATE", "Your database is up-to-date. No updates are necessary.");
define("_AM_FSECTION_DB_UPDATE_DB", "Updating Database");
define("_AM_FSECTION_DB_UPDATE_ERR", "Errors updating to version %s");
define("_AM_FSECTION_DB_UPDATE_NOW", "Update Now!");
define("_AM_FSECTION_DB_UPDATE_OK", "Successfully updated to version %s");
define("_AM_FSECTION_DB_UPDATE_TO", "Updating to version %s");
define("_AM_FSECTION_DELETE", "Delete");
define("_AM_FSECTION_DELETE_CAT_CONFIRM", "Please note that by deleting a category, all the sub-categories and the articles of this category will be deleted as well, along with any comments that may have been posted related to ces articles. Are you sure you wish to delete this category ?");
define("_AM_FSECTION_DELETE_CAT_ERROR", "An error occured while deleting this category.");
define("_AM_FSECTION_DELETECOL", "Delete category");
define("_AM_FSECTION_DELETEFILE","Delete file");
define("_AM_FSECTION_DELETEITEM", "Delete article");
define("_AM_FSECTION_DELETETHISFILE","Are you sure you want to delete this file?");
define("_AM_FSECTION_DELETETHISITEM", "Delete this file?");
define("_AM_FSECTION_DESC", "Descending");
define("_AM_FSECTION_DESCRIP", "Category description");
define("_AM_FSECTION_DESCRIPTION", "Description");
define("_AM_FSECTION_DIRCREATED", "Folder successfully created ");
define("_AM_FSECTION_DIRNOTCREATED", "The folder could not be created ");
define("_AM_FSECTION_EDITCOL", "Edit category");
define("_AM_FSECTION_EDITFILE","Edit file");
define("_AM_FSECTION_EDITING", "Editing");
define("_AM_FSECTION_EDITITEM", "Edit the article");
define("_AM_FSECTION_ERROR", " An error has occurred.");
define("_AM_FSECTION_ERROR_ITEM_NOT_SAVED", "An error occured. The article was not saved in the database.");
define("_AM_FSECTION_FDELETED", "File deleted");
define("_AM_FSECTION_FILE", "Files");
define("_AM_FSECTION_FILE_ADD", "Adding a file");
define("_AM_FSECTION_FILE_ADDING", "Adding a new file");
define("_AM_FSECTION_FILE_ADDING_DSC", "Please fill the following form in order to add a new file to this article.");
define("_AM_FSECTION_FILE_DELETE_ERROR","An error occured while deleting the file.");
define("_AM_FSECTION_FILE_DESCRIPTION", "Description");
define("_AM_FSECTION_FILE_DESCRIPTION_DSC", "Description of the file to be uploaded.");
define("_AM_FSECTION_FILE_EDITING", "Editing a file");
define("_AM_FSECTION_FILE_EDITING_DSC", "You can edit this file. Modifications will immediatly take effect in the user side.");
define("_AM_FSECTION_FILE_EDITING_ERROR", "An error occured while updating the file.");
define("_AM_FSECTION_FILE_EDITING_SUCCESS", "The file was successfully modified.");
define("_AM_FSECTION_FILE_INFORMATIONS", "File's informations");
define("_AM_FSECTION_FILE_NAME", "Name");
define("_AM_FSECTION_FILE_NAME_DSC", "Name that will be used to identify the file.");
define("_AM_FSECTION_FILE_STATUS", "File visible ?");
define("_AM_FSECTION_FILE_STATUS_DSC", "if you select no, the file will not be visible from the user side.");
define("_AM_FSECTION_FILE_TO_UPLOAD", "File to upload :");
define("_AM_FSECTION_FILE_UPLOAD_ANOTHER", "Upload again");
define("_AM_FSECTION_FILEISDELETED","The file has been succesfully deleted") ;
define("_AM_FSECTION_FILENAME", "File name");
define("_AM_FSECTION_FILES_LINKED", "Files linked to this article");
define("_AM_FSECTION_FILEUPLOAD_ERROR", "An error occured while uploading the file.");
define("_AM_FSECTION_FILEUPLOAD_SUCCESS", "The file was successfully uploaded.");
define("_AM_FSECTION_FINDUSERS", "Find users");
define("_AM_FSECTION_GOMOD", "Go to module");
define("_AM_FSECTION_GROUPS", "Groups management");
define("_AM_FSECTION_GROUPSINFO", "Configure module and blocks permissions for each group");
define("_AM_FSECTION_HELP", "Help");
define("_AM_FSECTION_HITS", "Hits");
define("_AM_FSECTION_ICO_DELETE", "Delete");
define("_AM_FSECTION_ICO_EDIT", "Edit");
define("_AM_FSECTION_ICO_OFFLINE", "Offline");
define("_AM_FSECTION_ICO_ONLINE", "Online");
define("_AM_FSECTION_ID", "Id");
define("_AM_FSECTION_IMAGE", "Category image");
define("_AM_FSECTION_IMAGE_DSC", "Image representing the category");
define("_AM_FSECTION_IMAGE_ITEM", "Article image");
define("_AM_FSECTION_IMAGE_ITEM_DSC", "Image representing the article");
define("_AM_FSECTION_IMAGE_UPLOAD", "Image upload");
define("_AM_FSECTION_IMAGE_UPLOAD_DSC", "Select an image on your computer. This image will be uploaded to the site and set as the category image.");
define("_AM_FSECTION_IMAGE_UPLOAD_ITEM_DSC", "Select an image on your computer. <br />This image will be uploaded to the site <br />and set as the article image.");
define("_AM_FSECTION_IMAGEPATH", "Category storing the category images : ");

define("_AM_FSECTION_IMPORT", "Import");
define("_AM_FSECTION_IMPORTED_COMMENT", "Comment '%s' imported.");
define("_AM_FSECTION_IMPORTED_COMMENT_ERROR", "Error while importing comment '%s'");
define("_AM_FSECTION_IMPORT_COMMENTS", "Importing comments of the module");
define("_AM_FSECTION_IMPORT_ALL_PARTNERS", "All articles");
define("_AM_FSECTION_IMPORTED_ARTICLE_FILE", "Linked file %s was imported");
define("_AM_FSECTION_IMPORT_ARTICLE_ERROR", "Error while importing article <em>%s</em>");
define("_AM_FSECTION_IMPORT_ARTICLE_WRAP", "The pagewraped file %s has been copied in the module's content folder.");
define("_AM_FSECTION_IMPORT_AUTOAPPROVE", "Auto-approve");
define("_AM_FSECTION_IMPORT_BACK", "Back to the import page");
define("_AM_FSECTION_IMPORT_CATEGORIES", "Categories to be imported");
define("_AM_FSECTION_IMPORT_CATEGORIES_DSC", "Here are the categories that will be imported in FreeSection");
define("_AM_FSECTION_IMPORT_CATEGORY_ERROR", "Error while importing category <em>%s</em>.");
define("_AM_FSECTION_IMPORT_CATEGORY_SUCCESS", "Category <em>%s</em> imported successfully.");
define("_AM_FSECTION_IMPORT_ERROR", "An error occured while importing the article.");
define("_AM_FSECTION_IMPORT_FILE_NOT_FOUND", "Import file not found at <b>%s</b>");
define("_AM_FSECTION_IMPORT_FROM", "Importing from %s");
define("_AM_FSECTION_IMPORT_GOTOMODULE", "Go FreeSection's index page");
define("_AM_FSECTION_IMPORT_INFO", "You can import articles directly in FreeSection. Simply select from which module you would like to import the articles and click on the 'Import' button.<br><b>Run this operation only once, otherwise, the articles will be dupplicated</b>");
define("_AM_FSECTION_IMPORT_MODULE_FOUND", "%s module was found. There are %s articles and %s categories that can be imported.");
define("_AM_FSECTION_IMPORT_MODULE_FOUND_NO_ITEMS", "%s module was found but there are no article to import.");
define("_AM_FSECTION_IMPORT_NOCATSELECTED", "No category was selected for import.");
define("_AM_FSECTION_IMPORT_NO_MODULE", "As no other supported article module are installed on this site, no article can be imported.");
define("_AM_FSECTION_IMPORT_PARENT_CATEGORY", "Parent category");
define("_AM_FSECTION_IMPORT_PARENT_CATEGORY_DSC", "Import selected categories in this parent category.");
define("_AM_FSECTION_IMPORT_PARTNER_ERROR", "An error occured while importing '%s'.");
define("_AM_FSECTION_IMPORT_RESULT", "Here is the result of the import.");
define("_AM_FSECTION_IMPORT_SETTINGS", "Import Settings");
define("_AM_FSECTION_IMPORT_SUCCESS", "The articles were successfully imported in the module.");
define("_AM_FSECTION_IMPORT_TITLE", "Import Articles");
define("_AM_FSECTION_IMPORTED_ARTICLE", "Imported article : <em>%s</em>");
define("_AM_FSECTION_IMPORTED_ARTICLES", "Articles imported : <em>%s</em>");
define("_AM_FSECTION_IMPORTED_CATEGORY", "Imported category : <em>%s</em>");
define("_AM_FSECTION_IMPORTED_CATEGORIES", "Categories imported : <em>%s</em>");
define("_AM_FSECTION_IMPORT_SELECTION", "Import Selection");
define("_AM_FSECTION_IMPORT_SELECT_FILE", "Articles");
define("_AM_FSECTION_IMPORT_SELECT_FILE_DSC", "Choose the module from which to import the articles.");

define("_AM_FSECTION_INACTIVEUSERS", "Inactive users: %s");
define("_AM_FSECTION_INDEX", "Index");
define("_AM_FSECTION_INVENTORY", "Module Summary");
define("_AM_FSECTION_ITEM", "Article");
define("_AM_FSECTION_ITEM_CREATING", "Creating a new article");
define("_AM_FSECTION_ITEM_CREATING_DSC", "Please fill the following form in order to create a new article.");
define("_AM_FSECTION_ITEM_DELETE_ERROR", "An error occured while deleting this article.");
define("_AM_FSECTION_ITEM_DUPLICATING", "Duplicating an article");
define("_AM_FSECTION_ITEM_DUPLICATING_DSC", "Edit the present form in order to create a new article based on the original article.");
define("_AM_FSECTION_ITEM_EDIT", "Edit this article");
define("_AM_FSECTION_ITEM_INFORMATIONS", "Class action suit informations");
define("_AM_FSECTION_ITEM_META_DESCRIPTION", "Meta Description");
define("_AM_FSECTION_ITEM_META_DESCRIPTION_DSC", "In order to help Search Engines, you can customize the meta description you would like to use for this article. if you leave this field empty when creating a category, it will automatically be populated with the Summary field of this article.");
define("_AM_FSECTION_ITEM_META_KEYWORDS", "Meta Keywords");
define("_AM_FSECTION_ITEM_META_KEYWORDS_DSC", "In order to help Search Engines, you can customize the keywords you would like to use for this article. if you leave this field empty when creating an article, it will automatically be populated with words from the Summary field of this article.");
define("_AM_FSECTION_ITEM_RECEIVED_NEED_APPROVAL", "Your article has been sent and will be published upon approval by a moderator.<br />Thank you for your contribution !");
define("_AM_FSECTION_ITEM_REJECTED", "This article as been set as rejected.");
define("_AM_FSECTION_ITEM_SHORT_URL", "Short URL");
define("_AM_FSECTION_ITEM_SHORT_URL_DSC", "When using the SEO features of this module, you can specify a Short URL for this article. This field is optional.");
define("_AM_FSECTION_ITEMCAT", "Category");
define("_AM_FSECTION_ITEMCATEGORYNAME", "Category");
define("_AM_FSECTION_ITEMCOLNAME", "Title");
define("_AM_FSECTION_ITEMCREATEDOK", "The article was successfully created and published !");
define("_AM_FSECTION_ITEMDESC", "Description");
define("_AM_FSECTION_ITEMID", "ID");
define("_AM_FSECTION_ITEMISDELETED", "The article has been deleted.");
define("_AM_FSECTION_ITEMMODIFIED", "The article was successfully modified!");
define("_AM_FSECTION_ITEMNOTCREATED", "Sorry. It was not possible to create this article!");
define("_AM_FSECTION_ITEMNOTUPDATED", "Sorry. It was not possible to update the article!");
define("_AM_FSECTION_ITEMS", "Articles");
define("_AM_FSECTION_LIMIT", "Users per page");
define("_AM_FSECTION_MESSAGE_ADD_MIME_ERROR", "Error: the mimetype was not added.");
define("_AM_FSECTION_MESSAGE_DELETE_MIME_ERROR", "Error: the mimetype was not deleted.");
define("_AM_FSECTION_MESSAGE_EDIT_MIME_ERROR", "Error: the mimetype was not updated.");
define("_AM_FSECTION_MESSAGE_NO_ID", "Error: id was not specified.");
define("_AM_FSECTION_MESSAGE_NO_VALUE", "Error: the mimetype value was not specified.");
define("_AM_FSECTION_MIME_ADD_TITLE", "Add a mimetype");
define("_AM_FSECTION_MIME_ADMIN", "Admin");
define("_AM_FSECTION_MIME_ADMINF", "Allowed Admin Mimetype");
define("_AM_FSECTION_MIME_ADMINFINFO", "<b>Mimetypes that are available for Admin uploads</b>");
define("_AM_FSECTION_MIME_CANCEL", "Cancel");
define("_AM_FSECTION_MIME_CLEAR", "Reset");
define("_AM_FSECTION_MIME_CREATE", "Create");
define("_AM_FSECTION_MIME_CREATED", "Mimetype Information Created");
define("_AM_FSECTION_MIME_CREATEF", "Create Mimetype");
define("_AM_FSECTION_MIME_DELETE", "Delete");
define("_AM_FSECTION_MIME_DELETETHIS", "Delete Selected Mimetype?");
define("_AM_FSECTION_MIME_EDIT_TITLE", "Edit mimetype");
define("_AM_FSECTION_MIME_EXT", "EXT");
define("_AM_FSECTION_MIME_EXTF", "File Extension");
define("_AM_FSECTION_MIME_EXTFIND", "Search File Extension<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter file extension you wish to search.</span></div>");
define("_AM_FSECTION_MIME_FINDIT", "Get Extension!");
define("_AM_FSECTION_MIME_FINDMIMETYPE", "Find New Mimetype?");
define("_AM_FSECTION_MIME_ID", "ID");
define("_AM_FSECTION_MIME_INFOTEXT", "<ul><li>New mimetypes can be created, edit or deleted easily via this form.</li> <li>Search for a new mimetypes via an external website.</li> <li>View displayed mimetypes for Admin and User uploads.</li> <li>Change mimetype upload status.</li></ul>");
define("_AM_FSECTION_MIME_MANAGE_TITLE", "Mimetypes Management");
define("_AM_FSECTION_MIME_MIMEDELETED", "Mimetype %s has been deleted");
define("_AM_FSECTION_MIME_MODIFIED", "Mimetype Information Modified");
define("_AM_FSECTION_MIME_MODIFY", "Modify");
define("_AM_FSECTION_MIME_MODIFYF", "Modify Mimetype");
define("_AM_FSECTION_MIME_NAME", "Application Type");
define("_AM_FSECTION_MIME_NAMEF", "Application Type/Name<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter application associated with this extension.</span></div>");
define("_AM_FSECTION_MIME_NOMIMEINFO", "No mimetypes selected.");
define("_AM_FSECTION_MIME_SEARCH", "Mimetypes Search");
define("_AM_FSECTION_MIME_TYPEF", "Mimetypes<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter each mimetype associated with the file extension. Each mimetype must be seperated with a space.</span></div>");
define("_AM_FSECTION_MIME_USER", "User");
define("_AM_FSECTION_MIME_USERF", "Allowed User Mimetype");
define("_AM_FSECTION_MIME_USERFINFO", "<b>Mimetypes that are available for User uploads</b>");
define("_AM_FSECTION_MIMETYPES", "Mimetypes");
define("_AM_FSECTION_MINDEX_ACTION", "Action");
define("_AM_FSECTION_MINDEX_PAGE", "<b>Page</b> ");
define("_AM_FSECTION_MODADMIN", "Module Admin :");
define("_AM_FSECTION_MODIFY", "Modify");
define("_AM_FSECTION_MODIFYCAT", "Modify category");
define("_AM_FSECTION_MODIFYTHISCAT", "Modify this category?");
define("_AM_FSECTION_NB_SUBCATS","Number of categories to add:<br><br>Enter number then press 'Add'");
define("_AM_FSECTION_NEED_CATEGORY_ITEM", "To create an article, you must first create a category.");
define("_AM_FSECTION_NO", "No");
define("_AM_FSECTION_NOCAT", "No categories to display");
define("_AM_FSECTION_NOCOLTOEDIT", "There are no categories to edit!");
define("_AM_FSECTION_NOFILE", "This article does not have any attached files.");
define("_AM_FSECTION_NOFILESELECTED", "No file selected.");
define("_AM_FSECTION_NOFOUND", "No users match the required string.");
define("_AM_FSECTION_NOITEMS", "There are no published articles.");
define("_AM_FSECTION_NOITEMS_OFFLINE", "There are no offline articles.");
define("_AM_FSECTION_NOITEMS_REJECTED", "There are no rejected articles.");
define("_AM_FSECTION_NOITEMS_SUBMITTED", "There are no submitted article.");
define("_AM_FSECTION_NOITEMSELECTED", "No article selected !");
define("_AM_FSECTION_NOITEMSSEL", "Sorry. There are no articles in the selected state.");
define("_AM_FSECTION_NONE", "None");
define("_AM_FSECTION_NOPERMSSET", "Permission cannot be set : No categories created yet! Please create a category first.");
define("_AM_FSECTION_NOSUBCAT","There is no sub categories created yet");
define("_AM_FSECTION_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Not available</span>");
define("_AM_FSECTION_NOTUPDATED", "There was an error updating the database!");
define("_AM_FSECTION_OFFLINE", "Offline");
define("_AM_FSECTION_OFFLINE_CREATED_SUCCESS", "The article has been successfully created and put offline.");
define("_AM_FSECTION_OFFLINE_EXP", "<b>Offline articles</b> : Published articles that have been put offline, temporarily or not. Offline articles are not displayed in the user side.");
define("_AM_FSECTION_OFFLINE_FIELD", "Offline<span style='font-size: xx-small; font-weight: normal; display: block;'>Select 'No' to put this article back<br />on line.</span>");
define("_AM_FSECTION_OFFLINE_MOD_SUCCESS", "The article has been successfully put offline.");
define("_AM_FSECTION_OFFLINEEDITING", "Editing an offline article");
define("_AM_FSECTION_OFFLINEEDITING_INFO", "You can edit this offline article. Modifications will be saved for this article. However, if you would like to display this article in the user side, you will need to set the status to <b>Published</b>.");
define("_AM_FSECTION_OPTS", "Preferences");
define("_AM_FSECTION_PAGEWRAP","Page wrap");
define("_AM_FSECTION_PAGEWRAPDSC", "A page wrap is the ability to link an article with a content file. Doing this, the content of the article is directly taken from that file and you don't need to add the content manually. This is usefull when you have already formated HTML or PHP files.");
define("_AM_FSECTION_PARENT_CATEGORY_EXP", "Parent category<span style='font-size: xx-small; font-weight: normal; display: block;'>Select a parent to make this a sub-category.</span>");
define("_AM_FSECTION_PATH", "Path");
define("_AM_FSECTION_PATH_CONTENT", "Page wrap files");
define("_AM_FSECTION_PATH_FILES", "Attached files");
define("_AM_FSECTION_PATH_IMAGES", "General images");
define("_AM_FSECTION_PATH_IMAGES_CATEGORY", "Category images");
define("_AM_FSECTION_PATH_IMAGES_ITEM", "Articles images");
define("_AM_FSECTION_PATH_ITEM", "Upload items");
define("_AM_FSECTION_PATHCONFIGURATION", "Module Path Configuration");
define("_AM_FSECTION_PERMERROR", "ERROR: cannot access file directory. Please chmod the uploads/freesection/content directory with value 755 (or 777 depending on your environement)");
define("_AM_FSECTION_PERMISSIONS", "Permissions");
define("_AM_FSECTION_PERMISSIONS_APPLY_ON_ITEMS", "Apply read permissions on articles<span style='font-size: xx-small; font-weight: normal; display: block;'>Apply the above Read Permissions on all<br />articles within that category, overriding their<br />current permissions.<br /><b>Please note that this is a one time action only, and not a property</b></span>");
define("_AM_FSECTION_PERMISSIONS_CAT_READ", "Read permissions<span style='font-size: xx-small; font-weight: normal; display: block;'>Groups that will have permissions to see<br />this Category, as well as any articles<br />inside that category.</span>");
define("_AM_FSECTION_PERMISSIONS_CAT_SUBMIT", "Articles submission permissions");
define("_AM_FSECTION_PERMISSIONS_CAT_SUBMIT_DSC", "Groups that will be allowed to submit articles within this category. Preference '[PERMISSIONS] User submissions' must be enabled.");
define("_AM_FSECTION_PERMISSIONS_ITEM", "Permissions");
define("_AM_FSECTION_PERMISSIONS_ITEM_DSC", "Groups that will have permissions to see this item.");
define("_AM_FSECTION_PERMISSIONSADMIN", "Permissions Management");
define("_AM_FSECTION_PERMISSIONSADMINMAN", "Permissions to moderate categories");
define("_AM_FSECTION_PERMISSIONSSUBMIT", "Permissions to submit articles");
define("_AM_FSECTION_PERMISSIONSSUBMIT_DESC", "For each group, select the categories in which they will be able to submit articles");
define("_AM_FSECTION_PERMISSIONSVIEWMAN", "Permissions to view categories");
define("_AM_FSECTION_PUBLISH", "Publish");
define("_AM_FSECTION_PUBLISHED", "Published");
define("_AM_FSECTION_PUBLISHED_DSC", "Here is a list of all published articles available in the user side.");
define("_AM_FSECTION_PUBLISHED_EXP", "<b>Published articles</b> : articles that have been approved and are displayed in the user side.");
define("_AM_FSECTION_PUBLISHED_MOD_SUCCESS", "The article has been successfully modified.");
define("_AM_FSECTION_PUBLISHEDEDITING", "Editing a published article");
define("_AM_FSECTION_PUBLISHEDEDITING_INFO", "You can edit this article. Modifications will immediatly take effect in the user side.");
define("_AM_FSECTION_PUBLISHEDITEMS", "Published articles");
define("_AM_FSECTION_REALNAME", "Real name");
define("_AM_FSECTION_REJECTED", "Rejected");
define("_AM_FSECTION_REJECTED_EDIT", "Edit this rejected article");
define("_AM_FSECTION_REJECTED_ITEM", "Rejected article");
define("_AM_FSECTION_REJECTED_ITEM_EXP", "<b>Rejected articles</b> : articles that have been submitted by user, but rejected by a moderator. Rejected articles are not displayed in the user side.");
define("_AM_FSECTION_RESULTS", "Search results");
define("_AM_FSECTION_RUSUREDELF", "Are you sure you want to delete this file ?");
define("_AM_FSECTION_SCATEGORYNAME","Create subcategories<br><br><span style='font-size: xx-small; font-weight: normal; display: block;'>Fill the text box with the names of sub categories to create.<br>Leave blank to not create subcategory. To create more, enter the how much more to create then press 'Add'</span>");
define("_AM_FSECTION_SEARCH","Search");
define("_AM_FSECTION_SEARCH_PW","Only HTML, HTM ou XHTML extensions are allowed");
define("_AM_FSECTION_SELECT_SORT", "Sort order");
define("_AM_FSECTION_SELECT_STATUS", "Status");
define("_AM_FSECTION_SELECTFILE","Select a file");
define("_AM_FSECTION_SETMPERM", "Set the permission");
define("_AM_FSECTION_SHOWING", "Showing");
define("_AM_FSECTION_STATUS", "Status");
define("_AM_FSECTION_STATUS0", "No status");
define("_AM_FSECTION_STATUS_DSC", "Select the status of this article");
define("_AM_FSECTION_SUBCAT_CAT","Sub categories");
define("_AM_FSECTION_SUBCAT_CAT_DSC","Here is the list of the sub categories of this category");
define("_AM_FSECTION_SUBCATEGORY_SAVE_ERROR","An error occured while saving the category. Here is a list of error(s):");
define("_AM_FSECTION_SUBDESCRIPT","Description");
define("_AM_FSECTION_SUBMISSION_MODERATE", "Moderate this article");
define("_AM_FSECTION_SUBMISSIONSMNGMT", "Submitted articles");
define("_AM_FSECTION_SUBMIT", "Submit");
define("_AM_FSECTION_SUBMITTED", "Submitted");
define("_AM_FSECTION_SUBMITTED_APPROVE_SUCCESS", "The submitted article has been published in the user side.");
define("_AM_FSECTION_SUBMITTED_EXP", "<b>Submitted articles</b> : Articles that have been submitted by users. Once approved, they will be displayed in the user side.");
define("_AM_FSECTION_SUBMITTED_INFO", "This article has been submitted by a member. You can make some modifications if you'd like. Upon approval, this article will be displayed in the user side of this site.");
define("_AM_FSECTION_SUBMITTED_TITLE", "Approving a submitted article");
define("_AM_FSECTION_SUMMARY", "Introduction");
define("_AM_FSECTION_SUMMARY_DSC", "Article's introduction");
define("_AM_FSECTION_TEXT_ASCENDING", "Ascending");
define("_AM_FSECTION_TEXT_DESCENDING", "Descending");
define("_AM_FSECTION_TEXT_NO_RECORDS", "No records found");
define("_AM_FSECTION_TEXT_NUMBER_PER_PAGE", "Number Per Page:");
define("_AM_FSECTION_TEXT_ORDER_BY", "Order By:");
define("_AM_FSECTION_TEXT_SEARCH_BY", "Search By:");
define("_AM_FSECTION_TEXT_SEARCH_MIME", "Search Mimetypes");
define("_AM_FSECTION_TEXT_SEARCH_TEXT", "Search Text:");
define("_AM_FSECTION_TEXT_SORT_BY", "Sort By:");
define("_AM_FSECTION_TITLE", "Title");
define("_AM_FSECTION_TITLE_REQ", "Title*");
define("_AM_FSECTION_TOTAL_OFFLINE", "Offline articles: ");
define("_AM_FSECTION_TOTALCAT", "Categories :");
define("_AM_FSECTION_TOTALPUBLISHED", "Published articles: ");
define("_AM_FSECTION_TOTALSUBMITTED", "Submitted articles: ");
define("_AM_FSECTION_UID", "Poster name");
define("_AM_FSECTION_UID_DSC", "Select the name of the poster");
define("_AM_FSECTION_UNAME", "User name");
define("_AM_FSECTION_UPDATE_MODULE", "Update module");
define("_AM_FSECTION_UPLOAD", "Upload");
define("_AM_FSECTION_UPLOAD_FILE", "Upload a file");
define("_AM_FSECTION_UPLOAD_FILE_NEW", "Upload a new file");
define("_AM_FSECTION_UPLOADED_DATE", "Uploaded");
define("_AM_FSECTION_UPLOADPATH", "Category storing the uploaded files attaches to articles : ");
define("_AM_FSECTION_VIEW_CATS", "Select categories that each group can view");
define("_AM_FSECTION_WEIGHT", "Weight");
define("_AM_FSECTION_YES", "Yes");
define("_MD_FSECTION_CATEGORY_ITEM", "Categorie<span style='font-size: xx-small; font-weight: normal; display: block;'>Category to which belong category.</span>");

define("_AM_FSECTION_PARTIAL_VIEW", "Give partial view access to these groups");
define("_AM_FSECTION_PARTIAL_VIEWDSC", "if a group does not have read permission for this article, you can still give to that group partial view access by checking its checkbox here. Please note that these groups also needs to have module access permission as well as parent category read permission.");

define("_AM_FSECTION_TOOLS", "Tools");
define("_AM_FSECTION_CONFIGURE_READ_PERMISSIONS", "Configure read permissions");
define("_AM_FSECTION_CONFIGURE_READ_PERMISSIONS_EXP", "This tool allows you to quickly configure read permissions for ALL categories and ALL articles at once. ALl permissions will first be deleted and then replaced by the options your will have selected.<br /><br /><b>Please use this tool with care !</b>");
define("_AM_FSECTION_FULLACCESS", "Categories and articles read permissions");
define("_AM_FSECTION_PERMISSIONS_UPDATED", "Permissions updated.");

define("_AM_FSECTION_ITEM_TAGS", "Tags");
define("_AM_FSECTION_ITEM_TAGS_DSC", "");

define("_AM_FSECTION_ITEM_UPLOAD_FILE", "Link a file to this article");
define("_AM_FSECTION_ITEM_UPLOAD_FILE_DSC", "Select a file from your computer to attach it to this article. You will be able to add more files once the article has been created. Simply edit the article and scroll at the bottom of the page to see the Add file button.<br /><br /> For example, you could add a Word document or an Excel document. You can even upload a Flash file and it will be directly embeded into your article ! ");

define("_AM_FSECTION_XOOPS_PRO", "Do you need help with this module ?<br />Do you need new features not yet available ?");

define("_AM_FSECTION_NEW_FEATURE", "New feature !!!");

?>