<?php



/**
 * This class defines the structure of the 'APP_DELEGATION' table.
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
class AppDelegationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppDelegationTableMap';

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
		$this->setName('APP_DELEGATION');
		$this->setPhpName('AppDelegation');
		$this->setClassname('AppDelegation');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		$this->addColumn('DEL_PREVIOUS', 'DelPrevious', 'INTEGER', true, null, 0);
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DEL_TYPE', 'DelType', 'VARCHAR', true, 32, 'NORMAL');
		$this->addColumn('DEL_THREAD', 'DelThread', 'INTEGER', true, null, 0);
		$this->addColumn('DEL_THREAD_STATUS', 'DelThreadStatus', 'VARCHAR', true, 32, 'OPEN');
		$this->addColumn('DEL_PRIORITY', 'DelPriority', 'VARCHAR', true, 32, '3');
		$this->addColumn('DEL_DELEGATE_DATE', 'DelDelegateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('DEL_INIT_DATE', 'DelInitDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DEL_TASK_DUE_DATE', 'DelTaskDueDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DEL_FINISH_DATE', 'DelFinishDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DEL_DURATION', 'DelDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('DEL_QUEUE_DURATION', 'DelQueueDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('DEL_DELAY_DURATION', 'DelDelayDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('DEL_STARTED', 'DelStarted', 'TINYINT', false, null, 0);
		$this->addColumn('DEL_FINISHED', 'DelFinished', 'TINYINT', false, null, 0);
		$this->addColumn('DEL_DELAYED', 'DelDelayed', 'TINYINT', false, null, 0);
		$this->addColumn('DEL_DATA', 'DelData', 'LONGVARCHAR', true, null, null);
		$this->addColumn('APP_OVERDUE_PERCENTAGE', 'AppOverduePercentage', 'DOUBLE', true, null, 0);
		// validators
		$this->addValidator('DEL_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'NORMAL|PARALLEL', 'Please select a valid status.');
		$this->addValidator('DEL_PRIORITY', 'validValues', 'propel.validator.ValidValuesValidator', '1|2|3|4|5', 'Please select a valid Priority.');
		$this->addValidator('DEL_THREAD_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'CLOSED|OPEN|PAUSED', 'Please select a valid status.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppDelegationTableMap
