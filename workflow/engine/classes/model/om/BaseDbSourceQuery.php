<?php


/**
 * Base class that represents a query for the 'DB_SOURCE' table.
 *
 * 
 *
 * @method     DbSourceQuery orderByDbsUid($order = Criteria::ASC) Order by the DBS_UID column
 * @method     DbSourceQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     DbSourceQuery orderByDbsType($order = Criteria::ASC) Order by the DBS_TYPE column
 * @method     DbSourceQuery orderByDbsServer($order = Criteria::ASC) Order by the DBS_SERVER column
 * @method     DbSourceQuery orderByDbsDatabaseName($order = Criteria::ASC) Order by the DBS_DATABASE_NAME column
 * @method     DbSourceQuery orderByDbsUsername($order = Criteria::ASC) Order by the DBS_USERNAME column
 * @method     DbSourceQuery orderByDbsPassword($order = Criteria::ASC) Order by the DBS_PASSWORD column
 * @method     DbSourceQuery orderByDbsPort($order = Criteria::ASC) Order by the DBS_PORT column
 * @method     DbSourceQuery orderByDbsEncode($order = Criteria::ASC) Order by the DBS_ENCODE column
 *
 * @method     DbSourceQuery groupByDbsUid() Group by the DBS_UID column
 * @method     DbSourceQuery groupByProUid() Group by the PRO_UID column
 * @method     DbSourceQuery groupByDbsType() Group by the DBS_TYPE column
 * @method     DbSourceQuery groupByDbsServer() Group by the DBS_SERVER column
 * @method     DbSourceQuery groupByDbsDatabaseName() Group by the DBS_DATABASE_NAME column
 * @method     DbSourceQuery groupByDbsUsername() Group by the DBS_USERNAME column
 * @method     DbSourceQuery groupByDbsPassword() Group by the DBS_PASSWORD column
 * @method     DbSourceQuery groupByDbsPort() Group by the DBS_PORT column
 * @method     DbSourceQuery groupByDbsEncode() Group by the DBS_ENCODE column
 *
 * @method     DbSourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DbSourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DbSourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DbSource findOne(PropelPDO $con = null) Return the first DbSource matching the query
 * @method     DbSource findOneOrCreate(PropelPDO $con = null) Return the first DbSource matching the query, or a new DbSource object populated from the query conditions when no match is found
 *
 * @method     DbSource findOneByDbsUid(string $DBS_UID) Return the first DbSource filtered by the DBS_UID column
 * @method     DbSource findOneByProUid(string $PRO_UID) Return the first DbSource filtered by the PRO_UID column
 * @method     DbSource findOneByDbsType(string $DBS_TYPE) Return the first DbSource filtered by the DBS_TYPE column
 * @method     DbSource findOneByDbsServer(string $DBS_SERVER) Return the first DbSource filtered by the DBS_SERVER column
 * @method     DbSource findOneByDbsDatabaseName(string $DBS_DATABASE_NAME) Return the first DbSource filtered by the DBS_DATABASE_NAME column
 * @method     DbSource findOneByDbsUsername(string $DBS_USERNAME) Return the first DbSource filtered by the DBS_USERNAME column
 * @method     DbSource findOneByDbsPassword(string $DBS_PASSWORD) Return the first DbSource filtered by the DBS_PASSWORD column
 * @method     DbSource findOneByDbsPort(int $DBS_PORT) Return the first DbSource filtered by the DBS_PORT column
 * @method     DbSource findOneByDbsEncode(string $DBS_ENCODE) Return the first DbSource filtered by the DBS_ENCODE column
 *
 * @method     array findByDbsUid(string $DBS_UID) Return DbSource objects filtered by the DBS_UID column
 * @method     array findByProUid(string $PRO_UID) Return DbSource objects filtered by the PRO_UID column
 * @method     array findByDbsType(string $DBS_TYPE) Return DbSource objects filtered by the DBS_TYPE column
 * @method     array findByDbsServer(string $DBS_SERVER) Return DbSource objects filtered by the DBS_SERVER column
 * @method     array findByDbsDatabaseName(string $DBS_DATABASE_NAME) Return DbSource objects filtered by the DBS_DATABASE_NAME column
 * @method     array findByDbsUsername(string $DBS_USERNAME) Return DbSource objects filtered by the DBS_USERNAME column
 * @method     array findByDbsPassword(string $DBS_PASSWORD) Return DbSource objects filtered by the DBS_PASSWORD column
 * @method     array findByDbsPort(int $DBS_PORT) Return DbSource objects filtered by the DBS_PORT column
 * @method     array findByDbsEncode(string $DBS_ENCODE) Return DbSource objects filtered by the DBS_ENCODE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDbSourceQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDbSourceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'DbSource', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DbSourceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    DbSourceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DbSourceQuery) {
            return $criteria;
        }
        $query = new DbSourceQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$DBS_UID, $PRO_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    DbSource|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = DbSourcePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(DbSourcePeer::DBS_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DbSourcePeer::PRO_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(DbSourcePeer::DBS_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DbSourcePeer::PRO_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the DBS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsUid('fooValue');   // WHERE DBS_UID = 'fooValue'
     * $query->filterByDbsUid('%fooValue%'); // WHERE DBS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsUid($dbsUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsUid)) {
                $dbsUid = str_replace('*', '%', $dbsUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_UID, $dbsUid, $comparison);
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
     * @return    DbSourceQuery The current query, for fluid interface
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
        return $this->addUsingAlias(DbSourcePeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the DBS_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsType('fooValue');   // WHERE DBS_TYPE = 'fooValue'
     * $query->filterByDbsType('%fooValue%'); // WHERE DBS_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsType($dbsType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsType)) {
                $dbsType = str_replace('*', '%', $dbsType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_TYPE, $dbsType, $comparison);
    }

    /**
     * Filter the query on the DBS_SERVER column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsServer('fooValue');   // WHERE DBS_SERVER = 'fooValue'
     * $query->filterByDbsServer('%fooValue%'); // WHERE DBS_SERVER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsServer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsServer($dbsServer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsServer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsServer)) {
                $dbsServer = str_replace('*', '%', $dbsServer);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_SERVER, $dbsServer, $comparison);
    }

    /**
     * Filter the query on the DBS_DATABASE_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsDatabaseName('fooValue');   // WHERE DBS_DATABASE_NAME = 'fooValue'
     * $query->filterByDbsDatabaseName('%fooValue%'); // WHERE DBS_DATABASE_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsDatabaseName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsDatabaseName($dbsDatabaseName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsDatabaseName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsDatabaseName)) {
                $dbsDatabaseName = str_replace('*', '%', $dbsDatabaseName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_DATABASE_NAME, $dbsDatabaseName, $comparison);
    }

    /**
     * Filter the query on the DBS_USERNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsUsername('fooValue');   // WHERE DBS_USERNAME = 'fooValue'
     * $query->filterByDbsUsername('%fooValue%'); // WHERE DBS_USERNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsUsername($dbsUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsUsername)) {
                $dbsUsername = str_replace('*', '%', $dbsUsername);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_USERNAME, $dbsUsername, $comparison);
    }

    /**
     * Filter the query on the DBS_PASSWORD column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsPassword('fooValue');   // WHERE DBS_PASSWORD = 'fooValue'
     * $query->filterByDbsPassword('%fooValue%'); // WHERE DBS_PASSWORD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsPassword($dbsPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsPassword)) {
                $dbsPassword = str_replace('*', '%', $dbsPassword);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_PASSWORD, $dbsPassword, $comparison);
    }

    /**
     * Filter the query on the DBS_PORT column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsPort(1234); // WHERE DBS_PORT = 1234
     * $query->filterByDbsPort(array(12, 34)); // WHERE DBS_PORT IN (12, 34)
     * $query->filterByDbsPort(array('min' => 12)); // WHERE DBS_PORT > 12
     * </code>
     *
     * @param     mixed $dbsPort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsPort($dbsPort = null, $comparison = null)
    {
        if (is_array($dbsPort)) {
            $useMinMax = false;
            if (isset($dbsPort['min'])) {
                $this->addUsingAlias(DbSourcePeer::DBS_PORT, $dbsPort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dbsPort['max'])) {
                $this->addUsingAlias(DbSourcePeer::DBS_PORT, $dbsPort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_PORT, $dbsPort, $comparison);
    }

    /**
     * Filter the query on the DBS_ENCODE column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsEncode('fooValue');   // WHERE DBS_ENCODE = 'fooValue'
     * $query->filterByDbsEncode('%fooValue%'); // WHERE DBS_ENCODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsEncode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function filterByDbsEncode($dbsEncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsEncode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsEncode)) {
                $dbsEncode = str_replace('*', '%', $dbsEncode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DbSourcePeer::DBS_ENCODE, $dbsEncode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     DbSource $dbSource Object to remove from the list of results
     *
     * @return    DbSourceQuery The current query, for fluid interface
     */
    public function prune($dbSource = null)
    {
        if ($dbSource) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DbSourcePeer::DBS_UID), $dbSource->getDbsUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DbSourcePeer::PRO_UID), $dbSource->getProUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseDbSourceQuery