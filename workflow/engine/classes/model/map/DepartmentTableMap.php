<?php



/**
 * This class defines the structure of the 'DEPARTMENT' table.
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
class DepartmentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.DepartmentTableMap';

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
		$this->setName('DEPARTMENT');
		$this->setPhpName('Department');
		$this->setClassname('Department');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('DEP_UID', 'DepUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DEP_PARENT', 'DepParent', 'VARCHAR', true, 32, '');
		$this->addColumn('DEP_MANAGER', 'DepManager', 'VARCHAR', true, 32, '');
		$this->addColumn('DEP_LOCATION', 'DepLocation', 'INTEGER', true, null, 0);
		$this->addColumn('DEP_STATUS', 'DepStatus', 'VARCHAR', true, 10, 'ACTIVE');
		$this->addColumn('DEP_REF_CODE', 'DepRefCode', 'VARCHAR', true, 50, '');
		$this->addColumn('DEP_LDAP_DN', 'DepLdapDn', 'VARCHAR', true, 255, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DepartmentTableMap
