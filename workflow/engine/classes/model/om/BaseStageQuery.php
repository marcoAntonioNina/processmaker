<?php


/**
 * Base class that represents a query for the 'STAGE' table.
 *
 * 
 *
 * @method     StageQuery orderByStgUid($order = Criteria::ASC) Order by the STG_UID column
 * @method     StageQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     StageQuery orderByStgPosx($order = Criteria::ASC) Order by the STG_POSX column
 * @method     StageQuery orderByStgPosy($order = Criteria::ASC) Order by the STG_POSY column
 * @method     StageQuery orderByStgIndex($order = Criteria::ASC) Order by the STG_INDEX column
 *
 * @method     StageQuery groupByStgUid() Group by the STG_UID column
 * @method     StageQuery groupByProUid() Group by the PRO_UID column
 * @method     StageQuery groupByStgPosx() Group by the STG_POSX column
 * @method     StageQuery groupByStgPosy() Group by the STG_POSY column
 * @method     StageQuery groupByStgIndex() Group by the STG_INDEX column
 *
 * @method     StageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Stage findOne(PropelPDO $con = null) Return the first Stage matching the query
 * @method     Stage findOneOrCreate(PropelPDO $con = null) Return the first Stage matching the query, or a new Stage object populated from the query conditions when no match is found
 *
 * @method     Stage findOneByStgUid(string $STG_UID) Return the first Stage filtered by the STG_UID column
 * @method     Stage findOneByProUid(string $PRO_UID) Return the first Stage filtered by the PRO_UID column
 * @method     Stage findOneByStgPosx(int $STG_POSX) Return the first Stage filtered by the STG_POSX column
 * @method     Stage findOneByStgPosy(int $STG_POSY) Return the first Stage filtered by the STG_POSY column
 * @method     Stage findOneByStgIndex(int $STG_INDEX) Return the first Stage filtered by the STG_INDEX column
 *
 * @method     array findByStgUid(string $STG_UID) Return Stage objects filtered by the STG_UID column
 * @method     array findByProUid(string $PRO_UID) Return Stage objects filtered by the PRO_UID column
 * @method     array findByStgPosx(int $STG_POSX) Return Stage objects filtered by the STG_POSX column
 * @method     array findByStgPosy(int $STG_POSY) Return Stage objects filtered by the STG_POSY column
 * @method     array findByStgIndex(int $STG_INDEX) Return Stage objects filtered by the STG_INDEX column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseStageQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseStageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Stage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    StageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StageQuery) {
            return $criteria;
        }
        $query = new StageQuery();
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
     * @return    Stage|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = StagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    StageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(StagePeer::STG_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    StageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(StagePeer::STG_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the STG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByStgUid('fooValue');   // WHERE STG_UID = 'fooValue'
     * $query->filterByStgUid('%fooValue%'); // WHERE STG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stgUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StageQuery The current query, for fluid interface
     */
    public function filterByStgUid($stgUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stgUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stgUid)) {
                $stgUid = str_replace('*', '%', $stgUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StagePeer::STG_UID, $stgUid, $comparison);
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
     * @return    StageQuery The current query, for fluid interface
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
        return $this->addUsingAlias(StagePeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the STG_POSX column
     *
     * Example usage:
     * <code>
     * $query->filterByStgPosx(1234); // WHERE STG_POSX = 1234
     * $query->filterByStgPosx(array(12, 34)); // WHERE STG_POSX IN (12, 34)
     * $query->filterByStgPosx(array('min' => 12)); // WHERE STG_POSX > 12
     * </code>
     *
     * @param     mixed $stgPosx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StageQuery The current query, for fluid interface
     */
    public function filterByStgPosx($stgPosx = null, $comparison = null)
    {
        if (is_array($stgPosx)) {
            $useMinMax = false;
            if (isset($stgPosx['min'])) {
                $this->addUsingAlias(StagePeer::STG_POSX, $stgPosx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stgPosx['max'])) {
                $this->addUsingAlias(StagePeer::STG_POSX, $stgPosx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(StagePeer::STG_POSX, $stgPosx, $comparison);
    }

    /**
     * Filter the query on the STG_POSY column
     *
     * Example usage:
     * <code>
     * $query->filterByStgPosy(1234); // WHERE STG_POSY = 1234
     * $query->filterByStgPosy(array(12, 34)); // WHERE STG_POSY IN (12, 34)
     * $query->filterByStgPosy(array('min' => 12)); // WHERE STG_POSY > 12
     * </code>
     *
     * @param     mixed $stgPosy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StageQuery The current query, for fluid interface
     */
    public function filterByStgPosy($stgPosy = null, $comparison = null)
    {
        if (is_array($stgPosy)) {
            $useMinMax = false;
            if (isset($stgPosy['min'])) {
                $this->addUsingAlias(StagePeer::STG_POSY, $stgPosy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stgPosy['max'])) {
                $this->addUsingAlias(StagePeer::STG_POSY, $stgPosy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(StagePeer::STG_POSY, $stgPosy, $comparison);
    }

    /**
     * Filter the query on the STG_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByStgIndex(1234); // WHERE STG_INDEX = 1234
     * $query->filterByStgIndex(array(12, 34)); // WHERE STG_INDEX IN (12, 34)
     * $query->filterByStgIndex(array('min' => 12)); // WHERE STG_INDEX > 12
     * </code>
     *
     * @param     mixed $stgIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StageQuery The current query, for fluid interface
     */
    public function filterByStgIndex($stgIndex = null, $comparison = null)
    {
        if (is_array($stgIndex)) {
            $useMinMax = false;
            if (isset($stgIndex['min'])) {
                $this->addUsingAlias(StagePeer::STG_INDEX, $stgIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stgIndex['max'])) {
                $this->addUsingAlias(StagePeer::STG_INDEX, $stgIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(StagePeer::STG_INDEX, $stgIndex, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Stage $stage Object to remove from the list of results
     *
     * @return    StageQuery The current query, for fluid interface
     */
    public function prune($stage = null)
    {
        if ($stage) {
            $this->addUsingAlias(StagePeer::STG_UID, $stage->getStgUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseStageQuery