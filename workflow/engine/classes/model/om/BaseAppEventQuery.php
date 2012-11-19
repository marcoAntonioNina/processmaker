<?php


/**
 * Base class that represents a query for the 'APP_EVENT' table.
 *
 * 
 *
 * @method     AppEventQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppEventQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 * @method     AppEventQuery orderByEvnUid($order = Criteria::ASC) Order by the EVN_UID column
 * @method     AppEventQuery orderByAppEvnActionDate($order = Criteria::ASC) Order by the APP_EVN_ACTION_DATE column
 * @method     AppEventQuery orderByAppEvnAttempts($order = Criteria::ASC) Order by the APP_EVN_ATTEMPTS column
 * @method     AppEventQuery orderByAppEvnLastExecutionDate($order = Criteria::ASC) Order by the APP_EVN_LAST_EXECUTION_DATE column
 * @method     AppEventQuery orderByAppEvnStatus($order = Criteria::ASC) Order by the APP_EVN_STATUS column
 *
 * @method     AppEventQuery groupByAppUid() Group by the APP_UID column
 * @method     AppEventQuery groupByDelIndex() Group by the DEL_INDEX column
 * @method     AppEventQuery groupByEvnUid() Group by the EVN_UID column
 * @method     AppEventQuery groupByAppEvnActionDate() Group by the APP_EVN_ACTION_DATE column
 * @method     AppEventQuery groupByAppEvnAttempts() Group by the APP_EVN_ATTEMPTS column
 * @method     AppEventQuery groupByAppEvnLastExecutionDate() Group by the APP_EVN_LAST_EXECUTION_DATE column
 * @method     AppEventQuery groupByAppEvnStatus() Group by the APP_EVN_STATUS column
 *
 * @method     AppEventQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppEventQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppEventQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppEvent findOne(PropelPDO $con = null) Return the first AppEvent matching the query
 * @method     AppEvent findOneOrCreate(PropelPDO $con = null) Return the first AppEvent matching the query, or a new AppEvent object populated from the query conditions when no match is found
 *
 * @method     AppEvent findOneByAppUid(string $APP_UID) Return the first AppEvent filtered by the APP_UID column
 * @method     AppEvent findOneByDelIndex(int $DEL_INDEX) Return the first AppEvent filtered by the DEL_INDEX column
 * @method     AppEvent findOneByEvnUid(string $EVN_UID) Return the first AppEvent filtered by the EVN_UID column
 * @method     AppEvent findOneByAppEvnActionDate(string $APP_EVN_ACTION_DATE) Return the first AppEvent filtered by the APP_EVN_ACTION_DATE column
 * @method     AppEvent findOneByAppEvnAttempts(int $APP_EVN_ATTEMPTS) Return the first AppEvent filtered by the APP_EVN_ATTEMPTS column
 * @method     AppEvent findOneByAppEvnLastExecutionDate(string $APP_EVN_LAST_EXECUTION_DATE) Return the first AppEvent filtered by the APP_EVN_LAST_EXECUTION_DATE column
 * @method     AppEvent findOneByAppEvnStatus(string $APP_EVN_STATUS) Return the first AppEvent filtered by the APP_EVN_STATUS column
 *
 * @method     array findByAppUid(string $APP_UID) Return AppEvent objects filtered by the APP_UID column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppEvent objects filtered by the DEL_INDEX column
 * @method     array findByEvnUid(string $EVN_UID) Return AppEvent objects filtered by the EVN_UID column
 * @method     array findByAppEvnActionDate(string $APP_EVN_ACTION_DATE) Return AppEvent objects filtered by the APP_EVN_ACTION_DATE column
 * @method     array findByAppEvnAttempts(int $APP_EVN_ATTEMPTS) Return AppEvent objects filtered by the APP_EVN_ATTEMPTS column
 * @method     array findByAppEvnLastExecutionDate(string $APP_EVN_LAST_EXECUTION_DATE) Return AppEvent objects filtered by the APP_EVN_LAST_EXECUTION_DATE column
 * @method     array findByAppEvnStatus(string $APP_EVN_STATUS) Return AppEvent objects filtered by the APP_EVN_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppEventQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppEventQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppEvent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppEventQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppEventQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppEventQuery) {
            return $criteria;
        }
        $query = new AppEventQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     * @param     array[$APP_UID, $DEL_INDEX, $EVN_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    AppEvent|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppEventPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AppEventPeer::APP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AppEventPeer::DEL_INDEX, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(AppEventPeer::EVN_UID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AppEventPeer::APP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AppEventPeer::DEL_INDEX, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(AppEventPeer::EVN_UID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return    AppEventQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppEventPeer::APP_UID, $appUid, $comparison);
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
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppEventPeer::DEL_INDEX, $delIndex, $comparison);
    }

    /**
     * Filter the query on the EVN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnUid('fooValue');   // WHERE EVN_UID = 'fooValue'
     * $query->filterByEvnUid('%fooValue%'); // WHERE EVN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByEvnUid($evnUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnUid)) {
                $evnUid = str_replace('*', '%', $evnUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppEventPeer::EVN_UID, $evnUid, $comparison);
    }

    /**
     * Filter the query on the APP_EVN_ACTION_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppEvnActionDate('2011-03-14'); // WHERE APP_EVN_ACTION_DATE = '2011-03-14'
     * $query->filterByAppEvnActionDate('now'); // WHERE APP_EVN_ACTION_DATE = '2011-03-14'
     * $query->filterByAppEvnActionDate(array('max' => 'yesterday')); // WHERE APP_EVN_ACTION_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appEvnActionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByAppEvnActionDate($appEvnActionDate = null, $comparison = null)
    {
        if (is_array($appEvnActionDate)) {
            $useMinMax = false;
            if (isset($appEvnActionDate['min'])) {
                $this->addUsingAlias(AppEventPeer::APP_EVN_ACTION_DATE, $appEvnActionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appEvnActionDate['max'])) {
                $this->addUsingAlias(AppEventPeer::APP_EVN_ACTION_DATE, $appEvnActionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppEventPeer::APP_EVN_ACTION_DATE, $appEvnActionDate, $comparison);
    }

    /**
     * Filter the query on the APP_EVN_ATTEMPTS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppEvnAttempts(1234); // WHERE APP_EVN_ATTEMPTS = 1234
     * $query->filterByAppEvnAttempts(array(12, 34)); // WHERE APP_EVN_ATTEMPTS IN (12, 34)
     * $query->filterByAppEvnAttempts(array('min' => 12)); // WHERE APP_EVN_ATTEMPTS > 12
     * </code>
     *
     * @param     mixed $appEvnAttempts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByAppEvnAttempts($appEvnAttempts = null, $comparison = null)
    {
        if (is_array($appEvnAttempts)) {
            $useMinMax = false;
            if (isset($appEvnAttempts['min'])) {
                $this->addUsingAlias(AppEventPeer::APP_EVN_ATTEMPTS, $appEvnAttempts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appEvnAttempts['max'])) {
                $this->addUsingAlias(AppEventPeer::APP_EVN_ATTEMPTS, $appEvnAttempts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppEventPeer::APP_EVN_ATTEMPTS, $appEvnAttempts, $comparison);
    }

    /**
     * Filter the query on the APP_EVN_LAST_EXECUTION_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppEvnLastExecutionDate('2011-03-14'); // WHERE APP_EVN_LAST_EXECUTION_DATE = '2011-03-14'
     * $query->filterByAppEvnLastExecutionDate('now'); // WHERE APP_EVN_LAST_EXECUTION_DATE = '2011-03-14'
     * $query->filterByAppEvnLastExecutionDate(array('max' => 'yesterday')); // WHERE APP_EVN_LAST_EXECUTION_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appEvnLastExecutionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByAppEvnLastExecutionDate($appEvnLastExecutionDate = null, $comparison = null)
    {
        if (is_array($appEvnLastExecutionDate)) {
            $useMinMax = false;
            if (isset($appEvnLastExecutionDate['min'])) {
                $this->addUsingAlias(AppEventPeer::APP_EVN_LAST_EXECUTION_DATE, $appEvnLastExecutionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appEvnLastExecutionDate['max'])) {
                $this->addUsingAlias(AppEventPeer::APP_EVN_LAST_EXECUTION_DATE, $appEvnLastExecutionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppEventPeer::APP_EVN_LAST_EXECUTION_DATE, $appEvnLastExecutionDate, $comparison);
    }

    /**
     * Filter the query on the APP_EVN_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppEvnStatus('fooValue');   // WHERE APP_EVN_STATUS = 'fooValue'
     * $query->filterByAppEvnStatus('%fooValue%'); // WHERE APP_EVN_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appEvnStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function filterByAppEvnStatus($appEvnStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appEvnStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appEvnStatus)) {
                $appEvnStatus = str_replace('*', '%', $appEvnStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppEventPeer::APP_EVN_STATUS, $appEvnStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppEvent $appEvent Object to remove from the list of results
     *
     * @return    AppEventQuery The current query, for fluid interface
     */
    public function prune($appEvent = null)
    {
        if ($appEvent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AppEventPeer::APP_UID), $appEvent->getAppUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AppEventPeer::DEL_INDEX), $appEvent->getDelIndex(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(AppEventPeer::EVN_UID), $appEvent->getEvnUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseAppEventQuery