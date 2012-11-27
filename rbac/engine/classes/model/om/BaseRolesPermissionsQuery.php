<?php

//QueryBuilder.php
/**
 * Base class that represents a query for the 'ROLES_PERMISSIONS' table.
 *
 * 
 *
 * @method     RolesPermissionsQuery orderByRolUid($order = Criteria::ASC) Order by the ROL_UID column
 * @method     RolesPermissionsQuery orderByPerUid($order = Criteria::ASC) Order by the PER_UID column
 *
 * @method     RolesPermissionsQuery groupByRolUid() Group by the ROL_UID column
 * @method     RolesPermissionsQuery groupByPerUid() Group by the PER_UID column
 *
 * @method     RolesPermissionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RolesPermissionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RolesPermissionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RolesPermissions findOne(PropelPDO $con = null) Return the first RolesPermissions matching the query
 * @method     RolesPermissions findOneOrCreate(PropelPDO $con = null) Return the first RolesPermissions matching the query, or a new RolesPermissions object populated from the query conditions when no match is found
 *
 * @method     RolesPermissions findOneByRolUid(string $ROL_UID) Return the first RolesPermissions filtered by the ROL_UID column
 * @method     RolesPermissions findOneByPerUid(string $PER_UID) Return the first RolesPermissions filtered by the PER_UID column
 *
 * @method     array findByRolUid(string $ROL_UID) Return RolesPermissions objects filtered by the ROL_UID column
 * @method     array findByPerUid(string $PER_UID) Return RolesPermissions objects filtered by the PER_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseRolesPermissionsQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRolesPermissionsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'rbac', $modelName = 'RolesPermissions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RolesPermissionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RolesPermissionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RolesPermissionsQuery) {
            return $criteria;
        }
        $query = new RolesPermissionsQuery();
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
     * @param     array[$ROL_UID, $PER_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    RolesPermissions|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RolesPermissionsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RolesPermissionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RolesPermissionsPeer::ROL_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RolesPermissionsPeer::PER_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RolesPermissionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RolesPermissionsPeer::ROL_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RolesPermissionsPeer::PER_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    RolesPermissionsQuery The current query, for fluid interface
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
        return $this->addUsingAlias(RolesPermissionsPeer::ROL_UID, $rolUid, $comparison);
    }

    /**
     * Filter the query on the PER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByPerUid('fooValue');   // WHERE PER_UID = 'fooValue'
     * $query->filterByPerUid('%fooValue%'); // WHERE PER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $perUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RolesPermissionsQuery The current query, for fluid interface
     */
    public function filterByPerUid($perUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($perUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $perUid)) {
                $perUid = str_replace('*', '%', $perUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RolesPermissionsPeer::PER_UID, $perUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     RolesPermissions $rolesPermissions Object to remove from the list of results
     *
     * @return    RolesPermissionsQuery The current query, for fluid interface
     */
    public function prune($rolesPermissions = null)
    {
        if ($rolesPermissions) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RolesPermissionsPeer::ROL_UID), $rolesPermissions->getRolUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RolesPermissionsPeer::PER_UID), $rolesPermissions->getPerUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseRolesPermissionsQuery