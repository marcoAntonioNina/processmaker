<?php


/**
 * Base class that represents a query for the 'DEPARTMENT' table.
 *
 * 
 *
 * @method     DepartmentQuery orderByDepUid($order = Criteria::ASC) Order by the DEP_UID column
 * @method     DepartmentQuery orderByDepParent($order = Criteria::ASC) Order by the DEP_PARENT column
 * @method     DepartmentQuery orderByDepManager($order = Criteria::ASC) Order by the DEP_MANAGER column
 * @method     DepartmentQuery orderByDepLocation($order = Criteria::ASC) Order by the DEP_LOCATION column
 * @method     DepartmentQuery orderByDepStatus($order = Criteria::ASC) Order by the DEP_STATUS column
 * @method     DepartmentQuery orderByDepRefCode($order = Criteria::ASC) Order by the DEP_REF_CODE column
 * @method     DepartmentQuery orderByDepLdapDn($order = Criteria::ASC) Order by the DEP_LDAP_DN column
 *
 * @method     DepartmentQuery groupByDepUid() Group by the DEP_UID column
 * @method     DepartmentQuery groupByDepParent() Group by the DEP_PARENT column
 * @method     DepartmentQuery groupByDepManager() Group by the DEP_MANAGER column
 * @method     DepartmentQuery groupByDepLocation() Group by the DEP_LOCATION column
 * @method     DepartmentQuery groupByDepStatus() Group by the DEP_STATUS column
 * @method     DepartmentQuery groupByDepRefCode() Group by the DEP_REF_CODE column
 * @method     DepartmentQuery groupByDepLdapDn() Group by the DEP_LDAP_DN column
 *
 * @method     DepartmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DepartmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DepartmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Department findOne(PropelPDO $con = null) Return the first Department matching the query
 * @method     Department findOneOrCreate(PropelPDO $con = null) Return the first Department matching the query, or a new Department object populated from the query conditions when no match is found
 *
 * @method     Department findOneByDepUid(string $DEP_UID) Return the first Department filtered by the DEP_UID column
 * @method     Department findOneByDepParent(string $DEP_PARENT) Return the first Department filtered by the DEP_PARENT column
 * @method     Department findOneByDepManager(string $DEP_MANAGER) Return the first Department filtered by the DEP_MANAGER column
 * @method     Department findOneByDepLocation(int $DEP_LOCATION) Return the first Department filtered by the DEP_LOCATION column
 * @method     Department findOneByDepStatus(string $DEP_STATUS) Return the first Department filtered by the DEP_STATUS column
 * @method     Department findOneByDepRefCode(string $DEP_REF_CODE) Return the first Department filtered by the DEP_REF_CODE column
 * @method     Department findOneByDepLdapDn(string $DEP_LDAP_DN) Return the first Department filtered by the DEP_LDAP_DN column
 *
 * @method     array findByDepUid(string $DEP_UID) Return Department objects filtered by the DEP_UID column
 * @method     array findByDepParent(string $DEP_PARENT) Return Department objects filtered by the DEP_PARENT column
 * @method     array findByDepManager(string $DEP_MANAGER) Return Department objects filtered by the DEP_MANAGER column
 * @method     array findByDepLocation(int $DEP_LOCATION) Return Department objects filtered by the DEP_LOCATION column
 * @method     array findByDepStatus(string $DEP_STATUS) Return Department objects filtered by the DEP_STATUS column
 * @method     array findByDepRefCode(string $DEP_REF_CODE) Return Department objects filtered by the DEP_REF_CODE column
 * @method     array findByDepLdapDn(string $DEP_LDAP_DN) Return Department objects filtered by the DEP_LDAP_DN column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDepartmentQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDepartmentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Department', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DepartmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    DepartmentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DepartmentQuery) {
            return $criteria;
        }
        $query = new DepartmentQuery();
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
     * @return    Department|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = DepartmentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(DepartmentPeer::DEP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(DepartmentPeer::DEP_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the DEP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDepUid('fooValue');   // WHERE DEP_UID = 'fooValue'
     * $query->filterByDepUid('%fooValue%'); // WHERE DEP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepUid($depUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depUid)) {
                $depUid = str_replace('*', '%', $depUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_UID, $depUid, $comparison);
    }

    /**
     * Filter the query on the DEP_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDepParent('fooValue');   // WHERE DEP_PARENT = 'fooValue'
     * $query->filterByDepParent('%fooValue%'); // WHERE DEP_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepParent($depParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depParent)) {
                $depParent = str_replace('*', '%', $depParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_PARENT, $depParent, $comparison);
    }

    /**
     * Filter the query on the DEP_MANAGER column
     *
     * Example usage:
     * <code>
     * $query->filterByDepManager('fooValue');   // WHERE DEP_MANAGER = 'fooValue'
     * $query->filterByDepManager('%fooValue%'); // WHERE DEP_MANAGER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depManager The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepManager($depManager = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depManager)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depManager)) {
                $depManager = str_replace('*', '%', $depManager);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_MANAGER, $depManager, $comparison);
    }

    /**
     * Filter the query on the DEP_LOCATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDepLocation(1234); // WHERE DEP_LOCATION = 1234
     * $query->filterByDepLocation(array(12, 34)); // WHERE DEP_LOCATION IN (12, 34)
     * $query->filterByDepLocation(array('min' => 12)); // WHERE DEP_LOCATION > 12
     * </code>
     *
     * @param     mixed $depLocation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepLocation($depLocation = null, $comparison = null)
    {
        if (is_array($depLocation)) {
            $useMinMax = false;
            if (isset($depLocation['min'])) {
                $this->addUsingAlias(DepartmentPeer::DEP_LOCATION, $depLocation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depLocation['max'])) {
                $this->addUsingAlias(DepartmentPeer::DEP_LOCATION, $depLocation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_LOCATION, $depLocation, $comparison);
    }

    /**
     * Filter the query on the DEP_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByDepStatus('fooValue');   // WHERE DEP_STATUS = 'fooValue'
     * $query->filterByDepStatus('%fooValue%'); // WHERE DEP_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepStatus($depStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depStatus)) {
                $depStatus = str_replace('*', '%', $depStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_STATUS, $depStatus, $comparison);
    }

    /**
     * Filter the query on the DEP_REF_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByDepRefCode('fooValue');   // WHERE DEP_REF_CODE = 'fooValue'
     * $query->filterByDepRefCode('%fooValue%'); // WHERE DEP_REF_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depRefCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepRefCode($depRefCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depRefCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depRefCode)) {
                $depRefCode = str_replace('*', '%', $depRefCode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_REF_CODE, $depRefCode, $comparison);
    }

    /**
     * Filter the query on the DEP_LDAP_DN column
     *
     * Example usage:
     * <code>
     * $query->filterByDepLdapDn('fooValue');   // WHERE DEP_LDAP_DN = 'fooValue'
     * $query->filterByDepLdapDn('%fooValue%'); // WHERE DEP_LDAP_DN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depLdapDn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function filterByDepLdapDn($depLdapDn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depLdapDn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depLdapDn)) {
                $depLdapDn = str_replace('*', '%', $depLdapDn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DepartmentPeer::DEP_LDAP_DN, $depLdapDn, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Department $department Object to remove from the list of results
     *
     * @return    DepartmentQuery The current query, for fluid interface
     */
    public function prune($department = null)
    {
        if ($department) {
            $this->addUsingAlias(DepartmentPeer::DEP_UID, $department->getDepUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDepartmentQuery