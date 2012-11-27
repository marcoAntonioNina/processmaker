<?php

require_once 'classes/model/map/UsersTableMap.php';
/**
 * Base static class for performing query and update operations on the 'USERS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseUsersPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'rbac';

	/** the table name for this class */
	const TABLE_NAME = 'USERS';

	/** the related Propel class for this table */
	const OM_CLASS = 'Users';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'classes.model.Users';

	/** the related TableMap class for this table */
	const TM_CLASS = 'UsersTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 14;

	/** the column name for the USR_UID field */
	const USR_UID = 'USERS.USR_UID';

	/** the column name for the USR_USERNAME field */
	const USR_USERNAME = 'USERS.USR_USERNAME';

	/** the column name for the USR_PASSWORD field */
	const USR_PASSWORD = 'USERS.USR_PASSWORD';

	/** the column name for the USR_FIRSTNAME field */
	const USR_FIRSTNAME = 'USERS.USR_FIRSTNAME';

	/** the column name for the USR_LASTNAME field */
	const USR_LASTNAME = 'USERS.USR_LASTNAME';

	/** the column name for the USR_EMAIL field */
	const USR_EMAIL = 'USERS.USR_EMAIL';

	/** the column name for the USR_DUE_DATE field */
	const USR_DUE_DATE = 'USERS.USR_DUE_DATE';

	/** the column name for the USR_CREATE_DATE field */
	const USR_CREATE_DATE = 'USERS.USR_CREATE_DATE';

	/** the column name for the USR_UPDATE_DATE field */
	const USR_UPDATE_DATE = 'USERS.USR_UPDATE_DATE';

	/** the column name for the USR_STATUS field */
	const USR_STATUS = 'USERS.USR_STATUS';

	/** the column name for the USR_AUTH_TYPE field */
	const USR_AUTH_TYPE = 'USERS.USR_AUTH_TYPE';

	/** the column name for the UID_AUTH_SOURCE field */
	const UID_AUTH_SOURCE = 'USERS.UID_AUTH_SOURCE';

	/** the column name for the USR_AUTH_USER_DN field */
	const USR_AUTH_USER_DN = 'USERS.USR_AUTH_USER_DN';

	/** the column name for the USR_AUTH_SUPERVISOR_DN field */
	const USR_AUTH_SUPERVISOR_DN = 'USERS.USR_AUTH_SUPERVISOR_DN';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Users objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Users[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('UsrUid', 'UsrUsername', 'UsrPassword', 'UsrFirstname', 'UsrLastname', 'UsrEmail', 'UsrDueDate', 'UsrCreateDate', 'UsrUpdateDate', 'UsrStatus', 'UsrAuthType', 'UidAuthSource', 'UsrAuthUserDn', 'UsrAuthSupervisorDn', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('usrUid', 'usrUsername', 'usrPassword', 'usrFirstname', 'usrLastname', 'usrEmail', 'usrDueDate', 'usrCreateDate', 'usrUpdateDate', 'usrStatus', 'usrAuthType', 'uidAuthSource', 'usrAuthUserDn', 'usrAuthSupervisorDn', ),
		BasePeer::TYPE_COLNAME => array (self::USR_UID, self::USR_USERNAME, self::USR_PASSWORD, self::USR_FIRSTNAME, self::USR_LASTNAME, self::USR_EMAIL, self::USR_DUE_DATE, self::USR_CREATE_DATE, self::USR_UPDATE_DATE, self::USR_STATUS, self::USR_AUTH_TYPE, self::UID_AUTH_SOURCE, self::USR_AUTH_USER_DN, self::USR_AUTH_SUPERVISOR_DN, ),
		BasePeer::TYPE_RAW_COLNAME => array ('USR_UID', 'USR_USERNAME', 'USR_PASSWORD', 'USR_FIRSTNAME', 'USR_LASTNAME', 'USR_EMAIL', 'USR_DUE_DATE', 'USR_CREATE_DATE', 'USR_UPDATE_DATE', 'USR_STATUS', 'USR_AUTH_TYPE', 'UID_AUTH_SOURCE', 'USR_AUTH_USER_DN', 'USR_AUTH_SUPERVISOR_DN', ),
		BasePeer::TYPE_FIELDNAME => array ('USR_UID', 'USR_USERNAME', 'USR_PASSWORD', 'USR_FIRSTNAME', 'USR_LASTNAME', 'USR_EMAIL', 'USR_DUE_DATE', 'USR_CREATE_DATE', 'USR_UPDATE_DATE', 'USR_STATUS', 'USR_AUTH_TYPE', 'UID_AUTH_SOURCE', 'USR_AUTH_USER_DN', 'USR_AUTH_SUPERVISOR_DN', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('UsrUid' => 0, 'UsrUsername' => 1, 'UsrPassword' => 2, 'UsrFirstname' => 3, 'UsrLastname' => 4, 'UsrEmail' => 5, 'UsrDueDate' => 6, 'UsrCreateDate' => 7, 'UsrUpdateDate' => 8, 'UsrStatus' => 9, 'UsrAuthType' => 10, 'UidAuthSource' => 11, 'UsrAuthUserDn' => 12, 'UsrAuthSupervisorDn' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('usrUid' => 0, 'usrUsername' => 1, 'usrPassword' => 2, 'usrFirstname' => 3, 'usrLastname' => 4, 'usrEmail' => 5, 'usrDueDate' => 6, 'usrCreateDate' => 7, 'usrUpdateDate' => 8, 'usrStatus' => 9, 'usrAuthType' => 10, 'uidAuthSource' => 11, 'usrAuthUserDn' => 12, 'usrAuthSupervisorDn' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::USR_UID => 0, self::USR_USERNAME => 1, self::USR_PASSWORD => 2, self::USR_FIRSTNAME => 3, self::USR_LASTNAME => 4, self::USR_EMAIL => 5, self::USR_DUE_DATE => 6, self::USR_CREATE_DATE => 7, self::USR_UPDATE_DATE => 8, self::USR_STATUS => 9, self::USR_AUTH_TYPE => 10, self::UID_AUTH_SOURCE => 11, self::USR_AUTH_USER_DN => 12, self::USR_AUTH_SUPERVISOR_DN => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('USR_UID' => 0, 'USR_USERNAME' => 1, 'USR_PASSWORD' => 2, 'USR_FIRSTNAME' => 3, 'USR_LASTNAME' => 4, 'USR_EMAIL' => 5, 'USR_DUE_DATE' => 6, 'USR_CREATE_DATE' => 7, 'USR_UPDATE_DATE' => 8, 'USR_STATUS' => 9, 'USR_AUTH_TYPE' => 10, 'UID_AUTH_SOURCE' => 11, 'USR_AUTH_USER_DN' => 12, 'USR_AUTH_SUPERVISOR_DN' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('USR_UID' => 0, 'USR_USERNAME' => 1, 'USR_PASSWORD' => 2, 'USR_FIRSTNAME' => 3, 'USR_LASTNAME' => 4, 'USR_EMAIL' => 5, 'USR_DUE_DATE' => 6, 'USR_CREATE_DATE' => 7, 'USR_UPDATE_DATE' => 8, 'USR_STATUS' => 9, 'USR_AUTH_TYPE' => 10, 'UID_AUTH_SOURCE' => 11, 'USR_AUTH_USER_DN' => 12, 'USR_AUTH_SUPERVISOR_DN' => 13, ),
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
	 * @param      string $column The column name for current table. (i.e. UsersPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(UsersPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(UsersPeer::USR_UID);
			$criteria->addSelectColumn(UsersPeer::USR_USERNAME);
			$criteria->addSelectColumn(UsersPeer::USR_PASSWORD);
			$criteria->addSelectColumn(UsersPeer::USR_FIRSTNAME);
			$criteria->addSelectColumn(UsersPeer::USR_LASTNAME);
			$criteria->addSelectColumn(UsersPeer::USR_EMAIL);
			$criteria->addSelectColumn(UsersPeer::USR_DUE_DATE);
			$criteria->addSelectColumn(UsersPeer::USR_CREATE_DATE);
			$criteria->addSelectColumn(UsersPeer::USR_UPDATE_DATE);
			$criteria->addSelectColumn(UsersPeer::USR_STATUS);
			$criteria->addSelectColumn(UsersPeer::USR_AUTH_TYPE);
			$criteria->addSelectColumn(UsersPeer::UID_AUTH_SOURCE);
			$criteria->addSelectColumn(UsersPeer::USR_AUTH_USER_DN);
			$criteria->addSelectColumn(UsersPeer::USR_AUTH_SUPERVISOR_DN);
		} else {
			$criteria->addSelectColumn($alias . '.USR_UID');
			$criteria->addSelectColumn($alias . '.USR_USERNAME');
			$criteria->addSelectColumn($alias . '.USR_PASSWORD');
			$criteria->addSelectColumn($alias . '.USR_FIRSTNAME');
			$criteria->addSelectColumn($alias . '.USR_LASTNAME');
			$criteria->addSelectColumn($alias . '.USR_EMAIL');
			$criteria->addSelectColumn($alias . '.USR_DUE_DATE');
			$criteria->addSelectColumn($alias . '.USR_CREATE_DATE');
			$criteria->addSelectColumn($alias . '.USR_UPDATE_DATE');
			$criteria->addSelectColumn($alias . '.USR_STATUS');
			$criteria->addSelectColumn($alias . '.USR_AUTH_TYPE');
			$criteria->addSelectColumn($alias . '.UID_AUTH_SOURCE');
			$criteria->addSelectColumn($alias . '.USR_AUTH_USER_DN');
			$criteria->addSelectColumn($alias . '.USR_AUTH_SUPERVISOR_DN');
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
		$criteria->setPrimaryTableName(UsersPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			UsersPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Users
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UsersPeer::doSelect($critcopy, $con);
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
		return UsersPeer::populateObjects(UsersPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			UsersPeer::addSelectColumns($criteria);
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
	 * @param      Users $value A Users object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getUsrUid();
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
	 * @param      mixed $value A Users object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Users) {
				$key = (string) $value->getUsrUid();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Users object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Users Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to USERS
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
		$cls = UsersPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = UsersPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = UsersPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				UsersPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Users object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = UsersPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + UsersPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = UsersPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			UsersPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseUsersPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseUsersPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new UsersTableMap());
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
		return $withPrefix ? UsersPeer::CLASS_DEFAULT : UsersPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Users or Criteria object.
	 *
	 * @param      mixed $values Criteria or Users object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Users object
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
	 * Performs an UPDATE on the database, given a Users or Criteria object.
	 *
	 * @param      mixed $values Criteria or Users object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(UsersPeer::USR_UID);
			$value = $criteria->remove(UsersPeer::USR_UID);
			if ($value) {
				$selectCriteria->add(UsersPeer::USR_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(UsersPeer::TABLE_NAME);
			}

		} else { // $values is Users object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the USERS table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(UsersPeer::TABLE_NAME, $con, UsersPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			UsersPeer::clearInstancePool();
			UsersPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Users or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Users object or primary key or array of primary keys
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			UsersPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Users) { // it's a model object
			// invalidate the cache for this single object
			UsersPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UsersPeer::USR_UID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				UsersPeer::removeInstanceFromPool($singleval);
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
			UsersPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Users object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Users $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UsersPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UsersPeer::TABLE_NAME);

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

		return BasePeer::doValidate(UsersPeer::DATABASE_NAME, UsersPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Users
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = UsersPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(UsersPeer::DATABASE_NAME);
		$criteria->add(UsersPeer::USR_UID, $pk);

		$v = UsersPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(UsersPeer::DATABASE_NAME);
			$criteria->add(UsersPeer::USR_UID, $pks, Criteria::IN);
			$objs = UsersPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseUsersPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUsersPeer::buildTableMap();

