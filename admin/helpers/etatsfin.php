<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * ETATSFIN component helper.
 */
abstract class EtatsFinHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('COM_ETATSFIN_SUBMENU_ENTREPRISES'), 'index.php?option=com_etatsfin', $submenu == 'entreprises');
		JSubMenuHelper::addEntry(JText::_('COM_ETATSFIN_SUBMENU_COMPTES'), 'index.php?option=com_etatsfin&view=comptes', $submenu == 'comptes');
		JSubMenuHelper::addEntry(JText::_('COM_ETATFIN_SUBMENU_CATEGORIES'),'index.php?option=com_categories&view=categories&extension=com_etatsfin',$submenu == 'categories');
		JSubMenuHelper::addEntry(JText::_('COM_ETATSFIN_SUBMENU_BILANS'), 'index.php?option=com_etatsfin&view=bilans', $submenu == 'bilans');
		JSubMenuHelper::addEntry(JText::_('COM_ETATSFIN_SUBMENU_ETATDERESULTATS'), 'index.php?option=com_etatsfin&view=etatderesultats', $submenu == 'etatderesultats');
		JSubMenuHelper::addEntry(JText::_('COM_ETATSFIN_SUBMENU_ETATDETRESORERIES'), 'index.php?option=com_etatsfin&view=etatdetresoreries', $submenu == 'etatdetresoreries');
		// set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-etatsfin {background-image: url(../media/com_etatsfin/images/tux-48x48.png);}');
		 if ($submenu == 'categories') 
                {
                        $document->setTitle(JText::_('COM_ETATFIN_ADMINISTRATION_CATEGORIES'));
                }
	}
	/**
	 * Get the actions
	 */
	public static function getActions($messageId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;
 
		if (empty($messageId)) {
			$assetName = 'com_etatsfin';
		}
		else {
			$assetName = 'com_etatsfin.entreprise.'.(int) $messageId;
		}
 
		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.delete'
		);
 
		foreach ($actions as $action) {
			$result->set($action,	$user->authorise($action, $assetName));
		}
 
		return $result;
	}
}
