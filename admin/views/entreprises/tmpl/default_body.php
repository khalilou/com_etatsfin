<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
	<tr class="row<?php echo $i % 2; ?>">
		<td>
			<?php echo $item->id; ?>
		</td>
		<td>
			<?php echo JHtml::_('grid.id', $i, $item->id); ?>
		</td>
		<td>
			<?php echo $item->raisonsociale; ?>
		</td>
		<td>
			<?php echo $item->registre_commerce; ?>
		</td>
		<td>
			<?php echo $item->adresse; ?>
		</td>
	</tr>
<?php endforeach; ?>
