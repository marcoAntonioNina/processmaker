<?php


/**
 * Base class that represents a query for the 'SUB_APPLICATION' table.
 *
 * 
 *
 * @method     SubApplicationQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     SubApplicationQuery orderByAppParent($order = Criteria::ASC) Order by the APP_PARENT column
 * @method     SubApplicationQuery orderByDelIndexParent($order = Criteria::ASC) Order by the DEL_INDEX_PARENT column
 * @method     SubApplicationQuery orderByDelThreadParent($order = Criteria::ASC) Order by the DEL_THREAD_PARENT column
 * @method     SubApplicationQuery orderBySaStatus($order = Criteria::ASC) Order by the SA_STATUS column
 * @method     SubApplicationQuery orderBySaValuesOut($order = Criteria::ASC) Order by the SA_VALUES_OUT column
 * @method     SubApplicationQuery orderBySaValuesIn($order = Criteria::ASC) Order by the SA_VALUES_IN column
 * @method     SubApplicationQuery orderBySaInitDate($order = Criteria::ASC) Order by the SA_INIT_DATE column
 * @method     SubApplicationQuery orderBySaFinishDate($order = Criteria::ASC) Order by the SA_FINISH_DATE column
 *
 * @method     SubApplicationQuery groupByAppUid() Group by the APP_UID column
 * @method     SubApplicationQuery groupByAppParent() Group by the APP_PARENT column
 * @method     SubApplicationQuery groupByDelIndexParent() Group by the DEL_INDEX_PARENT column
 * @method     SubApplicationQuery groupByDelThreadParent() Group by the DEL_THREAD_PARENT column
 * @method     SubApplicationQuery groupBySaStatus() Group by the SA_STATUS column
 * @method     SubApplicationQuery groupBySaValuesOut() Group by the SA_VALUES_OUT column
 * @method     SubApplicationQuery groupBySaValuesIn() Group by the SA_VALUES_IN column
 * @method     SubApplicationQuery groupBySaInitDate() Group by the SA_INIT_DATE column
 * @method     SubApplicationQuery groupBySaFinishDate() Group by the SA_FINISH_DATE column
 *
 * @method     SubApplicationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SubApplicationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SubApplicationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SubApplication findOne(PropelPDO $con = null) Return the first SubApplication matching the query
 * @method     SubApplication findOneOrCreate(PropelPDO $con = null) Return the first SubApplication matching the query, or a new SubApplication object populated from the query conditions when no match is found
 *
 * @method     SubApplication findOneByAppUid(string $APP_UID) Return the first SubApplication filtered by the APP_UID column
 * @method     SubApplication findOneByAppParent(string $APP_PARENT) Return the first SubApplication filtered by the APP_PARENT column
 * @method     SubApplication findOneByDelIndexParent(int $DEL_INDEX_PARENT) Return the first SubApplication filtered by the DEL_INDEX_PARENT column
 * @method     SubApplication findOneByDelThreadParent(int $DEL_THREAD_PARENT) Return the first SubApplication filtered by the DEL_THREAD_PARENT column
 * @method     SubApplication findOneBySaStatus(string $SA_STATUS) Return the first SubApplication filtered by the SA_STATUS column
 * @method     SubApplication findOneBySaValuesOut(string $SA_VALUES_OUT) Return the first SubApplication filtered by the SA_VALUES_OUT column
 * @method     SubApplication findOneBySaValuesIn(string $SA_VALUES_IN) Return the first SubApplication filtered by the SA_VALUES_IN column
 * @method     SubApplication findOneBySaInitDate(string $SA_INIT_DATE) Return the first SubApplication filtered by the SA_INIT_DATE column
 * @method     SubApplication findOneBySaFinishDate(string $SA_FINISH_DATE) Return the first SubApplication filtered by the SA_FINISH_DATE column
 *
 * @method     array findByAppUid(string $APP_UID) Return SubApplication objects filtered by the APP_UID column
 * @method     array findByAppParent(string $APP_PARENT) Return SubApplication objects filtered by the APP_PARENT column
 * @method     array findByDelIndexParent(int $DEL_INDEX_PARENT) Return SubApplication objects filtered by the DEL_INDEX_PARENT column
 * @method     array findByDelThreadParent(int $DEL_THREAD_PARENT) Return SubApplication objects filtered by the DEL_THREAD_PARENT column
 * @method     array findBySaStatus(string $SA_STATUS) Return SubApplication objects filtered by the SA_STATUS column
 * @method     array findBySaValuesOut(string $SA_VALUES_OUT) Return SubApplication objects filtered by the SA_VALUES_OUT column
 * @method     array findBySaValuesIn(string $SA_VALUES_IN) Return SubApplication objects filtered by the SA_VALUES_IN column
 * @method     array findBySaInitDate(string $SA_INIT_DATE) Return SubApplication objects filtered by the SA_INIT_DATE column
 * @method     array findBySaFinishDate(string $SA_FINISH_DATE) Return SubApplication objects filtered by the SA_FINISH_DATE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSubApplicationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSubApplicationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'SubApplication', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SubApplicationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SubApplicationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SubApplicationQuery) {
            return $criteria;
        }
        $query = new SubApplicationQuery();
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
     * @param     array[$APP_UID, $APP_PARENT, $DEL_INDEX_PARENT, $DEL_THREAD_PARENT] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    SubApplication|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SubApplicationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SubApplicationPeer::APP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SubApplicationPeer::APP_PARENT, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SubApplicationPeer::DEL_INDEX_PARENT, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SubApplicationPeer::DEL_THREAD_PARENT, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SubApplicationPeer::APP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SubApplicationPeer::APP_PARENT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SubApplicationPeer::DEL_INDEX_PARENT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SubApplicationPeer::DEL_THREAD_PARENT, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the APP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUid('fooValue');   // WHERE APP_UID = 'fooValue'
     * $query->filterByAppUid('%fooValue%'); // WHERE APP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterByAppUid($appUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appUid)) {
                $appUid = str_replace('*', '%', $appUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the APP_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByAppParent('fooValue');   // WHERE APP_PARENT = 'fooValue'
     * $query->filterByAppParent('%fooValue%'); // WHERE APP_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterByAppParent($appParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appParent)) {
                $appParent = str_replace('*', '%', $appParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::APP_PARENT, $appParent, $comparison);
    }

    /**
     * Filter the query on the DEL_INDEX_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDelIndexParent(1234); // WHERE DEL_INDEX_PARENT = 1234
     * $query->filterByDelIndexParent(array(12, 34)); // WHERE DEL_INDEX_PARENT IN (12, 34)
     * $query->filterByDelIndexParent(array('min' => 12)); // WHERE DEL_INDEX_PARENT > 12
     * </code>
     *
     * @param     mixed $delIndexParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterByDelIndexParent($delIndexParent = null, $comparison = null)
    {
        if (is_array($delIndexParent) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(SubApplicationPeer::DEL_INDEX_PARENT, $delIndexParent, $comparison);
    }

    /**
     * Filter the query on the DEL_THREAD_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDelThreadParent(1234); // WHERE DEL_THREAD_PARENT = 1234
     * $query->filterByDelThreadParent(array(12, 34)); // WHERE DEL_THREAD_PARENT IN (12, 34)
     * $query->filterByDelThreadParent(array('min' => 12)); // WHERE DEL_THREAD_PARENT > 12
     * </code>
     *
     * @param     mixed $delThreadParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterByDelThreadParent($delThreadParent = null, $comparison = null)
    {
        if (is_array($delThreadParent) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(SubApplicationPeer::DEL_THREAD_PARENT, $delThreadParent, $comparison);
    }

    /**
     * Filter the query on the SA_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterBySaStatus('fooValue');   // WHERE SA_STATUS = 'fooValue'
     * $query->filterBySaStatus('%fooValue%'); // WHERE SA_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $saStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterBySaStatus($saStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($saStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $saStatus)) {
                $saStatus = str_replace('*', '%', $saStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::SA_STATUS, $saStatus, $comparison);
    }

    /**
     * Filter the query on the SA_VALUES_OUT column
     *
     * Example usage:
     * <code>
     * $query->filterBySaValuesOut('fooValue');   // WHERE SA_VALUES_OUT = 'fooValue'
     * $query->filterBySaValuesOut('%fooValue%'); // WHERE SA_VALUES_OUT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $saValuesOut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterBySaValuesOut($saValuesOut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($saValuesOut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $saValuesOut)) {
                $saValuesOut = str_replace('*', '%', $saValuesOut);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::SA_VALUES_OUT, $saValuesOut, $comparison);
    }

    /**
     * Filter the query on the SA_VALUES_IN column
     *
     * Example usage:
     * <code>
     * $query->filterBySaValuesIn('fooValue');   // WHERE SA_VALUES_IN = 'fooValue'
     * $query->filterBySaValuesIn('%fooValue%'); // WHERE SA_VALUES_IN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $saValuesIn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterBySaValuesIn($saValuesIn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($saValuesIn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $saValuesIn)) {
                $saValuesIn = str_replace('*', '%', $saValuesIn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::SA_VALUES_IN, $saValuesIn, $comparison);
    }

    /**
     * Filter the query on the SA_INIT_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySaInitDate('2011-03-14'); // WHERE SA_INIT_DATE = '2011-03-14'
     * $query->filterBySaInitDate('now'); // WHERE SA_INIT_DATE = '2011-03-14'
     * $query->filterBySaInitDate(array('max' => 'yesterday')); // WHERE SA_INIT_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $saInitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterBySaInitDate($saInitDate = null, $comparison = null)
    {
        if (is_array($saInitDate)) {
            $useMinMax = false;
            if (isset($saInitDate['min'])) {
                $this->addUsingAlias(SubApplicationPeer::SA_INIT_DATE, $saInitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saInitDate['max'])) {
                $this->addUsingAlias(SubApplicationPeer::SA_INIT_DATE, $saInitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::SA_INIT_DATE, $saInitDate, $comparison);
    }

    /**
     * Filter the query on the SA_FINISH_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySaFinishDate('2011-03-14'); // WHERE SA_FINISH_DATE = '2011-03-14'
     * $query->filterBySaFinishDate('now'); // WHERE SA_FINISH_DATE = '2011-03-14'
     * $query->filterBySaFinishDate(array('max' => 'yesterday')); // WHERE SA_FINISH_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $saFinishDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function filterBySaFinishDate($saFinishDate = null, $comparison = null)
    {
        if (is_array($saFinishDate)) {
            $useMinMax = false;
            if (isset($saFinishDate['min'])) {
                $this->addUsingAlias(SubApplicationPeer::SA_FINISH_DATE, $saFinishDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saFinishDate['max'])) {
                $this->addUsingAlias(SubApplicationPeer::SA_FINISH_DATE, $saFinishDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SubApplicationPeer::SA_FINISH_DATE, $saFinishDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     SubApplication $subApplication Object to remove from the list of results
     *
     * @return    SubApplicationQuery The current query, for fluid interface
     */
    public function prune($subApplication = null)
    {
        if ($subApplication) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SubApplicationPeer::APP_UID), $subApplication->getAppUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SubApplicationPeer::APP_PARENT), $subApplication->getAppParent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SubApplicationPeer::DEL_INDEX_PARENT), $subApplication->getDelIndexParent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SubApplicationPeer::DEL_THREAD_PARENT), $subApplication->getDelThreadParent(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseSubApplicationQuery