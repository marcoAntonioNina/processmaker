<?php


/**
 * Base class that represents a query for the 'PROCESS_OWNER' table.
 *
 * 
 *
 * @method     ProcessOwnerQuery orderByOwnUid($order = Criteria::ASC) Order by the OWN_UID column
 * @method     ProcessOwnerQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 *
 * @method     ProcessOwnerQuery groupByOwnUid() Group by the OWN_UID column
 * @method     ProcessOwnerQuery groupByProUid() Group by the PRO_UID column
 *
 * @method     ProcessOwnerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProcessOwnerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProcessOwnerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProcessOwner findOne(PropelPDO $con = null) Return the first ProcessOwner matching the query
 * @method     ProcessOwner findOneOrCreate(PropelPDO $con = null) Return the first ProcessOwner matching the query, or a new ProcessOwner object populated from the query conditions when no match is found
 *
 * @method     ProcessOwner findOneByOwnUid(string $OWN_UID) Return the first ProcessOwner filtered by the OWN_UID column
 * @method     ProcessOwner findOneByProUid(string $PRO_UID) Return the first ProcessOwner filtered by the PRO_UID column
 *
 * @method     array findByOwnUid(string $OWN_UID) Return ProcessOwner objects filtered by the OWN_UID column
 * @method     array findByProUid(string $PRO_UID) Return ProcessOwner objects filtered by the PRO_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseProcessOwnerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProcessOwnerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ProcessOwner', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProcessOwnerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ProcessOwnerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProcessOwnerQuery) {
            return $criteria;
        }
        $query = new ProcessOwnerQuery();
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
     * @param     array[$OWN_UID, $PRO_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    ProcessOwner|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ProcessOwnerPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ProcessOwnerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ProcessOwnerPeer::OWN_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ProcessOwnerPeer::PRO_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ProcessOwnerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ProcessOwnerPeer::OWN_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ProcessOwnerPeer::PRO_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    ProcessOwnerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ProcessOwnerPeer::OWN_UID, $ownUid, $comparison);
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
     * @return    ProcessOwnerQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ProcessOwnerPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ProcessOwner $processOwner Object to remove from the list of results
     *
     * @return    ProcessOwnerQuery The current query, for fluid interface
     */
    public function prune($processOwner = null)
    {
        if ($processOwner) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ProcessOwnerPeer::OWN_UID), $processOwner->getOwnUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ProcessOwnerPeer::PRO_UID), $processOwner->getProUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseProcessOwnerQuery