<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/AppDocumentTableMap.php';

include_once 'classes/model/AppDocument.php';
/**
 * Base static class for performing query and update operations on the 'APP_DOCUMENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDocumentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'APP_DOCUMENT';

    /** the related Propel class for this table */
    const OM_CLASS = 'AppDocument';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.AppDocument';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AppDocumentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the APP_DOC_UID field */
    const APP_DOC_UID = 'APP_DOCUMENT.APP_DOC_UID';

    /** the column name for the DOC_VERSION field */
    const DOC_VERSION = 'APP_DOCUMENT.DOC_VERSION';

    /** the column name for the APP_UID field */
    const APP_UID = 'APP_DOCUMENT.APP_UID';

    /** the column name for the DEL_INDEX field */
    const DEL_INDEX = 'APP_DOCUMENT.DEL_INDEX';

    /** the column name for the DOC_UID field */
    const DOC_UID = 'APP_DOCUMENT.DOC_UID';

    /** the column name for the USR_UID field */
    const USR_UID = 'APP_DOCUMENT.USR_UID';

    /** the column name for the APP_DOC_TYPE field */
    const APP_DOC_TYPE = 'APP_DOCUMENT.APP_DOC_TYPE';

    /** the column name for the APP_DOC_CREATE_DATE field */
    const APP_DOC_CREATE_DATE = 'APP_DOCUMENT.APP_DOC_CREATE_DATE';

    /** the column name for the APP_DOC_INDEX field */
    const APP_DOC_INDEX = 'APP_DOCUMENT.APP_DOC_INDEX';

    /** the column name for the FOLDER_UID field */
    const FOLDER_UID = 'APP_DOCUMENT.FOLDER_UID';

    /** the column name for the APP_DOC_PLUGIN field */
    const APP_DOC_PLUGIN = 'APP_DOCUMENT.APP_DOC_PLUGIN';

    /** the column name for the APP_DOC_TAGS field */
    const APP_DOC_TAGS = 'APP_DOCUMENT.APP_DOC_TAGS';

    /** the column name for the APP_DOC_STATUS field */
    const APP_DOC_STATUS = 'APP_DOCUMENT.APP_DOC_STATUS';

    /** the column name for the APP_DOC_STATUS_DATE field */
    const APP_DOC_STATUS_DATE = 'APP_DOCUMENT.APP_DOC_STATUS_DATE';

    /** the column name for the APP_DOC_FIELDNAME field */
    const APP_DOC_FIELDNAME = 'APP_DOCUMENT.APP_DOC_FIELDNAME';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of AppDocument objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array AppDocument[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppDocUid', 'DocVersion', 'AppUid', 'DelIndex', 'DocUid', 'UsrUid', 'AppDocType', 'AppDocCreateDate', 'AppDocIndex', 'FolderUid', 'AppDocPlugin', 'AppDocTags', 'AppDocStatus', 'AppDocStatusDate', 'AppDocFieldname', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('appDocUid', 'docVersion', 'appUid', 'delIndex', 'docUid', 'usrUid', 'appDocType', 'appDocCreateDate', 'appDocIndex', 'folderUid', 'appDocPlugin', 'appDocTags', 'appDocStatus', 'appDocStatusDate', 'appDocFieldname', ),
        BasePeer::TYPE_COLNAME => array (self::APP_DOC_UID, self::DOC_VERSION, self::APP_UID, self::DEL_INDEX, self::DOC_UID, self::USR_UID, self::APP_DOC_TYPE, self::APP_DOC_CREATE_DATE, self::APP_DOC_INDEX, self::FOLDER_UID, self::APP_DOC_PLUGIN, self::APP_DOC_TAGS, self::APP_DOC_STATUS, self::APP_DOC_STATUS_DATE, self::APP_DOC_FIELDNAME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('APP_DOC_UID', 'DOC_VERSION', 'APP_UID', 'DEL_INDEX', 'DOC_UID', 'USR_UID', 'APP_DOC_TYPE', 'APP_DOC_CREATE_DATE', 'APP_DOC_INDEX', 'FOLDER_UID', 'APP_DOC_PLUGIN', 'APP_DOC_TAGS', 'APP_DOC_STATUS', 'APP_DOC_STATUS_DATE', 'APP_DOC_FIELDNAME', ),
        BasePeer::TYPE_FIELDNAME => array ('APP_DOC_UID', 'DOC_VERSION', 'APP_UID', 'DEL_INDEX', 'DOC_UID', 'USR_UID', 'APP_DOC_TYPE', 'APP_DOC_CREATE_DATE', 'APP_DOC_INDEX', 'FOLDER_UID', 'APP_DOC_PLUGIN', 'APP_DOC_TAGS', 'APP_DOC_STATUS', 'APP_DOC_STATUS_DATE', 'APP_DOC_FIELDNAME', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppDocUid' => 0, 'DocVersion' => 1, 'AppUid' => 2, 'DelIndex' => 3, 'DocUid' => 4, 'UsrUid' => 5, 'AppDocType' => 6, 'AppDocCreateDate' => 7, 'AppDocIndex' => 8, 'FolderUid' => 9, 'AppDocPlugin' => 10, 'AppDocTags' => 11, 'AppDocStatus' => 12, 'AppDocStatusDate' => 13, 'AppDocFieldname' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('appDocUid' => 0, 'docVersion' => 1, 'appUid' => 2, 'delIndex' => 3, 'docUid' => 4, 'usrUid' => 5, 'appDocType' => 6, 'appDocCreateDate' => 7, 'appDocIndex' => 8, 'folderUid' => 9, 'appDocPlugin' => 10, 'appDocTags' => 11, 'appDocStatus' => 12, 'appDocStatusDate' => 13, 'appDocFieldname' => 14, ),
        BasePeer::TYPE_COLNAME => array (self::APP_DOC_UID => 0, self::DOC_VERSION => 1, self::APP_UID => 2, self::DEL_INDEX => 3, self::DOC_UID => 4, self::USR_UID => 5, self::APP_DOC_TYPE => 6, self::APP_DOC_CREATE_DATE => 7, self::APP_DOC_INDEX => 8, self::FOLDER_UID => 9, self::APP_DOC_PLUGIN => 10, self::APP_DOC_TAGS => 11, self::APP_DOC_STATUS => 12, self::APP_DOC_STATUS_DATE => 13, self::APP_DOC_FIELDNAME => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('APP_DOC_UID' => 0, 'DOC_VERSION' => 1, 'APP_UID' => 2, 'DEL_INDEX' => 3, 'DOC_UID' => 4, 'USR_UID' => 5, 'APP_DOC_TYPE' => 6, 'APP_DOC_CREATE_DATE' => 7, 'APP_DOC_INDEX' => 8, 'FOLDER_UID' => 9, 'APP_DOC_PLUGIN' => 10, 'APP_DOC_TAGS' => 11, 'APP_DOC_STATUS' => 12, 'APP_DOC_STATUS_DATE' => 13, 'APP_DOC_FIELDNAME' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_DOC_UID' => 0, 'DOC_VERSION' => 1, 'APP_UID' => 2, 'DEL_INDEX' => 3, 'DOC_UID' => 4, 'USR_UID' => 5, 'APP_DOC_TYPE' => 6, 'APP_DOC_CREATE_DATE' => 7, 'APP_DOC_INDEX' => 8, 'FOLDER_UID' => 9, 'APP_DOC_PLUGIN' => 10, 'APP_DOC_TAGS' => 11, 'APP_DOC_STATUS' => 12, 'APP_DOC_STATUS_DATE' => 13, 'APP_DOC_FIELDNAME' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
     * @param      string $column The column name for current table. (i.e. AppDocumentPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AppDocumentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_UID);
            $criteria->addSelectColumn(AppDocumentPeer::DOC_VERSION);
            $criteria->addSelectColumn(AppDocumentPeer::APP_UID);
            $criteria->addSelectColumn(AppDocumentPeer::DEL_INDEX);
            $criteria->addSelectColumn(AppDocumentPeer::DOC_UID);
            $criteria->addSelectColumn(AppDocumentPeer::USR_UID);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_TYPE);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_CREATE_DATE);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_INDEX);
            $criteria->addSelectColumn(AppDocumentPeer::FOLDER_UID);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_PLUGIN);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_TAGS);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_STATUS);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_STATUS_DATE);
            $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_FIELDNAME);
        } else {
            $criteria->addSelectColumn($alias . '.APP_DOC_UID');
            $criteria->addSelectColumn($alias . '.DOC_VERSION');
            $criteria->addSelectColumn($alias . '.APP_UID');
            $criteria->addSelectColumn($alias . '.DEL_INDEX');
            $criteria->addSelectColumn($alias . '.DOC_UID');
            $criteria->addSelectColumn($alias . '.USR_UID');
            $criteria->addSelectColumn($alias . '.APP_DOC_TYPE');
            $criteria->addSelectColumn($alias . '.APP_DOC_CREATE_DATE');
            $criteria->addSelectColumn($alias . '.APP_DOC_INDEX');
            $criteria->addSelectColumn($alias . '.FOLDER_UID');
            $criteria->addSelectColumn($alias . '.APP_DOC_PLUGIN');
            $criteria->addSelectColumn($alias . '.APP_DOC_TAGS');
            $criteria->addSelectColumn($alias . '.APP_DOC_STATUS');
            $criteria->addSelectColumn($alias . '.APP_DOC_STATUS_DATE');
            $criteria->addSelectColumn($alias . '.APP_DOC_FIELDNAME');
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
        $criteria->setPrimaryTableName(AppDocumentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AppDocumentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     AppDocument
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AppDocumentPeer::doSelect($critcopy, $con);
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
        return AppDocumentPeer::populateObjects(AppDocumentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AppDocumentPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AppDocumentPeer::addSelectColumns($criteria);
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
     * @param      AppDocument $value A AppDocument object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAppDocUid(), (string) $obj->getDocVersion()));
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
     * @param      mixed $value A AppDocument object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof AppDocument) {
                $key = serialize(array((string) $value->getAppDocUid(), (string) $value->getDocVersion()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AppDocument object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     AppDocument Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to APP_DOCUMENT
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
     *             rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
        // set the class once to avoid overhead in the loop
        $cls = AppDocumentPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AppDocumentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AppDocumentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AppDocumentPeer::addInstanceToPool($obj, $key);
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
     * @return     array (AppDocument object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AppDocumentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AppDocumentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AppDocumentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AppDocumentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AppDocumentPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseAppDocumentPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseAppDocumentPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new AppDocumentTableMap());
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
        return $withPrefix ? AppDocumentPeer::CLASS_DEFAULT : AppDocumentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a AppDocument or Criteria object.
     *
     * @param      mixed $values Criteria or AppDocument object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from AppDocument object
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
     * Performs an UPDATE on the database, given a AppDocument or Criteria object.
     *
     * @param      mixed $values Criteria or AppDocument object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AppDocumentPeer::APP_DOC_UID);
            $value = $criteria->remove(AppDocumentPeer::APP_DOC_UID);
            if ($value) {
                $selectCriteria->add(AppDocumentPeer::APP_DOC_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AppDocumentPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AppDocumentPeer::DOC_VERSION);
            $value = $criteria->remove(AppDocumentPeer::DOC_VERSION);
            if ($value) {
                $selectCriteria->add(AppDocumentPeer::DOC_VERSION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AppDocumentPeer::TABLE_NAME);
            }

        } else {
            // $values is AppDocument object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the APP_DOCUMENT table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AppDocumentPeer::TABLE_NAME, $con, AppDocumentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AppDocumentPeer::clearInstancePool();
            AppDocumentPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a AppDocument or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or AppDocument object or primary key or array of primary keys
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
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AppDocumentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof AppDocument) { // it's a model object
            // invalidate the cache for this single object
            AppDocumentPeer::removeInstanceFromPool($values);
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
                $criterion = $criteria->getNewCriterion(AppDocumentPeer::APP_DOC_UID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(AppDocumentPeer::DOC_VERSION, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                AppDocumentPeer::removeInstanceFromPool($value);
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
            AppDocumentPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given AppDocument object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      AppDocument $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AppDocumentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AppDocumentPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_UID))
            $columns[AppDocumentPeer::APP_DOC_UID] = $obj->getAppDocUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_UID))
            $columns[AppDocumentPeer::APP_UID] = $obj->getAppUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::DEL_INDEX))
            $columns[AppDocumentPeer::DEL_INDEX] = $obj->getDelIndex();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::DOC_UID))
            $columns[AppDocumentPeer::DOC_UID] = $obj->getDocUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::USR_UID))
            $columns[AppDocumentPeer::USR_UID] = $obj->getUsrUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_TYPE))
            $columns[AppDocumentPeer::APP_DOC_TYPE] = $obj->getAppDocType();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_CREATE_DATE))
            $columns[AppDocumentPeer::APP_DOC_CREATE_DATE] = $obj->getAppDocCreateDate();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_STATUS))
            $columns[AppDocumentPeer::APP_DOC_STATUS] = $obj->getAppDocStatus();

        }

        return BasePeer::doValidate(AppDocumentPeer::DATABASE_NAME, AppDocumentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param      string $app_doc_uid
     * @param      int $doc_version
     * @param      PropelPDO $con
     * @return     AppDocument
     */
    public static function retrieveByPK($app_doc_uid, $doc_version, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $app_doc_uid, (string) $doc_version));
        if (null !== ($obj = AppDocumentPeer::getInstanceFromPool($_instancePoolKey))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(AppDocumentPeer::DATABASE_NAME);
        $criteria->add(AppDocumentPeer::APP_DOC_UID, $app_doc_uid);
        $criteria->add(AppDocumentPeer::DOC_VERSION, $doc_version);
        $v = AppDocumentPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
}
// BaseAppDocumentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAppDocumentPeer::buildTableMap();

