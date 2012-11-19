<?php



/**
 * This class defines the structure of the 'SUB_PROCESS' table.
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
class SubProcessTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.SubProcessTableMap';

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
		$this->setName('SUB_PROCESS');
		$this->setPhpName('SubProcess');
		$this->setClassname('SubProcess');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SP_UID', 'SpUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_PARENT', 'ProParent', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_PARENT', 'TasParent', 'VARCHAR', true, 32, '');
		$this->addColumn('SP_TYPE', 'SpType', 'VARCHAR', true, 20, '');
		$this->addColumn('SP_SYNCHRONOUS', 'SpSynchronous', 'INTEGER', true, null, 0);
		$this->addColumn('SP_SYNCHRONOUS_TYPE', 'SpSynchronousType', 'VARCHAR', true, 20, '');
		$this->addColumn('SP_SYNCHRONOUS_WAIT', 'SpSynchronousWait', 'INTEGER', true, null, 0);
		$this->addColumn('SP_VARIABLES_OUT', 'SpVariablesOut', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SP_VARIABLES_IN', 'SpVariablesIn', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SP_GRID_IN', 'SpGridIn', 'VARCHAR', true, 50, '');
		// validators
		$this->addValidator('SP_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'SIMPLE|MULTIPLE', 'Please select a valid value for SP_TYPE.');
		$this->addValidator('SP_SYNCHRONOUS', 'validValues', 'propel.validator.ValidValuesValidator', '1|0', 'Please select a valid value for SP_SYNCHRONOUS.');
		$this->addValidator('SP_SYNCHRONOUS_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'ALL|INSTANCES|TIME', 'Please select a valid value for SP_SYNCHRONOUS_TYPE.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SubProcessTableMap
