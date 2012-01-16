<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
  
<fieldset class="form-stacked">

<div class="clearfix">
<?php echo $form->label('title', t('Title'));?>
<div class="input">

<?php echo $form->text('title',$title );?>
<?php //echo $form->text('title','reviews');?>
</div>

<div class="clearfix">

<?php echo $form->label('requireApproval', t('Comments Require Moderator Approval?'));?>

<div class="input">
<?php echo $form->radio("requireApproval", 1, $requireApproval);?><?php echo t('Yes');?>
<?php echo "<br/>"?>
<?php echo $form->radio("requireApproval", 0, $requireApproval);?><?php echo t('No')?>
</div><!--class="input"-->
</div><!--clearfix --> 

<div class="clearfix">
<?php echo $form->label('displayGuestBookForm',t('Posting Reviews is Enabled?'));?>
<div class="input">
<?php echo $form->radio("displayGuestBookForm", 1, $displayGuestBookForm);?><?php echo t('Yes')?>
<?php echo "<br/>"?>
<?php echo $form->radio("displayGuestBookForm", 0, $displayGuestBookForm);?><?php echo t('No');?>
</div><!--class="input"-->
</div><!--clearfix --> 

<div class="clearfix">
<?php echo $form->label('authenticationRequired',t('Authentication Required to Post?'));?>
<div class="input">
<?php echo $form->radio("authenticationRequired", 0, $authenticationRequired);?><?php echo t(' Email Only')?>
<?php echo "<br/>"?>
<?php echo $form->radio("authenticationRequired", 1, $authenticationRequired); ?><?php echo t(' Users must login to C5')?>
</div><!--class="input"-->
</div><!--clearfix --> 

<div class="clearfix">

<?php echo $form->label('displayCaptcha',t('Solving a <a href="%s" target="_blank">CAPTCHA</a> Required to Post?', 'http://en.wikipedia.org/wiki/Captcha'));?>
<div class="input">
<?php echo $form->radio("displayCaptcha",1, $displayCaptcha);?><?php  echo t('Yes')?>
<?php echo "<br/>"?>
<?php echo $form->radio("displayCaptcha",0, $displayCaptcha );?><?php  echo t('No')?>
</div><!--class="input"-->
</div><!--clearfix -->
 
<div class="clearfix">
<?php echo $form->label('notifyEmail','Alert Email Address when Review Posted' );?>
<div class="input">
<?php echo $form->text("notifyEmail", $notifyEmail)?>

</div><!--class="input"-->
</div><!--clearfix --> 

</fieldset> 



