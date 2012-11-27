<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'AUTHENTICATION_SOURCE' table.
 *
 * 
 *
 * @method     AuthenticationSourceQuery orderByAuthSourceUid($order = Criteria::ASC) Order by the AUTH_SOURCE_UID column
 * @method     AuthenticationSourceQuery orderByAuthSourceName($order = Criteria::ASC) Order by the AUTH_SOURCE_NAME column
 * @method     AuthenticationSourceQuery orderByAuthSourceProvider($order = Criteria::ASC) Order by the AUTH_SOURCE_PROVIDER column
 * @method     AuthenticationSourceQuery orderByAuthSourceServerName($order = Criteria::ASC) Order by the AUTH_SOURCE_SERVER_NAME column
 * @method     AuthenticationSourceQuery orderByAuthSourcePort($order = Criteria::ASC) Order by the AUTH_SOURCE_PORT column
 * @method     AuthenticationSourceQuery orderByAuthSourceEnabledTls($order = Criteria::ASC) Order by the AUTH_SOURCE_ENABLED_TLS column
 * @method     AuthenticationSourceQuery orderByAuthSourceVersion($order = Criteria::ASC) Order by the AUTH_SOURCE_VERSION column
 * @method     AuthenticationSourceQuery orderByAuthSourceBaseDn($order = Criteria::ASC) Order by the AUTH_SOURCE_BASE_DN column
 * @method     AuthenticationSourceQuery orderByAuthAnonymous($order = Criteria::ASC) Order by the AUTH_ANONYMOUS column
 * @method     AuthenticationSourceQuery orderByAuthSourceSearchUser($order = Criteria::ASC) Order by the AUTH_SOURCE_SEARCH_USER column
 * @method     AuthenticationSourceQuery orderByAuthSourcePassword($order = Criteria::ASC) Order by the AUTH_SOURCE_PASSWORD column
 * @method     AuthenticationSourceQuery orderByAuthSourceAttributes($order = Criteria::ASC) Order by the AUTH_SOURCE_ATTRIBUTES column
 * @method     AuthenticationSourceQuery orderByAuthSourceObjectClasses($order = Criteria::ASC) Order by the AUTH_SOURCE_OBJECT_CLASSES column
 * @method     AuthenticationSourceQuery orderByAuthSourceData($order = Criteria::ASC) Order by the AUTH_SOURCE_DATA column
 *
 * @method     AuthenticationSourceQuery groupByAuthSourceUid() Group by the AUTH_SOURCE_UID column
 * @method     AuthenticationSourceQuery groupByAuthSourceName() Group by the AUTH_SOURCE_NAME column
 * @method     AuthenticationSourceQuery groupByAuthSourceProvider() Group by the AUTH_SOURCE_PROVIDER column
 * @method     AuthenticationSourceQuery groupByAuthSourceServerName() Group by the AUTH_SOURCE_SERVER_NAME column
 * @method     AuthenticationSourceQuery groupByAuthSourcePort() Group by the AUTH_SOURCE_PORT column
 * @method     AuthenticationSourceQuery groupByAuthSourceEnabledTls() Group by the AUTH_SOURCE_ENABLED_TLS column
 * @method     AuthenticationSourceQuery groupByAuthSourceVersion() Group by the AUTH_SOURCE_VERSION column
 * @method     AuthenticationSourceQuery groupByAuthSourceBaseDn() Group by the AUTH_SOURCE_BASE_DN column
 * @method     AuthenticationSourceQuery groupByAuthAnonymous() Group by the AUTH_ANONYMOUS column
 * @method     AuthenticationSourceQuery groupByAuthSourceSearchUser() Group by the AUTH_SOURCE_SEARCH_USER column
 * @method     AuthenticationSourceQuery groupByAuthSourcePassword() Group by the AUTH_SOURCE_PASSWORD column
 * @method     AuthenticationSourceQuery groupByAuthSourceAttributes() Group by the AUTH_SOURCE_ATTRIBUTES column
 * @method     AuthenticationSourceQuery groupByAuthSourceObjectClasses() Group by the AUTH_SOURCE_OBJECT_CLASSES column
 * @method     AuthenticationSourceQuery groupByAuthSourceData() Group by the AUTH_SOURCE_DATA column
 *
 * @method     AuthenticationSourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AuthenticationSourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AuthenticationSourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AuthenticationSource findOne(PropelPDO $con = null) Return the first AuthenticationSource matching the query
 * @method     AuthenticationSource findOneOrCreate(PropelPDO $con = null) Return the first AuthenticationSource matching the query, or a new AuthenticationSource object populated from the query conditions when no match is found
 *
 * @method     AuthenticationSource findOneByAuthSourceUid(string $AUTH_SOURCE_UID) Return the first AuthenticationSource filtered by the AUTH_SOURCE_UID column
 * @method     AuthenticationSource findOneByAuthSourceName(string $AUTH_SOURCE_NAME) Return the first AuthenticationSource filtered by the AUTH_SOURCE_NAME column
 * @method     AuthenticationSource findOneByAuthSourceProvider(string $AUTH_SOURCE_PROVIDER) Return the first AuthenticationSource filtered by the AUTH_SOURCE_PROVIDER column
 * @method     AuthenticationSource findOneByAuthSourceServerName(string $AUTH_SOURCE_SERVER_NAME) Return the first AuthenticationSource filtered by the AUTH_SOURCE_SERVER_NAME column
 * @method     AuthenticationSource findOneByAuthSourcePort(int $AUTH_SOURCE_PORT) Return the first AuthenticationSource filtered by the AUTH_SOURCE_PORT column
 * @method     AuthenticationSource findOneByAuthSourceEnabledTls(int $AUTH_SOURCE_ENABLED_TLS) Return the first AuthenticationSource filtered by the AUTH_SOURCE_ENABLED_TLS column
 * @method     AuthenticationSource findOneByAuthSourceVersion(string $AUTH_SOURCE_VERSION) Return the first AuthenticationSource filtered by the AUTH_SOURCE_VERSION column
 * @method     AuthenticationSource findOneByAuthSourceBaseDn(string $AUTH_SOURCE_BASE_DN) Return the first AuthenticationSource filtered by the AUTH_SOURCE_BASE_DN column
 * @method     AuthenticationSource findOneByAuthAnonymous(int $AUTH_ANONYMOUS) Return the first AuthenticationSource filtered by the AUTH_ANONYMOUS column
 * @method     AuthenticationSource findOneByAuthSourceSearchUser(string $AUTH_SOURCE_SEARCH_USER) Return the first AuthenticationSource filtered by the AUTH_SOURCE_SEARCH_USER column
 * @method     AuthenticationSource findOneByAuthSourcePassword(string $AUTH_SOURCE_PASSWORD) Return the first AuthenticationSource filtered by the AUTH_SOURCE_PASSWORD column
 * @method     AuthenticationSource findOneByAuthSourceAttributes(string $AUTH_SOURCE_ATTRIBUTES) Return the first AuthenticationSource filtered by the AUTH_SOURCE_ATTRIBUTES column
 * @method     AuthenticationSource findOneByAuthSourceObjectClasses(string $AUTH_SOURCE_OBJECT_CLASSES) Return the first AuthenticationSource filtered by the AUTH_SOURCE_OBJECT_CLASSES column
 * @method     AuthenticationSource findOneByAuthSourceData(string $AUTH_SOURCE_DATA) Return the first AuthenticationSource filtered by the AUTH_SOURCE_DATA column
 *
 * @method     array findByAuthSourceUid(string $AUTH_SOURCE_UID) Return AuthenticationSource objects filtered by the AUTH_SOURCE_UID column
 * @method     array findByAuthSourceName(string $AUTH_SOURCE_NAME) Return AuthenticationSource objects filtered by the AUTH_SOURCE_NAME column
 * @method     array findByAuthSourceProvider(string $AUTH_SOURCE_PROVIDER) Return AuthenticationSource objects filtered by the AUTH_SOURCE_PROVIDER column
 * @method     array findByAuthSourceServerName(string $AUTH_SOURCE_SERVER_NAME) Return AuthenticationSource objects filtered by the AUTH_SOURCE_SERVER_NAME column
 * @method     array findByAuthSourcePort(int $AUTH_SOURCE_PORT) Return AuthenticationSource objects filtered by the AUTH_SOURCE_PORT column
 * @method     array findByAuthSourceEnabledTls(int $AUTH_SOURCE_ENABLED_TLS) Return AuthenticationSource objects filtered by the AUTH_SOURCE_ENABLED_TLS column
 * @method     array findByAuthSourceVersion(string $AUTH_SOURCE_VERSION) Return AuthenticationSource objects filtered by the AUTH_SOURCE_VERSION column
 * @method     array findByAuthSourceBaseDn(string $AUTH_SOURCE_BASE_DN) Return AuthenticationSource objects filtered by the AUTH_SOURCE_BASE_DN column
 * @method     array findByAuthAnonymous(int $AUTH_ANONYMOUS) Return AuthenticationSource objects filtered by the AUTH_ANONYMOUS column
 * @method     array findByAuthSourceSearchUser(string $AUTH_SOURCE_SEARCH_USER) Return AuthenticationSource objects filtered by the AUTH_SOURCE_SEARCH_USER column
 * @method     array findByAuthSourcePassword(string $AUTH_SOURCE_PASSWORD) Return AuthenticationSource objects filtered by the AUTH_SOURCE_PASSWORD column
 * @method     array findByAuthSourceAttributes(string $AUTH_SOURCE_ATTRIBUTES) Return AuthenticationSource objects filtered by the AUTH_SOURCE_ATTRIBUTES column
 * @method     array findByAuthSourceObjectClasses(string $AUTH_SOURCE_OBJECT_CLASSES) Return AuthenticationSource objects filtered by the AUTH_SOURCE_OBJECT_CLASSES column
 * @method     array findByAuthSourceData(string $AUTH_SOURCE_DATA) Return AuthenticationSource objects filtered by the AUTH_SOURCE_DATA column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAuthenticationSourceQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAuthenticationSourceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'AuthenticationSource', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AuthenticationSourceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AuthenticationSourceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AuthenticationSourceQuery) {
            return $criteria;
        }
        $query = new AuthenticationSourceQuery();
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
     * @return    AuthenticationSource|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AuthenticationSourcePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AUTH_SOURCE_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceUid('fooValue');   // WHERE AUTH_SOURCE_UID = 'fooValue'
     * $query->filterByAuthSourceUid('%fooValue%'); // WHERE AUTH_SOURCE_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceUid($authSourceUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceUid)) {
                $authSourceUid = str_replace('*', '%', $authSourceUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_UID, $authSourceUid, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceName('fooValue');   // WHERE AUTH_SOURCE_NAME = 'fooValue'
     * $query->filterByAuthSourceName('%fooValue%'); // WHERE AUTH_SOURCE_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceName($authSourceName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceName)) {
                $authSourceName = str_replace('*', '%', $authSourceName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_NAME, $authSourceName, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_PROVIDER column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceProvider('fooValue');   // WHERE AUTH_SOURCE_PROVIDER = 'fooValue'
     * $query->filterByAuthSourceProvider('%fooValue%'); // WHERE AUTH_SOURCE_PROVIDER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceProvider The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceProvider($authSourceProvider = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceProvider)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceProvider)) {
                $authSourceProvider = str_replace('*', '%', $authSourceProvider);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_PROVIDER, $authSourceProvider, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_SERVER_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceServerName('fooValue');   // WHERE AUTH_SOURCE_SERVER_NAME = 'fooValue'
     * $query->filterByAuthSourceServerName('%fooValue%'); // WHERE AUTH_SOURCE_SERVER_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceServerName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceServerName($authSourceServerName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceServerName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceServerName)) {
                $authSourceServerName = str_replace('*', '%', $authSourceServerName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_SERVER_NAME, $authSourceServerName, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_PORT column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourcePort(1234); // WHERE AUTH_SOURCE_PORT = 1234
     * $query->filterByAuthSourcePort(array(12, 34)); // WHERE AUTH_SOURCE_PORT IN (12, 34)
     * $query->filterByAuthSourcePort(array('min' => 12)); // WHERE AUTH_SOURCE_PORT > 12
     * </code>
     *
     * @param     mixed $authSourcePort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourcePort($authSourcePort = null, $comparison = null)
    {
        if (is_array($authSourcePort)) {
            $useMinMax = false;
            if (isset($authSourcePort['min'])) {
                $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_PORT, $authSourcePort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($authSourcePort['max'])) {
                $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_PORT, $authSourcePort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_PORT, $authSourcePort, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_ENABLED_TLS column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceEnabledTls(1234); // WHERE AUTH_SOURCE_ENABLED_TLS = 1234
     * $query->filterByAuthSourceEnabledTls(array(12, 34)); // WHERE AUTH_SOURCE_ENABLED_TLS IN (12, 34)
     * $query->filterByAuthSourceEnabledTls(array('min' => 12)); // WHERE AUTH_SOURCE_ENABLED_TLS > 12
     * </code>
     *
     * @param     mixed $authSourceEnabledTls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceEnabledTls($authSourceEnabledTls = null, $comparison = null)
    {
        if (is_array($authSourceEnabledTls)) {
            $useMinMax = false;
            if (isset($authSourceEnabledTls['min'])) {
                $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_ENABLED_TLS, $authSourceEnabledTls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($authSourceEnabledTls['max'])) {
                $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_ENABLED_TLS, $authSourceEnabledTls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_ENABLED_TLS, $authSourceEnabledTls, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_VERSION column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceVersion('fooValue');   // WHERE AUTH_SOURCE_VERSION = 'fooValue'
     * $query->filterByAuthSourceVersion('%fooValue%'); // WHERE AUTH_SOURCE_VERSION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceVersion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceVersion($authSourceVersion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceVersion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceVersion)) {
                $authSourceVersion = str_replace('*', '%', $authSourceVersion);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_VERSION, $authSourceVersion, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_BASE_DN column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceBaseDn('fooValue');   // WHERE AUTH_SOURCE_BASE_DN = 'fooValue'
     * $query->filterByAuthSourceBaseDn('%fooValue%'); // WHERE AUTH_SOURCE_BASE_DN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceBaseDn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceBaseDn($authSourceBaseDn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceBaseDn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceBaseDn)) {
                $authSourceBaseDn = str_replace('*', '%', $authSourceBaseDn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_BASE_DN, $authSourceBaseDn, $comparison);
    }

    /**
     * Filter the query on the AUTH_ANONYMOUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthAnonymous(1234); // WHERE AUTH_ANONYMOUS = 1234
     * $query->filterByAuthAnonymous(array(12, 34)); // WHERE AUTH_ANONYMOUS IN (12, 34)
     * $query->filterByAuthAnonymous(array('min' => 12)); // WHERE AUTH_ANONYMOUS > 12
     * </code>
     *
     * @param     mixed $authAnonymous The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthAnonymous($authAnonymous = null, $comparison = null)
    {
        if (is_array($authAnonymous)) {
            $useMinMax = false;
            if (isset($authAnonymous['min'])) {
                $this->addUsingAlias(AuthenticationSourcePeer::AUTH_ANONYMOUS, $authAnonymous['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($authAnonymous['max'])) {
                $this->addUsingAlias(AuthenticationSourcePeer::AUTH_ANONYMOUS, $authAnonymous['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_ANONYMOUS, $authAnonymous, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_SEARCH_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceSearchUser('fooValue');   // WHERE AUTH_SOURCE_SEARCH_USER = 'fooValue'
     * $query->filterByAuthSourceSearchUser('%fooValue%'); // WHERE AUTH_SOURCE_SEARCH_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceSearchUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceSearchUser($authSourceSearchUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceSearchUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceSearchUser)) {
                $authSourceSearchUser = str_replace('*', '%', $authSourceSearchUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_SEARCH_USER, $authSourceSearchUser, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_PASSWORD column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourcePassword('fooValue');   // WHERE AUTH_SOURCE_PASSWORD = 'fooValue'
     * $query->filterByAuthSourcePassword('%fooValue%'); // WHERE AUTH_SOURCE_PASSWORD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourcePassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourcePassword($authSourcePassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourcePassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourcePassword)) {
                $authSourcePassword = str_replace('*', '%', $authSourcePassword);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_PASSWORD, $authSourcePassword, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_ATTRIBUTES column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceAttributes('fooValue');   // WHERE AUTH_SOURCE_ATTRIBUTES = 'fooValue'
     * $query->filterByAuthSourceAttributes('%fooValue%'); // WHERE AUTH_SOURCE_ATTRIBUTES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceAttributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceAttributes($authSourceAttributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceAttributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceAttributes)) {
                $authSourceAttributes = str_replace('*', '%', $authSourceAttributes);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_ATTRIBUTES, $authSourceAttributes, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_OBJECT_CLASSES column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceObjectClasses('fooValue');   // WHERE AUTH_SOURCE_OBJECT_CLASSES = 'fooValue'
     * $query->filterByAuthSourceObjectClasses('%fooValue%'); // WHERE AUTH_SOURCE_OBJECT_CLASSES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceObjectClasses The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceObjectClasses($authSourceObjectClasses = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceObjectClasses)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceObjectClasses)) {
                $authSourceObjectClasses = str_replace('*', '%', $authSourceObjectClasses);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_OBJECT_CLASSES, $authSourceObjectClasses, $comparison);
    }

    /**
     * Filter the query on the AUTH_SOURCE_DATA column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthSourceData('fooValue');   // WHERE AUTH_SOURCE_DATA = 'fooValue'
     * $query->filterByAuthSourceData('%fooValue%'); // WHERE AUTH_SOURCE_DATA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authSourceData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function filterByAuthSourceData($authSourceData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authSourceData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authSourceData)) {
                $authSourceData = str_replace('*', '%', $authSourceData);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_DATA, $authSourceData, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AuthenticationSource $authenticationSource Object to remove from the list of results
     *
     * @return    AuthenticationSourceQuery The current query, for fluid interface
     */
    public function prune($authenticationSource = null)
    {
        if ($authenticationSource) {
            $this->addUsingAlias(AuthenticationSourcePeer::AUTH_SOURCE_UID, $authenticationSource->getAuthSourceUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAuthenticationSourceQuery