<?php


/**
 * Base class that represents a query for the 'USERS_PROPERTIES' table.
 *
 * 
 *
 * @method     UsersPropertiesQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     UsersPropertiesQuery orderByUsrLastUpdateDate($order = Criteria::ASC) Order by the USR_LAST_UPDATE_DATE column
 * @method     UsersPropertiesQuery orderByUsrLoggedNextTime($order = Criteria::ASC) Order by the USR_LOGGED_NEXT_TIME column
 * @method     UsersPropertiesQuery orderByUsrPasswordHistory($order = Criteria::ASC) Order by the USR_PASSWORD_HISTORY column
 *
 * @method     UsersPropertiesQuery groupByUsrUid() Group by the USR_UID column
 * @method     UsersPropertiesQuery groupByUsrLastUpdateDate() Group by the USR_LAST_UPDATE_DATE column
 * @method     UsersPropertiesQuery groupByUsrLoggedNextTime() Group by the USR_LOGGED_NEXT_TIME column
 * @method     UsersPropertiesQuery groupByUsrPasswordHistory() Group by the USR_PASSWORD_HISTORY column
 *
 * @method     UsersPropertiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsersPropertiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsersPropertiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsersProperties findOne(PropelPDO $con = null) Return the first UsersProperties matching the query
 * @method     UsersProperties findOneOrCreate(PropelPDO $con = null) Return the first UsersProperties matching the query, or a new UsersProperties object populated from the query conditions when no match is found
 *
 * @method     UsersProperties findOneByUsrUid(string $USR_UID) Return the first UsersProperties filtered by the USR_UID column
 * @method     UsersProperties findOneByUsrLastUpdateDate(string $USR_LAST_UPDATE_DATE) Return the first UsersProperties filtered by the USR_LAST_UPDATE_DATE column
 * @method     UsersProperties findOneByUsrLoggedNextTime(int $USR_LOGGED_NEXT_TIME) Return the first UsersProperties filtered by the USR_LOGGED_NEXT_TIME column
 * @method     UsersProperties findOneByUsrPasswordHistory(string $USR_PASSWORD_HISTORY) Return the first UsersProperties filtered by the USR_PASSWORD_HISTORY column
 *
 * @method     array findByUsrUid(string $USR_UID) Return UsersProperties objects filtered by the USR_UID column
 * @method     array findByUsrLastUpdateDate(string $USR_LAST_UPDATE_DATE) Return UsersProperties objects filtered by the USR_LAST_UPDATE_DATE column
 * @method     array findByUsrLoggedNextTime(int $USR_LOGGED_NEXT_TIME) Return UsersProperties objects filtered by the USR_LOGGED_NEXT_TIME column
 * @method     array findByUsrPasswordHistory(string $USR_PASSWORD_HISTORY) Return UsersProperties objects filtered by the USR_PASSWORD_HISTORY column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseUsersPropertiesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsersPropertiesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'UsersProperties', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsersPropertiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    UsersPropertiesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsersPropertiesQuery) {
            return $criteria;
        }
        $query = new UsersPropertiesQuery();
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
     * @return    UsersProperties|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = UsersPropertiesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    UsersPropertiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(UsersPropertiesPeer::USR_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    UsersPropertiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(UsersPropertiesPeer::USR_UID, $keys, Criteria::IN);
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
     * @return    UsersPropertiesQuery The current query, for fluid interface
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
        return $this->addUsingAlias(UsersPropertiesPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the USR_LAST_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrLastUpdateDate('2011-03-14'); // WHERE USR_LAST_UPDATE_DATE = '2011-03-14'
     * $query->filterByUsrLastUpdateDate('now'); // WHERE USR_LAST_UPDATE_DATE = '2011-03-14'
     * $query->filterByUsrLastUpdateDate(array('max' => 'yesterday')); // WHERE USR_LAST_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $usrLastUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersPropertiesQuery The current query, for fluid interface
     */
    public function filterByUsrLastUpdateDate($usrLastUpdateDate = null, $comparison = null)
    {
        if (is_array($usrLastUpdateDate)) {
            $useMinMax = false;
            if (isset($usrLastUpdateDate['min'])) {
                $this->addUsingAlias(UsersPropertiesPeer::USR_LAST_UPDATE_DATE, $usrLastUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrLastUpdateDate['max'])) {
                $this->addUsingAlias(UsersPropertiesPeer::USR_LAST_UPDATE_DATE, $usrLastUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPropertiesPeer::USR_LAST_UPDATE_DATE, $usrLastUpdateDate, $comparison);
    }

    /**
     * Filter the query on the USR_LOGGED_NEXT_TIME column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrLoggedNextTime(1234); // WHERE USR_LOGGED_NEXT_TIME = 1234
     * $query->filterByUsrLoggedNextTime(array(12, 34)); // WHERE USR_LOGGED_NEXT_TIME IN (12, 34)
     * $query->filterByUsrLoggedNextTime(array('min' => 12)); // WHERE USR_LOGGED_NEXT_TIME > 12
     * </code>
     *
     * @param     mixed $usrLoggedNextTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersPropertiesQuery The current query, for fluid interface
     */
    public function filterByUsrLoggedNextTime($usrLoggedNextTime = null, $comparison = null)
    {
        if (is_array($usrLoggedNextTime)) {
            $useMinMax = false;
            if (isset($usrLoggedNextTime['min'])) {
                $this->addUsingAlias(UsersPropertiesPeer::USR_LOGGED_NEXT_TIME, $usrLoggedNextTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usrLoggedNextTime['max'])) {
                $this->addUsingAlias(UsersPropertiesPeer::USR_LOGGED_NEXT_TIME, $usrLoggedNextTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsersPropertiesPeer::USR_LOGGED_NEXT_TIME, $usrLoggedNextTime, $comparison);
    }

    /**
     * Filter the query on the USR_PASSWORD_HISTORY column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrPasswordHistory('fooValue');   // WHERE USR_PASSWORD_HISTORY = 'fooValue'
     * $query->filterByUsrPasswordHistory('%fooValue%'); // WHERE USR_PASSWORD_HISTORY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrPasswordHistory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersPropertiesQuery The current query, for fluid interface
     */
    public function filterByUsrPasswordHistory($usrPasswordHistory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrPasswordHistory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrPasswordHistory)) {
                $usrPasswordHistory = str_replace('*', '%', $usrPasswordHistory);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersPropertiesPeer::USR_PASSWORD_HISTORY, $usrPasswordHistory, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     UsersProperties $usersProperties Object to remove from the list of results
     *
     * @return    UsersPropertiesQuery The current query, for fluid interface
     */
    public function prune($usersProperties = null)
    {
        if ($usersProperties) {
            $this->addUsingAlias(UsersPropertiesPeer::USR_UID, $usersProperties->getUsrUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseUsersPropertiesQuery