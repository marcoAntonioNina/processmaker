<?php



/**
 * This class defines the structure of the 'APP_DELAY' table.
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
class AppDelayTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppDelayTableMap';

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
		$this->setName('APP_DELAY');
		$this->setPhpName('AppDelay');
		$this->setClassname('AppDelay');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_DELAY_UID', 'AppDelayUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('APP_UID', 'AppUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('APP_THREAD_INDEX', 'AppThreadIndex', 'INTEGER', true, null, 0);
		$this->addColumn('APP_DEL_INDEX', 'AppDelIndex', 'INTEGER', true, null, 0);
		$this->addColumn('APP_TYPE', 'AppType', 'VARCHAR', true, 20, '0');
		$this->addColumn('APP_STATUS', 'AppStatus', 'VARCHAR', true, 20, '0');
		$this->addColumn('APP_NEXT_TASK', 'AppNextTask', 'VARCHAR', false, 32, '0');
		$this->addColumn('APP_DELEGATION_USER', 'AppDelegationUser', 'VARCHAR', false, 32, '0');
		$this->addColumn('APP_ENABLE_ACTION_USER', 'AppEnableActionUser', 'VARCHAR', true, 32, '0');
		$this->addColumn('APP_ENABLE_ACTION_DATE', 'AppEnableActionDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_DISABLE_ACTION_USER', 'AppDisableActionUser', 'VARCHAR', false, 32, '0');
		$this->addColumn('APP_DISABLE_ACTION_DATE', 'AppDisableActionDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('APP_AUTOMATIC_DISABLED_DATE', 'AppAutomaticDisabledDate', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppDelayTableMap
