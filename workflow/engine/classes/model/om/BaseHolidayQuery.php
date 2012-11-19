<?php


/**
 * Base class that represents a query for the 'HOLIDAY' table.
 *
 * 
 *
 * @method     HolidayQuery orderByHldUid($order = Criteria::ASC) Order by the HLD_UID column
 * @method     HolidayQuery orderByHldDate($order = Criteria::ASC) Order by the HLD_DATE column
 * @method     HolidayQuery orderByHldDescription($order = Criteria::ASC) Order by the HLD_DESCRIPTION column
 *
 * @method     HolidayQuery groupByHldUid() Group by the HLD_UID column
 * @method     HolidayQuery groupByHldDate() Group by the HLD_DATE column
 * @method     HolidayQuery groupByHldDescription() Group by the HLD_DESCRIPTION column
 *
 * @method     HolidayQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     HolidayQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     HolidayQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Holiday findOne(PropelPDO $con = null) Return the first Holiday matching the query
 * @method     Holiday findOneOrCreate(PropelPDO $con = null) Return the first Holiday matching the query, or a new Holiday object populated from the query conditions when no match is found
 *
 * @method     Holiday findOneByHldUid(int $HLD_UID) Return the first Holiday filtered by the HLD_UID column
 * @method     Holiday findOneByHldDate(string $HLD_DATE) Return the first Holiday filtered by the HLD_DATE column
 * @method     Holiday findOneByHldDescription(string $HLD_DESCRIPTION) Return the first Holiday filtered by the HLD_DESCRIPTION column
 *
 * @method     array findByHldUid(int $HLD_UID) Return Holiday objects filtered by the HLD_UID column
 * @method     array findByHldDate(string $HLD_DATE) Return Holiday objects filtered by the HLD_DATE column
 * @method     array findByHldDescription(string $HLD_DESCRIPTION) Return Holiday objects filtered by the HLD_DESCRIPTION column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseHolidayQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseHolidayQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Holiday', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new HolidayQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    HolidayQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof HolidayQuery) {
            return $criteria;
        }
        $query = new HolidayQuery();
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
     * @return    Holiday|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = HolidayPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    HolidayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(HolidayPeer::HLD_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    HolidayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(HolidayPeer::HLD_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the HLD_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByHldUid(1234); // WHERE HLD_UID = 1234
     * $query->filterByHldUid(array(12, 34)); // WHERE HLD_UID IN (12, 34)
     * $query->filterByHldUid(array('min' => 12)); // WHERE HLD_UID > 12
     * </code>
     *
     * @param     mixed $hldUid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HolidayQuery The current query, for fluid interface
     */
    public function filterByHldUid($hldUid = null, $comparison = null)
    {
        if (is_array($hldUid) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(HolidayPeer::HLD_UID, $hldUid, $comparison);
    }

    /**
     * Filter the query on the HLD_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByHldDate('fooValue');   // WHERE HLD_DATE = 'fooValue'
     * $query->filterByHldDate('%fooValue%'); // WHERE HLD_DATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hldDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HolidayQuery The current query, for fluid interface
     */
    public function filterByHldDate($hldDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hldDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hldDate)) {
                $hldDate = str_replace('*', '%', $hldDate);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(HolidayPeer::HLD_DATE, $hldDate, $comparison);
    }

    /**
     * Filter the query on the HLD_DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByHldDescription('fooValue');   // WHERE HLD_DESCRIPTION = 'fooValue'
     * $query->filterByHldDescription('%fooValue%'); // WHERE HLD_DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hldDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HolidayQuery The current query, for fluid interface
     */
    public function filterByHldDescription($hldDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hldDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hldDescription)) {
                $hldDescription = str_replace('*', '%', $hldDescription);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(HolidayPeer::HLD_DESCRIPTION, $hldDescription, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Holiday $holiday Object to remove from the list of results
     *
     * @return    HolidayQuery The current query, for fluid interface
     */
    public function prune($holiday = null)
    {
        if ($holiday) {
            $this->addUsingAlias(HolidayPeer::HLD_UID, $holiday->getHldUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseHolidayQuery