<?php



/**
 * This class defines the structure of the 'LANGUAGE' table.
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
class LanguageTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.LanguageTableMap';

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
		$this->setName('LANGUAGE');
		$this->setPhpName('Language');
		$this->setClassname('Language');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('LAN_ID', 'LanId', 'VARCHAR', true, 4, '');
		$this->addColumn('LAN_NAME', 'LanName', 'VARCHAR', true, 30, '');
		$this->addColumn('LAN_NATIVE_NAME', 'LanNativeName', 'VARCHAR', true, 30, '');
		$this->addColumn('LAN_DIRECTION', 'LanDirection', 'CHAR', true, 1, 'L');
		$this->addColumn('LAN_WEIGHT', 'LanWeight', 'INTEGER', true, null, 0);
		$this->addColumn('LAN_ENABLED', 'LanEnabled', 'CHAR', true, 1, '1');
		$this->addColumn('LAN_CALENDAR', 'LanCalendar', 'VARCHAR', true, 30, 'GREGORIAN');
		// validators
		$this->addValidator('LAN_DIRECTION', 'validValues', 'propel.validator.ValidValuesValidator', 'L|R', 'Please select a valid Language Direccion.');
		$this->addValidator('LAN_DIRECTION', 'required', 'propel.validator.RequiredValidator', '', 'Document access is required.');
		$this->addValidator('LAN_ENABLED', 'validValues', 'propel.validator.ValidValuesValidator', '1|0', 'Please select a valid Language Direccion.');
		$this->addValidator('LAN_ENABLED', 'required', 'propel.validator.RequiredValidator', '', 'Document access is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LanguageTableMap
