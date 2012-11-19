<?php



/**
 * This class defines the structure of the 'APP_CACHE_VIEW' table.
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
class AppCacheViewTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppCacheViewTableMap';

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
		$this->setName('APP_CACHE_VIEW');
		$this->setPhpName('AppCacheView');
		$this->setClassname('AppCacheView');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		$this->addColumn('APP_NUMBER', 'AppNumber', 'INTEGER', true, null, 0);
		$this->addColumn('APP_STATUS', 'AppStatus', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PREVIOUS_USR_UID', 'PreviousUsrUid', 'VARCHAR', false, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DEL_DELEGATE_DATE', 'DelDelegateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('DEL_INIT_DATE', 'DelInitDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DEL_TASK_DUE_DATE', 'DelTaskDueDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DEL_FINISH_DATE', 'DelFinishDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DEL_THREAD_STATUS', 'DelThreadStatus', 'VARCHAR', false, 32, 'OPEN');
		$this->addColumn('APP_THREAD_STATUS', 'AppThreadStatus', 'VARCHAR', false, 32, 'OPEN');
		$this->addColumn('APP_TITLE', 'AppTitle', 'VARCHAR', true, 255, '');
		$this->addColumn('APP_PRO_TITLE', 'AppProTitle', 'VARCHAR', true, 255, '');
		$this->addColumn('APP_TAS_TITLE', 'AppTasTitle', 'VARCHAR', true, 255, '');
		$this->addColumn('APP_CURRENT_USER', 'AppCurrentUser', 'VARCHAR', false, 128, '');
		$this->addColumn('APP_DEL_PREVIOUS_USER', 'AppDelPreviousUser', 'VARCHAR', false, 128, '');
		$this->addColumn('DEL_PRIORITY', 'DelPriority', 'VARCHAR', true, 32, '3');
		$this->addColumn('DEL_DURATION', 'DelDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('DEL_QUEUE_DURATION', 'DelQueueDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('DEL_DELAY_DURATION', 'DelDelayDuration', 'DOUBLE', false, null, 0);
		$this->addColumn('DEL_STARTED', 'DelStarted', 'TINYINT', true, null, 0);
		$this->addColumn('DEL_FINISHED', 'DelFinished', 'TINYINT', true, null, 0);
		$this->addColumn('DEL_DELAYED', 'DelDelayed', 'TINYINT', true, null, 0);
		$this->addColumn('APP_CREATE_DATE', 'AppCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_FINISH_DATE', 'AppFinishDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('APP_UPDATE_DATE', 'AppUpdateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_OVERDUE_PERCENTAGE', 'AppOverduePercentage', 'DOUBLE', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppCacheViewTableMap
