<?php



/**
 * This class defines the structure of the 'GROUP_USER' table.
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
class GroupUserTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.GroupUserTableMap';

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
		$this->setName('GROUP_USER');
		$this->setPhpName('GroupUser');
		$this->setClassname('GroupUser');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('GRP_UID', 'GrpUid', 'VARCHAR', true, 32, '0');
		$this->addPrimaryKey('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '0');
		// validators
		$this->addValidator('GRP_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Group UID can be no larger than 32 in size');
		$this->addValidator('GRP_UID', 'required', 'propel.validator.RequiredValidator', '', 'Group UID is required.');
		$this->addValidator('USR_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'User UID can be no larger than 32 in size');
		$this->addValidator('USR_UID', 'required', 'propel.validator.RequiredValidator', '', 'User UID is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GroupUserTableMap
