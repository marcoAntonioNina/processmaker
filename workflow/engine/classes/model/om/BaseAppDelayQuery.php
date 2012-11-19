<?php


/**
 * Base class that represents a query for the 'APP_DELAY' table.
 *
 * 
 *
 * @method     AppDelayQuery orderByAppDelayUid($order = Criteria::ASC) Order by the APP_DELAY_UID column
 * @method     AppDelayQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     AppDelayQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppDelayQuery orderByAppThreadIndex($order = Criteria::ASC) Order by the APP_THREAD_INDEX column
 * @method     AppDelayQuery orderByAppDelIndex($order = Criteria::ASC) Order by the APP_DEL_INDEX column
 * @method     AppDelayQuery orderByAppType($order = Criteria::ASC) Order by the APP_TYPE column
 * @method     AppDelayQuery orderByAppStatus($order = Criteria::ASC) Order by the APP_STATUS column
 * @method     AppDelayQuery orderByAppNextTask($order = Criteria::ASC) Order by the APP_NEXT_TASK column
 * @method     AppDelayQuery orderByAppDelegationUser($order = Criteria::ASC) Order by the APP_DELEGATION_USER column
 * @method     AppDelayQuery orderByAppEnableActionUser($order = Criteria::ASC) Order by the APP_ENABLE_ACTION_USER column
 * @method     AppDelayQuery orderByAppEnableActionDate($order = Criteria::ASC) Order by the APP_ENABLE_ACTION_DATE column
 * @method     AppDelayQuery orderByAppDisableActionUser($order = Criteria::ASC) Order by the APP_DISABLE_ACTION_USER column
 * @method     AppDelayQuery orderByAppDisableActionDate($order = Criteria::ASC) Order by the APP_DISABLE_ACTION_DATE column
 * @method     AppDelayQuery orderByAppAutomaticDisabledDate($order = Criteria::ASC) Order by the APP_AUTOMATIC_DISABLED_DATE column
 *
 * @method     AppDelayQuery groupByAppDelayUid() Group by the APP_DELAY_UID column
 * @method     AppDelayQuery groupByProUid() Group by the PRO_UID column
 * @method     AppDelayQuery groupByAppUid() Group by the APP_UID column
 * @method     AppDelayQuery groupByAppThreadIndex() Group by the APP_THREAD_INDEX column
 * @method     AppDelayQuery groupByAppDelIndex() Group by the APP_DEL_INDEX column
 * @method     AppDelayQuery groupByAppType() Group by the APP_TYPE column
 * @method     AppDelayQuery groupByAppStatus() Group by the APP_STATUS column
 * @method     AppDelayQuery groupByAppNextTask() Group by the APP_NEXT_TASK column
 * @method     AppDelayQuery groupByAppDelegationUser() Group by the APP_DELEGATION_USER column
 * @method     AppDelayQuery groupByAppEnableActionUser() Group by the APP_ENABLE_ACTION_USER column
 * @method     AppDelayQuery groupByAppEnableActionDate() Group by the APP_ENABLE_ACTION_DATE column
 * @method     AppDelayQuery groupByAppDisableActionUser() Group by the APP_DISABLE_ACTION_USER column
 * @method     AppDelayQuery groupByAppDisableActionDate() Group by the APP_DISABLE_ACTION_DATE column
 * @method     AppDelayQuery groupByAppAutomaticDisabledDate() Group by the APP_AUTOMATIC_DISABLED_DATE column
 *
 * @method     AppDelayQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppDelayQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppDelayQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppDelay findOne(PropelPDO $con = null) Return the first AppDelay matching the query
 * @method     AppDelay findOneOrCreate(PropelPDO $con = null) Return the first AppDelay matching the query, or a new AppDelay object populated from the query conditions when no match is found
 *
 * @method     AppDelay findOneByAppDelayUid(string $APP_DELAY_UID) Return the first AppDelay filtered by the APP_DELAY_UID column
 * @method     AppDelay findOneByProUid(string $PRO_UID) Return the first AppDelay filtered by the PRO_UID column
 * @method     AppDelay findOneByAppUid(string $APP_UID) Return the first AppDelay filtered by the APP_UID column
 * @method     AppDelay findOneByAppThreadIndex(int $APP_THREAD_INDEX) Return the first AppDelay filtered by the APP_THREAD_INDEX column
 * @method     AppDelay findOneByAppDelIndex(int $APP_DEL_INDEX) Return the first AppDelay filtered by the APP_DEL_INDEX column
 * @method     AppDelay findOneByAppType(string $APP_TYPE) Return the first AppDelay filtered by the APP_TYPE column
 * @method     AppDelay findOneByAppStatus(string $APP_STATUS) Return the first AppDelay filtered by the APP_STATUS column
 * @method     AppDelay findOneByAppNextTask(string $APP_NEXT_TASK) Return the first AppDelay filtered by the APP_NEXT_TASK column
 * @method     AppDelay findOneByAppDelegationUser(string $APP_DELEGATION_USER) Return the first AppDelay filtered by the APP_DELEGATION_USER column
 * @method     AppDelay findOneByAppEnableActionUser(string $APP_ENABLE_ACTION_USER) Return the first AppDelay filtered by the APP_ENABLE_ACTION_USER column
 * @method     AppDelay findOneByAppEnableActionDate(string $APP_ENABLE_ACTION_DATE) Return the first AppDelay filtered by the APP_ENABLE_ACTION_DATE column
 * @method     AppDelay findOneByAppDisableActionUser(string $APP_DISABLE_ACTION_USER) Return the first AppDelay filtered by the APP_DISABLE_ACTION_USER column
 * @method     AppDelay findOneByAppDisableActionDate(string $APP_DISABLE_ACTION_DATE) Return the first AppDelay filtered by the APP_DISABLE_ACTION_DATE column
 * @method     AppDelay findOneByAppAutomaticDisabledDate(string $APP_AUTOMATIC_DISABLED_DATE) Return the first AppDelay filtered by the APP_AUTOMATIC_DISABLED_DATE column
 *
 * @method     array findByAppDelayUid(string $APP_DELAY_UID) Return AppDelay objects filtered by the APP_DELAY_UID column
 * @method     array findByProUid(string $PRO_UID) Return AppDelay objects filtered by the PRO_UID column
 * @method     array findByAppUid(string $APP_UID) Return AppDelay objects filtered by the APP_UID column
 * @method     array findByAppThreadIndex(int $APP_THREAD_INDEX) Return AppDelay objects filtered by the APP_THREAD_INDEX column
 * @method     array findByAppDelIndex(int $APP_DEL_INDEX) Return AppDelay objects filtered by the APP_DEL_INDEX column
 * @method     array findByAppType(string $APP_TYPE) Return AppDelay objects filtered by the APP_TYPE column
 * @method     array findByAppStatus(string $APP_STATUS) Return AppDelay objects filtered by the APP_STATUS column
 * @method     array findByAppNextTask(string $APP_NEXT_TASK) Return AppDelay objects filtered by the APP_NEXT_TASK column
 * @method     array findByAppDelegationUser(string $APP_DELEGATION_USER) Return AppDelay objects filtered by the APP_DELEGATION_USER column
 * @method     array findByAppEnableActionUser(string $APP_ENABLE_ACTION_USER) Return AppDelay objects filtered by the APP_ENABLE_ACTION_USER column
 * @method     array findByAppEnableActionDate(string $APP_ENABLE_ACTION_DATE) Return AppDelay objects filtered by the APP_ENABLE_ACTION_DATE column
 * @method     array findByAppDisableActionUser(string $APP_DISABLE_ACTION_USER) Return AppDelay objects filtered by the APP_DISABLE_ACTION_USER column
 * @method     array findByAppDisableActionDate(string $APP_DISABLE_ACTION_DATE) Return AppDelay objects filtered by the APP_DISABLE_ACTION_DATE column
 * @method     array findByAppAutomaticDisabledDate(string $APP_AUTOMATIC_DISABLED_DATE) Return AppDelay objects filtered by the APP_AUTOMATIC_DISABLED_DATE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDelayQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppDelayQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppDelay', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppDelayQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppDelayQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppDelayQuery) {
            return $criteria;
        }
        $query = new AppDelayQuery();
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
     * @return    AppDelay|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppDelayPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AppDelayPeer::APP_DELAY_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AppDelayPeer::APP_DELAY_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the APP_DELAY_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDelayUid('fooValue');   // WHERE APP_DELAY_UID = 'fooValue'
     * $query->filterByAppDelayUid('%fooValue%'); // WHERE APP_DELAY_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDelayUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppDelayUid($appDelayUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDelayUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDelayUid)) {
                $appDelayUid = str_replace('*', '%', $appDelayUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_DELAY_UID, $appDelayUid, $comparison);
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
     * @return    AppDelayQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDelayPeer::PRO_UID, $proUid, $comparison);
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
     * @return    AppDelayQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDelayPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the APP_THREAD_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByAppThreadIndex(1234); // WHERE APP_THREAD_INDEX = 1234
     * $query->filterByAppThreadIndex(array(12, 34)); // WHERE APP_THREAD_INDEX IN (12, 34)
     * $query->filterByAppThreadIndex(array('min' => 12)); // WHERE APP_THREAD_INDEX > 12
     * </code>
     *
     * @param     mixed $appThreadIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppThreadIndex($appThreadIndex = null, $comparison = null)
    {
        if (is_array($appThreadIndex)) {
            $useMinMax = false;
            if (isset($appThreadIndex['min'])) {
                $this->addUsingAlias(AppDelayPeer::APP_THREAD_INDEX, $appThreadIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appThreadIndex['max'])) {
                $this->addUsingAlias(AppDelayPeer::APP_THREAD_INDEX, $appThreadIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_THREAD_INDEX, $appThreadIndex, $comparison);
    }

    /**
     * Filter the query on the APP_DEL_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDelIndex(1234); // WHERE APP_DEL_INDEX = 1234
     * $query->filterByAppDelIndex(array(12, 34)); // WHERE APP_DEL_INDEX IN (12, 34)
     * $query->filterByAppDelIndex(array('min' => 12)); // WHERE APP_DEL_INDEX > 12
     * </code>
     *
     * @param     mixed $appDelIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppDelIndex($appDelIndex = null, $comparison = null)
    {
        if (is_array($appDelIndex)) {
            $useMinMax = false;
            if (isset($appDelIndex['min'])) {
                $this->addUsingAlias(AppDelayPeer::APP_DEL_INDEX, $appDelIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appDelIndex['max'])) {
                $this->addUsingAlias(AppDelayPeer::APP_DEL_INDEX, $appDelIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_DEL_INDEX, $appDelIndex, $comparison);
    }

    /**
     * Filter the query on the APP_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppType('fooValue');   // WHERE APP_TYPE = 'fooValue'
     * $query->filterByAppType('%fooValue%'); // WHERE APP_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppType($appType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appType)) {
                $appType = str_replace('*', '%', $appType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_TYPE, $appType, $comparison);
    }

    /**
     * Filter the query on the APP_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppStatus('fooValue');   // WHERE APP_STATUS = 'fooValue'
     * $query->filterByAppStatus('%fooValue%'); // WHERE APP_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppStatus($appStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appStatus)) {
                $appStatus = str_replace('*', '%', $appStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_STATUS, $appStatus, $comparison);
    }

    /**
     * Filter the query on the APP_NEXT_TASK column
     *
     * Example usage:
     * <code>
     * $query->filterByAppNextTask('fooValue');   // WHERE APP_NEXT_TASK = 'fooValue'
     * $query->filterByAppNextTask('%fooValue%'); // WHERE APP_NEXT_TASK LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appNextTask The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppNextTask($appNextTask = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appNextTask)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appNextTask)) {
                $appNextTask = str_replace('*', '%', $appNextTask);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_NEXT_TASK, $appNextTask, $comparison);
    }

    /**
     * Filter the query on the APP_DELEGATION_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDelegationUser('fooValue');   // WHERE APP_DELEGATION_USER = 'fooValue'
     * $query->filterByAppDelegationUser('%fooValue%'); // WHERE APP_DELEGATION_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDelegationUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppDelegationUser($appDelegationUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDelegationUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDelegationUser)) {
                $appDelegationUser = str_replace('*', '%', $appDelegationUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_DELEGATION_USER, $appDelegationUser, $comparison);
    }

    /**
     * Filter the query on the APP_ENABLE_ACTION_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppEnableActionUser('fooValue');   // WHERE APP_ENABLE_ACTION_USER = 'fooValue'
     * $query->filterByAppEnableActionUser('%fooValue%'); // WHERE APP_ENABLE_ACTION_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appEnableActionUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppEnableActionUser($appEnableActionUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appEnableActionUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appEnableActionUser)) {
                $appEnableActionUser = str_replace('*', '%', $appEnableActionUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_ENABLE_ACTION_USER, $appEnableActionUser, $comparison);
    }

    /**
     * Filter the query on the APP_ENABLE_ACTION_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppEnableActionDate('2011-03-14'); // WHERE APP_ENABLE_ACTION_DATE = '2011-03-14'
     * $query->filterByAppEnableActionDate('now'); // WHERE APP_ENABLE_ACTION_DATE = '2011-03-14'
     * $query->filterByAppEnableActionDate(array('max' => 'yesterday')); // WHERE APP_ENABLE_ACTION_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appEnableActionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppEnableActionDate($appEnableActionDate = null, $comparison = null)
    {
        if (is_array($appEnableActionDate)) {
            $useMinMax = false;
            if (isset($appEnableActionDate['min'])) {
                $this->addUsingAlias(AppDelayPeer::APP_ENABLE_ACTION_DATE, $appEnableActionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appEnableActionDate['max'])) {
                $this->addUsingAlias(AppDelayPeer::APP_ENABLE_ACTION_DATE, $appEnableActionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_ENABLE_ACTION_DATE, $appEnableActionDate, $comparison);
    }

    /**
     * Filter the query on the APP_DISABLE_ACTION_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDisableActionUser('fooValue');   // WHERE APP_DISABLE_ACTION_USER = 'fooValue'
     * $query->filterByAppDisableActionUser('%fooValue%'); // WHERE APP_DISABLE_ACTION_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDisableActionUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppDisableActionUser($appDisableActionUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDisableActionUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDisableActionUser)) {
                $appDisableActionUser = str_replace('*', '%', $appDisableActionUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_DISABLE_ACTION_USER, $appDisableActionUser, $comparison);
    }

    /**
     * Filter the query on the APP_DISABLE_ACTION_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDisableActionDate('2011-03-14'); // WHERE APP_DISABLE_ACTION_DATE = '2011-03-14'
     * $query->filterByAppDisableActionDate('now'); // WHERE APP_DISABLE_ACTION_DATE = '2011-03-14'
     * $query->filterByAppDisableActionDate(array('max' => 'yesterday')); // WHERE APP_DISABLE_ACTION_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appDisableActionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppDisableActionDate($appDisableActionDate = null, $comparison = null)
    {
        if (is_array($appDisableActionDate)) {
            $useMinMax = false;
            if (isset($appDisableActionDate['min'])) {
                $this->addUsingAlias(AppDelayPeer::APP_DISABLE_ACTION_DATE, $appDisableActionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appDisableActionDate['max'])) {
                $this->addUsingAlias(AppDelayPeer::APP_DISABLE_ACTION_DATE, $appDisableActionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_DISABLE_ACTION_DATE, $appDisableActionDate, $comparison);
    }

    /**
     * Filter the query on the APP_AUTOMATIC_DISABLED_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppAutomaticDisabledDate('2011-03-14'); // WHERE APP_AUTOMATIC_DISABLED_DATE = '2011-03-14'
     * $query->filterByAppAutomaticDisabledDate('now'); // WHERE APP_AUTOMATIC_DISABLED_DATE = '2011-03-14'
     * $query->filterByAppAutomaticDisabledDate(array('max' => 'yesterday')); // WHERE APP_AUTOMATIC_DISABLED_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appAutomaticDisabledDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function filterByAppAutomaticDisabledDate($appAutomaticDisabledDate = null, $comparison = null)
    {
        if (is_array($appAutomaticDisabledDate)) {
            $useMinMax = false;
            if (isset($appAutomaticDisabledDate['min'])) {
                $this->addUsingAlias(AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE, $appAutomaticDisabledDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appAutomaticDisabledDate['max'])) {
                $this->addUsingAlias(AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE, $appAutomaticDisabledDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE, $appAutomaticDisabledDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppDelay $appDelay Object to remove from the list of results
     *
     * @return    AppDelayQuery The current query, for fluid interface
     */
    public function prune($appDelay = null)
    {
        if ($appDelay) {
            $this->addUsingAlias(AppDelayPeer::APP_DELAY_UID, $appDelay->getAppDelayUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAppDelayQuery