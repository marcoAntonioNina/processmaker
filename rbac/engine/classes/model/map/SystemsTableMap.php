<?php

 //PHP5TableMapBuilder.php

/**
 * This class defines the structure of the 'SYSTEMS' table.
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
class SystemsTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.SystemsTableMap';

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
		$this->setName('SYSTEMS');
		$this->setPhpName('Systems');
		$this->setClassname('Systems');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SYS_UID', 'SysUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SYS_CODE', 'SysCode', 'VARCHAR', true, 32, '');
		$this->addColumn('SYS_CREATE_DATE', 'SysCreateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('SYS_UPDATE_DATE', 'SysUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('SYS_STATUS', 'SysStatus', 'INTEGER', true, null, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SystemsTableMap
