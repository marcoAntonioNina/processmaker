<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/CaseSchedulerTableMap.php';

include_once 'classes/model/CaseScheduler.php';
/**
 * Base static class for performing query and update operations on the 'CASE_SCHEDULER' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCaseSchedulerPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'CASE_SCHEDULER';

    /** the related Propel class for this table */
    const OM_CLASS = 'CaseScheduler';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.CaseScheduler';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CaseSchedulerTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the SCH_UID field */
    const SCH_UID = 'CASE_SCHEDULER.SCH_UID';

    /** the column name for the SCH_DEL_USER_NAME field */
    const SCH_DEL_USER_NAME = 'CASE_SCHEDULER.SCH_DEL_USER_NAME';

    /** the column name for the SCH_DEL_USER_PASS field */
    const SCH_DEL_USER_PASS = 'CASE_SCHEDULER.SCH_DEL_USER_PASS';

    /** the column name for the SCH_DEL_USER_UID field */
    const SCH_DEL_USER_UID = 'CASE_SCHEDULER.SCH_DEL_USER_UID';

    /** the column name for the SCH_NAME field */
    const SCH_NAME = 'CASE_SCHEDULER.SCH_NAME';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'CASE_SCHEDULER.PRO_UID';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'CASE_SCHEDULER.TAS_UID';

    /** the column name for the SCH_TIME_NEXT_RUN field */
    const SCH_TIME_NEXT_RUN = 'CASE_SCHEDULER.SCH_TIME_NEXT_RUN';

    /** the column name for the SCH_LAST_RUN_TIME field */
    const SCH_LAST_RUN_TIME = 'CASE_SCHEDULER.SCH_LAST_RUN_TIME';

    /** the column name for the SCH_STATE field */
    const SCH_STATE = 'CASE_SCHEDULER.SCH_STATE';

    /** the column name for the SCH_LAST_STATE field */
    const SCH_LAST_STATE = 'CASE_SCHEDULER.SCH_LAST_STATE';

    /** the column name for the USR_UID field */
    const USR_UID = 'CASE_SCHEDULER.USR_UID';

    /** the column name for the SCH_OPTION field */
    const SCH_OPTION = 'CASE_SCHEDULER.SCH_OPTION';

    /** the column name for the SCH_START_TIME field */
    const SCH_START_TIME = 'CASE_SCHEDULER.SCH_START_TIME';

    /** the column name for the SCH_START_DATE field */
    const SCH_START_DATE = 'CASE_SCHEDULER.SCH_START_DATE';

    /** the column name for the SCH_DAYS_PERFORM_TASK field */
    const SCH_DAYS_PERFORM_TASK = 'CASE_SCHEDULER.SCH_DAYS_PERFORM_TASK';

    /** the column name for the SCH_EVERY_DAYS field */
    const SCH_EVERY_DAYS = 'CASE_SCHEDULER.SCH_EVERY_DAYS';

    /** the column name for the SCH_WEEK_DAYS field */
    const SCH_WEEK_DAYS = 'CASE_SCHEDULER.SCH_WEEK_DAYS';

    /** the column name for the SCH_START_DAY field */
    const SCH_START_DAY = 'CASE_SCHEDULER.SCH_START_DAY';

    /** the column name for the SCH_MONTHS field */
    const SCH_MONTHS = 'CASE_SCHEDULER.SCH_MONTHS';

    /** the column name for the SCH_END_DATE field */
    const SCH_END_DATE = 'CASE_SCHEDULER.SCH_END_DATE';

    /** the column name for the SCH_REPEAT_EVERY field */
    const SCH_REPEAT_EVERY = 'CASE_SCHEDULER.SCH_REPEAT_EVERY';

    /** the column name for the SCH_REPEAT_UNTIL field */
    const SCH_REPEAT_UNTIL = 'CASE_SCHEDULER.SCH_REPEAT_UNTIL';

    /** the column name for the SCH_REPEAT_STOP_IF_RUNNING field */
    const SCH_REPEAT_STOP_IF_RUNNING = 'CASE_SCHEDULER.SCH_REPEAT_STOP_IF_RUNNING';

    /** the column name for the CASE_SH_PLUGIN_UID field */
    const CASE_SH_PLUGIN_UID = 'CASE_SCHEDULER.CASE_SH_PLUGIN_UID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of CaseScheduler objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CaseScheduler[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('SchUid', 'SchDelUserName', 'SchDelUserPass', 'SchDelUserUid', 'SchName', 'ProUid', 'TasUid', 'SchTimeNextRun', 'SchLastRunTime', 'SchState', 'SchLastState', 'UsrUid', 'SchOption', 'SchStartTime', 'SchStartDate', 'SchDaysPerformTask', 'SchEveryDays', 'SchWeekDays', 'SchStartDay', 'SchMonths', 'SchEndDate', 'SchRepeatEvery', 'SchRepeatUntil', 'SchRepeatStopIfRunning', 'CaseShPluginUid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('schUid', 'schDelUserName', 'schDelUserPass', 'schDelUserUid', 'schName', 'proUid', 'tasUid', 'schTimeNextRun', 'schLastRunTime', 'schState', 'schLastState', 'usrUid', 'schOption', 'schStartTime', 'schStartDate', 'schDaysPerformTask', 'schEveryDays', 'schWeekDays', 'schStartDay', 'schMonths', 'schEndDate', 'schRepeatEvery', 'schRepeatUntil', 'schRepeatStopIfRunning', 'caseShPluginUid', ),
        BasePeer::TYPE_COLNAME => array (self::SCH_UID, self::SCH_DEL_USER_NAME, self::SCH_DEL_USER_PASS, self::SCH_DEL_USER_UID, self::SCH_NAME, self::PRO_UID, self::TAS_UID, self::SCH_TIME_NEXT_RUN, self::SCH_LAST_RUN_TIME, self::SCH_STATE, self::SCH_LAST_STATE, self::USR_UID, self::SCH_OPTION, self::SCH_START_TIME, self::SCH_START_DATE, self::SCH_DAYS_PERFORM_TASK, self::SCH_EVERY_DAYS, self::SCH_WEEK_DAYS, self::SCH_START_DAY, self::SCH_MONTHS, self::SCH_END_DATE, self::SCH_REPEAT_EVERY, self::SCH_REPEAT_UNTIL, self::SCH_REPEAT_STOP_IF_RUNNING, self::CASE_SH_PLUGIN_UID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SCH_UID', 'SCH_DEL_USER_NAME', 'SCH_DEL_USER_PASS', 'SCH_DEL_USER_UID', 'SCH_NAME', 'PRO_UID', 'TAS_UID', 'SCH_TIME_NEXT_RUN', 'SCH_LAST_RUN_TIME', 'SCH_STATE', 'SCH_LAST_STATE', 'USR_UID', 'SCH_OPTION', 'SCH_START_TIME', 'SCH_START_DATE', 'SCH_DAYS_PERFORM_TASK', 'SCH_EVERY_DAYS', 'SCH_WEEK_DAYS', 'SCH_START_DAY', 'SCH_MONTHS', 'SCH_END_DATE', 'SCH_REPEAT_EVERY', 'SCH_REPEAT_UNTIL', 'SCH_REPEAT_STOP_IF_RUNNING', 'CASE_SH_PLUGIN_UID', ),
        BasePeer::TYPE_FIELDNAME => array ('SCH_UID', 'SCH_DEL_USER_NAME', 'SCH_DEL_USER_PASS', 'SCH_DEL_USER_UID', 'SCH_NAME', 'PRO_UID', 'TAS_UID', 'SCH_TIME_NEXT_RUN', 'SCH_LAST_RUN_TIME', 'SCH_STATE', 'SCH_LAST_STATE', 'USR_UID', 'SCH_OPTION', 'SCH_START_TIME', 'SCH_START_DATE', 'SCH_DAYS_PERFORM_TASK', 'SCH_EVERY_DAYS', 'SCH_WEEK_DAYS', 'SCH_START_DAY', 'SCH_MONTHS', 'SCH_END_DATE', 'SCH_REPEAT_EVERY', 'SCH_REPEAT_UNTIL', 'SCH_REPEAT_STOP_IF_RUNNING', 'CASE_SH_PLUGIN_UID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('SchUid' => 0, 'SchDelUserName' => 1, 'SchDelUserPass' => 2, 'SchDelUserUid' => 3, 'SchName' => 4, 'ProUid' => 5, 'TasUid' => 6, 'SchTimeNextRun' => 7, 'SchLastRunTime' => 8, 'SchState' => 9, 'SchLastState' => 10, 'UsrUid' => 11, 'SchOption' => 12, 'SchStartTime' => 13, 'SchStartDate' => 14, 'SchDaysPerformTask' => 15, 'SchEveryDays' => 16, 'SchWeekDays' => 17, 'SchStartDay' => 18, 'SchMonths' => 19, 'SchEndDate' => 20, 'SchRepeatEvery' => 21, 'SchRepeatUntil' => 22, 'SchRepeatStopIfRunning' => 23, 'CaseShPluginUid' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('schUid' => 0, 'schDelUserName' => 1, 'schDelUserPass' => 2, 'schDelUserUid' => 3, 'schName' => 4, 'proUid' => 5, 'tasUid' => 6, 'schTimeNextRun' => 7, 'schLastRunTime' => 8, 'schState' => 9, 'schLastState' => 10, 'usrUid' => 11, 'schOption' => 12, 'schStartTime' => 13, 'schStartDate' => 14, 'schDaysPerformTask' => 15, 'schEveryDays' => 16, 'schWeekDays' => 17, 'schStartDay' => 18, 'schMonths' => 19, 'schEndDate' => 20, 'schRepeatEvery' => 21, 'schRepeatUntil' => 22, 'schRepeatStopIfRunning' => 23, 'caseShPluginUid' => 24, ),
        BasePeer::TYPE_COLNAME => array (self::SCH_UID => 0, self::SCH_DEL_USER_NAME => 1, self::SCH_DEL_USER_PASS => 2, self::SCH_DEL_USER_UID => 3, self::SCH_NAME => 4, self::PRO_UID => 5, self::TAS_UID => 6, self::SCH_TIME_NEXT_RUN => 7, self::SCH_LAST_RUN_TIME => 8, self::SCH_STATE => 9, self::SCH_LAST_STATE => 10, self::USR_UID => 11, self::SCH_OPTION => 12, self::SCH_START_TIME => 13, self::SCH_START_DATE => 14, self::SCH_DAYS_PERFORM_TASK => 15, self::SCH_EVERY_DAYS => 16, self::SCH_WEEK_DAYS => 17, self::SCH_START_DAY => 18, self::SCH_MONTHS => 19, self::SCH_END_DATE => 20, self::SCH_REPEAT_EVERY => 21, self::SCH_REPEAT_UNTIL => 22, self::SCH_REPEAT_STOP_IF_RUNNING => 23, self::CASE_SH_PLUGIN_UID => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SCH_UID' => 0, 'SCH_DEL_USER_NAME' => 1, 'SCH_DEL_USER_PASS' => 2, 'SCH_DEL_USER_UID' => 3, 'SCH_NAME' => 4, 'PRO_UID' => 5, 'TAS_UID' => 6, 'SCH_TIME_NEXT_RUN' => 7, 'SCH_LAST_RUN_TIME' => 8, 'SCH_STATE' => 9, 'SCH_LAST_STATE' => 10, 'USR_UID' => 11, 'SCH_OPTION' => 12, 'SCH_START_TIME' => 13, 'SCH_START_DATE' => 14, 'SCH_DAYS_PERFORM_TASK' => 15, 'SCH_EVERY_DAYS' => 16, 'SCH_WEEK_DAYS' => 17, 'SCH_START_DAY' => 18, 'SCH_MONTHS' => 19, 'SCH_END_DATE' => 20, 'SCH_REPEAT_EVERY' => 21, 'SCH_REPEAT_UNTIL' => 22, 'SCH_REPEAT_STOP_IF_RUNNING' => 23, 'CASE_SH_PLUGIN_UID' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('SCH_UID' => 0, 'SCH_DEL_USER_NAME' => 1, 'SCH_DEL_USER_PASS' => 2, 'SCH_DEL_USER_UID' => 3, 'SCH_NAME' => 4, 'PRO_UID' => 5, 'TAS_UID' => 6, 'SCH_TIME_NEXT_RUN' => 7, 'SCH_LAST_RUN_TIME' => 8, 'SCH_STATE' => 9, 'SCH_LAST_STATE' => 10, 'USR_UID' => 11, 'SCH_OPTION' => 12, 'SCH_START_TIME' => 13, 'SCH_START_DATE' => 14, 'SCH_DAYS_PERFORM_TASK' => 15, 'SCH_EVERY_DAYS' => 16, 'SCH_WEEK_DAYS' => 17, 'SCH_START_DAY' => 18, 'SCH_MONTHS' => 19, 'SCH_END_DATE' => 20, 'SCH_REPEAT_EVERY' => 21, 'SCH_REPEAT_UNTIL' => 22, 'SCH_REPEAT_STOP_IF_RUNNING' => 23, 'CASE_SH_PLUGIN_UID' => 24, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
     * @param      string $column The column name for current table. (i.e. CaseSchedulerPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CaseSchedulerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_UID);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_DEL_USER_NAME);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_DEL_USER_PASS);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_DEL_USER_UID);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_NAME);
            $criteria->addSelectColumn(CaseSchedulerPeer::PRO_UID);
            $criteria->addSelectColumn(CaseSchedulerPeer::TAS_UID);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_TIME_NEXT_RUN);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_LAST_RUN_TIME);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_STATE);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_LAST_STATE);
            $criteria->addSelectColumn(CaseSchedulerPeer::USR_UID);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_OPTION);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_START_TIME);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_START_DATE);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_DAYS_PERFORM_TASK);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_EVERY_DAYS);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_WEEK_DAYS);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_START_DAY);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_MONTHS);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_END_DATE);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_REPEAT_EVERY);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_REPEAT_UNTIL);
            $criteria->addSelectColumn(CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING);
            $criteria->addSelectColumn(CaseSchedulerPeer::CASE_SH_PLUGIN_UID);
        } else {
            $criteria->addSelectColumn($alias . '.SCH_UID');
            $criteria->addSelectColumn($alias . '.SCH_DEL_USER_NAME');
            $criteria->addSelectColumn($alias . '.SCH_DEL_USER_PASS');
            $criteria->addSelectColumn($alias . '.SCH_DEL_USER_UID');
            $criteria->addSelectColumn($alias . '.SCH_NAME');
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.TAS_UID');
            $criteria->addSelectColumn($alias . '.SCH_TIME_NEXT_RUN');
            $criteria->addSelectColumn($alias . '.SCH_LAST_RUN_TIME');
            $criteria->addSelectColumn($alias . '.SCH_STATE');
            $criteria->addSelectColumn($alias . '.SCH_LAST_STATE');
            $criteria->addSelectColumn($alias . '.USR_UID');
            $criteria->addSelectColumn($alias . '.SCH_OPTION');
            $criteria->addSelectColumn($alias . '.SCH_START_TIME');
            $criteria->addSelectColumn($alias . '.SCH_START_DATE');
            $criteria->addSelectColumn($alias . '.SCH_DAYS_PERFORM_TASK');
            $criteria->addSelectColumn($alias . '.SCH_EVERY_DAYS');
            $criteria->addSelectColumn($alias . '.SCH_WEEK_DAYS');
            $criteria->addSelectColumn($alias . '.SCH_START_DAY');
            $criteria->addSelectColumn($alias . '.SCH_MONTHS');
            $criteria->addSelectColumn($alias . '.SCH_END_DATE');
            $criteria->addSelectColumn($alias . '.SCH_REPEAT_EVERY');
            $criteria->addSelectColumn($alias . '.SCH_REPEAT_UNTIL');
            $criteria->addSelectColumn($alias . '.SCH_REPEAT_STOP_IF_RUNNING');
            $criteria->addSelectColumn($alias . '.CASE_SH_PLUGIN_UID');
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
        $criteria->setPrimaryTableName(CaseSchedulerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CaseSchedulerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return     CaseScheduler
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CaseSchedulerPeer::doSelect($critcopy, $con);
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
        return CaseSchedulerPeer::populateObjects(CaseSchedulerPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CaseSchedulerPeer::addSelectColumns($criteria);
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
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CaseSchedulerPeer::addSelectColumns($criteria);
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
     * @param      CaseScheduler $value A CaseScheduler object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSchUid();
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
     * @param      mixed $value A CaseScheduler object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CaseScheduler) {
                $key = (string) $value->getSchUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CaseScheduler object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return     CaseScheduler Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to CASE_SCHEDULER
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
        $cls = CaseSchedulerPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CaseSchedulerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CaseSchedulerPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CaseSchedulerPeer::addInstanceToPool($obj, $key);
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
     * @return     array (CaseScheduler object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CaseSchedulerPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CaseSchedulerPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CaseSchedulerPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CaseSchedulerPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CaseSchedulerPeer::addInstanceToPool($obj, $key);
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
        $dbMap = Propel::getDatabaseMap(BaseCaseSchedulerPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseCaseSchedulerPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new CaseSchedulerTableMap());
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
        return $withPrefix ? CaseSchedulerPeer::CLASS_DEFAULT : CaseSchedulerPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CaseScheduler or Criteria object.
     *
     * @param      mixed $values Criteria or CaseScheduler object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CaseScheduler object
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
     * Performs an UPDATE on the database, given a CaseScheduler or Criteria object.
     *
     * @param      mixed $values Criteria or CaseScheduler object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CaseSchedulerPeer::SCH_UID);
            $value = $criteria->remove(CaseSchedulerPeer::SCH_UID);
            if ($value) {
                $selectCriteria->add(CaseSchedulerPeer::SCH_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CaseSchedulerPeer::TABLE_NAME);
            }

        } else {
            // $values is CaseScheduler object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the CASE_SCHEDULER table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CaseSchedulerPeer::TABLE_NAME, $con, CaseSchedulerPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CaseSchedulerPeer::clearInstancePool();
            CaseSchedulerPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CaseScheduler or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CaseScheduler object or primary key or array of primary keys
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
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CaseSchedulerPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CaseScheduler) { // it's a model object
            // invalidate the cache for this single object
            CaseSchedulerPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(CaseSchedulerPeer::SCH_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CaseSchedulerPeer::removeInstanceFromPool($singleval);
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
            CaseSchedulerPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CaseScheduler object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CaseScheduler $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CaseSchedulerPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CaseSchedulerPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CaseSchedulerPeer::DATABASE_NAME, CaseSchedulerPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     CaseScheduler
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CaseSchedulerPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CaseSchedulerPeer::DATABASE_NAME);
        $criteria->add(CaseSchedulerPeer::SCH_UID, $pk);

        $v = CaseSchedulerPeer::doSelect($criteria, $con);

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
            $con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CaseSchedulerPeer::DATABASE_NAME);
            $criteria->add(CaseSchedulerPeer::SCH_UID, $pks, Criteria::IN);
            $objs = CaseSchedulerPeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseCaseSchedulerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCaseSchedulerPeer::buildTableMap();

