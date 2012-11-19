<?php



/**
 * This class defines the structure of the 'APP_EVENT' table.
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
class AppEventTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppEventTableMap';

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
		$this->setName('APP_EVENT');
		$this->setPhpName('AppEvent');
		$this->setClassname('AppEvent');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		$this->addPrimaryKey('EVN_UID', 'EvnUid', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_EVN_ACTION_DATE', 'AppEvnActionDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_EVN_ATTEMPTS', 'AppEvnAttempts', 'TINYINT', true, null, 0);
		$this->addColumn('APP_EVN_LAST_EXECUTION_DATE', 'AppEvnLastExecutionDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('APP_EVN_STATUS', 'AppEvnStatus', 'VARCHAR', true, 32, 'OPEN');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppEventTableMap
