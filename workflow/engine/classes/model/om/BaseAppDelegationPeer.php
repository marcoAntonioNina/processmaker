<?php


/**
 * Base static class for performing query and update operations on the 'APP_DELEGATION' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDelegationPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'workflow';

	/** the table name for this class */
	const TABLE_NAME = 'APP_DELEGATION';

	/** the related Propel class for this table */
	const OM_CLASS = 'AppDelegation';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'classes.model.AppDelegation';

	/** the related TableMap class for this table */
	const TM_CLASS = 'AppDelegationTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 22;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 22;

	/** the column name for the APP_UID field */
	const APP_UID = 'APP_DELEGATION.APP_UID';

	/** the column name for the DEL_INDEX field */
	const DEL_INDEX = 'APP_DELEGATION.DEL_INDEX';

	/** the column name for the DEL_PREVIOUS field */
	const DEL_PREVIOUS = 'APP_DELEGATION.DEL_PREVIOUS';

	/** the column name for the PRO_UID field */
	const PRO_UID = 'APP_DELEGATION.PRO_UID';

	/** the column name for the TAS_UID field */
	const TAS_UID = 'APP_DELEGATION.TAS_UID';

	/** the column name for the USR_UID field */
	const USR_UID = 'APP_DELEGATION.USR_UID';

	/** the column name for the DEL_TYPE field */
	const DEL_TYPE = 'APP_DELEGATION.DEL_TYPE';

	/** the column name for the DEL_THREAD field */
	const DEL_THREAD = 'APP_DELEGATION.DEL_THREAD';

	/** the column name for the DEL_THREAD_STATUS field */
	const DEL_THREAD_STATUS = 'APP_DELEGATION.DEL_THREAD_STATUS';

	/** the column name for the DEL_PRIORITY field */
	const DEL_PRIORITY = 'APP_DELEGATION.DEL_PRIORITY';

	/** the column name for the DEL_DELEGATE_DATE field */
	const DEL_DELEGATE_DATE = 'APP_DELEGATION.DEL_DELEGATE_DATE';

	/** the column name for the DEL_INIT_DATE field */
	const DEL_INIT_DATE = 'APP_DELEGATION.DEL_INIT_DATE';

	/** the column name for the DEL_TASK_DUE_DATE field */
	const DEL_TASK_DUE_DATE = 'APP_DELEGATION.DEL_TASK_DUE_DATE';

	/** the column name for the DEL_FINISH_DATE field */
	const DEL_FINISH_DATE = 'APP_DELEGATION.DEL_FINISH_DATE';

	/** the column name for the DEL_DURATION field */
	const DEL_DURATION = 'APP_DELEGATION.DEL_DURATION';

	/** the column name for the DEL_QUEUE_DURATION field */
	const DEL_QUEUE_DURATION = 'APP_DELEGATION.DEL_QUEUE_DURATION';

	/** the column name for the DEL_DELAY_DURATION field */
	const DEL_DELAY_DURATION = 'APP_DELEGATION.DEL_DELAY_DURATION';

	/** the column name for the DEL_STARTED field */
	const DEL_STARTED = 'APP_DELEGATION.DEL_STARTED';

	/** the column name for the DEL_FINISHED field */
	const DEL_FINISHED = 'APP_DELEGATION.DEL_FINISHED';

	/** the column name for the DEL_DELAYED field */
	const DEL_DELAYED = 'APP_DELEGATION.DEL_DELAYED';

	/** the column name for the DEL_DATA field */
	const DEL_DATA = 'APP_DELEGATION.DEL_DATA';

	/** the column name for the APP_OVERDUE_PERCENTAGE field */
	const APP_OVERDUE_PERCENTAGE = 'APP_DELEGATION.APP_OVERDUE_PERCENTAGE';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of AppDelegation objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array AppDelegation[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('AppUid', 'DelIndex', 'DelPrevious', 'ProUid', 'TasUid', 'UsrUid', 'DelType', 'DelThread', 'DelThreadStatus', 'DelPriority', 'DelDelegateDate', 'DelInitDate', 'DelTaskDueDate', 'DelFinishDate', 'DelDuration', 'DelQueueDuration', 'DelDelayDuration', 'DelStarted', 'DelFinished', 'DelDelayed', 'DelData', 'AppOverduePercentage', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('appUid', 'delIndex', 'delPrevious', 'proUid', 'tasUid', 'usrUid', 'delType', 'delThread', 'delThreadStatus', 'delPriority', 'delDelegateDate', 'delInitDate', 'delTaskDueDate', 'delFinishDate', 'delDuration', 'delQueueDuration', 'delDelayDuration', 'delStarted', 'delFinished', 'delDelayed', 'delData', 'appOverduePercentage', ),
		BasePeer::TYPE_COLNAME => array (self::APP_UID, self::DEL_INDEX, self::DEL_PREVIOUS, self::PRO_UID, self::TAS_UID, self::USR_UID, self::DEL_TYPE, self::DEL_THREAD, self::DEL_THREAD_STATUS, self::DEL_PRIORITY, self::DEL_DELEGATE_DATE, self::DEL_INIT_DATE, self::DEL_TASK_DUE_DATE, self::DEL_FINISH_DATE, self::DEL_DURATION, self::DEL_QUEUE_DURATION, self::DEL_DELAY_DURATION, self::DEL_STARTED, self::DEL_FINISHED, self::DEL_DELAYED, self::DEL_DATA, self::APP_OVERDUE_PERCENTAGE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('APP_UID', 'DEL_INDEX', 'DEL_PREVIOUS', 'PRO_UID', 'TAS_UID', 'USR_UID', 'DEL_TYPE', 'DEL_THREAD', 'DEL_THREAD_STATUS', 'DEL_PRIORITY', 'DEL_DELEGATE_DATE', 'DEL_INIT_DATE', 'DEL_TASK_DUE_DATE', 'DEL_FINISH_DATE', 'DEL_DURATION', 'DEL_QUEUE_DURATION', 'DEL_DELAY_DURATION', 'DEL_STARTED', 'DEL_FINISHED', 'DEL_DELAYED', 'DEL_DATA', 'APP_OVERDUE_PERCENTAGE', ),
		BasePeer::TYPE_FIELDNAME => array ('APP_UID', 'DEL_INDEX', 'DEL_PREVIOUS', 'PRO_UID', 'TAS_UID', 'USR_UID', 'DEL_TYPE', 'DEL_THREAD', 'DEL_THREAD_STATUS', 'DEL_PRIORITY', 'DEL_DELEGATE_DATE', 'DEL_INIT_DATE', 'DEL_TASK_DUE_DATE', 'DEL_FINISH_DATE', 'DEL_DURATION', 'DEL_QUEUE_DURATION', 'DEL_DELAY_DURATION', 'DEL_STARTED', 'DEL_FINISHED', 'DEL_DELAYED', 'DEL_DATA', 'APP_OVERDUE_PERCENTAGE', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('AppUid' => 0, 'DelIndex' => 1, 'DelPrevious' => 2, 'ProUid' => 3, 'TasUid' => 4, 'UsrUid' => 5, 'DelType' => 6, 'DelThread' => 7, 'DelThreadStatus' => 8, 'DelPriority' => 9, 'DelDelegateDate' => 10, 'DelInitDate' => 11, 'DelTaskDueDate' => 12, 'DelFinishDate' => 13, 'DelDuration' => 14, 'DelQueueDuration' => 15, 'DelDelayDuration' => 16, 'DelStarted' => 17, 'DelFinished' => 18, 'DelDelayed' => 19, 'DelData' => 20, 'AppOverduePercentage' => 21, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('appUid' => 0, 'delIndex' => 1, 'delPrevious' => 2, 'proUid' => 3, 'tasUid' => 4, 'usrUid' => 5, 'delType' => 6, 'delThread' => 7, 'delThreadStatus' => 8, 'delPriority' => 9, 'delDelegateDate' => 10, 'delInitDate' => 11, 'delTaskDueDate' => 12, 'delFinishDate' => 13, 'delDuration' => 14, 'delQueueDuration' => 15, 'delDelayDuration' => 16, 'delStarted' => 17, 'delFinished' => 18, 'delDelayed' => 19, 'delData' => 20, 'appOverduePercentage' => 21, ),
		BasePeer::TYPE_COLNAME => array (self::APP_UID => 0, self::DEL_INDEX => 1, self::DEL_PREVIOUS => 2, self::PRO_UID => 3, self::TAS_UID => 4, self::USR_UID => 5, self::DEL_TYPE => 6, self::DEL_THREAD => 7, self::DEL_THREAD_STATUS => 8, self::DEL_PRIORITY => 9, self::DEL_DELEGATE_DATE => 10, self::DEL_INIT_DATE => 11, self::DEL_TASK_DUE_DATE => 12, self::DEL_FINISH_DATE => 13, self::DEL_DURATION => 14, self::DEL_QUEUE_DURATION => 15, self::DEL_DELAY_DURATION => 16, self::DEL_STARTED => 17, self::DEL_FINISHED => 18, self::DEL_DELAYED => 19, self::DEL_DATA => 20, self::APP_OVERDUE_PERCENTAGE => 21, ),
		BasePeer::TYPE_RAW_COLNAME => array ('APP_UID' => 0, 'DEL_INDEX' => 1, 'DEL_PREVIOUS' => 2, 'PRO_UID' => 3, 'TAS_UID' => 4, 'USR_UID' => 5, 'DEL_TYPE' => 6, 'DEL_THREAD' => 7, 'DEL_THREAD_STATUS' => 8, 'DEL_PRIORITY' => 9, 'DEL_DELEGATE_DATE' => 10, 'DEL_INIT_DATE' => 11, 'DEL_TASK_DUE_DATE' => 12, 'DEL_FINISH_DATE' => 13, 'DEL_DURATION' => 14, 'DEL_QUEUE_DURATION' => 15, 'DEL_DELAY_DURATION' => 16, 'DEL_STARTED' => 17, 'DEL_FINISHED' => 18, 'DEL_DELAYED' => 19, 'DEL_DATA' => 20, 'APP_OVERDUE_PERCENTAGE' => 21, ),
		BasePeer::TYPE_FIELDNAME => array ('APP_UID' => 0, 'DEL_INDEX' => 1, 'DEL_PREVIOUS' => 2, 'PRO_UID' => 3, 'TAS_UID' => 4, 'USR_UID' => 5, 'DEL_TYPE' => 6, 'DEL_THREAD' => 7, 'DEL_THREAD_STATUS' => 8, 'DEL_PRIORITY' => 9, 'DEL_DELEGATE_DATE' => 10, 'DEL_INIT_DATE' => 11, 'DEL_TASK_DUE_DATE' => 12, 'DEL_FINISH_DATE' => 13, 'DEL_DURATION' => 14, 'DEL_QUEUE_DURATION' => 15, 'DEL_DELAY_DURATION' => 16, 'DEL_STARTED' => 17, 'DEL_FINISHED' => 18, 'DEL_DELAYED' => 19, 'DEL_DATA' => 20, 'APP_OVERDUE_PERCENTAGE' => 21, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. AppDelegationPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(AppDelegationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(AppDelegationPeer::APP_UID);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_INDEX);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_PREVIOUS);
			$criteria->addSelectColumn(AppDelegationPeer::PRO_UID);
			$criteria->addSelectColumn(AppDelegationPeer::TAS_UID);
			$criteria->addSelectColumn(AppDelegationPeer::USR_UID);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_TYPE);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_THREAD);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_THREAD_STATUS);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_PRIORITY);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_DELEGATE_DATE);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_INIT_DATE);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_TASK_DUE_DATE);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_FINISH_DATE);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_DURATION);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_QUEUE_DURATION);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_DELAY_DURATION);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_STARTED);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_FINISHED);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_DELAYED);
			$criteria->addSelectColumn(AppDelegationPeer::DEL_DATA);
			$criteria->addSelectColumn(AppDelegationPeer::APP_OVERDUE_PERCENTAGE);
		} else {
			$criteria->addSelectColumn($alias . '.APP_UID');
			$criteria->addSelectColumn($alias . '.DEL_INDEX');
			$criteria->addSelectColumn($alias . '.DEL_PREVIOUS');
			$criteria->addSelectColumn($alias . '.PRO_UID');
			$criteria->addSelectColumn($alias . '.TAS_UID');
			$criteria->addSelectColumn($alias . '.USR_UID');
			$criteria->addSelectColumn($alias . '.DEL_TYPE');
			$criteria->addSelectColumn($alias . '.DEL_THREAD');
			$criteria->addSelectColumn($alias . '.DEL_THREAD_STATUS');
			$criteria->addSelectColumn($alias . '.DEL_PRIORITY');
			$criteria->addSelectColumn($alias . '.DEL_DELEGATE_DATE');
			$criteria->addSelectColumn($alias . '.DEL_INIT_DATE');
			$criteria->addSelectColumn($alias . '.DEL_TASK_DUE_DATE');
			$criteria->addSelectColumn($alias . '.DEL_FINISH_DATE');
			$criteria->addSelectColumn($alias . '.DEL_DURATION');
			$criteria->addSelectColumn($alias . '.DEL_QUEUE_DURATION');
			$criteria->addSelectColumn($alias . '.DEL_DELAY_DURATION');
			$criteria->addSelectColumn($alias . '.DEL_STARTED');
			$criteria->addSelectColumn($alias . '.DEL_FINISHED');
			$criteria->addSelectColumn($alias . '.DEL_DELAYED');
			$criteria->addSelectColumn($alias . '.DEL_DATA');
			$criteria->addSelectColumn($alias . '.APP_OVERDUE_PERCENTAGE');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AppDelegationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AppDelegationPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     AppDelegation
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = AppDelegationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return AppDelegationPeer::populateObjects(AppDelegationPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			AppDelegationPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      AppDelegation $value A AppDelegation object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = serialize(array((string) $obj->getAppUid(), (string) $obj->getDelIndex()));
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A AppDelegation object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof AppDelegation) {
				$key = serialize(array((string) $value->getAppUid(), (string) $value->getDelIndex()));
			} elseif (is_array($value) && count($value) === 2) {
				// assume we've been passed a primary key
				$key = serialize(array((string) $value[0], (string) $value[1]));
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AppDelegation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     AppDelegation Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to APP_DELEGATION
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null && $row[$startcol + 1] === null) {
			return null;
		}
		return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return array((string) $row[$startcol], (int) $row[$startcol + 1]);
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = AppDelegationPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = AppDelegationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = AppDelegationPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				AppDelegationPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (AppDelegation object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = AppDelegationPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = AppDelegationPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + AppDelegationPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = AppDelegationPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			AppDelegationPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseAppDelegationPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseAppDelegationPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new AppDelegationTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? AppDelegationPeer::CLASS_DEFAULT : AppDelegationPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a AppDelegation or Criteria object.
	 *
	 * @param      mixed $values Criteria or AppDelegation object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from AppDelegation object
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a AppDelegation or Criteria object.
	 *
	 * @param      mixed $values Criteria or AppDelegation object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(AppDelegationPeer::APP_UID);
			$value = $criteria->remove(AppDelegationPeer::APP_UID);
			if ($value) {
				$selectCriteria->add(AppDelegationPeer::APP_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(AppDelegationPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(AppDelegationPeer::DEL_INDEX);
			$value = $criteria->remove(AppDelegationPeer::DEL_INDEX);
			if ($value) {
				$selectCriteria->add(AppDelegationPeer::DEL_INDEX, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(AppDelegationPeer::TABLE_NAME);
			}

		} else { // $values is AppDelegation object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the APP_DELEGATION table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(AppDelegationPeer::TABLE_NAME, $con, AppDelegationPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			AppDelegationPeer::clearInstancePool();
			AppDelegationPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a AppDelegation or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or AppDelegation object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			AppDelegationPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof AppDelegation) { // it's a model object
			// invalidate the cache for this single object
			AppDelegationPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			// primary key is composite; we therefore, expect
			// the primary key passed to be an array of pkey values
			if (count($values) == count($values, COUNT_RECURSIVE)) {
				// array is not multi-dimensional
				$values = array($values);
			}
			foreach ($values as $value) {
				$criterion = $criteria->getNewCriterion(AppDelegationPeer::APP_UID, $value[0]);
				$criterion->addAnd($criteria->getNewCriterion(AppDelegationPeer::DEL_INDEX, $value[1]));
				$criteria->addOr($criterion);
				// we can invalidate the cache for this single PK
				AppDelegationPeer::removeInstanceFromPool($value);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			AppDelegationPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given AppDelegation object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      AppDelegation $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AppDelegationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AppDelegationPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		if ($obj->isNew() || $obj->isColumnModified(AppDelegationPeer::DEL_TYPE))
			$columns[AppDelegationPeer::DEL_TYPE] = $obj->getDelType();

		if ($obj->isNew() || $obj->isColumnModified(AppDelegationPeer::DEL_PRIORITY))
			$columns[AppDelegationPeer::DEL_PRIORITY] = $obj->getDelPriority();

		if ($obj->isNew() || $obj->isColumnModified(AppDelegationPeer::DEL_THREAD_STATUS))
			$columns[AppDelegationPeer::DEL_THREAD_STATUS] = $obj->getDelThreadStatus();

		}

		return BasePeer::doValidate(AppDelegationPeer::DATABASE_NAME, AppDelegationPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve object using using composite pkey values.
	 * @param      string $app_uid
	 * @param      int $del_index
	 * @param      PropelPDO $con
	 * @return     AppDelegation
	 */
	public static function retrieveByPK($app_uid, $del_index, PropelPDO $con = null) {
		$_instancePoolKey = serialize(array((string) $app_uid, (string) $del_index));
 		if (null !== ($obj = AppDelegationPeer::getInstanceFromPool($_instancePoolKey))) {
 			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(AppDelegationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(AppDelegationPeer::DATABASE_NAME);
		$criteria->add(AppDelegationPeer::APP_UID, $app_uid);
		$criteria->add(AppDelegationPeer::DEL_INDEX, $del_index);
		$v = AppDelegationPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} // BaseAppDelegationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAppDelegationPeer::buildTableMap();

