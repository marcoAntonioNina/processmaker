<?php


/**
 * Base class that represents a query for the 'FIELD_CONDITION' table.
 *
 * 
 *
 * @method     FieldConditionQuery orderByFcdUid($order = Criteria::ASC) Order by the FCD_UID column
 * @method     FieldConditionQuery orderByFcdFunction($order = Criteria::ASC) Order by the FCD_FUNCTION column
 * @method     FieldConditionQuery orderByFcdFields($order = Criteria::ASC) Order by the FCD_FIELDS column
 * @method     FieldConditionQuery orderByFcdCondition($order = Criteria::ASC) Order by the FCD_CONDITION column
 * @method     FieldConditionQuery orderByFcdEvents($order = Criteria::ASC) Order by the FCD_EVENTS column
 * @method     FieldConditionQuery orderByFcdEventOwners($order = Criteria::ASC) Order by the FCD_EVENT_OWNERS column
 * @method     FieldConditionQuery orderByFcdStatus($order = Criteria::ASC) Order by the FCD_STATUS column
 * @method     FieldConditionQuery orderByFcdDynUid($order = Criteria::ASC) Order by the FCD_DYN_UID column
 *
 * @method     FieldConditionQuery groupByFcdUid() Group by the FCD_UID column
 * @method     FieldConditionQuery groupByFcdFunction() Group by the FCD_FUNCTION column
 * @method     FieldConditionQuery groupByFcdFields() Group by the FCD_FIELDS column
 * @method     FieldConditionQuery groupByFcdCondition() Group by the FCD_CONDITION column
 * @method     FieldConditionQuery groupByFcdEvents() Group by the FCD_EVENTS column
 * @method     FieldConditionQuery groupByFcdEventOwners() Group by the FCD_EVENT_OWNERS column
 * @method     FieldConditionQuery groupByFcdStatus() Group by the FCD_STATUS column
 * @method     FieldConditionQuery groupByFcdDynUid() Group by the FCD_DYN_UID column
 *
 * @method     FieldConditionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FieldConditionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FieldConditionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FieldCondition findOne(PropelPDO $con = null) Return the first FieldCondition matching the query
 * @method     FieldCondition findOneOrCreate(PropelPDO $con = null) Return the first FieldCondition matching the query, or a new FieldCondition object populated from the query conditions when no match is found
 *
 * @method     FieldCondition findOneByFcdUid(string $FCD_UID) Return the first FieldCondition filtered by the FCD_UID column
 * @method     FieldCondition findOneByFcdFunction(string $FCD_FUNCTION) Return the first FieldCondition filtered by the FCD_FUNCTION column
 * @method     FieldCondition findOneByFcdFields(string $FCD_FIELDS) Return the first FieldCondition filtered by the FCD_FIELDS column
 * @method     FieldCondition findOneByFcdCondition(string $FCD_CONDITION) Return the first FieldCondition filtered by the FCD_CONDITION column
 * @method     FieldCondition findOneByFcdEvents(string $FCD_EVENTS) Return the first FieldCondition filtered by the FCD_EVENTS column
 * @method     FieldCondition findOneByFcdEventOwners(string $FCD_EVENT_OWNERS) Return the first FieldCondition filtered by the FCD_EVENT_OWNERS column
 * @method     FieldCondition findOneByFcdStatus(string $FCD_STATUS) Return the first FieldCondition filtered by the FCD_STATUS column
 * @method     FieldCondition findOneByFcdDynUid(string $FCD_DYN_UID) Return the first FieldCondition filtered by the FCD_DYN_UID column
 *
 * @method     array findByFcdUid(string $FCD_UID) Return FieldCondition objects filtered by the FCD_UID column
 * @method     array findByFcdFunction(string $FCD_FUNCTION) Return FieldCondition objects filtered by the FCD_FUNCTION column
 * @method     array findByFcdFields(string $FCD_FIELDS) Return FieldCondition objects filtered by the FCD_FIELDS column
 * @method     array findByFcdCondition(string $FCD_CONDITION) Return FieldCondition objects filtered by the FCD_CONDITION column
 * @method     array findByFcdEvents(string $FCD_EVENTS) Return FieldCondition objects filtered by the FCD_EVENTS column
 * @method     array findByFcdEventOwners(string $FCD_EVENT_OWNERS) Return FieldCondition objects filtered by the FCD_EVENT_OWNERS column
 * @method     array findByFcdStatus(string $FCD_STATUS) Return FieldCondition objects filtered by the FCD_STATUS column
 * @method     array findByFcdDynUid(string $FCD_DYN_UID) Return FieldCondition objects filtered by the FCD_DYN_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseFieldConditionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseFieldConditionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'FieldCondition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FieldConditionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    FieldConditionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FieldConditionQuery) {
            return $criteria;
        }
        $query = new FieldConditionQuery();
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
     * @return    FieldCondition|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = FieldConditionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(FieldConditionPeer::FCD_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(FieldConditionPeer::FCD_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FCD_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdUid('fooValue');   // WHERE FCD_UID = 'fooValue'
     * $query->filterByFcdUid('%fooValue%'); // WHERE FCD_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdUid($fcdUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdUid)) {
                $fcdUid = str_replace('*', '%', $fcdUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_UID, $fcdUid, $comparison);
    }

    /**
     * Filter the query on the FCD_FUNCTION column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdFunction('fooValue');   // WHERE FCD_FUNCTION = 'fooValue'
     * $query->filterByFcdFunction('%fooValue%'); // WHERE FCD_FUNCTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdFunction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdFunction($fcdFunction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdFunction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdFunction)) {
                $fcdFunction = str_replace('*', '%', $fcdFunction);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_FUNCTION, $fcdFunction, $comparison);
    }

    /**
     * Filter the query on the FCD_FIELDS column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdFields('fooValue');   // WHERE FCD_FIELDS = 'fooValue'
     * $query->filterByFcdFields('%fooValue%'); // WHERE FCD_FIELDS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdFields The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdFields($fcdFields = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdFields)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdFields)) {
                $fcdFields = str_replace('*', '%', $fcdFields);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_FIELDS, $fcdFields, $comparison);
    }

    /**
     * Filter the query on the FCD_CONDITION column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdCondition('fooValue');   // WHERE FCD_CONDITION = 'fooValue'
     * $query->filterByFcdCondition('%fooValue%'); // WHERE FCD_CONDITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdCondition($fcdCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdCondition)) {
                $fcdCondition = str_replace('*', '%', $fcdCondition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_CONDITION, $fcdCondition, $comparison);
    }

    /**
     * Filter the query on the FCD_EVENTS column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdEvents('fooValue');   // WHERE FCD_EVENTS = 'fooValue'
     * $query->filterByFcdEvents('%fooValue%'); // WHERE FCD_EVENTS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdEvents The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdEvents($fcdEvents = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdEvents)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdEvents)) {
                $fcdEvents = str_replace('*', '%', $fcdEvents);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_EVENTS, $fcdEvents, $comparison);
    }

    /**
     * Filter the query on the FCD_EVENT_OWNERS column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdEventOwners('fooValue');   // WHERE FCD_EVENT_OWNERS = 'fooValue'
     * $query->filterByFcdEventOwners('%fooValue%'); // WHERE FCD_EVENT_OWNERS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdEventOwners The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdEventOwners($fcdEventOwners = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdEventOwners)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdEventOwners)) {
                $fcdEventOwners = str_replace('*', '%', $fcdEventOwners);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_EVENT_OWNERS, $fcdEventOwners, $comparison);
    }

    /**
     * Filter the query on the FCD_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdStatus('fooValue');   // WHERE FCD_STATUS = 'fooValue'
     * $query->filterByFcdStatus('%fooValue%'); // WHERE FCD_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdStatus($fcdStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdStatus)) {
                $fcdStatus = str_replace('*', '%', $fcdStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_STATUS, $fcdStatus, $comparison);
    }

    /**
     * Filter the query on the FCD_DYN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFcdDynUid('fooValue');   // WHERE FCD_DYN_UID = 'fooValue'
     * $query->filterByFcdDynUid('%fooValue%'); // WHERE FCD_DYN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fcdDynUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function filterByFcdDynUid($fcdDynUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fcdDynUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fcdDynUid)) {
                $fcdDynUid = str_replace('*', '%', $fcdDynUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldConditionPeer::FCD_DYN_UID, $fcdDynUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     FieldCondition $fieldCondition Object to remove from the list of results
     *
     * @return    FieldConditionQuery The current query, for fluid interface
     */
    public function prune($fieldCondition = null)
    {
        if ($fieldCondition) {
            $this->addUsingAlias(FieldConditionPeer::FCD_UID, $fieldCondition->getFcdUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseFieldConditionQuery