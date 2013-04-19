<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
	<th width="5">
		<?php echo JText::_('COM_ETATSFIN_ETATDERESULTAT_HEADING_ID'); ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>			
	<th>
		<?php echo JText::_('COM_ETATSFIN_ETATDERESULTAT_HEADING_ENTREPRISE_ID'); ?>
	</th>
	<th>
		<?php echo JText::_('COM_ETATSFIN_ETATDERESULTAT_HEADING_ANNEE'); ?>
	</th>
	<th>
		<?php echo JText::_('COM_ETATSFIN_ETATDERESULTAT_HEADING_PERIODE'); ?>
	</th>
	<th>
		<?php echo JText::_('COM_ETATSFIN_ETATDERESULTAT_HEADING_ETAT'); ?>
	</th>
</tr>
