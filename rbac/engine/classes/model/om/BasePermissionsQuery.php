<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'PERMISSIONS' table.
 *
 * 
 *
 * @method     PermissionsQuery orderByPerUid($order = Criteria::ASC) Order by the PER_UID column
 * @method     PermissionsQuery orderByPerCode($order = Criteria::ASC) Order by the PER_CODE column
 * @method     PermissionsQuery orderByPerCreateDate($order = Criteria::ASC) Order by the PER_CREATE_DATE column
 * @method     PermissionsQuery orderByPerUpdateDate($order = Criteria::ASC) Order by the PER_UPDATE_DATE column
 * @method     PermissionsQuery orderByPerStatus($order = Criteria::ASC) Order by the PER_STATUS column
 * @method     PermissionsQuery orderByPerSystem($order = Criteria::ASC) Order by the PER_SYSTEM column
 *
 * @method     PermissionsQuery groupByPerUid() Group by the PER_UID column
 * @method     PermissionsQuery groupByPerCode() Group by the PER_CODE column
 * @method     PermissionsQuery groupByPerCreateDate() Group by the PER_CREATE_DATE column
 * @method     PermissionsQuery groupByPerUpdateDate() Group by the PER_UPDATE_DATE column
 * @method     PermissionsQuery groupByPerStatus() Group by the PER_STATUS column
 * @method     PermissionsQuery groupByPerSystem() Group by the PER_SYSTEM column
 *
 * @method     PermissionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PermissionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PermissionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Permissions findOne(PropelPDO $con = null) Return the first Permissions matching the query
 * @method     Permissions findOneOrCreate(PropelPDO $con = null) Return the first Permissions matching the query, or a new Permissions object populated from the query conditions when no match is found
 *
 * @method     Permissions findOneByPerUid(string $PER_UID) Return the first Permissions filtered by the PER_UID column
 * @method     Permissions findOneByPerCode(string $PER_CODE) Return the first Permissions filtered by the PER_CODE column
 * @method     Permissions findOneByPerCreateDate(string $PER_CREATE_DATE) Return the first Permissions filtered by the PER_CREATE_DATE column
 * @method     Permissions findOneByPerUpdateDate(string $PER_UPDATE_DATE) Return the first Permissions filtered by the PER_UPDATE_DATE column
 * @method     Permissions findOneByPerStatus(int $PER_STATUS) Return the first Permissions filtered by the PER_STATUS column
 * @method     Permissions findOneByPerSystem(string $PER_SYSTEM) Return the first Permissions filtered by the PER_SYSTEM column
 *
 * @method     array findByPerUid(string $PER_UID) Return Permissions objects filtered by the PER_UID column
 * @method     array findByPerCode(string $PER_CODE) Return Permissions objects filtered by the PER_CODE column
 * @method     array findByPerCreateDate(string $PER_CREATE_DATE) Return Permissions objects filtered by the PER_CREATE_DATE column
 * @method     array findByPerUpdateDate(string $PER_UPDATE_DATE) Return Permissions objects filtered by the PER_UPDATE_DATE column
 * @method     array findByPerStatus(int $PER_STATUS) Return Permissions objects filtered by the PER_STATUS column
 * @method     array findByPerSystem(string $PER_SYSTEM) Return Permissions objects filtered by the PER_SYSTEM column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BasePermissionsQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePermissionsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'Permissions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PermissionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    PermissionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PermissionsQuery) {
            return $criteria;
        }
        $query = new PermissionsQuery();
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
     * @return    Permissions|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = PermissionsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(PermissionsPeer::PER_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(PermissionsPeer::PER_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByPerUid('fooValue');   // WHERE PER_UID = 'fooValue'
     * $query->filterByPerUid('%fooValue%'); // WHERE PER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $perUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPerUid($perUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($perUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $perUid)) {
                $perUid = str_replace('*', '%', $perUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PermissionsPeer::PER_UID, $perUid, $comparison);
    }

    /**
     * Filter the query on the PER_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByPerCode('fooValue');   // WHERE PER_CODE = 'fooValue'
     * $query->filterByPerCode('%fooValue%'); // WHERE PER_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $perCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPerCode($perCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($perCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $perCode)) {
                $perCode = str_replace('*', '%', $perCode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PermissionsPeer::PER_CODE, $perCode, $comparison);
    }

    /**
     * Filter the query on the PER_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByPerCreateDate('2011-03-14'); // WHERE PER_CREATE_DATE = '2011-03-14'
     * $query->filterByPerCreateDate('now'); // WHERE PER_CREATE_DATE = '2011-03-14'
     * $query->filterByPerCreateDate(array('max' => 'yesterday')); // WHERE PER_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $perCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPerCreateDate($perCreateDate = null, $comparison = null)
    {
        if (is_array($perCreateDate)) {
            $useMinMax = false;
            if (isset($perCreateDate['min'])) {
                $this->addUsingAlias(PermissionsPeer::PER_CREATE_DATE, $perCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perCreateDate['max'])) {
                $this->addUsingAlias(PermissionsPeer::PER_CREATE_DATE, $perCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(PermissionsPeer::PER_CREATE_DATE, $perCreateDate, $comparison);
    }

    /**
     * Filter the query on the PER_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByPerUpdateDate('2011-03-14'); // WHERE PER_UPDATE_DATE = '2011-03-14'
     * $query->filterByPerUpdateDate('now'); // WHERE PER_UPDATE_DATE = '2011-03-14'
     * $query->filterByPerUpdateDate(array('max' => 'yesterday')); // WHERE PER_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $perUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPerUpdateDate($perUpdateDate = null, $comparison = null)
    {
        if (is_array($perUpdateDate)) {
            $useMinMax = false;
            if (isset($perUpdateDate['min'])) {
                $this->addUsingAlias(PermissionsPeer::PER_UPDATE_DATE, $perUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perUpdateDate['max'])) {
                $this->addUsingAlias(PermissionsPeer::PER_UPDATE_DATE, $perUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(PermissionsPeer::PER_UPDATE_DATE, $perUpdateDate, $comparison);
    }

    /**
     * Filter the query on the PER_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByPerStatus(1234); // WHERE PER_STATUS = 1234
     * $query->filterByPerStatus(array(12, 34)); // WHERE PER_STATUS IN (12, 34)
     * $query->filterByPerStatus(array('min' => 12)); // WHERE PER_STATUS > 12
     * </code>
     *
     * @param     mixed $perStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPerStatus($perStatus = null, $comparison = null)
    {
        if (is_array($perStatus)) {
            $useMinMax = false;
            if (isset($perStatus['min'])) {
                $this->addUsingAlias(PermissionsPeer::PER_STATUS, $perStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perStatus['max'])) {
                $this->addUsingAlias(PermissionsPeer::PER_STATUS, $perStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(PermissionsPeer::PER_STATUS, $perStatus, $comparison);
    }

    /**
     * Filter the query on the PER_SYSTEM column
     *
     * Example usage:
     * <code>
     * $query->filterByPerSystem('fooValue');   // WHERE PER_SYSTEM = 'fooValue'
     * $query->filterByPerSystem('%fooValue%'); // WHERE PER_SYSTEM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $perSystem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function filterByPerSystem($perSystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($perSystem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $perSystem)) {
                $perSystem = str_replace('*', '%', $perSystem);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PermissionsPeer::PER_SYSTEM, $perSystem, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Permissions $permissions Object to remove from the list of results
     *
     * @return    PermissionsQuery The current query, for fluid interface
     */
    public function prune($permissions = null)
    {
        if ($permissions) {
            $this->addUsingAlias(PermissionsPeer::PER_UID, $permissions->getPerUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePermissionsQuery