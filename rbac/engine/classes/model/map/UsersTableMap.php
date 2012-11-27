<?php

 //PHP5TableMapBuilder.php

/**
 * This class defines the structure of the 'USERS' table.
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
class UsersTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.UsersTableMap';

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
		$this->setName('USERS');
		$this->setPhpName('Users');
		$this->setClassname('Users');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_USERNAME', 'UsrUsername', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_PASSWORD', 'UsrPassword', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_FIRSTNAME', 'UsrFirstname', 'VARCHAR', true, 50, '');
		$this->addColumn('USR_LASTNAME', 'UsrLastname', 'VARCHAR', true, 50, '');
		$this->addColumn('USR_EMAIL', 'UsrEmail', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_DUE_DATE', 'UsrDueDate', 'DATE', true, null, null);
		$this->addColumn('USR_CREATE_DATE', 'UsrCreateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('USR_UPDATE_DATE', 'UsrUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('USR_STATUS', 'UsrStatus', 'INTEGER', true, null, 1);
		$this->addColumn('USR_AUTH_TYPE', 'UsrAuthType', 'VARCHAR', true, 32, '');
		$this->addColumn('UID_AUTH_SOURCE', 'UidAuthSource', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_AUTH_USER_DN', 'UsrAuthUserDn', 'VARCHAR', true, 255, '');
		$this->addColumn('USR_AUTH_SUPERVISOR_DN', 'UsrAuthSupervisorDn', 'VARCHAR', true, 255, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UsersTableMap
