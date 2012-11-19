<?php


/**
 * Base class that represents a query for the 'DASHLET' table.
 *
 * 
 *
 * @method     DashletQuery orderByDasUid($order = Criteria::ASC) Order by the DAS_UID column
 * @method     DashletQuery orderByDasClass($order = Criteria::ASC) Order by the DAS_CLASS column
 * @method     DashletQuery orderByDasTitle($order = Criteria::ASC) Order by the DAS_TITLE column
 * @method     DashletQuery orderByDasDescription($order = Criteria::ASC) Order by the DAS_DESCRIPTION column
 * @method     DashletQuery orderByDasVersion($order = Criteria::ASC) Order by the DAS_VERSION column
 * @method     DashletQuery orderByDasCreateDate($order = Criteria::ASC) Order by the DAS_CREATE_DATE column
 * @method     DashletQuery orderByDasUpdateDate($order = Criteria::ASC) Order by the DAS_UPDATE_DATE column
 * @method     DashletQuery orderByDasStatus($order = Criteria::ASC) Order by the DAS_STATUS column
 *
 * @method     DashletQuery groupByDasUid() Group by the DAS_UID column
 * @method     DashletQuery groupByDasClass() Group by the DAS_CLASS column
 * @method     DashletQuery groupByDasTitle() Group by the DAS_TITLE column
 * @method     DashletQuery groupByDasDescription() Group by the DAS_DESCRIPTION column
 * @method     DashletQuery groupByDasVersion() Group by the DAS_VERSION column
 * @method     DashletQuery groupByDasCreateDate() Group by the DAS_CREATE_DATE column
 * @method     DashletQuery groupByDasUpdateDate() Group by the DAS_UPDATE_DATE column
 * @method     DashletQuery groupByDasStatus() Group by the DAS_STATUS column
 *
 * @method     DashletQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DashletQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DashletQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Dashlet findOne(PropelPDO $con = null) Return the first Dashlet matching the query
 * @method     Dashlet findOneOrCreate(PropelPDO $con = null) Return the first Dashlet matching the query, or a new Dashlet object populated from the query conditions when no match is found
 *
 * @method     Dashlet findOneByDasUid(string $DAS_UID) Return the first Dashlet filtered by the DAS_UID column
 * @method     Dashlet findOneByDasClass(string $DAS_CLASS) Return the first Dashlet filtered by the DAS_CLASS column
 * @method     Dashlet findOneByDasTitle(string $DAS_TITLE) Return the first Dashlet filtered by the DAS_TITLE column
 * @method     Dashlet findOneByDasDescription(string $DAS_DESCRIPTION) Return the first Dashlet filtered by the DAS_DESCRIPTION column
 * @method     Dashlet findOneByDasVersion(string $DAS_VERSION) Return the first Dashlet filtered by the DAS_VERSION column
 * @method     Dashlet findOneByDasCreateDate(string $DAS_CREATE_DATE) Return the first Dashlet filtered by the DAS_CREATE_DATE column
 * @method     Dashlet findOneByDasUpdateDate(string $DAS_UPDATE_DATE) Return the first Dashlet filtered by the DAS_UPDATE_DATE column
 * @method     Dashlet findOneByDasStatus(int $DAS_STATUS) Return the first Dashlet filtered by the DAS_STATUS column
 *
 * @method     array findByDasUid(string $DAS_UID) Return Dashlet objects filtered by the DAS_UID column
 * @method     array findByDasClass(string $DAS_CLASS) Return Dashlet objects filtered by the DAS_CLASS column
 * @method     array findByDasTitle(string $DAS_TITLE) Return Dashlet objects filtered by the DAS_TITLE column
 * @method     array findByDasDescription(string $DAS_DESCRIPTION) Return Dashlet objects filtered by the DAS_DESCRIPTION column
 * @method     array findByDasVersion(string $DAS_VERSION) Return Dashlet objects filtered by the DAS_VERSION column
 * @method     array findByDasCreateDate(string $DAS_CREATE_DATE) Return Dashlet objects filtered by the DAS_CREATE_DATE column
 * @method     array findByDasUpdateDate(string $DAS_UPDATE_DATE) Return Dashlet objects filtered by the DAS_UPDATE_DATE column
 * @method     array findByDasStatus(int $DAS_STATUS) Return Dashlet objects filtered by the DAS_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDashletQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDashletQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Dashlet', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DashletQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    DashletQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DashletQuery) {
            return $criteria;
        }
        $query = new DashletQuery();
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
     * @return    Dashlet|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = DashletPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(DashletPeer::DAS_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(DashletPeer::DAS_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the DAS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDasUid('fooValue');   // WHERE DAS_UID = 'fooValue'
     * $query->filterByDasUid('%fooValue%'); // WHERE DAS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasUid($dasUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasUid)) {
                $dasUid = str_replace('*', '%', $dasUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_UID, $dasUid, $comparison);
    }

    /**
     * Filter the query on the DAS_CLASS column
     *
     * Example usage:
     * <code>
     * $query->filterByDasClass('fooValue');   // WHERE DAS_CLASS = 'fooValue'
     * $query->filterByDasClass('%fooValue%'); // WHERE DAS_CLASS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasClass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasClass($dasClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasClass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasClass)) {
                $dasClass = str_replace('*', '%', $dasClass);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_CLASS, $dasClass, $comparison);
    }

    /**
     * Filter the query on the DAS_TITLE column
     *
     * Example usage:
     * <code>
     * $query->filterByDasTitle('fooValue');   // WHERE DAS_TITLE = 'fooValue'
     * $query->filterByDasTitle('%fooValue%'); // WHERE DAS_TITLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasTitle($dasTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasTitle)) {
                $dasTitle = str_replace('*', '%', $dasTitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_TITLE, $dasTitle, $comparison);
    }

    /**
     * Filter the query on the DAS_DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByDasDescription('fooValue');   // WHERE DAS_DESCRIPTION = 'fooValue'
     * $query->filterByDasDescription('%fooValue%'); // WHERE DAS_DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasDescription($dasDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasDescription)) {
                $dasDescription = str_replace('*', '%', $dasDescription);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_DESCRIPTION, $dasDescription, $comparison);
    }

    /**
     * Filter the query on the DAS_VERSION column
     *
     * Example usage:
     * <code>
     * $query->filterByDasVersion('fooValue');   // WHERE DAS_VERSION = 'fooValue'
     * $query->filterByDasVersion('%fooValue%'); // WHERE DAS_VERSION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasVersion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasVersion($dasVersion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasVersion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasVersion)) {
                $dasVersion = str_replace('*', '%', $dasVersion);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_VERSION, $dasVersion, $comparison);
    }

    /**
     * Filter the query on the DAS_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDasCreateDate('2011-03-14'); // WHERE DAS_CREATE_DATE = '2011-03-14'
     * $query->filterByDasCreateDate('now'); // WHERE DAS_CREATE_DATE = '2011-03-14'
     * $query->filterByDasCreateDate(array('max' => 'yesterday')); // WHERE DAS_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dasCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasCreateDate($dasCreateDate = null, $comparison = null)
    {
        if (is_array($dasCreateDate)) {
            $useMinMax = false;
            if (isset($dasCreateDate['min'])) {
                $this->addUsingAlias(DashletPeer::DAS_CREATE_DATE, $dasCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dasCreateDate['max'])) {
                $this->addUsingAlias(DashletPeer::DAS_CREATE_DATE, $dasCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_CREATE_DATE, $dasCreateDate, $comparison);
    }

    /**
     * Filter the query on the DAS_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDasUpdateDate('2011-03-14'); // WHERE DAS_UPDATE_DATE = '2011-03-14'
     * $query->filterByDasUpdateDate('now'); // WHERE DAS_UPDATE_DATE = '2011-03-14'
     * $query->filterByDasUpdateDate(array('max' => 'yesterday')); // WHERE DAS_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dasUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasUpdateDate($dasUpdateDate = null, $comparison = null)
    {
        if (is_array($dasUpdateDate)) {
            $useMinMax = false;
            if (isset($dasUpdateDate['min'])) {
                $this->addUsingAlias(DashletPeer::DAS_UPDATE_DATE, $dasUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dasUpdateDate['max'])) {
                $this->addUsingAlias(DashletPeer::DAS_UPDATE_DATE, $dasUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_UPDATE_DATE, $dasUpdateDate, $comparison);
    }

    /**
     * Filter the query on the DAS_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByDasStatus(1234); // WHERE DAS_STATUS = 1234
     * $query->filterByDasStatus(array(12, 34)); // WHERE DAS_STATUS IN (12, 34)
     * $query->filterByDasStatus(array('min' => 12)); // WHERE DAS_STATUS > 12
     * </code>
     *
     * @param     mixed $dasStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function filterByDasStatus($dasStatus = null, $comparison = null)
    {
        if (is_array($dasStatus)) {
            $useMinMax = false;
            if (isset($dasStatus['min'])) {
                $this->addUsingAlias(DashletPeer::DAS_STATUS, $dasStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dasStatus['max'])) {
                $this->addUsingAlias(DashletPeer::DAS_STATUS, $dasStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DashletPeer::DAS_STATUS, $dasStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Dashlet $dashlet Object to remove from the list of results
     *
     * @return    DashletQuery The current query, for fluid interface
     */
    public function prune($dashlet = null)
    {
        if ($dashlet) {
            $this->addUsingAlias(DashletPeer::DAS_UID, $dashlet->getDasUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDashletQuery