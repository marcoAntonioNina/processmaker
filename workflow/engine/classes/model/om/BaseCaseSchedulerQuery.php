<?php


/**
 * Base class that represents a query for the 'CASE_SCHEDULER' table.
 *
 * 
 *
 * @method     CaseSchedulerQuery orderBySchUid($order = Criteria::ASC) Order by the SCH_UID column
 * @method     CaseSchedulerQuery orderBySchDelUserName($order = Criteria::ASC) Order by the SCH_DEL_USER_NAME column
 * @method     CaseSchedulerQuery orderBySchDelUserPass($order = Criteria::ASC) Order by the SCH_DEL_USER_PASS column
 * @method     CaseSchedulerQuery orderBySchDelUserUid($order = Criteria::ASC) Order by the SCH_DEL_USER_UID column
 * @method     CaseSchedulerQuery orderBySchName($order = Criteria::ASC) Order by the SCH_NAME column
 * @method     CaseSchedulerQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     CaseSchedulerQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     CaseSchedulerQuery orderBySchTimeNextRun($order = Criteria::ASC) Order by the SCH_TIME_NEXT_RUN column
 * @method     CaseSchedulerQuery orderBySchLastRunTime($order = Criteria::ASC) Order by the SCH_LAST_RUN_TIME column
 * @method     CaseSchedulerQuery orderBySchState($order = Criteria::ASC) Order by the SCH_STATE column
 * @method     CaseSchedulerQuery orderBySchLastState($order = Criteria::ASC) Order by the SCH_LAST_STATE column
 * @method     CaseSchedulerQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     CaseSchedulerQuery orderBySchOption($order = Criteria::ASC) Order by the SCH_OPTION column
 * @method     CaseSchedulerQuery orderBySchStartTime($order = Criteria::ASC) Order by the SCH_START_TIME column
 * @method     CaseSchedulerQuery orderBySchStartDate($order = Criteria::ASC) Order by the SCH_START_DATE column
 * @method     CaseSchedulerQuery orderBySchDaysPerformTask($order = Criteria::ASC) Order by the SCH_DAYS_PERFORM_TASK column
 * @method     CaseSchedulerQuery orderBySchEveryDays($order = Criteria::ASC) Order by the SCH_EVERY_DAYS column
 * @method     CaseSchedulerQuery orderBySchWeekDays($order = Criteria::ASC) Order by the SCH_WEEK_DAYS column
 * @method     CaseSchedulerQuery orderBySchStartDay($order = Criteria::ASC) Order by the SCH_START_DAY column
 * @method     CaseSchedulerQuery orderBySchMonths($order = Criteria::ASC) Order by the SCH_MONTHS column
 * @method     CaseSchedulerQuery orderBySchEndDate($order = Criteria::ASC) Order by the SCH_END_DATE column
 * @method     CaseSchedulerQuery orderBySchRepeatEvery($order = Criteria::ASC) Order by the SCH_REPEAT_EVERY column
 * @method     CaseSchedulerQuery orderBySchRepeatUntil($order = Criteria::ASC) Order by the SCH_REPEAT_UNTIL column
 * @method     CaseSchedulerQuery orderBySchRepeatStopIfRunning($order = Criteria::ASC) Order by the SCH_REPEAT_STOP_IF_RUNNING column
 * @method     CaseSchedulerQuery orderByCaseShPluginUid($order = Criteria::ASC) Order by the CASE_SH_PLUGIN_UID column
 *
 * @method     CaseSchedulerQuery groupBySchUid() Group by the SCH_UID column
 * @method     CaseSchedulerQuery groupBySchDelUserName() Group by the SCH_DEL_USER_NAME column
 * @method     CaseSchedulerQuery groupBySchDelUserPass() Group by the SCH_DEL_USER_PASS column
 * @method     CaseSchedulerQuery groupBySchDelUserUid() Group by the SCH_DEL_USER_UID column
 * @method     CaseSchedulerQuery groupBySchName() Group by the SCH_NAME column
 * @method     CaseSchedulerQuery groupByProUid() Group by the PRO_UID column
 * @method     CaseSchedulerQuery groupByTasUid() Group by the TAS_UID column
 * @method     CaseSchedulerQuery groupBySchTimeNextRun() Group by the SCH_TIME_NEXT_RUN column
 * @method     CaseSchedulerQuery groupBySchLastRunTime() Group by the SCH_LAST_RUN_TIME column
 * @method     CaseSchedulerQuery groupBySchState() Group by the SCH_STATE column
 * @method     CaseSchedulerQuery groupBySchLastState() Group by the SCH_LAST_STATE column
 * @method     CaseSchedulerQuery groupByUsrUid() Group by the USR_UID column
 * @method     CaseSchedulerQuery groupBySchOption() Group by the SCH_OPTION column
 * @method     CaseSchedulerQuery groupBySchStartTime() Group by the SCH_START_TIME column
 * @method     CaseSchedulerQuery groupBySchStartDate() Group by the SCH_START_DATE column
 * @method     CaseSchedulerQuery groupBySchDaysPerformTask() Group by the SCH_DAYS_PERFORM_TASK column
 * @method     CaseSchedulerQuery groupBySchEveryDays() Group by the SCH_EVERY_DAYS column
 * @method     CaseSchedulerQuery groupBySchWeekDays() Group by the SCH_WEEK_DAYS column
 * @method     CaseSchedulerQuery groupBySchStartDay() Group by the SCH_START_DAY column
 * @method     CaseSchedulerQuery groupBySchMonths() Group by the SCH_MONTHS column
 * @method     CaseSchedulerQuery groupBySchEndDate() Group by the SCH_END_DATE column
 * @method     CaseSchedulerQuery groupBySchRepeatEvery() Group by the SCH_REPEAT_EVERY column
 * @method     CaseSchedulerQuery groupBySchRepeatUntil() Group by the SCH_REPEAT_UNTIL column
 * @method     CaseSchedulerQuery groupBySchRepeatStopIfRunning() Group by the SCH_REPEAT_STOP_IF_RUNNING column
 * @method     CaseSchedulerQuery groupByCaseShPluginUid() Group by the CASE_SH_PLUGIN_UID column
 *
 * @method     CaseSchedulerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CaseSchedulerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CaseSchedulerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CaseScheduler findOne(PropelPDO $con = null) Return the first CaseScheduler matching the query
 * @method     CaseScheduler findOneOrCreate(PropelPDO $con = null) Return the first CaseScheduler matching the query, or a new CaseScheduler object populated from the query conditions when no match is found
 *
 * @method     CaseScheduler findOneBySchUid(string $SCH_UID) Return the first CaseScheduler filtered by the SCH_UID column
 * @method     CaseScheduler findOneBySchDelUserName(string $SCH_DEL_USER_NAME) Return the first CaseScheduler filtered by the SCH_DEL_USER_NAME column
 * @method     CaseScheduler findOneBySchDelUserPass(string $SCH_DEL_USER_PASS) Return the first CaseScheduler filtered by the SCH_DEL_USER_PASS column
 * @method     CaseScheduler findOneBySchDelUserUid(string $SCH_DEL_USER_UID) Return the first CaseScheduler filtered by the SCH_DEL_USER_UID column
 * @method     CaseScheduler findOneBySchName(string $SCH_NAME) Return the first CaseScheduler filtered by the SCH_NAME column
 * @method     CaseScheduler findOneByProUid(string $PRO_UID) Return the first CaseScheduler filtered by the PRO_UID column
 * @method     CaseScheduler findOneByTasUid(string $TAS_UID) Return the first CaseScheduler filtered by the TAS_UID column
 * @method     CaseScheduler findOneBySchTimeNextRun(string $SCH_TIME_NEXT_RUN) Return the first CaseScheduler filtered by the SCH_TIME_NEXT_RUN column
 * @method     CaseScheduler findOneBySchLastRunTime(string $SCH_LAST_RUN_TIME) Return the first CaseScheduler filtered by the SCH_LAST_RUN_TIME column
 * @method     CaseScheduler findOneBySchState(string $SCH_STATE) Return the first CaseScheduler filtered by the SCH_STATE column
 * @method     CaseScheduler findOneBySchLastState(string $SCH_LAST_STATE) Return the first CaseScheduler filtered by the SCH_LAST_STATE column
 * @method     CaseScheduler findOneByUsrUid(string $USR_UID) Return the first CaseScheduler filtered by the USR_UID column
 * @method     CaseScheduler findOneBySchOption(int $SCH_OPTION) Return the first CaseScheduler filtered by the SCH_OPTION column
 * @method     CaseScheduler findOneBySchStartTime(string $SCH_START_TIME) Return the first CaseScheduler filtered by the SCH_START_TIME column
 * @method     CaseScheduler findOneBySchStartDate(string $SCH_START_DATE) Return the first CaseScheduler filtered by the SCH_START_DATE column
 * @method     CaseScheduler findOneBySchDaysPerformTask(string $SCH_DAYS_PERFORM_TASK) Return the first CaseScheduler filtered by the SCH_DAYS_PERFORM_TASK column
 * @method     CaseScheduler findOneBySchEveryDays(int $SCH_EVERY_DAYS) Return the first CaseScheduler filtered by the SCH_EVERY_DAYS column
 * @method     CaseScheduler findOneBySchWeekDays(string $SCH_WEEK_DAYS) Return the first CaseScheduler filtered by the SCH_WEEK_DAYS column
 * @method     CaseScheduler findOneBySchStartDay(string $SCH_START_DAY) Return the first CaseScheduler filtered by the SCH_START_DAY column
 * @method     CaseScheduler findOneBySchMonths(string $SCH_MONTHS) Return the first CaseScheduler filtered by the SCH_MONTHS column
 * @method     CaseScheduler findOneBySchEndDate(string $SCH_END_DATE) Return the first CaseScheduler filtered by the SCH_END_DATE column
 * @method     CaseScheduler findOneBySchRepeatEvery(string $SCH_REPEAT_EVERY) Return the first CaseScheduler filtered by the SCH_REPEAT_EVERY column
 * @method     CaseScheduler findOneBySchRepeatUntil(string $SCH_REPEAT_UNTIL) Return the first CaseScheduler filtered by the SCH_REPEAT_UNTIL column
 * @method     CaseScheduler findOneBySchRepeatStopIfRunning(int $SCH_REPEAT_STOP_IF_RUNNING) Return the first CaseScheduler filtered by the SCH_REPEAT_STOP_IF_RUNNING column
 * @method     CaseScheduler findOneByCaseShPluginUid(string $CASE_SH_PLUGIN_UID) Return the first CaseScheduler filtered by the CASE_SH_PLUGIN_UID column
 *
 * @method     array findBySchUid(string $SCH_UID) Return CaseScheduler objects filtered by the SCH_UID column
 * @method     array findBySchDelUserName(string $SCH_DEL_USER_NAME) Return CaseScheduler objects filtered by the SCH_DEL_USER_NAME column
 * @method     array findBySchDelUserPass(string $SCH_DEL_USER_PASS) Return CaseScheduler objects filtered by the SCH_DEL_USER_PASS column
 * @method     array findBySchDelUserUid(string $SCH_DEL_USER_UID) Return CaseScheduler objects filtered by the SCH_DEL_USER_UID column
 * @method     array findBySchName(string $SCH_NAME) Return CaseScheduler objects filtered by the SCH_NAME column
 * @method     array findByProUid(string $PRO_UID) Return CaseScheduler objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return CaseScheduler objects filtered by the TAS_UID column
 * @method     array findBySchTimeNextRun(string $SCH_TIME_NEXT_RUN) Return CaseScheduler objects filtered by the SCH_TIME_NEXT_RUN column
 * @method     array findBySchLastRunTime(string $SCH_LAST_RUN_TIME) Return CaseScheduler objects filtered by the SCH_LAST_RUN_TIME column
 * @method     array findBySchState(string $SCH_STATE) Return CaseScheduler objects filtered by the SCH_STATE column
 * @method     array findBySchLastState(string $SCH_LAST_STATE) Return CaseScheduler objects filtered by the SCH_LAST_STATE column
 * @method     array findByUsrUid(string $USR_UID) Return CaseScheduler objects filtered by the USR_UID column
 * @method     array findBySchOption(int $SCH_OPTION) Return CaseScheduler objects filtered by the SCH_OPTION column
 * @method     array findBySchStartTime(string $SCH_START_TIME) Return CaseScheduler objects filtered by the SCH_START_TIME column
 * @method     array findBySchStartDate(string $SCH_START_DATE) Return CaseScheduler objects filtered by the SCH_START_DATE column
 * @method     array findBySchDaysPerformTask(string $SCH_DAYS_PERFORM_TASK) Return CaseScheduler objects filtered by the SCH_DAYS_PERFORM_TASK column
 * @method     array findBySchEveryDays(int $SCH_EVERY_DAYS) Return CaseScheduler objects filtered by the SCH_EVERY_DAYS column
 * @method     array findBySchWeekDays(string $SCH_WEEK_DAYS) Return CaseScheduler objects filtered by the SCH_WEEK_DAYS column
 * @method     array findBySchStartDay(string $SCH_START_DAY) Return CaseScheduler objects filtered by the SCH_START_DAY column
 * @method     array findBySchMonths(string $SCH_MONTHS) Return CaseScheduler objects filtered by the SCH_MONTHS column
 * @method     array findBySchEndDate(string $SCH_END_DATE) Return CaseScheduler objects filtered by the SCH_END_DATE column
 * @method     array findBySchRepeatEvery(string $SCH_REPEAT_EVERY) Return CaseScheduler objects filtered by the SCH_REPEAT_EVERY column
 * @method     array findBySchRepeatUntil(string $SCH_REPEAT_UNTIL) Return CaseScheduler objects filtered by the SCH_REPEAT_UNTIL column
 * @method     array findBySchRepeatStopIfRunning(int $SCH_REPEAT_STOP_IF_RUNNING) Return CaseScheduler objects filtered by the SCH_REPEAT_STOP_IF_RUNNING column
 * @method     array findByCaseShPluginUid(string $CASE_SH_PLUGIN_UID) Return CaseScheduler objects filtered by the CASE_SH_PLUGIN_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCaseSchedulerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCaseSchedulerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CaseScheduler', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CaseSchedulerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CaseSchedulerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CaseSchedulerQuery) {
            return $criteria;
        }
        $query = new CaseSchedulerQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    CaseScheduler|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CaseSchedulerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SCH_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySchUid('fooValue');   // WHERE SCH_UID = 'fooValue'
     * $query->filterBySchUid('%fooValue%'); // WHERE SCH_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchUid($schUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schUid)) {
                $schUid = str_replace('*', '%', $schUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_UID, $schUid, $comparison);
    }

    /**
     * Filter the query on the SCH_DEL_USER_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterBySchDelUserName('fooValue');   // WHERE SCH_DEL_USER_NAME = 'fooValue'
     * $query->filterBySchDelUserName('%fooValue%'); // WHERE SCH_DEL_USER_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schDelUserName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchDelUserName($schDelUserName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schDelUserName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schDelUserName)) {
                $schDelUserName = str_replace('*', '%', $schDelUserName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_DEL_USER_NAME, $schDelUserName, $comparison);
    }

    /**
     * Filter the query on the SCH_DEL_USER_PASS column
     *
     * Example usage:
     * <code>
     * $query->filterBySchDelUserPass('fooValue');   // WHERE SCH_DEL_USER_PASS = 'fooValue'
     * $query->filterBySchDelUserPass('%fooValue%'); // WHERE SCH_DEL_USER_PASS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schDelUserPass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchDelUserPass($schDelUserPass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schDelUserPass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schDelUserPass)) {
                $schDelUserPass = str_replace('*', '%', $schDelUserPass);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_DEL_USER_PASS, $schDelUserPass, $comparison);
    }

    /**
     * Filter the query on the SCH_DEL_USER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySchDelUserUid('fooValue');   // WHERE SCH_DEL_USER_UID = 'fooValue'
     * $query->filterBySchDelUserUid('%fooValue%'); // WHERE SCH_DEL_USER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schDelUserUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchDelUserUid($schDelUserUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schDelUserUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schDelUserUid)) {
                $schDelUserUid = str_replace('*', '%', $schDelUserUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_DEL_USER_UID, $schDelUserUid, $comparison);
    }

    /**
     * Filter the query on the SCH_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterBySchName('fooValue');   // WHERE SCH_NAME = 'fooValue'
     * $query->filterBySchName('%fooValue%'); // WHERE SCH_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchName($schName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schName)) {
                $schName = str_replace('*', '%', $schName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_NAME, $schName, $comparison);
    }

    /**
     * Filter the query on the PRO_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByProUid('fooValue');   // WHERE PRO_UID = 'fooValue'
     * $query->filterByProUid('%fooValue%'); // WHERE PRO_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterByProUid($proUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proUid)) {
                $proUid = str_replace('*', '%', $proUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the TAS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasUid('fooValue');   // WHERE TAS_UID = 'fooValue'
     * $query->filterByTasUid('%fooValue%'); // WHERE TAS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterByTasUid($tasUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasUid)) {
                $tasUid = str_replace('*', '%', $tasUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the SCH_TIME_NEXT_RUN column
     *
     * Example usage:
     * <code>
     * $query->filterBySchTimeNextRun('2011-03-14'); // WHERE SCH_TIME_NEXT_RUN = '2011-03-14'
     * $query->filterBySchTimeNextRun('now'); // WHERE SCH_TIME_NEXT_RUN = '2011-03-14'
     * $query->filterBySchTimeNextRun(array('max' => 'yesterday')); // WHERE SCH_TIME_NEXT_RUN > '2011-03-13'
     * </code>
     *
     * @param     mixed $schTimeNextRun The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchTimeNextRun($schTimeNextRun = null, $comparison = null)
    {
        if (is_array($schTimeNextRun)) {
            $useMinMax = false;
            if (isset($schTimeNextRun['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_TIME_NEXT_RUN, $schTimeNextRun['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schTimeNextRun['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_TIME_NEXT_RUN, $schTimeNextRun['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_TIME_NEXT_RUN, $schTimeNextRun, $comparison);
    }

    /**
     * Filter the query on the SCH_LAST_RUN_TIME column
     *
     * Example usage:
     * <code>
     * $query->filterBySchLastRunTime('2011-03-14'); // WHERE SCH_LAST_RUN_TIME = '2011-03-14'
     * $query->filterBySchLastRunTime('now'); // WHERE SCH_LAST_RUN_TIME = '2011-03-14'
     * $query->filterBySchLastRunTime(array('max' => 'yesterday')); // WHERE SCH_LAST_RUN_TIME > '2011-03-13'
     * </code>
     *
     * @param     mixed $schLastRunTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchLastRunTime($schLastRunTime = null, $comparison = null)
    {
        if (is_array($schLastRunTime)) {
            $useMinMax = false;
            if (isset($schLastRunTime['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_LAST_RUN_TIME, $schLastRunTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schLastRunTime['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_LAST_RUN_TIME, $schLastRunTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_LAST_RUN_TIME, $schLastRunTime, $comparison);
    }

    /**
     * Filter the query on the SCH_STATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySchState('fooValue');   // WHERE SCH_STATE = 'fooValue'
     * $query->filterBySchState('%fooValue%'); // WHERE SCH_STATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schState The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchState($schState = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schState)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schState)) {
                $schState = str_replace('*', '%', $schState);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_STATE, $schState, $comparison);
    }

    /**
     * Filter the query on the SCH_LAST_STATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySchLastState('fooValue');   // WHERE SCH_LAST_STATE = 'fooValue'
     * $query->filterBySchLastState('%fooValue%'); // WHERE SCH_LAST_STATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schLastState The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchLastState($schLastState = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schLastState)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schLastState)) {
                $schLastState = str_replace('*', '%', $schLastState);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_LAST_STATE, $schLastState, $comparison);
    }

    /**
     * Filter the query on the USR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUid('fooValue');   // WHERE USR_UID = 'fooValue'
     * $query->filterByUsrUid('%fooValue%'); // WHERE USR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterByUsrUid($usrUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrUid)) {
                $usrUid = str_replace('*', '%', $usrUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the SCH_OPTION column
     *
     * Example usage:
     * <code>
     * $query->filterBySchOption(1234); // WHERE SCH_OPTION = 1234
     * $query->filterBySchOption(array(12, 34)); // WHERE SCH_OPTION IN (12, 34)
     * $query->filterBySchOption(array('min' => 12)); // WHERE SCH_OPTION > 12
     * </code>
     *
     * @param     mixed $schOption The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchOption($schOption = null, $comparison = null)
    {
        if (is_array($schOption)) {
            $useMinMax = false;
            if (isset($schOption['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_OPTION, $schOption['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schOption['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_OPTION, $schOption['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_OPTION, $schOption, $comparison);
    }

    /**
     * Filter the query on the SCH_START_TIME column
     *
     * Example usage:
     * <code>
     * $query->filterBySchStartTime('2011-03-14'); // WHERE SCH_START_TIME = '2011-03-14'
     * $query->filterBySchStartTime('now'); // WHERE SCH_START_TIME = '2011-03-14'
     * $query->filterBySchStartTime(array('max' => 'yesterday')); // WHERE SCH_START_TIME > '2011-03-13'
     * </code>
     *
     * @param     mixed $schStartTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchStartTime($schStartTime = null, $comparison = null)
    {
        if (is_array($schStartTime)) {
            $useMinMax = false;
            if (isset($schStartTime['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_START_TIME, $schStartTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schStartTime['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_START_TIME, $schStartTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_START_TIME, $schStartTime, $comparison);
    }

    /**
     * Filter the query on the SCH_START_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySchStartDate('2011-03-14'); // WHERE SCH_START_DATE = '2011-03-14'
     * $query->filterBySchStartDate('now'); // WHERE SCH_START_DATE = '2011-03-14'
     * $query->filterBySchStartDate(array('max' => 'yesterday')); // WHERE SCH_START_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $schStartDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchStartDate($schStartDate = null, $comparison = null)
    {
        if (is_array($schStartDate)) {
            $useMinMax = false;
            if (isset($schStartDate['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_START_DATE, $schStartDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schStartDate['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_START_DATE, $schStartDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_START_DATE, $schStartDate, $comparison);
    }

    /**
     * Filter the query on the SCH_DAYS_PERFORM_TASK column
     *
     * Example usage:
     * <code>
     * $query->filterBySchDaysPerformTask('fooValue');   // WHERE SCH_DAYS_PERFORM_TASK = 'fooValue'
     * $query->filterBySchDaysPerformTask('%fooValue%'); // WHERE SCH_DAYS_PERFORM_TASK LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schDaysPerformTask The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchDaysPerformTask($schDaysPerformTask = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schDaysPerformTask)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schDaysPerformTask)) {
                $schDaysPerformTask = str_replace('*', '%', $schDaysPerformTask);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_DAYS_PERFORM_TASK, $schDaysPerformTask, $comparison);
    }

    /**
     * Filter the query on the SCH_EVERY_DAYS column
     *
     * Example usage:
     * <code>
     * $query->filterBySchEveryDays(1234); // WHERE SCH_EVERY_DAYS = 1234
     * $query->filterBySchEveryDays(array(12, 34)); // WHERE SCH_EVERY_DAYS IN (12, 34)
     * $query->filterBySchEveryDays(array('min' => 12)); // WHERE SCH_EVERY_DAYS > 12
     * </code>
     *
     * @param     mixed $schEveryDays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchEveryDays($schEveryDays = null, $comparison = null)
    {
        if (is_array($schEveryDays)) {
            $useMinMax = false;
            if (isset($schEveryDays['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_EVERY_DAYS, $schEveryDays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schEveryDays['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_EVERY_DAYS, $schEveryDays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_EVERY_DAYS, $schEveryDays, $comparison);
    }

    /**
     * Filter the query on the SCH_WEEK_DAYS column
     *
     * Example usage:
     * <code>
     * $query->filterBySchWeekDays('fooValue');   // WHERE SCH_WEEK_DAYS = 'fooValue'
     * $query->filterBySchWeekDays('%fooValue%'); // WHERE SCH_WEEK_DAYS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schWeekDays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchWeekDays($schWeekDays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schWeekDays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schWeekDays)) {
                $schWeekDays = str_replace('*', '%', $schWeekDays);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_WEEK_DAYS, $schWeekDays, $comparison);
    }

    /**
     * Filter the query on the SCH_START_DAY column
     *
     * Example usage:
     * <code>
     * $query->filterBySchStartDay('fooValue');   // WHERE SCH_START_DAY = 'fooValue'
     * $query->filterBySchStartDay('%fooValue%'); // WHERE SCH_START_DAY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schStartDay The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchStartDay($schStartDay = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schStartDay)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schStartDay)) {
                $schStartDay = str_replace('*', '%', $schStartDay);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_START_DAY, $schStartDay, $comparison);
    }

    /**
     * Filter the query on the SCH_MONTHS column
     *
     * Example usage:
     * <code>
     * $query->filterBySchMonths('fooValue');   // WHERE SCH_MONTHS = 'fooValue'
     * $query->filterBySchMonths('%fooValue%'); // WHERE SCH_MONTHS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schMonths The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchMonths($schMonths = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schMonths)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schMonths)) {
                $schMonths = str_replace('*', '%', $schMonths);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_MONTHS, $schMonths, $comparison);
    }

    /**
     * Filter the query on the SCH_END_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySchEndDate('2011-03-14'); // WHERE SCH_END_DATE = '2011-03-14'
     * $query->filterBySchEndDate('now'); // WHERE SCH_END_DATE = '2011-03-14'
     * $query->filterBySchEndDate(array('max' => 'yesterday')); // WHERE SCH_END_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $schEndDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchEndDate($schEndDate = null, $comparison = null)
    {
        if (is_array($schEndDate)) {
            $useMinMax = false;
            if (isset($schEndDate['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_END_DATE, $schEndDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schEndDate['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_END_DATE, $schEndDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_END_DATE, $schEndDate, $comparison);
    }

    /**
     * Filter the query on the SCH_REPEAT_EVERY column
     *
     * Example usage:
     * <code>
     * $query->filterBySchRepeatEvery('fooValue');   // WHERE SCH_REPEAT_EVERY = 'fooValue'
     * $query->filterBySchRepeatEvery('%fooValue%'); // WHERE SCH_REPEAT_EVERY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schRepeatEvery The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchRepeatEvery($schRepeatEvery = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schRepeatEvery)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schRepeatEvery)) {
                $schRepeatEvery = str_replace('*', '%', $schRepeatEvery);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_REPEAT_EVERY, $schRepeatEvery, $comparison);
    }

    /**
     * Filter the query on the SCH_REPEAT_UNTIL column
     *
     * Example usage:
     * <code>
     * $query->filterBySchRepeatUntil('fooValue');   // WHERE SCH_REPEAT_UNTIL = 'fooValue'
     * $query->filterBySchRepeatUntil('%fooValue%'); // WHERE SCH_REPEAT_UNTIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schRepeatUntil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchRepeatUntil($schRepeatUntil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schRepeatUntil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schRepeatUntil)) {
                $schRepeatUntil = str_replace('*', '%', $schRepeatUntil);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_REPEAT_UNTIL, $schRepeatUntil, $comparison);
    }

    /**
     * Filter the query on the SCH_REPEAT_STOP_IF_RUNNING column
     *
     * Example usage:
     * <code>
     * $query->filterBySchRepeatStopIfRunning(1234); // WHERE SCH_REPEAT_STOP_IF_RUNNING = 1234
     * $query->filterBySchRepeatStopIfRunning(array(12, 34)); // WHERE SCH_REPEAT_STOP_IF_RUNNING IN (12, 34)
     * $query->filterBySchRepeatStopIfRunning(array('min' => 12)); // WHERE SCH_REPEAT_STOP_IF_RUNNING > 12
     * </code>
     *
     * @param     mixed $schRepeatStopIfRunning The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterBySchRepeatStopIfRunning($schRepeatStopIfRunning = null, $comparison = null)
    {
        if (is_array($schRepeatStopIfRunning)) {
            $useMinMax = false;
            if (isset($schRepeatStopIfRunning['min'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING, $schRepeatStopIfRunning['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schRepeatStopIfRunning['max'])) {
                $this->addUsingAlias(CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING, $schRepeatStopIfRunning['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING, $schRepeatStopIfRunning, $comparison);
    }

    /**
     * Filter the query on the CASE_SH_PLUGIN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByCaseShPluginUid('fooValue');   // WHERE CASE_SH_PLUGIN_UID = 'fooValue'
     * $query->filterByCaseShPluginUid('%fooValue%'); // WHERE CASE_SH_PLUGIN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $caseShPluginUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function filterByCaseShPluginUid($caseShPluginUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($caseShPluginUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $caseShPluginUid)) {
                $caseShPluginUid = str_replace('*', '%', $caseShPluginUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseSchedulerPeer::CASE_SH_PLUGIN_UID, $caseShPluginUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CaseScheduler $caseScheduler Object to remove from the list of results
     *
     * @return    CaseSchedulerQuery The current query, for fluid interface
     */
    public function prune($caseScheduler = null)
    {
        if ($caseScheduler) {
            $this->addUsingAlias(CaseSchedulerPeer::SCH_UID, $caseScheduler->getSchUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCaseSchedulerQuery