<?php



/**
 * This class defines the structure of the 'STEP_TRIGGER' table.
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
class StepTriggerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.StepTriggerTableMap';

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
		$this->setName('STEP_TRIGGER');
		$this->setPhpName('StepTrigger');
		$this->setClassname('StepTrigger');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('STEP_UID', 'StepUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('TRI_UID', 'TriUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('ST_TYPE', 'StType', 'VARCHAR', true, 20, '');
		$this->addColumn('ST_CONDITION', 'StCondition', 'VARCHAR', true, 255, '');
		$this->addColumn('ST_POSITION', 'StPosition', 'INTEGER', true, null, 0);
		// validators
		$this->addValidator('ST_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'BEFORE|AFTER', 'Please select a valid value for Trigger Type ST_TYPE.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // StepTriggerTableMap
