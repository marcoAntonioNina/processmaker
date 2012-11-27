<?php

 //PHP5TableMapBuilder.php

/**
 * This class defines the structure of the 'PERMISSIONS' table.
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
class PermissionsTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.PermissionsTableMap';

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
		$this->setName('PERMISSIONS');
		$this->setPhpName('Permissions');
		$this->setClassname('Permissions');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('PER_UID', 'PerUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PER_CODE', 'PerCode', 'VARCHAR', true, 32, '');
		$this->addColumn('PER_CREATE_DATE', 'PerCreateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('PER_UPDATE_DATE', 'PerUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('PER_STATUS', 'PerStatus', 'INTEGER', true, null, 1);
		$this->addColumn('PER_SYSTEM', 'PerSystem', 'VARCHAR', true, 32, '00000000000000000000000000000002');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // PermissionsTableMap
