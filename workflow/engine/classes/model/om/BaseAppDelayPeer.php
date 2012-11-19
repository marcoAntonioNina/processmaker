<?php


/**
 * Base static class for performing query and update operations on the 'APP_DELAY' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDelayPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'workflow';

	/** the table name for this class */
	const TABLE_NAME = 'APP_DELAY';

	/** the related Propel class for this table */
	const OM_CLASS = 'AppDelay';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'classes.model.AppDelay';

	/** the related TableMap class for this table */
	const TM_CLASS = 'AppDelayTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 14;

	/** the column name for the APP_DELAY_UID field */
	const APP_DELAY_UID = 'APP_DELAY.APP_DELAY_UID';

	/** the column name for the PRO_UID field */
	const PRO_UID = 'APP_DELAY.PRO_UID';

	/** the column name for the APP_UID field */
	const APP_UID = 'APP_DELAY.APP_UID';

	/** the column name for the APP_THREAD_INDEX field */
	const APP_THREAD_INDEX = 'APP_DELAY.APP_THREAD_INDEX';

	/** the column name for the APP_DEL_INDEX field */
	const APP_DEL_INDEX = 'APP_DELAY.APP_DEL_INDEX';

	/** the column name for the APP_TYPE field */
	const APP_TYPE = 'APP_DELAY.APP_TYPE';

	/** the column name for the APP_STATUS field */
	const APP_STATUS = 'APP_DELAY.APP_STATUS';

	/** the column name for the APP_NEXT_TASK field */
	const APP_NEXT_TASK = 'APP_DELAY.APP_NEXT_TASK';

	/** the column name for the APP_DELEGATION_USER field */
	const APP_DELEGATION_USER = 'APP_DELAY.APP_DELEGATION_USER';

	/** the column name for the APP_ENABLE_ACTION_USER field */
	const APP_ENABLE_ACTION_USER = 'APP_DELAY.APP_ENABLE_ACTION_USER';

	/** the column name for the APP_ENABLE_ACTION_DATE field */
	const APP_ENABLE_ACTION_DATE = 'APP_DELAY.APP_ENABLE_ACTION_DATE';

	/** the column name for the APP_DISABLE_ACTION_USER field */
	const APP_DISABLE_ACTION_USER = 'APP_DELAY.APP_DISABLE_ACTION_USER';

	/** the column name for the APP_DISABLE_ACTION_DATE field */
	const APP_DISABLE_ACTION_DATE = 'APP_DELAY.APP_DISABLE_ACTION_DATE';

	/** the column name for the APP_AUTOMATIC_DISABLED_DATE field */
	const APP_AUTOMATIC_DISABLED_DATE = 'APP_DELAY.APP_AUTOMATIC_DISABLED_DATE';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of AppDelay objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array AppDelay[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('AppDelayUid', 'ProUid', 'AppUid', 'AppThreadIndex', 'AppDelIndex', 'AppType', 'AppStatus', 'AppNextTask', 'AppDelegationUser', 'AppEnableActionUser', 'AppEnableActionDate', 'AppDisableActionUser', 'AppDisableActionDate', 'AppAutomaticDisabledDate', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('appDelayUid', 'proUid', 'appUid', 'appThreadIndex', 'appDelIndex', 'appType', 'appStatus', 'appNextTask', 'appDelegationUser', 'appEnableActionUser', 'appEnableActionDate', 'appDisableActionUser', 'appDisableActionDate', 'appAutomaticDisabledDate', ),
		BasePeer::TYPE_COLNAME => array (self::APP_DELAY_UID, self::PRO_UID, self::APP_UID, self::APP_THREAD_INDEX, self::APP_DEL_INDEX, self::APP_TYPE, self::APP_STATUS, self::APP_NEXT_TASK, self::APP_DELEGATION_USER, self::APP_ENABLE_ACTION_USER, self::APP_ENABLE_ACTION_DATE, self::APP_DISABLE_ACTION_USER, self::APP_DISABLE_ACTION_DATE, self::APP_AUTOMATIC_DISABLED_DATE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('APP_DELAY_UID', 'PRO_UID', 'APP_UID', 'APP_THREAD_INDEX', 'APP_DEL_INDEX', 'APP_TYPE', 'APP_STATUS', 'APP_NEXT_TASK', 'APP_DELEGATION_USER', 'APP_ENABLE_ACTION_USER', 'APP_ENABLE_ACTION_DATE', 'APP_DISABLE_ACTION_USER', 'APP_DISABLE_ACTION_DATE', 'APP_AUTOMATIC_DISABLED_DATE', ),
		BasePeer::TYPE_FIELDNAME => array ('APP_DELAY_UID', 'PRO_UID', 'APP_UID', 'APP_THREAD_INDEX', 'APP_DEL_INDEX', 'APP_TYPE', 'APP_STATUS', 'APP_NEXT_TASK', 'APP_DELEGATION_USER', 'APP_ENABLE_ACTION_USER', 'APP_ENABLE_ACTION_DATE', 'APP_DISABLE_ACTION_USER', 'APP_DISABLE_ACTION_DATE', 'APP_AUTOMATIC_DISABLED_DATE', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('AppDelayUid' => 0, 'ProUid' => 1, 'AppUid' => 2, 'AppThreadIndex' => 3, 'AppDelIndex' => 4, 'AppType' => 5, 'AppStatus' => 6, 'AppNextTask' => 7, 'AppDelegationUser' => 8, 'AppEnableActionUser' => 9, 'AppEnableActionDate' => 10, 'AppDisableActionUser' => 11, 'AppDisableActionDate' => 12, 'AppAutomaticDisabledDate' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('appDelayUid' => 0, 'proUid' => 1, 'appUid' => 2, 'appThreadIndex' => 3, 'appDelIndex' => 4, 'appType' => 5, 'appStatus' => 6, 'appNextTask' => 7, 'appDelegationUser' => 8, 'appEnableActionUser' => 9, 'appEnableActionDate' => 10, 'appDisableActionUser' => 11, 'appDisableActionDate' => 12, 'appAutomaticDisabledDate' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::APP_DELAY_UID => 0, self::PRO_UID => 1, self::APP_UID => 2, self::APP_THREAD_INDEX => 3, self::APP_DEL_INDEX => 4, self::APP_TYPE => 5, self::APP_STATUS => 6, self::APP_NEXT_TASK => 7, self::APP_DELEGATION_USER => 8, self::APP_ENABLE_ACTION_USER => 9, self::APP_ENABLE_ACTION_DATE => 10, self::APP_DISABLE_ACTION_USER => 11, self::APP_DISABLE_ACTION_DATE => 12, self::APP_AUTOMATIC_DISABLED_DATE => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('APP_DELAY_UID' => 0, 'PRO_UID' => 1, 'APP_UID' => 2, 'APP_THREAD_INDEX' => 3, 'APP_DEL_INDEX' => 4, 'APP_TYPE' => 5, 'APP_STATUS' => 6, 'APP_NEXT_TASK' => 7, 'APP_DELEGATION_USER' => 8, 'APP_ENABLE_ACTION_USER' => 9, 'APP_ENABLE_ACTION_DATE' => 10, 'APP_DISABLE_ACTION_USER' => 11, 'APP_DISABLE_ACTION_DATE' => 12, 'APP_AUTOMATIC_DISABLED_DATE' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('APP_DELAY_UID' => 0, 'PRO_UID' => 1, 'APP_UID' => 2, 'APP_THREAD_INDEX' => 3, 'APP_DEL_INDEX' => 4, 'APP_TYPE' => 5, 'APP_STATUS' => 6, 'APP_NEXT_TASK' => 7, 'APP_DELEGATION_USER' => 8, 'APP_ENABLE_ACTION_USER' => 9, 'APP_ENABLE_ACTION_DATE' => 10, 'APP_DISABLE_ACTION_USER' => 11, 'APP_DISABLE_ACTION_DATE' => 12, 'APP_AUTOMATIC_DISABLED_DATE' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
	 * @param      string $column The column name for current table. (i.e. AppDelayPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(AppDelayPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(AppDelayPeer::APP_DELAY_UID);
			$criteria->addSelectColumn(AppDelayPeer::PRO_UID);
			$criteria->addSelectColumn(AppDelayPeer::APP_UID);
			$criteria->addSelectColumn(AppDelayPeer::APP_THREAD_INDEX);
			$criteria->addSelectColumn(AppDelayPeer::APP_DEL_INDEX);
			$criteria->addSelectColumn(AppDelayPeer::APP_TYPE);
			$criteria->addSelectColumn(AppDelayPeer::APP_STATUS);
			$criteria->addSelectColumn(AppDelayPeer::APP_NEXT_TASK);
			$criteria->addSelectColumn(AppDelayPeer::APP_DELEGATION_USER);
			$criteria->addSelectColumn(AppDelayPeer::APP_ENABLE_ACTION_USER);
			$criteria->addSelectColumn(AppDelayPeer::APP_ENABLE_ACTION_DATE);
			$criteria->addSelectColumn(AppDelayPeer::APP_DISABLE_ACTION_USER);
			$criteria->addSelectColumn(AppDelayPeer::APP_DISABLE_ACTION_DATE);
			$criteria->addSelectColumn(AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE);
		} else {
			$criteria->addSelectColumn($alias . '.APP_DELAY_UID');
			$criteria->addSelectColumn($alias . '.PRO_UID');
			$criteria->addSelectColumn($alias . '.APP_UID');
			$criteria->addSelectColumn($alias . '.APP_THREAD_INDEX');
			$criteria->addSelectColumn($alias . '.APP_DEL_INDEX');
			$criteria->addSelectColumn($alias . '.APP_TYPE');
			$criteria->addSelectColumn($alias . '.APP_STATUS');
			$criteria->addSelectColumn($alias . '.APP_NEXT_TASK');
			$criteria->addSelectColumn($alias . '.APP_DELEGATION_USER');
			$criteria->addSelectColumn($alias . '.APP_ENABLE_ACTION_USER');
			$criteria->addSelectColumn($alias . '.APP_ENABLE_ACTION_DATE');
			$criteria->addSelectColumn($alias . '.APP_DISABLE_ACTION_USER');
			$criteria->addSelectColumn($alias . '.APP_DISABLE_ACTION_DATE');
			$criteria->addSelectColumn($alias . '.APP_AUTOMATIC_DISABLED_DATE');
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
		$criteria->setPrimaryTableName(AppDelayPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AppDelayPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     AppDelay
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = AppDelayPeer::doSelect($critcopy, $con);
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
		return AppDelayPeer::populateObjects(AppDelayPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			AppDelayPeer::addSelectColumns($criteria);
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
	 * @param      AppDelay $value A AppDelay object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getAppDelayUid();
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
	 * @param      mixed $value A AppDelay object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof AppDelay) {
				$key = (string) $value->getAppDelayUid();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AppDelay object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     AppDelay Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to APP_DELAY
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
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
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
		return (string) $row[$startcol];
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
		$cls = AppDelayPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = AppDelayPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = AppDelayPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				AppDelayPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (AppDelay object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = AppDelayPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = AppDelayPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + AppDelayPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = AppDelayPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			AppDelayPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseAppDelayPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseAppDelayPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new AppDelayTableMap());
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
		return $withPrefix ? AppDelayPeer::CLASS_DEFAULT : AppDelayPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a AppDelay or Criteria object.
	 *
	 * @param      mixed $values Criteria or AppDelay object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from AppDelay object
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
	 * Performs an UPDATE on the database, given a AppDelay or Criteria object.
	 *
	 * @param      mixed $values Criteria or AppDelay object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(AppDelayPeer::APP_DELAY_UID);
			$value = $criteria->remove(AppDelayPeer::APP_DELAY_UID);
			if ($value) {
				$selectCriteria->add(AppDelayPeer::APP_DELAY_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(AppDelayPeer::TABLE_NAME);
			}

		} else { // $values is AppDelay object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the APP_DELAY table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(AppDelayPeer::TABLE_NAME, $con, AppDelayPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			AppDelayPeer::clearInstancePool();
			AppDelayPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a AppDelay or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or AppDelay object or primary key or array of primary keys
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
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			AppDelayPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof AppDelay) { // it's a model object
			// invalidate the cache for this single object
			AppDelayPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AppDelayPeer::APP_DELAY_UID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				AppDelayPeer::removeInstanceFromPool($singleval);
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
			AppDelayPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given AppDelay object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      AppDelay $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AppDelayPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AppDelayPeer::TABLE_NAME);

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

		}

		return BasePeer::doValidate(AppDelayPeer::DATABASE_NAME, AppDelayPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     AppDelay
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = AppDelayPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(AppDelayPeer::DATABASE_NAME);
		$criteria->add(AppDelayPeer::APP_DELAY_UID, $pk);

		$v = AppDelayPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(AppDelayPeer::DATABASE_NAME);
			$criteria->add(AppDelayPeer::APP_DELAY_UID, $pks, Criteria::IN);
			$objs = AppDelayPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseAppDelayPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAppDelayPeer::buildTableMap();

