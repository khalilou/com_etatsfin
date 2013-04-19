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
			<?php echo $item->entreprise; ?>
		</td>
		<td>
			<?php echo $item->annee; ?>
		</td>
		<td>
			<?php 
			switch ($item->periode) {
			case 1:
				echo "Etats financiers d�finitifs au 31/12"; break;
			case 2:
				echo "Etats financiers interm�diaires au 30/06"; break;
			case 3:
				echo "Etats financiers provisoires au 31/12"; break;
			case 4:
			    echo "Etats financiers interm�diaires au 30/09"; break;	
			case 5:
			    echo"Etats financiers interm�diaires au 31/03"; break;
			case 6:
				echo "Etats financiers interm�diaires au 31/12"; break;
			case 7:
				echo "Etats financiers consolid�s au 31/12"; break;
			case 8:
				echo "Etats financiers consolid�s au 30/09"; break;
			case 9:
			    echo "Etats financiers d�finitifs au 30/09"; break;	
			case 10:
			    echo"Etats financiers consolid�s au 30/06"; break;	
			}
			?>
		</td>
		<td>
			<?php 
			switch ($item->etat) {
			case 1:
				echo "Publi�"; break;
			case 2:
				echo "Non publi�"; break;
			}
            ?>			
		</td>
	</tr>
<?php endforeach; ?>
