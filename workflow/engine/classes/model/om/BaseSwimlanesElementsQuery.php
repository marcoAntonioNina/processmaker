<?php


/**
 * Base class that represents a query for the 'SWIMLANES_ELEMENTS' table.
 *
 * 
 *
 * @method     SwimlanesElementsQuery orderBySwiUid($order = Criteria::ASC) Order by the SWI_UID column
 * @method     SwimlanesElementsQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     SwimlanesElementsQuery orderBySwiType($order = Criteria::ASC) Order by the SWI_TYPE column
 * @method     SwimlanesElementsQuery orderBySwiX($order = Criteria::ASC) Order by the SWI_X column
 * @method     SwimlanesElementsQuery orderBySwiY($order = Criteria::ASC) Order by the SWI_Y column
 * @method     SwimlanesElementsQuery orderBySwiWidth($order = Criteria::ASC) Order by the SWI_WIDTH column
 * @method     SwimlanesElementsQuery orderBySwiHeight($order = Criteria::ASC) Order by the SWI_HEIGHT column
 * @method     SwimlanesElementsQuery orderBySwiNextUid($order = Criteria::ASC) Order by the SWI_NEXT_UID column
 *
 * @method     SwimlanesElementsQuery groupBySwiUid() Group by the SWI_UID column
 * @method     SwimlanesElementsQuery groupByProUid() Group by the PRO_UID column
 * @method     SwimlanesElementsQuery groupBySwiType() Group by the SWI_TYPE column
 * @method     SwimlanesElementsQuery groupBySwiX() Group by the SWI_X column
 * @method     SwimlanesElementsQuery groupBySwiY() Group by the SWI_Y column
 * @method     SwimlanesElementsQuery groupBySwiWidth() Group by the SWI_WIDTH column
 * @method     SwimlanesElementsQuery groupBySwiHeight() Group by the SWI_HEIGHT column
 * @method     SwimlanesElementsQuery groupBySwiNextUid() Group by the SWI_NEXT_UID column
 *
 * @method     SwimlanesElementsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SwimlanesElementsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SwimlanesElementsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SwimlanesElements findOne(PropelPDO $con = null) Return the first SwimlanesElements matching the query
 * @method     SwimlanesElements findOneOrCreate(PropelPDO $con = null) Return the first SwimlanesElements matching the query, or a new SwimlanesElements object populated from the query conditions when no match is found
 *
 * @method     SwimlanesElements findOneBySwiUid(string $SWI_UID) Return the first SwimlanesElements filtered by the SWI_UID column
 * @method     SwimlanesElements findOneByProUid(string $PRO_UID) Return the first SwimlanesElements filtered by the PRO_UID column
 * @method     SwimlanesElements findOneBySwiType(string $SWI_TYPE) Return the first SwimlanesElements filtered by the SWI_TYPE column
 * @method     SwimlanesElements findOneBySwiX(int $SWI_X) Return the first SwimlanesElements filtered by the SWI_X column
 * @method     SwimlanesElements findOneBySwiY(int $SWI_Y) Return the first SwimlanesElements filtered by the SWI_Y column
 * @method     SwimlanesElements findOneBySwiWidth(int $SWI_WIDTH) Return the first SwimlanesElements filtered by the SWI_WIDTH column
 * @method     SwimlanesElements findOneBySwiHeight(int $SWI_HEIGHT) Return the first SwimlanesElements filtered by the SWI_HEIGHT column
 * @method     SwimlanesElements findOneBySwiNextUid(string $SWI_NEXT_UID) Return the first SwimlanesElements filtered by the SWI_NEXT_UID column
 *
 * @method     array findBySwiUid(string $SWI_UID) Return SwimlanesElements objects filtered by the SWI_UID column
 * @method     array findByProUid(string $PRO_UID) Return SwimlanesElements objects filtered by the PRO_UID column
 * @method     array findBySwiType(string $SWI_TYPE) Return SwimlanesElements objects filtered by the SWI_TYPE column
 * @method     array findBySwiX(int $SWI_X) Return SwimlanesElements objects filtered by the SWI_X column
 * @method     array findBySwiY(int $SWI_Y) Return SwimlanesElements objects filtered by the SWI_Y column
 * @method     array findBySwiWidth(int $SWI_WIDTH) Return SwimlanesElements objects filtered by the SWI_WIDTH column
 * @method     array findBySwiHeight(int $SWI_HEIGHT) Return SwimlanesElements objects filtered by the SWI_HEIGHT column
 * @method     array findBySwiNextUid(string $SWI_NEXT_UID) Return SwimlanesElements objects filtered by the SWI_NEXT_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSwimlanesElementsQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSwimlanesElementsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'SwimlanesElements', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SwimlanesElementsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SwimlanesElementsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SwimlanesElementsQuery) {
            return $criteria;
        }
        $query = new SwimlanesElementsQuery();
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
     * @return    SwimlanesElements|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SwimlanesElementsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SWI_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiUid('fooValue');   // WHERE SWI_UID = 'fooValue'
     * $query->filterBySwiUid('%fooValue%'); // WHERE SWI_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swiUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiUid($swiUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swiUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swiUid)) {
                $swiUid = str_replace('*', '%', $swiUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_UID, $swiUid, $comparison);
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
     * @return    SwimlanesElementsQuery The current query, for fluid interface
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
        return $this->addUsingAlias(SwimlanesElementsPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the SWI_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiType('fooValue');   // WHERE SWI_TYPE = 'fooValue'
     * $query->filterBySwiType('%fooValue%'); // WHERE SWI_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swiType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiType($swiType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swiType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swiType)) {
                $swiType = str_replace('*', '%', $swiType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_TYPE, $swiType, $comparison);
    }

    /**
     * Filter the query on the SWI_X column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiX(1234); // WHERE SWI_X = 1234
     * $query->filterBySwiX(array(12, 34)); // WHERE SWI_X IN (12, 34)
     * $query->filterBySwiX(array('min' => 12)); // WHERE SWI_X > 12
     * </code>
     *
     * @param     mixed $swiX The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiX($swiX = null, $comparison = null)
    {
        if (is_array($swiX)) {
            $useMinMax = false;
            if (isset($swiX['min'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_X, $swiX['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swiX['max'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_X, $swiX['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_X, $swiX, $comparison);
    }

    /**
     * Filter the query on the SWI_Y column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiY(1234); // WHERE SWI_Y = 1234
     * $query->filterBySwiY(array(12, 34)); // WHERE SWI_Y IN (12, 34)
     * $query->filterBySwiY(array('min' => 12)); // WHERE SWI_Y > 12
     * </code>
     *
     * @param     mixed $swiY The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiY($swiY = null, $comparison = null)
    {
        if (is_array($swiY)) {
            $useMinMax = false;
            if (isset($swiY['min'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_Y, $swiY['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swiY['max'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_Y, $swiY['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_Y, $swiY, $comparison);
    }

    /**
     * Filter the query on the SWI_WIDTH column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiWidth(1234); // WHERE SWI_WIDTH = 1234
     * $query->filterBySwiWidth(array(12, 34)); // WHERE SWI_WIDTH IN (12, 34)
     * $query->filterBySwiWidth(array('min' => 12)); // WHERE SWI_WIDTH > 12
     * </code>
     *
     * @param     mixed $swiWidth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiWidth($swiWidth = null, $comparison = null)
    {
        if (is_array($swiWidth)) {
            $useMinMax = false;
            if (isset($swiWidth['min'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_WIDTH, $swiWidth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swiWidth['max'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_WIDTH, $swiWidth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_WIDTH, $swiWidth, $comparison);
    }

    /**
     * Filter the query on the SWI_HEIGHT column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiHeight(1234); // WHERE SWI_HEIGHT = 1234
     * $query->filterBySwiHeight(array(12, 34)); // WHERE SWI_HEIGHT IN (12, 34)
     * $query->filterBySwiHeight(array('min' => 12)); // WHERE SWI_HEIGHT > 12
     * </code>
     *
     * @param     mixed $swiHeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiHeight($swiHeight = null, $comparison = null)
    {
        if (is_array($swiHeight)) {
            $useMinMax = false;
            if (isset($swiHeight['min'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_HEIGHT, $swiHeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swiHeight['max'])) {
                $this->addUsingAlias(SwimlanesElementsPeer::SWI_HEIGHT, $swiHeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_HEIGHT, $swiHeight, $comparison);
    }

    /**
     * Filter the query on the SWI_NEXT_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySwiNextUid('fooValue');   // WHERE SWI_NEXT_UID = 'fooValue'
     * $query->filterBySwiNextUid('%fooValue%'); // WHERE SWI_NEXT_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swiNextUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function filterBySwiNextUid($swiNextUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swiNextUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swiNextUid)) {
                $swiNextUid = str_replace('*', '%', $swiNextUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SwimlanesElementsPeer::SWI_NEXT_UID, $swiNextUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     SwimlanesElements $swimlanesElements Object to remove from the list of results
     *
     * @return    SwimlanesElementsQuery The current query, for fluid interface
     */
    public function prune($swimlanesElements = null)
    {
        if ($swimlanesElements) {
            $this->addUsingAlias(SwimlanesElementsPeer::SWI_UID, $swimlanesElements->getSwiUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSwimlanesElementsQuery