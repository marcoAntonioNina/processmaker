<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/DbSourceTableMap.php';

include_once 'classes/model/DbSource.php';
/**
 * Base static class for performing query and update operations on the 'DB_SOURCE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDbSourcePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'DB_SOURCE';

    /** the related Propel class for this table */
    const OM_CLASS = 'DbSource';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.DbSource';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DbSourceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the DBS_UID field */
    const DBS_UID = 'DB_SOURCE.DBS_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'DB_SOURCE.PRO_UID';

    /** the column name for the DBS_TYPE field */
    const DBS_TYPE = 'DB_SOURCE.DBS_TYPE';

    /** the column name for the DBS_SERVER field */
    const DBS_SERVER = 'DB_SOURCE.DBS_SERVER';

    /** the column name for the DBS_DATABASE_NAME field */
    const DBS_DATABASE_NAME = 'DB_SOURCE.DBS_DATABASE_NAME';

    /** the column name for the DBS_USERNAME field */
    const DBS_USERNAME = 'DB_SOURCE.DBS_USERNAME';

    /** the column name for the DBS_PASSWORD field */
    const DBS_PASSWORD = 'DB_SOURCE.DBS_PASSWORD';

    /** the column name for the DBS_PORT field */
    const DBS_PORT = 'DB_SOURCE.DBS_PORT';

    /** the column name for the DBS_ENCODE field */
    const DBS_ENCODE = 'DB_SOURCE.DBS_ENCODE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of DbSource objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array DbSource[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('DbsUid', 'ProUid', 'DbsType', 'DbsServer', 'DbsDatabaseName', 'DbsUsername', 'DbsPassword', 'DbsPort', 'DbsEncode', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('dbsUid', 'proUid', 'dbsType', 'dbsServer', 'dbsDatabaseName', 'dbsUsername', 'dbsPassword', 'dbsPort', 'dbsEncode', ),
        BasePeer::TYPE_COLNAME => array (self::DBS_UID, self::PRO_UID, self::DBS_TYPE, self::DBS_SERVER, self::DBS_DATABASE_NAME, self::DBS_USERNAME, self::DBS_PASSWORD, self::DBS_PORT, self::DBS_ENCODE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('DBS_UID', 'PRO_UID', 'DBS_TYPE', 'DBS_SERVER', 'DBS_DATABASE_NAME', 'DBS_USERNAME', 'DBS_PASSWORD', 'DBS_PORT', 'DBS_ENCODE', ),
        BasePeer::TYPE_FIELDNAME => array ('DBS_UID', 'PRO_UID', 'DBS_TYPE', 'DBS_SERVER', 'DBS_DATABASE_NAME', 'DBS_USERNAME', 'DBS_PASSWORD', 'DBS_PORT', 'DBS_ENCODE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('DbsUid' => 0, 'ProUid' => 1, 'DbsType' => 2, 'DbsServer' => 3, 'DbsDatabaseName' => 4, 'DbsUsername' => 5, 'DbsPassword' => 6, 'DbsPort' => 7, 'DbsEncode' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('dbsUid' => 0, 'proUid' => 1, 'dbsType' => 2, 'dbsServer' => 3, 'dbsDatabaseName' => 4, 'dbsUsername' => 5, 'dbsPassword' => 6, 'dbsPort' => 7, 'dbsEncode' => 8, ),
        BasePeer::TYPE_COLNAME => array (self::DBS_UID => 0, self::PRO_UID => 1, self::DBS_TYPE => 2, self::DBS_SERVER => 3, self::DBS_DATABASE_NAME => 4, self::DBS_USERNAME => 5, self::DBS_PASSWORD => 6, self::DBS_PORT => 7, self::DBS_ENCODE => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('DBS_UID' => 0, 'PRO_UID' => 1, 'DBS_TYPE' => 2, 'DBS_SERVER' => 3, 'DBS_DATABASE_NAME' => 4, 'DBS_USERNAME' => 5, 'DBS_PASSWORD' => 6, 'DBS_PORT' => 7, 'DBS_ENCODE' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('DBS_UID' => 0, 'PRO_UID' => 1, 'DBS_TYPE' => 2, 'DBS_SERVER' => 3, 'DBS_DATABASE_NAME' => 4, 'DBS_USERNAME' => 5, 'DBS_PASSWORD' => 6, 'DBS_PORT' => 7, 'DBS_ENCODE' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
     *      $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *      $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. DbSourcePeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DbSourcePeer::TABLE_NAME.'.', $alias.'.', $column);
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
     *             rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(DbSourcePeer::DBS_UID);
            $criteria->addSelectColumn(DbSourcePeer::PRO_UID);
            $criteria->addSelectColumn(DbSourcePeer::DBS_TYPE);
            $criteria->addSelectColumn(DbSourcePeer::DBS_SERVER);
            $criteria->addSelectColumn(DbSourcePeer::DBS_DATABASE_NAME);
            $criteria->addSelectColumn(DbSourcePeer::DBS_USERNAME);
            $criteria->addSelectColumn(DbSourcePeer::DBS_PASSWORD);
            $criteria->addSelectColumn(DbSourcePeer::DBS_PORT);
            $criteria->addSelectColumn(DbSourcePeer::DBS_ENCODE);
        } else {
            $criteria->addSelectColumn($alias . '.DBS_UID');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.DBS_TYPE');
            $criteria->addSelectColumn($alias . '.DBS_SERVER');
            $criteria->addSelectColumn($alias . '.DBS_DATABASE_NAME');
            $criteria->addSelectColumn($alias . '.DBS_USERNAME');
            $criteria->addSelectColumn($alias . '.DBS_PASSWORD');
            $criteria->addSelectColumn($alias . '.DBS_PORT');
            $criteria->addSelectColumn($alias . '.DBS_ENCODE');
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
        $criteria->setPrimaryTableName(DbSourcePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DbSourcePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     DbSource
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DbSourcePeer::doSelect($critcopy, $con);
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
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return DbSourcePeer::populateObjects(DbSourcePeer::doSelectStmt($criteria, $con));
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
     *             rethrown wrapped into a PropelException.
     * @return     PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DbSourcePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
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
     *             rethrown wrapped into a PropelException.
     * @return     PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectRS(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DbSourcePeer::addSelectColumns($criteria);
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
     * @param      DbSource $value A DbSource object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getDbsUid(), (string) $obj->getProUid()));
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
     * @param      mixed $value A DbSource object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof DbSource) {
                $key = serialize(array((string) $value->getDbsUid(), (string) $value->getProUid()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or DbSource object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     DbSource Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to DB_SOURCE
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
        return array((string) $row[$startcol], (string) $row[$startcol + 1]);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
        // set the class once to avoid overhead in the loop
        $cls = DbSourcePeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DbSourcePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DbSourcePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DbSourcePeer::addInstanceToPool($obj, $key);
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
     *             rethrown wrapped into a PropelException.
     * @return     array (DbSource object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DbSourcePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DbSourcePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DbSourcePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DbSourcePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DbSourcePeer::addInstanceToPool($obj, $key);
        }
        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
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
        $dbMap = Propel::getDatabaseMap(BaseDbSourcePeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseDbSourcePeer::TABLE_NAME)) {
            $dbMap->addTableObject(new DbSourceTableMap());
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
        return $withPrefix ? DbSourcePeer::CLASS_DEFAULT : DbSourcePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a DbSource or Criteria object.
     *
     * @param      mixed $values Criteria or DbSource object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from DbSource object
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a DbSource or Criteria object.
     *
     * @param      mixed $values Criteria or DbSource object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DbSourcePeer::DBS_UID);
            $value = $criteria->remove(DbSourcePeer::DBS_UID);
            if ($value) {
                $selectCriteria->add(DbSourcePeer::DBS_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DbSourcePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DbSourcePeer::PRO_UID);
            $value = $criteria->remove(DbSourcePeer::PRO_UID);
            if ($value) {
                $selectCriteria->add(DbSourcePeer::PRO_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DbSourcePeer::TABLE_NAME);
            }

        } else {
            // $values is DbSource object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the DB_SOURCE table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DbSourcePeer::TABLE_NAME, $con, DbSourcePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DbSourcePeer::clearInstancePool();
            DbSourcePeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a DbSource or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or DbSource object or primary key or array of primary keys
     *             which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *             if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doDelete($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DbSourcePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof DbSource) { // it's a model object
            // invalidate the cache for this single object
            DbSourcePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DbSourcePeer::DBS_UID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DbSourcePeer::PRO_UID, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                DbSourcePeer::removeInstanceFromPool($value);
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
            DbSourcePeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given DbSource object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      DbSource $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DbSourcePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DbSourcePeer::TABLE_NAME);

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

        return BasePeer::doValidate(DbSourcePeer::DATABASE_NAME, DbSourcePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param      string $dbs_uid
     * @param      string $pro_uid
     * @param      PropelPDO $con
     * @return     DbSource
     */
    public static function retrieveByPK($dbs_uid, $pro_uid, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $dbs_uid, (string) $pro_uid));
        if (null !== ($obj = DbSourcePeer::getInstanceFromPool($_instancePoolKey))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(DbSourcePeer::DATABASE_NAME);
        $criteria->add(DbSourcePeer::DBS_UID, $dbs_uid);
        $criteria->add(DbSourcePeer::PRO_UID, $pro_uid);
        $v = DbSourcePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
}
// BaseDbSourcePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDbSourcePeer::buildTableMap();

