<?php


/**
 * Base class that represents a query for the 'GROUPWF' table.
 *
 * 
 *
 * @method     GroupwfQuery orderByGrpUid($order = Criteria::ASC) Order by the GRP_UID column
 * @method     GroupwfQuery orderByGrpStatus($order = Criteria::ASC) Order by the GRP_STATUS column
 * @method     GroupwfQuery orderByGrpLdapDn($order = Criteria::ASC) Order by the GRP_LDAP_DN column
 * @method     GroupwfQuery orderByGrpUx($order = Criteria::ASC) Order by the GRP_UX column
 *
 * @method     GroupwfQuery groupByGrpUid() Group by the GRP_UID column
 * @method     GroupwfQuery groupByGrpStatus() Group by the GRP_STATUS column
 * @method     GroupwfQuery groupByGrpLdapDn() Group by the GRP_LDAP_DN column
 * @method     GroupwfQuery groupByGrpUx() Group by the GRP_UX column
 *
 * @method     GroupwfQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GroupwfQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GroupwfQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Groupwf findOne(PropelPDO $con = null) Return the first Groupwf matching the query
 * @method     Groupwf findOneOrCreate(PropelPDO $con = null) Return the first Groupwf matching the query, or a new Groupwf object populated from the query conditions when no match is found
 *
 * @method     Groupwf findOneByGrpUid(string $GRP_UID) Return the first Groupwf filtered by the GRP_UID column
 * @method     Groupwf findOneByGrpStatus(string $GRP_STATUS) Return the first Groupwf filtered by the GRP_STATUS column
 * @method     Groupwf findOneByGrpLdapDn(string $GRP_LDAP_DN) Return the first Groupwf filtered by the GRP_LDAP_DN column
 * @method     Groupwf findOneByGrpUx(string $GRP_UX) Return the first Groupwf filtered by the GRP_UX column
 *
 * @method     array findByGrpUid(string $GRP_UID) Return Groupwf objects filtered by the GRP_UID column
 * @method     array findByGrpStatus(string $GRP_STATUS) Return Groupwf objects filtered by the GRP_STATUS column
 * @method     array findByGrpLdapDn(string $GRP_LDAP_DN) Return Groupwf objects filtered by the GRP_LDAP_DN column
 * @method     array findByGrpUx(string $GRP_UX) Return Groupwf objects filtered by the GRP_UX column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseGroupwfQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseGroupwfQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Groupwf', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GroupwfQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    GroupwfQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GroupwfQuery) {
            return $criteria;
        }
        $query = new GroupwfQuery();
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
     * @return    Groupwf|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = GroupwfPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(GroupwfPeer::GRP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(GroupwfPeer::GRP_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GRP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByGrpUid('fooValue');   // WHERE GRP_UID = 'fooValue'
     * $query->filterByGrpUid('%fooValue%'); // WHERE GRP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grpUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function filterByGrpUid($grpUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grpUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grpUid)) {
                $grpUid = str_replace('*', '%', $grpUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GroupwfPeer::GRP_UID, $grpUid, $comparison);
    }

    /**
     * Filter the query on the GRP_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByGrpStatus('fooValue');   // WHERE GRP_STATUS = 'fooValue'
     * $query->filterByGrpStatus('%fooValue%'); // WHERE GRP_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grpStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function filterByGrpStatus($grpStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grpStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grpStatus)) {
                $grpStatus = str_replace('*', '%', $grpStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GroupwfPeer::GRP_STATUS, $grpStatus, $comparison);
    }

    /**
     * Filter the query on the GRP_LDAP_DN column
     *
     * Example usage:
     * <code>
     * $query->filterByGrpLdapDn('fooValue');   // WHERE GRP_LDAP_DN = 'fooValue'
     * $query->filterByGrpLdapDn('%fooValue%'); // WHERE GRP_LDAP_DN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grpLdapDn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function filterByGrpLdapDn($grpLdapDn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grpLdapDn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grpLdapDn)) {
                $grpLdapDn = str_replace('*', '%', $grpLdapDn);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GroupwfPeer::GRP_LDAP_DN, $grpLdapDn, $comparison);
    }

    /**
     * Filter the query on the GRP_UX column
     *
     * Example usage:
     * <code>
     * $query->filterByGrpUx('fooValue');   // WHERE GRP_UX = 'fooValue'
     * $query->filterByGrpUx('%fooValue%'); // WHERE GRP_UX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grpUx The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function filterByGrpUx($grpUx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grpUx)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grpUx)) {
                $grpUx = str_replace('*', '%', $grpUx);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(GroupwfPeer::GRP_UX, $grpUx, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Groupwf $groupwf Object to remove from the list of results
     *
     * @return    GroupwfQuery The current query, for fluid interface
     */
    public function prune($groupwf = null)
    {
        if ($groupwf) {
            $this->addUsingAlias(GroupwfPeer::GRP_UID, $groupwf->getGrpUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseGroupwfQuery