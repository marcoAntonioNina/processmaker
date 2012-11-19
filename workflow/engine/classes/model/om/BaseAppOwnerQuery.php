<?php


/**
 * Base class that represents a query for the 'APP_OWNER' table.
 *
 * 
 *
 * @method     AppOwnerQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppOwnerQuery orderByOwnUid($order = Criteria::ASC) Order by the OWN_UID column
 * @method     AppOwnerQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 *
 * @method     AppOwnerQuery groupByAppUid() Group by the APP_UID column
 * @method     AppOwnerQuery groupByOwnUid() Group by the OWN_UID column
 * @method     AppOwnerQuery groupByUsrUid() Group by the USR_UID column
 *
 * @method     AppOwnerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppOwnerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppOwnerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppOwner findOne(PropelPDO $con = null) Return the first AppOwner matching the query
 * @method     AppOwner findOneOrCreate(PropelPDO $con = null) Return the first AppOwner matching the query, or a new AppOwner object populated from the query conditions when no match is found
 *
 * @method     AppOwner findOneByAppUid(string $APP_UID) Return the first AppOwner filtered by the APP_UID column
 * @method     AppOwner findOneByOwnUid(string $OWN_UID) Return the first AppOwner filtered by the OWN_UID column
 * @method     AppOwner findOneByUsrUid(string $USR_UID) Return the first AppOwner filtered by the USR_UID column
 *
 * @method     array findByAppUid(string $APP_UID) Return AppOwner objects filtered by the APP_UID column
 * @method     array findByOwnUid(string $OWN_UID) Return AppOwner objects filtered by the OWN_UID column
 * @method     array findByUsrUid(string $USR_UID) Return AppOwner objects filtered by the USR_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppOwnerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppOwnerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppOwner', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppOwnerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppOwnerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppOwnerQuery) {
            return $criteria;
        }
        $query = new AppOwnerQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     * @param     array[$APP_UID, $OWN_UID, $USR_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    AppOwner|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppOwnerPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppOwnerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AppOwnerPeer::APP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AppOwnerPeer::OWN_UID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(AppOwnerPeer::USR_UID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppOwnerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AppOwnerPeer::APP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AppOwnerPeer::OWN_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(AppOwnerPeer::USR_UID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    AppOwnerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppOwnerPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the OWN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByOwnUid('fooValue');   // WHERE OWN_UID = 'fooValue'
     * $query->filterByOwnUid('%fooValue%'); // WHERE OWN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ownUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppOwnerQuery The current query, for fluid interface
     */
    public function filterByOwnUid($ownUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ownUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ownUid)) {
                $ownUid = str_replace('*', '%', $ownUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppOwnerPeer::OWN_UID, $ownUid, $comparison);
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
     * @return    AppOwnerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppOwnerPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppOwner $appOwner Object to remove from the list of results
     *
     * @return    AppOwnerQuery The current query, for fluid interface
     */
    public function prune($appOwner = null)
    {
        if ($appOwner) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AppOwnerPeer::APP_UID), $appOwner->getAppUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AppOwnerPeer::OWN_UID), $appOwner->getOwnUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(AppOwnerPeer::USR_UID), $appOwner->getUsrUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseAppOwnerQuery