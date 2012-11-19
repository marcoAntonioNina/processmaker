<?php



/**
 * This class defines the structure of the 'ISO_LOCATION' table.
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
class IsoLocationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.IsoLocationTableMap';

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
		$this->setName('ISO_LOCATION');
		$this->setPhpName('IsoLocation');
		$this->setClassname('IsoLocation');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('IC_UID', 'IcUid', 'VARCHAR', true, 2, '');
		$this->addPrimaryKey('IL_UID', 'IlUid', 'VARCHAR', true, 5, '');
		$this->addColumn('IL_NAME', 'IlName', 'VARCHAR', false, 255, null);
		$this->addColumn('IL_NORMAL_NAME', 'IlNormalName', 'VARCHAR', false, 255, null);
		$this->addColumn('IS_UID', 'IsUid', 'VARCHAR', false, 4, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // IsoLocationTableMap
