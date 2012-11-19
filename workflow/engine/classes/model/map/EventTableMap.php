<?php



/**
 * This class defines the structure of the 'EVENT' table.
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
class EventTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.EventTableMap';

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
		$this->setName('EVENT');
		$this->setPhpName('Event');
		$this->setClassname('Event');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('EVN_UID', 'EvnUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('EVN_STATUS', 'EvnStatus', 'VARCHAR', true, 16, 'OPEN');
		$this->addColumn('EVN_WHEN_OCCURS', 'EvnWhenOccurs', 'VARCHAR', false, 32, 'SINGLE');
		$this->addColumn('EVN_RELATED_TO', 'EvnRelatedTo', 'VARCHAR', false, 16, 'SINGLE');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('EVN_TAS_UID_FROM', 'EvnTasUidFrom', 'VARCHAR', false, 32, '');
		$this->addColumn('EVN_TAS_UID_TO', 'EvnTasUidTo', 'VARCHAR', false, 32, '');
		$this->addColumn('EVN_TAS_ESTIMATED_DURATION', 'EvnTasEstimatedDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('EVN_TIME_UNIT', 'EvnTimeUnit', 'VARCHAR', true, 10, 'DAYS');
		$this->addColumn('EVN_WHEN', 'EvnWhen', 'DOUBLE', true, null, 0);
		$this->addColumn('EVN_MAX_ATTEMPTS', 'EvnMaxAttempts', 'TINYINT', true, null, 3);
		$this->addColumn('EVN_ACTION', 'EvnAction', 'VARCHAR', true, 50, '');
		$this->addColumn('EVN_CONDITIONS', 'EvnConditions', 'LONGVARCHAR', false, null, null);
		$this->addColumn('EVN_ACTION_PARAMETERS', 'EvnActionParameters', 'LONGVARCHAR', false, null, null);
		$this->addColumn('TRI_UID', 'TriUid', 'VARCHAR', false, 32, '');
		$this->addColumn('EVN_POSX', 'EvnPosx', 'INTEGER', true, null, 0);
		$this->addColumn('EVN_POSY', 'EvnPosy', 'INTEGER', true, null, 0);
		$this->addColumn('EVN_TYPE', 'EvnType', 'VARCHAR', false, 32, '');
		$this->addColumn('TAS_EVN_UID', 'TasEvnUid', 'VARCHAR', false, 32, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // EventTableMap
