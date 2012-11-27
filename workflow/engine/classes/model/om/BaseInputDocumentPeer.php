<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/InputDocumentTableMap.php';

include_once 'classes/model/InputDocument.php';
/**
 * Base static class for performing query and update operations on the 'INPUT_DOCUMENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseInputDocumentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'INPUT_DOCUMENT';

    /** the related Propel class for this table */
    const OM_CLASS = 'InputDocument';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.InputDocument';

    /** the related TableMap class for this table */
    const TM_CLASS = 'InputDocumentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the INP_DOC_UID field */
    const INP_DOC_UID = 'INPUT_DOCUMENT.INP_DOC_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'INPUT_DOCUMENT.PRO_UID';

    /** the column name for the INP_DOC_FORM_NEEDED field */
    const INP_DOC_FORM_NEEDED = 'INPUT_DOCUMENT.INP_DOC_FORM_NEEDED';

    /** the column name for the INP_DOC_ORIGINAL field */
    const INP_DOC_ORIGINAL = 'INPUT_DOCUMENT.INP_DOC_ORIGINAL';

    /** the column name for the INP_DOC_PUBLISHED field */
    const INP_DOC_PUBLISHED = 'INPUT_DOCUMENT.INP_DOC_PUBLISHED';

    /** the column name for the INP_DOC_VERSIONING field */
    const INP_DOC_VERSIONING = 'INPUT_DOCUMENT.INP_DOC_VERSIONING';

    /** the column name for the INP_DOC_DESTINATION_PATH field */
    const INP_DOC_DESTINATION_PATH = 'INPUT_DOCUMENT.INP_DOC_DESTINATION_PATH';

    /** the column name for the INP_DOC_TAGS field */
    const INP_DOC_TAGS = 'INPUT_DOCUMENT.INP_DOC_TAGS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of InputDocument objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array InputDocument[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('InpDocUid', 'ProUid', 'InpDocFormNeeded', 'InpDocOriginal', 'InpDocPublished', 'InpDocVersioning', 'InpDocDestinationPath', 'InpDocTags', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('inpDocUid', 'proUid', 'inpDocFormNeeded', 'inpDocOriginal', 'inpDocPublished', 'inpDocVersioning', 'inpDocDestinationPath', 'inpDocTags', ),
        BasePeer::TYPE_COLNAME => array (self::INP_DOC_UID, self::PRO_UID, self::INP_DOC_FORM_NEEDED, self::INP_DOC_ORIGINAL, self::INP_DOC_PUBLISHED, self::INP_DOC_VERSIONING, self::INP_DOC_DESTINATION_PATH, self::INP_DOC_TAGS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('INP_DOC_UID', 'PRO_UID', 'INP_DOC_FORM_NEEDED', 'INP_DOC_ORIGINAL', 'INP_DOC_PUBLISHED', 'INP_DOC_VERSIONING', 'INP_DOC_DESTINATION_PATH', 'INP_DOC_TAGS', ),
        BasePeer::TYPE_FIELDNAME => array ('INP_DOC_UID', 'PRO_UID', 'INP_DOC_FORM_NEEDED', 'INP_DOC_ORIGINAL', 'INP_DOC_PUBLISHED', 'INP_DOC_VERSIONING', 'INP_DOC_DESTINATION_PATH', 'INP_DOC_TAGS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('InpDocUid' => 0, 'ProUid' => 1, 'InpDocFormNeeded' => 2, 'InpDocOriginal' => 3, 'InpDocPublished' => 4, 'InpDocVersioning' => 5, 'InpDocDestinationPath' => 6, 'InpDocTags' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('inpDocUid' => 0, 'proUid' => 1, 'inpDocFormNeeded' => 2, 'inpDocOriginal' => 3, 'inpDocPublished' => 4, 'inpDocVersioning' => 5, 'inpDocDestinationPath' => 6, 'inpDocTags' => 7, ),
        BasePeer::TYPE_COLNAME => array (self::INP_DOC_UID => 0, self::PRO_UID => 1, self::INP_DOC_FORM_NEEDED => 2, self::INP_DOC_ORIGINAL => 3, self::INP_DOC_PUBLISHED => 4, self::INP_DOC_VERSIONING => 5, self::INP_DOC_DESTINATION_PATH => 6, self::INP_DOC_TAGS => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('INP_DOC_UID' => 0, 'PRO_UID' => 1, 'INP_DOC_FORM_NEEDED' => 2, 'INP_DOC_ORIGINAL' => 3, 'INP_DOC_PUBLISHED' => 4, 'INP_DOC_VERSIONING' => 5, 'INP_DOC_DESTINATION_PATH' => 6, 'INP_DOC_TAGS' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('INP_DOC_UID' => 0, 'PRO_UID' => 1, 'INP_DOC_FORM_NEEDED' => 2, 'INP_DOC_ORIGINAL' => 3, 'INP_DOC_PUBLISHED' => 4, 'INP_DOC_VERSIONING' => 5, 'INP_DOC_DESTINATION_PATH' => 6, 'INP_DOC_TAGS' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
     * @param      string $column The column name for current table. (i.e. InputDocumentPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(InputDocumentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_UID);
            $criteria->addSelectColumn(InputDocumentPeer::PRO_UID);
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_FORM_NEEDED);
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_ORIGINAL);
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_PUBLISHED);
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_VERSIONING);
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_DESTINATION_PATH);
            $criteria->addSelectColumn(InputDocumentPeer::INP_DOC_TAGS);
        } else {
            $criteria->addSelectColumn($alias . '.INP_DOC_UID');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.INP_DOC_FORM_NEEDED');
            $criteria->addSelectColumn($alias . '.INP_DOC_ORIGINAL');
            $criteria->addSelectColumn($alias . '.INP_DOC_PUBLISHED');
            $criteria->addSelectColumn($alias . '.INP_DOC_VERSIONING');
            $criteria->addSelectColumn($alias . '.INP_DOC_DESTINATION_PATH');
            $criteria->addSelectColumn($alias . '.INP_DOC_TAGS');
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
        $criteria->setPrimaryTableName(InputDocumentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InputDocumentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     InputDocument
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = InputDocumentPeer::doSelect($critcopy, $con);
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
        return InputDocumentPeer::populateObjects(InputDocumentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            InputDocumentPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            InputDocumentPeer::addSelectColumns($criteria);
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
     * @param      InputDocument $value A InputDocument object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getInpDocUid();
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
     * @param      mixed $value A InputDocument object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof InputDocument) {
                $key = (string) $value->getInpDocUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or InputDocument object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     InputDocument Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to INPUT_DOCUMENT
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
        $cls = InputDocumentPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = InputDocumentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = InputDocumentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InputDocumentPeer::addInstanceToPool($obj, $key);
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
     * @return     array (InputDocument object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = InputDocumentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = InputDocumentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + InputDocumentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InputDocumentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            InputDocumentPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseInputDocumentPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseInputDocumentPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new InputDocumentTableMap());
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
        return $withPrefix ? InputDocumentPeer::CLASS_DEFAULT : InputDocumentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a InputDocument or Criteria object.
     *
     * @param      mixed $values Criteria or InputDocument object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from InputDocument object
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
     * Performs an UPDATE on the database, given a InputDocument or Criteria object.
     *
     * @param      mixed $values Criteria or InputDocument object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(InputDocumentPeer::INP_DOC_UID);
            $value = $criteria->remove(InputDocumentPeer::INP_DOC_UID);
            if ($value) {
                $selectCriteria->add(InputDocumentPeer::INP_DOC_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(InputDocumentPeer::TABLE_NAME);
            }

        } else {
            // $values is InputDocument object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the INPUT_DOCUMENT table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(InputDocumentPeer::TABLE_NAME, $con, InputDocumentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InputDocumentPeer::clearInstancePool();
            InputDocumentPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a InputDocument or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or InputDocument object or primary key or array of primary keys
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
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            InputDocumentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof InputDocument) { // it's a model object
            // invalidate the cache for this single object
            InputDocumentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(InputDocumentPeer::INP_DOC_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                InputDocumentPeer::removeInstanceFromPool($singleval);
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
            InputDocumentPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given InputDocument object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      InputDocument $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(InputDocumentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(InputDocumentPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(InputDocumentPeer::INP_DOC_UID))
            $columns[InputDocumentPeer::INP_DOC_UID] = $obj->getInpDocUid();

        if ($obj->isNew() || $obj->isColumnModified(InputDocumentPeer::PRO_UID))
            $columns[InputDocumentPeer::PRO_UID] = $obj->getProUid();

        if ($obj->isNew() || $obj->isColumnModified(InputDocumentPeer::INP_DOC_FORM_NEEDED))
            $columns[InputDocumentPeer::INP_DOC_FORM_NEEDED] = $obj->getInpDocFormNeeded();

        if ($obj->isNew() || $obj->isColumnModified(InputDocumentPeer::INP_DOC_ORIGINAL))
            $columns[InputDocumentPeer::INP_DOC_ORIGINAL] = $obj->getInpDocOriginal();

        if ($obj->isNew() || $obj->isColumnModified(InputDocumentPeer::INP_DOC_PUBLISHED))
            $columns[InputDocumentPeer::INP_DOC_PUBLISHED] = $obj->getInpDocPublished();

        }

        return BasePeer::doValidate(InputDocumentPeer::DATABASE_NAME, InputDocumentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     InputDocument
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = InputDocumentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(InputDocumentPeer::DATABASE_NAME);
        $criteria->add(InputDocumentPeer::INP_DOC_UID, $pk);

        $v = InputDocumentPeer::doSelect($criteria, $con);

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
            $con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(InputDocumentPeer::DATABASE_NAME);
            $criteria->add(InputDocumentPeer::INP_DOC_UID, $pks, Criteria::IN);
            $objs = InputDocumentPeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseInputDocumentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseInputDocumentPeer::buildTableMap();

