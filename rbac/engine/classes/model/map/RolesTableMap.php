<?php

 //PHP5TableMapBuilder.php

/**
 * This class defines the structure of the 'ROLES' table.
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
class RolesTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.RolesTableMap';

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
		$this->setName('ROLES');
		$this->setPhpName('Roles');
		$this->setClassname('Roles');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ROL_UID', 'RolUid', 'VARCHAR', true, 32, '');
		$this->addColumn('ROL_PARENT', 'RolParent', 'VARCHAR', true, 32, '');
		$this->addColumn('ROL_SYSTEM', 'RolSystem', 'VARCHAR', true, 32, '');
		$this->addColumn('ROL_CODE', 'RolCode', 'VARCHAR', true, 32, '');
		$this->addColumn('ROL_CREATE_DATE', 'RolCreateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('ROL_UPDATE_DATE', 'RolUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('ROL_STATUS', 'RolStatus', 'INTEGER', true, null, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // RolesTableMap
