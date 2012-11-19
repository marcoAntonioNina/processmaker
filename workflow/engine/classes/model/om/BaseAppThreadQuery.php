<?php


/**
 * Base class that represents a query for the 'APP_THREAD' table.
 *
 * 
 *
 * @method     AppThreadQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppThreadQuery orderByAppThreadIndex($order = Criteria::ASC) Order by the APP_THREAD_INDEX column
 * @method     AppThreadQuery orderByAppThreadParent($order = Criteria::ASC) Order by the APP_THREAD_PARENT column
 * @method     AppThreadQuery orderByAppThreadStatus($order = Criteria::ASC) Order by the APP_THREAD_STATUS column
 * @method     AppThreadQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 *
 * @method     AppThreadQuery groupByAppUid() Group by the APP_UID column
 * @method     AppThreadQuery groupByAppThreadIndex() Group by the APP_THREAD_INDEX column
 * @method     AppThreadQuery groupByAppThreadParent() Group by the APP_THREAD_PARENT column
 * @method     AppThreadQuery groupByAppThreadStatus() Group by the APP_THREAD_STATUS column
 * @method     AppThreadQuery groupByDelIndex() Group by the DEL_INDEX column
 *
 * @method     AppThreadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppThreadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppThreadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppThread findOne(PropelPDO $con = null) Return the first AppThread matching the query
 * @method     AppThread findOneOrCreate(PropelPDO $con = null) Return the first AppThread matching the query, or a new AppThread object populated from the query conditions when no match is found
 *
 * @method     AppThread findOneByAppUid(string $APP_UID) Return the first AppThread filtered by the APP_UID column
 * @method     AppThread findOneByAppThreadIndex(int $APP_THREAD_INDEX) Return the first AppThread filtered by the APP_THREAD_INDEX column
 * @method     AppThread findOneByAppThreadParent(int $APP_THREAD_PARENT) Return the first AppThread filtered by the APP_THREAD_PARENT column
 * @method     AppThread findOneByAppThreadStatus(string $APP_THREAD_STATUS) Return the first AppThread filtered by the APP_THREAD_STATUS column
 * @method     AppThread findOneByDelIndex(int $DEL_INDEX) Return the first AppThread filtered by the DEL_INDEX column
 *
 * @method     array findByAppUid(string $APP_UID) Return AppThread objects filtered by the APP_UID column
 * @method     array findByAppThreadIndex(int $APP_THREAD_INDEX) Return AppThread objects filtered by the APP_THREAD_INDEX column
 * @method     array findByAppThreadParent(int $APP_THREAD_PARENT) Return AppThread objects filtered by the APP_THREAD_PARENT column
 * @method     array findByAppThreadStatus(string $APP_THREAD_STATUS) Return AppThread objects filtered by the APP_THREAD_STATUS column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppThread objects filtered by the DEL_INDEX column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppThreadQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppThreadQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppThread', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppThreadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppThreadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppThreadQuery) {
            return $criteria;
        }
        $query = new AppThreadQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$APP_UID, $APP_THREAD_INDEX] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    AppThread|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppThreadPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AppThreadPeer::APP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AppThreadPeer::APP_THREAD_INDEX, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AppThreadPeer::APP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AppThreadPeer::APP_THREAD_INDEX, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @return    AppThreadQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppThreadPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the APP_THREAD_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByAppThreadIndex(1234); // WHERE APP_THREAD_INDEX = 1234
     * $query->filterByAppThreadIndex(array(12, 34)); // WHERE APP_THREAD_INDEX IN (12, 34)
     * $query->filterByAppThreadIndex(array('min' => 12)); // WHERE APP_THREAD_INDEX > 12
     * </code>
     *
     * @param     mixed $appThreadIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function filterByAppThreadIndex($appThreadIndex = null, $comparison = null)
    {
        if (is_array($appThreadIndex) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppThreadPeer::APP_THREAD_INDEX, $appThreadIndex, $comparison);
    }

    /**
     * Filter the query on the APP_THREAD_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByAppThreadParent(1234); // WHERE APP_THREAD_PARENT = 1234
     * $query->filterByAppThreadParent(array(12, 34)); // WHERE APP_THREAD_PARENT IN (12, 34)
     * $query->filterByAppThreadParent(array('min' => 12)); // WHERE APP_THREAD_PARENT > 12
     * </code>
     *
     * @param     mixed $appThreadParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function filterByAppThreadParent($appThreadParent = null, $comparison = null)
    {
        if (is_array($appThreadParent)) {
            $useMinMax = false;
            if (isset($appThreadParent['min'])) {
                $this->addUsingAlias(AppThreadPeer::APP_THREAD_PARENT, $appThreadParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appThreadParent['max'])) {
                $this->addUsingAlias(AppThreadPeer::APP_THREAD_PARENT, $appThreadParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppThreadPeer::APP_THREAD_PARENT, $appThreadParent, $comparison);
    }

    /**
     * Filter the query on the APP_THREAD_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppThreadStatus('fooValue');   // WHERE APP_THREAD_STATUS = 'fooValue'
     * $query->filterByAppThreadStatus('%fooValue%'); // WHERE APP_THREAD_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appThreadStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function filterByAppThreadStatus($appThreadStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appThreadStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appThreadStatus)) {
                $appThreadStatus = str_replace('*', '%', $appThreadStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppThreadPeer::APP_THREAD_STATUS, $appThreadStatus, $comparison);
    }

    /**
     * Filter the query on the DEL_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByDelIndex(1234); // WHERE DEL_INDEX = 1234
     * $query->filterByDelIndex(array(12, 34)); // WHERE DEL_INDEX IN (12, 34)
     * $query->filterByDelIndex(array('min' => 12)); // WHERE DEL_INDEX > 12
     * </code>
     *
     * @param     mixed $delIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex)) {
            $useMinMax = false;
            if (isset($delIndex['min'])) {
                $this->addUsingAlias(AppThreadPeer::DEL_INDEX, $delIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delIndex['max'])) {
                $this->addUsingAlias(AppThreadPeer::DEL_INDEX, $delIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppThreadPeer::DEL_INDEX, $delIndex, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppThread $appThread Object to remove from the list of results
     *
     * @return    AppThreadQuery The current query, for fluid interface
     */
    public function prune($appThread = null)
    {
        if ($appThread) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AppThreadPeer::APP_UID), $appThread->getAppUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AppThreadPeer::APP_THREAD_INDEX), $appThread->getAppThreadIndex(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseAppThreadQuery