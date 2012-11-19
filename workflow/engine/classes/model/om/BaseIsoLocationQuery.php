<?php


/**
 * Base class that represents a query for the 'ISO_LOCATION' table.
 *
 * 
 *
 * @method     IsoLocationQuery orderByIcUid($order = Criteria::ASC) Order by the IC_UID column
 * @method     IsoLocationQuery orderByIlUid($order = Criteria::ASC) Order by the IL_UID column
 * @method     IsoLocationQuery orderByIlName($order = Criteria::ASC) Order by the IL_NAME column
 * @method     IsoLocationQuery orderByIlNormalName($order = Criteria::ASC) Order by the IL_NORMAL_NAME column
 * @method     IsoLocationQuery orderByIsUid($order = Criteria::ASC) Order by the IS_UID column
 *
 * @method     IsoLocationQuery groupByIcUid() Group by the IC_UID column
 * @method     IsoLocationQuery groupByIlUid() Group by the IL_UID column
 * @method     IsoLocationQuery groupByIlName() Group by the IL_NAME column
 * @method     IsoLocationQuery groupByIlNormalName() Group by the IL_NORMAL_NAME column
 * @method     IsoLocationQuery groupByIsUid() Group by the IS_UID column
 *
 * @method     IsoLocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     IsoLocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     IsoLocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     IsoLocation findOne(PropelPDO $con = null) Return the first IsoLocation matching the query
 * @method     IsoLocation findOneOrCreate(PropelPDO $con = null) Return the first IsoLocation matching the query, or a new IsoLocation object populated from the query conditions when no match is found
 *
 * @method     IsoLocation findOneByIcUid(string $IC_UID) Return the first IsoLocation filtered by the IC_UID column
 * @method     IsoLocation findOneByIlUid(string $IL_UID) Return the first IsoLocation filtered by the IL_UID column
 * @method     IsoLocation findOneByIlName(string $IL_NAME) Return the first IsoLocation filtered by the IL_NAME column
 * @method     IsoLocation findOneByIlNormalName(string $IL_NORMAL_NAME) Return the first IsoLocation filtered by the IL_NORMAL_NAME column
 * @method     IsoLocation findOneByIsUid(string $IS_UID) Return the first IsoLocation filtered by the IS_UID column
 *
 * @method     array findByIcUid(string $IC_UID) Return IsoLocation objects filtered by the IC_UID column
 * @method     array findByIlUid(string $IL_UID) Return IsoLocation objects filtered by the IL_UID column
 * @method     array findByIlName(string $IL_NAME) Return IsoLocation objects filtered by the IL_NAME column
 * @method     array findByIlNormalName(string $IL_NORMAL_NAME) Return IsoLocation objects filtered by the IL_NORMAL_NAME column
 * @method     array findByIsUid(string $IS_UID) Return IsoLocation objects filtered by the IS_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseIsoLocationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseIsoLocationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'IsoLocation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IsoLocationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    IsoLocationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IsoLocationQuery) {
            return $criteria;
        }
        $query = new IsoLocationQuery();
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
     * @param     array[$IC_UID, $IL_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    IsoLocation|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = IsoLocationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(IsoLocationPeer::IC_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(IsoLocationPeer::IL_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(IsoLocationPeer::IC_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(IsoLocationPeer::IL_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the IC_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByIcUid('fooValue');   // WHERE IC_UID = 'fooValue'
     * $query->filterByIcUid('%fooValue%'); // WHERE IC_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByIcUid($icUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $icUid)) {
                $icUid = str_replace('*', '%', $icUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoLocationPeer::IC_UID, $icUid, $comparison);
    }

    /**
     * Filter the query on the IL_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByIlUid('fooValue');   // WHERE IL_UID = 'fooValue'
     * $query->filterByIlUid('%fooValue%'); // WHERE IL_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ilUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByIlUid($ilUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ilUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ilUid)) {
                $ilUid = str_replace('*', '%', $ilUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoLocationPeer::IL_UID, $ilUid, $comparison);
    }

    /**
     * Filter the query on the IL_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByIlName('fooValue');   // WHERE IL_NAME = 'fooValue'
     * $query->filterByIlName('%fooValue%'); // WHERE IL_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ilName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByIlName($ilName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ilName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ilName)) {
                $ilName = str_replace('*', '%', $ilName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoLocationPeer::IL_NAME, $ilName, $comparison);
    }

    /**
     * Filter the query on the IL_NORMAL_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByIlNormalName('fooValue');   // WHERE IL_NORMAL_NAME = 'fooValue'
     * $query->filterByIlNormalName('%fooValue%'); // WHERE IL_NORMAL_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ilNormalName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByIlNormalName($ilNormalName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ilNormalName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ilNormalName)) {
                $ilNormalName = str_replace('*', '%', $ilNormalName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoLocationPeer::IL_NORMAL_NAME, $ilNormalName, $comparison);
    }

    /**
     * Filter the query on the IS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByIsUid('fooValue');   // WHERE IS_UID = 'fooValue'
     * $query->filterByIsUid('%fooValue%'); // WHERE IS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function filterByIsUid($isUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isUid)) {
                $isUid = str_replace('*', '%', $isUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoLocationPeer::IS_UID, $isUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     IsoLocation $isoLocation Object to remove from the list of results
     *
     * @return    IsoLocationQuery The current query, for fluid interface
     */
    public function prune($isoLocation = null)
    {
        if ($isoLocation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(IsoLocationPeer::IC_UID), $isoLocation->getIcUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(IsoLocationPeer::IL_UID), $isoLocation->getIlUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseIsoLocationQuery