<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'USERS' table.
 *
 * 
 *
 * @method     UsersQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     UsersQuery orderByUsrUsername($order = Criteria::ASC) Order by the USR_USERNAME column
 * @method     UsersQuery orderByUsrPassword($order = Criteria::ASC) Order by the USR_PASSWORD column
 * @method     UsersQuery orderByUsrFirstname($order = Criteria::ASC) Order by the USR_FIRSTNAME column
 * @method     UsersQuery orderByUsrLastname($order = Criteria::ASC) Order by the USR_LASTNAME column
 * @method     UsersQuery orderByUsrEmail($order = Criteria::ASC) Order by the USR_EMAIL column
 * @method     UsersQuery orderByUsrDueDate($order = Criteria::ASC) Order by the USR_DUE_DATE column
 * @method     UsersQuery orderByUsrCreateDate($order = Criteria::ASC) Order by the USR_CREATE_DATE column
 * @method     UsersQuery orderByUsrUpdateDate($order = Criteria::ASC) Order by the USR_UPDATE_DATE column
 * @method     UsersQuery orderByUsrStatus($order = Criteria::ASC) Order by the USR_STATUS column
 * @method     UsersQuery orderByUsrAuthType($order = Criteria::ASC) Order by the USR_AUTH_TYPE column
 * @method     UsersQuery orderByUidAuthSource($order = Criteria::ASC) Order by the UID_AUTH_SOURCE column
 * @method     UsersQuery orderByUsrAuthUserDn($order = Criteria::ASC) Order by the USR_AUTH_USER_DN column
 * @method     UsersQuery orderByUsrAuthSupervisorDn($order = Criteria::ASC) Order by the USR_AUTH_SUPERVISOR_DN column
 *
 * @method     UsersQuery groupByUsrUid() Group by the USR_UID column
 * @method     UsersQuery groupByUsrUsername() Group by the USR_USERNAME column
 * @method     UsersQuery groupByUsrPassword() Group by the USR_PASSWORD column
 * @method     UsersQuery groupByUsrFirstname() Group by the USR_FIRSTNAME column
 * @method     UsersQuery groupByUsrLastname() Group by the USR_LASTNAME column
 * @method     UsersQuery groupByUsrEmail() Group by the USR_EMAIL column
 * @method     UsersQuery groupByUsrDueDate() Group by the USR_DUE_DATE column
 * @method     UsersQuery groupByUsrCreateDate() Group by the USR_CREATE_DATE column
 * @method     UsersQuery groupByUsrUpdateDate() Group by the USR_UPDATE_DATE column
 * @method     UsersQuery groupByUsrStatus() Group by the USR_STATUS column
 * @method     UsersQuery groupByUsrAuthType() Group by the USR_AUTH_TYPE column
 * @method     UsersQuery groupByUidAuthSource() Group by the UID_AUTH_SOURCE column
 * @method     UsersQuery groupByUsrAuthUserDn() Group by the USR_AUTH_USER_DN column
 * @method     UsersQuery groupByUsrAuthSupervisorDn() Group by the USR_AUTH_SUPERVISOR_DN column
 *
 * @method     UsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Users findOne(PropelPDO $con = null) Return the first Users matching the query
 * @method     Users findOneOrCreate(PropelPDO $con = null) Return the first Users matching the query, or a new Users object populated from the query conditions when no match is found
 *
 * @method     Users findOneByUsrUid(string $USR_UID) Return the first Users filtered by the USR_UID column
 * @method     Users findOneByUsrUsername(string $USR_USERNAME) Return the first Users filtered by the USR_USERNAME column
 * @method     Users findOneByUsrPassword(string $USR_PASSWORD) Return the first Users filtered by the USR_PASSWORD column
 * @method     Users findOneByUsrFirstname(string $USR_FIRSTNAME) Return the first Users filtered by the USR_FIRSTNAME column
 * @method     Users findOneByUsrLastname(string $USR_LASTNAME) Return the first Users filtered by the USR_LASTNAME column
 * @method     Users findOneByUsrEmail(string $USR_EMAIL) Return the first Users filtered by the USR_EMAIL column
 * @method     Users findOneByUsrDueDate(string $USR_DUE_DATE) Return the first Users filtered by the USR_DUE_DATE column
 * @method     Users findOneByUsrCreateDate(string $USR_CREATE_DATE) Return the first Users filtered by the USR_CREATE_DATE column
 * @method     Users findOneByUsrUpdateDate(string $USR_UPDATE_DATE) Return the first Users filtered by the USR_UPDATE_DATE column
 * @method     Users findOneByUsrStatus(int $USR_STATUS) Return the first Users filtered by the USR_STATUS column
 * @method     Users findOneByUsrAuthType(string $USR_AUTH_TYPE) Return the first Users filtered by the USR_AUTH_TYPE column
 * @method     Users findOneByUidAuthSource(string $UID_AUTH_SOURCE) Return the first Users filtered by the UID_AUTH_SOURCE column
 * @method     Users findOneByUsrAuthUserDn(string $USR_AUTH_USER_DN) Return the first Users filtered by the USR_AUTH_USER_DN column
 * @method     Users findOneByUsrAuthSupervisorDn(string $USR_AUTH_SUPERVISOR_DN) Return the first Users filtered by the USR_AUTH_SUPERVISOR_DN column
 *
 * @method     array findByUsrUid(string $USR_UID) Return Users objects filtered by the USR_UID column
 * @method     array findByUsrUsername(string $USR_USERNAME) Return Users objects filtered by the USR_USERNAME column
 * @method     array findByUsrPassword(string $USR_PASSWORD) Return Users objects filtered by the USR_PASSWORD column
 * @method     array findByUsrFirstname(string $USR_FIRSTNAME) Return Users objects filtered by the USR_FIRSTNAME column
 * @method     array findByUsrLastname(string $USR_LASTNAME) Return Users objects filtered by the USR_LASTNAME column
 * @method     array findByUsrEmail(string $USR_EMAIL) Return Users objects filtered by the USR_EMAIL column
 * @method     array findByUsrDueDate(string $USR_DUE_DATE) Return Users objects filtered by the USR_DUE_DATE column
 * @method     array findByUsrCreateDate(string $USR_CREATE_DATE) Return Users objects filtered by the USR_CREATE_DATE column
 * @method     array findByUsrUpdateDate(string $USR_UPDATE_DATE) Return Users objects filtered by the USR_UPDATE_DATE column
 * @method     array findByUsrStatus(int $USR_STATUS) Return Users objects filtered by the USR_STATUS column
 * @method     array findByUsrAuthType(string $USR_AUTH_TYPE) Return Users objects filtered by the USR_AUTH_TYPE column
 * @method     array findByUidAuthSource(string $UID_AUTH_SOURCE) Return Users objects filtered by the UID_AUTH_SOURCE column
 * @method     array findByUsrAuthUserDn(string $USR_AUTH_USER_DN) Return Users objects filtered by the USR_AUTH_USER_DN column
 * @method     array findByUsrAuthSupervisorDn(string $USR_AUTH_SUPERVISOR_DN) Return Users objects filtered by the USR_AUTH_SUPERVISOR_DN column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseUsersQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'Users', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    UsersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsersQuery) {
            return $criteria;
        }
        $query = new UsersQuery();
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
     * @return    Users|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = UsersPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(UsersPeer::USR_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(UsersPeer::USR_UID, $keys, Criteria::IN);
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
     * @return    UsersQuery The current query, for fluid interface
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
        return $this->addUsingAlias(UsersPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the USR_USERNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUsername('fooValue');   // WHERE USR_USERNAME = 'fooValue'
     * $query->filterByUsrUsername('%fooValue%'); // WHERE USR_USERNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrUsername($usrUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrUsername)) {
                $usrUsername = str_replace('*', '%', $usrUsername);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_USERNAME, $usrUsername, $comparison);
    }

    /**
     * Filter the query on the USR_PASSWORD column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrPassword('fooValue');   // WHERE USR_PASSWORD = 'fooValue'
     * $query->filterByUsrPassword('%fooValue%'); // WHERE USR_PASSWORD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrPassword($usrPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrPassword)) {
                $usrPassword = str_replace('*', '%', $usrPassword);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_PASSWORD, $usrPassword, $comparison);
    }

    /**
     * Filter the query on the USR_FIRSTNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrFirstname('fooValue');   // WHERE USR_FIRSTNAME = 'fooValue'
     * $query->filterByUsrFirstname('%fooValue%'); // WHERE USR_FIRSTNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrFirstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrFirstname($usrFirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrFirstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrFirstname)) {
                $usrFirstname = str_replace('*', '%', $usrFirstname);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_FIRSTNAME, $usrFirstname, $comparison);
    }

    /**
     * Filter the query on the USR_LASTNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrLastname('fooValue');   // WHERE USR_LASTNAME = 'fooValue'
     * $query->filterByUsrLastname('%fooValue%'); // WHERE USR_LASTNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrLastname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrLastname($usrLastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrLastname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrLastname)) {
                $usrLastname = str_replace('*', '%', $usrLastname);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_LASTNAME, $usrLastname, $comparison);
    }

    /**
     * Filter the query on the USR_EMAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrEmail('fooValue');   // WHERE USR_EMAIL = 'fooValue'
     * $query->filterByUsrEmail('%fooValue%'); // WHERE USR_EMAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrEmail($usrEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrEmail)) {
                $usrEmail = str_replace('*', '%', $usrEmail);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_EMAIL, $usrEmail, $comparison);
    }

    /**
     * Filter the query on the USR_DUE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrDueDate('2011-03-14'); // WHERE USR_DUE_DATE = '2011-03-14'
     * $query->filterByUsrDueDate('now'); // WHERE USR_DUE_DATE = '2011-03-14'
     * $query->filterByUsrDueDate(array('max' => 'yesterday')); // WHERE USR_DUE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $usrDueDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrDueDate($usrDueDate = null, $comparison = null)
    {
        if (is_array($usrDueDate)) {
            $useMinMax = false;
            if (isset($usrDueDate['min'])) {
                $this->addUsingAlias(UsersPeer::USR_DUE_DATE, $usrDueDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrDueDate['max'])) {
                $this->addUsingAlias(UsersPeer::USR_DUE_DATE, $usrDueDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_DUE_DATE, $usrDueDate, $comparison);
    }

    /**
     * Filter the query on the USR_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrCreateDate('2011-03-14'); // WHERE USR_CREATE_DATE = '2011-03-14'
     * $query->filterByUsrCreateDate('now'); // WHERE USR_CREATE_DATE = '2011-03-14'
     * $query->filterByUsrCreateDate(array('max' => 'yesterday')); // WHERE USR_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $usrCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrCreateDate($usrCreateDate = null, $comparison = null)
    {
        if (is_array($usrCreateDate)) {
            $useMinMax = false;
            if (isset($usrCreateDate['min'])) {
                $this->addUsingAlias(UsersPeer::USR_CREATE_DATE, $usrCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrCreateDate['max'])) {
                $this->addUsingAlias(UsersPeer::USR_CREATE_DATE, $usrCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_CREATE_DATE, $usrCreateDate, $comparison);
    }

    /**
     * Filter the query on the USR_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUpdateDate('2011-03-14'); // WHERE USR_UPDATE_DATE = '2011-03-14'
     * $query->filterByUsrUpdateDate('now'); // WHERE USR_UPDATE_DATE = '2011-03-14'
     * $query->filterByUsrUpdateDate(array('max' => 'yesterday')); // WHERE USR_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $usrUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrUpdateDate($usrUpdateDate = null, $comparison = null)
    {
        if (is_array($usrUpdateDate)) {
            $useMinMax = false;
            if (isset($usrUpdateDate['min'])) {
                $this->addUsingAlias(UsersPeer::USR_UPDATE_DATE, $usrUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrUpdateDate['max'])) {
                $this->addUsingAlias(UsersPeer::USR_UPDATE_DATE, $usrUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_UPDATE_DATE, $usrUpdateDate, $comparison);
    }

    /**
     * Filter the query on the USR_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrStatus(1234); // WHERE USR_STATUS = 1234
     * $query->filterByUsrStatus(array(12, 34)); // WHERE USR_STATUS IN (12, 34)
     * $query->filterByUsrStatus(array('min' => 12)); // WHERE USR_STATUS > 12
     * </code>
     *
     * @param     mixed $usrStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrStatus($usrStatus = null, $comparison = null)
    {
        if (is_array($usrStatus)) {
            $useMinMax = false;
            if (isset($usrStatus['min'])) {
                $this->addUsingAlias(UsersPeer::USR_STATUS, $usrStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrStatus['max'])) {
                $this->addUsingAlias(UsersPeer::USR_STATUS, $usrStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_STATUS, $usrStatus, $comparison);
    }

    /**
     * Filter the query on the USR_AUTH_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrAuthType('fooValue');   // WHERE USR_AUTH_TYPE = 'fooValue'
     * $query->filterByUsrAuthType('%fooValue%'); // WHERE USR_AUTH_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrAuthType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrAuthType($usrAuthType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrAuthType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrAuthType)) {
                $usrAuthType = str_replace('*', '%', $usrAuthType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_AUTH_TYPE, $usrAuthType, $comparison);
    }

    /**
     * Filter the query on the UID_AUTH_SOURCE column
     *
     * Example usage:
     * <code>
     * $query->filterByUidAuthSource('fooValue');   // WHERE UID_AUTH_SOURCE = 'fooValue'
     * $query->filterByUidAuthSource('%fooValue%'); // WHERE UID_AUTH_SOURCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uidAuthSource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUidAuthSource($uidAuthSource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uidAuthSource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uidAuthSource)) {
                $uidAuthSource = str_replace('*', '%', $uidAuthSource);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::UID_AUTH_SOURCE, $uidAuthSource, $comparison);
    }

    /**
     * Filter the query on the USR_AUTH_USER_DN column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrAuthUserDn('fooValue');   // WHERE USR_AUTH_USER_DN = 'fooValue'
     * $query->filterByUsrAuthUserDn('%fooValue%'); // WHERE USR_AUTH_USER_DN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrAuthUserDn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrAuthUserDn($usrAuthUserDn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrAuthUserDn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrAuthUserDn)) {
                $usrAuthUserDn = str_replace('*', '%', $usrAuthUserDn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_AUTH_USER_DN, $usrAuthUserDn, $comparison);
    }

    /**
     * Filter the query on the USR_AUTH_SUPERVISOR_DN column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrAuthSupervisorDn('fooValue');   // WHERE USR_AUTH_SUPERVISOR_DN = 'fooValue'
     * $query->filterByUsrAuthSupervisorDn('%fooValue%'); // WHERE USR_AUTH_SUPERVISOR_DN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrAuthSupervisorDn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrAuthSupervisorDn($usrAuthSupervisorDn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrAuthSupervisorDn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrAuthSupervisorDn)) {
                $usrAuthSupervisorDn = str_replace('*', '%', $usrAuthSupervisorDn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_AUTH_SUPERVISOR_DN, $usrAuthSupervisorDn, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Users $users Object to remove from the list of results
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function prune($users = null)
    {
        if ($users) {
            $this->addUsingAlias(UsersPeer::USR_UID, $users->getUsrUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseUsersQuery