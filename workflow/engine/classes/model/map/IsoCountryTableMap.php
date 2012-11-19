<?php



/**
 * This class defines the structure of the 'ISO_COUNTRY' table.
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
class IsoCountryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.IsoCountryTableMap';

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
		$this->setName('ISO_COUNTRY');
		$this->setPhpName('IsoCountry');
		$this->setClassname('IsoCountry');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('IC_UID', 'IcUid', 'VARCHAR', true, 2, '');
		$this->addColumn('IC_NAME', 'IcName', 'VARCHAR', false, 255, null);
		$this->addColumn('IC_SORT_ORDER', 'IcSortOrder', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // IsoCountryTableMap
