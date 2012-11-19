<?php


/**
 * Base class that represents a query for the 'LOGIN_LOG' table.
 *
 * 
 *
 * @method     LoginLogQuery orderByLogUid($order = Criteria::ASC) Order by the LOG_UID column
 * @method     LoginLogQuery orderByLogStatus($order = Criteria::ASC) Order by the LOG_STATUS column
 * @method     LoginLogQuery orderByLogIp($order = Criteria::ASC) Order by the LOG_IP column
 * @method     LoginLogQuery orderByLogSid($order = Criteria::ASC) Order by the LOG_SID column
 * @method     LoginLogQuery orderByLogInitDate($order = Criteria::ASC) Order by the LOG_INIT_DATE column
 * @method     LoginLogQuery orderByLogEndDate($order = Criteria::ASC) Order by the LOG_END_DATE column
 * @method     LoginLogQuery orderByLogClientHostname($order = Criteria::ASC) Order by the LOG_CLIENT_HOSTNAME column
 * @method     LoginLogQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 *
 * @method     LoginLogQuery groupByLogUid() Group by the LOG_UID column
 * @method     LoginLogQuery groupByLogStatus() Group by the LOG_STATUS column
 * @method     LoginLogQuery groupByLogIp() Group by the LOG_IP column
 * @method     LoginLogQuery groupByLogSid() Group by the LOG_SID column
 * @method     LoginLogQuery groupByLogInitDate() Group by the LOG_INIT_DATE column
 * @method     LoginLogQuery groupByLogEndDate() Group by the LOG_END_DATE column
 * @method     LoginLogQuery groupByLogClientHostname() Group by the LOG_CLIENT_HOSTNAME column
 * @method     LoginLogQuery groupByUsrUid() Group by the USR_UID column
 *
 * @method     LoginLogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LoginLogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LoginLogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LoginLog findOne(PropelPDO $con = null) Return the first LoginLog matching the query
 * @method     LoginLog findOneOrCreate(PropelPDO $con = null) Return the first LoginLog matching the query, or a new LoginLog object populated from the query conditions when no match is found
 *
 * @method     LoginLog findOneByLogUid(string $LOG_UID) Return the first LoginLog filtered by the LOG_UID column
 * @method     LoginLog findOneByLogStatus(string $LOG_STATUS) Return the first LoginLog filtered by the LOG_STATUS column
 * @method     LoginLog findOneByLogIp(string $LOG_IP) Return the first LoginLog filtered by the LOG_IP column
 * @method     LoginLog findOneByLogSid(string $LOG_SID) Return the first LoginLog filtered by the LOG_SID column
 * @method     LoginLog findOneByLogInitDate(string $LOG_INIT_DATE) Return the first LoginLog filtered by the LOG_INIT_DATE column
 * @method     LoginLog findOneByLogEndDate(string $LOG_END_DATE) Return the first LoginLog filtered by the LOG_END_DATE column
 * @method     LoginLog findOneByLogClientHostname(string $LOG_CLIENT_HOSTNAME) Return the first LoginLog filtered by the LOG_CLIENT_HOSTNAME column
 * @method     LoginLog findOneByUsrUid(string $USR_UID) Return the first LoginLog filtered by the USR_UID column
 *
 * @method     array findByLogUid(string $LOG_UID) Return LoginLog objects filtered by the LOG_UID column
 * @method     array findByLogStatus(string $LOG_STATUS) Return LoginLog objects filtered by the LOG_STATUS column
 * @method     array findByLogIp(string $LOG_IP) Return LoginLog objects filtered by the LOG_IP column
 * @method     array findByLogSid(string $LOG_SID) Return LoginLog objects filtered by the LOG_SID column
 * @method     array findByLogInitDate(string $LOG_INIT_DATE) Return LoginLog objects filtered by the LOG_INIT_DATE column
 * @method     array findByLogEndDate(string $LOG_END_DATE) Return LoginLog objects filtered by the LOG_END_DATE column
 * @method     array findByLogClientHostname(string $LOG_CLIENT_HOSTNAME) Return LoginLog objects filtered by the LOG_CLIENT_HOSTNAME column
 * @method     array findByUsrUid(string $USR_UID) Return LoginLog objects filtered by the USR_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseLoginLogQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLoginLogQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'LoginLog', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LoginLogQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    LoginLogQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LoginLogQuery) {
            return $criteria;
        }
        $query = new LoginLogQuery();
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
     * @return    LoginLog|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = LoginLogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(LoginLogPeer::LOG_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(LoginLogPeer::LOG_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LOG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByLogUid('fooValue');   // WHERE LOG_UID = 'fooValue'
     * $query->filterByLogUid('%fooValue%'); // WHERE LOG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogUid($logUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logUid)) {
                $logUid = str_replace('*', '%', $logUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_UID, $logUid, $comparison);
    }

    /**
     * Filter the query on the LOG_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByLogStatus('fooValue');   // WHERE LOG_STATUS = 'fooValue'
     * $query->filterByLogStatus('%fooValue%'); // WHERE LOG_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogStatus($logStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logStatus)) {
                $logStatus = str_replace('*', '%', $logStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_STATUS, $logStatus, $comparison);
    }

    /**
     * Filter the query on the LOG_IP column
     *
     * Example usage:
     * <code>
     * $query->filterByLogIp('fooValue');   // WHERE LOG_IP = 'fooValue'
     * $query->filterByLogIp('%fooValue%'); // WHERE LOG_IP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogIp($logIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logIp)) {
                $logIp = str_replace('*', '%', $logIp);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_IP, $logIp, $comparison);
    }

    /**
     * Filter the query on the LOG_SID column
     *
     * Example usage:
     * <code>
     * $query->filterByLogSid('fooValue');   // WHERE LOG_SID = 'fooValue'
     * $query->filterByLogSid('%fooValue%'); // WHERE LOG_SID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logSid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogSid($logSid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logSid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logSid)) {
                $logSid = str_replace('*', '%', $logSid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_SID, $logSid, $comparison);
    }

    /**
     * Filter the query on the LOG_INIT_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByLogInitDate('2011-03-14'); // WHERE LOG_INIT_DATE = '2011-03-14'
     * $query->filterByLogInitDate('now'); // WHERE LOG_INIT_DATE = '2011-03-14'
     * $query->filterByLogInitDate(array('max' => 'yesterday')); // WHERE LOG_INIT_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $logInitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogInitDate($logInitDate = null, $comparison = null)
    {
        if (is_array($logInitDate)) {
            $useMinMax = false;
            if (isset($logInitDate['min'])) {
                $this->addUsingAlias(LoginLogPeer::LOG_INIT_DATE, $logInitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($logInitDate['max'])) {
                $this->addUsingAlias(LoginLogPeer::LOG_INIT_DATE, $logInitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_INIT_DATE, $logInitDate, $comparison);
    }

    /**
     * Filter the query on the LOG_END_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByLogEndDate('2011-03-14'); // WHERE LOG_END_DATE = '2011-03-14'
     * $query->filterByLogEndDate('now'); // WHERE LOG_END_DATE = '2011-03-14'
     * $query->filterByLogEndDate(array('max' => 'yesterday')); // WHERE LOG_END_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $logEndDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogEndDate($logEndDate = null, $comparison = null)
    {
        if (is_array($logEndDate)) {
            $useMinMax = false;
            if (isset($logEndDate['min'])) {
                $this->addUsingAlias(LoginLogPeer::LOG_END_DATE, $logEndDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($logEndDate['max'])) {
                $this->addUsingAlias(LoginLogPeer::LOG_END_DATE, $logEndDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_END_DATE, $logEndDate, $comparison);
    }

    /**
     * Filter the query on the LOG_CLIENT_HOSTNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByLogClientHostname('fooValue');   // WHERE LOG_CLIENT_HOSTNAME = 'fooValue'
     * $query->filterByLogClientHostname('%fooValue%'); // WHERE LOG_CLIENT_HOSTNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logClientHostname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function filterByLogClientHostname($logClientHostname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logClientHostname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logClientHostname)) {
                $logClientHostname = str_replace('*', '%', $logClientHostname);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LoginLogPeer::LOG_CLIENT_HOSTNAME, $logClientHostname, $comparison);
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
     * @return    LoginLogQuery The current query, for fluid interface
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
        return $this->addUsingAlias(LoginLogPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     LoginLog $loginLog Object to remove from the list of results
     *
     * @return    LoginLogQuery The current query, for fluid interface
     */
    public function prune($loginLog = null)
    {
        if ($loginLog) {
            $this->addUsingAlias(LoginLogPeer::LOG_UID, $loginLog->getLogUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseLoginLogQuery