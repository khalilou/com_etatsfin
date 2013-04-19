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
			<?php echo $item->libelle; ?>
		</td>
		<td>
			<?php echo $item->numero; ?>
		</td>
		<td>
			<?php 
			switch ($item->type) {
			case 1:
				echo "Compte Bilan"; break;
			case 2:
				echo "Compte de Résultat"; break;
			case 3:
				echo "Compte de Trésorerie"; break;
			}
			?>
		</td>
		<td>
			<?php echo $item->category; ?>
		</td>
	</tr>
<?php endforeach; ?>
