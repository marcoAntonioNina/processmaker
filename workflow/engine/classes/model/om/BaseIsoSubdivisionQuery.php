<?php


/**
 * Base class that represents a query for the 'ISO_SUBDIVISION' table.
 *
 * 
 *
 * @method     IsoSubdivisionQuery orderByIcUid($order = Criteria::ASC) Order by the IC_UID column
 * @method     IsoSubdivisionQuery orderByIsUid($order = Criteria::ASC) Order by the IS_UID column
 * @method     IsoSubdivisionQuery orderByIsName($order = Criteria::ASC) Order by the IS_NAME column
 *
 * @method     IsoSubdivisionQuery groupByIcUid() Group by the IC_UID column
 * @method     IsoSubdivisionQuery groupByIsUid() Group by the IS_UID column
 * @method     IsoSubdivisionQuery groupByIsName() Group by the IS_NAME column
 *
 * @method     IsoSubdivisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     IsoSubdivisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     IsoSubdivisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     IsoSubdivision findOne(PropelPDO $con = null) Return the first IsoSubdivision matching the query
 * @method     IsoSubdivision findOneOrCreate(PropelPDO $con = null) Return the first IsoSubdivision matching the query, or a new IsoSubdivision object populated from the query conditions when no match is found
 *
 * @method     IsoSubdivision findOneByIcUid(string $IC_UID) Return the first IsoSubdivision filtered by the IC_UID column
 * @method     IsoSubdivision findOneByIsUid(string $IS_UID) Return the first IsoSubdivision filtered by the IS_UID column
 * @method     IsoSubdivision findOneByIsName(string $IS_NAME) Return the first IsoSubdivision filtered by the IS_NAME column
 *
 * @method     array findByIcUid(string $IC_UID) Return IsoSubdivision objects filtered by the IC_UID column
 * @method     array findByIsUid(string $IS_UID) Return IsoSubdivision objects filtered by the IS_UID column
 * @method     array findByIsName(string $IS_NAME) Return IsoSubdivision objects filtered by the IS_NAME column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseIsoSubdivisionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseIsoSubdivisionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'IsoSubdivision', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IsoSubdivisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    IsoSubdivisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IsoSubdivisionQuery) {
            return $criteria;
        }
        $query = new IsoSubdivisionQuery();
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
     * @param     array[$IC_UID, $IS_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    IsoSubdivision|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = IsoSubdivisionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    IsoSubdivisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(IsoSubdivisionPeer::IC_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(IsoSubdivisionPeer::IS_UID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    IsoSubdivisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(IsoSubdivisionPeer::IC_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(IsoSubdivisionPeer::IS_UID, $key[1], Criteria::EQUAL);
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
     * @return    IsoSubdivisionQuery The current query, for fluid interface
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
        return $this->addUsingAlias(IsoSubdivisionPeer::IC_UID, $icUid, $comparison);
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
     * @return    IsoSubdivisionQuery The current query, for fluid interface
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
        return $this->addUsingAlias(IsoSubdivisionPeer::IS_UID, $isUid, $comparison);
    }

    /**
     * Filter the query on the IS_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByIsName('fooValue');   // WHERE IS_NAME = 'fooValue'
     * $query->filterByIsName('%fooValue%'); // WHERE IS_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoSubdivisionQuery The current query, for fluid interface
     */
    public function filterByIsName($isName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isName)) {
                $isName = str_replace('*', '%', $isName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoSubdivisionPeer::IS_NAME, $isName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     IsoSubdivision $isoSubdivision Object to remove from the list of results
     *
     * @return    IsoSubdivisionQuery The current query, for fluid interface
     */
    public function prune($isoSubdivision = null)
    {
        if ($isoSubdivision) {
            $this->addCond('pruneCond0', $this->getAliasedColName(IsoSubdivisionPeer::IC_UID), $isoSubdivision->getIcUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(IsoSubdivisionPeer::IS_UID), $isoSubdivision->getIsUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseIsoSubdivisionQuery