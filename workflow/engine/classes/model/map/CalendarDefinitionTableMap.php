<?php



/**
 * This class defines the structure of the 'CALENDAR_DEFINITION' table.
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
class CalendarDefinitionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CalendarDefinitionTableMap';

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
		$this->setName('CALENDAR_DEFINITION');
		$this->setPhpName('CalendarDefinition');
		$this->setClassname('CalendarDefinition');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CALENDAR_UID', 'CalendarUid', 'VARCHAR', true, 32, '');
		$this->addColumn('CALENDAR_NAME', 'CalendarName', 'VARCHAR', true, 100, '');
		$this->addColumn('CALENDAR_CREATE_DATE', 'CalendarCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('CALENDAR_UPDATE_DATE', 'CalendarUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('CALENDAR_WORK_DAYS', 'CalendarWorkDays', 'VARCHAR', true, 100, '');
		$this->addColumn('CALENDAR_DESCRIPTION', 'CalendarDescription', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CALENDAR_STATUS', 'CalendarStatus', 'VARCHAR', true, 8, 'ACTIVE');
		// validators
		$this->addValidator('CALENDAR_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|INACTIVE|DELETED', 'Please select a valid Calendar Status.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CalendarDefinitionTableMap
