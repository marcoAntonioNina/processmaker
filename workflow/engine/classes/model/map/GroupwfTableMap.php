<?php



/**
 * This class defines the structure of the 'GROUPWF' table.
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
class GroupwfTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.GroupwfTableMap';

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
		$this->setName('GROUPWF');
		$this->setPhpName('Groupwf');
		$this->setClassname('Groupwf');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('GRP_UID', 'GrpUid', 'VARCHAR', true, 32, '');
		$this->addColumn('GRP_STATUS', 'GrpStatus', 'CHAR', true, 8, 'ACTIVE');
		$this->addColumn('GRP_LDAP_DN', 'GrpLdapDn', 'VARCHAR', true, 255, '');
		$this->addColumn('GRP_UX', 'GrpUx', 'VARCHAR', false, 128, 'NORMAL');
		// validators
		$this->addValidator('GRP_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|INACTIVE', 'Please select a valid status.');
		$this->addValidator('GRP_STATUS', 'required', 'propel.validator.RequiredValidator', '', 'Application Document UID is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GroupwfTableMap
