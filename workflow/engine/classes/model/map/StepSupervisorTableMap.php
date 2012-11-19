<?php



/**
 * This class defines the structure of the 'STEP_SUPERVISOR' table.
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
class StepSupervisorTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.StepSupervisorTableMap';

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
		$this->setName('STEP_SUPERVISOR');
		$this->setPhpName('StepSupervisor');
		$this->setClassname('StepSupervisor');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('STEP_UID', 'StepUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('STEP_TYPE_OBJ', 'StepTypeObj', 'VARCHAR', true, 20, 'DYNAFORM');
		$this->addColumn('STEP_UID_OBJ', 'StepUidObj', 'VARCHAR', true, 32, '0');
		$this->addColumn('STEP_POSITION', 'StepPosition', 'INTEGER', true, null, 0);
		// validators
		$this->addValidator('STEP_TYPE_OBJ', 'validValues', 'propel.validator.ValidValuesValidator', 'DYNAFORM|INPUT_DOCUMENT|OUTPUT_DOCUMENT', 'Please select a valid value for STEP_TYPE_OBJ.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // StepSupervisorTableMap
