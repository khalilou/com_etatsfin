<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class EtatsFinModelBilans extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return	string	An SQL query
	 */
	protected function getListQuery()
	{
		// Create a new query object.		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
	$query->select('#__bilan.id,periode,annee,etat, #__entreprise.raisonsociale as entreprise');		
		// From the compte table
		$query->from('#__bilan');
		$query->leftJoin ('#__entreprise on #__bilan.entreprise_id=#__entreprise.id');
		return $query;
	}
}