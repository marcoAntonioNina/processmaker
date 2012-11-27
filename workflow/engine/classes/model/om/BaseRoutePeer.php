<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/RouteTableMap.php';

include_once 'classes/model/Route.php';
/**
 * Base static class for performing query and update operations on the 'ROUTE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseRoutePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'ROUTE';

    /** the related Propel class for this table */
    const OM_CLASS = 'Route';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.Route';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RouteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the ROU_UID field */
    const ROU_UID = 'ROUTE.ROU_UID';

    /** the column name for the ROU_PARENT field */
    const ROU_PARENT = 'ROUTE.ROU_PARENT';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'ROUTE.PRO_UID';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'ROUTE.TAS_UID';

    /** the column name for the ROU_NEXT_TASK field */
    const ROU_NEXT_TASK = 'ROUTE.ROU_NEXT_TASK';

    /** the column name for the ROU_CASE field */
    const ROU_CASE = 'ROUTE.ROU_CASE';

    /** the column name for the ROU_TYPE field */
    const ROU_TYPE = 'ROUTE.ROU_TYPE';

    /** the column name for the ROU_CONDITION field */
    const ROU_CONDITION = 'ROUTE.ROU_CONDITION';

    /** the column name for the ROU_TO_LAST_USER field */
    const ROU_TO_LAST_USER = 'ROUTE.ROU_TO_LAST_USER';

    /** the column name for the ROU_OPTIONAL field */
    const ROU_OPTIONAL = 'ROUTE.ROU_OPTIONAL';

    /** the column name for the ROU_SEND_EMAIL field */
    const ROU_SEND_EMAIL = 'ROUTE.ROU_SEND_EMAIL';

    /** the column name for the ROU_SOURCEANCHOR field */
    const ROU_SOURCEANCHOR = 'ROUTE.ROU_SOURCEANCHOR';

    /** the column name for the ROU_TARGETANCHOR field */
    const ROU_TARGETANCHOR = 'ROUTE.ROU_TARGETANCHOR';

    /** the column name for the ROU_TO_PORT field */
    const ROU_TO_PORT = 'ROUTE.ROU_TO_PORT';

    /** the column name for the ROU_FROM_PORT field */
    const ROU_FROM_PORT = 'ROUTE.ROU_FROM_PORT';

    /** the column name for the ROU_EVN_UID field */
    const ROU_EVN_UID = 'ROUTE.ROU_EVN_UID';

    /** the column name for the GAT_UID field */
    const GAT_UID = 'ROUTE.GAT_UID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Route objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Route[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('RouUid', 'RouParent', 'ProUid', 'TasUid', 'RouNextTask', 'RouCase', 'RouType', 'RouCondition', 'RouToLastUser', 'RouOptional', 'RouSendEmail', 'RouSourceanchor', 'RouTargetanchor', 'RouToPort', 'RouFromPort', 'RouEvnUid', 'GatUid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rouUid', 'rouParent', 'proUid', 'tasUid', 'rouNextTask', 'rouCase', 'rouType', 'rouCondition', 'rouToLastUser', 'rouOptional', 'rouSendEmail', 'rouSourceanchor', 'rouTargetanchor', 'rouToPort', 'rouFromPort', 'rouEvnUid', 'gatUid', ),
        BasePeer::TYPE_COLNAME => array (self::ROU_UID, self::ROU_PARENT, self::PRO_UID, self::TAS_UID, self::ROU_NEXT_TASK, self::ROU_CASE, self::ROU_TYPE, self::ROU_CONDITION, self::ROU_TO_LAST_USER, self::ROU_OPTIONAL, self::ROU_SEND_EMAIL, self::ROU_SOURCEANCHOR, self::ROU_TARGETANCHOR, self::ROU_TO_PORT, self::ROU_FROM_PORT, self::ROU_EVN_UID, self::GAT_UID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ROU_UID', 'ROU_PARENT', 'PRO_UID', 'TAS_UID', 'ROU_NEXT_TASK', 'ROU_CASE', 'ROU_TYPE', 'ROU_CONDITION', 'ROU_TO_LAST_USER', 'ROU_OPTIONAL', 'ROU_SEND_EMAIL', 'ROU_SOURCEANCHOR', 'ROU_TARGETANCHOR', 'ROU_TO_PORT', 'ROU_FROM_PORT', 'ROU_EVN_UID', 'GAT_UID', ),
        BasePeer::TYPE_FIELDNAME => array ('ROU_UID', 'ROU_PARENT', 'PRO_UID', 'TAS_UID', 'ROU_NEXT_TASK', 'ROU_CASE', 'ROU_TYPE', 'ROU_CONDITION', 'ROU_TO_LAST_USER', 'ROU_OPTIONAL', 'ROU_SEND_EMAIL', 'ROU_SOURCEANCHOR', 'ROU_TARGETANCHOR', 'ROU_TO_PORT', 'ROU_FROM_PORT', 'ROU_EVN_UID', 'GAT_UID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('RouUid' => 0, 'RouParent' => 1, 'ProUid' => 2, 'TasUid' => 3, 'RouNextTask' => 4, 'RouCase' => 5, 'RouType' => 6, 'RouCondition' => 7, 'RouToLastUser' => 8, 'RouOptional' => 9, 'RouSendEmail' => 10, 'RouSourceanchor' => 11, 'RouTargetanchor' => 12, 'RouToPort' => 13, 'RouFromPort' => 14, 'RouEvnUid' => 15, 'GatUid' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rouUid' => 0, 'rouParent' => 1, 'proUid' => 2, 'tasUid' => 3, 'rouNextTask' => 4, 'rouCase' => 5, 'rouType' => 6, 'rouCondition' => 7, 'rouToLastUser' => 8, 'rouOptional' => 9, 'rouSendEmail' => 10, 'rouSourceanchor' => 11, 'rouTargetanchor' => 12, 'rouToPort' => 13, 'rouFromPort' => 14, 'rouEvnUid' => 15, 'gatUid' => 16, ),
        BasePeer::TYPE_COLNAME => array (self::ROU_UID => 0, self::ROU_PARENT => 1, self::PRO_UID => 2, self::TAS_UID => 3, self::ROU_NEXT_TASK => 4, self::ROU_CASE => 5, self::ROU_TYPE => 6, self::ROU_CONDITION => 7, self::ROU_TO_LAST_USER => 8, self::ROU_OPTIONAL => 9, self::ROU_SEND_EMAIL => 10, self::ROU_SOURCEANCHOR => 11, self::ROU_TARGETANCHOR => 12, self::ROU_TO_PORT => 13, self::ROU_FROM_PORT => 14, self::ROU_EVN_UID => 15, self::GAT_UID => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ROU_UID' => 0, 'ROU_PARENT' => 1, 'PRO_UID' => 2, 'TAS_UID' => 3, 'ROU_NEXT_TASK' => 4, 'ROU_CASE' => 5, 'ROU_TYPE' => 6, 'ROU_CONDITION' => 7, 'ROU_TO_LAST_USER' => 8, 'ROU_OPTIONAL' => 9, 'ROU_SEND_EMAIL' => 10, 'ROU_SOURCEANCHOR' => 11, 'ROU_TARGETANCHOR' => 12, 'ROU_TO_PORT' => 13, 'ROU_FROM_PORT' => 14, 'ROU_EVN_UID' => 15, 'GAT_UID' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('ROU_UID' => 0, 'ROU_PARENT' => 1, 'PRO_UID' => 2, 'TAS_UID' => 3, 'ROU_NEXT_TASK' => 4, 'ROU_CASE' => 5, 'ROU_TYPE' => 6, 'ROU_CONDITION' => 7, 'ROU_TO_LAST_USER' => 8, 'ROU_OPTIONAL' => 9, 'ROU_SEND_EMAIL' => 10, 'ROU_SOURCEANCHOR' => 11, 'ROU_TARGETANCHOR' => 12, 'ROU_TO_PORT' => 13, 'ROU_FROM_PORT' => 14, 'ROU_EVN_UID' => 15, 'GAT_UID' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
     * @param      string $column The column name for current table. (i.e. RoutePeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RoutePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RoutePeer::ROU_UID);
            $criteria->addSelectColumn(RoutePeer::ROU_PARENT);
            $criteria->addSelectColumn(RoutePeer::PRO_UID);
            $criteria->addSelectColumn(RoutePeer::TAS_UID);
            $criteria->addSelectColumn(RoutePeer::ROU_NEXT_TASK);
            $criteria->addSelectColumn(RoutePeer::ROU_CASE);
            $criteria->addSelectColumn(RoutePeer::ROU_TYPE);
            $criteria->addSelectColumn(RoutePeer::ROU_CONDITION);
            $criteria->addSelectColumn(RoutePeer::ROU_TO_LAST_USER);
            $criteria->addSelectColumn(RoutePeer::ROU_OPTIONAL);
            $criteria->addSelectColumn(RoutePeer::ROU_SEND_EMAIL);
            $criteria->addSelectColumn(RoutePeer::ROU_SOURCEANCHOR);
            $criteria->addSelectColumn(RoutePeer::ROU_TARGETANCHOR);
            $criteria->addSelectColumn(RoutePeer::ROU_TO_PORT);
            $criteria->addSelectColumn(RoutePeer::ROU_FROM_PORT);
            $criteria->addSelectColumn(RoutePeer::ROU_EVN_UID);
            $criteria->addSelectColumn(RoutePeer::GAT_UID);
        } else {
            $criteria->addSelectColumn($alias . '.ROU_UID');
            $criteria->addSelectColumn($alias . '.ROU_PARENT');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.TAS_UID');
            $criteria->addSelectColumn($alias . '.ROU_NEXT_TASK');
            $criteria->addSelectColumn($alias . '.ROU_CASE');
            $criteria->addSelectColumn($alias . '.ROU_TYPE');
            $criteria->addSelectColumn($alias . '.ROU_CONDITION');
            $criteria->addSelectColumn($alias . '.ROU_TO_LAST_USER');
            $criteria->addSelectColumn($alias . '.ROU_OPTIONAL');
            $criteria->addSelectColumn($alias . '.ROU_SEND_EMAIL');
            $criteria->addSelectColumn($alias . '.ROU_SOURCEANCHOR');
            $criteria->addSelectColumn($alias . '.ROU_TARGETANCHOR');
            $criteria->addSelectColumn($alias . '.ROU_TO_PORT');
            $criteria->addSelectColumn($alias . '.ROU_FROM_PORT');
            $criteria->addSelectColumn($alias . '.ROU_EVN_UID');
            $criteria->addSelectColumn($alias . '.GAT_UID');
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
        $criteria->setPrimaryTableName(RoutePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RoutePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     Route
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RoutePeer::doSelect($critcopy, $con);
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
        return RoutePeer::populateObjects(RoutePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RoutePeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RoutePeer::addSelectColumns($criteria);
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
     * @param      Route $value A Route object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRouUid();
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
     * @param      mixed $value A Route object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Route) {
                $key = (string) $value->getRouUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Route object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     Route Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to ROUTE
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
        $cls = RoutePeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RoutePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RoutePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RoutePeer::addInstanceToPool($obj, $key);
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
     * @return     array (Route object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RoutePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RoutePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RoutePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RoutePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RoutePeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseRoutePeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseRoutePeer::TABLE_NAME)) {
            $dbMap->addTableObject(new RouteTableMap());
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
        return $withPrefix ? RoutePeer::CLASS_DEFAULT : RoutePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Route or Criteria object.
     *
     * @param      mixed $values Criteria or Route object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Route object
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
     * Performs an UPDATE on the database, given a Route or Criteria object.
     *
     * @param      mixed $values Criteria or Route object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RoutePeer::ROU_UID);
            $value = $criteria->remove(RoutePeer::ROU_UID);
            if ($value) {
                $selectCriteria->add(RoutePeer::ROU_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RoutePeer::TABLE_NAME);
            }

        } else {
            // $values is Route object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ROUTE table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RoutePeer::TABLE_NAME, $con, RoutePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RoutePeer::clearInstancePool();
            RoutePeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Route or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Route object or primary key or array of primary keys
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
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RoutePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Route) { // it's a model object
            // invalidate the cache for this single object
            RoutePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(RoutePeer::ROU_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RoutePeer::removeInstanceFromPool($singleval);
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
            RoutePeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Route object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Route $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RoutePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RoutePeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::ROU_UID))
            $columns[RoutePeer::ROU_UID] = $obj->getRouUid();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::PRO_UID))
            $columns[RoutePeer::PRO_UID] = $obj->getProUid();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::TAS_UID))
            $columns[RoutePeer::TAS_UID] = $obj->getTasUid();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::ROU_NEXT_TASK))
            $columns[RoutePeer::ROU_NEXT_TASK] = $obj->getRouNextTask();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::ROU_TYPE))
            $columns[RoutePeer::ROU_TYPE] = $obj->getRouType();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::ROU_TO_LAST_USER))
            $columns[RoutePeer::ROU_TO_LAST_USER] = $obj->getRouToLastUser();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::ROU_OPTIONAL))
            $columns[RoutePeer::ROU_OPTIONAL] = $obj->getRouOptional();

        if ($obj->isNew() || $obj->isColumnModified(RoutePeer::ROU_SEND_EMAIL))
            $columns[RoutePeer::ROU_SEND_EMAIL] = $obj->getRouSendEmail();

        }

        return BasePeer::doValidate(RoutePeer::DATABASE_NAME, RoutePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     Route
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RoutePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RoutePeer::DATABASE_NAME);
        $criteria->add(RoutePeer::ROU_UID, $pk);

        $v = RoutePeer::doSelect($criteria, $con);

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
            $con = Propel::getConnection(RoutePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RoutePeer::DATABASE_NAME);
            $criteria->add(RoutePeer::ROU_UID, $pks, Criteria::IN);
            $objs = RoutePeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseRoutePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRoutePeer::buildTableMap();

