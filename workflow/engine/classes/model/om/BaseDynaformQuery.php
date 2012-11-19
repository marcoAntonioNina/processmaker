<?php


/**
 * Base class that represents a query for the 'DYNAFORM' table.
 *
 * 
 *
 * @method     DynaformQuery orderByDynUid($order = Criteria::ASC) Order by the DYN_UID column
 * @method     DynaformQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     DynaformQuery orderByDynType($order = Criteria::ASC) Order by the DYN_TYPE column
 * @method     DynaformQuery orderByDynFilename($order = Criteria::ASC) Order by the DYN_FILENAME column
 *
 * @method     DynaformQuery groupByDynUid() Group by the DYN_UID column
 * @method     DynaformQuery groupByProUid() Group by the PRO_UID column
 * @method     DynaformQuery groupByDynType() Group by the DYN_TYPE column
 * @method     DynaformQuery groupByDynFilename() Group by the DYN_FILENAME column
 *
 * @method     DynaformQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DynaformQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DynaformQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Dynaform findOne(PropelPDO $con = null) Return the first Dynaform matching the query
 * @method     Dynaform findOneOrCreate(PropelPDO $con = null) Return the first Dynaform matching the query, or a new Dynaform object populated from the query conditions when no match is found
 *
 * @method     Dynaform findOneByDynUid(string $DYN_UID) Return the first Dynaform filtered by the DYN_UID column
 * @method     Dynaform findOneByProUid(string $PRO_UID) Return the first Dynaform filtered by the PRO_UID column
 * @method     Dynaform findOneByDynType(string $DYN_TYPE) Return the first Dynaform filtered by the DYN_TYPE column
 * @method     Dynaform findOneByDynFilename(string $DYN_FILENAME) Return the first Dynaform filtered by the DYN_FILENAME column
 *
 * @method     array findByDynUid(string $DYN_UID) Return Dynaform objects filtered by the DYN_UID column
 * @method     array findByProUid(string $PRO_UID) Return Dynaform objects filtered by the PRO_UID column
 * @method     array findByDynType(string $DYN_TYPE) Return Dynaform objects filtered by the DYN_TYPE column
 * @method     array findByDynFilename(string $DYN_FILENAME) Return Dynaform objects filtered by the DYN_FILENAME column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDynaformQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDynaformQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Dynaform', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DynaformQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    DynaformQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DynaformQuery) {
            return $criteria;
        }
        $query = new DynaformQuery();
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
     * @return    Dynaform|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = DynaformPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    DynaformQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(DynaformPeer::DYN_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    DynaformQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(DynaformPeer::DYN_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the DYN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDynUid('fooValue');   // WHERE DYN_UID = 'fooValue'
     * $query->filterByDynUid('%fooValue%'); // WHERE DYN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dynUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DynaformQuery The current query, for fluid interface
     */
    public function filterByDynUid($dynUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dynUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dynUid)) {
                $dynUid = str_replace('*', '%', $dynUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DynaformPeer::DYN_UID, $dynUid, $comparison);
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
     * @return    DynaformQuery The current query, for fluid interface
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
        return $this->addUsingAlias(DynaformPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the DYN_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByDynType('fooValue');   // WHERE DYN_TYPE = 'fooValue'
     * $query->filterByDynType('%fooValue%'); // WHERE DYN_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dynType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DynaformQuery The current query, for fluid interface
     */
    public function filterByDynType($dynType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dynType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dynType)) {
                $dynType = str_replace('*', '%', $dynType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DynaformPeer::DYN_TYPE, $dynType, $comparison);
    }

    /**
     * Filter the query on the DYN_FILENAME column
     *
     * Example usage:
     * <code>
     * $query->filterByDynFilename('fooValue');   // WHERE DYN_FILENAME = 'fooValue'
     * $query->filterByDynFilename('%fooValue%'); // WHERE DYN_FILENAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dynFilename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    DynaformQuery The current query, for fluid interface
     */
    public function filterByDynFilename($dynFilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dynFilename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dynFilename)) {
                $dynFilename = str_replace('*', '%', $dynFilename);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(DynaformPeer::DYN_FILENAME, $dynFilename, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Dynaform $dynaform Object to remove from the list of results
     *
     * @return    DynaformQuery The current query, for fluid interface
     */
    public function prune($dynaform = null)
    {
        if ($dynaform) {
            $this->addUsingAlias(DynaformPeer::DYN_UID, $dynaform->getDynUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDynaformQuery