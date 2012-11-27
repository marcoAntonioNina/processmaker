<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'SYSTEMS' table.
 *
 * 
 *
 * @method     SystemsQuery orderBySysUid($order = Criteria::ASC) Order by the SYS_UID column
 * @method     SystemsQuery orderBySysCode($order = Criteria::ASC) Order by the SYS_CODE column
 * @method     SystemsQuery orderBySysCreateDate($order = Criteria::ASC) Order by the SYS_CREATE_DATE column
 * @method     SystemsQuery orderBySysUpdateDate($order = Criteria::ASC) Order by the SYS_UPDATE_DATE column
 * @method     SystemsQuery orderBySysStatus($order = Criteria::ASC) Order by the SYS_STATUS column
 *
 * @method     SystemsQuery groupBySysUid() Group by the SYS_UID column
 * @method     SystemsQuery groupBySysCode() Group by the SYS_CODE column
 * @method     SystemsQuery groupBySysCreateDate() Group by the SYS_CREATE_DATE column
 * @method     SystemsQuery groupBySysUpdateDate() Group by the SYS_UPDATE_DATE column
 * @method     SystemsQuery groupBySysStatus() Group by the SYS_STATUS column
 *
 * @method     SystemsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SystemsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SystemsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Systems findOne(PropelPDO $con = null) Return the first Systems matching the query
 * @method     Systems findOneOrCreate(PropelPDO $con = null) Return the first Systems matching the query, or a new Systems object populated from the query conditions when no match is found
 *
 * @method     Systems findOneBySysUid(string $SYS_UID) Return the first Systems filtered by the SYS_UID column
 * @method     Systems findOneBySysCode(string $SYS_CODE) Return the first Systems filtered by the SYS_CODE column
 * @method     Systems findOneBySysCreateDate(string $SYS_CREATE_DATE) Return the first Systems filtered by the SYS_CREATE_DATE column
 * @method     Systems findOneBySysUpdateDate(string $SYS_UPDATE_DATE) Return the first Systems filtered by the SYS_UPDATE_DATE column
 * @method     Systems findOneBySysStatus(int $SYS_STATUS) Return the first Systems filtered by the SYS_STATUS column
 *
 * @method     array findBySysUid(string $SYS_UID) Return Systems objects filtered by the SYS_UID column
 * @method     array findBySysCode(string $SYS_CODE) Return Systems objects filtered by the SYS_CODE column
 * @method     array findBySysCreateDate(string $SYS_CREATE_DATE) Return Systems objects filtered by the SYS_CREATE_DATE column
 * @method     array findBySysUpdateDate(string $SYS_UPDATE_DATE) Return Systems objects filtered by the SYS_UPDATE_DATE column
 * @method     array findBySysStatus(int $SYS_STATUS) Return Systems objects filtered by the SYS_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSystemsQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSystemsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'Systems', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SystemsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SystemsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SystemsQuery) {
            return $criteria;
        }
        $query = new SystemsQuery();
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
     * @return    Systems|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SystemsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(SystemsPeer::SYS_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(SystemsPeer::SYS_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SYS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySysUid('fooValue');   // WHERE SYS_UID = 'fooValue'
     * $query->filterBySysUid('%fooValue%'); // WHERE SYS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sysUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterBySysUid($sysUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sysUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sysUid)) {
                $sysUid = str_replace('*', '%', $sysUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SystemsPeer::SYS_UID, $sysUid, $comparison);
    }

    /**
     * Filter the query on the SYS_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterBySysCode('fooValue');   // WHERE SYS_CODE = 'fooValue'
     * $query->filterBySysCode('%fooValue%'); // WHERE SYS_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sysCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterBySysCode($sysCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sysCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sysCode)) {
                $sysCode = str_replace('*', '%', $sysCode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SystemsPeer::SYS_CODE, $sysCode, $comparison);
    }

    /**
     * Filter the query on the SYS_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySysCreateDate('2011-03-14'); // WHERE SYS_CREATE_DATE = '2011-03-14'
     * $query->filterBySysCreateDate('now'); // WHERE SYS_CREATE_DATE = '2011-03-14'
     * $query->filterBySysCreateDate(array('max' => 'yesterday')); // WHERE SYS_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $sysCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterBySysCreateDate($sysCreateDate = null, $comparison = null)
    {
        if (is_array($sysCreateDate)) {
            $useMinMax = false;
            if (isset($sysCreateDate['min'])) {
                $this->addUsingAlias(SystemsPeer::SYS_CREATE_DATE, $sysCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sysCreateDate['max'])) {
                $this->addUsingAlias(SystemsPeer::SYS_CREATE_DATE, $sysCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SystemsPeer::SYS_CREATE_DATE, $sysCreateDate, $comparison);
    }

    /**
     * Filter the query on the SYS_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySysUpdateDate('2011-03-14'); // WHERE SYS_UPDATE_DATE = '2011-03-14'
     * $query->filterBySysUpdateDate('now'); // WHERE SYS_UPDATE_DATE = '2011-03-14'
     * $query->filterBySysUpdateDate(array('max' => 'yesterday')); // WHERE SYS_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $sysUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterBySysUpdateDate($sysUpdateDate = null, $comparison = null)
    {
        if (is_array($sysUpdateDate)) {
            $useMinMax = false;
            if (isset($sysUpdateDate['min'])) {
                $this->addUsingAlias(SystemsPeer::SYS_UPDATE_DATE, $sysUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sysUpdateDate['max'])) {
                $this->addUsingAlias(SystemsPeer::SYS_UPDATE_DATE, $sysUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SystemsPeer::SYS_UPDATE_DATE, $sysUpdateDate, $comparison);
    }

    /**
     * Filter the query on the SYS_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterBySysStatus(1234); // WHERE SYS_STATUS = 1234
     * $query->filterBySysStatus(array(12, 34)); // WHERE SYS_STATUS IN (12, 34)
     * $query->filterBySysStatus(array('min' => 12)); // WHERE SYS_STATUS > 12
     * </code>
     *
     * @param     mixed $sysStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function filterBySysStatus($sysStatus = null, $comparison = null)
    {
        if (is_array($sysStatus)) {
            $useMinMax = false;
            if (isset($sysStatus['min'])) {
                $this->addUsingAlias(SystemsPeer::SYS_STATUS, $sysStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sysStatus['max'])) {
                $this->addUsingAlias(SystemsPeer::SYS_STATUS, $sysStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SystemsPeer::SYS_STATUS, $sysStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Systems $systems Object to remove from the list of results
     *
     * @return    SystemsQuery The current query, for fluid interface
     */
    public function prune($systems = null)
    {
        if ($systems) {
            $this->addUsingAlias(SystemsPeer::SYS_UID, $systems->getSysUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSystemsQuery