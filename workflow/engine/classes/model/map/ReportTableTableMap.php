<?php



/**
 * This class defines the structure of the 'REPORT_TABLE' table.
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
class ReportTableTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ReportTableTableMap';

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
		$this->setName('REPORT_TABLE');
		$this->setPhpName('ReportTable');
		$this->setClassname('ReportTable');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('REP_TAB_UID', 'RepTabUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('REP_TAB_NAME', 'RepTabName', 'VARCHAR', true, 100, '');
		$this->addColumn('REP_TAB_TYPE', 'RepTabType', 'VARCHAR', true, 6, '');
		$this->addColumn('REP_TAB_GRID', 'RepTabGrid', 'VARCHAR', false, 150, '');
		$this->addColumn('REP_TAB_CONNECTION', 'RepTabConnection', 'VARCHAR', true, 32, '');
		$this->addColumn('REP_TAB_CREATE_DATE', 'RepTabCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('REP_TAB_STATUS', 'RepTabStatus', 'CHAR', true, 8, 'ACTIVE');
		// validators
		$this->addValidator('REP_TAB_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Report table UID can be no larger than 32 in size');
		$this->addValidator('REP_TAB_UID', 'required', 'propel.validator.RequiredValidator', '', 'Report table UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('REP_TAB_NAME', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Report table name can be no larger than 100 in size');
		$this->addValidator('REP_TAB_NAME', 'required', 'propel.validator.RequiredValidator', '', 'Report table name is required.');
		$this->addValidator('REP_TAB_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'NORMAL|GRID', 'Please select a valid type.');
		$this->addValidator('REP_TAB_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Report table type is required.');
		$this->addValidator('REP_TAB_CONNECTION', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Report table connection can be no larger than 10 in size');
		$this->addValidator('REP_TAB_CONNECTION', 'required', 'propel.validator.RequiredValidator', '', 'Report table connection is required.');
		$this->addValidator('REP_TAB_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|INACTIVE', 'Please select a valid status.');
		$this->addValidator('REP_TAB_STATUS', 'required', 'propel.validator.RequiredValidator', '', 'Report table status is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ReportTableTableMap
