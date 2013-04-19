<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
	<th width="5">
		<?php echo JText::_('COM_ETATSFIN_COMPTE_HEADING_ID'); ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>			
	<th>
		<?php echo JText::_('COM_ETATSFIN_COMPTE_HEADING_LIBELLE'); ?>
	</th>
	<th>
		<?php echo JText::_('COM_ETATSFIN_COMPTE_HEADING_NUMERO'); ?>
	</th>
	<th>
		<?php echo JText::_('COM_ETATSFIN_COMPTE_HEADING_TYPE'); ?>
	</th>
	<th>
		<?php echo JText::_('COM_ETATSFIN_COMPTE_HEADING_CATEGORIE'); ?>
	</th>
</tr>
