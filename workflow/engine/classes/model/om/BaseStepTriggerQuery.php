<?php


/**
 * Base class that represents a query for the 'STEP_TRIGGER' table.
 *
 * 
 *
 * @method     StepTriggerQuery orderByStepUid($order = Criteria::ASC) Order by the STEP_UID column
 * @method     StepTriggerQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     StepTriggerQuery orderByTriUid($order = Criteria::ASC) Order by the TRI_UID column
 * @method     StepTriggerQuery orderByStType($order = Criteria::ASC) Order by the ST_TYPE column
 * @method     StepTriggerQuery orderByStCondition($order = Criteria::ASC) Order by the ST_CONDITION column
 * @method     StepTriggerQuery orderByStPosition($order = Criteria::ASC) Order by the ST_POSITION column
 *
 * @method     StepTriggerQuery groupByStepUid() Group by the STEP_UID column
 * @method     StepTriggerQuery groupByTasUid() Group by the TAS_UID column
 * @method     StepTriggerQuery groupByTriUid() Group by the TRI_UID column
 * @method     StepTriggerQuery groupByStType() Group by the ST_TYPE column
 * @method     StepTriggerQuery groupByStCondition() Group by the ST_CONDITION column
 * @method     StepTriggerQuery groupByStPosition() Group by the ST_POSITION column
 *
 * @method     StepTriggerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StepTriggerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StepTriggerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     StepTrigger findOne(PropelPDO $con = null) Return the first StepTrigger matching the query
 * @method     StepTrigger findOneOrCreate(PropelPDO $con = null) Return the first StepTrigger matching the query, or a new StepTrigger object populated from the query conditions when no match is found
 *
 * @method     StepTrigger findOneByStepUid(string $STEP_UID) Return the first StepTrigger filtered by the STEP_UID column
 * @method     StepTrigger findOneByTasUid(string $TAS_UID) Return the first StepTrigger filtered by the TAS_UID column
 * @method     StepTrigger findOneByTriUid(string $TRI_UID) Return the first StepTrigger filtered by the TRI_UID column
 * @method     StepTrigger findOneByStType(string $ST_TYPE) Return the first StepTrigger filtered by the ST_TYPE column
 * @method     StepTrigger findOneByStCondition(string $ST_CONDITION) Return the first StepTrigger filtered by the ST_CONDITION column
 * @method     StepTrigger findOneByStPosition(int $ST_POSITION) Return the first StepTrigger filtered by the ST_POSITION column
 *
 * @method     array findByStepUid(string $STEP_UID) Return StepTrigger objects filtered by the STEP_UID column
 * @method     array findByTasUid(string $TAS_UID) Return StepTrigger objects filtered by the TAS_UID column
 * @method     array findByTriUid(string $TRI_UID) Return StepTrigger objects filtered by the TRI_UID column
 * @method     array findByStType(string $ST_TYPE) Return StepTrigger objects filtered by the ST_TYPE column
 * @method     array findByStCondition(string $ST_CONDITION) Return StepTrigger objects filtered by the ST_CONDITION column
 * @method     array findByStPosition(int $ST_POSITION) Return StepTrigger objects filtered by the ST_POSITION column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseStepTriggerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseStepTriggerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'StepTrigger', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StepTriggerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    StepTriggerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StepTriggerQuery) {
            return $criteria;
        }
        $query = new StepTriggerQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     * @param     array[$STEP_UID, $TAS_UID, $TRI_UID, $ST_TYPE] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    StepTrigger|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = StepTriggerPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(StepTriggerPeer::STEP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(StepTriggerPeer::TAS_UID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(StepTriggerPeer::TRI_UID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(StepTriggerPeer::ST_TYPE, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(StepTriggerPeer::STEP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(StepTriggerPeer::TAS_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(StepTriggerPeer::TRI_UID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(StepTriggerPeer::ST_TYPE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the STEP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByStepUid('fooValue');   // WHERE STEP_UID = 'fooValue'
     * $query->filterByStepUid('%fooValue%'); // WHERE STEP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stepUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function filterByStepUid($stepUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stepUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stepUid)) {
                $stepUid = str_replace('*', '%', $stepUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepTriggerPeer::STEP_UID, $stepUid, $comparison);
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
     * @return    StepTriggerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(StepTriggerPeer::TAS_UID, $tasUid, $comparison);
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
     * @return    StepTriggerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(StepTriggerPeer::TRI_UID, $triUid, $comparison);
    }

    /**
     * Filter the query on the ST_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByStType('fooValue');   // WHERE ST_TYPE = 'fooValue'
     * $query->filterByStType('%fooValue%'); // WHERE ST_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function filterByStType($stType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stType)) {
                $stType = str_replace('*', '%', $stType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepTriggerPeer::ST_TYPE, $stType, $comparison);
    }

    /**
     * Filter the query on the ST_CONDITION column
     *
     * Example usage:
     * <code>
     * $query->filterByStCondition('fooValue');   // WHERE ST_CONDITION = 'fooValue'
     * $query->filterByStCondition('%fooValue%'); // WHERE ST_CONDITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function filterByStCondition($stCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stCondition)) {
                $stCondition = str_replace('*', '%', $stCondition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepTriggerPeer::ST_CONDITION, $stCondition, $comparison);
    }

    /**
     * Filter the query on the ST_POSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByStPosition(1234); // WHERE ST_POSITION = 1234
     * $query->filterByStPosition(array(12, 34)); // WHERE ST_POSITION IN (12, 34)
     * $query->filterByStPosition(array('min' => 12)); // WHERE ST_POSITION > 12
     * </code>
     *
     * @param     mixed $stPosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function filterByStPosition($stPosition = null, $comparison = null)
    {
        if (is_array($stPosition)) {
            $useMinMax = false;
            if (isset($stPosition['min'])) {
                $this->addUsingAlias(StepTriggerPeer::ST_POSITION, $stPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stPosition['max'])) {
                $this->addUsingAlias(StepTriggerPeer::ST_POSITION, $stPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(StepTriggerPeer::ST_POSITION, $stPosition, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     StepTrigger $stepTrigger Object to remove from the list of results
     *
     * @return    StepTriggerQuery The current query, for fluid interface
     */
    public function prune($stepTrigger = null)
    {
        if ($stepTrigger) {
            $this->addCond('pruneCond0', $this->getAliasedColName(StepTriggerPeer::STEP_UID), $stepTrigger->getStepUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(StepTriggerPeer::TAS_UID), $stepTrigger->getTasUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(StepTriggerPeer::TRI_UID), $stepTrigger->getTriUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(StepTriggerPeer::ST_TYPE), $stepTrigger->getStType(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseStepTriggerQuery