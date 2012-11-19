<?php


/**
 * Base static class for performing query and update operations on the 'STEP_TRIGGER' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseStepTriggerPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'workflow';

	/** the table name for this class */
	const TABLE_NAME = 'STEP_TRIGGER';

	/** the related Propel class for this table */
	const OM_CLASS = 'StepTrigger';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'classes.model.StepTrigger';

	/** the related TableMap class for this table */
	const TM_CLASS = 'StepTriggerTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 6;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 6;

	/** the column name for the STEP_UID field */
	const STEP_UID = 'STEP_TRIGGER.STEP_UID';

	/** the column name for the TAS_UID field */
	const TAS_UID = 'STEP_TRIGGER.TAS_UID';

	/** the column name for the TRI_UID field */
	const TRI_UID = 'STEP_TRIGGER.TRI_UID';

	/** the column name for the ST_TYPE field */
	const ST_TYPE = 'STEP_TRIGGER.ST_TYPE';

	/** the column name for the ST_CONDITION field */
	const ST_CONDITION = 'STEP_TRIGGER.ST_CONDITION';

	/** the column name for the ST_POSITION field */
	const ST_POSITION = 'STEP_TRIGGER.ST_POSITION';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of StepTrigger objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array StepTrigger[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('StepUid', 'TasUid', 'TriUid', 'StType', 'StCondition', 'StPosition', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('stepUid', 'tasUid', 'triUid', 'stType', 'stCondition', 'stPosition', ),
		BasePeer::TYPE_COLNAME => array (self::STEP_UID, self::TAS_UID, self::TRI_UID, self::ST_TYPE, self::ST_CONDITION, self::ST_POSITION, ),
		BasePeer::TYPE_RAW_COLNAME => array ('STEP_UID', 'TAS_UID', 'TRI_UID', 'ST_TYPE', 'ST_CONDITION', 'ST_POSITION', ),
		BasePeer::TYPE_FIELDNAME => array ('STEP_UID', 'TAS_UID', 'TRI_UID', 'ST_TYPE', 'ST_CONDITION', 'ST_POSITION', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('StepUid' => 0, 'TasUid' => 1, 'TriUid' => 2, 'StType' => 3, 'StCondition' => 4, 'StPosition' => 5, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('stepUid' => 0, 'tasUid' => 1, 'triUid' => 2, 'stType' => 3, 'stCondition' => 4, 'stPosition' => 5, ),
		BasePeer::TYPE_COLNAME => array (self::STEP_UID => 0, self::TAS_UID => 1, self::TRI_UID => 2, self::ST_TYPE => 3, self::ST_CONDITION => 4, self::ST_POSITION => 5, ),
		BasePeer::TYPE_RAW_COLNAME => array ('STEP_UID' => 0, 'TAS_UID' => 1, 'TRI_UID' => 2, 'ST_TYPE' => 3, 'ST_CONDITION' => 4, 'ST_POSITION' => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('STEP_UID' => 0, 'TAS_UID' => 1, 'TRI_UID' => 2, 'ST_TYPE' => 3, 'ST_CONDITION' => 4, 'ST_POSITION' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
	 * @param      string $column The column name for current table. (i.e. StepTriggerPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(StepTriggerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(StepTriggerPeer::STEP_UID);
			$criteria->addSelectColumn(StepTriggerPeer::TAS_UID);
			$criteria->addSelectColumn(StepTriggerPeer::TRI_UID);
			$criteria->addSelectColumn(StepTriggerPeer::ST_TYPE);
			$criteria->addSelectColumn(StepTriggerPeer::ST_CONDITION);
			$criteria->addSelectColumn(StepTriggerPeer::ST_POSITION);
		} else {
			$criteria->addSelectColumn($alias . '.STEP_UID');
			$criteria->addSelectColumn($alias . '.TAS_UID');
			$criteria->addSelectColumn($alias . '.TRI_UID');
			$criteria->addSelectColumn($alias . '.ST_TYPE');
			$criteria->addSelectColumn($alias . '.ST_CONDITION');
			$criteria->addSelectColumn($alias . '.ST_POSITION');
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
		$criteria->setPrimaryTableName(StepTriggerPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			StepTriggerPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     StepTrigger
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = StepTriggerPeer::doSelect($critcopy, $con);
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
		return StepTriggerPeer::populateObjects(StepTriggerPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			StepTriggerPeer::addSelectColumns($criteria);
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
	 * @param      StepTrigger $value A StepTrigger object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = serialize(array((string) $obj->getStepUid(), (string) $obj->getTasUid(), (string) $obj->getTriUid(), (string) $obj->getStType()));
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
	 * @param      mixed $value A StepTrigger object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof StepTrigger) {
				$key = serialize(array((string) $value->getStepUid(), (string) $value->getTasUid(), (string) $value->getTriUid(), (string) $value->getStType()));
			} elseif (is_array($value) && count($value) === 4) {
				// assume we've been passed a primary key
				$key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or StepTrigger object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     StepTrigger Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to STEP_TRIGGER
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
		if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null) {
			return null;
		}
		return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3]));
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
		return array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3]);
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
		$cls = StepTriggerPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = StepTriggerPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = StepTriggerPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				StepTriggerPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (StepTrigger object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = StepTriggerPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = StepTriggerPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + StepTriggerPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = StepTriggerPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			StepTriggerPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseStepTriggerPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseStepTriggerPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new StepTriggerTableMap());
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
		return $withPrefix ? StepTriggerPeer::CLASS_DEFAULT : StepTriggerPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a StepTrigger or Criteria object.
	 *
	 * @param      mixed $values Criteria or StepTrigger object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from StepTrigger object
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
	 * Performs an UPDATE on the database, given a StepTrigger or Criteria object.
	 *
	 * @param      mixed $values Criteria or StepTrigger object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(StepTriggerPeer::STEP_UID);
			$value = $criteria->remove(StepTriggerPeer::STEP_UID);
			if ($value) {
				$selectCriteria->add(StepTriggerPeer::STEP_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(StepTriggerPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(StepTriggerPeer::TAS_UID);
			$value = $criteria->remove(StepTriggerPeer::TAS_UID);
			if ($value) {
				$selectCriteria->add(StepTriggerPeer::TAS_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(StepTriggerPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(StepTriggerPeer::TRI_UID);
			$value = $criteria->remove(StepTriggerPeer::TRI_UID);
			if ($value) {
				$selectCriteria->add(StepTriggerPeer::TRI_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(StepTriggerPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(StepTriggerPeer::ST_TYPE);
			$value = $criteria->remove(StepTriggerPeer::ST_TYPE);
			if ($value) {
				$selectCriteria->add(StepTriggerPeer::ST_TYPE, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(StepTriggerPeer::TABLE_NAME);
			}

		} else { // $values is StepTrigger object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the STEP_TRIGGER table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(StepTriggerPeer::TABLE_NAME, $con, StepTriggerPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			StepTriggerPeer::clearInstancePool();
			StepTriggerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a StepTrigger or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or StepTrigger object or primary key or array of primary keys
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
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			StepTriggerPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof StepTrigger) { // it's a model object
			// invalidate the cache for this single object
			StepTriggerPeer::removeInstanceFromPool($values);
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
				$criterion = $criteria->getNewCriterion(StepTriggerPeer::STEP_UID, $value[0]);
				$criterion->addAnd($criteria->getNewCriterion(StepTriggerPeer::TAS_UID, $value[1]));
				$criterion->addAnd($criteria->getNewCriterion(StepTriggerPeer::TRI_UID, $value[2]));
				$criterion->addAnd($criteria->getNewCriterion(StepTriggerPeer::ST_TYPE, $value[3]));
				$criteria->addOr($criterion);
				// we can invalidate the cache for this single PK
				StepTriggerPeer::removeInstanceFromPool($value);
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
			StepTriggerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given StepTrigger object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      StepTrigger $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(StepTriggerPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(StepTriggerPeer::TABLE_NAME);

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

		if ($obj->isNew() || $obj->isColumnModified(StepTriggerPeer::ST_TYPE))
			$columns[StepTriggerPeer::ST_TYPE] = $obj->getStType();

		}

		return BasePeer::doValidate(StepTriggerPeer::DATABASE_NAME, StepTriggerPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve object using using composite pkey values.
	 * @param      string $step_uid
	 * @param      string $tas_uid
	 * @param      string $tri_uid
	 * @param      string $st_type
	 * @param      PropelPDO $con
	 * @return     StepTrigger
	 */
	public static function retrieveByPK($step_uid, $tas_uid, $tri_uid, $st_type, PropelPDO $con = null) {
		$_instancePoolKey = serialize(array((string) $step_uid, (string) $tas_uid, (string) $tri_uid, (string) $st_type));
 		if (null !== ($obj = StepTriggerPeer::getInstanceFromPool($_instancePoolKey))) {
 			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(StepTriggerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(StepTriggerPeer::DATABASE_NAME);
		$criteria->add(StepTriggerPeer::STEP_UID, $step_uid);
		$criteria->add(StepTriggerPeer::TAS_UID, $tas_uid);
		$criteria->add(StepTriggerPeer::TRI_UID, $tri_uid);
		$criteria->add(StepTriggerPeer::ST_TYPE, $st_type);
		$v = StepTriggerPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} // BaseStepTriggerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStepTriggerPeer::buildTableMap();

