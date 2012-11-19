<?php



/**
 * This class defines the structure of the 'HOLIDAY' table.
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
class HolidayTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.HolidayTableMap';

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
		$this->setName('HOLIDAY');
		$this->setPhpName('Holiday');
		$this->setClassname('Holiday');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('HLD_UID', 'HldUid', 'INTEGER', true, null, null);
		$this->addColumn('HLD_DATE', 'HldDate', 'VARCHAR', true, 10, '0000-00-00');
		$this->addColumn('HLD_DESCRIPTION', 'HldDescription', 'VARCHAR', true, 200, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // HolidayTableMap
