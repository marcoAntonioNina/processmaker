<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/AppMessageTableMap.php';

include_once 'classes/model/AppMessage.php';
/**
 * Base static class for performing query and update operations on the 'APP_MESSAGE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppMessagePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'APP_MESSAGE';

    /** the related Propel class for this table */
    const OM_CLASS = 'AppMessage';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.AppMessage';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AppMessageTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the APP_MSG_UID field */
    const APP_MSG_UID = 'APP_MESSAGE.APP_MSG_UID';

    /** the column name for the MSG_UID field */
    const MSG_UID = 'APP_MESSAGE.MSG_UID';

    /** the column name for the APP_UID field */
    const APP_UID = 'APP_MESSAGE.APP_UID';

    /** the column name for the DEL_INDEX field */
    const DEL_INDEX = 'APP_MESSAGE.DEL_INDEX';

    /** the column name for the APP_MSG_TYPE field */
    const APP_MSG_TYPE = 'APP_MESSAGE.APP_MSG_TYPE';

    /** the column name for the APP_MSG_SUBJECT field */
    const APP_MSG_SUBJECT = 'APP_MESSAGE.APP_MSG_SUBJECT';

    /** the column name for the APP_MSG_FROM field */
    const APP_MSG_FROM = 'APP_MESSAGE.APP_MSG_FROM';

    /** the column name for the APP_MSG_TO field */
    const APP_MSG_TO = 'APP_MESSAGE.APP_MSG_TO';

    /** the column name for the APP_MSG_BODY field */
    const APP_MSG_BODY = 'APP_MESSAGE.APP_MSG_BODY';

    /** the column name for the APP_MSG_DATE field */
    const APP_MSG_DATE = 'APP_MESSAGE.APP_MSG_DATE';

    /** the column name for the APP_MSG_CC field */
    const APP_MSG_CC = 'APP_MESSAGE.APP_MSG_CC';

    /** the column name for the APP_MSG_BCC field */
    const APP_MSG_BCC = 'APP_MESSAGE.APP_MSG_BCC';

    /** the column name for the APP_MSG_TEMPLATE field */
    const APP_MSG_TEMPLATE = 'APP_MESSAGE.APP_MSG_TEMPLATE';

    /** the column name for the APP_MSG_STATUS field */
    const APP_MSG_STATUS = 'APP_MESSAGE.APP_MSG_STATUS';

    /** the column name for the APP_MSG_ATTACH field */
    const APP_MSG_ATTACH = 'APP_MESSAGE.APP_MSG_ATTACH';

    /** the column name for the APP_MSG_SEND_DATE field */
    const APP_MSG_SEND_DATE = 'APP_MESSAGE.APP_MSG_SEND_DATE';

    /** the column name for the APP_MSG_SHOW_MESSAGE field */
    const APP_MSG_SHOW_MESSAGE = 'APP_MESSAGE.APP_MSG_SHOW_MESSAGE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of AppMessage objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array AppMessage[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppMsgUid', 'MsgUid', 'AppUid', 'DelIndex', 'AppMsgType', 'AppMsgSubject', 'AppMsgFrom', 'AppMsgTo', 'AppMsgBody', 'AppMsgDate', 'AppMsgCc', 'AppMsgBcc', 'AppMsgTemplate', 'AppMsgStatus', 'AppMsgAttach', 'AppMsgSendDate', 'AppMsgShowMessage', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('appMsgUid', 'msgUid', 'appUid', 'delIndex', 'appMsgType', 'appMsgSubject', 'appMsgFrom', 'appMsgTo', 'appMsgBody', 'appMsgDate', 'appMsgCc', 'appMsgBcc', 'appMsgTemplate', 'appMsgStatus', 'appMsgAttach', 'appMsgSendDate', 'appMsgShowMessage', ),
        BasePeer::TYPE_COLNAME => array (self::APP_MSG_UID, self::MSG_UID, self::APP_UID, self::DEL_INDEX, self::APP_MSG_TYPE, self::APP_MSG_SUBJECT, self::APP_MSG_FROM, self::APP_MSG_TO, self::APP_MSG_BODY, self::APP_MSG_DATE, self::APP_MSG_CC, self::APP_MSG_BCC, self::APP_MSG_TEMPLATE, self::APP_MSG_STATUS, self::APP_MSG_ATTACH, self::APP_MSG_SEND_DATE, self::APP_MSG_SHOW_MESSAGE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('APP_MSG_UID', 'MSG_UID', 'APP_UID', 'DEL_INDEX', 'APP_MSG_TYPE', 'APP_MSG_SUBJECT', 'APP_MSG_FROM', 'APP_MSG_TO', 'APP_MSG_BODY', 'APP_MSG_DATE', 'APP_MSG_CC', 'APP_MSG_BCC', 'APP_MSG_TEMPLATE', 'APP_MSG_STATUS', 'APP_MSG_ATTACH', 'APP_MSG_SEND_DATE', 'APP_MSG_SHOW_MESSAGE', ),
        BasePeer::TYPE_FIELDNAME => array ('APP_MSG_UID', 'MSG_UID', 'APP_UID', 'DEL_INDEX', 'APP_MSG_TYPE', 'APP_MSG_SUBJECT', 'APP_MSG_FROM', 'APP_MSG_TO', 'APP_MSG_BODY', 'APP_MSG_DATE', 'APP_MSG_CC', 'APP_MSG_BCC', 'APP_MSG_TEMPLATE', 'APP_MSG_STATUS', 'APP_MSG_ATTACH', 'APP_MSG_SEND_DATE', 'APP_MSG_SHOW_MESSAGE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppMsgUid' => 0, 'MsgUid' => 1, 'AppUid' => 2, 'DelIndex' => 3, 'AppMsgType' => 4, 'AppMsgSubject' => 5, 'AppMsgFrom' => 6, 'AppMsgTo' => 7, 'AppMsgBody' => 8, 'AppMsgDate' => 9, 'AppMsgCc' => 10, 'AppMsgBcc' => 11, 'AppMsgTemplate' => 12, 'AppMsgStatus' => 13, 'AppMsgAttach' => 14, 'AppMsgSendDate' => 15, 'AppMsgShowMessage' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('appMsgUid' => 0, 'msgUid' => 1, 'appUid' => 2, 'delIndex' => 3, 'appMsgType' => 4, 'appMsgSubject' => 5, 'appMsgFrom' => 6, 'appMsgTo' => 7, 'appMsgBody' => 8, 'appMsgDate' => 9, 'appMsgCc' => 10, 'appMsgBcc' => 11, 'appMsgTemplate' => 12, 'appMsgStatus' => 13, 'appMsgAttach' => 14, 'appMsgSendDate' => 15, 'appMsgShowMessage' => 16, ),
        BasePeer::TYPE_COLNAME => array (self::APP_MSG_UID => 0, self::MSG_UID => 1, self::APP_UID => 2, self::DEL_INDEX => 3, self::APP_MSG_TYPE => 4, self::APP_MSG_SUBJECT => 5, self::APP_MSG_FROM => 6, self::APP_MSG_TO => 7, self::APP_MSG_BODY => 8, self::APP_MSG_DATE => 9, self::APP_MSG_CC => 10, self::APP_MSG_BCC => 11, self::APP_MSG_TEMPLATE => 12, self::APP_MSG_STATUS => 13, self::APP_MSG_ATTACH => 14, self::APP_MSG_SEND_DATE => 15, self::APP_MSG_SHOW_MESSAGE => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('APP_MSG_UID' => 0, 'MSG_UID' => 1, 'APP_UID' => 2, 'DEL_INDEX' => 3, 'APP_MSG_TYPE' => 4, 'APP_MSG_SUBJECT' => 5, 'APP_MSG_FROM' => 6, 'APP_MSG_TO' => 7, 'APP_MSG_BODY' => 8, 'APP_MSG_DATE' => 9, 'APP_MSG_CC' => 10, 'APP_MSG_BCC' => 11, 'APP_MSG_TEMPLATE' => 12, 'APP_MSG_STATUS' => 13, 'APP_MSG_ATTACH' => 14, 'APP_MSG_SEND_DATE' => 15, 'APP_MSG_SHOW_MESSAGE' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_MSG_UID' => 0, 'MSG_UID' => 1, 'APP_UID' => 2, 'DEL_INDEX' => 3, 'APP_MSG_TYPE' => 4, 'APP_MSG_SUBJECT' => 5, 'APP_MSG_FROM' => 6, 'APP_MSG_TO' => 7, 'APP_MSG_BODY' => 8, 'APP_MSG_DATE' => 9, 'APP_MSG_CC' => 10, 'APP_MSG_BCC' => 11, 'APP_MSG_TEMPLATE' => 12, 'APP_MSG_STATUS' => 13, 'APP_MSG_ATTACH' => 14, 'APP_MSG_SEND_DATE' => 15, 'APP_MSG_SHOW_MESSAGE' => 16, ),
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
     * @param      string $column The column name for current table. (i.e. AppMessagePeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AppMessagePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_UID);
            $criteria->addSelectColumn(AppMessagePeer::MSG_UID);
            $criteria->addSelectColumn(AppMessagePeer::APP_UID);
            $criteria->addSelectColumn(AppMessagePeer::DEL_INDEX);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_TYPE);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_SUBJECT);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_FROM);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_TO);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_BODY);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_DATE);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_CC);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_BCC);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_TEMPLATE);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_STATUS);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_ATTACH);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_SEND_DATE);
            $criteria->addSelectColumn(AppMessagePeer::APP_MSG_SHOW_MESSAGE);
        } else {
            $criteria->addSelectColumn($alias . '.APP_MSG_UID');
            $criteria->addSelectColumn($alias . '.MSG_UID');
            $criteria->addSelectColumn($alias . '.APP_UID');
            $criteria->addSelectColumn($alias . '.DEL_INDEX');
            $criteria->addSelectColumn($alias . '.APP_MSG_TYPE');
            $criteria->addSelectColumn($alias . '.APP_MSG_SUBJECT');
            $criteria->addSelectColumn($alias . '.APP_MSG_FROM');
            $criteria->addSelectColumn($alias . '.APP_MSG_TO');
            $criteria->addSelectColumn($alias . '.APP_MSG_BODY');
            $criteria->addSelectColumn($alias . '.APP_MSG_DATE');
            $criteria->addSelectColumn($alias . '.APP_MSG_CC');
            $criteria->addSelectColumn($alias . '.APP_MSG_BCC');
            $criteria->addSelectColumn($alias . '.APP_MSG_TEMPLATE');
            $criteria->addSelectColumn($alias . '.APP_MSG_STATUS');
            $criteria->addSelectColumn($alias . '.APP_MSG_ATTACH');
            $criteria->addSelectColumn($alias . '.APP_MSG_SEND_DATE');
            $criteria->addSelectColumn($alias . '.APP_MSG_SHOW_MESSAGE');
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
        $criteria->setPrimaryTableName(AppMessagePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AppMessagePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     AppMessage
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AppMessagePeer::doSelect($critcopy, $con);
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
        return AppMessagePeer::populateObjects(AppMessagePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AppMessagePeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AppMessagePeer::addSelectColumns($criteria);
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
     * @param      AppMessage $value A AppMessage object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAppMsgUid();
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
     * @param      mixed $value A AppMessage object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof AppMessage) {
                $key = (string) $value->getAppMsgUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AppMessage object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     AppMessage Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to APP_MESSAGE
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
        $cls = AppMessagePeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AppMessagePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AppMessagePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AppMessagePeer::addInstanceToPool($obj, $key);
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
     * @return     array (AppMessage object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AppMessagePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AppMessagePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AppMessagePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AppMessagePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AppMessagePeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseAppMessagePeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseAppMessagePeer::TABLE_NAME)) {
            $dbMap->addTableObject(new AppMessageTableMap());
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
        return $withPrefix ? AppMessagePeer::CLASS_DEFAULT : AppMessagePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a AppMessage or Criteria object.
     *
     * @param      mixed $values Criteria or AppMessage object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from AppMessage object
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
     * Performs an UPDATE on the database, given a AppMessage or Criteria object.
     *
     * @param      mixed $values Criteria or AppMessage object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AppMessagePeer::APP_MSG_UID);
            $value = $criteria->remove(AppMessagePeer::APP_MSG_UID);
            if ($value) {
                $selectCriteria->add(AppMessagePeer::APP_MSG_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AppMessagePeer::TABLE_NAME);
            }

        } else {
            // $values is AppMessage object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the APP_MESSAGE table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AppMessagePeer::TABLE_NAME, $con, AppMessagePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AppMessagePeer::clearInstancePool();
            AppMessagePeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a AppMessage or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or AppMessage object or primary key or array of primary keys
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
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AppMessagePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof AppMessage) { // it's a model object
            // invalidate the cache for this single object
            AppMessagePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(AppMessagePeer::APP_MSG_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AppMessagePeer::removeInstanceFromPool($singleval);
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
            AppMessagePeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given AppMessage object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      AppMessage $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AppMessagePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AppMessagePeer::TABLE_NAME);

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

        return BasePeer::doValidate(AppMessagePeer::DATABASE_NAME, AppMessagePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     AppMessage
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AppMessagePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AppMessagePeer::DATABASE_NAME);
        $criteria->add(AppMessagePeer::APP_MSG_UID, $pk);

        $v = AppMessagePeer::doSelect($criteria, $con);

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
            $con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AppMessagePeer::DATABASE_NAME);
            $criteria->add(AppMessagePeer::APP_MSG_UID, $pks, Criteria::IN);
            $objs = AppMessagePeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseAppMessagePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAppMessagePeer::buildTableMap();

