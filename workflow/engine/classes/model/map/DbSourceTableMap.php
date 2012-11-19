<?php



/**
 * This class defines the structure of the 'DB_SOURCE' table.
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
class DbSourceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.DbSourceTableMap';

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
		$this->setName('DB_SOURCE');
		$this->setPhpName('DbSource');
		$this->setClassname('DbSource');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('DBS_UID', 'DbsUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('DBS_TYPE', 'DbsType', 'VARCHAR', true, 8, '0');
		$this->addColumn('DBS_SERVER', 'DbsServer', 'VARCHAR', true, 100, '0');
		$this->addColumn('DBS_DATABASE_NAME', 'DbsDatabaseName', 'VARCHAR', true, 100, '0');
		$this->addColumn('DBS_USERNAME', 'DbsUsername', 'VARCHAR', true, 32, '0');
		$this->addColumn('DBS_PASSWORD', 'DbsPassword', 'VARCHAR', false, 32, '');
		$this->addColumn('DBS_PORT', 'DbsPort', 'INTEGER', false, null, 0);
		$this->addColumn('DBS_ENCODE', 'DbsEncode', 'VARCHAR', false, 32, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DbSourceTableMap
