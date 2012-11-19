<?php



/**
 * This class defines the structure of the 'CALENDAR_HOLIDAYS' table.
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
class CalendarHolidaysTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CalendarHolidaysTableMap';

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
		$this->setName('CALENDAR_HOLIDAYS');
		$this->setPhpName('CalendarHolidays');
		$this->setClassname('CalendarHolidays');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CALENDAR_UID', 'CalendarUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('CALENDAR_HOLIDAY_NAME', 'CalendarHolidayName', 'VARCHAR', true, 100, '');
		$this->addColumn('CALENDAR_HOLIDAY_START', 'CalendarHolidayStart', 'TIMESTAMP', true, null, null);
		$this->addColumn('CALENDAR_HOLIDAY_END', 'CalendarHolidayEnd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CalendarHolidaysTableMap
