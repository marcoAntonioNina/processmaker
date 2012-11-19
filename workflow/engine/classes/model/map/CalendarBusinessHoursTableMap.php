<?php



/**
 * This class defines the structure of the 'CALENDAR_BUSINESS_HOURS' table.
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
class CalendarBusinessHoursTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CalendarBusinessHoursTableMap';

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
		$this->setName('CALENDAR_BUSINESS_HOURS');
		$this->setPhpName('CalendarBusinessHours');
		$this->setClassname('CalendarBusinessHours');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CALENDAR_UID', 'CalendarUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('CALENDAR_BUSINESS_DAY', 'CalendarBusinessDay', 'VARCHAR', true, 10, '');
		$this->addPrimaryKey('CALENDAR_BUSINESS_START', 'CalendarBusinessStart', 'VARCHAR', true, 10, '');
		$this->addPrimaryKey('CALENDAR_BUSINESS_END', 'CalendarBusinessEnd', 'VARCHAR', true, 10, '');
		// validators
		$this->addValidator('CALENDAR_BUSINESS_DAY', 'validValues', 'propel.validator.ValidValuesValidator', '0|1|2|3|4|5|6|7', 'Please select a valid Day.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CalendarBusinessHoursTableMap
