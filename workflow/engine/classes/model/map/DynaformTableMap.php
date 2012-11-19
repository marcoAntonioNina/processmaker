<?php



/**
 * This class defines the structure of the 'DYNAFORM' table.
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
class DynaformTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.DynaformTableMap';

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
		$this->setName('DYNAFORM');
		$this->setPhpName('Dynaform');
		$this->setClassname('Dynaform');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('DYN_UID', 'DynUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('DYN_TYPE', 'DynType', 'VARCHAR', true, 20, 'xmlform');
		$this->addColumn('DYN_FILENAME', 'DynFilename', 'VARCHAR', true, 100, '');
		// validators
		$this->addValidator('DYN_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'xmlform|grid', 'Please select a valid dynaform type.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DynaformTableMap
