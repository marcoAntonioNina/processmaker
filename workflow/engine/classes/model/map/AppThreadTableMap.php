<?php



/**
 * This class defines the structure of the 'APP_THREAD' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.classes.model.map
 */
class AppThreadTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppThreadTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('APP_THREAD');
		$this->setPhpName('AppThread');
		$this->setClassname('AppThread');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('APP_THREAD_INDEX', 'AppThreadIndex', 'INTEGER', true, null, 0);
		$this->addColumn('APP_THREAD_PARENT', 'AppThreadParent', 'INTEGER', true, null, 0);
		$this->addColumn('APP_THREAD_STATUS', 'AppThreadStatus', 'VARCHAR', true, 32, 'OPEN');
		$this->addColumn('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		// validators
		$this->addValidator('APP_THREAD_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'CLOSED|OPEN', 'Please select a valid status.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppThreadTableMap
