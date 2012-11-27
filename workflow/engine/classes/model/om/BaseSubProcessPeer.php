<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/SubProcessTableMap.php';

include_once 'classes/model/SubProcess.php';
/**
 * Base static class for performing query and update operations on the 'SUB_PROCESS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSubProcessPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'SUB_PROCESS';

    /** the related Propel class for this table */
    const OM_CLASS = 'SubProcess';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.SubProcess';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SubProcessTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the SP_UID field */
    const SP_UID = 'SUB_PROCESS.SP_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'SUB_PROCESS.PRO_UID';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'SUB_PROCESS.TAS_UID';

    /** the column name for the PRO_PARENT field */
    const PRO_PARENT = 'SUB_PROCESS.PRO_PARENT';

    /** the column name for the TAS_PARENT field */
    const TAS_PARENT = 'SUB_PROCESS.TAS_PARENT';

    /** the column name for the SP_TYPE field */
    const SP_TYPE = 'SUB_PROCESS.SP_TYPE';

    /** the column name for the SP_SYNCHRONOUS field */
    const SP_SYNCHRONOUS = 'SUB_PROCESS.SP_SYNCHRONOUS';

    /** the column name for the SP_SYNCHRONOUS_TYPE field */
    const SP_SYNCHRONOUS_TYPE = 'SUB_PROCESS.SP_SYNCHRONOUS_TYPE';

    /** the column name for the SP_SYNCHRONOUS_WAIT field */
    const SP_SYNCHRONOUS_WAIT = 'SUB_PROCESS.SP_SYNCHRONOUS_WAIT';

    /** the column name for the SP_VARIABLES_OUT field */
    const SP_VARIABLES_OUT = 'SUB_PROCESS.SP_VARIABLES_OUT';

    /** the column name for the SP_VARIABLES_IN field */
    const SP_VARIABLES_IN = 'SUB_PROCESS.SP_VARIABLES_IN';

    /** the column name for the SP_GRID_IN field */
    const SP_GRID_IN = 'SUB_PROCESS.SP_GRID_IN';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of SubProcess objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SubProcess[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('SpUid', 'ProUid', 'TasUid', 'ProParent', 'TasParent', 'SpType', 'SpSynchronous', 'SpSynchronousType', 'SpSynchronousWait', 'SpVariablesOut', 'SpVariablesIn', 'SpGridIn', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('spUid', 'proUid', 'tasUid', 'proParent', 'tasParent', 'spType', 'spSynchronous', 'spSynchronousType', 'spSynchronousWait', 'spVariablesOut', 'spVariablesIn', 'spGridIn', ),
        BasePeer::TYPE_COLNAME => array (self::SP_UID, self::PRO_UID, self::TAS_UID, self::PRO_PARENT, self::TAS_PARENT, self::SP_TYPE, self::SP_SYNCHRONOUS, self::SP_SYNCHRONOUS_TYPE, self::SP_SYNCHRONOUS_WAIT, self::SP_VARIABLES_OUT, self::SP_VARIABLES_IN, self::SP_GRID_IN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SP_UID', 'PRO_UID', 'TAS_UID', 'PRO_PARENT', 'TAS_PARENT', 'SP_TYPE', 'SP_SYNCHRONOUS', 'SP_SYNCHRONOUS_TYPE', 'SP_SYNCHRONOUS_WAIT', 'SP_VARIABLES_OUT', 'SP_VARIABLES_IN', 'SP_GRID_IN', ),
        BasePeer::TYPE_FIELDNAME => array ('SP_UID', 'PRO_UID', 'TAS_UID', 'PRO_PARENT', 'TAS_PARENT', 'SP_TYPE', 'SP_SYNCHRONOUS', 'SP_SYNCHRONOUS_TYPE', 'SP_SYNCHRONOUS_WAIT', 'SP_VARIABLES_OUT', 'SP_VARIABLES_IN', 'SP_GRID_IN', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('SpUid' => 0, 'ProUid' => 1, 'TasUid' => 2, 'ProParent' => 3, 'TasParent' => 4, 'SpType' => 5, 'SpSynchronous' => 6, 'SpSynchronousType' => 7, 'SpSynchronousWait' => 8, 'SpVariablesOut' => 9, 'SpVariablesIn' => 10, 'SpGridIn' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('spUid' => 0, 'proUid' => 1, 'tasUid' => 2, 'proParent' => 3, 'tasParent' => 4, 'spType' => 5, 'spSynchronous' => 6, 'spSynchronousType' => 7, 'spSynchronousWait' => 8, 'spVariablesOut' => 9, 'spVariablesIn' => 10, 'spGridIn' => 11, ),
        BasePeer::TYPE_COLNAME => array (self::SP_UID => 0, self::PRO_UID => 1, self::TAS_UID => 2, self::PRO_PARENT => 3, self::TAS_PARENT => 4, self::SP_TYPE => 5, self::SP_SYNCHRONOUS => 6, self::SP_SYNCHRONOUS_TYPE => 7, self::SP_SYNCHRONOUS_WAIT => 8, self::SP_VARIABLES_OUT => 9, self::SP_VARIABLES_IN => 10, self::SP_GRID_IN => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SP_UID' => 0, 'PRO_UID' => 1, 'TAS_UID' => 2, 'PRO_PARENT' => 3, 'TAS_PARENT' => 4, 'SP_TYPE' => 5, 'SP_SYNCHRONOUS' => 6, 'SP_SYNCHRONOUS_TYPE' => 7, 'SP_SYNCHRONOUS_WAIT' => 8, 'SP_VARIABLES_OUT' => 9, 'SP_VARIABLES_IN' => 10, 'SP_GRID_IN' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('SP_UID' => 0, 'PRO_UID' => 1, 'TAS_UID' => 2, 'PRO_PARENT' => 3, 'TAS_PARENT' => 4, 'SP_TYPE' => 5, 'SP_SYNCHRONOUS' => 6, 'SP_SYNCHRONOUS_TYPE' => 7, 'SP_SYNCHRONOUS_WAIT' => 8, 'SP_VARIABLES_OUT' => 9, 'SP_VARIABLES_IN' => 10, 'SP_GRID_IN' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
     * @param      string $column The column name for current table. (i.e. SubProcessPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SubProcessPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SubProcessPeer::SP_UID);
            $criteria->addSelectColumn(SubProcessPeer::PRO_UID);
            $criteria->addSelectColumn(SubProcessPeer::TAS_UID);
            $criteria->addSelectColumn(SubProcessPeer::PRO_PARENT);
            $criteria->addSelectColumn(SubProcessPeer::TAS_PARENT);
            $criteria->addSelectColumn(SubProcessPeer::SP_TYPE);
            $criteria->addSelectColumn(SubProcessPeer::SP_SYNCHRONOUS);
            $criteria->addSelectColumn(SubProcessPeer::SP_SYNCHRONOUS_TYPE);
            $criteria->addSelectColumn(SubProcessPeer::SP_SYNCHRONOUS_WAIT);
            $criteria->addSelectColumn(SubProcessPeer::SP_VARIABLES_OUT);
            $criteria->addSelectColumn(SubProcessPeer::SP_VARIABLES_IN);
            $criteria->addSelectColumn(SubProcessPeer::SP_GRID_IN);
        } else {
            $criteria->addSelectColumn($alias . '.SP_UID');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.TAS_UID');
            $criteria->addSelectColumn($alias . '.PRO_PARENT');
            $criteria->addSelectColumn($alias . '.TAS_PARENT');
            $criteria->addSelectColumn($alias . '.SP_TYPE');
            $criteria->addSelectColumn($alias . '.SP_SYNCHRONOUS');
            $criteria->addSelectColumn($alias . '.SP_SYNCHRONOUS_TYPE');
            $criteria->addSelectColumn($alias . '.SP_SYNCHRONOUS_WAIT');
            $criteria->addSelectColumn($alias . '.SP_VARIABLES_OUT');
            $criteria->addSelectColumn($alias . '.SP_VARIABLES_IN');
            $criteria->addSelectColumn($alias . '.SP_GRID_IN');
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
        $criteria->setPrimaryTableName(SubProcessPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SubProcessPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     SubProcess
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SubProcessPeer::doSelect($critcopy, $con);
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
        return SubProcessPeer::populateObjects(SubProcessPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SubProcessPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SubProcessPeer::addSelectColumns($criteria);
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
     * @param      SubProcess $value A SubProcess object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSpUid();
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
     * @param      mixed $value A SubProcess object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SubProcess) {
                $key = (string) $value->getSpUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SubProcess object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     SubProcess Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to SUB_PROCESS
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
     *             rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
        // set the class once to avoid overhead in the loop
        $cls = SubProcessPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SubProcessPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SubProcessPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SubProcessPeer::addInstanceToPool($obj, $key);
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
     * @return     array (SubProcess object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SubProcessPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SubProcessPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SubProcessPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SubProcessPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SubProcessPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseSubProcessPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseSubProcessPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new SubProcessTableMap());
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
        return $withPrefix ? SubProcessPeer::CLASS_DEFAULT : SubProcessPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SubProcess or Criteria object.
     *
     * @param      mixed $values Criteria or SubProcess object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SubProcess object
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
     * Performs an UPDATE on the database, given a SubProcess or Criteria object.
     *
     * @param      mixed $values Criteria or SubProcess object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SubProcessPeer::SP_UID);
            $value = $criteria->remove(SubProcessPeer::SP_UID);
            if ($value) {
                $selectCriteria->add(SubProcessPeer::SP_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SubProcessPeer::TABLE_NAME);
            }

        } else {
            // $values is SubProcess object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the SUB_PROCESS table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SubProcessPeer::TABLE_NAME, $con, SubProcessPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SubProcessPeer::clearInstancePool();
            SubProcessPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SubProcess or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SubProcess object or primary key or array of primary keys
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
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SubProcessPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SubProcess) { // it's a model object
            // invalidate the cache for this single object
            SubProcessPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(SubProcessPeer::SP_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SubProcessPeer::removeInstanceFromPool($singleval);
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
            SubProcessPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SubProcess object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      SubProcess $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SubProcessPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SubProcessPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(SubProcessPeer::SP_TYPE))
            $columns[SubProcessPeer::SP_TYPE] = $obj->getSpType();

        if ($obj->isNew() || $obj->isColumnModified(SubProcessPeer::SP_SYNCHRONOUS))
            $columns[SubProcessPeer::SP_SYNCHRONOUS] = $obj->getSpSynchronous();

        if ($obj->isNew() || $obj->isColumnModified(SubProcessPeer::SP_SYNCHRONOUS_TYPE))
            $columns[SubProcessPeer::SP_SYNCHRONOUS_TYPE] = $obj->getSpSynchronousType();

        }

        return BasePeer::doValidate(SubProcessPeer::DATABASE_NAME, SubProcessPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     SubProcess
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SubProcessPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SubProcessPeer::DATABASE_NAME);
        $criteria->add(SubProcessPeer::SP_UID, $pk);

        $v = SubProcessPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }
    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SubProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SubProcessPeer::DATABASE_NAME);
            $criteria->add(SubProcessPeer::SP_UID, $pks, Criteria::IN);
            $objs = SubProcessPeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseSubProcessPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSubProcessPeer::buildTableMap();

