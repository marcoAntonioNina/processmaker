<?php



/**
 * This class defines the structure of the 'REPORT_VAR' table.
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
class ReportVarTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ReportVarTableMap';

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
		$this->setName('REPORT_VAR');
		$this->setPhpName('ReportVar');
		$this->setClassname('ReportVar');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('REP_VAR_UID', 'RepVarUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('REP_TAB_UID', 'RepTabUid', 'VARCHAR', true, 32, '');
		$this->addColumn('REP_VAR_NAME', 'RepVarName', 'VARCHAR', true, 255, '');
		$this->addColumn('REP_VAR_TYPE', 'RepVarType', 'VARCHAR', true, 20, '');
		// validators
		$this->addValidator('REP_VAR_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Report variable UID can be no larger than 32 in size');
		$this->addValidator('REP_VAR_UID', 'required', 'propel.validator.RequiredValidator', '', 'Report variable UID is required.');
		$this->addValidator('REP_TAB_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Report table UID can be no larger than 32 in size');
		$this->addValidator('REP_TAB_UID', 'required', 'propel.validator.RequiredValidator', '', 'Report variable UID is required.');
		$this->addValidator('REP_VAR_NAME', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Report variable name can be no larger than 255 in size');
		$this->addValidator('REP_VAR_NAME', 'required', 'propel.validator.RequiredValidator', '', 'Report variable name is required.');
		$this->addValidator('REP_VAR_TYPE', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Report variable type can be no larger than 20 in size');
		$this->addValidator('REP_VAR_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Report variable type is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ReportVarTableMap
