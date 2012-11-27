<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'ROLES' table.
 *
 * 
 *
 * @method     RolesQuery orderByRolUid($order = Criteria::ASC) Order by the ROL_UID column
 * @method     RolesQuery orderByRolParent($order = Criteria::ASC) Order by the ROL_PARENT column
 * @method     RolesQuery orderByRolSystem($order = Criteria::ASC) Order by the ROL_SYSTEM column
 * @method     RolesQuery orderByRolCode($order = Criteria::ASC) Order by the ROL_CODE column
 * @method     RolesQuery orderByRolCreateDate($order = Criteria::ASC) Order by the ROL_CREATE_DATE column
 * @method     RolesQuery orderByRolUpdateDate($order = Criteria::ASC) Order by the ROL_UPDATE_DATE column
 * @method     RolesQuery orderByRolStatus($order = Criteria::ASC) Order by the ROL_STATUS column
 *
 * @method     RolesQuery groupByRolUid() Group by the ROL_UID column
 * @method     RolesQuery groupByRolParent() Group by the ROL_PARENT column
 * @method     RolesQuery groupByRolSystem() Group by the ROL_SYSTEM column
 * @method     RolesQuery groupByRolCode() Group by the ROL_CODE column
 * @method     RolesQuery groupByRolCreateDate() Group by the ROL_CREATE_DATE column
 * @method     RolesQuery groupByRolUpdateDate() Group by the ROL_UPDATE_DATE column
 * @method     RolesQuery groupByRolStatus() Group by the ROL_STATUS column
 *
 * @method     RolesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RolesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RolesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Roles findOne(PropelPDO $con = null) Return the first Roles matching the query
 * @method     Roles findOneOrCreate(PropelPDO $con = null) Return the first Roles matching the query, or a new Roles object populated from the query conditions when no match is found
 *
 * @method     Roles findOneByRolUid(string $ROL_UID) Return the first Roles filtered by the ROL_UID column
 * @method     Roles findOneByRolParent(string $ROL_PARENT) Return the first Roles filtered by the ROL_PARENT column
 * @method     Roles findOneByRolSystem(string $ROL_SYSTEM) Return the first Roles filtered by the ROL_SYSTEM column
 * @method     Roles findOneByRolCode(string $ROL_CODE) Return the first Roles filtered by the ROL_CODE column
 * @method     Roles findOneByRolCreateDate(string $ROL_CREATE_DATE) Return the first Roles filtered by the ROL_CREATE_DATE column
 * @method     Roles findOneByRolUpdateDate(string $ROL_UPDATE_DATE) Return the first Roles filtered by the ROL_UPDATE_DATE column
 * @method     Roles findOneByRolStatus(int $ROL_STATUS) Return the first Roles filtered by the ROL_STATUS column
 *
 * @method     array findByRolUid(string $ROL_UID) Return Roles objects filtered by the ROL_UID column
 * @method     array findByRolParent(string $ROL_PARENT) Return Roles objects filtered by the ROL_PARENT column
 * @method     array findByRolSystem(string $ROL_SYSTEM) Return Roles objects filtered by the ROL_SYSTEM column
 * @method     array findByRolCode(string $ROL_CODE) Return Roles objects filtered by the ROL_CODE column
 * @method     array findByRolCreateDate(string $ROL_CREATE_DATE) Return Roles objects filtered by the ROL_CREATE_DATE column
 * @method     array findByRolUpdateDate(string $ROL_UPDATE_DATE) Return Roles objects filtered by the ROL_UPDATE_DATE column
 * @method     array findByRolStatus(int $ROL_STATUS) Return Roles objects filtered by the ROL_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseRolesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRolesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'Roles', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RolesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RolesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RolesQuery) {
            return $criteria;
        }
        $query = new RolesQuery();
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
     * @return    Roles|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RolesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(RolesPeer::ROL_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(RolesPeer::ROL_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ROL_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRolUid('fooValue');   // WHERE ROL_UID = 'fooValue'
     * $query->filterByRolUid('%fooValue%'); // WHERE ROL_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolUid($rolUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolUid)) {
                $rolUid = str_replace('*', '%', $rolUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_UID, $rolUid, $comparison);
    }

    /**
     * Filter the query on the ROL_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByRolParent('fooValue');   // WHERE ROL_PARENT = 'fooValue'
     * $query->filterByRolParent('%fooValue%'); // WHERE ROL_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolParent($rolParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolParent)) {
                $rolParent = str_replace('*', '%', $rolParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_PARENT, $rolParent, $comparison);
    }

    /**
     * Filter the query on the ROL_SYSTEM column
     *
     * Example usage:
     * <code>
     * $query->filterByRolSystem('fooValue');   // WHERE ROL_SYSTEM = 'fooValue'
     * $query->filterByRolSystem('%fooValue%'); // WHERE ROL_SYSTEM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolSystem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolSystem($rolSystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolSystem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolSystem)) {
                $rolSystem = str_replace('*', '%', $rolSystem);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_SYSTEM, $rolSystem, $comparison);
    }

    /**
     * Filter the query on the ROL_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByRolCode('fooValue');   // WHERE ROL_CODE = 'fooValue'
     * $query->filterByRolCode('%fooValue%'); // WHERE ROL_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolCode($rolCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolCode)) {
                $rolCode = str_replace('*', '%', $rolCode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_CODE, $rolCode, $comparison);
    }

    /**
     * Filter the query on the ROL_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByRolCreateDate('2011-03-14'); // WHERE ROL_CREATE_DATE = '2011-03-14'
     * $query->filterByRolCreateDate('now'); // WHERE ROL_CREATE_DATE = '2011-03-14'
     * $query->filterByRolCreateDate(array('max' => 'yesterday')); // WHERE ROL_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $rolCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolCreateDate($rolCreateDate = null, $comparison = null)
    {
        if (is_array($rolCreateDate)) {
            $useMinMax = false;
            if (isset($rolCreateDate['min'])) {
                $this->addUsingAlias(RolesPeer::ROL_CREATE_DATE, $rolCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rolCreateDate['max'])) {
                $this->addUsingAlias(RolesPeer::ROL_CREATE_DATE, $rolCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_CREATE_DATE, $rolCreateDate, $comparison);
    }

    /**
     * Filter the query on the ROL_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByRolUpdateDate('2011-03-14'); // WHERE ROL_UPDATE_DATE = '2011-03-14'
     * $query->filterByRolUpdateDate('now'); // WHERE ROL_UPDATE_DATE = '2011-03-14'
     * $query->filterByRolUpdateDate(array('max' => 'yesterday')); // WHERE ROL_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $rolUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolUpdateDate($rolUpdateDate = null, $comparison = null)
    {
        if (is_array($rolUpdateDate)) {
            $useMinMax = false;
            if (isset($rolUpdateDate['min'])) {
                $this->addUsingAlias(RolesPeer::ROL_UPDATE_DATE, $rolUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rolUpdateDate['max'])) {
                $this->addUsingAlias(RolesPeer::ROL_UPDATE_DATE, $rolUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_UPDATE_DATE, $rolUpdateDate, $comparison);
    }

    /**
     * Filter the query on the ROL_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByRolStatus(1234); // WHERE ROL_STATUS = 1234
     * $query->filterByRolStatus(array(12, 34)); // WHERE ROL_STATUS IN (12, 34)
     * $query->filterByRolStatus(array('min' => 12)); // WHERE ROL_STATUS > 12
     * </code>
     *
     * @param     mixed $rolStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function filterByRolStatus($rolStatus = null, $comparison = null)
    {
        if (is_array($rolStatus)) {
            $useMinMax = false;
            if (isset($rolStatus['min'])) {
                $this->addUsingAlias(RolesPeer::ROL_STATUS, $rolStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rolStatus['max'])) {
                $this->addUsingAlias(RolesPeer::ROL_STATUS, $rolStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RolesPeer::ROL_STATUS, $rolStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Roles $roles Object to remove from the list of results
     *
     * @return    RolesQuery The current query, for fluid interface
     */
    public function prune($roles = null)
    {
        if ($roles) {
            $this->addUsingAlias(RolesPeer::ROL_UID, $roles->getRolUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseRolesQuery