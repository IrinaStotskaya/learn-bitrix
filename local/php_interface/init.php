<?
require_once("include/add_user.php");

AddEventHandler("main", "OnAfterUserAdd", Array("UserToGroup","addUser"));
