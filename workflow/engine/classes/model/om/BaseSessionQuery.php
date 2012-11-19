<?php


/**
 * Base class that represents a query for the 'SESSION' table.
 *
 * 
 *
 * @method     SessionQuery orderBySesUid($order = Criteria::ASC) Order by the SES_UID column
 * @method     SessionQuery orderBySesStatus($order = Criteria::ASC) Order by the SES_STATUS column
 * @method     SessionQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     SessionQuery orderBySesRemoteIp($order = Criteria::ASC) Order by the SES_REMOTE_IP column
 * @method     SessionQuery orderBySesInitDate($order = Criteria::ASC) Order by the SES_INIT_DATE column
 * @method     SessionQuery orderBySesDueDate($order = Criteria::ASC) Order by the SES_DUE_DATE column
 * @method     SessionQuery orderBySesEndDate($order = Criteria::ASC) Order by the SES_END_DATE column
 *
 * @method     SessionQuery groupBySesUid() Group by the SES_UID column
 * @method     SessionQuery groupBySesStatus() Group by the SES_STATUS column
 * @method     SessionQuery groupByUsrUid() Group by the USR_UID column
 * @method     SessionQuery groupBySesRemoteIp() Group by the SES_REMOTE_IP column
 * @method     SessionQuery groupBySesInitDate() Group by the SES_INIT_DATE column
 * @method     SessionQuery groupBySesDueDate() Group by the SES_DUE_DATE column
 * @method     SessionQuery groupBySesEndDate() Group by the SES_END_DATE column
 *
 * @method     SessionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Session findOne(PropelPDO $con = null) Return the first Session matching the query
 * @method     Session findOneOrCreate(PropelPDO $con = null) Return the first Session matching the query, or a new Session object populated from the query conditions when no match is found
 *
 * @method     Session findOneBySesUid(string $SES_UID) Return the first Session filtered by the SES_UID column
 * @method     Session findOneBySesStatus(string $SES_STATUS) Return the first Session filtered by the SES_STATUS column
 * @method     Session findOneByUsrUid(string $USR_UID) Return the first Session filtered by the USR_UID column
 * @method     Session findOneBySesRemoteIp(string $SES_REMOTE_IP) Return the first Session filtered by the SES_REMOTE_IP column
 * @method     Session findOneBySesInitDate(string $SES_INIT_DATE) Return the first Session filtered by the SES_INIT_DATE column
 * @method     Session findOneBySesDueDate(string $SES_DUE_DATE) Return the first Session filtered by the SES_DUE_DATE column
 * @method     Session findOneBySesEndDate(string $SES_END_DATE) Return the first Session filtered by the SES_END_DATE column
 *
 * @method     array findBySesUid(string $SES_UID) Return Session objects filtered by the SES_UID column
 * @method     array findBySesStatus(string $SES_STATUS) Return Session objects filtered by the SES_STATUS column
 * @method     array findByUsrUid(string $USR_UID) Return Session objects filtered by the USR_UID column
 * @method     array findBySesRemoteIp(string $SES_REMOTE_IP) Return Session objects filtered by the SES_REMOTE_IP column
 * @method     array findBySesInitDate(string $SES_INIT_DATE) Return Session objects filtered by the SES_INIT_DATE column
 * @method     array findBySesDueDate(string $SES_DUE_DATE) Return Session objects filtered by the SES_DUE_DATE column
 * @method     array findBySesEndDate(string $SES_END_DATE) Return Session objects filtered by the SES_END_DATE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSessionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSessionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Session', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SessionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SessionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SessionQuery) {
            return $criteria;
        }
        $query = new SessionQuery();
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
     * @return    Session|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SessionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(SessionPeer::SES_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(SessionPeer::SES_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SES_UID column
     *
     * Example usage:
     * <code>
     * $query->filterBySesUid('fooValue');   // WHERE SES_UID = 'fooValue'
     * $query->filterBySesUid('%fooValue%'); // WHERE SES_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterBySesUid($sesUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sesUid)) {
                $sesUid = str_replace('*', '%', $sesUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SessionPeer::SES_UID, $sesUid, $comparison);
    }

    /**
     * Filter the query on the SES_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterBySesStatus('fooValue');   // WHERE SES_STATUS = 'fooValue'
     * $query->filterBySesStatus('%fooValue%'); // WHERE SES_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterBySesStatus($sesStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sesStatus)) {
                $sesStatus = str_replace('*', '%', $sesStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SessionPeer::SES_STATUS, $sesStatus, $comparison);
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
     * @return    SessionQuery The current query, for fluid interface
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
        return $this->addUsingAlias(SessionPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the SES_REMOTE_IP column
     *
     * Example usage:
     * <code>
     * $query->filterBySesRemoteIp('fooValue');   // WHERE SES_REMOTE_IP = 'fooValue'
     * $query->filterBySesRemoteIp('%fooValue%'); // WHERE SES_REMOTE_IP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesRemoteIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterBySesRemoteIp($sesRemoteIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesRemoteIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sesRemoteIp)) {
                $sesRemoteIp = str_replace('*', '%', $sesRemoteIp);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SessionPeer::SES_REMOTE_IP, $sesRemoteIp, $comparison);
    }

    /**
     * Filter the query on the SES_INIT_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySesInitDate('fooValue');   // WHERE SES_INIT_DATE = 'fooValue'
     * $query->filterBySesInitDate('%fooValue%'); // WHERE SES_INIT_DATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesInitDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterBySesInitDate($sesInitDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesInitDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sesInitDate)) {
                $sesInitDate = str_replace('*', '%', $sesInitDate);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SessionPeer::SES_INIT_DATE, $sesInitDate, $comparison);
    }

    /**
     * Filter the query on the SES_DUE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySesDueDate('fooValue');   // WHERE SES_DUE_DATE = 'fooValue'
     * $query->filterBySesDueDate('%fooValue%'); // WHERE SES_DUE_DATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesDueDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterBySesDueDate($sesDueDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesDueDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sesDueDate)) {
                $sesDueDate = str_replace('*', '%', $sesDueDate);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SessionPeer::SES_DUE_DATE, $sesDueDate, $comparison);
    }

    /**
     * Filter the query on the SES_END_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterBySesEndDate('fooValue');   // WHERE SES_END_DATE = 'fooValue'
     * $query->filterBySesEndDate('%fooValue%'); // WHERE SES_END_DATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesEndDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function filterBySesEndDate($sesEndDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesEndDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sesEndDate)) {
                $sesEndDate = str_replace('*', '%', $sesEndDate);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SessionPeer::SES_END_DATE, $sesEndDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Session $session Object to remove from the list of results
     *
     * @return    SessionQuery The current query, for fluid interface
     */
    public function prune($session = null)
    {
        if ($session) {
            $this->addUsingAlias(SessionPeer::SES_UID, $session->getSesUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSessionQuery