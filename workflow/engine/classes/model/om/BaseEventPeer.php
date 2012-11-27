<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/EventTableMap.php';

include_once 'classes/model/Event.php';
/**
 * Base static class for performing query and update operations on the 'EVENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseEventPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'EVENT';

    /** the related Propel class for this table */
    const OM_CLASS = 'Event';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.Event';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EventTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the EVN_UID field */
    const EVN_UID = 'EVENT.EVN_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'EVENT.PRO_UID';

    /** the column name for the EVN_STATUS field */
    const EVN_STATUS = 'EVENT.EVN_STATUS';

    /** the column name for the EVN_WHEN_OCCURS field */
    const EVN_WHEN_OCCURS = 'EVENT.EVN_WHEN_OCCURS';

    /** the column name for the EVN_RELATED_TO field */
    const EVN_RELATED_TO = 'EVENT.EVN_RELATED_TO';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'EVENT.TAS_UID';

    /** the column name for the EVN_TAS_UID_FROM field */
    const EVN_TAS_UID_FROM = 'EVENT.EVN_TAS_UID_FROM';

    /** the column name for the EVN_TAS_UID_TO field */
    const EVN_TAS_UID_TO = 'EVENT.EVN_TAS_UID_TO';

    /** the column name for the EVN_TAS_ESTIMATED_DURATION field */
    const EVN_TAS_ESTIMATED_DURATION = 'EVENT.EVN_TAS_ESTIMATED_DURATION';

    /** the column name for the EVN_TIME_UNIT field */
    const EVN_TIME_UNIT = 'EVENT.EVN_TIME_UNIT';

    /** the column name for the EVN_WHEN field */
    const EVN_WHEN = 'EVENT.EVN_WHEN';

    /** the column name for the EVN_MAX_ATTEMPTS field */
    const EVN_MAX_ATTEMPTS = 'EVENT.EVN_MAX_ATTEMPTS';

    /** the column name for the EVN_ACTION field */
    const EVN_ACTION = 'EVENT.EVN_ACTION';

    /** the column name for the EVN_CONDITIONS field */
    const EVN_CONDITIONS = 'EVENT.EVN_CONDITIONS';

    /** the column name for the EVN_ACTION_PARAMETERS field */
    const EVN_ACTION_PARAMETERS = 'EVENT.EVN_ACTION_PARAMETERS';

    /** the column name for the TRI_UID field */
    const TRI_UID = 'EVENT.TRI_UID';

    /** the column name for the EVN_POSX field */
    const EVN_POSX = 'EVENT.EVN_POSX';

    /** the column name for the EVN_POSY field */
    const EVN_POSY = 'EVENT.EVN_POSY';

    /** the column name for the EVN_TYPE field */
    const EVN_TYPE = 'EVENT.EVN_TYPE';

    /** the column name for the TAS_EVN_UID field */
    const TAS_EVN_UID = 'EVENT.TAS_EVN_UID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Event objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Event[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('EvnUid', 'ProUid', 'EvnStatus', 'EvnWhenOccurs', 'EvnRelatedTo', 'TasUid', 'EvnTasUidFrom', 'EvnTasUidTo', 'EvnTasEstimatedDuration', 'EvnTimeUnit', 'EvnWhen', 'EvnMaxAttempts', 'EvnAction', 'EvnConditions', 'EvnActionParameters', 'TriUid', 'EvnPosx', 'EvnPosy', 'EvnType', 'TasEvnUid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('evnUid', 'proUid', 'evnStatus', 'evnWhenOccurs', 'evnRelatedTo', 'tasUid', 'evnTasUidFrom', 'evnTasUidTo', 'evnTasEstimatedDuration', 'evnTimeUnit', 'evnWhen', 'evnMaxAttempts', 'evnAction', 'evnConditions', 'evnActionParameters', 'triUid', 'evnPosx', 'evnPosy', 'evnType', 'tasEvnUid', ),
        BasePeer::TYPE_COLNAME => array (self::EVN_UID, self::PRO_UID, self::EVN_STATUS, self::EVN_WHEN_OCCURS, self::EVN_RELATED_TO, self::TAS_UID, self::EVN_TAS_UID_FROM, self::EVN_TAS_UID_TO, self::EVN_TAS_ESTIMATED_DURATION, self::EVN_TIME_UNIT, self::EVN_WHEN, self::EVN_MAX_ATTEMPTS, self::EVN_ACTION, self::EVN_CONDITIONS, self::EVN_ACTION_PARAMETERS, self::TRI_UID, self::EVN_POSX, self::EVN_POSY, self::EVN_TYPE, self::TAS_EVN_UID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('EVN_UID', 'PRO_UID', 'EVN_STATUS', 'EVN_WHEN_OCCURS', 'EVN_RELATED_TO', 'TAS_UID', 'EVN_TAS_UID_FROM', 'EVN_TAS_UID_TO', 'EVN_TAS_ESTIMATED_DURATION', 'EVN_TIME_UNIT', 'EVN_WHEN', 'EVN_MAX_ATTEMPTS', 'EVN_ACTION', 'EVN_CONDITIONS', 'EVN_ACTION_PARAMETERS', 'TRI_UID', 'EVN_POSX', 'EVN_POSY', 'EVN_TYPE', 'TAS_EVN_UID', ),
        BasePeer::TYPE_FIELDNAME => array ('EVN_UID', 'PRO_UID', 'EVN_STATUS', 'EVN_WHEN_OCCURS', 'EVN_RELATED_TO', 'TAS_UID', 'EVN_TAS_UID_FROM', 'EVN_TAS_UID_TO', 'EVN_TAS_ESTIMATED_DURATION', 'EVN_TIME_UNIT', 'EVN_WHEN', 'EVN_MAX_ATTEMPTS', 'EVN_ACTION', 'EVN_CONDITIONS', 'EVN_ACTION_PARAMETERS', 'TRI_UID', 'EVN_POSX', 'EVN_POSY', 'EVN_TYPE', 'TAS_EVN_UID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('EvnUid' => 0, 'ProUid' => 1, 'EvnStatus' => 2, 'EvnWhenOccurs' => 3, 'EvnRelatedTo' => 4, 'TasUid' => 5, 'EvnTasUidFrom' => 6, 'EvnTasUidTo' => 7, 'EvnTasEstimatedDuration' => 8, 'EvnTimeUnit' => 9, 'EvnWhen' => 10, 'EvnMaxAttempts' => 11, 'EvnAction' => 12, 'EvnConditions' => 13, 'EvnActionParameters' => 14, 'TriUid' => 15, 'EvnPosx' => 16, 'EvnPosy' => 17, 'EvnType' => 18, 'TasEvnUid' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('evnUid' => 0, 'proUid' => 1, 'evnStatus' => 2, 'evnWhenOccurs' => 3, 'evnRelatedTo' => 4, 'tasUid' => 5, 'evnTasUidFrom' => 6, 'evnTasUidTo' => 7, 'evnTasEstimatedDuration' => 8, 'evnTimeUnit' => 9, 'evnWhen' => 10, 'evnMaxAttempts' => 11, 'evnAction' => 12, 'evnConditions' => 13, 'evnActionParameters' => 14, 'triUid' => 15, 'evnPosx' => 16, 'evnPosy' => 17, 'evnType' => 18, 'tasEvnUid' => 19, ),
        BasePeer::TYPE_COLNAME => array (self::EVN_UID => 0, self::PRO_UID => 1, self::EVN_STATUS => 2, self::EVN_WHEN_OCCURS => 3, self::EVN_RELATED_TO => 4, self::TAS_UID => 5, self::EVN_TAS_UID_FROM => 6, self::EVN_TAS_UID_TO => 7, self::EVN_TAS_ESTIMATED_DURATION => 8, self::EVN_TIME_UNIT => 9, self::EVN_WHEN => 10, self::EVN_MAX_ATTEMPTS => 11, self::EVN_ACTION => 12, self::EVN_CONDITIONS => 13, self::EVN_ACTION_PARAMETERS => 14, self::TRI_UID => 15, self::EVN_POSX => 16, self::EVN_POSY => 17, self::EVN_TYPE => 18, self::TAS_EVN_UID => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('EVN_UID' => 0, 'PRO_UID' => 1, 'EVN_STATUS' => 2, 'EVN_WHEN_OCCURS' => 3, 'EVN_RELATED_TO' => 4, 'TAS_UID' => 5, 'EVN_TAS_UID_FROM' => 6, 'EVN_TAS_UID_TO' => 7, 'EVN_TAS_ESTIMATED_DURATION' => 8, 'EVN_TIME_UNIT' => 9, 'EVN_WHEN' => 10, 'EVN_MAX_ATTEMPTS' => 11, 'EVN_ACTION' => 12, 'EVN_CONDITIONS' => 13, 'EVN_ACTION_PARAMETERS' => 14, 'TRI_UID' => 15, 'EVN_POSX' => 16, 'EVN_POSY' => 17, 'EVN_TYPE' => 18, 'TAS_EVN_UID' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('EVN_UID' => 0, 'PRO_UID' => 1, 'EVN_STATUS' => 2, 'EVN_WHEN_OCCURS' => 3, 'EVN_RELATED_TO' => 4, 'TAS_UID' => 5, 'EVN_TAS_UID_FROM' => 6, 'EVN_TAS_UID_TO' => 7, 'EVN_TAS_ESTIMATED_DURATION' => 8, 'EVN_TIME_UNIT' => 9, 'EVN_WHEN' => 10, 'EVN_MAX_ATTEMPTS' => 11, 'EVN_ACTION' => 12, 'EVN_CONDITIONS' => 13, 'EVN_ACTION_PARAMETERS' => 14, 'TRI_UID' => 15, 'EVN_POSX' => 16, 'EVN_POSY' => 17, 'EVN_TYPE' => 18, 'TAS_EVN_UID' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
     * @param      string $column The column name for current table. (i.e. EventPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EventPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EventPeer::EVN_UID);
            $criteria->addSelectColumn(EventPeer::PRO_UID);
            $criteria->addSelectColumn(EventPeer::EVN_STATUS);
            $criteria->addSelectColumn(EventPeer::EVN_WHEN_OCCURS);
            $criteria->addSelectColumn(EventPeer::EVN_RELATED_TO);
            $criteria->addSelectColumn(EventPeer::TAS_UID);
            $criteria->addSelectColumn(EventPeer::EVN_TAS_UID_FROM);
            $criteria->addSelectColumn(EventPeer::EVN_TAS_UID_TO);
            $criteria->addSelectColumn(EventPeer::EVN_TAS_ESTIMATED_DURATION);
            $criteria->addSelectColumn(EventPeer::EVN_TIME_UNIT);
            $criteria->addSelectColumn(EventPeer::EVN_WHEN);
            $criteria->addSelectColumn(EventPeer::EVN_MAX_ATTEMPTS);
            $criteria->addSelectColumn(EventPeer::EVN_ACTION);
            $criteria->addSelectColumn(EventPeer::EVN_CONDITIONS);
            $criteria->addSelectColumn(EventPeer::EVN_ACTION_PARAMETERS);
            $criteria->addSelectColumn(EventPeer::TRI_UID);
            $criteria->addSelectColumn(EventPeer::EVN_POSX);
            $criteria->addSelectColumn(EventPeer::EVN_POSY);
            $criteria->addSelectColumn(EventPeer::EVN_TYPE);
            $criteria->addSelectColumn(EventPeer::TAS_EVN_UID);
        } else {
            $criteria->addSelectColumn($alias . '.EVN_UID');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.EVN_STATUS');
            $criteria->addSelectColumn($alias . '.EVN_WHEN_OCCURS');
            $criteria->addSelectColumn($alias . '.EVN_RELATED_TO');
            $criteria->addSelectColumn($alias . '.TAS_UID');
            $criteria->addSelectColumn($alias . '.EVN_TAS_UID_FROM');
            $criteria->addSelectColumn($alias . '.EVN_TAS_UID_TO');
            $criteria->addSelectColumn($alias . '.EVN_TAS_ESTIMATED_DURATION');
            $criteria->addSelectColumn($alias . '.EVN_TIME_UNIT');
            $criteria->addSelectColumn($alias . '.EVN_WHEN');
            $criteria->addSelectColumn($alias . '.EVN_MAX_ATTEMPTS');
            $criteria->addSelectColumn($alias . '.EVN_ACTION');
            $criteria->addSelectColumn($alias . '.EVN_CONDITIONS');
            $criteria->addSelectColumn($alias . '.EVN_ACTION_PARAMETERS');
            $criteria->addSelectColumn($alias . '.TRI_UID');
            $criteria->addSelectColumn($alias . '.EVN_POSX');
            $criteria->addSelectColumn($alias . '.EVN_POSY');
            $criteria->addSelectColumn($alias . '.EVN_TYPE');
            $criteria->addSelectColumn($alias . '.TAS_EVN_UID');
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
        $criteria->setPrimaryTableName(EventPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EventPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     Event
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EventPeer::doSelect($critcopy, $con);
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
        return EventPeer::populateObjects(EventPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EventPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EventPeer::addSelectColumns($criteria);
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
     * @param      Event $value A Event object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getEvnUid();
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
     * @param      mixed $value A Event object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Event) {
                $key = (string) $value->getEvnUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Event object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     Event Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to EVENT
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
        $cls = EventPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EventPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EventPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EventPeer::addInstanceToPool($obj, $key);
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
     * @return     array (Event object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EventPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EventPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EventPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EventPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EventPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseEventPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseEventPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new EventTableMap());
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
        return $withPrefix ? EventPeer::CLASS_DEFAULT : EventPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Event or Criteria object.
     *
     * @param      mixed $values Criteria or Event object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Event object
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
     * Performs an UPDATE on the database, given a Event or Criteria object.
     *
     * @param      mixed $values Criteria or Event object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EventPeer::EVN_UID);
            $value = $criteria->remove(EventPeer::EVN_UID);
            if ($value) {
                $selectCriteria->add(EventPeer::EVN_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EventPeer::TABLE_NAME);
            }

        } else {
            // $values is Event object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EVENT table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EventPeer::TABLE_NAME, $con, EventPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EventPeer::clearInstancePool();
            EventPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Event or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Event object or primary key or array of primary keys
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
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EventPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Event) { // it's a model object
            // invalidate the cache for this single object
            EventPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(EventPeer::EVN_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EventPeer::removeInstanceFromPool($singleval);
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
            EventPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Event object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Event $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EventPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EventPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EventPeer::DATABASE_NAME, EventPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     Event
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EventPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EventPeer::DATABASE_NAME);
        $criteria->add(EventPeer::EVN_UID, $pk);

        $v = EventPeer::doSelect($criteria, $con);

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
            $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EventPeer::DATABASE_NAME);
            $criteria->add(EventPeer::EVN_UID, $pks, Criteria::IN);
            $objs = EventPeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseEventPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEventPeer::buildTableMap();

