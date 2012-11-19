<?php


/**
 * Base class that represents a query for the 'SUB_PROCESS' table.
 *
 * 
 *
 * @method     SubProcessQuery orderBySpUid($order = Criteria::ASC) Order by the SP_UID column
 * @method     SubProcessQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     SubProcessQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     SubProcessQuery orderByProParent($order = Criteria::ASC) Order by the PRO_PARENT column
 * @method     SubProcessQuery orderByTasParent($order = Criteria::ASC) Order by the TAS_PARENT column
 * @method     SubProcessQuery orderBySpType($order = Criteria::ASC) Order by the SP_TYPE column
 * @method     SubProcessQuery orderBySpSynchronous($order = Criteria::ASC) Order by the SP_SYNCHRONOUS column
 * @method     SubProcessQuery orderBySpSynchronousType($order = Criteria::ASC) Order by the SP_SYNCHRONOUS_TYPE column
 * @method     SubProcessQuery orderBySpSynchronousWait($order = Criteria::ASC) Order by the SP_SYNCHRONOUS_WAIT column
 * @method     SubProcessQuery orderBySpVariablesOut($order = Criteria::ASC) Order by the SP_VARIABLES_OUT column
 * @method     SubProcessQuery orderBySpVariablesIn($order = Criteria::ASC) Order by the SP_VARIABLES_IN column
 * @method     SubProcessQuery orderBySpGridIn($order = Criteria::ASC) Order by the SP_GRID_IN column
 *
 * @method     SubProcessQuery groupBySpUid() Group by the SP_UID column
 * @method     SubProcessQuery groupByProUid() Group by the PRO_UID column
 * @method     SubProcessQuery groupByTasUid() Group by the TAS_UID column
 * @method     SubProcessQuery groupByProParent() Group by the PRO_PARENT column
 * @method     SubProcessQuery groupByTasParent() Group by the TAS_PARENT column
 * @method     SubProcessQuery groupBySpType() Group by the SP_TYPE column
 * @method     SubProcessQuery groupBySpSynchronous() Group by the SP_SYNCHRONOUS column
 * @method     SubProcessQuery groupBySpSynchronousType() Group by the SP_SYNCHRONOUS_TYPE column
 * @method     SubProcessQuery groupBySpSynchronousWait() Group by the SP_SYNCHRONOUS_WAIT column
 * @method     SubProcessQuery groupBySpVariablesOut() Group by the SP_VARIABLES_OUT column
 * @method     SubProcessQuery groupBySpVariablesIn() Group by the SP_VARIABLES_IN column
 * @method     SubProcessQuery groupBySpGridIn() Group by the SP_GRID_IN column
 *
 * @method     SubProcessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SubProcessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SubProcessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SubProcess findOne(PropelPDO $con = null) Return the first SubProcess matching the query
 * @method     SubProcess findOneOrCreate(PropelPDO $con = null) Return the first SubProcess matching the query, or a new SubProcess object populated from the query conditions when no match is found
 *
 * @method     SubProcess findOneBySpUid(string $SP_UID) Return the first SubProcess filtered by the SP_UID column
 * @method     SubProcess findOneByProUid(string $PRO_UID) Return the first SubProcess filtered by the PRO_UID column
 * @method     SubProcess findOneByTasUid(string $TAS_UID) Return the first SubProcess filtered by the TAS_UID column
 * @method     SubProcess findOneByProParent(string $PRO_PARENT) Return the first SubProcess filtered by the PRO_PARENT column
 * @method     SubProcess findOneByTasParent(string $TAS_PARENT) Return the first SubProcess filtered by the TAS_PARENT column
 * @method     SubProcess findOneBySpType(string $SP_TYPE) Return the first SubProcess filtered by the SP_TYPE column
 * @method     SubProcess findOneBySpSynchronous(int $SP_SYNCHRONOUS) Return the first SubProcess filtered by the SP_SYNCHRONOUS column
 * @method     SubProcess findOneBySpSynchronousType(string $SP_SYNCHRONOUS_TYPE) Return the first SubProcess filtered by the SP_SYNCHRONOUS_TYPE column
 * @method     SubProcess findOneBySpSynchronousWait(int $SP_SYNCHRONOUS_WAIT) Return the first SubProcess filtered by the SP_SYNCHRONOUS_WAIT column
 * @method     SubProcess findOneBySpVariablesOut(string $SP_VARIABLES_OUT) Return the first SubProcess filtered by the SP_VARIABLES_OUT column
 * @method     SubProcess findOneBySpVariablesIn(string $SP_VARIABLES_IN) Return the first SubProcess filtered by the SP_VARIABLES_IN column
 * @method     SubProcess findOneBySpGridIn(string $SP_GRID_IN) Return the first SubProcess filtered by the SP_GRID_IN column
 *
 * @method     array findBySpUid(string $SP_UID) Return SubProcess objects filtered by the SP_UID column
 * @method     array findByProUid(string $PRO_UID) Return SubProcess objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return SubProcess objects filtered by the TAS_UID column
 * @method     array findByProParent(string $PRO_PARENT) Return SubProcess objects filtered by the PRO_PARENT column
 * @method     array findByTasParent(string $TAS_PARENT) Return SubProcess objects filtered by the TAS_PARENT column
 * @method     array findBySpType(string $SP_TYPE) Return SubProcess objects filtered by the SP_TYPE column
 * @method     array findBySpSynchronous(int $SP_SYNCHRONOUS) Return SubProcess objects filtered by the SP_SYNCHRONOUS column
 * @method     array findBySpSynchronousType(string $SP_SYNCHRONOUS_TYPE) Return SubProcess objects filtered by the SP_SYNCHRONOUS_TYPE column
 * @method     array findBySpSynchronousWait(int $SP_SYNCHRONOUS_WAIT) Return SubProcess objects filtered by the SP_SYNCHRONOUS_WAIT column
 * @method     array findBySpVariablesOut(string $SP_VARIABLES_OUT) Return SubProcess objects filtered by the SP_VARIABLES_OUT column
 * @method     array findBySpVariablesIn(string $SP_VARIABLES_IN) Return SubProcess objects filtered by the SP_VARIABLES_IN column
 * @method     array findBySpGridIn(string $SP_GRID_IN) Return SubProcess objects filtered by the SP_GRID_IN column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSubProcessQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSubProcessQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'SubProcess', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SubProcessQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SubProcessQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SubProcessQuery) {
            return $criteria;
        }
        $query = new SubProcessQuery();
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
     * @return    SubProcess|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SubProcessPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(SubProcessPeer::SP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(SubProcessPeer::SP_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySpUid('fooValue');   // WHERE SP_UID = 'fooValue'
     * $query->filterBySpUid('%fooValue%'); // WHERE SP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpUid($spUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spUid)) {
                $spUid = str_replace('*', '%', $spUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_UID, $spUid, $comparison);
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
     * @return    SubProcessQuery The current query, for fluid interface
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
        return $this->addUsingAlias(SubProcessPeer::PRO_UID, $proUid, $comparison);
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
     * @return    SubProcessQuery The current query, for fluid interface
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
        return $this->addUsingAlias(SubProcessPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the PRO_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByProParent('fooValue');   // WHERE PRO_PARENT = 'fooValue'
     * $query->filterByProParent('%fooValue%'); // WHERE PRO_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterByProParent($proParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proParent)) {
                $proParent = str_replace('*', '%', $proParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::PRO_PARENT, $proParent, $comparison);
    }

    /**
     * Filter the query on the TAS_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByTasParent('fooValue');   // WHERE TAS_PARENT = 'fooValue'
     * $query->filterByTasParent('%fooValue%'); // WHERE TAS_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterByTasParent($tasParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasParent)) {
                $tasParent = str_replace('*', '%', $tasParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::TAS_PARENT, $tasParent, $comparison);
    }

    /**
     * Filter the query on the SP_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterBySpType('fooValue');   // WHERE SP_TYPE = 'fooValue'
     * $query->filterBySpType('%fooValue%'); // WHERE SP_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpType($spType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spType)) {
                $spType = str_replace('*', '%', $spType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_TYPE, $spType, $comparison);
    }

    /**
     * Filter the query on the SP_SYNCHRONOUS column
     *
     * Example usage:
     * <code>
     * $query->filterBySpSynchronous(1234); // WHERE SP_SYNCHRONOUS = 1234
     * $query->filterBySpSynchronous(array(12, 34)); // WHERE SP_SYNCHRONOUS IN (12, 34)
     * $query->filterBySpSynchronous(array('min' => 12)); // WHERE SP_SYNCHRONOUS > 12
     * </code>
     *
     * @param     mixed $spSynchronous The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpSynchronous($spSynchronous = null, $comparison = null)
    {
        if (is_array($spSynchronous)) {
            $useMinMax = false;
            if (isset($spSynchronous['min'])) {
                $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS, $spSynchronous['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spSynchronous['max'])) {
                $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS, $spSynchronous['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS, $spSynchronous, $comparison);
    }

    /**
     * Filter the query on the SP_SYNCHRONOUS_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterBySpSynchronousType('fooValue');   // WHERE SP_SYNCHRONOUS_TYPE = 'fooValue'
     * $query->filterBySpSynchronousType('%fooValue%'); // WHERE SP_SYNCHRONOUS_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spSynchronousType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpSynchronousType($spSynchronousType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spSynchronousType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spSynchronousType)) {
                $spSynchronousType = str_replace('*', '%', $spSynchronousType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS_TYPE, $spSynchronousType, $comparison);
    }

    /**
     * Filter the query on the SP_SYNCHRONOUS_WAIT column
     *
     * Example usage:
     * <code>
     * $query->filterBySpSynchronousWait(1234); // WHERE SP_SYNCHRONOUS_WAIT = 1234
     * $query->filterBySpSynchronousWait(array(12, 34)); // WHERE SP_SYNCHRONOUS_WAIT IN (12, 34)
     * $query->filterBySpSynchronousWait(array('min' => 12)); // WHERE SP_SYNCHRONOUS_WAIT > 12
     * </code>
     *
     * @param     mixed $spSynchronousWait The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpSynchronousWait($spSynchronousWait = null, $comparison = null)
    {
        if (is_array($spSynchronousWait)) {
            $useMinMax = false;
            if (isset($spSynchronousWait['min'])) {
                $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS_WAIT, $spSynchronousWait['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spSynchronousWait['max'])) {
                $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS_WAIT, $spSynchronousWait['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_SYNCHRONOUS_WAIT, $spSynchronousWait, $comparison);
    }

    /**
     * Filter the query on the SP_VARIABLES_OUT column
     *
     * Example usage:
     * <code>
     * $query->filterBySpVariablesOut('fooValue');   // WHERE SP_VARIABLES_OUT = 'fooValue'
     * $query->filterBySpVariablesOut('%fooValue%'); // WHERE SP_VARIABLES_OUT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spVariablesOut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpVariablesOut($spVariablesOut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spVariablesOut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spVariablesOut)) {
                $spVariablesOut = str_replace('*', '%', $spVariablesOut);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_VARIABLES_OUT, $spVariablesOut, $comparison);
    }

    /**
     * Filter the query on the SP_VARIABLES_IN column
     *
     * Example usage:
     * <code>
     * $query->filterBySpVariablesIn('fooValue');   // WHERE SP_VARIABLES_IN = 'fooValue'
     * $query->filterBySpVariablesIn('%fooValue%'); // WHERE SP_VARIABLES_IN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spVariablesIn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpVariablesIn($spVariablesIn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spVariablesIn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spVariablesIn)) {
                $spVariablesIn = str_replace('*', '%', $spVariablesIn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_VARIABLES_IN, $spVariablesIn, $comparison);
    }

    /**
     * Filter the query on the SP_GRID_IN column
     *
     * Example usage:
     * <code>
     * $query->filterBySpGridIn('fooValue');   // WHERE SP_GRID_IN = 'fooValue'
     * $query->filterBySpGridIn('%fooValue%'); // WHERE SP_GRID_IN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spGridIn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function filterBySpGridIn($spGridIn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spGridIn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spGridIn)) {
                $spGridIn = str_replace('*', '%', $spGridIn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubProcessPeer::SP_GRID_IN, $spGridIn, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     SubProcess $subProcess Object to remove from the list of results
     *
     * @return    SubProcessQuery The current query, for fluid interface
     */
    public function prune($subProcess = null)
    {
        if ($subProcess) {
            $this->addUsingAlias(SubProcessPeer::SP_UID, $subProcess->getSpUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSubProcessQuery