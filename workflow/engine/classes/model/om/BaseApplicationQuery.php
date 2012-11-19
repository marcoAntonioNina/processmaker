<?php


/**
 * Base class that represents a query for the 'APPLICATION' table.
 *
 * 
 *
 * @method     ApplicationQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     ApplicationQuery orderByAppNumber($order = Criteria::ASC) Order by the APP_NUMBER column
 * @method     ApplicationQuery orderByAppParent($order = Criteria::ASC) Order by the APP_PARENT column
 * @method     ApplicationQuery orderByAppStatus($order = Criteria::ASC) Order by the APP_STATUS column
 * @method     ApplicationQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ApplicationQuery orderByAppProcStatus($order = Criteria::ASC) Order by the APP_PROC_STATUS column
 * @method     ApplicationQuery orderByAppProcCode($order = Criteria::ASC) Order by the APP_PROC_CODE column
 * @method     ApplicationQuery orderByAppParallel($order = Criteria::ASC) Order by the APP_PARALLEL column
 * @method     ApplicationQuery orderByAppInitUser($order = Criteria::ASC) Order by the APP_INIT_USER column
 * @method     ApplicationQuery orderByAppCurUser($order = Criteria::ASC) Order by the APP_CUR_USER column
 * @method     ApplicationQuery orderByAppCreateDate($order = Criteria::ASC) Order by the APP_CREATE_DATE column
 * @method     ApplicationQuery orderByAppInitDate($order = Criteria::ASC) Order by the APP_INIT_DATE column
 * @method     ApplicationQuery orderByAppFinishDate($order = Criteria::ASC) Order by the APP_FINISH_DATE column
 * @method     ApplicationQuery orderByAppUpdateDate($order = Criteria::ASC) Order by the APP_UPDATE_DATE column
 * @method     ApplicationQuery orderByAppData($order = Criteria::ASC) Order by the APP_DATA column
 * @method     ApplicationQuery orderByAppPin($order = Criteria::ASC) Order by the APP_PIN column
 *
 * @method     ApplicationQuery groupByAppUid() Group by the APP_UID column
 * @method     ApplicationQuery groupByAppNumber() Group by the APP_NUMBER column
 * @method     ApplicationQuery groupByAppParent() Group by the APP_PARENT column
 * @method     ApplicationQuery groupByAppStatus() Group by the APP_STATUS column
 * @method     ApplicationQuery groupByProUid() Group by the PRO_UID column
 * @method     ApplicationQuery groupByAppProcStatus() Group by the APP_PROC_STATUS column
 * @method     ApplicationQuery groupByAppProcCode() Group by the APP_PROC_CODE column
 * @method     ApplicationQuery groupByAppParallel() Group by the APP_PARALLEL column
 * @method     ApplicationQuery groupByAppInitUser() Group by the APP_INIT_USER column
 * @method     ApplicationQuery groupByAppCurUser() Group by the APP_CUR_USER column
 * @method     ApplicationQuery groupByAppCreateDate() Group by the APP_CREATE_DATE column
 * @method     ApplicationQuery groupByAppInitDate() Group by the APP_INIT_DATE column
 * @method     ApplicationQuery groupByAppFinishDate() Group by the APP_FINISH_DATE column
 * @method     ApplicationQuery groupByAppUpdateDate() Group by the APP_UPDATE_DATE column
 * @method     ApplicationQuery groupByAppData() Group by the APP_DATA column
 * @method     ApplicationQuery groupByAppPin() Group by the APP_PIN column
 *
 * @method     ApplicationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ApplicationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ApplicationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Application findOne(PropelPDO $con = null) Return the first Application matching the query
 * @method     Application findOneOrCreate(PropelPDO $con = null) Return the first Application matching the query, or a new Application object populated from the query conditions when no match is found
 *
 * @method     Application findOneByAppUid(string $APP_UID) Return the first Application filtered by the APP_UID column
 * @method     Application findOneByAppNumber(int $APP_NUMBER) Return the first Application filtered by the APP_NUMBER column
 * @method     Application findOneByAppParent(string $APP_PARENT) Return the first Application filtered by the APP_PARENT column
 * @method     Application findOneByAppStatus(string $APP_STATUS) Return the first Application filtered by the APP_STATUS column
 * @method     Application findOneByProUid(string $PRO_UID) Return the first Application filtered by the PRO_UID column
 * @method     Application findOneByAppProcStatus(string $APP_PROC_STATUS) Return the first Application filtered by the APP_PROC_STATUS column
 * @method     Application findOneByAppProcCode(string $APP_PROC_CODE) Return the first Application filtered by the APP_PROC_CODE column
 * @method     Application findOneByAppParallel(string $APP_PARALLEL) Return the first Application filtered by the APP_PARALLEL column
 * @method     Application findOneByAppInitUser(string $APP_INIT_USER) Return the first Application filtered by the APP_INIT_USER column
 * @method     Application findOneByAppCurUser(string $APP_CUR_USER) Return the first Application filtered by the APP_CUR_USER column
 * @method     Application findOneByAppCreateDate(string $APP_CREATE_DATE) Return the first Application filtered by the APP_CREATE_DATE column
 * @method     Application findOneByAppInitDate(string $APP_INIT_DATE) Return the first Application filtered by the APP_INIT_DATE column
 * @method     Application findOneByAppFinishDate(string $APP_FINISH_DATE) Return the first Application filtered by the APP_FINISH_DATE column
 * @method     Application findOneByAppUpdateDate(string $APP_UPDATE_DATE) Return the first Application filtered by the APP_UPDATE_DATE column
 * @method     Application findOneByAppData(string $APP_DATA) Return the first Application filtered by the APP_DATA column
 * @method     Application findOneByAppPin(string $APP_PIN) Return the first Application filtered by the APP_PIN column
 *
 * @method     array findByAppUid(string $APP_UID) Return Application objects filtered by the APP_UID column
 * @method     array findByAppNumber(int $APP_NUMBER) Return Application objects filtered by the APP_NUMBER column
 * @method     array findByAppParent(string $APP_PARENT) Return Application objects filtered by the APP_PARENT column
 * @method     array findByAppStatus(string $APP_STATUS) Return Application objects filtered by the APP_STATUS column
 * @method     array findByProUid(string $PRO_UID) Return Application objects filtered by the PRO_UID column
 * @method     array findByAppProcStatus(string $APP_PROC_STATUS) Return Application objects filtered by the APP_PROC_STATUS column
 * @method     array findByAppProcCode(string $APP_PROC_CODE) Return Application objects filtered by the APP_PROC_CODE column
 * @method     array findByAppParallel(string $APP_PARALLEL) Return Application objects filtered by the APP_PARALLEL column
 * @method     array findByAppInitUser(string $APP_INIT_USER) Return Application objects filtered by the APP_INIT_USER column
 * @method     array findByAppCurUser(string $APP_CUR_USER) Return Application objects filtered by the APP_CUR_USER column
 * @method     array findByAppCreateDate(string $APP_CREATE_DATE) Return Application objects filtered by the APP_CREATE_DATE column
 * @method     array findByAppInitDate(string $APP_INIT_DATE) Return Application objects filtered by the APP_INIT_DATE column
 * @method     array findByAppFinishDate(string $APP_FINISH_DATE) Return Application objects filtered by the APP_FINISH_DATE column
 * @method     array findByAppUpdateDate(string $APP_UPDATE_DATE) Return Application objects filtered by the APP_UPDATE_DATE column
 * @method     array findByAppData(string $APP_DATA) Return Application objects filtered by the APP_DATA column
 * @method     array findByAppPin(string $APP_PIN) Return Application objects filtered by the APP_PIN column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseApplicationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseApplicationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Application', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ApplicationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ApplicationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ApplicationQuery) {
            return $criteria;
        }
        $query = new ApplicationQuery();
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
     * @return    Application|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ApplicationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ApplicationPeer::APP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ApplicationPeer::APP_UID, $keys, Criteria::IN);
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
     * @return    ApplicationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ApplicationPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the APP_NUMBER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppNumber(1234); // WHERE APP_NUMBER = 1234
     * $query->filterByAppNumber(array(12, 34)); // WHERE APP_NUMBER IN (12, 34)
     * $query->filterByAppNumber(array('min' => 12)); // WHERE APP_NUMBER > 12
     * </code>
     *
     * @param     mixed $appNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppNumber($appNumber = null, $comparison = null)
    {
        if (is_array($appNumber)) {
            $useMinMax = false;
            if (isset($appNumber['min'])) {
                $this->addUsingAlias(ApplicationPeer::APP_NUMBER, $appNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appNumber['max'])) {
                $this->addUsingAlias(ApplicationPeer::APP_NUMBER, $appNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_NUMBER, $appNumber, $comparison);
    }

    /**
     * Filter the query on the APP_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByAppParent('fooValue');   // WHERE APP_PARENT = 'fooValue'
     * $query->filterByAppParent('%fooValue%'); // WHERE APP_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppParent($appParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appParent)) {
                $appParent = str_replace('*', '%', $appParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_PARENT, $appParent, $comparison);
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
     * @return    ApplicationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ApplicationPeer::APP_STATUS, $appStatus, $comparison);
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
     * @return    ApplicationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ApplicationPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the APP_PROC_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppProcStatus('fooValue');   // WHERE APP_PROC_STATUS = 'fooValue'
     * $query->filterByAppProcStatus('%fooValue%'); // WHERE APP_PROC_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appProcStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppProcStatus($appProcStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appProcStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appProcStatus)) {
                $appProcStatus = str_replace('*', '%', $appProcStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_PROC_STATUS, $appProcStatus, $comparison);
    }

    /**
     * Filter the query on the APP_PROC_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppProcCode('fooValue');   // WHERE APP_PROC_CODE = 'fooValue'
     * $query->filterByAppProcCode('%fooValue%'); // WHERE APP_PROC_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appProcCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppProcCode($appProcCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appProcCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appProcCode)) {
                $appProcCode = str_replace('*', '%', $appProcCode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_PROC_CODE, $appProcCode, $comparison);
    }

    /**
     * Filter the query on the APP_PARALLEL column
     *
     * Example usage:
     * <code>
     * $query->filterByAppParallel('fooValue');   // WHERE APP_PARALLEL = 'fooValue'
     * $query->filterByAppParallel('%fooValue%'); // WHERE APP_PARALLEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appParallel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppParallel($appParallel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appParallel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appParallel)) {
                $appParallel = str_replace('*', '%', $appParallel);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_PARALLEL, $appParallel, $comparison);
    }

    /**
     * Filter the query on the APP_INIT_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppInitUser('fooValue');   // WHERE APP_INIT_USER = 'fooValue'
     * $query->filterByAppInitUser('%fooValue%'); // WHERE APP_INIT_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appInitUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppInitUser($appInitUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appInitUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appInitUser)) {
                $appInitUser = str_replace('*', '%', $appInitUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_INIT_USER, $appInitUser, $comparison);
    }

    /**
     * Filter the query on the APP_CUR_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppCurUser('fooValue');   // WHERE APP_CUR_USER = 'fooValue'
     * $query->filterByAppCurUser('%fooValue%'); // WHERE APP_CUR_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appCurUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppCurUser($appCurUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appCurUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appCurUser)) {
                $appCurUser = str_replace('*', '%', $appCurUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_CUR_USER, $appCurUser, $comparison);
    }

    /**
     * Filter the query on the APP_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppCreateDate('2011-03-14'); // WHERE APP_CREATE_DATE = '2011-03-14'
     * $query->filterByAppCreateDate('now'); // WHERE APP_CREATE_DATE = '2011-03-14'
     * $query->filterByAppCreateDate(array('max' => 'yesterday')); // WHERE APP_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppCreateDate($appCreateDate = null, $comparison = null)
    {
        if (is_array($appCreateDate)) {
            $useMinMax = false;
            if (isset($appCreateDate['min'])) {
                $this->addUsingAlias(ApplicationPeer::APP_CREATE_DATE, $appCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appCreateDate['max'])) {
                $this->addUsingAlias(ApplicationPeer::APP_CREATE_DATE, $appCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_CREATE_DATE, $appCreateDate, $comparison);
    }

    /**
     * Filter the query on the APP_INIT_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppInitDate('2011-03-14'); // WHERE APP_INIT_DATE = '2011-03-14'
     * $query->filterByAppInitDate('now'); // WHERE APP_INIT_DATE = '2011-03-14'
     * $query->filterByAppInitDate(array('max' => 'yesterday')); // WHERE APP_INIT_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appInitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppInitDate($appInitDate = null, $comparison = null)
    {
        if (is_array($appInitDate)) {
            $useMinMax = false;
            if (isset($appInitDate['min'])) {
                $this->addUsingAlias(ApplicationPeer::APP_INIT_DATE, $appInitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appInitDate['max'])) {
                $this->addUsingAlias(ApplicationPeer::APP_INIT_DATE, $appInitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_INIT_DATE, $appInitDate, $comparison);
    }

    /**
     * Filter the query on the APP_FINISH_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppFinishDate('2011-03-14'); // WHERE APP_FINISH_DATE = '2011-03-14'
     * $query->filterByAppFinishDate('now'); // WHERE APP_FINISH_DATE = '2011-03-14'
     * $query->filterByAppFinishDate(array('max' => 'yesterday')); // WHERE APP_FINISH_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appFinishDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppFinishDate($appFinishDate = null, $comparison = null)
    {
        if (is_array($appFinishDate)) {
            $useMinMax = false;
            if (isset($appFinishDate['min'])) {
                $this->addUsingAlias(ApplicationPeer::APP_FINISH_DATE, $appFinishDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appFinishDate['max'])) {
                $this->addUsingAlias(ApplicationPeer::APP_FINISH_DATE, $appFinishDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_FINISH_DATE, $appFinishDate, $comparison);
    }

    /**
     * Filter the query on the APP_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUpdateDate('2011-03-14'); // WHERE APP_UPDATE_DATE = '2011-03-14'
     * $query->filterByAppUpdateDate('now'); // WHERE APP_UPDATE_DATE = '2011-03-14'
     * $query->filterByAppUpdateDate(array('max' => 'yesterday')); // WHERE APP_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppUpdateDate($appUpdateDate = null, $comparison = null)
    {
        if (is_array($appUpdateDate)) {
            $useMinMax = false;
            if (isset($appUpdateDate['min'])) {
                $this->addUsingAlias(ApplicationPeer::APP_UPDATE_DATE, $appUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appUpdateDate['max'])) {
                $this->addUsingAlias(ApplicationPeer::APP_UPDATE_DATE, $appUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_UPDATE_DATE, $appUpdateDate, $comparison);
    }

    /**
     * Filter the query on the APP_DATA column
     *
     * Example usage:
     * <code>
     * $query->filterByAppData('fooValue');   // WHERE APP_DATA = 'fooValue'
     * $query->filterByAppData('%fooValue%'); // WHERE APP_DATA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppData($appData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appData)) {
                $appData = str_replace('*', '%', $appData);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_DATA, $appData, $comparison);
    }

    /**
     * Filter the query on the APP_PIN column
     *
     * Example usage:
     * <code>
     * $query->filterByAppPin('fooValue');   // WHERE APP_PIN = 'fooValue'
     * $query->filterByAppPin('%fooValue%'); // WHERE APP_PIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appPin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function filterByAppPin($appPin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appPin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appPin)) {
                $appPin = str_replace('*', '%', $appPin);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ApplicationPeer::APP_PIN, $appPin, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Application $application Object to remove from the list of results
     *
     * @return    ApplicationQuery The current query, for fluid interface
     */
    public function prune($application = null)
    {
        if ($application) {
            $this->addUsingAlias(ApplicationPeer::APP_UID, $application->getAppUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseApplicationQuery