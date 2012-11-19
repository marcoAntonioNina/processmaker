<?php



/**
 * This class defines the structure of the 'CALENDAR_ASSIGNMENTS' table.
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
class CalendarAssignmentsTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CalendarAssignmentsTableMap';

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
		$this->setName('CALENDAR_ASSIGNMENTS');
		$this->setPhpName('CalendarAssignments');
		$this->setClassname('CalendarAssignments');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('OBJECT_UID', 'ObjectUid', 'VARCHAR', true, 32, '');
		$this->addColumn('CALENDAR_UID', 'CalendarUid', 'VARCHAR', true, 32, '');
		$this->addColumn('OBJECT_TYPE', 'ObjectType', 'VARCHAR', true, 100, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CalendarAssignmentsTableMap
