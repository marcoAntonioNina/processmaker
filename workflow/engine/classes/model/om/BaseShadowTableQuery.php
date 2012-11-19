<?php


/**
 * Base class that represents a query for the 'SHADOW_TABLE' table.
 *
 * 
 *
 * @method     ShadowTableQuery orderByShdUid($order = Criteria::ASC) Order by the SHD_UID column
 * @method     ShadowTableQuery orderByAddTabUid($order = Criteria::ASC) Order by the ADD_TAB_UID column
 * @method     ShadowTableQuery orderByShdAction($order = Criteria::ASC) Order by the SHD_ACTION column
 * @method     ShadowTableQuery orderByShdDetails($order = Criteria::ASC) Order by the SHD_DETAILS column
 * @method     ShadowTableQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     ShadowTableQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     ShadowTableQuery orderByShdDate($order = Criteria::ASC) Order by the SHD_DATE column
 *
 * @method     ShadowTableQuery groupByShdUid() Group by the SHD_UID column
 * @method     ShadowTableQuery groupByAddTabUid() Group by the ADD_TAB_UID column
 * @method     ShadowTableQuery groupByShdAction() Group by the SHD_ACTION column
 * @method     ShadowTableQuery groupByShdDetails() Group by the SHD_DETAILS column
 * @method     ShadowTableQuery groupByUsrUid() Group by the USR_UID column
 * @method     ShadowTableQuery groupByAppUid() Group by the APP_UID column
 * @method     ShadowTableQuery groupByShdDate() Group by the SHD_DATE column
 *
 * @method     ShadowTableQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ShadowTableQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ShadowTableQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ShadowTable findOne(PropelPDO $con = null) Return the first ShadowTable matching the query
 * @method     ShadowTable findOneOrCreate(PropelPDO $con = null) Return the first ShadowTable matching the query, or a new ShadowTable object populated from the query conditions when no match is found
 *
 * @method     ShadowTable findOneByShdUid(string $SHD_UID) Return the first ShadowTable filtered by the SHD_UID column
 * @method     ShadowTable findOneByAddTabUid(string $ADD_TAB_UID) Return the first ShadowTable filtered by the ADD_TAB_UID column
 * @method     ShadowTable findOneByShdAction(string $SHD_ACTION) Return the first ShadowTable filtered by the SHD_ACTION column
 * @method     ShadowTable findOneByShdDetails(string $SHD_DETAILS) Return the first ShadowTable filtered by the SHD_DETAILS column
 * @method     ShadowTable findOneByUsrUid(string $USR_UID) Return the first ShadowTable filtered by the USR_UID column
 * @method     ShadowTable findOneByAppUid(string $APP_UID) Return the first ShadowTable filtered by the APP_UID column
 * @method     ShadowTable findOneByShdDate(string $SHD_DATE) Return the first ShadowTable filtered by the SHD_DATE column
 *
 * @method     array findByShdUid(string $SHD_UID) Return ShadowTable objects filtered by the SHD_UID column
 * @method     array findByAddTabUid(string $ADD_TAB_UID) Return ShadowTable objects filtered by the ADD_TAB_UID column
 * @method     array findByShdAction(string $SHD_ACTION) Return ShadowTable objects filtered by the SHD_ACTION column
 * @method     array findByShdDetails(string $SHD_DETAILS) Return ShadowTable objects filtered by the SHD_DETAILS column
 * @method     array findByUsrUid(string $USR_UID) Return ShadowTable objects filtered by the USR_UID column
 * @method     array findByAppUid(string $APP_UID) Return ShadowTable objects filtered by the APP_UID column
 * @method     array findByShdDate(string $SHD_DATE) Return ShadowTable objects filtered by the SHD_DATE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseShadowTableQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseShadowTableQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ShadowTable', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ShadowTableQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ShadowTableQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ShadowTableQuery) {
            return $criteria;
        }
        $query = new ShadowTableQuery();
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
     * @return    ShadowTable|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ShadowTablePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ShadowTablePeer::SHD_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ShadowTablePeer::SHD_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SHD_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByShdUid('fooValue');   // WHERE SHD_UID = 'fooValue'
     * $query->filterByShdUid('%fooValue%'); // WHERE SHD_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shdUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByShdUid($shdUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shdUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shdUid)) {
                $shdUid = str_replace('*', '%', $shdUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ShadowTablePeer::SHD_UID, $shdUid, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabUid('fooValue');   // WHERE ADD_TAB_UID = 'fooValue'
     * $query->filterByAddTabUid('%fooValue%'); // WHERE ADD_TAB_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByAddTabUid($addTabUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabUid)) {
                $addTabUid = str_replace('*', '%', $addTabUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ShadowTablePeer::ADD_TAB_UID, $addTabUid, $comparison);
    }

    /**
     * Filter the query on the SHD_ACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByShdAction('fooValue');   // WHERE SHD_ACTION = 'fooValue'
     * $query->filterByShdAction('%fooValue%'); // WHERE SHD_ACTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shdAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByShdAction($shdAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shdAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shdAction)) {
                $shdAction = str_replace('*', '%', $shdAction);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ShadowTablePeer::SHD_ACTION, $shdAction, $comparison);
    }

    /**
     * Filter the query on the SHD_DETAILS column
     *
     * Example usage:
     * <code>
     * $query->filterByShdDetails('fooValue');   // WHERE SHD_DETAILS = 'fooValue'
     * $query->filterByShdDetails('%fooValue%'); // WHERE SHD_DETAILS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shdDetails The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByShdDetails($shdDetails = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shdDetails)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shdDetails)) {
                $shdDetails = str_replace('*', '%', $shdDetails);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ShadowTablePeer::SHD_DETAILS, $shdDetails, $comparison);
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
     * @return    ShadowTableQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ShadowTablePeer::USR_UID, $usrUid, $comparison);
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
     * @return    ShadowTableQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ShadowTablePeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the SHD_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByShdDate('2011-03-14'); // WHERE SHD_DATE = '2011-03-14'
     * $query->filterByShdDate('now'); // WHERE SHD_DATE = '2011-03-14'
     * $query->filterByShdDate(array('max' => 'yesterday')); // WHERE SHD_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $shdDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function filterByShdDate($shdDate = null, $comparison = null)
    {
        if (is_array($shdDate)) {
            $useMinMax = false;
            if (isset($shdDate['min'])) {
                $this->addUsingAlias(ShadowTablePeer::SHD_DATE, $shdDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shdDate['max'])) {
                $this->addUsingAlias(ShadowTablePeer::SHD_DATE, $shdDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ShadowTablePeer::SHD_DATE, $shdDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ShadowTable $shadowTable Object to remove from the list of results
     *
     * @return    ShadowTableQuery The current query, for fluid interface
     */
    public function prune($shadowTable = null)
    {
        if ($shadowTable) {
            $this->addUsingAlias(ShadowTablePeer::SHD_UID, $shadowTable->getShdUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseShadowTableQuery