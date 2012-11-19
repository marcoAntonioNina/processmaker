<?php


/**
 * Base class that represents a query for the 'APP_DELEGATION' table.
 *
 * 
 *
 * @method     AppDelegationQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppDelegationQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 * @method     AppDelegationQuery orderByDelPrevious($order = Criteria::ASC) Order by the DEL_PREVIOUS column
 * @method     AppDelegationQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     AppDelegationQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     AppDelegationQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     AppDelegationQuery orderByDelType($order = Criteria::ASC) Order by the DEL_TYPE column
 * @method     AppDelegationQuery orderByDelThread($order = Criteria::ASC) Order by the DEL_THREAD column
 * @method     AppDelegationQuery orderByDelThreadStatus($order = Criteria::ASC) Order by the DEL_THREAD_STATUS column
 * @method     AppDelegationQuery orderByDelPriority($order = Criteria::ASC) Order by the DEL_PRIORITY column
 * @method     AppDelegationQuery orderByDelDelegateDate($order = Criteria::ASC) Order by the DEL_DELEGATE_DATE column
 * @method     AppDelegationQuery orderByDelInitDate($order = Criteria::ASC) Order by the DEL_INIT_DATE column
 * @method     AppDelegationQuery orderByDelTaskDueDate($order = Criteria::ASC) Order by the DEL_TASK_DUE_DATE column
 * @method     AppDelegationQuery orderByDelFinishDate($order = Criteria::ASC) Order by the DEL_FINISH_DATE column
 * @method     AppDelegationQuery orderByDelDuration($order = Criteria::ASC) Order by the DEL_DURATION column
 * @method     AppDelegationQuery orderByDelQueueDuration($order = Criteria::ASC) Order by the DEL_QUEUE_DURATION column
 * @method     AppDelegationQuery orderByDelDelayDuration($order = Criteria::ASC) Order by the DEL_DELAY_DURATION column
 * @method     AppDelegationQuery orderByDelStarted($order = Criteria::ASC) Order by the DEL_STARTED column
 * @method     AppDelegationQuery orderByDelFinished($order = Criteria::ASC) Order by the DEL_FINISHED column
 * @method     AppDelegationQuery orderByDelDelayed($order = Criteria::ASC) Order by the DEL_DELAYED column
 * @method     AppDelegationQuery orderByDelData($order = Criteria::ASC) Order by the DEL_DATA column
 * @method     AppDelegationQuery orderByAppOverduePercentage($order = Criteria::ASC) Order by the APP_OVERDUE_PERCENTAGE column
 *
 * @method     AppDelegationQuery groupByAppUid() Group by the APP_UID column
 * @method     AppDelegationQuery groupByDelIndex() Group by the DEL_INDEX column
 * @method     AppDelegationQuery groupByDelPrevious() Group by the DEL_PREVIOUS column
 * @method     AppDelegationQuery groupByProUid() Group by the PRO_UID column
 * @method     AppDelegationQuery groupByTasUid() Group by the TAS_UID column
 * @method     AppDelegationQuery groupByUsrUid() Group by the USR_UID column
 * @method     AppDelegationQuery groupByDelType() Group by the DEL_TYPE column
 * @method     AppDelegationQuery groupByDelThread() Group by the DEL_THREAD column
 * @method     AppDelegationQuery groupByDelThreadStatus() Group by the DEL_THREAD_STATUS column
 * @method     AppDelegationQuery groupByDelPriority() Group by the DEL_PRIORITY column
 * @method     AppDelegationQuery groupByDelDelegateDate() Group by the DEL_DELEGATE_DATE column
 * @method     AppDelegationQuery groupByDelInitDate() Group by the DEL_INIT_DATE column
 * @method     AppDelegationQuery groupByDelTaskDueDate() Group by the DEL_TASK_DUE_DATE column
 * @method     AppDelegationQuery groupByDelFinishDate() Group by the DEL_FINISH_DATE column
 * @method     AppDelegationQuery groupByDelDuration() Group by the DEL_DURATION column
 * @method     AppDelegationQuery groupByDelQueueDuration() Group by the DEL_QUEUE_DURATION column
 * @method     AppDelegationQuery groupByDelDelayDuration() Group by the DEL_DELAY_DURATION column
 * @method     AppDelegationQuery groupByDelStarted() Group by the DEL_STARTED column
 * @method     AppDelegationQuery groupByDelFinished() Group by the DEL_FINISHED column
 * @method     AppDelegationQuery groupByDelDelayed() Group by the DEL_DELAYED column
 * @method     AppDelegationQuery groupByDelData() Group by the DEL_DATA column
 * @method     AppDelegationQuery groupByAppOverduePercentage() Group by the APP_OVERDUE_PERCENTAGE column
 *
 * @method     AppDelegationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppDelegationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppDelegationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppDelegation findOne(PropelPDO $con = null) Return the first AppDelegation matching the query
 * @method     AppDelegation findOneOrCreate(PropelPDO $con = null) Return the first AppDelegation matching the query, or a new AppDelegation object populated from the query conditions when no match is found
 *
 * @method     AppDelegation findOneByAppUid(string $APP_UID) Return the first AppDelegation filtered by the APP_UID column
 * @method     AppDelegation findOneByDelIndex(int $DEL_INDEX) Return the first AppDelegation filtered by the DEL_INDEX column
 * @method     AppDelegation findOneByDelPrevious(int $DEL_PREVIOUS) Return the first AppDelegation filtered by the DEL_PREVIOUS column
 * @method     AppDelegation findOneByProUid(string $PRO_UID) Return the first AppDelegation filtered by the PRO_UID column
 * @method     AppDelegation findOneByTasUid(string $TAS_UID) Return the first AppDelegation filtered by the TAS_UID column
 * @method     AppDelegation findOneByUsrUid(string $USR_UID) Return the first AppDelegation filtered by the USR_UID column
 * @method     AppDelegation findOneByDelType(string $DEL_TYPE) Return the first AppDelegation filtered by the DEL_TYPE column
 * @method     AppDelegation findOneByDelThread(int $DEL_THREAD) Return the first AppDelegation filtered by the DEL_THREAD column
 * @method     AppDelegation findOneByDelThreadStatus(string $DEL_THREAD_STATUS) Return the first AppDelegation filtered by the DEL_THREAD_STATUS column
 * @method     AppDelegation findOneByDelPriority(string $DEL_PRIORITY) Return the first AppDelegation filtered by the DEL_PRIORITY column
 * @method     AppDelegation findOneByDelDelegateDate(string $DEL_DELEGATE_DATE) Return the first AppDelegation filtered by the DEL_DELEGATE_DATE column
 * @method     AppDelegation findOneByDelInitDate(string $DEL_INIT_DATE) Return the first AppDelegation filtered by the DEL_INIT_DATE column
 * @method     AppDelegation findOneByDelTaskDueDate(string $DEL_TASK_DUE_DATE) Return the first AppDelegation filtered by the DEL_TASK_DUE_DATE column
 * @method     AppDelegation findOneByDelFinishDate(string $DEL_FINISH_DATE) Return the first AppDelegation filtered by the DEL_FINISH_DATE column
 * @method     AppDelegation findOneByDelDuration(double $DEL_DURATION) Return the first AppDelegation filtered by the DEL_DURATION column
 * @method     AppDelegation findOneByDelQueueDuration(double $DEL_QUEUE_DURATION) Return the first AppDelegation filtered by the DEL_QUEUE_DURATION column
 * @method     AppDelegation findOneByDelDelayDuration(double $DEL_DELAY_DURATION) Return the first AppDelegation filtered by the DEL_DELAY_DURATION column
 * @method     AppDelegation findOneByDelStarted(int $DEL_STARTED) Return the first AppDelegation filtered by the DEL_STARTED column
 * @method     AppDelegation findOneByDelFinished(int $DEL_FINISHED) Return the first AppDelegation filtered by the DEL_FINISHED column
 * @method     AppDelegation findOneByDelDelayed(int $DEL_DELAYED) Return the first AppDelegation filtered by the DEL_DELAYED column
 * @method     AppDelegation findOneByDelData(string $DEL_DATA) Return the first AppDelegation filtered by the DEL_DATA column
 * @method     AppDelegation findOneByAppOverduePercentage(double $APP_OVERDUE_PERCENTAGE) Return the first AppDelegation filtered by the APP_OVERDUE_PERCENTAGE column
 *
 * @method     array findByAppUid(string $APP_UID) Return AppDelegation objects filtered by the APP_UID column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppDelegation objects filtered by the DEL_INDEX column
 * @method     array findByDelPrevious(int $DEL_PREVIOUS) Return AppDelegation objects filtered by the DEL_PREVIOUS column
 * @method     array findByProUid(string $PRO_UID) Return AppDelegation objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return AppDelegation objects filtered by the TAS_UID column
 * @method     array findByUsrUid(string $USR_UID) Return AppDelegation objects filtered by the USR_UID column
 * @method     array findByDelType(string $DEL_TYPE) Return AppDelegation objects filtered by the DEL_TYPE column
 * @method     array findByDelThread(int $DEL_THREAD) Return AppDelegation objects filtered by the DEL_THREAD column
 * @method     array findByDelThreadStatus(string $DEL_THREAD_STATUS) Return AppDelegation objects filtered by the DEL_THREAD_STATUS column
 * @method     array findByDelPriority(string $DEL_PRIORITY) Return AppDelegation objects filtered by the DEL_PRIORITY column
 * @method     array findByDelDelegateDate(string $DEL_DELEGATE_DATE) Return AppDelegation objects filtered by the DEL_DELEGATE_DATE column
 * @method     array findByDelInitDate(string $DEL_INIT_DATE) Return AppDelegation objects filtered by the DEL_INIT_DATE column
 * @method     array findByDelTaskDueDate(string $DEL_TASK_DUE_DATE) Return AppDelegation objects filtered by the DEL_TASK_DUE_DATE column
 * @method     array findByDelFinishDate(string $DEL_FINISH_DATE) Return AppDelegation objects filtered by the DEL_FINISH_DATE column
 * @method     array findByDelDuration(double $DEL_DURATION) Return AppDelegation objects filtered by the DEL_DURATION column
 * @method     array findByDelQueueDuration(double $DEL_QUEUE_DURATION) Return AppDelegation objects filtered by the DEL_QUEUE_DURATION column
 * @method     array findByDelDelayDuration(double $DEL_DELAY_DURATION) Return AppDelegation objects filtered by the DEL_DELAY_DURATION column
 * @method     array findByDelStarted(int $DEL_STARTED) Return AppDelegation objects filtered by the DEL_STARTED column
 * @method     array findByDelFinished(int $DEL_FINISHED) Return AppDelegation objects filtered by the DEL_FINISHED column
 * @method     array findByDelDelayed(int $DEL_DELAYED) Return AppDelegation objects filtered by the DEL_DELAYED column
 * @method     array findByDelData(string $DEL_DATA) Return AppDelegation objects filtered by the DEL_DATA column
 * @method     array findByAppOverduePercentage(double $APP_OVERDUE_PERCENTAGE) Return AppDelegation objects filtered by the APP_OVERDUE_PERCENTAGE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDelegationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppDelegationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppDelegation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppDelegationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppDelegationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppDelegationQuery) {
            return $criteria;
        }
        $query = new AppDelegationQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$APP_UID, $DEL_INDEX] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    AppDelegation|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppDelegationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AppDelegationPeer::APP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AppDelegationPeer::DEL_INDEX, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AppDelegationPeer::APP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AppDelegationPeer::DEL_INDEX, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the APP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUid('fooValue');   // WHERE APP_UID = 'fooValue'
     * $query->filterByAppUid('%fooValue%'); // WHERE APP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByAppUid($appUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appUid)) {
                $appUid = str_replace('*', '%', $appUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the DEL_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByDelIndex(1234); // WHERE DEL_INDEX = 1234
     * $query->filterByDelIndex(array(12, 34)); // WHERE DEL_INDEX IN (12, 34)
     * $query->filterByDelIndex(array('min' => 12)); // WHERE DEL_INDEX > 12
     * </code>
     *
     * @param     mixed $delIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_INDEX, $delIndex, $comparison);
    }

    /**
     * Filter the query on the DEL_PREVIOUS column
     *
     * Example usage:
     * <code>
     * $query->filterByDelPrevious(1234); // WHERE DEL_PREVIOUS = 1234
     * $query->filterByDelPrevious(array(12, 34)); // WHERE DEL_PREVIOUS IN (12, 34)
     * $query->filterByDelPrevious(array('min' => 12)); // WHERE DEL_PREVIOUS > 12
     * </code>
     *
     * @param     mixed $delPrevious The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelPrevious($delPrevious = null, $comparison = null)
    {
        if (is_array($delPrevious)) {
            $useMinMax = false;
            if (isset($delPrevious['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_PREVIOUS, $delPrevious['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delPrevious['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_PREVIOUS, $delPrevious['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_PREVIOUS, $delPrevious, $comparison);
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
     * @return    AppDelegationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDelegationPeer::PRO_UID, $proUid, $comparison);
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
     * @return    AppDelegationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDelegationPeer::TAS_UID, $tasUid, $comparison);
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
     * @return    AppDelegationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDelegationPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the DEL_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelType('fooValue');   // WHERE DEL_TYPE = 'fooValue'
     * $query->filterByDelType('%fooValue%'); // WHERE DEL_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelType($delType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delType)) {
                $delType = str_replace('*', '%', $delType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_TYPE, $delType, $comparison);
    }

    /**
     * Filter the query on the DEL_THREAD column
     *
     * Example usage:
     * <code>
     * $query->filterByDelThread(1234); // WHERE DEL_THREAD = 1234
     * $query->filterByDelThread(array(12, 34)); // WHERE DEL_THREAD IN (12, 34)
     * $query->filterByDelThread(array('min' => 12)); // WHERE DEL_THREAD > 12
     * </code>
     *
     * @param     mixed $delThread The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelThread($delThread = null, $comparison = null)
    {
        if (is_array($delThread)) {
            $useMinMax = false;
            if (isset($delThread['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_THREAD, $delThread['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delThread['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_THREAD, $delThread['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_THREAD, $delThread, $comparison);
    }

    /**
     * Filter the query on the DEL_THREAD_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByDelThreadStatus('fooValue');   // WHERE DEL_THREAD_STATUS = 'fooValue'
     * $query->filterByDelThreadStatus('%fooValue%'); // WHERE DEL_THREAD_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delThreadStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelThreadStatus($delThreadStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delThreadStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delThreadStatus)) {
                $delThreadStatus = str_replace('*', '%', $delThreadStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_THREAD_STATUS, $delThreadStatus, $comparison);
    }

    /**
     * Filter the query on the DEL_PRIORITY column
     *
     * Example usage:
     * <code>
     * $query->filterByDelPriority('fooValue');   // WHERE DEL_PRIORITY = 'fooValue'
     * $query->filterByDelPriority('%fooValue%'); // WHERE DEL_PRIORITY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delPriority The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelPriority($delPriority = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delPriority)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delPriority)) {
                $delPriority = str_replace('*', '%', $delPriority);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_PRIORITY, $delPriority, $comparison);
    }

    /**
     * Filter the query on the DEL_DELEGATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDelegateDate('2011-03-14'); // WHERE DEL_DELEGATE_DATE = '2011-03-14'
     * $query->filterByDelDelegateDate('now'); // WHERE DEL_DELEGATE_DATE = '2011-03-14'
     * $query->filterByDelDelegateDate(array('max' => 'yesterday')); // WHERE DEL_DELEGATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delDelegateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelDelegateDate($delDelegateDate = null, $comparison = null)
    {
        if (is_array($delDelegateDate)) {
            $useMinMax = false;
            if (isset($delDelegateDate['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DELEGATE_DATE, $delDelegateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDelegateDate['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DELEGATE_DATE, $delDelegateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_DELEGATE_DATE, $delDelegateDate, $comparison);
    }

    /**
     * Filter the query on the DEL_INIT_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelInitDate('2011-03-14'); // WHERE DEL_INIT_DATE = '2011-03-14'
     * $query->filterByDelInitDate('now'); // WHERE DEL_INIT_DATE = '2011-03-14'
     * $query->filterByDelInitDate(array('max' => 'yesterday')); // WHERE DEL_INIT_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delInitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelInitDate($delInitDate = null, $comparison = null)
    {
        if (is_array($delInitDate)) {
            $useMinMax = false;
            if (isset($delInitDate['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_INIT_DATE, $delInitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delInitDate['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_INIT_DATE, $delInitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_INIT_DATE, $delInitDate, $comparison);
    }

    /**
     * Filter the query on the DEL_TASK_DUE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelTaskDueDate('2011-03-14'); // WHERE DEL_TASK_DUE_DATE = '2011-03-14'
     * $query->filterByDelTaskDueDate('now'); // WHERE DEL_TASK_DUE_DATE = '2011-03-14'
     * $query->filterByDelTaskDueDate(array('max' => 'yesterday')); // WHERE DEL_TASK_DUE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delTaskDueDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelTaskDueDate($delTaskDueDate = null, $comparison = null)
    {
        if (is_array($delTaskDueDate)) {
            $useMinMax = false;
            if (isset($delTaskDueDate['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_TASK_DUE_DATE, $delTaskDueDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delTaskDueDate['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_TASK_DUE_DATE, $delTaskDueDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_TASK_DUE_DATE, $delTaskDueDate, $comparison);
    }

    /**
     * Filter the query on the DEL_FINISH_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelFinishDate('2011-03-14'); // WHERE DEL_FINISH_DATE = '2011-03-14'
     * $query->filterByDelFinishDate('now'); // WHERE DEL_FINISH_DATE = '2011-03-14'
     * $query->filterByDelFinishDate(array('max' => 'yesterday')); // WHERE DEL_FINISH_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delFinishDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelFinishDate($delFinishDate = null, $comparison = null)
    {
        if (is_array($delFinishDate)) {
            $useMinMax = false;
            if (isset($delFinishDate['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_FINISH_DATE, $delFinishDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delFinishDate['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_FINISH_DATE, $delFinishDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_FINISH_DATE, $delFinishDate, $comparison);
    }

    /**
     * Filter the query on the DEL_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDuration(1234); // WHERE DEL_DURATION = 1234
     * $query->filterByDelDuration(array(12, 34)); // WHERE DEL_DURATION IN (12, 34)
     * $query->filterByDelDuration(array('min' => 12)); // WHERE DEL_DURATION > 12
     * </code>
     *
     * @param     mixed $delDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelDuration($delDuration = null, $comparison = null)
    {
        if (is_array($delDuration)) {
            $useMinMax = false;
            if (isset($delDuration['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DURATION, $delDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDuration['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DURATION, $delDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_DURATION, $delDuration, $comparison);
    }

    /**
     * Filter the query on the DEL_QUEUE_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDelQueueDuration(1234); // WHERE DEL_QUEUE_DURATION = 1234
     * $query->filterByDelQueueDuration(array(12, 34)); // WHERE DEL_QUEUE_DURATION IN (12, 34)
     * $query->filterByDelQueueDuration(array('min' => 12)); // WHERE DEL_QUEUE_DURATION > 12
     * </code>
     *
     * @param     mixed $delQueueDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelQueueDuration($delQueueDuration = null, $comparison = null)
    {
        if (is_array($delQueueDuration)) {
            $useMinMax = false;
            if (isset($delQueueDuration['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_QUEUE_DURATION, $delQueueDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delQueueDuration['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_QUEUE_DURATION, $delQueueDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_QUEUE_DURATION, $delQueueDuration, $comparison);
    }

    /**
     * Filter the query on the DEL_DELAY_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDelayDuration(1234); // WHERE DEL_DELAY_DURATION = 1234
     * $query->filterByDelDelayDuration(array(12, 34)); // WHERE DEL_DELAY_DURATION IN (12, 34)
     * $query->filterByDelDelayDuration(array('min' => 12)); // WHERE DEL_DELAY_DURATION > 12
     * </code>
     *
     * @param     mixed $delDelayDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelDelayDuration($delDelayDuration = null, $comparison = null)
    {
        if (is_array($delDelayDuration)) {
            $useMinMax = false;
            if (isset($delDelayDuration['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DELAY_DURATION, $delDelayDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDelayDuration['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DELAY_DURATION, $delDelayDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_DELAY_DURATION, $delDelayDuration, $comparison);
    }

    /**
     * Filter the query on the DEL_STARTED column
     *
     * Example usage:
     * <code>
     * $query->filterByDelStarted(1234); // WHERE DEL_STARTED = 1234
     * $query->filterByDelStarted(array(12, 34)); // WHERE DEL_STARTED IN (12, 34)
     * $query->filterByDelStarted(array('min' => 12)); // WHERE DEL_STARTED > 12
     * </code>
     *
     * @param     mixed $delStarted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelStarted($delStarted = null, $comparison = null)
    {
        if (is_array($delStarted)) {
            $useMinMax = false;
            if (isset($delStarted['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_STARTED, $delStarted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delStarted['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_STARTED, $delStarted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_STARTED, $delStarted, $comparison);
    }

    /**
     * Filter the query on the DEL_FINISHED column
     *
     * Example usage:
     * <code>
     * $query->filterByDelFinished(1234); // WHERE DEL_FINISHED = 1234
     * $query->filterByDelFinished(array(12, 34)); // WHERE DEL_FINISHED IN (12, 34)
     * $query->filterByDelFinished(array('min' => 12)); // WHERE DEL_FINISHED > 12
     * </code>
     *
     * @param     mixed $delFinished The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelFinished($delFinished = null, $comparison = null)
    {
        if (is_array($delFinished)) {
            $useMinMax = false;
            if (isset($delFinished['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_FINISHED, $delFinished['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delFinished['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_FINISHED, $delFinished['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_FINISHED, $delFinished, $comparison);
    }

    /**
     * Filter the query on the DEL_DELAYED column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDelayed(1234); // WHERE DEL_DELAYED = 1234
     * $query->filterByDelDelayed(array(12, 34)); // WHERE DEL_DELAYED IN (12, 34)
     * $query->filterByDelDelayed(array('min' => 12)); // WHERE DEL_DELAYED > 12
     * </code>
     *
     * @param     mixed $delDelayed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelDelayed($delDelayed = null, $comparison = null)
    {
        if (is_array($delDelayed)) {
            $useMinMax = false;
            if (isset($delDelayed['min'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DELAYED, $delDelayed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDelayed['max'])) {
                $this->addUsingAlias(AppDelegationPeer::DEL_DELAYED, $delDelayed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_DELAYED, $delDelayed, $comparison);
    }

    /**
     * Filter the query on the DEL_DATA column
     *
     * Example usage:
     * <code>
     * $query->filterByDelData('fooValue');   // WHERE DEL_DATA = 'fooValue'
     * $query->filterByDelData('%fooValue%'); // WHERE DEL_DATA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByDelData($delData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delData)) {
                $delData = str_replace('*', '%', $delData);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::DEL_DATA, $delData, $comparison);
    }

    /**
     * Filter the query on the APP_OVERDUE_PERCENTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppOverduePercentage(1234); // WHERE APP_OVERDUE_PERCENTAGE = 1234
     * $query->filterByAppOverduePercentage(array(12, 34)); // WHERE APP_OVERDUE_PERCENTAGE IN (12, 34)
     * $query->filterByAppOverduePercentage(array('min' => 12)); // WHERE APP_OVERDUE_PERCENTAGE > 12
     * </code>
     *
     * @param     mixed $appOverduePercentage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function filterByAppOverduePercentage($appOverduePercentage = null, $comparison = null)
    {
        if (is_array($appOverduePercentage)) {
            $useMinMax = false;
            if (isset($appOverduePercentage['min'])) {
                $this->addUsingAlias(AppDelegationPeer::APP_OVERDUE_PERCENTAGE, $appOverduePercentage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appOverduePercentage['max'])) {
                $this->addUsingAlias(AppDelegationPeer::APP_OVERDUE_PERCENTAGE, $appOverduePercentage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelegationPeer::APP_OVERDUE_PERCENTAGE, $appOverduePercentage, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppDelegation $appDelegation Object to remove from the list of results
     *
     * @return    AppDelegationQuery The current query, for fluid interface
     */
    public function prune($appDelegation = null)
    {
        if ($appDelegation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AppDelegationPeer::APP_UID), $appDelegation->getAppUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AppDelegationPeer::DEL_INDEX), $appDelegation->getDelIndex(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseAppDelegationQuery