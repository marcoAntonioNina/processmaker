<?php


/**
 * Base class that represents a query for the 'EVENT' table.
 *
 * 
 *
 * @method     EventQuery orderByEvnUid($order = Criteria::ASC) Order by the EVN_UID column
 * @method     EventQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     EventQuery orderByEvnStatus($order = Criteria::ASC) Order by the EVN_STATUS column
 * @method     EventQuery orderByEvnWhenOccurs($order = Criteria::ASC) Order by the EVN_WHEN_OCCURS column
 * @method     EventQuery orderByEvnRelatedTo($order = Criteria::ASC) Order by the EVN_RELATED_TO column
 * @method     EventQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     EventQuery orderByEvnTasUidFrom($order = Criteria::ASC) Order by the EVN_TAS_UID_FROM column
 * @method     EventQuery orderByEvnTasUidTo($order = Criteria::ASC) Order by the EVN_TAS_UID_TO column
 * @method     EventQuery orderByEvnTasEstimatedDuration($order = Criteria::ASC) Order by the EVN_TAS_ESTIMATED_DURATION column
 * @method     EventQuery orderByEvnTimeUnit($order = Criteria::ASC) Order by the EVN_TIME_UNIT column
 * @method     EventQuery orderByEvnWhen($order = Criteria::ASC) Order by the EVN_WHEN column
 * @method     EventQuery orderByEvnMaxAttempts($order = Criteria::ASC) Order by the EVN_MAX_ATTEMPTS column
 * @method     EventQuery orderByEvnAction($order = Criteria::ASC) Order by the EVN_ACTION column
 * @method     EventQuery orderByEvnConditions($order = Criteria::ASC) Order by the EVN_CONDITIONS column
 * @method     EventQuery orderByEvnActionParameters($order = Criteria::ASC) Order by the EVN_ACTION_PARAMETERS column
 * @method     EventQuery orderByTriUid($order = Criteria::ASC) Order by the TRI_UID column
 * @method     EventQuery orderByEvnPosx($order = Criteria::ASC) Order by the EVN_POSX column
 * @method     EventQuery orderByEvnPosy($order = Criteria::ASC) Order by the EVN_POSY column
 * @method     EventQuery orderByEvnType($order = Criteria::ASC) Order by the EVN_TYPE column
 * @method     EventQuery orderByTasEvnUid($order = Criteria::ASC) Order by the TAS_EVN_UID column
 *
 * @method     EventQuery groupByEvnUid() Group by the EVN_UID column
 * @method     EventQuery groupByProUid() Group by the PRO_UID column
 * @method     EventQuery groupByEvnStatus() Group by the EVN_STATUS column
 * @method     EventQuery groupByEvnWhenOccurs() Group by the EVN_WHEN_OCCURS column
 * @method     EventQuery groupByEvnRelatedTo() Group by the EVN_RELATED_TO column
 * @method     EventQuery groupByTasUid() Group by the TAS_UID column
 * @method     EventQuery groupByEvnTasUidFrom() Group by the EVN_TAS_UID_FROM column
 * @method     EventQuery groupByEvnTasUidTo() Group by the EVN_TAS_UID_TO column
 * @method     EventQuery groupByEvnTasEstimatedDuration() Group by the EVN_TAS_ESTIMATED_DURATION column
 * @method     EventQuery groupByEvnTimeUnit() Group by the EVN_TIME_UNIT column
 * @method     EventQuery groupByEvnWhen() Group by the EVN_WHEN column
 * @method     EventQuery groupByEvnMaxAttempts() Group by the EVN_MAX_ATTEMPTS column
 * @method     EventQuery groupByEvnAction() Group by the EVN_ACTION column
 * @method     EventQuery groupByEvnConditions() Group by the EVN_CONDITIONS column
 * @method     EventQuery groupByEvnActionParameters() Group by the EVN_ACTION_PARAMETERS column
 * @method     EventQuery groupByTriUid() Group by the TRI_UID column
 * @method     EventQuery groupByEvnPosx() Group by the EVN_POSX column
 * @method     EventQuery groupByEvnPosy() Group by the EVN_POSY column
 * @method     EventQuery groupByEvnType() Group by the EVN_TYPE column
 * @method     EventQuery groupByTasEvnUid() Group by the TAS_EVN_UID column
 *
 * @method     EventQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EventQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EventQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Event findOne(PropelPDO $con = null) Return the first Event matching the query
 * @method     Event findOneOrCreate(PropelPDO $con = null) Return the first Event matching the query, or a new Event object populated from the query conditions when no match is found
 *
 * @method     Event findOneByEvnUid(string $EVN_UID) Return the first Event filtered by the EVN_UID column
 * @method     Event findOneByProUid(string $PRO_UID) Return the first Event filtered by the PRO_UID column
 * @method     Event findOneByEvnStatus(string $EVN_STATUS) Return the first Event filtered by the EVN_STATUS column
 * @method     Event findOneByEvnWhenOccurs(string $EVN_WHEN_OCCURS) Return the first Event filtered by the EVN_WHEN_OCCURS column
 * @method     Event findOneByEvnRelatedTo(string $EVN_RELATED_TO) Return the first Event filtered by the EVN_RELATED_TO column
 * @method     Event findOneByTasUid(string $TAS_UID) Return the first Event filtered by the TAS_UID column
 * @method     Event findOneByEvnTasUidFrom(string $EVN_TAS_UID_FROM) Return the first Event filtered by the EVN_TAS_UID_FROM column
 * @method     Event findOneByEvnTasUidTo(string $EVN_TAS_UID_TO) Return the first Event filtered by the EVN_TAS_UID_TO column
 * @method     Event findOneByEvnTasEstimatedDuration(double $EVN_TAS_ESTIMATED_DURATION) Return the first Event filtered by the EVN_TAS_ESTIMATED_DURATION column
 * @method     Event findOneByEvnTimeUnit(string $EVN_TIME_UNIT) Return the first Event filtered by the EVN_TIME_UNIT column
 * @method     Event findOneByEvnWhen(double $EVN_WHEN) Return the first Event filtered by the EVN_WHEN column
 * @method     Event findOneByEvnMaxAttempts(int $EVN_MAX_ATTEMPTS) Return the first Event filtered by the EVN_MAX_ATTEMPTS column
 * @method     Event findOneByEvnAction(string $EVN_ACTION) Return the first Event filtered by the EVN_ACTION column
 * @method     Event findOneByEvnConditions(string $EVN_CONDITIONS) Return the first Event filtered by the EVN_CONDITIONS column
 * @method     Event findOneByEvnActionParameters(string $EVN_ACTION_PARAMETERS) Return the first Event filtered by the EVN_ACTION_PARAMETERS column
 * @method     Event findOneByTriUid(string $TRI_UID) Return the first Event filtered by the TRI_UID column
 * @method     Event findOneByEvnPosx(int $EVN_POSX) Return the first Event filtered by the EVN_POSX column
 * @method     Event findOneByEvnPosy(int $EVN_POSY) Return the first Event filtered by the EVN_POSY column
 * @method     Event findOneByEvnType(string $EVN_TYPE) Return the first Event filtered by the EVN_TYPE column
 * @method     Event findOneByTasEvnUid(string $TAS_EVN_UID) Return the first Event filtered by the TAS_EVN_UID column
 *
 * @method     array findByEvnUid(string $EVN_UID) Return Event objects filtered by the EVN_UID column
 * @method     array findByProUid(string $PRO_UID) Return Event objects filtered by the PRO_UID column
 * @method     array findByEvnStatus(string $EVN_STATUS) Return Event objects filtered by the EVN_STATUS column
 * @method     array findByEvnWhenOccurs(string $EVN_WHEN_OCCURS) Return Event objects filtered by the EVN_WHEN_OCCURS column
 * @method     array findByEvnRelatedTo(string $EVN_RELATED_TO) Return Event objects filtered by the EVN_RELATED_TO column
 * @method     array findByTasUid(string $TAS_UID) Return Event objects filtered by the TAS_UID column
 * @method     array findByEvnTasUidFrom(string $EVN_TAS_UID_FROM) Return Event objects filtered by the EVN_TAS_UID_FROM column
 * @method     array findByEvnTasUidTo(string $EVN_TAS_UID_TO) Return Event objects filtered by the EVN_TAS_UID_TO column
 * @method     array findByEvnTasEstimatedDuration(double $EVN_TAS_ESTIMATED_DURATION) Return Event objects filtered by the EVN_TAS_ESTIMATED_DURATION column
 * @method     array findByEvnTimeUnit(string $EVN_TIME_UNIT) Return Event objects filtered by the EVN_TIME_UNIT column
 * @method     array findByEvnWhen(double $EVN_WHEN) Return Event objects filtered by the EVN_WHEN column
 * @method     array findByEvnMaxAttempts(int $EVN_MAX_ATTEMPTS) Return Event objects filtered by the EVN_MAX_ATTEMPTS column
 * @method     array findByEvnAction(string $EVN_ACTION) Return Event objects filtered by the EVN_ACTION column
 * @method     array findByEvnConditions(string $EVN_CONDITIONS) Return Event objects filtered by the EVN_CONDITIONS column
 * @method     array findByEvnActionParameters(string $EVN_ACTION_PARAMETERS) Return Event objects filtered by the EVN_ACTION_PARAMETERS column
 * @method     array findByTriUid(string $TRI_UID) Return Event objects filtered by the TRI_UID column
 * @method     array findByEvnPosx(int $EVN_POSX) Return Event objects filtered by the EVN_POSX column
 * @method     array findByEvnPosy(int $EVN_POSY) Return Event objects filtered by the EVN_POSY column
 * @method     array findByEvnType(string $EVN_TYPE) Return Event objects filtered by the EVN_TYPE column
 * @method     array findByTasEvnUid(string $TAS_EVN_UID) Return Event objects filtered by the TAS_EVN_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseEventQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseEventQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Event', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EventQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    EventQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EventQuery) {
            return $criteria;
        }
        $query = new EventQuery();
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
     * @return    Event|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = EventPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(EventPeer::EVN_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(EventPeer::EVN_UID, $keys, Criteria::IN);
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
     * @return    EventQuery The current query, for fluid interface
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
        return $this->addUsingAlias(EventPeer::EVN_UID, $evnUid, $comparison);
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
     * @return    EventQuery The current query, for fluid interface
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
        return $this->addUsingAlias(EventPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the EVN_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnStatus('fooValue');   // WHERE EVN_STATUS = 'fooValue'
     * $query->filterByEvnStatus('%fooValue%'); // WHERE EVN_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnStatus($evnStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnStatus)) {
                $evnStatus = str_replace('*', '%', $evnStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_STATUS, $evnStatus, $comparison);
    }

    /**
     * Filter the query on the EVN_WHEN_OCCURS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnWhenOccurs('fooValue');   // WHERE EVN_WHEN_OCCURS = 'fooValue'
     * $query->filterByEvnWhenOccurs('%fooValue%'); // WHERE EVN_WHEN_OCCURS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnWhenOccurs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnWhenOccurs($evnWhenOccurs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnWhenOccurs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnWhenOccurs)) {
                $evnWhenOccurs = str_replace('*', '%', $evnWhenOccurs);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_WHEN_OCCURS, $evnWhenOccurs, $comparison);
    }

    /**
     * Filter the query on the EVN_RELATED_TO column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnRelatedTo('fooValue');   // WHERE EVN_RELATED_TO = 'fooValue'
     * $query->filterByEvnRelatedTo('%fooValue%'); // WHERE EVN_RELATED_TO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnRelatedTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnRelatedTo($evnRelatedTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnRelatedTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnRelatedTo)) {
                $evnRelatedTo = str_replace('*', '%', $evnRelatedTo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_RELATED_TO, $evnRelatedTo, $comparison);
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
     * @return    EventQuery The current query, for fluid interface
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
        return $this->addUsingAlias(EventPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the EVN_TAS_UID_FROM column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnTasUidFrom('fooValue');   // WHERE EVN_TAS_UID_FROM = 'fooValue'
     * $query->filterByEvnTasUidFrom('%fooValue%'); // WHERE EVN_TAS_UID_FROM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnTasUidFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnTasUidFrom($evnTasUidFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnTasUidFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnTasUidFrom)) {
                $evnTasUidFrom = str_replace('*', '%', $evnTasUidFrom);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_TAS_UID_FROM, $evnTasUidFrom, $comparison);
    }

    /**
     * Filter the query on the EVN_TAS_UID_TO column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnTasUidTo('fooValue');   // WHERE EVN_TAS_UID_TO = 'fooValue'
     * $query->filterByEvnTasUidTo('%fooValue%'); // WHERE EVN_TAS_UID_TO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnTasUidTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnTasUidTo($evnTasUidTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnTasUidTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnTasUidTo)) {
                $evnTasUidTo = str_replace('*', '%', $evnTasUidTo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_TAS_UID_TO, $evnTasUidTo, $comparison);
    }

    /**
     * Filter the query on the EVN_TAS_ESTIMATED_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnTasEstimatedDuration(1234); // WHERE EVN_TAS_ESTIMATED_DURATION = 1234
     * $query->filterByEvnTasEstimatedDuration(array(12, 34)); // WHERE EVN_TAS_ESTIMATED_DURATION IN (12, 34)
     * $query->filterByEvnTasEstimatedDuration(array('min' => 12)); // WHERE EVN_TAS_ESTIMATED_DURATION > 12
     * </code>
     *
     * @param     mixed $evnTasEstimatedDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnTasEstimatedDuration($evnTasEstimatedDuration = null, $comparison = null)
    {
        if (is_array($evnTasEstimatedDuration)) {
            $useMinMax = false;
            if (isset($evnTasEstimatedDuration['min'])) {
                $this->addUsingAlias(EventPeer::EVN_TAS_ESTIMATED_DURATION, $evnTasEstimatedDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evnTasEstimatedDuration['max'])) {
                $this->addUsingAlias(EventPeer::EVN_TAS_ESTIMATED_DURATION, $evnTasEstimatedDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_TAS_ESTIMATED_DURATION, $evnTasEstimatedDuration, $comparison);
    }

    /**
     * Filter the query on the EVN_TIME_UNIT column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnTimeUnit('fooValue');   // WHERE EVN_TIME_UNIT = 'fooValue'
     * $query->filterByEvnTimeUnit('%fooValue%'); // WHERE EVN_TIME_UNIT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnTimeUnit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnTimeUnit($evnTimeUnit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnTimeUnit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnTimeUnit)) {
                $evnTimeUnit = str_replace('*', '%', $evnTimeUnit);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_TIME_UNIT, $evnTimeUnit, $comparison);
    }

    /**
     * Filter the query on the EVN_WHEN column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnWhen(1234); // WHERE EVN_WHEN = 1234
     * $query->filterByEvnWhen(array(12, 34)); // WHERE EVN_WHEN IN (12, 34)
     * $query->filterByEvnWhen(array('min' => 12)); // WHERE EVN_WHEN > 12
     * </code>
     *
     * @param     mixed $evnWhen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnWhen($evnWhen = null, $comparison = null)
    {
        if (is_array($evnWhen)) {
            $useMinMax = false;
            if (isset($evnWhen['min'])) {
                $this->addUsingAlias(EventPeer::EVN_WHEN, $evnWhen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evnWhen['max'])) {
                $this->addUsingAlias(EventPeer::EVN_WHEN, $evnWhen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_WHEN, $evnWhen, $comparison);
    }

    /**
     * Filter the query on the EVN_MAX_ATTEMPTS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnMaxAttempts(1234); // WHERE EVN_MAX_ATTEMPTS = 1234
     * $query->filterByEvnMaxAttempts(array(12, 34)); // WHERE EVN_MAX_ATTEMPTS IN (12, 34)
     * $query->filterByEvnMaxAttempts(array('min' => 12)); // WHERE EVN_MAX_ATTEMPTS > 12
     * </code>
     *
     * @param     mixed $evnMaxAttempts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnMaxAttempts($evnMaxAttempts = null, $comparison = null)
    {
        if (is_array($evnMaxAttempts)) {
            $useMinMax = false;
            if (isset($evnMaxAttempts['min'])) {
                $this->addUsingAlias(EventPeer::EVN_MAX_ATTEMPTS, $evnMaxAttempts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evnMaxAttempts['max'])) {
                $this->addUsingAlias(EventPeer::EVN_MAX_ATTEMPTS, $evnMaxAttempts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_MAX_ATTEMPTS, $evnMaxAttempts, $comparison);
    }

    /**
     * Filter the query on the EVN_ACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnAction('fooValue');   // WHERE EVN_ACTION = 'fooValue'
     * $query->filterByEvnAction('%fooValue%'); // WHERE EVN_ACTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnAction($evnAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnAction)) {
                $evnAction = str_replace('*', '%', $evnAction);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_ACTION, $evnAction, $comparison);
    }

    /**
     * Filter the query on the EVN_CONDITIONS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnConditions('fooValue');   // WHERE EVN_CONDITIONS = 'fooValue'
     * $query->filterByEvnConditions('%fooValue%'); // WHERE EVN_CONDITIONS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnConditions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnConditions($evnConditions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnConditions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnConditions)) {
                $evnConditions = str_replace('*', '%', $evnConditions);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_CONDITIONS, $evnConditions, $comparison);
    }

    /**
     * Filter the query on the EVN_ACTION_PARAMETERS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnActionParameters('fooValue');   // WHERE EVN_ACTION_PARAMETERS = 'fooValue'
     * $query->filterByEvnActionParameters('%fooValue%'); // WHERE EVN_ACTION_PARAMETERS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnActionParameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnActionParameters($evnActionParameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnActionParameters)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnActionParameters)) {
                $evnActionParameters = str_replace('*', '%', $evnActionParameters);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_ACTION_PARAMETERS, $evnActionParameters, $comparison);
    }

    /**
     * Filter the query on the TRI_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTriUid('fooValue');   // WHERE TRI_UID = 'fooValue'
     * $query->filterByTriUid('%fooValue%'); // WHERE TRI_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $triUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByTriUid($triUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($triUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $triUid)) {
                $triUid = str_replace('*', '%', $triUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::TRI_UID, $triUid, $comparison);
    }

    /**
     * Filter the query on the EVN_POSX column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnPosx(1234); // WHERE EVN_POSX = 1234
     * $query->filterByEvnPosx(array(12, 34)); // WHERE EVN_POSX IN (12, 34)
     * $query->filterByEvnPosx(array('min' => 12)); // WHERE EVN_POSX > 12
     * </code>
     *
     * @param     mixed $evnPosx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnPosx($evnPosx = null, $comparison = null)
    {
        if (is_array($evnPosx)) {
            $useMinMax = false;
            if (isset($evnPosx['min'])) {
                $this->addUsingAlias(EventPeer::EVN_POSX, $evnPosx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evnPosx['max'])) {
                $this->addUsingAlias(EventPeer::EVN_POSX, $evnPosx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_POSX, $evnPosx, $comparison);
    }

    /**
     * Filter the query on the EVN_POSY column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnPosy(1234); // WHERE EVN_POSY = 1234
     * $query->filterByEvnPosy(array(12, 34)); // WHERE EVN_POSY IN (12, 34)
     * $query->filterByEvnPosy(array('min' => 12)); // WHERE EVN_POSY > 12
     * </code>
     *
     * @param     mixed $evnPosy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnPosy($evnPosy = null, $comparison = null)
    {
        if (is_array($evnPosy)) {
            $useMinMax = false;
            if (isset($evnPosy['min'])) {
                $this->addUsingAlias(EventPeer::EVN_POSY, $evnPosy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evnPosy['max'])) {
                $this->addUsingAlias(EventPeer::EVN_POSY, $evnPosy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_POSY, $evnPosy, $comparison);
    }

    /**
     * Filter the query on the EVN_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByEvnType('fooValue');   // WHERE EVN_TYPE = 'fooValue'
     * $query->filterByEvnType('%fooValue%'); // WHERE EVN_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evnType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByEvnType($evnType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evnType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evnType)) {
                $evnType = str_replace('*', '%', $evnType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::EVN_TYPE, $evnType, $comparison);
    }

    /**
     * Filter the query on the TAS_EVN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasEvnUid('fooValue');   // WHERE TAS_EVN_UID = 'fooValue'
     * $query->filterByTasEvnUid('%fooValue%'); // WHERE TAS_EVN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasEvnUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function filterByTasEvnUid($tasEvnUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasEvnUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasEvnUid)) {
                $tasEvnUid = str_replace('*', '%', $tasEvnUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(EventPeer::TAS_EVN_UID, $tasEvnUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Event $event Object to remove from the list of results
     *
     * @return    EventQuery The current query, for fluid interface
     */
    public function prune($event = null)
    {
        if ($event) {
            $this->addUsingAlias(EventPeer::EVN_UID, $event->getEvnUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseEventQuery