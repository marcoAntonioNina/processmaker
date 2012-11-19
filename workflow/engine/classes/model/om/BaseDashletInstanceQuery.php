<?php


/**
 * Base class that represents a query for the 'DASHLET_INSTANCE' table.
 *
 * 
 *
 * @method     DashletInstanceQuery orderByDasInsUid($order = Criteria::ASC) Order by the DAS_INS_UID column
 * @method     DashletInstanceQuery orderByDasUid($order = Criteria::ASC) Order by the DAS_UID column
 * @method     DashletInstanceQuery orderByDasInsOwnerType($order = Criteria::ASC) Order by the DAS_INS_OWNER_TYPE column
 * @method     DashletInstanceQuery orderByDasInsOwnerUid($order = Criteria::ASC) Order by the DAS_INS_OWNER_UID column
 * @method     DashletInstanceQuery orderByDasInsAdditionalProperties($order = Criteria::ASC) Order by the DAS_INS_ADDITIONAL_PROPERTIES column
 * @method     DashletInstanceQuery orderByDasInsCreateDate($order = Criteria::ASC) Order by the DAS_INS_CREATE_DATE column
 * @method     DashletInstanceQuery orderByDasInsUpdateDate($order = Criteria::ASC) Order by the DAS_INS_UPDATE_DATE column
 * @method     DashletInstanceQuery orderByDasInsStatus($order = Criteria::ASC) Order by the DAS_INS_STATUS column
 *
 * @method     DashletInstanceQuery groupByDasInsUid() Group by the DAS_INS_UID column
 * @method     DashletInstanceQuery groupByDasUid() Group by the DAS_UID column
 * @method     DashletInstanceQuery groupByDasInsOwnerType() Group by the DAS_INS_OWNER_TYPE column
 * @method     DashletInstanceQuery groupByDasInsOwnerUid() Group by the DAS_INS_OWNER_UID column
 * @method     DashletInstanceQuery groupByDasInsAdditionalProperties() Group by the DAS_INS_ADDITIONAL_PROPERTIES column
 * @method     DashletInstanceQuery groupByDasInsCreateDate() Group by the DAS_INS_CREATE_DATE column
 * @method     DashletInstanceQuery groupByDasInsUpdateDate() Group by the DAS_INS_UPDATE_DATE column
 * @method     DashletInstanceQuery groupByDasInsStatus() Group by the DAS_INS_STATUS column
 *
 * @method     DashletInstanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DashletInstanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DashletInstanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DashletInstance findOne(PropelPDO $con = null) Return the first DashletInstance matching the query
 * @method     DashletInstance findOneOrCreate(PropelPDO $con = null) Return the first DashletInstance matching the query, or a new DashletInstance object populated from the query conditions when no match is found
 *
 * @method     DashletInstance findOneByDasInsUid(string $DAS_INS_UID) Return the first DashletInstance filtered by the DAS_INS_UID column
 * @method     DashletInstance findOneByDasUid(string $DAS_UID) Return the first DashletInstance filtered by the DAS_UID column
 * @method     DashletInstance findOneByDasInsOwnerType(string $DAS_INS_OWNER_TYPE) Return the first DashletInstance filtered by the DAS_INS_OWNER_TYPE column
 * @method     DashletInstance findOneByDasInsOwnerUid(string $DAS_INS_OWNER_UID) Return the first DashletInstance filtered by the DAS_INS_OWNER_UID column
 * @method     DashletInstance findOneByDasInsAdditionalProperties(string $DAS_INS_ADDITIONAL_PROPERTIES) Return the first DashletInstance filtered by the DAS_INS_ADDITIONAL_PROPERTIES column
 * @method     DashletInstance findOneByDasInsCreateDate(string $DAS_INS_CREATE_DATE) Return the first DashletInstance filtered by the DAS_INS_CREATE_DATE column
 * @method     DashletInstance findOneByDasInsUpdateDate(string $DAS_INS_UPDATE_DATE) Return the first DashletInstance filtered by the DAS_INS_UPDATE_DATE column
 * @method     DashletInstance findOneByDasInsStatus(int $DAS_INS_STATUS) Return the first DashletInstance filtered by the DAS_INS_STATUS column
 *
 * @method     array findByDasInsUid(string $DAS_INS_UID) Return DashletInstance objects filtered by the DAS_INS_UID column
 * @method     array findByDasUid(string $DAS_UID) Return DashletInstance objects filtered by the DAS_UID column
 * @method     array findByDasInsOwnerType(string $DAS_INS_OWNER_TYPE) Return DashletInstance objects filtered by the DAS_INS_OWNER_TYPE column
 * @method     array findByDasInsOwnerUid(string $DAS_INS_OWNER_UID) Return DashletInstance objects filtered by the DAS_INS_OWNER_UID column
 * @method     array findByDasInsAdditionalProperties(string $DAS_INS_ADDITIONAL_PROPERTIES) Return DashletInstance objects filtered by the DAS_INS_ADDITIONAL_PROPERTIES column
 * @method     array findByDasInsCreateDate(string $DAS_INS_CREATE_DATE) Return DashletInstance objects filtered by the DAS_INS_CREATE_DATE column
 * @method     array findByDasInsUpdateDate(string $DAS_INS_UPDATE_DATE) Return DashletInstance objects filtered by the DAS_INS_UPDATE_DATE column
 * @method     array findByDasInsStatus(int $DAS_INS_STATUS) Return DashletInstance objects filtered by the DAS_INS_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDashletInstanceQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDashletInstanceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'DashletInstance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DashletInstanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    DashletInstanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DashletInstanceQuery) {
            return $criteria;
        }
        $query = new DashletInstanceQuery();
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
     * @return    DashletInstance|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = DashletInstancePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the DAS_INS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsUid('fooValue');   // WHERE DAS_INS_UID = 'fooValue'
     * $query->filterByDasInsUid('%fooValue%'); // WHERE DAS_INS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasInsUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsUid($dasInsUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasInsUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasInsUid)) {
                $dasInsUid = str_replace('*', '%', $dasInsUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_UID, $dasInsUid, $comparison);
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
     * @return    DashletInstanceQuery The current query, for fluid interface
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
        return $this->addUsingAlias(DashletInstancePeer::DAS_UID, $dasUid, $comparison);
    }

    /**
     * Filter the query on the DAS_INS_OWNER_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsOwnerType('fooValue');   // WHERE DAS_INS_OWNER_TYPE = 'fooValue'
     * $query->filterByDasInsOwnerType('%fooValue%'); // WHERE DAS_INS_OWNER_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasInsOwnerType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsOwnerType($dasInsOwnerType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasInsOwnerType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasInsOwnerType)) {
                $dasInsOwnerType = str_replace('*', '%', $dasInsOwnerType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_OWNER_TYPE, $dasInsOwnerType, $comparison);
    }

    /**
     * Filter the query on the DAS_INS_OWNER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsOwnerUid('fooValue');   // WHERE DAS_INS_OWNER_UID = 'fooValue'
     * $query->filterByDasInsOwnerUid('%fooValue%'); // WHERE DAS_INS_OWNER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasInsOwnerUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsOwnerUid($dasInsOwnerUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasInsOwnerUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasInsOwnerUid)) {
                $dasInsOwnerUid = str_replace('*', '%', $dasInsOwnerUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_OWNER_UID, $dasInsOwnerUid, $comparison);
    }

    /**
     * Filter the query on the DAS_INS_ADDITIONAL_PROPERTIES column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsAdditionalProperties('fooValue');   // WHERE DAS_INS_ADDITIONAL_PROPERTIES = 'fooValue'
     * $query->filterByDasInsAdditionalProperties('%fooValue%'); // WHERE DAS_INS_ADDITIONAL_PROPERTIES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dasInsAdditionalProperties The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsAdditionalProperties($dasInsAdditionalProperties = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dasInsAdditionalProperties)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dasInsAdditionalProperties)) {
                $dasInsAdditionalProperties = str_replace('*', '%', $dasInsAdditionalProperties);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_ADDITIONAL_PROPERTIES, $dasInsAdditionalProperties, $comparison);
    }

    /**
     * Filter the query on the DAS_INS_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsCreateDate('2011-03-14'); // WHERE DAS_INS_CREATE_DATE = '2011-03-14'
     * $query->filterByDasInsCreateDate('now'); // WHERE DAS_INS_CREATE_DATE = '2011-03-14'
     * $query->filterByDasInsCreateDate(array('max' => 'yesterday')); // WHERE DAS_INS_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dasInsCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsCreateDate($dasInsCreateDate = null, $comparison = null)
    {
        if (is_array($dasInsCreateDate)) {
            $useMinMax = false;
            if (isset($dasInsCreateDate['min'])) {
                $this->addUsingAlias(DashletInstancePeer::DAS_INS_CREATE_DATE, $dasInsCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dasInsCreateDate['max'])) {
                $this->addUsingAlias(DashletInstancePeer::DAS_INS_CREATE_DATE, $dasInsCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_CREATE_DATE, $dasInsCreateDate, $comparison);
    }

    /**
     * Filter the query on the DAS_INS_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsUpdateDate('2011-03-14'); // WHERE DAS_INS_UPDATE_DATE = '2011-03-14'
     * $query->filterByDasInsUpdateDate('now'); // WHERE DAS_INS_UPDATE_DATE = '2011-03-14'
     * $query->filterByDasInsUpdateDate(array('max' => 'yesterday')); // WHERE DAS_INS_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dasInsUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsUpdateDate($dasInsUpdateDate = null, $comparison = null)
    {
        if (is_array($dasInsUpdateDate)) {
            $useMinMax = false;
            if (isset($dasInsUpdateDate['min'])) {
                $this->addUsingAlias(DashletInstancePeer::DAS_INS_UPDATE_DATE, $dasInsUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dasInsUpdateDate['max'])) {
                $this->addUsingAlias(DashletInstancePeer::DAS_INS_UPDATE_DATE, $dasInsUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_UPDATE_DATE, $dasInsUpdateDate, $comparison);
    }

    /**
     * Filter the query on the DAS_INS_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByDasInsStatus(1234); // WHERE DAS_INS_STATUS = 1234
     * $query->filterByDasInsStatus(array(12, 34)); // WHERE DAS_INS_STATUS IN (12, 34)
     * $query->filterByDasInsStatus(array('min' => 12)); // WHERE DAS_INS_STATUS > 12
     * </code>
     *
     * @param     mixed $dasInsStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function filterByDasInsStatus($dasInsStatus = null, $comparison = null)
    {
        if (is_array($dasInsStatus)) {
            $useMinMax = false;
            if (isset($dasInsStatus['min'])) {
                $this->addUsingAlias(DashletInstancePeer::DAS_INS_STATUS, $dasInsStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dasInsStatus['max'])) {
                $this->addUsingAlias(DashletInstancePeer::DAS_INS_STATUS, $dasInsStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DashletInstancePeer::DAS_INS_STATUS, $dasInsStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     DashletInstance $dashletInstance Object to remove from the list of results
     *
     * @return    DashletInstanceQuery The current query, for fluid interface
     */
    public function prune($dashletInstance = null)
    {
        if ($dashletInstance) {
            $this->addUsingAlias(DashletInstancePeer::DAS_INS_UID, $dashletInstance->getDasInsUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDashletInstanceQuery