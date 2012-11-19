<?php


/**
 * Base class that represents a query for the 'ISO_COUNTRY' table.
 *
 * 
 *
 * @method     IsoCountryQuery orderByIcUid($order = Criteria::ASC) Order by the IC_UID column
 * @method     IsoCountryQuery orderByIcName($order = Criteria::ASC) Order by the IC_NAME column
 * @method     IsoCountryQuery orderByIcSortOrder($order = Criteria::ASC) Order by the IC_SORT_ORDER column
 *
 * @method     IsoCountryQuery groupByIcUid() Group by the IC_UID column
 * @method     IsoCountryQuery groupByIcName() Group by the IC_NAME column
 * @method     IsoCountryQuery groupByIcSortOrder() Group by the IC_SORT_ORDER column
 *
 * @method     IsoCountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     IsoCountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     IsoCountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     IsoCountry findOne(PropelPDO $con = null) Return the first IsoCountry matching the query
 * @method     IsoCountry findOneOrCreate(PropelPDO $con = null) Return the first IsoCountry matching the query, or a new IsoCountry object populated from the query conditions when no match is found
 *
 * @method     IsoCountry findOneByIcUid(string $IC_UID) Return the first IsoCountry filtered by the IC_UID column
 * @method     IsoCountry findOneByIcName(string $IC_NAME) Return the first IsoCountry filtered by the IC_NAME column
 * @method     IsoCountry findOneByIcSortOrder(string $IC_SORT_ORDER) Return the first IsoCountry filtered by the IC_SORT_ORDER column
 *
 * @method     array findByIcUid(string $IC_UID) Return IsoCountry objects filtered by the IC_UID column
 * @method     array findByIcName(string $IC_NAME) Return IsoCountry objects filtered by the IC_NAME column
 * @method     array findByIcSortOrder(string $IC_SORT_ORDER) Return IsoCountry objects filtered by the IC_SORT_ORDER column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseIsoCountryQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseIsoCountryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'IsoCountry', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IsoCountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    IsoCountryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IsoCountryQuery) {
            return $criteria;
        }
        $query = new IsoCountryQuery();
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
     * @return    IsoCountry|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = IsoCountryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    IsoCountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(IsoCountryPeer::IC_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    IsoCountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(IsoCountryPeer::IC_UID, $keys, Criteria::IN);
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
     * @return    IsoCountryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(IsoCountryPeer::IC_UID, $icUid, $comparison);
    }

    /**
     * Filter the query on the IC_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByIcName('fooValue');   // WHERE IC_NAME = 'fooValue'
     * $query->filterByIcName('%fooValue%'); // WHERE IC_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoCountryQuery The current query, for fluid interface
     */
    public function filterByIcName($icName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $icName)) {
                $icName = str_replace('*', '%', $icName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoCountryPeer::IC_NAME, $icName, $comparison);
    }

    /**
     * Filter the query on the IC_SORT_ORDER column
     *
     * Example usage:
     * <code>
     * $query->filterByIcSortOrder('fooValue');   // WHERE IC_SORT_ORDER = 'fooValue'
     * $query->filterByIcSortOrder('%fooValue%'); // WHERE IC_SORT_ORDER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icSortOrder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    IsoCountryQuery The current query, for fluid interface
     */
    public function filterByIcSortOrder($icSortOrder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icSortOrder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $icSortOrder)) {
                $icSortOrder = str_replace('*', '%', $icSortOrder);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(IsoCountryPeer::IC_SORT_ORDER, $icSortOrder, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     IsoCountry $isoCountry Object to remove from the list of results
     *
     * @return    IsoCountryQuery The current query, for fluid interface
     */
    public function prune($isoCountry = null)
    {
        if ($isoCountry) {
            $this->addUsingAlias(IsoCountryPeer::IC_UID, $isoCountry->getIcUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseIsoCountryQuery