<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/AppCacheViewTableMap.php';

include_once 'classes/model/AppCacheView.php';
/**
 * Base static class for performing query and update operations on the 'APP_CACHE_VIEW' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppCacheViewPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'APP_CACHE_VIEW';

    /** the related Propel class for this table */
    const OM_CLASS = 'AppCacheView';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.AppCacheView';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AppCacheViewTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 30;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 30;

    /** the column name for the APP_UID field */
    const APP_UID = 'APP_CACHE_VIEW.APP_UID';

    /** the column name for the DEL_INDEX field */
    const DEL_INDEX = 'APP_CACHE_VIEW.DEL_INDEX';

    /** the column name for the APP_NUMBER field */
    const APP_NUMBER = 'APP_CACHE_VIEW.APP_NUMBER';

    /** the column name for the APP_STATUS field */
    const APP_STATUS = 'APP_CACHE_VIEW.APP_STATUS';

    /** the column name for the USR_UID field */
    const USR_UID = 'APP_CACHE_VIEW.USR_UID';

    /** the column name for the PREVIOUS_USR_UID field */
    const PREVIOUS_USR_UID = 'APP_CACHE_VIEW.PREVIOUS_USR_UID';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'APP_CACHE_VIEW.TAS_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'APP_CACHE_VIEW.PRO_UID';

    /** the column name for the DEL_DELEGATE_DATE field */
    const DEL_DELEGATE_DATE = 'APP_CACHE_VIEW.DEL_DELEGATE_DATE';

    /** the column name for the DEL_INIT_DATE field */
    const DEL_INIT_DATE = 'APP_CACHE_VIEW.DEL_INIT_DATE';

    /** the column name for the DEL_TASK_DUE_DATE field */
    const DEL_TASK_DUE_DATE = 'APP_CACHE_VIEW.DEL_TASK_DUE_DATE';

    /** the column name for the DEL_FINISH_DATE field */
    const DEL_FINISH_DATE = 'APP_CACHE_VIEW.DEL_FINISH_DATE';

    /** the column name for the DEL_THREAD_STATUS field */
    const DEL_THREAD_STATUS = 'APP_CACHE_VIEW.DEL_THREAD_STATUS';

    /** the column name for the APP_THREAD_STATUS field */
    const APP_THREAD_STATUS = 'APP_CACHE_VIEW.APP_THREAD_STATUS';

    /** the column name for the APP_TITLE field */
    const APP_TITLE = 'APP_CACHE_VIEW.APP_TITLE';

    /** the column name for the APP_PRO_TITLE field */
    const APP_PRO_TITLE = 'APP_CACHE_VIEW.APP_PRO_TITLE';

    /** the column name for the APP_TAS_TITLE field */
    const APP_TAS_TITLE = 'APP_CACHE_VIEW.APP_TAS_TITLE';

    /** the column name for the APP_CURRENT_USER field */
    const APP_CURRENT_USER = 'APP_CACHE_VIEW.APP_CURRENT_USER';

    /** the column name for the APP_DEL_PREVIOUS_USER field */
    const APP_DEL_PREVIOUS_USER = 'APP_CACHE_VIEW.APP_DEL_PREVIOUS_USER';

    /** the column name for the DEL_PRIORITY field */
    const DEL_PRIORITY = 'APP_CACHE_VIEW.DEL_PRIORITY';

    /** the column name for the DEL_DURATION field */
    const DEL_DURATION = 'APP_CACHE_VIEW.DEL_DURATION';

    /** the column name for the DEL_QUEUE_DURATION field */
    const DEL_QUEUE_DURATION = 'APP_CACHE_VIEW.DEL_QUEUE_DURATION';

    /** the column name for the DEL_DELAY_DURATION field */
    const DEL_DELAY_DURATION = 'APP_CACHE_VIEW.DEL_DELAY_DURATION';

    /** the column name for the DEL_STARTED field */
    const DEL_STARTED = 'APP_CACHE_VIEW.DEL_STARTED';

    /** the column name for the DEL_FINISHED field */
    const DEL_FINISHED = 'APP_CACHE_VIEW.DEL_FINISHED';

    /** the column name for the DEL_DELAYED field */
    const DEL_DELAYED = 'APP_CACHE_VIEW.DEL_DELAYED';

    /** the column name for the APP_CREATE_DATE field */
    const APP_CREATE_DATE = 'APP_CACHE_VIEW.APP_CREATE_DATE';

    /** the column name for the APP_FINISH_DATE field */
    const APP_FINISH_DATE = 'APP_CACHE_VIEW.APP_FINISH_DATE';

    /** the column name for the APP_UPDATE_DATE field */
    const APP_UPDATE_DATE = 'APP_CACHE_VIEW.APP_UPDATE_DATE';

    /** the column name for the APP_OVERDUE_PERCENTAGE field */
    const APP_OVERDUE_PERCENTAGE = 'APP_CACHE_VIEW.APP_OVERDUE_PERCENTAGE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of AppCacheView objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array AppCacheView[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid', 'DelIndex', 'AppNumber', 'AppStatus', 'UsrUid', 'PreviousUsrUid', 'TasUid', 'ProUid', 'DelDelegateDate', 'DelInitDate', 'DelTaskDueDate', 'DelFinishDate', 'DelThreadStatus', 'AppThreadStatus', 'AppTitle', 'AppProTitle', 'AppTasTitle', 'AppCurrentUser', 'AppDelPreviousUser', 'DelPriority', 'DelDuration', 'DelQueueDuration', 'DelDelayDuration', 'DelStarted', 'DelFinished', 'DelDelayed', 'AppCreateDate', 'AppFinishDate', 'AppUpdateDate', 'AppOverduePercentage', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('appUid', 'delIndex', 'appNumber', 'appStatus', 'usrUid', 'previousUsrUid', 'tasUid', 'proUid', 'delDelegateDate', 'delInitDate', 'delTaskDueDate', 'delFinishDate', 'delThreadStatus', 'appThreadStatus', 'appTitle', 'appProTitle', 'appTasTitle', 'appCurrentUser', 'appDelPreviousUser', 'delPriority', 'delDuration', 'delQueueDuration', 'delDelayDuration', 'delStarted', 'delFinished', 'delDelayed', 'appCreateDate', 'appFinishDate', 'appUpdateDate', 'appOverduePercentage', ),
        BasePeer::TYPE_COLNAME => array (self::APP_UID, self::DEL_INDEX, self::APP_NUMBER, self::APP_STATUS, self::USR_UID, self::PREVIOUS_USR_UID, self::TAS_UID, self::PRO_UID, self::DEL_DELEGATE_DATE, self::DEL_INIT_DATE, self::DEL_TASK_DUE_DATE, self::DEL_FINISH_DATE, self::DEL_THREAD_STATUS, self::APP_THREAD_STATUS, self::APP_TITLE, self::APP_PRO_TITLE, self::APP_TAS_TITLE, self::APP_CURRENT_USER, self::APP_DEL_PREVIOUS_USER, self::DEL_PRIORITY, self::DEL_DURATION, self::DEL_QUEUE_DURATION, self::DEL_DELAY_DURATION, self::DEL_STARTED, self::DEL_FINISHED, self::DEL_DELAYED, self::APP_CREATE_DATE, self::APP_FINISH_DATE, self::APP_UPDATE_DATE, self::APP_OVERDUE_PERCENTAGE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('APP_UID', 'DEL_INDEX', 'APP_NUMBER', 'APP_STATUS', 'USR_UID', 'PREVIOUS_USR_UID', 'TAS_UID', 'PRO_UID', 'DEL_DELEGATE_DATE', 'DEL_INIT_DATE', 'DEL_TASK_DUE_DATE', 'DEL_FINISH_DATE', 'DEL_THREAD_STATUS', 'APP_THREAD_STATUS', 'APP_TITLE', 'APP_PRO_TITLE', 'APP_TAS_TITLE', 'APP_CURRENT_USER', 'APP_DEL_PREVIOUS_USER', 'DEL_PRIORITY', 'DEL_DURATION', 'DEL_QUEUE_DURATION', 'DEL_DELAY_DURATION', 'DEL_STARTED', 'DEL_FINISHED', 'DEL_DELAYED', 'APP_CREATE_DATE', 'APP_FINISH_DATE', 'APP_UPDATE_DATE', 'APP_OVERDUE_PERCENTAGE', ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID', 'DEL_INDEX', 'APP_NUMBER', 'APP_STATUS', 'USR_UID', 'PREVIOUS_USR_UID', 'TAS_UID', 'PRO_UID', 'DEL_DELEGATE_DATE', 'DEL_INIT_DATE', 'DEL_TASK_DUE_DATE', 'DEL_FINISH_DATE', 'DEL_THREAD_STATUS', 'APP_THREAD_STATUS', 'APP_TITLE', 'APP_PRO_TITLE', 'APP_TAS_TITLE', 'APP_CURRENT_USER', 'APP_DEL_PREVIOUS_USER', 'DEL_PRIORITY', 'DEL_DURATION', 'DEL_QUEUE_DURATION', 'DEL_DELAY_DURATION', 'DEL_STARTED', 'DEL_FINISHED', 'DEL_DELAYED', 'APP_CREATE_DATE', 'APP_FINISH_DATE', 'APP_UPDATE_DATE', 'APP_OVERDUE_PERCENTAGE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid' => 0, 'DelIndex' => 1, 'AppNumber' => 2, 'AppStatus' => 3, 'UsrUid' => 4, 'PreviousUsrUid' => 5, 'TasUid' => 6, 'ProUid' => 7, 'DelDelegateDate' => 8, 'DelInitDate' => 9, 'DelTaskDueDate' => 10, 'DelFinishDate' => 11, 'DelThreadStatus' => 12, 'AppThreadStatus' => 13, 'AppTitle' => 14, 'AppProTitle' => 15, 'AppTasTitle' => 16, 'AppCurrentUser' => 17, 'AppDelPreviousUser' => 18, 'DelPriority' => 19, 'DelDuration' => 20, 'DelQueueDuration' => 21, 'DelDelayDuration' => 22, 'DelStarted' => 23, 'DelFinished' => 24, 'DelDelayed' => 25, 'AppCreateDate' => 26, 'AppFinishDate' => 27, 'AppUpdateDate' => 28, 'AppOverduePercentage' => 29, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('appUid' => 0, 'delIndex' => 1, 'appNumber' => 2, 'appStatus' => 3, 'usrUid' => 4, 'previousUsrUid' => 5, 'tasUid' => 6, 'proUid' => 7, 'delDelegateDate' => 8, 'delInitDate' => 9, 'delTaskDueDate' => 10, 'delFinishDate' => 11, 'delThreadStatus' => 12, 'appThreadStatus' => 13, 'appTitle' => 14, 'appProTitle' => 15, 'appTasTitle' => 16, 'appCurrentUser' => 17, 'appDelPreviousUser' => 18, 'delPriority' => 19, 'delDuration' => 20, 'delQueueDuration' => 21, 'delDelayDuration' => 22, 'delStarted' => 23, 'delFinished' => 24, 'delDelayed' => 25, 'appCreateDate' => 26, 'appFinishDate' => 27, 'appUpdateDate' => 28, 'appOverduePercentage' => 29, ),
        BasePeer::TYPE_COLNAME => array (self::APP_UID => 0, self::DEL_INDEX => 1, self::APP_NUMBER => 2, self::APP_STATUS => 3, self::USR_UID => 4, self::PREVIOUS_USR_UID => 5, self::TAS_UID => 6, self::PRO_UID => 7, self::DEL_DELEGATE_DATE => 8, self::DEL_INIT_DATE => 9, self::DEL_TASK_DUE_DATE => 10, self::DEL_FINISH_DATE => 11, self::DEL_THREAD_STATUS => 12, self::APP_THREAD_STATUS => 13, self::APP_TITLE => 14, self::APP_PRO_TITLE => 15, self::APP_TAS_TITLE => 16, self::APP_CURRENT_USER => 17, self::APP_DEL_PREVIOUS_USER => 18, self::DEL_PRIORITY => 19, self::DEL_DURATION => 20, self::DEL_QUEUE_DURATION => 21, self::DEL_DELAY_DURATION => 22, self::DEL_STARTED => 23, self::DEL_FINISHED => 24, self::DEL_DELAYED => 25, self::APP_CREATE_DATE => 26, self::APP_FINISH_DATE => 27, self::APP_UPDATE_DATE => 28, self::APP_OVERDUE_PERCENTAGE => 29, ),
        BasePeer::TYPE_RAW_COLNAME => array ('APP_UID' => 0, 'DEL_INDEX' => 1, 'APP_NUMBER' => 2, 'APP_STATUS' => 3, 'USR_UID' => 4, 'PREVIOUS_USR_UID' => 5, 'TAS_UID' => 6, 'PRO_UID' => 7, 'DEL_DELEGATE_DATE' => 8, 'DEL_INIT_DATE' => 9, 'DEL_TASK_DUE_DATE' => 10, 'DEL_FINISH_DATE' => 11, 'DEL_THREAD_STATUS' => 12, 'APP_THREAD_STATUS' => 13, 'APP_TITLE' => 14, 'APP_PRO_TITLE' => 15, 'APP_TAS_TITLE' => 16, 'APP_CURRENT_USER' => 17, 'APP_DEL_PREVIOUS_USER' => 18, 'DEL_PRIORITY' => 19, 'DEL_DURATION' => 20, 'DEL_QUEUE_DURATION' => 21, 'DEL_DELAY_DURATION' => 22, 'DEL_STARTED' => 23, 'DEL_FINISHED' => 24, 'DEL_DELAYED' => 25, 'APP_CREATE_DATE' => 26, 'APP_FINISH_DATE' => 27, 'APP_UPDATE_DATE' => 28, 'APP_OVERDUE_PERCENTAGE' => 29, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID' => 0, 'DEL_INDEX' => 1, 'APP_NUMBER' => 2, 'APP_STATUS' => 3, 'USR_UID' => 4, 'PREVIOUS_USR_UID' => 5, 'TAS_UID' => 6, 'PRO_UID' => 7, 'DEL_DELEGATE_DATE' => 8, 'DEL_INIT_DATE' => 9, 'DEL_TASK_DUE_DATE' => 10, 'DEL_FINISH_DATE' => 11, 'DEL_THREAD_STATUS' => 12, 'APP_THREAD_STATUS' => 13, 'APP_TITLE' => 14, 'APP_PRO_TITLE' => 15, 'APP_TAS_TITLE' => 16, 'APP_CURRENT_USER' => 17, 'APP_DEL_PREVIOUS_USER' => 18, 'DEL_PRIORITY' => 19, 'DEL_DURATION' => 20, 'DEL_QUEUE_DURATION' => 21, 'DEL_DELAY_DURATION' => 22, 'DEL_STARTED' => 23, 'DEL_FINISHED' => 24, 'DEL_DELAYED' => 25, 'APP_CREATE_DATE' => 26, 'APP_FINISH_DATE' => 27, 'APP_UPDATE_DATE' => 28, 'APP_OVERDUE_PERCENTAGE' => 29, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
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
     * @param      string $column The column name for current table. (i.e. AppCacheViewPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AppCacheViewPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AppCacheViewPeer::APP_UID);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_INDEX);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_NUMBER);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_STATUS);
            $criteria->addSelectColumn(AppCacheViewPeer::USR_UID);
            $criteria->addSelectColumn(AppCacheViewPeer::PREVIOUS_USR_UID);
            $criteria->addSelectColumn(AppCacheViewPeer::TAS_UID);
            $criteria->addSelectColumn(AppCacheViewPeer::PRO_UID);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_DELEGATE_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_INIT_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_TASK_DUE_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_FINISH_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_THREAD_STATUS);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_THREAD_STATUS);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_TITLE);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_PRO_TITLE);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_TAS_TITLE);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_CURRENT_USER);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_DEL_PREVIOUS_USER);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_PRIORITY);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_DURATION);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_QUEUE_DURATION);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_DELAY_DURATION);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_STARTED);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_FINISHED);
            $criteria->addSelectColumn(AppCacheViewPeer::DEL_DELAYED);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_CREATE_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_FINISH_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_UPDATE_DATE);
            $criteria->addSelectColumn(AppCacheViewPeer::APP_OVERDUE_PERCENTAGE);
        } else {
            $criteria->addSelectColumn($alias . '.APP_UID');
            $criteria->addSelectColumn($alias . '.DEL_INDEX');
            $criteria->addSelectColumn($alias . '.APP_NUMBER');
            $criteria->addSelectColumn($alias . '.APP_STATUS');
            $criteria->addSelectColumn($alias . '.USR_UID');
            $criteria->addSelectColumn($alias . '.PREVIOUS_USR_UID');
            $criteria->addSelectColumn($alias . '.TAS_UID');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.DEL_DELEGATE_DATE');
            $criteria->addSelectColumn($alias . '.DEL_INIT_DATE');
            $criteria->addSelectColumn($alias . '.DEL_TASK_DUE_DATE');
            $criteria->addSelectColumn($alias . '.DEL_FINISH_DATE');
            $criteria->addSelectColumn($alias . '.DEL_THREAD_STATUS');
            $criteria->addSelectColumn($alias . '.APP_THREAD_STATUS');
            $criteria->addSelectColumn($alias . '.APP_TITLE');
            $criteria->addSelectColumn($alias . '.APP_PRO_TITLE');
            $criteria->addSelectColumn($alias . '.APP_TAS_TITLE');
            $criteria->addSelectColumn($alias . '.APP_CURRENT_USER');
            $criteria->addSelectColumn($alias . '.APP_DEL_PREVIOUS_USER');
            $criteria->addSelectColumn($alias . '.DEL_PRIORITY');
            $criteria->addSelectColumn($alias . '.DEL_DURATION');
            $criteria->addSelectColumn($alias . '.DEL_QUEUE_DURATION');
            $criteria->addSelectColumn($alias . '.DEL_DELAY_DURATION');
            $criteria->addSelectColumn($alias . '.DEL_STARTED');
            $criteria->addSelectColumn($alias . '.DEL_FINISHED');
            $criteria->addSelectColumn($alias . '.DEL_DELAYED');
            $criteria->addSelectColumn($alias . '.APP_CREATE_DATE');
            $criteria->addSelectColumn($alias . '.APP_FINISH_DATE');
            $criteria->addSelectColumn($alias . '.APP_UPDATE_DATE');
            $criteria->addSelectColumn($alias . '.APP_OVERDUE_PERCENTAGE');
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
        $criteria->setPrimaryTableName(AppCacheViewPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AppCacheViewPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     AppCacheView
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AppCacheViewPeer::doSelect($critcopy, $con);
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
        return AppCacheViewPeer::populateObjects(AppCacheViewPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AppCacheViewPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AppCacheViewPeer::addSelectColumns($criteria);
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
     * @param      AppCacheView $value A AppCacheView object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAppUid(), (string) $obj->getDelIndex()));
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
     * @param      mixed $value A AppCacheView object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof AppCacheView) {
                $key = serialize(array((string) $value->getAppUid(), (string) $value->getDelIndex()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AppCacheView object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     AppCacheView Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to APP_CACHE_VIEW
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
        $cls = AppCacheViewPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AppCacheViewPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AppCacheViewPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AppCacheViewPeer::addInstanceToPool($obj, $key);
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
     * @return     array (AppCacheView object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AppCacheViewPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AppCacheViewPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AppCacheViewPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AppCacheViewPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AppCacheViewPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseAppCacheViewPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseAppCacheViewPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new AppCacheViewTableMap());
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
        return $withPrefix ? AppCacheViewPeer::CLASS_DEFAULT : AppCacheViewPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a AppCacheView or Criteria object.
     *
     * @param      mixed $values Criteria or AppCacheView object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from AppCacheView object
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
     * Performs an UPDATE on the database, given a AppCacheView or Criteria object.
     *
     * @param      mixed $values Criteria or AppCacheView object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AppCacheViewPeer::APP_UID);
            $value = $criteria->remove(AppCacheViewPeer::APP_UID);
            if ($value) {
                $selectCriteria->add(AppCacheViewPeer::APP_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AppCacheViewPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AppCacheViewPeer::DEL_INDEX);
            $value = $criteria->remove(AppCacheViewPeer::DEL_INDEX);
            if ($value) {
                $selectCriteria->add(AppCacheViewPeer::DEL_INDEX, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AppCacheViewPeer::TABLE_NAME);
            }

        } else {
            // $values is AppCacheView object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the APP_CACHE_VIEW table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AppCacheViewPeer::TABLE_NAME, $con, AppCacheViewPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AppCacheViewPeer::clearInstancePool();
            AppCacheViewPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a AppCacheView or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or AppCacheView object or primary key or array of primary keys
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
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AppCacheViewPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof AppCacheView) { // it's a model object
            // invalidate the cache for this single object
            AppCacheViewPeer::removeInstanceFromPool($values);
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
                $criterion = $criteria->getNewCriterion(AppCacheViewPeer::APP_UID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(AppCacheViewPeer::DEL_INDEX, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                AppCacheViewPeer::removeInstanceFromPool($value);
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
            AppCacheViewPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given AppCacheView object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      AppCacheView $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AppCacheViewPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AppCacheViewPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AppCacheViewPeer::DATABASE_NAME, AppCacheViewPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param      string $app_uid
     * @param      int $del_index
     * @param      PropelPDO $con
     * @return     AppCacheView
     */
    public static function retrieveByPK($app_uid, $del_index, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $app_uid, (string) $del_index));
        if (null !== ($obj = AppCacheViewPeer::getInstanceFromPool($_instancePoolKey))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(AppCacheViewPeer::DATABASE_NAME);
        $criteria->add(AppCacheViewPeer::APP_UID, $app_uid);
        $criteria->add(AppCacheViewPeer::DEL_INDEX, $del_index);
        $v = AppCacheViewPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
}
// BaseAppCacheViewPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAppCacheViewPeer::buildTableMap();

