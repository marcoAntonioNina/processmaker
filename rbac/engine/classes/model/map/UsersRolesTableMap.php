<?php

 //PHP5TableMapBuilder.php

/**
 * This class defines the structure of the 'USERS_ROLES' table.
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
class UsersRolesTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.UsersRolesTableMap';

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
		$this->setName('USERS_ROLES');
		$this->setPhpName('UsersRoles');
		$this->setClassname('UsersRoles');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('ROL_UID', 'RolUid', 'VARCHAR', true, 32, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UsersRolesTableMap
