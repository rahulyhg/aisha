<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// to reset the form xml loaded by the view
$this->form->reset( true );

// to load in our own version of login.xml
$this->form->loadFile( dirname(__FILE__) . DS . "registration.xml");
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<h3>Already Registered? <a href="<?php echo JUri::base(); ?>login">Please Login</a></h3>
<div class="spacer"></div>
<div class="registration<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>Astrologer Registration</h1>
	</div>
<?php endif; ?>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" enctype="multipart/form-data">
<?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
	<?php $fields = $this->form->getFieldset($fieldset->name);?>
	<?php if (count($fields)):?>
		<fieldset>
		<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.
		?>
			<legend>Astrologer Registration</legend>
		<?php endif;?>
		<?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>
			<?php if ($field->hidden):// If the field is hidden, just display the input.?>
				<?php echo $field->input;?>
			<?php else:?>
				<div class="form-group">
					<div class="control-label">
					<?php echo $field->label; ?>
					<?php if (!$field->required && $field->type != 'Spacer') : ?>
						<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
					<?php endif; ?>
					</div>
					<div class="controls">
						<?php echo $field->input;?>
					</div>
				</div>
			<?php endif;?>
		<?php endforeach;?>
		</fieldset>
	<?php endif;?>
<?php endforeach;?>
			<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
			<a class="btn btn-danger" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="registration.register" />
			<?php echo JHtml::_('form.token');?>
	</form>
</div>
