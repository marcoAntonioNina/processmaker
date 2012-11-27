<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/OutputDocumentTableMap.php';

include_once 'classes/model/OutputDocument.php';
/**
 * Base static class for performing query and update operations on the 'OUTPUT_DOCUMENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseOutputDocumentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'OUTPUT_DOCUMENT';

    /** the related Propel class for this table */
    const OM_CLASS = 'OutputDocument';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.OutputDocument';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OutputDocumentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the OUT_DOC_UID field */
    const OUT_DOC_UID = 'OUTPUT_DOCUMENT.OUT_DOC_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'OUTPUT_DOCUMENT.PRO_UID';

    /** the column name for the OUT_DOC_REPORT_GENERATOR field */
    const OUT_DOC_REPORT_GENERATOR = 'OUTPUT_DOCUMENT.OUT_DOC_REPORT_GENERATOR';

    /** the column name for the OUT_DOC_LANDSCAPE field */
    const OUT_DOC_LANDSCAPE = 'OUTPUT_DOCUMENT.OUT_DOC_LANDSCAPE';

    /** the column name for the OUT_DOC_MEDIA field */
    const OUT_DOC_MEDIA = 'OUTPUT_DOCUMENT.OUT_DOC_MEDIA';

    /** the column name for the OUT_DOC_LEFT_MARGIN field */
    const OUT_DOC_LEFT_MARGIN = 'OUTPUT_DOCUMENT.OUT_DOC_LEFT_MARGIN';

    /** the column name for the OUT_DOC_RIGHT_MARGIN field */
    const OUT_DOC_RIGHT_MARGIN = 'OUTPUT_DOCUMENT.OUT_DOC_RIGHT_MARGIN';

    /** the column name for the OUT_DOC_TOP_MARGIN field */
    const OUT_DOC_TOP_MARGIN = 'OUTPUT_DOCUMENT.OUT_DOC_TOP_MARGIN';

    /** the column name for the OUT_DOC_BOTTOM_MARGIN field */
    const OUT_DOC_BOTTOM_MARGIN = 'OUTPUT_DOCUMENT.OUT_DOC_BOTTOM_MARGIN';

    /** the column name for the OUT_DOC_GENERATE field */
    const OUT_DOC_GENERATE = 'OUTPUT_DOCUMENT.OUT_DOC_GENERATE';

    /** the column name for the OUT_DOC_TYPE field */
    const OUT_DOC_TYPE = 'OUTPUT_DOCUMENT.OUT_DOC_TYPE';

    /** the column name for the OUT_DOC_CURRENT_REVISION field */
    const OUT_DOC_CURRENT_REVISION = 'OUTPUT_DOCUMENT.OUT_DOC_CURRENT_REVISION';

    /** the column name for the OUT_DOC_FIELD_MAPPING field */
    const OUT_DOC_FIELD_MAPPING = 'OUTPUT_DOCUMENT.OUT_DOC_FIELD_MAPPING';

    /** the column name for the OUT_DOC_VERSIONING field */
    const OUT_DOC_VERSIONING = 'OUTPUT_DOCUMENT.OUT_DOC_VERSIONING';

    /** the column name for the OUT_DOC_DESTINATION_PATH field */
    const OUT_DOC_DESTINATION_PATH = 'OUTPUT_DOCUMENT.OUT_DOC_DESTINATION_PATH';

    /** the column name for the OUT_DOC_TAGS field */
    const OUT_DOC_TAGS = 'OUTPUT_DOCUMENT.OUT_DOC_TAGS';

    /** the column name for the OUT_DOC_PDF_SECURITY_ENABLED field */
    const OUT_DOC_PDF_SECURITY_ENABLED = 'OUTPUT_DOCUMENT.OUT_DOC_PDF_SECURITY_ENABLED';

    /** the column name for the OUT_DOC_PDF_SECURITY_OPEN_PASSWORD field */
    const OUT_DOC_PDF_SECURITY_OPEN_PASSWORD = 'OUTPUT_DOCUMENT.OUT_DOC_PDF_SECURITY_OPEN_PASSWORD';

    /** the column name for the OUT_DOC_PDF_SECURITY_OWNER_PASSWORD field */
    const OUT_DOC_PDF_SECURITY_OWNER_PASSWORD = 'OUTPUT_DOCUMENT.OUT_DOC_PDF_SECURITY_OWNER_PASSWORD';

    /** the column name for the OUT_DOC_PDF_SECURITY_PERMISSIONS field */
    const OUT_DOC_PDF_SECURITY_PERMISSIONS = 'OUTPUT_DOCUMENT.OUT_DOC_PDF_SECURITY_PERMISSIONS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of OutputDocument objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array OutputDocument[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OutDocUid', 'ProUid', 'OutDocReportGenerator', 'OutDocLandscape', 'OutDocMedia', 'OutDocLeftMargin', 'OutDocRightMargin', 'OutDocTopMargin', 'OutDocBottomMargin', 'OutDocGenerate', 'OutDocType', 'OutDocCurrentRevision', 'OutDocFieldMapping', 'OutDocVersioning', 'OutDocDestinationPath', 'OutDocTags', 'OutDocPdfSecurityEnabled', 'OutDocPdfSecurityOpenPassword', 'OutDocPdfSecurityOwnerPassword', 'OutDocPdfSecurityPermissions', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('outDocUid', 'proUid', 'outDocReportGenerator', 'outDocLandscape', 'outDocMedia', 'outDocLeftMargin', 'outDocRightMargin', 'outDocTopMargin', 'outDocBottomMargin', 'outDocGenerate', 'outDocType', 'outDocCurrentRevision', 'outDocFieldMapping', 'outDocVersioning', 'outDocDestinationPath', 'outDocTags', 'outDocPdfSecurityEnabled', 'outDocPdfSecurityOpenPassword', 'outDocPdfSecurityOwnerPassword', 'outDocPdfSecurityPermissions', ),
        BasePeer::TYPE_COLNAME => array (self::OUT_DOC_UID, self::PRO_UID, self::OUT_DOC_REPORT_GENERATOR, self::OUT_DOC_LANDSCAPE, self::OUT_DOC_MEDIA, self::OUT_DOC_LEFT_MARGIN, self::OUT_DOC_RIGHT_MARGIN, self::OUT_DOC_TOP_MARGIN, self::OUT_DOC_BOTTOM_MARGIN, self::OUT_DOC_GENERATE, self::OUT_DOC_TYPE, self::OUT_DOC_CURRENT_REVISION, self::OUT_DOC_FIELD_MAPPING, self::OUT_DOC_VERSIONING, self::OUT_DOC_DESTINATION_PATH, self::OUT_DOC_TAGS, self::OUT_DOC_PDF_SECURITY_ENABLED, self::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD, self::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD, self::OUT_DOC_PDF_SECURITY_PERMISSIONS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OUT_DOC_UID', 'PRO_UID', 'OUT_DOC_REPORT_GENERATOR', 'OUT_DOC_LANDSCAPE', 'OUT_DOC_MEDIA', 'OUT_DOC_LEFT_MARGIN', 'OUT_DOC_RIGHT_MARGIN', 'OUT_DOC_TOP_MARGIN', 'OUT_DOC_BOTTOM_MARGIN', 'OUT_DOC_GENERATE', 'OUT_DOC_TYPE', 'OUT_DOC_CURRENT_REVISION', 'OUT_DOC_FIELD_MAPPING', 'OUT_DOC_VERSIONING', 'OUT_DOC_DESTINATION_PATH', 'OUT_DOC_TAGS', 'OUT_DOC_PDF_SECURITY_ENABLED', 'OUT_DOC_PDF_SECURITY_OPEN_PASSWORD', 'OUT_DOC_PDF_SECURITY_OWNER_PASSWORD', 'OUT_DOC_PDF_SECURITY_PERMISSIONS', ),
        BasePeer::TYPE_FIELDNAME => array ('OUT_DOC_UID', 'PRO_UID', 'OUT_DOC_REPORT_GENERATOR', 'OUT_DOC_LANDSCAPE', 'OUT_DOC_MEDIA', 'OUT_DOC_LEFT_MARGIN', 'OUT_DOC_RIGHT_MARGIN', 'OUT_DOC_TOP_MARGIN', 'OUT_DOC_BOTTOM_MARGIN', 'OUT_DOC_GENERATE', 'OUT_DOC_TYPE', 'OUT_DOC_CURRENT_REVISION', 'OUT_DOC_FIELD_MAPPING', 'OUT_DOC_VERSIONING', 'OUT_DOC_DESTINATION_PATH', 'OUT_DOC_TAGS', 'OUT_DOC_PDF_SECURITY_ENABLED', 'OUT_DOC_PDF_SECURITY_OPEN_PASSWORD', 'OUT_DOC_PDF_SECURITY_OWNER_PASSWORD', 'OUT_DOC_PDF_SECURITY_PERMISSIONS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OutDocUid' => 0, 'ProUid' => 1, 'OutDocReportGenerator' => 2, 'OutDocLandscape' => 3, 'OutDocMedia' => 4, 'OutDocLeftMargin' => 5, 'OutDocRightMargin' => 6, 'OutDocTopMargin' => 7, 'OutDocBottomMargin' => 8, 'OutDocGenerate' => 9, 'OutDocType' => 10, 'OutDocCurrentRevision' => 11, 'OutDocFieldMapping' => 12, 'OutDocVersioning' => 13, 'OutDocDestinationPath' => 14, 'OutDocTags' => 15, 'OutDocPdfSecurityEnabled' => 16, 'OutDocPdfSecurityOpenPassword' => 17, 'OutDocPdfSecurityOwnerPassword' => 18, 'OutDocPdfSecurityPermissions' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('outDocUid' => 0, 'proUid' => 1, 'outDocReportGenerator' => 2, 'outDocLandscape' => 3, 'outDocMedia' => 4, 'outDocLeftMargin' => 5, 'outDocRightMargin' => 6, 'outDocTopMargin' => 7, 'outDocBottomMargin' => 8, 'outDocGenerate' => 9, 'outDocType' => 10, 'outDocCurrentRevision' => 11, 'outDocFieldMapping' => 12, 'outDocVersioning' => 13, 'outDocDestinationPath' => 14, 'outDocTags' => 15, 'outDocPdfSecurityEnabled' => 16, 'outDocPdfSecurityOpenPassword' => 17, 'outDocPdfSecurityOwnerPassword' => 18, 'outDocPdfSecurityPermissions' => 19, ),
        BasePeer::TYPE_COLNAME => array (self::OUT_DOC_UID => 0, self::PRO_UID => 1, self::OUT_DOC_REPORT_GENERATOR => 2, self::OUT_DOC_LANDSCAPE => 3, self::OUT_DOC_MEDIA => 4, self::OUT_DOC_LEFT_MARGIN => 5, self::OUT_DOC_RIGHT_MARGIN => 6, self::OUT_DOC_TOP_MARGIN => 7, self::OUT_DOC_BOTTOM_MARGIN => 8, self::OUT_DOC_GENERATE => 9, self::OUT_DOC_TYPE => 10, self::OUT_DOC_CURRENT_REVISION => 11, self::OUT_DOC_FIELD_MAPPING => 12, self::OUT_DOC_VERSIONING => 13, self::OUT_DOC_DESTINATION_PATH => 14, self::OUT_DOC_TAGS => 15, self::OUT_DOC_PDF_SECURITY_ENABLED => 16, self::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD => 17, self::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD => 18, self::OUT_DOC_PDF_SECURITY_PERMISSIONS => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OUT_DOC_UID' => 0, 'PRO_UID' => 1, 'OUT_DOC_REPORT_GENERATOR' => 2, 'OUT_DOC_LANDSCAPE' => 3, 'OUT_DOC_MEDIA' => 4, 'OUT_DOC_LEFT_MARGIN' => 5, 'OUT_DOC_RIGHT_MARGIN' => 6, 'OUT_DOC_TOP_MARGIN' => 7, 'OUT_DOC_BOTTOM_MARGIN' => 8, 'OUT_DOC_GENERATE' => 9, 'OUT_DOC_TYPE' => 10, 'OUT_DOC_CURRENT_REVISION' => 11, 'OUT_DOC_FIELD_MAPPING' => 12, 'OUT_DOC_VERSIONING' => 13, 'OUT_DOC_DESTINATION_PATH' => 14, 'OUT_DOC_TAGS' => 15, 'OUT_DOC_PDF_SECURITY_ENABLED' => 16, 'OUT_DOC_PDF_SECURITY_OPEN_PASSWORD' => 17, 'OUT_DOC_PDF_SECURITY_OWNER_PASSWORD' => 18, 'OUT_DOC_PDF_SECURITY_PERMISSIONS' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('OUT_DOC_UID' => 0, 'PRO_UID' => 1, 'OUT_DOC_REPORT_GENERATOR' => 2, 'OUT_DOC_LANDSCAPE' => 3, 'OUT_DOC_MEDIA' => 4, 'OUT_DOC_LEFT_MARGIN' => 5, 'OUT_DOC_RIGHT_MARGIN' => 6, 'OUT_DOC_TOP_MARGIN' => 7, 'OUT_DOC_BOTTOM_MARGIN' => 8, 'OUT_DOC_GENERATE' => 9, 'OUT_DOC_TYPE' => 10, 'OUT_DOC_CURRENT_REVISION' => 11, 'OUT_DOC_FIELD_MAPPING' => 12, 'OUT_DOC_VERSIONING' => 13, 'OUT_DOC_DESTINATION_PATH' => 14, 'OUT_DOC_TAGS' => 15, 'OUT_DOC_PDF_SECURITY_ENABLED' => 16, 'OUT_DOC_PDF_SECURITY_OPEN_PASSWORD' => 17, 'OUT_DOC_PDF_SECURITY_OWNER_PASSWORD' => 18, 'OUT_DOC_PDF_SECURITY_PERMISSIONS' => 19, ),
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
     * @param      string $column The column name for current table. (i.e. OutputDocumentPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OutputDocumentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_UID);
            $criteria->addSelectColumn(OutputDocumentPeer::PRO_UID);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_REPORT_GENERATOR);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_LANDSCAPE);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_MEDIA);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_LEFT_MARGIN);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_TOP_MARGIN);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_GENERATE);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_TYPE);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_CURRENT_REVISION);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_FIELD_MAPPING);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_VERSIONING);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_DESTINATION_PATH);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_TAGS);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD);
            $criteria->addSelectColumn(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_PERMISSIONS);
        } else {
            $criteria->addSelectColumn($alias . '.OUT_DOC_UID');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.OUT_DOC_REPORT_GENERATOR');
            $criteria->addSelectColumn($alias . '.OUT_DOC_LANDSCAPE');
            $criteria->addSelectColumn($alias . '.OUT_DOC_MEDIA');
            $criteria->addSelectColumn($alias . '.OUT_DOC_LEFT_MARGIN');
            $criteria->addSelectColumn($alias . '.OUT_DOC_RIGHT_MARGIN');
            $criteria->addSelectColumn($alias . '.OUT_DOC_TOP_MARGIN');
            $criteria->addSelectColumn($alias . '.OUT_DOC_BOTTOM_MARGIN');
            $criteria->addSelectColumn($alias . '.OUT_DOC_GENERATE');
            $criteria->addSelectColumn($alias . '.OUT_DOC_TYPE');
            $criteria->addSelectColumn($alias . '.OUT_DOC_CURRENT_REVISION');
            $criteria->addSelectColumn($alias . '.OUT_DOC_FIELD_MAPPING');
            $criteria->addSelectColumn($alias . '.OUT_DOC_VERSIONING');
            $criteria->addSelectColumn($alias . '.OUT_DOC_DESTINATION_PATH');
            $criteria->addSelectColumn($alias . '.OUT_DOC_TAGS');
            $criteria->addSelectColumn($alias . '.OUT_DOC_PDF_SECURITY_ENABLED');
            $criteria->addSelectColumn($alias . '.OUT_DOC_PDF_SECURITY_OPEN_PASSWORD');
            $criteria->addSelectColumn($alias . '.OUT_DOC_PDF_SECURITY_OWNER_PASSWORD');
            $criteria->addSelectColumn($alias . '.OUT_DOC_PDF_SECURITY_PERMISSIONS');
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
        $criteria->setPrimaryTableName(OutputDocumentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OutputDocumentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     OutputDocument
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OutputDocumentPeer::doSelect($critcopy, $con);
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
        return OutputDocumentPeer::populateObjects(OutputDocumentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OutputDocumentPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OutputDocumentPeer::addSelectColumns($criteria);
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
     * @param      OutputDocument $value A OutputDocument object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOutDocUid();
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
     * @param      mixed $value A OutputDocument object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof OutputDocument) {
                $key = (string) $value->getOutDocUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or OutputDocument object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     OutputDocument Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to OUTPUT_DOCUMENT
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
        $cls = OutputDocumentPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OutputDocumentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OutputDocumentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OutputDocumentPeer::addInstanceToPool($obj, $key);
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
     * @return     array (OutputDocument object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OutputDocumentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OutputDocumentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OutputDocumentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OutputDocumentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OutputDocumentPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseOutputDocumentPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseOutputDocumentPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new OutputDocumentTableMap());
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
        return $withPrefix ? OutputDocumentPeer::CLASS_DEFAULT : OutputDocumentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a OutputDocument or Criteria object.
     *
     * @param      mixed $values Criteria or OutputDocument object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from OutputDocument object
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
     * Performs an UPDATE on the database, given a OutputDocument or Criteria object.
     *
     * @param      mixed $values Criteria or OutputDocument object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OutputDocumentPeer::OUT_DOC_UID);
            $value = $criteria->remove(OutputDocumentPeer::OUT_DOC_UID);
            if ($value) {
                $selectCriteria->add(OutputDocumentPeer::OUT_DOC_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OutputDocumentPeer::TABLE_NAME);
            }

        } else {
            // $values is OutputDocument object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the OUTPUT_DOCUMENT table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OutputDocumentPeer::TABLE_NAME, $con, OutputDocumentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OutputDocumentPeer::clearInstancePool();
            OutputDocumentPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a OutputDocument or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or OutputDocument object or primary key or array of primary keys
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
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OutputDocumentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof OutputDocument) { // it's a model object
            // invalidate the cache for this single object
            OutputDocumentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(OutputDocumentPeer::OUT_DOC_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OutputDocumentPeer::removeInstanceFromPool($singleval);
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
            OutputDocumentPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given OutputDocument object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      OutputDocument $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OutputDocumentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OutputDocumentPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(OutputDocumentPeer::OUT_DOC_UID))
            $columns[OutputDocumentPeer::OUT_DOC_UID] = $obj->getOutDocUid();

        if ($obj->isNew() || $obj->isColumnModified(OutputDocumentPeer::PRO_UID))
            $columns[OutputDocumentPeer::PRO_UID] = $obj->getProUid();

        if ($obj->isNew() || $obj->isColumnModified(OutputDocumentPeer::OUT_DOC_GENERATE))
            $columns[OutputDocumentPeer::OUT_DOC_GENERATE] = $obj->getOutDocGenerate();

        if ($obj->isNew() || $obj->isColumnModified(OutputDocumentPeer::OUT_DOC_TYPE))
            $columns[OutputDocumentPeer::OUT_DOC_TYPE] = $obj->getOutDocType();

        }

        return BasePeer::doValidate(OutputDocumentPeer::DATABASE_NAME, OutputDocumentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     OutputDocument
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OutputDocumentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OutputDocumentPeer::DATABASE_NAME);
        $criteria->add(OutputDocumentPeer::OUT_DOC_UID, $pk);

        $v = OutputDocumentPeer::doSelect($criteria, $con);

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
            $con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OutputDocumentPeer::DATABASE_NAME);
            $criteria->add(OutputDocumentPeer::OUT_DOC_UID, $pks, Criteria::IN);
            $objs = OutputDocumentPeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseOutputDocumentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOutputDocumentPeer::buildTableMap();

