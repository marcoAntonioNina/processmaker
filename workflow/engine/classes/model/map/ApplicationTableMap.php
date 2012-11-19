<?php



/**
 * This class defines the structure of the 'APPLICATION' table.
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
class ApplicationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ApplicationTableMap';

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
		$this->setName('APPLICATION');
		$this->setPhpName('Application');
		$this->setClassname('Application');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_NUMBER', 'AppNumber', 'INTEGER', true, null, 0);
		$this->addColumn('APP_PARENT', 'AppParent', 'VARCHAR', true, 32, '0');
		$this->addColumn('APP_STATUS', 'AppStatus', 'VARCHAR', true, 100, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_PROC_STATUS', 'AppProcStatus', 'VARCHAR', true, 100, '');
		$this->addColumn('APP_PROC_CODE', 'AppProcCode', 'VARCHAR', true, 100, '');
		$this->addColumn('APP_PARALLEL', 'AppParallel', 'VARCHAR', true, 32, 'NO');
		$this->addColumn('APP_INIT_USER', 'AppInitUser', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_CUR_USER', 'AppCurUser', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_CREATE_DATE', 'AppCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_INIT_DATE', 'AppInitDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_FINISH_DATE', 'AppFinishDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('APP_UPDATE_DATE', 'AppUpdateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_DATA', 'AppData', 'LONGVARCHAR', true, null, null);
		$this->addColumn('APP_PIN', 'AppPin', 'VARCHAR', true, 32, '');
		// validators
		$this->addValidator('APP_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'DRAFT|TO_DO|PAUSED|COMPLETED|CANCELLED', 'Please select a valid status.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ApplicationTableMap
