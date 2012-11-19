<?php



/**
 * This class defines the structure of the 'OBJECT_PERMISSION' table.
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
class ObjectPermissionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ObjectPermissionTableMap';

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
		$this->setName('OBJECT_PERMISSION');
		$this->setPhpName('ObjectPermission');
		$this->setClassname('ObjectPermission');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('OP_UID', 'OpUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('OP_USER_RELATION', 'OpUserRelation', 'INTEGER', true, null, 0);
		$this->addColumn('OP_TASK_SOURCE', 'OpTaskSource', 'VARCHAR', false, 32, '0');
		$this->addColumn('OP_PARTICIPATE', 'OpParticipate', 'INTEGER', true, null, 0);
		$this->addColumn('OP_OBJ_TYPE', 'OpObjType', 'VARCHAR', true, 15, '0');
		$this->addColumn('OP_OBJ_UID', 'OpObjUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('OP_ACTION', 'OpAction', 'VARCHAR', true, 10, '0');
		$this->addColumn('OP_CASE_STATUS', 'OpCaseStatus', 'VARCHAR', false, 10, '0');
		// validators
		$this->addValidator('OP_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Object permission UID can be no larger than 32 in size');
		$this->addValidator('OP_UID', 'required', 'propel.validator.RequiredValidator', '', 'Object permission UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('TAS_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Task UID can be no larger than 32 in size');
		$this->addValidator('TAS_UID', 'required', 'propel.validator.RequiredValidator', '', 'Task UID is required.');
		$this->addValidator('USR_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'User or Group UID can be no larger than 32 in size');
		$this->addValidator('USR_UID', 'required', 'propel.validator.RequiredValidator', '', 'User or Group UID is required.');
		$this->addValidator('OP_USER_RELATION', 'validValues', 'propel.validator.ValidValuesValidator', '1|2', 'Please select a valid relation.');
		$this->addValidator('OP_USER_RELATION', 'required', 'propel.validator.RequiredValidator', '', 'Relation is required.');
		$this->addValidator('OP_TASK_SOURCE', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Source task UID can be no larger than 32 in size');
		$this->addValidator('OP_TASK_SOURCE', 'required', 'propel.validator.RequiredValidator', '', 'Source task is required.');
		$this->addValidator('OP_PARTICIPATE', 'validValues', 'propel.validator.ValidValuesValidator', '0|1', 'Please select a valid participation value.');
		$this->addValidator('OP_PARTICIPATE', 'required', 'propel.validator.RequiredValidator', '', 'Participation is required.');
		$this->addValidator('OP_OBJ_TYPE', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Object type can be no larger than 15 in size');
		$this->addValidator('OP_OBJ_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Object type is required.');
		$this->addValidator('OP_OBJ_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Object UID can be no larger than 32 in size');
		$this->addValidator('OP_OBJ_UID', 'required', 'propel.validator.RequiredValidator', '', 'Object UID is required.');
		$this->addValidator('OP_ACTION', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Action can be no larger than 15 in size');
		$this->addValidator('OP_ACTION', 'required', 'propel.validator.RequiredValidator', '', 'Action is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ObjectPermissionTableMap
