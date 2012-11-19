<?php



/**
 * This class defines the structure of the 'ADDITIONAL_TABLES' table.
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
class AdditionalTablesTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AdditionalTablesTableMap';

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
		$this->setName('ADDITIONAL_TABLES');
		$this->setPhpName('AdditionalTables');
		$this->setClassname('AdditionalTables');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ADD_TAB_UID', 'AddTabUid', 'VARCHAR', true, 32, '');
		$this->addColumn('ADD_TAB_NAME', 'AddTabName', 'VARCHAR', true, 60, '');
		$this->addColumn('ADD_TAB_CLASS_NAME', 'AddTabClassName', 'VARCHAR', true, 100, '');
		$this->addColumn('ADD_TAB_DESCRIPTION', 'AddTabDescription', 'LONGVARCHAR', false, null, null);
		$this->addColumn('ADD_TAB_SDW_LOG_INSERT', 'AddTabSdwLogInsert', 'TINYINT', false, null, 0);
		$this->addColumn('ADD_TAB_SDW_LOG_UPDATE', 'AddTabSdwLogUpdate', 'TINYINT', false, null, 0);
		$this->addColumn('ADD_TAB_SDW_LOG_DELETE', 'AddTabSdwLogDelete', 'TINYINT', false, null, 0);
		$this->addColumn('ADD_TAB_SDW_LOG_SELECT', 'AddTabSdwLogSelect', 'TINYINT', false, null, 0);
		$this->addColumn('ADD_TAB_SDW_MAX_LENGTH', 'AddTabSdwMaxLength', 'INTEGER', false, null, 0);
		$this->addColumn('ADD_TAB_SDW_AUTO_DELETE', 'AddTabSdwAutoDelete', 'TINYINT', false, null, 0);
		$this->addColumn('ADD_TAB_PLG_UID', 'AddTabPlgUid', 'VARCHAR', false, 32, '');
		$this->addColumn('DBS_UID', 'DbsUid', 'VARCHAR', false, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', false, 32, '');
		$this->addColumn('ADD_TAB_TYPE', 'AddTabType', 'VARCHAR', false, 32, '');
		$this->addColumn('ADD_TAB_GRID', 'AddTabGrid', 'VARCHAR', false, 256, '');
		$this->addColumn('ADD_TAB_TAG', 'AddTabTag', 'VARCHAR', false, 256, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AdditionalTablesTableMap
