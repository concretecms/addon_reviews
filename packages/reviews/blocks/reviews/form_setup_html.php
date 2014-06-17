<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
  
<fieldset class="form-stacked">

<div class="clearfix">
	<?php echo $form->label('title', t('Title'));?>
	<div class="input">
		<?php echo $form->text('title',$title );?>
	</div>
</div>

<div class="clearfix">
	<?php echo $form->label('requireApproval', t('Comments Require Moderator Approval?'));?>
	<div class="input">
	<ul class="inputs-list">
		<li><?php echo $form->radio("requireApproval", 1, $requireApproval);?> <span><?php echo t('Yes');?></span></li>
		<li><?php echo $form->radio("requireApproval", 0, $requireApproval);?> <span><?php echo t('No')?></span></li>
	</ul>
</div>
</div><!--clearfix --> 

<div class="clearfix">
	<?php echo $form->label('displayGuestBookForm',t('Posting Reviews is Enabled?'));?>
	<div class="input">
	<ul class="inputs-list">
		<li><?php echo $form->radio("displayGuestBookForm", 1, $displayGuestBookForm);?> <span><?php echo t('Yes')?></span></li>
		<li><?php echo $form->radio("displayGuestBookForm", 0, $displayGuestBookForm);?> <span><?php echo t('No');?></span></li>
	</ul>
	</div><!--class="input"-->
</div><!--clearfix --> 

<div class="clearfix">
	<?php echo $form->label('authenticationRequired',t('Authentication Required to Post?'));?>
	<div class="input">
	<ul class="inputs-list">
		<li><?php echo $form->radio("authenticationRequired", 0, $authenticationRequired);?> <span><?php echo t('Email Only')?></span></li>
		<li><?php echo $form->radio("authenticationRequired", 1, $authenticationRequired); ?> <span><?php echo t('Users must login to concrete5')?></span></li>
	</ul>	
	</div><!--class="input"-->
</div><!--clearfix --> 

<div class="clearfix">
	<?php echo $form->label('displayCaptcha',t('Solving a <a href="%s" target="_blank">CAPTCHA</a> Required to Post?', 'http://en.wikipedia.org/wiki/Captcha'));?>
	<div class="input">
	<ul class="inputs-list">
		<li><?php echo $form->radio("displayCaptcha",1, $displayCaptcha);?> <span><?php  echo t('Yes')?></span></li>
		<li><?php echo $form->radio("displayCaptcha",0, $displayCaptcha );?> <span><?php  echo t('No')?></span></li>
	</ul>
	</div><!--class="input"-->
</div><!--clearfix -->
 
<div class="clearfix">
	<?php echo $form->label('notifyEmail',t('Alert Email Address when Review Posted'));?>
	<div class="input">
	<?php echo $form->text("notifyEmail", $notifyEmail)?>
	</div><!--class="input"-->
</div><!--clearfix --> 

</fieldset>