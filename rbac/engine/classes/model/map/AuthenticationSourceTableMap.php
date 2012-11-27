<?php

 //PHP5TableMapBuilder.php

/**
 * This class defines the structure of the 'AUTHENTICATION_SOURCE' table.
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
class AuthenticationSourceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AuthenticationSourceTableMap';

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
		$this->setName('AUTHENTICATION_SOURCE');
		$this->setPhpName('AuthenticationSource');
		$this->setClassname('AuthenticationSource');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('AUTH_SOURCE_UID', 'AuthSourceUid', 'VARCHAR', true, 32, '');
		$this->addColumn('AUTH_SOURCE_NAME', 'AuthSourceName', 'VARCHAR', true, 50, '');
		$this->addColumn('AUTH_SOURCE_PROVIDER', 'AuthSourceProvider', 'VARCHAR', true, 20, '');
		$this->addColumn('AUTH_SOURCE_SERVER_NAME', 'AuthSourceServerName', 'VARCHAR', true, 50, '');
		$this->addColumn('AUTH_SOURCE_PORT', 'AuthSourcePort', 'INTEGER', false, null, 389);
		$this->addColumn('AUTH_SOURCE_ENABLED_TLS', 'AuthSourceEnabledTls', 'INTEGER', false, null, 0);
		$this->addColumn('AUTH_SOURCE_VERSION', 'AuthSourceVersion', 'VARCHAR', true, 16, '3');
		$this->addColumn('AUTH_SOURCE_BASE_DN', 'AuthSourceBaseDn', 'VARCHAR', true, 128, '');
		$this->addColumn('AUTH_ANONYMOUS', 'AuthAnonymous', 'INTEGER', false, null, 0);
		$this->addColumn('AUTH_SOURCE_SEARCH_USER', 'AuthSourceSearchUser', 'VARCHAR', true, 128, '');
		$this->addColumn('AUTH_SOURCE_PASSWORD', 'AuthSourcePassword', 'VARCHAR', true, 32, '');
		$this->addColumn('AUTH_SOURCE_ATTRIBUTES', 'AuthSourceAttributes', 'VARCHAR', true, 255, '');
		$this->addColumn('AUTH_SOURCE_OBJECT_CLASSES', 'AuthSourceObjectClasses', 'VARCHAR', true, 255, '');
		$this->addColumn('AUTH_SOURCE_DATA', 'AuthSourceData', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AuthenticationSourceTableMap
