<?php



/**
 * This class defines the structure of the 'LOG_CASES_SCHEDULER' table.
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
class LogCasesSchedulerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.LogCasesSchedulerTableMap';

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
		$this->setName('LOG_CASES_SCHEDULER');
		$this->setPhpName('LogCasesScheduler');
		$this->setClassname('LogCasesScheduler');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('LOG_CASE_UID', 'LogCaseUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_NAME', 'UsrName', 'VARCHAR', true, 32, '');
		$this->addColumn('EXEC_DATE', 'ExecDate', 'DATE', true, null, null);
		$this->addColumn('EXEC_HOUR', 'ExecHour', 'VARCHAR', true, 32, '12:00');
		$this->addColumn('RESULT', 'Result', 'VARCHAR', true, 32, 'SUCCESS');
		$this->addColumn('SCH_UID', 'SchUid', 'VARCHAR', true, 32, 'OPEN');
		$this->addColumn('WS_CREATE_CASE_STATUS', 'WsCreateCaseStatus', 'LONGVARCHAR', true, null, null);
		$this->addColumn('WS_ROUTE_CASE_STATUS', 'WsRouteCaseStatus', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LogCasesSchedulerTableMap
