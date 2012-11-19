<?php


/**
 * Base class that represents a query for the 'CASE_TRACKER_OBJECT' table.
 *
 * 
 *
 * @method     CaseTrackerObjectQuery orderByCtoUid($order = Criteria::ASC) Order by the CTO_UID column
 * @method     CaseTrackerObjectQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     CaseTrackerObjectQuery orderByCtoTypeObj($order = Criteria::ASC) Order by the CTO_TYPE_OBJ column
 * @method     CaseTrackerObjectQuery orderByCtoUidObj($order = Criteria::ASC) Order by the CTO_UID_OBJ column
 * @method     CaseTrackerObjectQuery orderByCtoCondition($order = Criteria::ASC) Order by the CTO_CONDITION column
 * @method     CaseTrackerObjectQuery orderByCtoPosition($order = Criteria::ASC) Order by the CTO_POSITION column
 *
 * @method     CaseTrackerObjectQuery groupByCtoUid() Group by the CTO_UID column
 * @method     CaseTrackerObjectQuery groupByProUid() Group by the PRO_UID column
 * @method     CaseTrackerObjectQuery groupByCtoTypeObj() Group by the CTO_TYPE_OBJ column
 * @method     CaseTrackerObjectQuery groupByCtoUidObj() Group by the CTO_UID_OBJ column
 * @method     CaseTrackerObjectQuery groupByCtoCondition() Group by the CTO_CONDITION column
 * @method     CaseTrackerObjectQuery groupByCtoPosition() Group by the CTO_POSITION column
 *
 * @method     CaseTrackerObjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CaseTrackerObjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CaseTrackerObjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CaseTrackerObject findOne(PropelPDO $con = null) Return the first CaseTrackerObject matching the query
 * @method     CaseTrackerObject findOneOrCreate(PropelPDO $con = null) Return the first CaseTrackerObject matching the query, or a new CaseTrackerObject object populated from the query conditions when no match is found
 *
 * @method     CaseTrackerObject findOneByCtoUid(string $CTO_UID) Return the first CaseTrackerObject filtered by the CTO_UID column
 * @method     CaseTrackerObject findOneByProUid(string $PRO_UID) Return the first CaseTrackerObject filtered by the PRO_UID column
 * @method     CaseTrackerObject findOneByCtoTypeObj(string $CTO_TYPE_OBJ) Return the first CaseTrackerObject filtered by the CTO_TYPE_OBJ column
 * @method     CaseTrackerObject findOneByCtoUidObj(string $CTO_UID_OBJ) Return the first CaseTrackerObject filtered by the CTO_UID_OBJ column
 * @method     CaseTrackerObject findOneByCtoCondition(string $CTO_CONDITION) Return the first CaseTrackerObject filtered by the CTO_CONDITION column
 * @method     CaseTrackerObject findOneByCtoPosition(int $CTO_POSITION) Return the first CaseTrackerObject filtered by the CTO_POSITION column
 *
 * @method     array findByCtoUid(string $CTO_UID) Return CaseTrackerObject objects filtered by the CTO_UID column
 * @method     array findByProUid(string $PRO_UID) Return CaseTrackerObject objects filtered by the PRO_UID column
 * @method     array findByCtoTypeObj(string $CTO_TYPE_OBJ) Return CaseTrackerObject objects filtered by the CTO_TYPE_OBJ column
 * @method     array findByCtoUidObj(string $CTO_UID_OBJ) Return CaseTrackerObject objects filtered by the CTO_UID_OBJ column
 * @method     array findByCtoCondition(string $CTO_CONDITION) Return CaseTrackerObject objects filtered by the CTO_CONDITION column
 * @method     array findByCtoPosition(int $CTO_POSITION) Return CaseTrackerObject objects filtered by the CTO_POSITION column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCaseTrackerObjectQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCaseTrackerObjectQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CaseTrackerObject', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CaseTrackerObjectQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CaseTrackerObjectQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CaseTrackerObjectQuery) {
            return $criteria;
        }
        $query = new CaseTrackerObjectQuery();
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
     * @return    CaseTrackerObject|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CaseTrackerObjectPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CTO_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByCtoUid('fooValue');   // WHERE CTO_UID = 'fooValue'
     * $query->filterByCtoUid('%fooValue%'); // WHERE CTO_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctoUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByCtoUid($ctoUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctoUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctoUid)) {
                $ctoUid = str_replace('*', '%', $ctoUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_UID, $ctoUid, $comparison);
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
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CaseTrackerObjectPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the CTO_TYPE_OBJ column
     *
     * Example usage:
     * <code>
     * $query->filterByCtoTypeObj('fooValue');   // WHERE CTO_TYPE_OBJ = 'fooValue'
     * $query->filterByCtoTypeObj('%fooValue%'); // WHERE CTO_TYPE_OBJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctoTypeObj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByCtoTypeObj($ctoTypeObj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctoTypeObj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctoTypeObj)) {
                $ctoTypeObj = str_replace('*', '%', $ctoTypeObj);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_TYPE_OBJ, $ctoTypeObj, $comparison);
    }

    /**
     * Filter the query on the CTO_UID_OBJ column
     *
     * Example usage:
     * <code>
     * $query->filterByCtoUidObj('fooValue');   // WHERE CTO_UID_OBJ = 'fooValue'
     * $query->filterByCtoUidObj('%fooValue%'); // WHERE CTO_UID_OBJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctoUidObj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByCtoUidObj($ctoUidObj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctoUidObj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctoUidObj)) {
                $ctoUidObj = str_replace('*', '%', $ctoUidObj);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_UID_OBJ, $ctoUidObj, $comparison);
    }

    /**
     * Filter the query on the CTO_CONDITION column
     *
     * Example usage:
     * <code>
     * $query->filterByCtoCondition('fooValue');   // WHERE CTO_CONDITION = 'fooValue'
     * $query->filterByCtoCondition('%fooValue%'); // WHERE CTO_CONDITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctoCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByCtoCondition($ctoCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctoCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctoCondition)) {
                $ctoCondition = str_replace('*', '%', $ctoCondition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_CONDITION, $ctoCondition, $comparison);
    }

    /**
     * Filter the query on the CTO_POSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByCtoPosition(1234); // WHERE CTO_POSITION = 1234
     * $query->filterByCtoPosition(array(12, 34)); // WHERE CTO_POSITION IN (12, 34)
     * $query->filterByCtoPosition(array('min' => 12)); // WHERE CTO_POSITION > 12
     * </code>
     *
     * @param     mixed $ctoPosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function filterByCtoPosition($ctoPosition = null, $comparison = null)
    {
        if (is_array($ctoPosition)) {
            $useMinMax = false;
            if (isset($ctoPosition['min'])) {
                $this->addUsingAlias(CaseTrackerObjectPeer::CTO_POSITION, $ctoPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctoPosition['max'])) {
                $this->addUsingAlias(CaseTrackerObjectPeer::CTO_POSITION, $ctoPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CaseTrackerObjectPeer::CTO_POSITION, $ctoPosition, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CaseTrackerObject $caseTrackerObject Object to remove from the list of results
     *
     * @return    CaseTrackerObjectQuery The current query, for fluid interface
     */
    public function prune($caseTrackerObject = null)
    {
        if ($caseTrackerObject) {
            $this->addUsingAlias(CaseTrackerObjectPeer::CTO_UID, $caseTrackerObject->getCtoUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCaseTrackerObjectQuery