<?php



/**
 * This class defines the structure of the 'ISO_SUBDIVISION' table.
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
class IsoSubdivisionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.IsoSubdivisionTableMap';

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
		$this->setName('ISO_SUBDIVISION');
		$this->setPhpName('IsoSubdivision');
		$this->setClassname('IsoSubdivision');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('IC_UID', 'IcUid', 'VARCHAR', true, 2, '');
		$this->addPrimaryKey('IS_UID', 'IsUid', 'VARCHAR', true, 4, '');
		$this->addColumn('IS_NAME', 'IsName', 'VARCHAR', true, 255, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // IsoSubdivisionTableMap
