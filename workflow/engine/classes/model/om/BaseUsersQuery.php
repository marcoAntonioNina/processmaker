<?php


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
 * @method     UsersQuery orderByUsrCountry($order = Criteria::ASC) Order by the USR_COUNTRY column
 * @method     UsersQuery orderByUsrCity($order = Criteria::ASC) Order by the USR_CITY column
 * @method     UsersQuery orderByUsrLocation($order = Criteria::ASC) Order by the USR_LOCATION column
 * @method     UsersQuery orderByUsrAddress($order = Criteria::ASC) Order by the USR_ADDRESS column
 * @method     UsersQuery orderByUsrPhone($order = Criteria::ASC) Order by the USR_PHONE column
 * @method     UsersQuery orderByUsrFax($order = Criteria::ASC) Order by the USR_FAX column
 * @method     UsersQuery orderByUsrCellular($order = Criteria::ASC) Order by the USR_CELLULAR column
 * @method     UsersQuery orderByUsrZipCode($order = Criteria::ASC) Order by the USR_ZIP_CODE column
 * @method     UsersQuery orderByDepUid($order = Criteria::ASC) Order by the DEP_UID column
 * @method     UsersQuery orderByUsrPosition($order = Criteria::ASC) Order by the USR_POSITION column
 * @method     UsersQuery orderByUsrResume($order = Criteria::ASC) Order by the USR_RESUME column
 * @method     UsersQuery orderByUsrBirthday($order = Criteria::ASC) Order by the USR_BIRTHDAY column
 * @method     UsersQuery orderByUsrRole($order = Criteria::ASC) Order by the USR_ROLE column
 * @method     UsersQuery orderByUsrReportsTo($order = Criteria::ASC) Order by the USR_REPORTS_TO column
 * @method     UsersQuery orderByUsrReplacedBy($order = Criteria::ASC) Order by the USR_REPLACED_BY column
 * @method     UsersQuery orderByUsrUx($order = Criteria::ASC) Order by the USR_UX column
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
 * @method     UsersQuery groupByUsrCountry() Group by the USR_COUNTRY column
 * @method     UsersQuery groupByUsrCity() Group by the USR_CITY column
 * @method     UsersQuery groupByUsrLocation() Group by the USR_LOCATION column
 * @method     UsersQuery groupByUsrAddress() Group by the USR_ADDRESS column
 * @method     UsersQuery groupByUsrPhone() Group by the USR_PHONE column
 * @method     UsersQuery groupByUsrFax() Group by the USR_FAX column
 * @method     UsersQuery groupByUsrCellular() Group by the USR_CELLULAR column
 * @method     UsersQuery groupByUsrZipCode() Group by the USR_ZIP_CODE column
 * @method     UsersQuery groupByDepUid() Group by the DEP_UID column
 * @method     UsersQuery groupByUsrPosition() Group by the USR_POSITION column
 * @method     UsersQuery groupByUsrResume() Group by the USR_RESUME column
 * @method     UsersQuery groupByUsrBirthday() Group by the USR_BIRTHDAY column
 * @method     UsersQuery groupByUsrRole() Group by the USR_ROLE column
 * @method     UsersQuery groupByUsrReportsTo() Group by the USR_REPORTS_TO column
 * @method     UsersQuery groupByUsrReplacedBy() Group by the USR_REPLACED_BY column
 * @method     UsersQuery groupByUsrUx() Group by the USR_UX column
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
 * @method     Users findOneByUsrStatus(string $USR_STATUS) Return the first Users filtered by the USR_STATUS column
 * @method     Users findOneByUsrCountry(string $USR_COUNTRY) Return the first Users filtered by the USR_COUNTRY column
 * @method     Users findOneByUsrCity(string $USR_CITY) Return the first Users filtered by the USR_CITY column
 * @method     Users findOneByUsrLocation(string $USR_LOCATION) Return the first Users filtered by the USR_LOCATION column
 * @method     Users findOneByUsrAddress(string $USR_ADDRESS) Return the first Users filtered by the USR_ADDRESS column
 * @method     Users findOneByUsrPhone(string $USR_PHONE) Return the first Users filtered by the USR_PHONE column
 * @method     Users findOneByUsrFax(string $USR_FAX) Return the first Users filtered by the USR_FAX column
 * @method     Users findOneByUsrCellular(string $USR_CELLULAR) Return the first Users filtered by the USR_CELLULAR column
 * @method     Users findOneByUsrZipCode(string $USR_ZIP_CODE) Return the first Users filtered by the USR_ZIP_CODE column
 * @method     Users findOneByDepUid(string $DEP_UID) Return the first Users filtered by the DEP_UID column
 * @method     Users findOneByUsrPosition(string $USR_POSITION) Return the first Users filtered by the USR_POSITION column
 * @method     Users findOneByUsrResume(string $USR_RESUME) Return the first Users filtered by the USR_RESUME column
 * @method     Users findOneByUsrBirthday(string $USR_BIRTHDAY) Return the first Users filtered by the USR_BIRTHDAY column
 * @method     Users findOneByUsrRole(string $USR_ROLE) Return the first Users filtered by the USR_ROLE column
 * @method     Users findOneByUsrReportsTo(string $USR_REPORTS_TO) Return the first Users filtered by the USR_REPORTS_TO column
 * @method     Users findOneByUsrReplacedBy(string $USR_REPLACED_BY) Return the first Users filtered by the USR_REPLACED_BY column
 * @method     Users findOneByUsrUx(string $USR_UX) Return the first Users filtered by the USR_UX column
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
 * @method     array findByUsrStatus(string $USR_STATUS) Return Users objects filtered by the USR_STATUS column
 * @method     array findByUsrCountry(string $USR_COUNTRY) Return Users objects filtered by the USR_COUNTRY column
 * @method     array findByUsrCity(string $USR_CITY) Return Users objects filtered by the USR_CITY column
 * @method     array findByUsrLocation(string $USR_LOCATION) Return Users objects filtered by the USR_LOCATION column
 * @method     array findByUsrAddress(string $USR_ADDRESS) Return Users objects filtered by the USR_ADDRESS column
 * @method     array findByUsrPhone(string $USR_PHONE) Return Users objects filtered by the USR_PHONE column
 * @method     array findByUsrFax(string $USR_FAX) Return Users objects filtered by the USR_FAX column
 * @method     array findByUsrCellular(string $USR_CELLULAR) Return Users objects filtered by the USR_CELLULAR column
 * @method     array findByUsrZipCode(string $USR_ZIP_CODE) Return Users objects filtered by the USR_ZIP_CODE column
 * @method     array findByDepUid(string $DEP_UID) Return Users objects filtered by the DEP_UID column
 * @method     array findByUsrPosition(string $USR_POSITION) Return Users objects filtered by the USR_POSITION column
 * @method     array findByUsrResume(string $USR_RESUME) Return Users objects filtered by the USR_RESUME column
 * @method     array findByUsrBirthday(string $USR_BIRTHDAY) Return Users objects filtered by the USR_BIRTHDAY column
 * @method     array findByUsrRole(string $USR_ROLE) Return Users objects filtered by the USR_ROLE column
 * @method     array findByUsrReportsTo(string $USR_REPORTS_TO) Return Users objects filtered by the USR_REPORTS_TO column
 * @method     array findByUsrReplacedBy(string $USR_REPLACED_BY) Return Users objects filtered by the USR_REPLACED_BY column
 * @method     array findByUsrUx(string $USR_UX) Return Users objects filtered by the USR_UX column
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
    public function __construct($dbName = 'workflow', $modelName = 'Users', $modelAlias = null)
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
     * $query->filterByUsrStatus('fooValue');   // WHERE USR_STATUS = 'fooValue'
     * $query->filterByUsrStatus('%fooValue%'); // WHERE USR_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrStatus($usrStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrStatus)) {
                $usrStatus = str_replace('*', '%', $usrStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_STATUS, $usrStatus, $comparison);
    }

    /**
     * Filter the query on the USR_COUNTRY column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrCountry('fooValue');   // WHERE USR_COUNTRY = 'fooValue'
     * $query->filterByUsrCountry('%fooValue%'); // WHERE USR_COUNTRY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrCountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrCountry($usrCountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrCountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrCountry)) {
                $usrCountry = str_replace('*', '%', $usrCountry);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_COUNTRY, $usrCountry, $comparison);
    }

    /**
     * Filter the query on the USR_CITY column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrCity('fooValue');   // WHERE USR_CITY = 'fooValue'
     * $query->filterByUsrCity('%fooValue%'); // WHERE USR_CITY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrCity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrCity($usrCity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrCity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrCity)) {
                $usrCity = str_replace('*', '%', $usrCity);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_CITY, $usrCity, $comparison);
    }

    /**
     * Filter the query on the USR_LOCATION column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrLocation('fooValue');   // WHERE USR_LOCATION = 'fooValue'
     * $query->filterByUsrLocation('%fooValue%'); // WHERE USR_LOCATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrLocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrLocation($usrLocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrLocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrLocation)) {
                $usrLocation = str_replace('*', '%', $usrLocation);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_LOCATION, $usrLocation, $comparison);
    }

    /**
     * Filter the query on the USR_ADDRESS column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrAddress('fooValue');   // WHERE USR_ADDRESS = 'fooValue'
     * $query->filterByUsrAddress('%fooValue%'); // WHERE USR_ADDRESS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrAddress($usrAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrAddress)) {
                $usrAddress = str_replace('*', '%', $usrAddress);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_ADDRESS, $usrAddress, $comparison);
    }

    /**
     * Filter the query on the USR_PHONE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrPhone('fooValue');   // WHERE USR_PHONE = 'fooValue'
     * $query->filterByUsrPhone('%fooValue%'); // WHERE USR_PHONE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrPhone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrPhone($usrPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrPhone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrPhone)) {
                $usrPhone = str_replace('*', '%', $usrPhone);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_PHONE, $usrPhone, $comparison);
    }

    /**
     * Filter the query on the USR_FAX column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrFax('fooValue');   // WHERE USR_FAX = 'fooValue'
     * $query->filterByUsrFax('%fooValue%'); // WHERE USR_FAX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrFax($usrFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrFax)) {
                $usrFax = str_replace('*', '%', $usrFax);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_FAX, $usrFax, $comparison);
    }

    /**
     * Filter the query on the USR_CELLULAR column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrCellular('fooValue');   // WHERE USR_CELLULAR = 'fooValue'
     * $query->filterByUsrCellular('%fooValue%'); // WHERE USR_CELLULAR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrCellular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrCellular($usrCellular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrCellular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrCellular)) {
                $usrCellular = str_replace('*', '%', $usrCellular);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_CELLULAR, $usrCellular, $comparison);
    }

    /**
     * Filter the query on the USR_ZIP_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrZipCode('fooValue');   // WHERE USR_ZIP_CODE = 'fooValue'
     * $query->filterByUsrZipCode('%fooValue%'); // WHERE USR_ZIP_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrZipCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrZipCode($usrZipCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrZipCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrZipCode)) {
                $usrZipCode = str_replace('*', '%', $usrZipCode);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_ZIP_CODE, $usrZipCode, $comparison);
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
     * @return    UsersQuery The current query, for fluid interface
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
        return $this->addUsingAlias(UsersPeer::DEP_UID, $depUid, $comparison);
    }

    /**
     * Filter the query on the USR_POSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrPosition('fooValue');   // WHERE USR_POSITION = 'fooValue'
     * $query->filterByUsrPosition('%fooValue%'); // WHERE USR_POSITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrPosition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrPosition($usrPosition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrPosition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrPosition)) {
                $usrPosition = str_replace('*', '%', $usrPosition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_POSITION, $usrPosition, $comparison);
    }

    /**
     * Filter the query on the USR_RESUME column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrResume('fooValue');   // WHERE USR_RESUME = 'fooValue'
     * $query->filterByUsrResume('%fooValue%'); // WHERE USR_RESUME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrResume The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrResume($usrResume = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrResume)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrResume)) {
                $usrResume = str_replace('*', '%', $usrResume);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_RESUME, $usrResume, $comparison);
    }

    /**
     * Filter the query on the USR_BIRTHDAY column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrBirthday('2011-03-14'); // WHERE USR_BIRTHDAY = '2011-03-14'
     * $query->filterByUsrBirthday('now'); // WHERE USR_BIRTHDAY = '2011-03-14'
     * $query->filterByUsrBirthday(array('max' => 'yesterday')); // WHERE USR_BIRTHDAY > '2011-03-13'
     * </code>
     *
     * @param     mixed $usrBirthday The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrBirthday($usrBirthday = null, $comparison = null)
    {
        if (is_array($usrBirthday)) {
            $useMinMax = false;
            if (isset($usrBirthday['min'])) {
                $this->addUsingAlias(UsersPeer::USR_BIRTHDAY, $usrBirthday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrBirthday['max'])) {
                $this->addUsingAlias(UsersPeer::USR_BIRTHDAY, $usrBirthday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_BIRTHDAY, $usrBirthday, $comparison);
    }

    /**
     * Filter the query on the USR_ROLE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrRole('fooValue');   // WHERE USR_ROLE = 'fooValue'
     * $query->filterByUsrRole('%fooValue%'); // WHERE USR_ROLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrRole The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrRole($usrRole = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrRole)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrRole)) {
                $usrRole = str_replace('*', '%', $usrRole);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_ROLE, $usrRole, $comparison);
    }

    /**
     * Filter the query on the USR_REPORTS_TO column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrReportsTo('fooValue');   // WHERE USR_REPORTS_TO = 'fooValue'
     * $query->filterByUsrReportsTo('%fooValue%'); // WHERE USR_REPORTS_TO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrReportsTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrReportsTo($usrReportsTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrReportsTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrReportsTo)) {
                $usrReportsTo = str_replace('*', '%', $usrReportsTo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_REPORTS_TO, $usrReportsTo, $comparison);
    }

    /**
     * Filter the query on the USR_REPLACED_BY column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrReplacedBy('fooValue');   // WHERE USR_REPLACED_BY = 'fooValue'
     * $query->filterByUsrReplacedBy('%fooValue%'); // WHERE USR_REPLACED_BY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrReplacedBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrReplacedBy($usrReplacedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrReplacedBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrReplacedBy)) {
                $usrReplacedBy = str_replace('*', '%', $usrReplacedBy);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_REPLACED_BY, $usrReplacedBy, $comparison);
    }

    /**
     * Filter the query on the USR_UX column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUx('fooValue');   // WHERE USR_UX = 'fooValue'
     * $query->filterByUsrUx('%fooValue%'); // WHERE USR_UX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrUx The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersQuery The current query, for fluid interface
     */
    public function filterByUsrUx($usrUx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrUx)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrUx)) {
                $usrUx = str_replace('*', '%', $usrUx);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPeer::USR_UX, $usrUx, $comparison);
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