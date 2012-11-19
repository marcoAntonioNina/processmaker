<?php


/**
 * Base class that represents a query for the 'GROUP_USER' table.
 *
 * 
 *
 * @method     GroupUserQuery orderByGrpUid($order = Criteria::ASC) Order by the GRP_UID column
 * @method     GroupUserQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 *
 * @method     GroupUserQuery groupByGrpUid() Group by the GRP_UID column
 * @method     GroupUserQuery groupByUsrUid() Group by the USR_UID column
 *
 * @method     GroupUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GroupUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GroupUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GroupUser findOne(PropelPDO $con = null) Return the first GroupUser matching the query
 * @method     GroupUser findOneOrCreate(PropelPDO $con = null) Return the first GroupUser matching the query, or a new GroupUser object populated from the query conditions when no match is found
 *
 * @method     GroupUser findOneByGrpUid(string $GRP_UID) Return the first GroupUser filtered by the GRP_UID column
 * @method     GroupUser findOneByUsrUid(string $USR_UID) Return the first GroupUser filtered by the USR_UID column
 *
 * @method     array findByGrpUid(string $GRP_UID) Return GroupUser objects filtered by the GRP_UID column
 * @method     array findByUsrUid(string $USR_UID) Return GroupUser objects filtered by the USR_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseGroupUserQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseGroupUserQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'GroupUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GroupUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    GroupUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GroupUserQuery) {
            return $criteria;
        }
        $query = new GroupUserQuery();
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
     * @param     array[$GRP_UID, $USR_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    GroupUser|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = GroupUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    GroupUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GroupUserPeer::GRP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GroupUserPeer::USR_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    GroupUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GroupUserPeer::GRP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GroupUserPeer::USR_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    GroupUserQuery The current query, for fluid interface
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
        return $this->addUsingAlias(GroupUserPeer::GRP_UID, $grpUid, $comparison);
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
     * @return    GroupUserQuery The current query, for fluid interface
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
        return $this->addUsingAlias(GroupUserPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     GroupUser $groupUser Object to remove from the list of results
     *
     * @return    GroupUserQuery The current query, for fluid interface
     */
    public function prune($groupUser = null)
    {
        if ($groupUser) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GroupUserPeer::GRP_UID), $groupUser->getGrpUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GroupUserPeer::USR_UID), $groupUser->getUsrUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseGroupUserQuery