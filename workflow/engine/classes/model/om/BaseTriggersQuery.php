<?php


/**
 * Base class that represents a query for the 'TRIGGERS' table.
 *
 * 
 *
 * @method     TriggersQuery orderByTriUid($order = Criteria::ASC) Order by the TRI_UID column
 * @method     TriggersQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     TriggersQuery orderByTriType($order = Criteria::ASC) Order by the TRI_TYPE column
 * @method     TriggersQuery orderByTriWebbot($order = Criteria::ASC) Order by the TRI_WEBBOT column
 * @method     TriggersQuery orderByTriParam($order = Criteria::ASC) Order by the TRI_PARAM column
 *
 * @method     TriggersQuery groupByTriUid() Group by the TRI_UID column
 * @method     TriggersQuery groupByProUid() Group by the PRO_UID column
 * @method     TriggersQuery groupByTriType() Group by the TRI_TYPE column
 * @method     TriggersQuery groupByTriWebbot() Group by the TRI_WEBBOT column
 * @method     TriggersQuery groupByTriParam() Group by the TRI_PARAM column
 *
 * @method     TriggersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TriggersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TriggersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Triggers findOne(PropelPDO $con = null) Return the first Triggers matching the query
 * @method     Triggers findOneOrCreate(PropelPDO $con = null) Return the first Triggers matching the query, or a new Triggers object populated from the query conditions when no match is found
 *
 * @method     Triggers findOneByTriUid(string $TRI_UID) Return the first Triggers filtered by the TRI_UID column
 * @method     Triggers findOneByProUid(string $PRO_UID) Return the first Triggers filtered by the PRO_UID column
 * @method     Triggers findOneByTriType(string $TRI_TYPE) Return the first Triggers filtered by the TRI_TYPE column
 * @method     Triggers findOneByTriWebbot(string $TRI_WEBBOT) Return the first Triggers filtered by the TRI_WEBBOT column
 * @method     Triggers findOneByTriParam(string $TRI_PARAM) Return the first Triggers filtered by the TRI_PARAM column
 *
 * @method     array findByTriUid(string $TRI_UID) Return Triggers objects filtered by the TRI_UID column
 * @method     array findByProUid(string $PRO_UID) Return Triggers objects filtered by the PRO_UID column
 * @method     array findByTriType(string $TRI_TYPE) Return Triggers objects filtered by the TRI_TYPE column
 * @method     array findByTriWebbot(string $TRI_WEBBOT) Return Triggers objects filtered by the TRI_WEBBOT column
 * @method     array findByTriParam(string $TRI_PARAM) Return Triggers objects filtered by the TRI_PARAM column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseTriggersQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTriggersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Triggers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TriggersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TriggersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TriggersQuery) {
            return $criteria;
        }
        $query = new TriggersQuery();
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
     * @return    Triggers|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TriggersPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(TriggersPeer::TRI_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(TriggersPeer::TRI_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the TRI_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTriUid('fooValue');   // WHERE TRI_UID = 'fooValue'
     * $query->filterByTriUid('%fooValue%'); // WHERE TRI_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $triUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function filterByTriUid($triUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($triUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $triUid)) {
                $triUid = str_replace('*', '%', $triUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TriggersPeer::TRI_UID, $triUid, $comparison);
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
     * @return    TriggersQuery The current query, for fluid interface
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
        return $this->addUsingAlias(TriggersPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the TRI_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByTriType('fooValue');   // WHERE TRI_TYPE = 'fooValue'
     * $query->filterByTriType('%fooValue%'); // WHERE TRI_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $triType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function filterByTriType($triType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($triType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $triType)) {
                $triType = str_replace('*', '%', $triType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TriggersPeer::TRI_TYPE, $triType, $comparison);
    }

    /**
     * Filter the query on the TRI_WEBBOT column
     *
     * Example usage:
     * <code>
     * $query->filterByTriWebbot('fooValue');   // WHERE TRI_WEBBOT = 'fooValue'
     * $query->filterByTriWebbot('%fooValue%'); // WHERE TRI_WEBBOT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $triWebbot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function filterByTriWebbot($triWebbot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($triWebbot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $triWebbot)) {
                $triWebbot = str_replace('*', '%', $triWebbot);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TriggersPeer::TRI_WEBBOT, $triWebbot, $comparison);
    }

    /**
     * Filter the query on the TRI_PARAM column
     *
     * Example usage:
     * <code>
     * $query->filterByTriParam('fooValue');   // WHERE TRI_PARAM = 'fooValue'
     * $query->filterByTriParam('%fooValue%'); // WHERE TRI_PARAM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $triParam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function filterByTriParam($triParam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($triParam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $triParam)) {
                $triParam = str_replace('*', '%', $triParam);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TriggersPeer::TRI_PARAM, $triParam, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Triggers $triggers Object to remove from the list of results
     *
     * @return    TriggersQuery The current query, for fluid interface
     */
    public function prune($triggers = null)
    {
        if ($triggers) {
            $this->addUsingAlias(TriggersPeer::TRI_UID, $triggers->getTriUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTriggersQuery