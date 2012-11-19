<?php



/**
 * This class defines the structure of the 'CASE_SCHEDULER' table.
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
class CaseSchedulerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CaseSchedulerTableMap';

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
		$this->setName('CASE_SCHEDULER');
		$this->setPhpName('CaseScheduler');
		$this->setClassname('CaseScheduler');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SCH_UID', 'SchUid', 'VARCHAR', true, 32, null);
		$this->addColumn('SCH_DEL_USER_NAME', 'SchDelUserName', 'VARCHAR', true, 100, null);
		$this->addColumn('SCH_DEL_USER_PASS', 'SchDelUserPass', 'VARCHAR', true, 100, null);
		$this->addColumn('SCH_DEL_USER_UID', 'SchDelUserUid', 'VARCHAR', true, 100, null);
		$this->addColumn('SCH_NAME', 'SchName', 'VARCHAR', true, 100, null);
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SCH_TIME_NEXT_RUN', 'SchTimeNextRun', 'TIMESTAMP', true, null, null);
		$this->addColumn('SCH_LAST_RUN_TIME', 'SchLastRunTime', 'TIMESTAMP', false, null, null);
		$this->addColumn('SCH_STATE', 'SchState', 'VARCHAR', true, 15, 'ACTIVE');
		$this->addColumn('SCH_LAST_STATE', 'SchLastState', 'VARCHAR', true, 60, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SCH_OPTION', 'SchOption', 'TINYINT', true, null, 0);
		$this->addColumn('SCH_START_TIME', 'SchStartTime', 'TIMESTAMP', true, null, null);
		$this->addColumn('SCH_START_DATE', 'SchStartDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('SCH_DAYS_PERFORM_TASK', 'SchDaysPerformTask', 'CHAR', true, 5, '');
		$this->addColumn('SCH_EVERY_DAYS', 'SchEveryDays', 'TINYINT', false, null, 0);
		$this->addColumn('SCH_WEEK_DAYS', 'SchWeekDays', 'CHAR', true, 14, '0|0|0|0|0|0|0');
		$this->addColumn('SCH_START_DAY', 'SchStartDay', 'CHAR', true, 6, '');
		$this->addColumn('SCH_MONTHS', 'SchMonths', 'CHAR', true, 24, '0|0|0|0|0|0|0|0|0|0|0|0');
		$this->addColumn('SCH_END_DATE', 'SchEndDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('SCH_REPEAT_EVERY', 'SchRepeatEvery', 'VARCHAR', true, 15, '');
		$this->addColumn('SCH_REPEAT_UNTIL', 'SchRepeatUntil', 'VARCHAR', true, 15, '');
		$this->addColumn('SCH_REPEAT_STOP_IF_RUNNING', 'SchRepeatStopIfRunning', 'TINYINT', false, null, 0);
		$this->addColumn('CASE_SH_PLUGIN_UID', 'CaseShPluginUid', 'VARCHAR', false, 100, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CaseSchedulerTableMap
