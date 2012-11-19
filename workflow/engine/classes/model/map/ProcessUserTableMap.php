<?php



/**
 * This class defines the structure of the 'PROCESS_USER' table.
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
class ProcessUserTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ProcessUserTableMap';

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
		$this->setName('PROCESS_USER');
		$this->setPhpName('ProcessUser');
		$this->setClassname('ProcessUser');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('PU_UID', 'PuUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PU_TYPE', 'PuType', 'VARCHAR', true, 20, '');
		// validators
		$this->addValidator('PU_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process User UID can be no larger than 32 in size');
		$this->addValidator('PU_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process User UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('USR_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'User UID can be no larger than 32 in size');
		$this->addValidator('USR_UID', 'required', 'propel.validator.RequiredValidator', '', 'User UID is required.');
		$this->addValidator('PU_TYPE', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Value can be no larger than 20 in size');
		$this->addValidator('PU_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Value is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ProcessUserTableMap
