<?php


/**
 * Base class that represents a query for the 'CASE_TRACKER' table.
 *
 * 
 *
 * @method     CaseTrackerQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     CaseTrackerQuery orderByCtMapType($order = Criteria::ASC) Order by the CT_MAP_TYPE column
 * @method     CaseTrackerQuery orderByCtDerivationHistory($order = Criteria::ASC) Order by the CT_DERIVATION_HISTORY column
 * @method     CaseTrackerQuery orderByCtMessageHistory($order = Criteria::ASC) Order by the CT_MESSAGE_HISTORY column
 *
 * @method     CaseTrackerQuery groupByProUid() Group by the PRO_UID column
 * @method     CaseTrackerQuery groupByCtMapType() Group by the CT_MAP_TYPE column
 * @method     CaseTrackerQuery groupByCtDerivationHistory() Group by the CT_DERIVATION_HISTORY column
 * @method     CaseTrackerQuery groupByCtMessageHistory() Group by the CT_MESSAGE_HISTORY column
 *
 * @method     CaseTrackerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CaseTrackerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CaseTrackerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CaseTracker findOne(PropelPDO $con = null) Return the first CaseTracker matching the query
 * @method     CaseTracker findOneOrCreate(PropelPDO $con = null) Return the first CaseTracker matching the query, or a new CaseTracker object populated from the query conditions when no match is found
 *
 * @method     CaseTracker findOneByProUid(string $PRO_UID) Return the first CaseTracker filtered by the PRO_UID column
 * @method     CaseTracker findOneByCtMapType(string $CT_MAP_TYPE) Return the first CaseTracker filtered by the CT_MAP_TYPE column
 * @method     CaseTracker findOneByCtDerivationHistory(int $CT_DERIVATION_HISTORY) Return the first CaseTracker filtered by the CT_DERIVATION_HISTORY column
 * @method     CaseTracker findOneByCtMessageHistory(int $CT_MESSAGE_HISTORY) Return the first CaseTracker filtered by the CT_MESSAGE_HISTORY column
 *
 * @method     array findByProUid(string $PRO_UID) Return CaseTracker objects filtered by the PRO_UID column
 * @method     array findByCtMapType(string $CT_MAP_TYPE) Return CaseTracker objects filtered by the CT_MAP_TYPE column
 * @method     array findByCtDerivationHistory(int $CT_DERIVATION_HISTORY) Return CaseTracker objects filtered by the CT_DERIVATION_HISTORY column
 * @method     array findByCtMessageHistory(int $CT_MESSAGE_HISTORY) Return CaseTracker objects filtered by the CT_MESSAGE_HISTORY column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCaseTrackerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCaseTrackerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CaseTracker', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CaseTrackerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CaseTrackerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CaseTrackerQuery) {
            return $criteria;
        }
        $query = new CaseTrackerQuery();
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
     * @return    CaseTracker|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CaseTrackerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CaseTrackerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CaseTrackerPeer::PRO_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CaseTrackerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CaseTrackerPeer::PRO_UID, $keys, Criteria::IN);
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
     * @return    CaseTrackerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CaseTrackerPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the CT_MAP_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByCtMapType('fooValue');   // WHERE CT_MAP_TYPE = 'fooValue'
     * $query->filterByCtMapType('%fooValue%'); // WHERE CT_MAP_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctMapType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerQuery The current query, for fluid interface
     */
    public function filterByCtMapType($ctMapType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctMapType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctMapType)) {
                $ctMapType = str_replace('*', '%', $ctMapType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseTrackerPeer::CT_MAP_TYPE, $ctMapType, $comparison);
    }

    /**
     * Filter the query on the CT_DERIVATION_HISTORY column
     *
     * Example usage:
     * <code>
     * $query->filterByCtDerivationHistory(1234); // WHERE CT_DERIVATION_HISTORY = 1234
     * $query->filterByCtDerivationHistory(array(12, 34)); // WHERE CT_DERIVATION_HISTORY IN (12, 34)
     * $query->filterByCtDerivationHistory(array('min' => 12)); // WHERE CT_DERIVATION_HISTORY > 12
     * </code>
     *
     * @param     mixed $ctDerivationHistory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerQuery The current query, for fluid interface
     */
    public function filterByCtDerivationHistory($ctDerivationHistory = null, $comparison = null)
    {
        if (is_array($ctDerivationHistory)) {
            $useMinMax = false;
            if (isset($ctDerivationHistory['min'])) {
                $this->addUsingAlias(CaseTrackerPeer::CT_DERIVATION_HISTORY, $ctDerivationHistory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctDerivationHistory['max'])) {
                $this->addUsingAlias(CaseTrackerPeer::CT_DERIVATION_HISTORY, $ctDerivationHistory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseTrackerPeer::CT_DERIVATION_HISTORY, $ctDerivationHistory, $comparison);
    }

    /**
     * Filter the query on the CT_MESSAGE_HISTORY column
     *
     * Example usage:
     * <code>
     * $query->filterByCtMessageHistory(1234); // WHERE CT_MESSAGE_HISTORY = 1234
     * $query->filterByCtMessageHistory(array(12, 34)); // WHERE CT_MESSAGE_HISTORY IN (12, 34)
     * $query->filterByCtMessageHistory(array('min' => 12)); // WHERE CT_MESSAGE_HISTORY > 12
     * </code>
     *
     * @param     mixed $ctMessageHistory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerQuery The current query, for fluid interface
     */
    public function filterByCtMessageHistory($ctMessageHistory = null, $comparison = null)
    {
        if (is_array($ctMessageHistory)) {
            $useMinMax = false;
            if (isset($ctMessageHistory['min'])) {
                $this->addUsingAlias(CaseTrackerPeer::CT_MESSAGE_HISTORY, $ctMessageHistory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctMessageHistory['max'])) {
                $this->addUsingAlias(CaseTrackerPeer::CT_MESSAGE_HISTORY, $ctMessageHistory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseTrackerPeer::CT_MESSAGE_HISTORY, $ctMessageHistory, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CaseTracker $caseTracker Object to remove from the list of results
     *
     * @return    CaseTrackerQuery The current query, for fluid interface
     */
    public function prune($caseTracker = null)
    {
        if ($caseTracker) {
            $this->addUsingAlias(CaseTrackerPeer::PRO_UID, $caseTracker->getProUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCaseTrackerQuery