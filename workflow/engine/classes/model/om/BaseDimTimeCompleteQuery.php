<?php


/**
 * Base class that represents a query for the 'DIM_TIME_COMPLETE' table.
 *
 * 
 *
 * @method     DimTimeCompleteQuery orderByTimeId($order = Criteria::ASC) Order by the TIME_ID column
 * @method     DimTimeCompleteQuery orderByMonthId($order = Criteria::ASC) Order by the MONTH_ID column
 * @method     DimTimeCompleteQuery orderByQtrId($order = Criteria::ASC) Order by the QTR_ID column
 * @method     DimTimeCompleteQuery orderByYearId($order = Criteria::ASC) Order by the YEAR_ID column
 * @method     DimTimeCompleteQuery orderByMonthName($order = Criteria::ASC) Order by the MONTH_NAME column
 * @method     DimTimeCompleteQuery orderByMonthDesc($order = Criteria::ASC) Order by the MONTH_DESC column
 * @method     DimTimeCompleteQuery orderByQtrName($order = Criteria::ASC) Order by the QTR_NAME column
 * @method     DimTimeCompleteQuery orderByQtrDesc($order = Criteria::ASC) Order by the QTR_DESC column
 *
 * @method     DimTimeCompleteQuery groupByTimeId() Group by the TIME_ID column
 * @method     DimTimeCompleteQuery groupByMonthId() Group by the MONTH_ID column
 * @method     DimTimeCompleteQuery groupByQtrId() Group by the QTR_ID column
 * @method     DimTimeCompleteQuery groupByYearId() Group by the YEAR_ID column
 * @method     DimTimeCompleteQuery groupByMonthName() Group by the MONTH_NAME column
 * @method     DimTimeCompleteQuery groupByMonthDesc() Group by the MONTH_DESC column
 * @method     DimTimeCompleteQuery groupByQtrName() Group by the QTR_NAME column
 * @method     DimTimeCompleteQuery groupByQtrDesc() Group by the QTR_DESC column
 *
 * @method     DimTimeCompleteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DimTimeCompleteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DimTimeCompleteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DimTimeComplete findOne(PropelPDO $con = null) Return the first DimTimeComplete matching the query
 * @method     DimTimeComplete findOneOrCreate(PropelPDO $con = null) Return the first DimTimeComplete matching the query, or a new DimTimeComplete object populated from the query conditions when no match is found
 *
 * @method     DimTimeComplete findOneByTimeId(string $TIME_ID) Return the first DimTimeComplete filtered by the TIME_ID column
 * @method     DimTimeComplete findOneByMonthId(int $MONTH_ID) Return the first DimTimeComplete filtered by the MONTH_ID column
 * @method     DimTimeComplete findOneByQtrId(int $QTR_ID) Return the first DimTimeComplete filtered by the QTR_ID column
 * @method     DimTimeComplete findOneByYearId(int $YEAR_ID) Return the first DimTimeComplete filtered by the YEAR_ID column
 * @method     DimTimeComplete findOneByMonthName(string $MONTH_NAME) Return the first DimTimeComplete filtered by the MONTH_NAME column
 * @method     DimTimeComplete findOneByMonthDesc(string $MONTH_DESC) Return the first DimTimeComplete filtered by the MONTH_DESC column
 * @method     DimTimeComplete findOneByQtrName(string $QTR_NAME) Return the first DimTimeComplete filtered by the QTR_NAME column
 * @method     DimTimeComplete findOneByQtrDesc(string $QTR_DESC) Return the first DimTimeComplete filtered by the QTR_DESC column
 *
 * @method     array findByTimeId(string $TIME_ID) Return DimTimeComplete objects filtered by the TIME_ID column
 * @method     array findByMonthId(int $MONTH_ID) Return DimTimeComplete objects filtered by the MONTH_ID column
 * @method     array findByQtrId(int $QTR_ID) Return DimTimeComplete objects filtered by the QTR_ID column
 * @method     array findByYearId(int $YEAR_ID) Return DimTimeComplete objects filtered by the YEAR_ID column
 * @method     array findByMonthName(string $MONTH_NAME) Return DimTimeComplete objects filtered by the MONTH_NAME column
 * @method     array findByMonthDesc(string $MONTH_DESC) Return DimTimeComplete objects filtered by the MONTH_DESC column
 * @method     array findByQtrName(string $QTR_NAME) Return DimTimeComplete objects filtered by the QTR_NAME column
 * @method     array findByQtrDesc(string $QTR_DESC) Return DimTimeComplete objects filtered by the QTR_DESC column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDimTimeCompleteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDimTimeCompleteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'DimTimeComplete', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimTimeCompleteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    DimTimeCompleteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimTimeCompleteQuery) {
            return $criteria;
        }
        $query = new DimTimeCompleteQuery();
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
     * @return    DimTimeComplete|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = DimTimeCompletePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(DimTimeCompletePeer::TIME_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(DimTimeCompletePeer::TIME_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the TIME_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeId('fooValue');   // WHERE TIME_ID = 'fooValue'
     * $query->filterByTimeId('%fooValue%'); // WHERE TIME_ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByTimeId($timeId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timeId)) {
                $timeId = str_replace('*', '%', $timeId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::TIME_ID, $timeId, $comparison);
    }

    /**
     * Filter the query on the MONTH_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByMonthId(1234); // WHERE MONTH_ID = 1234
     * $query->filterByMonthId(array(12, 34)); // WHERE MONTH_ID IN (12, 34)
     * $query->filterByMonthId(array('min' => 12)); // WHERE MONTH_ID > 12
     * </code>
     *
     * @param     mixed $monthId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByMonthId($monthId = null, $comparison = null)
    {
        if (is_array($monthId)) {
            $useMinMax = false;
            if (isset($monthId['min'])) {
                $this->addUsingAlias(DimTimeCompletePeer::MONTH_ID, $monthId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($monthId['max'])) {
                $this->addUsingAlias(DimTimeCompletePeer::MONTH_ID, $monthId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::MONTH_ID, $monthId, $comparison);
    }

    /**
     * Filter the query on the QTR_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByQtrId(1234); // WHERE QTR_ID = 1234
     * $query->filterByQtrId(array(12, 34)); // WHERE QTR_ID IN (12, 34)
     * $query->filterByQtrId(array('min' => 12)); // WHERE QTR_ID > 12
     * </code>
     *
     * @param     mixed $qtrId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByQtrId($qtrId = null, $comparison = null)
    {
        if (is_array($qtrId)) {
            $useMinMax = false;
            if (isset($qtrId['min'])) {
                $this->addUsingAlias(DimTimeCompletePeer::QTR_ID, $qtrId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtrId['max'])) {
                $this->addUsingAlias(DimTimeCompletePeer::QTR_ID, $qtrId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::QTR_ID, $qtrId, $comparison);
    }

    /**
     * Filter the query on the YEAR_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByYearId(1234); // WHERE YEAR_ID = 1234
     * $query->filterByYearId(array(12, 34)); // WHERE YEAR_ID IN (12, 34)
     * $query->filterByYearId(array('min' => 12)); // WHERE YEAR_ID > 12
     * </code>
     *
     * @param     mixed $yearId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByYearId($yearId = null, $comparison = null)
    {
        if (is_array($yearId)) {
            $useMinMax = false;
            if (isset($yearId['min'])) {
                $this->addUsingAlias(DimTimeCompletePeer::YEAR_ID, $yearId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearId['max'])) {
                $this->addUsingAlias(DimTimeCompletePeer::YEAR_ID, $yearId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::YEAR_ID, $yearId, $comparison);
    }

    /**
     * Filter the query on the MONTH_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByMonthName('fooValue');   // WHERE MONTH_NAME = 'fooValue'
     * $query->filterByMonthName('%fooValue%'); // WHERE MONTH_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $monthName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByMonthName($monthName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($monthName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $monthName)) {
                $monthName = str_replace('*', '%', $monthName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::MONTH_NAME, $monthName, $comparison);
    }

    /**
     * Filter the query on the MONTH_DESC column
     *
     * Example usage:
     * <code>
     * $query->filterByMonthDesc('fooValue');   // WHERE MONTH_DESC = 'fooValue'
     * $query->filterByMonthDesc('%fooValue%'); // WHERE MONTH_DESC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $monthDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByMonthDesc($monthDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($monthDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $monthDesc)) {
                $monthDesc = str_replace('*', '%', $monthDesc);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::MONTH_DESC, $monthDesc, $comparison);
    }

    /**
     * Filter the query on the QTR_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByQtrName('fooValue');   // WHERE QTR_NAME = 'fooValue'
     * $query->filterByQtrName('%fooValue%'); // WHERE QTR_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qtrName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByQtrName($qtrName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtrName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qtrName)) {
                $qtrName = str_replace('*', '%', $qtrName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::QTR_NAME, $qtrName, $comparison);
    }

    /**
     * Filter the query on the QTR_DESC column
     *
     * Example usage:
     * <code>
     * $query->filterByQtrDesc('fooValue');   // WHERE QTR_DESC = 'fooValue'
     * $query->filterByQtrDesc('%fooValue%'); // WHERE QTR_DESC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qtrDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function filterByQtrDesc($qtrDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtrDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qtrDesc)) {
                $qtrDesc = str_replace('*', '%', $qtrDesc);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DimTimeCompletePeer::QTR_DESC, $qtrDesc, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     DimTimeComplete $dimTimeComplete Object to remove from the list of results
     *
     * @return    DimTimeCompleteQuery The current query, for fluid interface
     */
    public function prune($dimTimeComplete = null)
    {
        if ($dimTimeComplete) {
            $this->addUsingAlias(DimTimeCompletePeer::TIME_ID, $dimTimeComplete->getTimeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDimTimeCompleteQuery