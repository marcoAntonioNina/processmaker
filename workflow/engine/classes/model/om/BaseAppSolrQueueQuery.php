<?php


/**
 * Base class that represents a query for the 'APP_SOLR_QUEUE' table.
 *
 * 
 *
 * @method     AppSolrQueueQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppSolrQueueQuery orderByAppUpdated($order = Criteria::ASC) Order by the APP_UPDATED column
 *
 * @method     AppSolrQueueQuery groupByAppUid() Group by the APP_UID column
 * @method     AppSolrQueueQuery groupByAppUpdated() Group by the APP_UPDATED column
 *
 * @method     AppSolrQueueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppSolrQueueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppSolrQueueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppSolrQueue findOne(PropelPDO $con = null) Return the first AppSolrQueue matching the query
 * @method     AppSolrQueue findOneOrCreate(PropelPDO $con = null) Return the first AppSolrQueue matching the query, or a new AppSolrQueue object populated from the query conditions when no match is found
 *
 * @method     AppSolrQueue findOneByAppUid(string $APP_UID) Return the first AppSolrQueue filtered by the APP_UID column
 * @method     AppSolrQueue findOneByAppUpdated(int $APP_UPDATED) Return the first AppSolrQueue filtered by the APP_UPDATED column
 *
 * @method     array findByAppUid(string $APP_UID) Return AppSolrQueue objects filtered by the APP_UID column
 * @method     array findByAppUpdated(int $APP_UPDATED) Return AppSolrQueue objects filtered by the APP_UPDATED column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppSolrQueueQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppSolrQueueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppSolrQueue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppSolrQueueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppSolrQueueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppSolrQueueQuery) {
            return $criteria;
        }
        $query = new AppSolrQueueQuery();
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
     * @return    AppSolrQueue|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppSolrQueuePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppSolrQueueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AppSolrQueuePeer::APP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppSolrQueueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AppSolrQueuePeer::APP_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the APP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUid('fooValue');   // WHERE APP_UID = 'fooValue'
     * $query->filterByAppUid('%fooValue%'); // WHERE APP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppSolrQueueQuery The current query, for fluid interface
     */
    public function filterByAppUid($appUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appUid)) {
                $appUid = str_replace('*', '%', $appUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppSolrQueuePeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the APP_UPDATED column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUpdated(1234); // WHERE APP_UPDATED = 1234
     * $query->filterByAppUpdated(array(12, 34)); // WHERE APP_UPDATED IN (12, 34)
     * $query->filterByAppUpdated(array('min' => 12)); // WHERE APP_UPDATED > 12
     * </code>
     *
     * @param     mixed $appUpdated The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppSolrQueueQuery The current query, for fluid interface
     */
    public function filterByAppUpdated($appUpdated = null, $comparison = null)
    {
        if (is_array($appUpdated)) {
            $useMinMax = false;
            if (isset($appUpdated['min'])) {
                $this->addUsingAlias(AppSolrQueuePeer::APP_UPDATED, $appUpdated['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appUpdated['max'])) {
                $this->addUsingAlias(AppSolrQueuePeer::APP_UPDATED, $appUpdated['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppSolrQueuePeer::APP_UPDATED, $appUpdated, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppSolrQueue $appSolrQueue Object to remove from the list of results
     *
     * @return    AppSolrQueueQuery The current query, for fluid interface
     */
    public function prune($appSolrQueue = null)
    {
        if ($appSolrQueue) {
            $this->addUsingAlias(AppSolrQueuePeer::APP_UID, $appSolrQueue->getAppUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAppSolrQueueQuery