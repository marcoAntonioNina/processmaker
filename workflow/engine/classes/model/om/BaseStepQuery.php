<?php


/**
 * Base class that represents a query for the 'STEP' table.
 *
 * 
 *
 * @method     StepQuery orderByStepUid($order = Criteria::ASC) Order by the STEP_UID column
 * @method     StepQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     StepQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     StepQuery orderByStepTypeObj($order = Criteria::ASC) Order by the STEP_TYPE_OBJ column
 * @method     StepQuery orderByStepUidObj($order = Criteria::ASC) Order by the STEP_UID_OBJ column
 * @method     StepQuery orderByStepCondition($order = Criteria::ASC) Order by the STEP_CONDITION column
 * @method     StepQuery orderByStepPosition($order = Criteria::ASC) Order by the STEP_POSITION column
 * @method     StepQuery orderByStepMode($order = Criteria::ASC) Order by the STEP_MODE column
 *
 * @method     StepQuery groupByStepUid() Group by the STEP_UID column
 * @method     StepQuery groupByProUid() Group by the PRO_UID column
 * @method     StepQuery groupByTasUid() Group by the TAS_UID column
 * @method     StepQuery groupByStepTypeObj() Group by the STEP_TYPE_OBJ column
 * @method     StepQuery groupByStepUidObj() Group by the STEP_UID_OBJ column
 * @method     StepQuery groupByStepCondition() Group by the STEP_CONDITION column
 * @method     StepQuery groupByStepPosition() Group by the STEP_POSITION column
 * @method     StepQuery groupByStepMode() Group by the STEP_MODE column
 *
 * @method     StepQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StepQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StepQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Step findOne(PropelPDO $con = null) Return the first Step matching the query
 * @method     Step findOneOrCreate(PropelPDO $con = null) Return the first Step matching the query, or a new Step object populated from the query conditions when no match is found
 *
 * @method     Step findOneByStepUid(string $STEP_UID) Return the first Step filtered by the STEP_UID column
 * @method     Step findOneByProUid(string $PRO_UID) Return the first Step filtered by the PRO_UID column
 * @method     Step findOneByTasUid(string $TAS_UID) Return the first Step filtered by the TAS_UID column
 * @method     Step findOneByStepTypeObj(string $STEP_TYPE_OBJ) Return the first Step filtered by the STEP_TYPE_OBJ column
 * @method     Step findOneByStepUidObj(string $STEP_UID_OBJ) Return the first Step filtered by the STEP_UID_OBJ column
 * @method     Step findOneByStepCondition(string $STEP_CONDITION) Return the first Step filtered by the STEP_CONDITION column
 * @method     Step findOneByStepPosition(int $STEP_POSITION) Return the first Step filtered by the STEP_POSITION column
 * @method     Step findOneByStepMode(string $STEP_MODE) Return the first Step filtered by the STEP_MODE column
 *
 * @method     array findByStepUid(string $STEP_UID) Return Step objects filtered by the STEP_UID column
 * @method     array findByProUid(string $PRO_UID) Return Step objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return Step objects filtered by the TAS_UID column
 * @method     array findByStepTypeObj(string $STEP_TYPE_OBJ) Return Step objects filtered by the STEP_TYPE_OBJ column
 * @method     array findByStepUidObj(string $STEP_UID_OBJ) Return Step objects filtered by the STEP_UID_OBJ column
 * @method     array findByStepCondition(string $STEP_CONDITION) Return Step objects filtered by the STEP_CONDITION column
 * @method     array findByStepPosition(int $STEP_POSITION) Return Step objects filtered by the STEP_POSITION column
 * @method     array findByStepMode(string $STEP_MODE) Return Step objects filtered by the STEP_MODE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseStepQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseStepQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Step', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StepQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    StepQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StepQuery) {
            return $criteria;
        }
        $query = new StepQuery();
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
     * @return    Step|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = StepPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(StepPeer::STEP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(StepPeer::STEP_UID, $keys, Criteria::IN);
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
     * @return    StepQuery The current query, for fluid interface
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
        return $this->addUsingAlias(StepPeer::STEP_UID, $stepUid, $comparison);
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
     * @return    StepQuery The current query, for fluid interface
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
        return $this->addUsingAlias(StepPeer::PRO_UID, $proUid, $comparison);
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
     * @return    StepQuery The current query, for fluid interface
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
        return $this->addUsingAlias(StepPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the STEP_TYPE_OBJ column
     *
     * Example usage:
     * <code>
     * $query->filterByStepTypeObj('fooValue');   // WHERE STEP_TYPE_OBJ = 'fooValue'
     * $query->filterByStepTypeObj('%fooValue%'); // WHERE STEP_TYPE_OBJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stepTypeObj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByStepTypeObj($stepTypeObj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stepTypeObj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stepTypeObj)) {
                $stepTypeObj = str_replace('*', '%', $stepTypeObj);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepPeer::STEP_TYPE_OBJ, $stepTypeObj, $comparison);
    }

    /**
     * Filter the query on the STEP_UID_OBJ column
     *
     * Example usage:
     * <code>
     * $query->filterByStepUidObj('fooValue');   // WHERE STEP_UID_OBJ = 'fooValue'
     * $query->filterByStepUidObj('%fooValue%'); // WHERE STEP_UID_OBJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stepUidObj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByStepUidObj($stepUidObj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stepUidObj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stepUidObj)) {
                $stepUidObj = str_replace('*', '%', $stepUidObj);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepPeer::STEP_UID_OBJ, $stepUidObj, $comparison);
    }

    /**
     * Filter the query on the STEP_CONDITION column
     *
     * Example usage:
     * <code>
     * $query->filterByStepCondition('fooValue');   // WHERE STEP_CONDITION = 'fooValue'
     * $query->filterByStepCondition('%fooValue%'); // WHERE STEP_CONDITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stepCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByStepCondition($stepCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stepCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stepCondition)) {
                $stepCondition = str_replace('*', '%', $stepCondition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepPeer::STEP_CONDITION, $stepCondition, $comparison);
    }

    /**
     * Filter the query on the STEP_POSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByStepPosition(1234); // WHERE STEP_POSITION = 1234
     * $query->filterByStepPosition(array(12, 34)); // WHERE STEP_POSITION IN (12, 34)
     * $query->filterByStepPosition(array('min' => 12)); // WHERE STEP_POSITION > 12
     * </code>
     *
     * @param     mixed $stepPosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByStepPosition($stepPosition = null, $comparison = null)
    {
        if (is_array($stepPosition)) {
            $useMinMax = false;
            if (isset($stepPosition['min'])) {
                $this->addUsingAlias(StepPeer::STEP_POSITION, $stepPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stepPosition['max'])) {
                $this->addUsingAlias(StepPeer::STEP_POSITION, $stepPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(StepPeer::STEP_POSITION, $stepPosition, $comparison);
    }

    /**
     * Filter the query on the STEP_MODE column
     *
     * Example usage:
     * <code>
     * $query->filterByStepMode('fooValue');   // WHERE STEP_MODE = 'fooValue'
     * $query->filterByStepMode('%fooValue%'); // WHERE STEP_MODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stepMode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function filterByStepMode($stepMode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stepMode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stepMode)) {
                $stepMode = str_replace('*', '%', $stepMode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StepPeer::STEP_MODE, $stepMode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Step $step Object to remove from the list of results
     *
     * @return    StepQuery The current query, for fluid interface
     */
    public function prune($step = null)
    {
        if ($step) {
            $this->addUsingAlias(StepPeer::STEP_UID, $step->getStepUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseStepQuery