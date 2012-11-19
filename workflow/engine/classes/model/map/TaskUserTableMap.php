<?php



/**
 * This class defines the structure of the 'TASK_USER' table.
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
class TaskUserTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.TaskUserTableMap';

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
		$this->setName('TASK_USER');
		$this->setPhpName('TaskUser');
		$this->setClassname('TaskUser');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('TU_TYPE', 'TuType', 'INTEGER', true, null, 1);
		$this->addPrimaryKey('TU_RELATION', 'TuRelation', 'INTEGER', true, null, 0);
		// validators
		$this->addValidator('TAS_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Task UID can be no larger than 32 in size');
		$this->addValidator('TAS_UID', 'required', 'propel.validator.RequiredValidator', '', 'Task UID is required.');
		$this->addValidator('USR_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'User UID can be no larger than 32 in size');
		$this->addValidator('USR_UID', 'required', 'propel.validator.RequiredValidator', '', 'User UID is required.');
		$this->addValidator('TU_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', '1|2', 'Please select a valid type.');
		$this->addValidator('TU_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Type is required.');
		$this->addValidator('TU_RELATION', 'validValues', 'propel.validator.ValidValuesValidator', '1|2', 'Please select a valid relation.');
		$this->addValidator('TU_RELATION', 'required', 'propel.validator.RequiredValidator', '', 'Relation is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // TaskUserTableMap
