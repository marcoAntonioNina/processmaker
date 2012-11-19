<?php



/**
 * This class defines the structure of the 'APP_HISTORY' table.
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
class AppHistoryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppHistoryTableMap';

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
		$this->setName('APP_HISTORY');
		$this->setPhpName('AppHistory');
		$this->setClassname('AppHistory');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('HISTORY_UID', 'HistoryUid', 'INTEGER', true, 11, null);
		$this->addColumn('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DYN_UID', 'DynUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_STATUS', 'AppStatus', 'VARCHAR', true, 100, '');
		$this->addColumn('HISTORY_DATE', 'HistoryDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('HISTORY_DATA', 'HistoryData', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppHistoryTableMap
