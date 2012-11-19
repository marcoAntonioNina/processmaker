<?php


/**
 * Base class that represents a query for the 'LOG_CASES_SCHEDULER' table.
 *
 * 
 *
 * @method     LogCasesSchedulerQuery orderByLogCaseUid($order = Criteria::ASC) Order by the LOG_CASE_UID column
 * @method     LogCasesSchedulerQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     LogCasesSchedulerQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     LogCasesSchedulerQuery orderByUsrName($order = Criteria::ASC) Order by the USR_NAME column
 * @method     LogCasesSchedulerQuery orderByExecDate($order = Criteria::ASC) Order by the EXEC_DATE column
 * @method     LogCasesSchedulerQuery orderByExecHour($order = Criteria::ASC) Order by the EXEC_HOUR column
 * @method     LogCasesSchedulerQuery orderByResult($order = Criteria::ASC) Order by the RESULT column
 * @method     LogCasesSchedulerQuery orderBySchUid($order = Criteria::ASC) Order by the SCH_UID column
 * @method     LogCasesSchedulerQuery orderByWsCreateCaseStatus($order = Criteria::ASC) Order by the WS_CREATE_CASE_STATUS column
 * @method     LogCasesSchedulerQuery orderByWsRouteCaseStatus($order = Criteria::ASC) Order by the WS_ROUTE_CASE_STATUS column
 *
 * @method     LogCasesSchedulerQuery groupByLogCaseUid() Group by the LOG_CASE_UID column
 * @method     LogCasesSchedulerQuery groupByProUid() Group by the PRO_UID column
 * @method     LogCasesSchedulerQuery groupByTasUid() Group by the TAS_UID column
 * @method     LogCasesSchedulerQuery groupByUsrName() Group by the USR_NAME column
 * @method     LogCasesSchedulerQuery groupByExecDate() Group by the EXEC_DATE column
 * @method     LogCasesSchedulerQuery groupByExecHour() Group by the EXEC_HOUR column
 * @method     LogCasesSchedulerQuery groupByResult() Group by the RESULT column
 * @method     LogCasesSchedulerQuery groupBySchUid() Group by the SCH_UID column
 * @method     LogCasesSchedulerQuery groupByWsCreateCaseStatus() Group by the WS_CREATE_CASE_STATUS column
 * @method     LogCasesSchedulerQuery groupByWsRouteCaseStatus() Group by the WS_ROUTE_CASE_STATUS column
 *
 * @method     LogCasesSchedulerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LogCasesSchedulerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LogCasesSchedulerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LogCasesScheduler findOne(PropelPDO $con = null) Return the first LogCasesScheduler matching the query
 * @method     LogCasesScheduler findOneOrCreate(PropelPDO $con = null) Return the first LogCasesScheduler matching the query, or a new LogCasesScheduler object populated from the query conditions when no match is found
 *
 * @method     LogCasesScheduler findOneByLogCaseUid(string $LOG_CASE_UID) Return the first LogCasesScheduler filtered by the LOG_CASE_UID column
 * @method     LogCasesScheduler findOneByProUid(string $PRO_UID) Return the first LogCasesScheduler filtered by the PRO_UID column
 * @method     LogCasesScheduler findOneByTasUid(string $TAS_UID) Return the first LogCasesScheduler filtered by the TAS_UID column
 * @method     LogCasesScheduler findOneByUsrName(string $USR_NAME) Return the first LogCasesScheduler filtered by the USR_NAME column
 * @method     LogCasesScheduler findOneByExecDate(string $EXEC_DATE) Return the first LogCasesScheduler filtered by the EXEC_DATE column
 * @method     LogCasesScheduler findOneByExecHour(string $EXEC_HOUR) Return the first LogCasesScheduler filtered by the EXEC_HOUR column
 * @method     LogCasesScheduler findOneByResult(string $RESULT) Return the first LogCasesScheduler filtered by the RESULT column
 * @method     LogCasesScheduler findOneBySchUid(string $SCH_UID) Return the first LogCasesScheduler filtered by the SCH_UID column
 * @method     LogCasesScheduler findOneByWsCreateCaseStatus(string $WS_CREATE_CASE_STATUS) Return the first LogCasesScheduler filtered by the WS_CREATE_CASE_STATUS column
 * @method     LogCasesScheduler findOneByWsRouteCaseStatus(string $WS_ROUTE_CASE_STATUS) Return the first LogCasesScheduler filtered by the WS_ROUTE_CASE_STATUS column
 *
 * @method     array findByLogCaseUid(string $LOG_CASE_UID) Return LogCasesScheduler objects filtered by the LOG_CASE_UID column
 * @method     array findByProUid(string $PRO_UID) Return LogCasesScheduler objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return LogCasesScheduler objects filtered by the TAS_UID column
 * @method     array findByUsrName(string $USR_NAME) Return LogCasesScheduler objects filtered by the USR_NAME column
 * @method     array findByExecDate(string $EXEC_DATE) Return LogCasesScheduler objects filtered by the EXEC_DATE column
 * @method     array findByExecHour(string $EXEC_HOUR) Return LogCasesScheduler objects filtered by the EXEC_HOUR column
 * @method     array findByResult(string $RESULT) Return LogCasesScheduler objects filtered by the RESULT column
 * @method     array findBySchUid(string $SCH_UID) Return LogCasesScheduler objects filtered by the SCH_UID column
 * @method     array findByWsCreateCaseStatus(string $WS_CREATE_CASE_STATUS) Return LogCasesScheduler objects filtered by the WS_CREATE_CASE_STATUS column
 * @method     array findByWsRouteCaseStatus(string $WS_ROUTE_CASE_STATUS) Return LogCasesScheduler objects filtered by the WS_ROUTE_CASE_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseLogCasesSchedulerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLogCasesSchedulerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'LogCasesScheduler', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LogCasesSchedulerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    LogCasesSchedulerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LogCasesSchedulerQuery) {
            return $criteria;
        }
        $query = new LogCasesSchedulerQuery();
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
     * @return    LogCasesScheduler|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = LogCasesSchedulerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(LogCasesSchedulerPeer::LOG_CASE_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(LogCasesSchedulerPeer::LOG_CASE_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LOG_CASE_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByLogCaseUid('fooValue');   // WHERE LOG_CASE_UID = 'fooValue'
     * $query->filterByLogCaseUid('%fooValue%'); // WHERE LOG_CASE_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logCaseUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByLogCaseUid($logCaseUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logCaseUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logCaseUid)) {
                $logCaseUid = str_replace('*', '%', $logCaseUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::LOG_CASE_UID, $logCaseUid, $comparison);
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
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(LogCasesSchedulerPeer::PRO_UID, $proUid, $comparison);
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
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(LogCasesSchedulerPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the USR_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrName('fooValue');   // WHERE USR_NAME = 'fooValue'
     * $query->filterByUsrName('%fooValue%'); // WHERE USR_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByUsrName($usrName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrName)) {
                $usrName = str_replace('*', '%', $usrName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::USR_NAME, $usrName, $comparison);
    }

    /**
     * Filter the query on the EXEC_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByExecDate('2011-03-14'); // WHERE EXEC_DATE = '2011-03-14'
     * $query->filterByExecDate('now'); // WHERE EXEC_DATE = '2011-03-14'
     * $query->filterByExecDate(array('max' => 'yesterday')); // WHERE EXEC_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $execDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByExecDate($execDate = null, $comparison = null)
    {
        if (is_array($execDate)) {
            $useMinMax = false;
            if (isset($execDate['min'])) {
                $this->addUsingAlias(LogCasesSchedulerPeer::EXEC_DATE, $execDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($execDate['max'])) {
                $this->addUsingAlias(LogCasesSchedulerPeer::EXEC_DATE, $execDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::EXEC_DATE, $execDate, $comparison);
    }

    /**
     * Filter the query on the EXEC_HOUR column
     *
     * Example usage:
     * <code>
     * $query->filterByExecHour('fooValue');   // WHERE EXEC_HOUR = 'fooValue'
     * $query->filterByExecHour('%fooValue%'); // WHERE EXEC_HOUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $execHour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByExecHour($execHour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($execHour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $execHour)) {
                $execHour = str_replace('*', '%', $execHour);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::EXEC_HOUR, $execHour, $comparison);
    }

    /**
     * Filter the query on the RESULT column
     *
     * Example usage:
     * <code>
     * $query->filterByResult('fooValue');   // WHERE RESULT = 'fooValue'
     * $query->filterByResult('%fooValue%'); // WHERE RESULT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $result The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByResult($result = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($result)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $result)) {
                $result = str_replace('*', '%', $result);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::RESULT, $result, $comparison);
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
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(LogCasesSchedulerPeer::SCH_UID, $schUid, $comparison);
    }

    /**
     * Filter the query on the WS_CREATE_CASE_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByWsCreateCaseStatus('fooValue');   // WHERE WS_CREATE_CASE_STATUS = 'fooValue'
     * $query->filterByWsCreateCaseStatus('%fooValue%'); // WHERE WS_CREATE_CASE_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wsCreateCaseStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByWsCreateCaseStatus($wsCreateCaseStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wsCreateCaseStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wsCreateCaseStatus)) {
                $wsCreateCaseStatus = str_replace('*', '%', $wsCreateCaseStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::WS_CREATE_CASE_STATUS, $wsCreateCaseStatus, $comparison);
    }

    /**
     * Filter the query on the WS_ROUTE_CASE_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByWsRouteCaseStatus('fooValue');   // WHERE WS_ROUTE_CASE_STATUS = 'fooValue'
     * $query->filterByWsRouteCaseStatus('%fooValue%'); // WHERE WS_ROUTE_CASE_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wsRouteCaseStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function filterByWsRouteCaseStatus($wsRouteCaseStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wsRouteCaseStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wsRouteCaseStatus)) {
                $wsRouteCaseStatus = str_replace('*', '%', $wsRouteCaseStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LogCasesSchedulerPeer::WS_ROUTE_CASE_STATUS, $wsRouteCaseStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     LogCasesScheduler $logCasesScheduler Object to remove from the list of results
     *
     * @return    LogCasesSchedulerQuery The current query, for fluid interface
     */
    public function prune($logCasesScheduler = null)
    {
        if ($logCasesScheduler) {
            $this->addUsingAlias(LogCasesSchedulerPeer::LOG_CASE_UID, $logCasesScheduler->getLogCaseUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseLogCasesSchedulerQuery