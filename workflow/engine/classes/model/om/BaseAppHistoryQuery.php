<?php


/**
 * Base class that represents a query for the 'APP_HISTORY' table.
 *
 * 
 *
 * @method     AppHistoryQuery orderByHistoryUid($order = Criteria::ASC) Order by the HISTORY_UID column
 * @method     AppHistoryQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppHistoryQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 * @method     AppHistoryQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     AppHistoryQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     AppHistoryQuery orderByDynUid($order = Criteria::ASC) Order by the DYN_UID column
 * @method     AppHistoryQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     AppHistoryQuery orderByAppStatus($order = Criteria::ASC) Order by the APP_STATUS column
 * @method     AppHistoryQuery orderByHistoryDate($order = Criteria::ASC) Order by the HISTORY_DATE column
 * @method     AppHistoryQuery orderByHistoryData($order = Criteria::ASC) Order by the HISTORY_DATA column
 *
 * @method     AppHistoryQuery groupByHistoryUid() Group by the HISTORY_UID column
 * @method     AppHistoryQuery groupByAppUid() Group by the APP_UID column
 * @method     AppHistoryQuery groupByDelIndex() Group by the DEL_INDEX column
 * @method     AppHistoryQuery groupByProUid() Group by the PRO_UID column
 * @method     AppHistoryQuery groupByTasUid() Group by the TAS_UID column
 * @method     AppHistoryQuery groupByDynUid() Group by the DYN_UID column
 * @method     AppHistoryQuery groupByUsrUid() Group by the USR_UID column
 * @method     AppHistoryQuery groupByAppStatus() Group by the APP_STATUS column
 * @method     AppHistoryQuery groupByHistoryDate() Group by the HISTORY_DATE column
 * @method     AppHistoryQuery groupByHistoryData() Group by the HISTORY_DATA column
 *
 * @method     AppHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppHistory findOne(PropelPDO $con = null) Return the first AppHistory matching the query
 * @method     AppHistory findOneOrCreate(PropelPDO $con = null) Return the first AppHistory matching the query, or a new AppHistory object populated from the query conditions when no match is found
 *
 * @method     AppHistory findOneByHistoryUid(int $HISTORY_UID) Return the first AppHistory filtered by the HISTORY_UID column
 * @method     AppHistory findOneByAppUid(string $APP_UID) Return the first AppHistory filtered by the APP_UID column
 * @method     AppHistory findOneByDelIndex(int $DEL_INDEX) Return the first AppHistory filtered by the DEL_INDEX column
 * @method     AppHistory findOneByProUid(string $PRO_UID) Return the first AppHistory filtered by the PRO_UID column
 * @method     AppHistory findOneByTasUid(string $TAS_UID) Return the first AppHistory filtered by the TAS_UID column
 * @method     AppHistory findOneByDynUid(string $DYN_UID) Return the first AppHistory filtered by the DYN_UID column
 * @method     AppHistory findOneByUsrUid(string $USR_UID) Return the first AppHistory filtered by the USR_UID column
 * @method     AppHistory findOneByAppStatus(string $APP_STATUS) Return the first AppHistory filtered by the APP_STATUS column
 * @method     AppHistory findOneByHistoryDate(string $HISTORY_DATE) Return the first AppHistory filtered by the HISTORY_DATE column
 * @method     AppHistory findOneByHistoryData(string $HISTORY_DATA) Return the first AppHistory filtered by the HISTORY_DATA column
 *
 * @method     array findByHistoryUid(int $HISTORY_UID) Return AppHistory objects filtered by the HISTORY_UID column
 * @method     array findByAppUid(string $APP_UID) Return AppHistory objects filtered by the APP_UID column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppHistory objects filtered by the DEL_INDEX column
 * @method     array findByProUid(string $PRO_UID) Return AppHistory objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return AppHistory objects filtered by the TAS_UID column
 * @method     array findByDynUid(string $DYN_UID) Return AppHistory objects filtered by the DYN_UID column
 * @method     array findByUsrUid(string $USR_UID) Return AppHistory objects filtered by the USR_UID column
 * @method     array findByAppStatus(string $APP_STATUS) Return AppHistory objects filtered by the APP_STATUS column
 * @method     array findByHistoryDate(string $HISTORY_DATE) Return AppHistory objects filtered by the HISTORY_DATE column
 * @method     array findByHistoryData(string $HISTORY_DATA) Return AppHistory objects filtered by the HISTORY_DATA column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppHistoryQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppHistoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppHistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppHistoryQuery) {
            return $criteria;
        }
        $query = new AppHistoryQuery();
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
     * @return    AppHistory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppHistoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AppHistoryPeer::HISTORY_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AppHistoryPeer::HISTORY_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the HISTORY_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoryUid(1234); // WHERE HISTORY_UID = 1234
     * $query->filterByHistoryUid(array(12, 34)); // WHERE HISTORY_UID IN (12, 34)
     * $query->filterByHistoryUid(array('min' => 12)); // WHERE HISTORY_UID > 12
     * </code>
     *
     * @param     mixed $historyUid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByHistoryUid($historyUid = null, $comparison = null)
    {
        if (is_array($historyUid) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppHistoryPeer::HISTORY_UID, $historyUid, $comparison);
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
     * @return    AppHistoryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppHistoryPeer::APP_UID, $appUid, $comparison);
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
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex)) {
            $useMinMax = false;
            if (isset($delIndex['min'])) {
                $this->addUsingAlias(AppHistoryPeer::DEL_INDEX, $delIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delIndex['max'])) {
                $this->addUsingAlias(AppHistoryPeer::DEL_INDEX, $delIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppHistoryPeer::DEL_INDEX, $delIndex, $comparison);
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
     * @return    AppHistoryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppHistoryPeer::PRO_UID, $proUid, $comparison);
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
     * @return    AppHistoryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppHistoryPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the DYN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDynUid('fooValue');   // WHERE DYN_UID = 'fooValue'
     * $query->filterByDynUid('%fooValue%'); // WHERE DYN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dynUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByDynUid($dynUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dynUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dynUid)) {
                $dynUid = str_replace('*', '%', $dynUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppHistoryPeer::DYN_UID, $dynUid, $comparison);
    }

    /**
     * Filter the query on the USR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUid('fooValue');   // WHERE USR_UID = 'fooValue'
     * $query->filterByUsrUid('%fooValue%'); // WHERE USR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByUsrUid($usrUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrUid)) {
                $usrUid = str_replace('*', '%', $usrUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppHistoryPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the APP_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppStatus('fooValue');   // WHERE APP_STATUS = 'fooValue'
     * $query->filterByAppStatus('%fooValue%'); // WHERE APP_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByAppStatus($appStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appStatus)) {
                $appStatus = str_replace('*', '%', $appStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppHistoryPeer::APP_STATUS, $appStatus, $comparison);
    }

    /**
     * Filter the query on the HISTORY_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoryDate('2011-03-14'); // WHERE HISTORY_DATE = '2011-03-14'
     * $query->filterByHistoryDate('now'); // WHERE HISTORY_DATE = '2011-03-14'
     * $query->filterByHistoryDate(array('max' => 'yesterday')); // WHERE HISTORY_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $historyDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByHistoryDate($historyDate = null, $comparison = null)
    {
        if (is_array($historyDate)) {
            $useMinMax = false;
            if (isset($historyDate['min'])) {
                $this->addUsingAlias(AppHistoryPeer::HISTORY_DATE, $historyDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($historyDate['max'])) {
                $this->addUsingAlias(AppHistoryPeer::HISTORY_DATE, $historyDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppHistoryPeer::HISTORY_DATE, $historyDate, $comparison);
    }

    /**
     * Filter the query on the HISTORY_DATA column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoryData('fooValue');   // WHERE HISTORY_DATA = 'fooValue'
     * $query->filterByHistoryData('%fooValue%'); // WHERE HISTORY_DATA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $historyData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function filterByHistoryData($historyData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($historyData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $historyData)) {
                $historyData = str_replace('*', '%', $historyData);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppHistoryPeer::HISTORY_DATA, $historyData, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppHistory $appHistory Object to remove from the list of results
     *
     * @return    AppHistoryQuery The current query, for fluid interface
     */
    public function prune($appHistory = null)
    {
        if ($appHistory) {
            $this->addUsingAlias(AppHistoryPeer::HISTORY_UID, $appHistory->getHistoryUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAppHistoryQuery