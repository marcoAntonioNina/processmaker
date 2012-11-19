<?php


/**
 * Base static class for performing query and update operations on the 'ADDITIONAL_TABLES' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAdditionalTablesPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'workflow';

	/** the table name for this class */
	const TABLE_NAME = 'ADDITIONAL_TABLES';

	/** the related Propel class for this table */
	const OM_CLASS = 'AdditionalTables';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'classes.model.AdditionalTables';

	/** the related TableMap class for this table */
	const TM_CLASS = 'AdditionalTablesTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 16;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 16;

	/** the column name for the ADD_TAB_UID field */
	const ADD_TAB_UID = 'ADDITIONAL_TABLES.ADD_TAB_UID';

	/** the column name for the ADD_TAB_NAME field */
	const ADD_TAB_NAME = 'ADDITIONAL_TABLES.ADD_TAB_NAME';

	/** the column name for the ADD_TAB_CLASS_NAME field */
	const ADD_TAB_CLASS_NAME = 'ADDITIONAL_TABLES.ADD_TAB_CLASS_NAME';

	/** the column name for the ADD_TAB_DESCRIPTION field */
	const ADD_TAB_DESCRIPTION = 'ADDITIONAL_TABLES.ADD_TAB_DESCRIPTION';

	/** the column name for the ADD_TAB_SDW_LOG_INSERT field */
	const ADD_TAB_SDW_LOG_INSERT = 'ADDITIONAL_TABLES.ADD_TAB_SDW_LOG_INSERT';

	/** the column name for the ADD_TAB_SDW_LOG_UPDATE field */
	const ADD_TAB_SDW_LOG_UPDATE = 'ADDITIONAL_TABLES.ADD_TAB_SDW_LOG_UPDATE';

	/** the column name for the ADD_TAB_SDW_LOG_DELETE field */
	const ADD_TAB_SDW_LOG_DELETE = 'ADDITIONAL_TABLES.ADD_TAB_SDW_LOG_DELETE';

	/** the column name for the ADD_TAB_SDW_LOG_SELECT field */
	const ADD_TAB_SDW_LOG_SELECT = 'ADDITIONAL_TABLES.ADD_TAB_SDW_LOG_SELECT';

	/** the column name for the ADD_TAB_SDW_MAX_LENGTH field */
	const ADD_TAB_SDW_MAX_LENGTH = 'ADDITIONAL_TABLES.ADD_TAB_SDW_MAX_LENGTH';

	/** the column name for the ADD_TAB_SDW_AUTO_DELETE field */
	const ADD_TAB_SDW_AUTO_DELETE = 'ADDITIONAL_TABLES.ADD_TAB_SDW_AUTO_DELETE';

	/** the column name for the ADD_TAB_PLG_UID field */
	const ADD_TAB_PLG_UID = 'ADDITIONAL_TABLES.ADD_TAB_PLG_UID';

	/** the column name for the DBS_UID field */
	const DBS_UID = 'ADDITIONAL_TABLES.DBS_UID';

	/** the column name for the PRO_UID field */
	const PRO_UID = 'ADDITIONAL_TABLES.PRO_UID';

	/** the column name for the ADD_TAB_TYPE field */
	const ADD_TAB_TYPE = 'ADDITIONAL_TABLES.ADD_TAB_TYPE';

	/** the column name for the ADD_TAB_GRID field */
	const ADD_TAB_GRID = 'ADDITIONAL_TABLES.ADD_TAB_GRID';

	/** the column name for the ADD_TAB_TAG field */
	const ADD_TAB_TAG = 'ADDITIONAL_TABLES.ADD_TAB_TAG';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of AdditionalTables objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array AdditionalTables[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('AddTabUid', 'AddTabName', 'AddTabClassName', 'AddTabDescription', 'AddTabSdwLogInsert', 'AddTabSdwLogUpdate', 'AddTabSdwLogDelete', 'AddTabSdwLogSelect', 'AddTabSdwMaxLength', 'AddTabSdwAutoDelete', 'AddTabPlgUid', 'DbsUid', 'ProUid', 'AddTabType', 'AddTabGrid', 'AddTabTag', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('addTabUid', 'addTabName', 'addTabClassName', 'addTabDescription', 'addTabSdwLogInsert', 'addTabSdwLogUpdate', 'addTabSdwLogDelete', 'addTabSdwLogSelect', 'addTabSdwMaxLength', 'addTabSdwAutoDelete', 'addTabPlgUid', 'dbsUid', 'proUid', 'addTabType', 'addTabGrid', 'addTabTag', ),
		BasePeer::TYPE_COLNAME => array (self::ADD_TAB_UID, self::ADD_TAB_NAME, self::ADD_TAB_CLASS_NAME, self::ADD_TAB_DESCRIPTION, self::ADD_TAB_SDW_LOG_INSERT, self::ADD_TAB_SDW_LOG_UPDATE, self::ADD_TAB_SDW_LOG_DELETE, self::ADD_TAB_SDW_LOG_SELECT, self::ADD_TAB_SDW_MAX_LENGTH, self::ADD_TAB_SDW_AUTO_DELETE, self::ADD_TAB_PLG_UID, self::DBS_UID, self::PRO_UID, self::ADD_TAB_TYPE, self::ADD_TAB_GRID, self::ADD_TAB_TAG, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ADD_TAB_UID', 'ADD_TAB_NAME', 'ADD_TAB_CLASS_NAME', 'ADD_TAB_DESCRIPTION', 'ADD_TAB_SDW_LOG_INSERT', 'ADD_TAB_SDW_LOG_UPDATE', 'ADD_TAB_SDW_LOG_DELETE', 'ADD_TAB_SDW_LOG_SELECT', 'ADD_TAB_SDW_MAX_LENGTH', 'ADD_TAB_SDW_AUTO_DELETE', 'ADD_TAB_PLG_UID', 'DBS_UID', 'PRO_UID', 'ADD_TAB_TYPE', 'ADD_TAB_GRID', 'ADD_TAB_TAG', ),
		BasePeer::TYPE_FIELDNAME => array ('ADD_TAB_UID', 'ADD_TAB_NAME', 'ADD_TAB_CLASS_NAME', 'ADD_TAB_DESCRIPTION', 'ADD_TAB_SDW_LOG_INSERT', 'ADD_TAB_SDW_LOG_UPDATE', 'ADD_TAB_SDW_LOG_DELETE', 'ADD_TAB_SDW_LOG_SELECT', 'ADD_TAB_SDW_MAX_LENGTH', 'ADD_TAB_SDW_AUTO_DELETE', 'ADD_TAB_PLG_UID', 'DBS_UID', 'PRO_UID', 'ADD_TAB_TYPE', 'ADD_TAB_GRID', 'ADD_TAB_TAG', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('AddTabUid' => 0, 'AddTabName' => 1, 'AddTabClassName' => 2, 'AddTabDescription' => 3, 'AddTabSdwLogInsert' => 4, 'AddTabSdwLogUpdate' => 5, 'AddTabSdwLogDelete' => 6, 'AddTabSdwLogSelect' => 7, 'AddTabSdwMaxLength' => 8, 'AddTabSdwAutoDelete' => 9, 'AddTabPlgUid' => 10, 'DbsUid' => 11, 'ProUid' => 12, 'AddTabType' => 13, 'AddTabGrid' => 14, 'AddTabTag' => 15, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('addTabUid' => 0, 'addTabName' => 1, 'addTabClassName' => 2, 'addTabDescription' => 3, 'addTabSdwLogInsert' => 4, 'addTabSdwLogUpdate' => 5, 'addTabSdwLogDelete' => 6, 'addTabSdwLogSelect' => 7, 'addTabSdwMaxLength' => 8, 'addTabSdwAutoDelete' => 9, 'addTabPlgUid' => 10, 'dbsUid' => 11, 'proUid' => 12, 'addTabType' => 13, 'addTabGrid' => 14, 'addTabTag' => 15, ),
		BasePeer::TYPE_COLNAME => array (self::ADD_TAB_UID => 0, self::ADD_TAB_NAME => 1, self::ADD_TAB_CLASS_NAME => 2, self::ADD_TAB_DESCRIPTION => 3, self::ADD_TAB_SDW_LOG_INSERT => 4, self::ADD_TAB_SDW_LOG_UPDATE => 5, self::ADD_TAB_SDW_LOG_DELETE => 6, self::ADD_TAB_SDW_LOG_SELECT => 7, self::ADD_TAB_SDW_MAX_LENGTH => 8, self::ADD_TAB_SDW_AUTO_DELETE => 9, self::ADD_TAB_PLG_UID => 10, self::DBS_UID => 11, self::PRO_UID => 12, self::ADD_TAB_TYPE => 13, self::ADD_TAB_GRID => 14, self::ADD_TAB_TAG => 15, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ADD_TAB_UID' => 0, 'ADD_TAB_NAME' => 1, 'ADD_TAB_CLASS_NAME' => 2, 'ADD_TAB_DESCRIPTION' => 3, 'ADD_TAB_SDW_LOG_INSERT' => 4, 'ADD_TAB_SDW_LOG_UPDATE' => 5, 'ADD_TAB_SDW_LOG_DELETE' => 6, 'ADD_TAB_SDW_LOG_SELECT' => 7, 'ADD_TAB_SDW_MAX_LENGTH' => 8, 'ADD_TAB_SDW_AUTO_DELETE' => 9, 'ADD_TAB_PLG_UID' => 10, 'DBS_UID' => 11, 'PRO_UID' => 12, 'ADD_TAB_TYPE' => 13, 'ADD_TAB_GRID' => 14, 'ADD_TAB_TAG' => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('ADD_TAB_UID' => 0, 'ADD_TAB_NAME' => 1, 'ADD_TAB_CLASS_NAME' => 2, 'ADD_TAB_DESCRIPTION' => 3, 'ADD_TAB_SDW_LOG_INSERT' => 4, 'ADD_TAB_SDW_LOG_UPDATE' => 5, 'ADD_TAB_SDW_LOG_DELETE' => 6, 'ADD_TAB_SDW_LOG_SELECT' => 7, 'ADD_TAB_SDW_MAX_LENGTH' => 8, 'ADD_TAB_SDW_AUTO_DELETE' => 9, 'ADD_TAB_PLG_UID' => 10, 'DBS_UID' => 11, 'PRO_UID' => 12, 'ADD_TAB_TYPE' => 13, 'ADD_TAB_GRID' => 14, 'ADD_TAB_TAG' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
	 * @param      string $column The column name for current table. (i.e. AdditionalTablesPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(AdditionalTablesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_UID);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_NAME);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_CLASS_NAME);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_DESCRIPTION);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_PLG_UID);
			$criteria->addSelectColumn(AdditionalTablesPeer::DBS_UID);
			$criteria->addSelectColumn(AdditionalTablesPeer::PRO_UID);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_TYPE);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_GRID);
			$criteria->addSelectColumn(AdditionalTablesPeer::ADD_TAB_TAG);
		} else {
			$criteria->addSelectColumn($alias . '.ADD_TAB_UID');
			$criteria->addSelectColumn($alias . '.ADD_TAB_NAME');
			$criteria->addSelectColumn($alias . '.ADD_TAB_CLASS_NAME');
			$criteria->addSelectColumn($alias . '.ADD_TAB_DESCRIPTION');
			$criteria->addSelectColumn($alias . '.ADD_TAB_SDW_LOG_INSERT');
			$criteria->addSelectColumn($alias . '.ADD_TAB_SDW_LOG_UPDATE');
			$criteria->addSelectColumn($alias . '.ADD_TAB_SDW_LOG_DELETE');
			$criteria->addSelectColumn($alias . '.ADD_TAB_SDW_LOG_SELECT');
			$criteria->addSelectColumn($alias . '.ADD_TAB_SDW_MAX_LENGTH');
			$criteria->addSelectColumn($alias . '.ADD_TAB_SDW_AUTO_DELETE');
			$criteria->addSelectColumn($alias . '.ADD_TAB_PLG_UID');
			$criteria->addSelectColumn($alias . '.DBS_UID');
			$criteria->addSelectColumn($alias . '.PRO_UID');
			$criteria->addSelectColumn($alias . '.ADD_TAB_TYPE');
			$criteria->addSelectColumn($alias . '.ADD_TAB_GRID');
			$criteria->addSelectColumn($alias . '.ADD_TAB_TAG');
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
		$criteria->setPrimaryTableName(AdditionalTablesPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AdditionalTablesPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     AdditionalTables
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = AdditionalTablesPeer::doSelect($critcopy, $con);
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
		return AdditionalTablesPeer::populateObjects(AdditionalTablesPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			AdditionalTablesPeer::addSelectColumns($criteria);
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
	 * @param      AdditionalTables $value A AdditionalTables object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getAddTabUid();
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
	 * @param      mixed $value A AdditionalTables object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof AdditionalTables) {
				$key = (string) $value->getAddTabUid();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AdditionalTables object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     AdditionalTables Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to ADDITIONAL_TABLES
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
		$cls = AdditionalTablesPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = AdditionalTablesPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = AdditionalTablesPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				AdditionalTablesPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (AdditionalTables object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = AdditionalTablesPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = AdditionalTablesPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + AdditionalTablesPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = AdditionalTablesPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			AdditionalTablesPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseAdditionalTablesPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseAdditionalTablesPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new AdditionalTablesTableMap());
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
		return $withPrefix ? AdditionalTablesPeer::CLASS_DEFAULT : AdditionalTablesPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a AdditionalTables or Criteria object.
	 *
	 * @param      mixed $values Criteria or AdditionalTables object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from AdditionalTables object
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
	 * Performs an UPDATE on the database, given a AdditionalTables or Criteria object.
	 *
	 * @param      mixed $values Criteria or AdditionalTables object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(AdditionalTablesPeer::ADD_TAB_UID);
			$value = $criteria->remove(AdditionalTablesPeer::ADD_TAB_UID);
			if ($value) {
				$selectCriteria->add(AdditionalTablesPeer::ADD_TAB_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(AdditionalTablesPeer::TABLE_NAME);
			}

		} else { // $values is AdditionalTables object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the ADDITIONAL_TABLES table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(AdditionalTablesPeer::TABLE_NAME, $con, AdditionalTablesPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			AdditionalTablesPeer::clearInstancePool();
			AdditionalTablesPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a AdditionalTables or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or AdditionalTables object or primary key or array of primary keys
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
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			AdditionalTablesPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof AdditionalTables) { // it's a model object
			// invalidate the cache for this single object
			AdditionalTablesPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AdditionalTablesPeer::ADD_TAB_UID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				AdditionalTablesPeer::removeInstanceFromPool($singleval);
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
			AdditionalTablesPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given AdditionalTables object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      AdditionalTables $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AdditionalTablesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AdditionalTablesPeer::TABLE_NAME);

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

		return BasePeer::doValidate(AdditionalTablesPeer::DATABASE_NAME, AdditionalTablesPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     AdditionalTables
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = AdditionalTablesPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(AdditionalTablesPeer::DATABASE_NAME);
		$criteria->add(AdditionalTablesPeer::ADD_TAB_UID, $pk);

		$v = AdditionalTablesPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(AdditionalTablesPeer::DATABASE_NAME);
			$criteria->add(AdditionalTablesPeer::ADD_TAB_UID, $pks, Criteria::IN);
			$objs = AdditionalTablesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseAdditionalTablesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAdditionalTablesPeer::buildTableMap();

