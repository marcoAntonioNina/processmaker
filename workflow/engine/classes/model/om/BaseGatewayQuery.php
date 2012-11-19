<?php


/**
 * Base class that represents a query for the 'GATEWAY' table.
 *
 * 
 *
 * @method     GatewayQuery orderByGatUid($order = Criteria::ASC) Order by the GAT_UID column
 * @method     GatewayQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     GatewayQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     GatewayQuery orderByGatNextTask($order = Criteria::ASC) Order by the GAT_NEXT_TASK column
 * @method     GatewayQuery orderByGatX($order = Criteria::ASC) Order by the GAT_X column
 * @method     GatewayQuery orderByGatY($order = Criteria::ASC) Order by the GAT_Y column
 * @method     GatewayQuery orderByGatType($order = Criteria::ASC) Order by the GAT_TYPE column
 *
 * @method     GatewayQuery groupByGatUid() Group by the GAT_UID column
 * @method     GatewayQuery groupByProUid() Group by the PRO_UID column
 * @method     GatewayQuery groupByTasUid() Group by the TAS_UID column
 * @method     GatewayQuery groupByGatNextTask() Group by the GAT_NEXT_TASK column
 * @method     GatewayQuery groupByGatX() Group by the GAT_X column
 * @method     GatewayQuery groupByGatY() Group by the GAT_Y column
 * @method     GatewayQuery groupByGatType() Group by the GAT_TYPE column
 *
 * @method     GatewayQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GatewayQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GatewayQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Gateway findOne(PropelPDO $con = null) Return the first Gateway matching the query
 * @method     Gateway findOneOrCreate(PropelPDO $con = null) Return the first Gateway matching the query, or a new Gateway object populated from the query conditions when no match is found
 *
 * @method     Gateway findOneByGatUid(string $GAT_UID) Return the first Gateway filtered by the GAT_UID column
 * @method     Gateway findOneByProUid(string $PRO_UID) Return the first Gateway filtered by the PRO_UID column
 * @method     Gateway findOneByTasUid(string $TAS_UID) Return the first Gateway filtered by the TAS_UID column
 * @method     Gateway findOneByGatNextTask(string $GAT_NEXT_TASK) Return the first Gateway filtered by the GAT_NEXT_TASK column
 * @method     Gateway findOneByGatX(int $GAT_X) Return the first Gateway filtered by the GAT_X column
 * @method     Gateway findOneByGatY(int $GAT_Y) Return the first Gateway filtered by the GAT_Y column
 * @method     Gateway findOneByGatType(string $GAT_TYPE) Return the first Gateway filtered by the GAT_TYPE column
 *
 * @method     array findByGatUid(string $GAT_UID) Return Gateway objects filtered by the GAT_UID column
 * @method     array findByProUid(string $PRO_UID) Return Gateway objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return Gateway objects filtered by the TAS_UID column
 * @method     array findByGatNextTask(string $GAT_NEXT_TASK) Return Gateway objects filtered by the GAT_NEXT_TASK column
 * @method     array findByGatX(int $GAT_X) Return Gateway objects filtered by the GAT_X column
 * @method     array findByGatY(int $GAT_Y) Return Gateway objects filtered by the GAT_Y column
 * @method     array findByGatType(string $GAT_TYPE) Return Gateway objects filtered by the GAT_TYPE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseGatewayQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseGatewayQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Gateway', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GatewayQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    GatewayQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GatewayQuery) {
            return $criteria;
        }
        $query = new GatewayQuery();
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
     * @return    Gateway|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = GatewayPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(GatewayPeer::GAT_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(GatewayPeer::GAT_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GAT_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByGatUid('fooValue');   // WHERE GAT_UID = 'fooValue'
     * $query->filterByGatUid('%fooValue%'); // WHERE GAT_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gatUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByGatUid($gatUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gatUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gatUid)) {
                $gatUid = str_replace('*', '%', $gatUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GatewayPeer::GAT_UID, $gatUid, $comparison);
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
     * @return    GatewayQuery The current query, for fluid interface
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
        return $this->addUsingAlias(GatewayPeer::PRO_UID, $proUid, $comparison);
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
     * @return    GatewayQuery The current query, for fluid interface
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
        return $this->addUsingAlias(GatewayPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the GAT_NEXT_TASK column
     *
     * Example usage:
     * <code>
     * $query->filterByGatNextTask('fooValue');   // WHERE GAT_NEXT_TASK = 'fooValue'
     * $query->filterByGatNextTask('%fooValue%'); // WHERE GAT_NEXT_TASK LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gatNextTask The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByGatNextTask($gatNextTask = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gatNextTask)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gatNextTask)) {
                $gatNextTask = str_replace('*', '%', $gatNextTask);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GatewayPeer::GAT_NEXT_TASK, $gatNextTask, $comparison);
    }

    /**
     * Filter the query on the GAT_X column
     *
     * Example usage:
     * <code>
     * $query->filterByGatX(1234); // WHERE GAT_X = 1234
     * $query->filterByGatX(array(12, 34)); // WHERE GAT_X IN (12, 34)
     * $query->filterByGatX(array('min' => 12)); // WHERE GAT_X > 12
     * </code>
     *
     * @param     mixed $gatX The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByGatX($gatX = null, $comparison = null)
    {
        if (is_array($gatX)) {
            $useMinMax = false;
            if (isset($gatX['min'])) {
                $this->addUsingAlias(GatewayPeer::GAT_X, $gatX['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gatX['max'])) {
                $this->addUsingAlias(GatewayPeer::GAT_X, $gatX['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(GatewayPeer::GAT_X, $gatX, $comparison);
    }

    /**
     * Filter the query on the GAT_Y column
     *
     * Example usage:
     * <code>
     * $query->filterByGatY(1234); // WHERE GAT_Y = 1234
     * $query->filterByGatY(array(12, 34)); // WHERE GAT_Y IN (12, 34)
     * $query->filterByGatY(array('min' => 12)); // WHERE GAT_Y > 12
     * </code>
     *
     * @param     mixed $gatY The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByGatY($gatY = null, $comparison = null)
    {
        if (is_array($gatY)) {
            $useMinMax = false;
            if (isset($gatY['min'])) {
                $this->addUsingAlias(GatewayPeer::GAT_Y, $gatY['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gatY['max'])) {
                $this->addUsingAlias(GatewayPeer::GAT_Y, $gatY['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(GatewayPeer::GAT_Y, $gatY, $comparison);
    }

    /**
     * Filter the query on the GAT_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByGatType('fooValue');   // WHERE GAT_TYPE = 'fooValue'
     * $query->filterByGatType('%fooValue%'); // WHERE GAT_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gatType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function filterByGatType($gatType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gatType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gatType)) {
                $gatType = str_replace('*', '%', $gatType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GatewayPeer::GAT_TYPE, $gatType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Gateway $gateway Object to remove from the list of results
     *
     * @return    GatewayQuery The current query, for fluid interface
     */
    public function prune($gateway = null)
    {
        if ($gateway) {
            $this->addUsingAlias(GatewayPeer::GAT_UID, $gateway->getGatUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseGatewayQuery