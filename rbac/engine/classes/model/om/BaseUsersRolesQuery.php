<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'USERS_ROLES' table.
 *
 * 
 *
 * @method     UsersRolesQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     UsersRolesQuery orderByRolUid($order = Criteria::ASC) Order by the ROL_UID column
 *
 * @method     UsersRolesQuery groupByUsrUid() Group by the USR_UID column
 * @method     UsersRolesQuery groupByRolUid() Group by the ROL_UID column
 *
 * @method     UsersRolesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsersRolesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsersRolesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsersRoles findOne(PropelPDO $con = null) Return the first UsersRoles matching the query
 * @method     UsersRoles findOneOrCreate(PropelPDO $con = null) Return the first UsersRoles matching the query, or a new UsersRoles object populated from the query conditions when no match is found
 *
 * @method     UsersRoles findOneByUsrUid(string $USR_UID) Return the first UsersRoles filtered by the USR_UID column
 * @method     UsersRoles findOneByRolUid(string $ROL_UID) Return the first UsersRoles filtered by the ROL_UID column
 *
 * @method     array findByUsrUid(string $USR_UID) Return UsersRoles objects filtered by the USR_UID column
 * @method     array findByRolUid(string $ROL_UID) Return UsersRoles objects filtered by the ROL_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseUsersRolesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsersRolesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'UsersRoles', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsersRolesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    UsersRolesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsersRolesQuery) {
            return $criteria;
        }
        $query = new UsersRolesQuery();
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
     * @param     array[$USR_UID, $ROL_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    UsersRoles|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = UsersRolesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    UsersRolesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(UsersRolesPeer::USR_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(UsersRolesPeer::ROL_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    UsersRolesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(UsersRolesPeer::USR_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(UsersRolesPeer::ROL_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    UsersRolesQuery The current query, for fluid interface
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
        return $this->addUsingAlias(UsersRolesPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the ROL_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRolUid('fooValue');   // WHERE ROL_UID = 'fooValue'
     * $query->filterByRolUid('%fooValue%'); // WHERE ROL_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsersRolesQuery The current query, for fluid interface
     */
    public function filterByRolUid($rolUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolUid)) {
                $rolUid = str_replace('*', '%', $rolUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(UsersRolesPeer::ROL_UID, $rolUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     UsersRoles $usersRoles Object to remove from the list of results
     *
     * @return    UsersRolesQuery The current query, for fluid interface
     */
    public function prune($usersRoles = null)
    {
        if ($usersRoles) {
            $this->addCond('pruneCond0', $this->getAliasedColName(UsersRolesPeer::USR_UID), $usersRoles->getUsrUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(UsersRolesPeer::ROL_UID), $usersRoles->getRolUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseUsersRolesQuery