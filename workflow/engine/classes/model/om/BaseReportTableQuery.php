<?php


/**
 * Base class that represents a query for the 'REPORT_TABLE' table.
 *
 * 
 *
 * @method     ReportTableQuery orderByRepTabUid($order = Criteria::ASC) Order by the REP_TAB_UID column
 * @method     ReportTableQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ReportTableQuery orderByRepTabName($order = Criteria::ASC) Order by the REP_TAB_NAME column
 * @method     ReportTableQuery orderByRepTabType($order = Criteria::ASC) Order by the REP_TAB_TYPE column
 * @method     ReportTableQuery orderByRepTabGrid($order = Criteria::ASC) Order by the REP_TAB_GRID column
 * @method     ReportTableQuery orderByRepTabConnection($order = Criteria::ASC) Order by the REP_TAB_CONNECTION column
 * @method     ReportTableQuery orderByRepTabCreateDate($order = Criteria::ASC) Order by the REP_TAB_CREATE_DATE column
 * @method     ReportTableQuery orderByRepTabStatus($order = Criteria::ASC) Order by the REP_TAB_STATUS column
 *
 * @method     ReportTableQuery groupByRepTabUid() Group by the REP_TAB_UID column
 * @method     ReportTableQuery groupByProUid() Group by the PRO_UID column
 * @method     ReportTableQuery groupByRepTabName() Group by the REP_TAB_NAME column
 * @method     ReportTableQuery groupByRepTabType() Group by the REP_TAB_TYPE column
 * @method     ReportTableQuery groupByRepTabGrid() Group by the REP_TAB_GRID column
 * @method     ReportTableQuery groupByRepTabConnection() Group by the REP_TAB_CONNECTION column
 * @method     ReportTableQuery groupByRepTabCreateDate() Group by the REP_TAB_CREATE_DATE column
 * @method     ReportTableQuery groupByRepTabStatus() Group by the REP_TAB_STATUS column
 *
 * @method     ReportTableQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReportTableQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReportTableQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReportTable findOne(PropelPDO $con = null) Return the first ReportTable matching the query
 * @method     ReportTable findOneOrCreate(PropelPDO $con = null) Return the first ReportTable matching the query, or a new ReportTable object populated from the query conditions when no match is found
 *
 * @method     ReportTable findOneByRepTabUid(string $REP_TAB_UID) Return the first ReportTable filtered by the REP_TAB_UID column
 * @method     ReportTable findOneByProUid(string $PRO_UID) Return the first ReportTable filtered by the PRO_UID column
 * @method     ReportTable findOneByRepTabName(string $REP_TAB_NAME) Return the first ReportTable filtered by the REP_TAB_NAME column
 * @method     ReportTable findOneByRepTabType(string $REP_TAB_TYPE) Return the first ReportTable filtered by the REP_TAB_TYPE column
 * @method     ReportTable findOneByRepTabGrid(string $REP_TAB_GRID) Return the first ReportTable filtered by the REP_TAB_GRID column
 * @method     ReportTable findOneByRepTabConnection(string $REP_TAB_CONNECTION) Return the first ReportTable filtered by the REP_TAB_CONNECTION column
 * @method     ReportTable findOneByRepTabCreateDate(string $REP_TAB_CREATE_DATE) Return the first ReportTable filtered by the REP_TAB_CREATE_DATE column
 * @method     ReportTable findOneByRepTabStatus(string $REP_TAB_STATUS) Return the first ReportTable filtered by the REP_TAB_STATUS column
 *
 * @method     array findByRepTabUid(string $REP_TAB_UID) Return ReportTable objects filtered by the REP_TAB_UID column
 * @method     array findByProUid(string $PRO_UID) Return ReportTable objects filtered by the PRO_UID column
 * @method     array findByRepTabName(string $REP_TAB_NAME) Return ReportTable objects filtered by the REP_TAB_NAME column
 * @method     array findByRepTabType(string $REP_TAB_TYPE) Return ReportTable objects filtered by the REP_TAB_TYPE column
 * @method     array findByRepTabGrid(string $REP_TAB_GRID) Return ReportTable objects filtered by the REP_TAB_GRID column
 * @method     array findByRepTabConnection(string $REP_TAB_CONNECTION) Return ReportTable objects filtered by the REP_TAB_CONNECTION column
 * @method     array findByRepTabCreateDate(string $REP_TAB_CREATE_DATE) Return ReportTable objects filtered by the REP_TAB_CREATE_DATE column
 * @method     array findByRepTabStatus(string $REP_TAB_STATUS) Return ReportTable objects filtered by the REP_TAB_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseReportTableQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseReportTableQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ReportTable', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReportTableQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ReportTableQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReportTableQuery) {
            return $criteria;
        }
        $query = new ReportTableQuery();
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
     * @return    ReportTable|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ReportTablePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the REP_TAB_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabUid('fooValue');   // WHERE REP_TAB_UID = 'fooValue'
     * $query->filterByRepTabUid('%fooValue%'); // WHERE REP_TAB_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabUid($repTabUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabUid)) {
                $repTabUid = str_replace('*', '%', $repTabUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_UID, $repTabUid, $comparison);
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
     * @return    ReportTableQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ReportTablePeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabName('fooValue');   // WHERE REP_TAB_NAME = 'fooValue'
     * $query->filterByRepTabName('%fooValue%'); // WHERE REP_TAB_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabName($repTabName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabName)) {
                $repTabName = str_replace('*', '%', $repTabName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_NAME, $repTabName, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabType('fooValue');   // WHERE REP_TAB_TYPE = 'fooValue'
     * $query->filterByRepTabType('%fooValue%'); // WHERE REP_TAB_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabType($repTabType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabType)) {
                $repTabType = str_replace('*', '%', $repTabType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_TYPE, $repTabType, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_GRID column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabGrid('fooValue');   // WHERE REP_TAB_GRID = 'fooValue'
     * $query->filterByRepTabGrid('%fooValue%'); // WHERE REP_TAB_GRID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabGrid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabGrid($repTabGrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabGrid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabGrid)) {
                $repTabGrid = str_replace('*', '%', $repTabGrid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_GRID, $repTabGrid, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_CONNECTION column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabConnection('fooValue');   // WHERE REP_TAB_CONNECTION = 'fooValue'
     * $query->filterByRepTabConnection('%fooValue%'); // WHERE REP_TAB_CONNECTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabConnection The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabConnection($repTabConnection = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabConnection)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabConnection)) {
                $repTabConnection = str_replace('*', '%', $repTabConnection);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_CONNECTION, $repTabConnection, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabCreateDate('2011-03-14'); // WHERE REP_TAB_CREATE_DATE = '2011-03-14'
     * $query->filterByRepTabCreateDate('now'); // WHERE REP_TAB_CREATE_DATE = '2011-03-14'
     * $query->filterByRepTabCreateDate(array('max' => 'yesterday')); // WHERE REP_TAB_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $repTabCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabCreateDate($repTabCreateDate = null, $comparison = null)
    {
        if (is_array($repTabCreateDate)) {
            $useMinMax = false;
            if (isset($repTabCreateDate['min'])) {
                $this->addUsingAlias(ReportTablePeer::REP_TAB_CREATE_DATE, $repTabCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($repTabCreateDate['max'])) {
                $this->addUsingAlias(ReportTablePeer::REP_TAB_CREATE_DATE, $repTabCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_CREATE_DATE, $repTabCreateDate, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabStatus('fooValue');   // WHERE REP_TAB_STATUS = 'fooValue'
     * $query->filterByRepTabStatus('%fooValue%'); // WHERE REP_TAB_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function filterByRepTabStatus($repTabStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabStatus)) {
                $repTabStatus = str_replace('*', '%', $repTabStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportTablePeer::REP_TAB_STATUS, $repTabStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ReportTable $reportTable Object to remove from the list of results
     *
     * @return    ReportTableQuery The current query, for fluid interface
     */
    public function prune($reportTable = null)
    {
        if ($reportTable) {
            $this->addUsingAlias(ReportTablePeer::REP_TAB_UID, $reportTable->getRepTabUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseReportTableQuery