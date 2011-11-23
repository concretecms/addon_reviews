<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
//$from = array($fromEmail);
$body = t("
There is a new review on a guestbook in your Concrete5 website.

%s

To view this review, visit: 
%s 

", $comment, $guestbookURL);
?>
