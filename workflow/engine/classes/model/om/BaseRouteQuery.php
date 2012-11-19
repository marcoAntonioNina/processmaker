<?php


/**
 * Base class that represents a query for the 'ROUTE' table.
 *
 * 
 *
 * @method     RouteQuery orderByRouUid($order = Criteria::ASC) Order by the ROU_UID column
 * @method     RouteQuery orderByRouParent($order = Criteria::ASC) Order by the ROU_PARENT column
 * @method     RouteQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     RouteQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     RouteQuery orderByRouNextTask($order = Criteria::ASC) Order by the ROU_NEXT_TASK column
 * @method     RouteQuery orderByRouCase($order = Criteria::ASC) Order by the ROU_CASE column
 * @method     RouteQuery orderByRouType($order = Criteria::ASC) Order by the ROU_TYPE column
 * @method     RouteQuery orderByRouCondition($order = Criteria::ASC) Order by the ROU_CONDITION column
 * @method     RouteQuery orderByRouToLastUser($order = Criteria::ASC) Order by the ROU_TO_LAST_USER column
 * @method     RouteQuery orderByRouOptional($order = Criteria::ASC) Order by the ROU_OPTIONAL column
 * @method     RouteQuery orderByRouSendEmail($order = Criteria::ASC) Order by the ROU_SEND_EMAIL column
 * @method     RouteQuery orderByRouSourceanchor($order = Criteria::ASC) Order by the ROU_SOURCEANCHOR column
 * @method     RouteQuery orderByRouTargetanchor($order = Criteria::ASC) Order by the ROU_TARGETANCHOR column
 * @method     RouteQuery orderByRouToPort($order = Criteria::ASC) Order by the ROU_TO_PORT column
 * @method     RouteQuery orderByRouFromPort($order = Criteria::ASC) Order by the ROU_FROM_PORT column
 * @method     RouteQuery orderByRouEvnUid($order = Criteria::ASC) Order by the ROU_EVN_UID column
 * @method     RouteQuery orderByGatUid($order = Criteria::ASC) Order by the GAT_UID column
 *
 * @method     RouteQuery groupByRouUid() Group by the ROU_UID column
 * @method     RouteQuery groupByRouParent() Group by the ROU_PARENT column
 * @method     RouteQuery groupByProUid() Group by the PRO_UID column
 * @method     RouteQuery groupByTasUid() Group by the TAS_UID column
 * @method     RouteQuery groupByRouNextTask() Group by the ROU_NEXT_TASK column
 * @method     RouteQuery groupByRouCase() Group by the ROU_CASE column
 * @method     RouteQuery groupByRouType() Group by the ROU_TYPE column
 * @method     RouteQuery groupByRouCondition() Group by the ROU_CONDITION column
 * @method     RouteQuery groupByRouToLastUser() Group by the ROU_TO_LAST_USER column
 * @method     RouteQuery groupByRouOptional() Group by the ROU_OPTIONAL column
 * @method     RouteQuery groupByRouSendEmail() Group by the ROU_SEND_EMAIL column
 * @method     RouteQuery groupByRouSourceanchor() Group by the ROU_SOURCEANCHOR column
 * @method     RouteQuery groupByRouTargetanchor() Group by the ROU_TARGETANCHOR column
 * @method     RouteQuery groupByRouToPort() Group by the ROU_TO_PORT column
 * @method     RouteQuery groupByRouFromPort() Group by the ROU_FROM_PORT column
 * @method     RouteQuery groupByRouEvnUid() Group by the ROU_EVN_UID column
 * @method     RouteQuery groupByGatUid() Group by the GAT_UID column
 *
 * @method     RouteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RouteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RouteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Route findOne(PropelPDO $con = null) Return the first Route matching the query
 * @method     Route findOneOrCreate(PropelPDO $con = null) Return the first Route matching the query, or a new Route object populated from the query conditions when no match is found
 *
 * @method     Route findOneByRouUid(string $ROU_UID) Return the first Route filtered by the ROU_UID column
 * @method     Route findOneByRouParent(string $ROU_PARENT) Return the first Route filtered by the ROU_PARENT column
 * @method     Route findOneByProUid(string $PRO_UID) Return the first Route filtered by the PRO_UID column
 * @method     Route findOneByTasUid(string $TAS_UID) Return the first Route filtered by the TAS_UID column
 * @method     Route findOneByRouNextTask(string $ROU_NEXT_TASK) Return the first Route filtered by the ROU_NEXT_TASK column
 * @method     Route findOneByRouCase(int $ROU_CASE) Return the first Route filtered by the ROU_CASE column
 * @method     Route findOneByRouType(string $ROU_TYPE) Return the first Route filtered by the ROU_TYPE column
 * @method     Route findOneByRouCondition(string $ROU_CONDITION) Return the first Route filtered by the ROU_CONDITION column
 * @method     Route findOneByRouToLastUser(string $ROU_TO_LAST_USER) Return the first Route filtered by the ROU_TO_LAST_USER column
 * @method     Route findOneByRouOptional(string $ROU_OPTIONAL) Return the first Route filtered by the ROU_OPTIONAL column
 * @method     Route findOneByRouSendEmail(string $ROU_SEND_EMAIL) Return the first Route filtered by the ROU_SEND_EMAIL column
 * @method     Route findOneByRouSourceanchor(int $ROU_SOURCEANCHOR) Return the first Route filtered by the ROU_SOURCEANCHOR column
 * @method     Route findOneByRouTargetanchor(int $ROU_TARGETANCHOR) Return the first Route filtered by the ROU_TARGETANCHOR column
 * @method     Route findOneByRouToPort(int $ROU_TO_PORT) Return the first Route filtered by the ROU_TO_PORT column
 * @method     Route findOneByRouFromPort(int $ROU_FROM_PORT) Return the first Route filtered by the ROU_FROM_PORT column
 * @method     Route findOneByRouEvnUid(string $ROU_EVN_UID) Return the first Route filtered by the ROU_EVN_UID column
 * @method     Route findOneByGatUid(string $GAT_UID) Return the first Route filtered by the GAT_UID column
 *
 * @method     array findByRouUid(string $ROU_UID) Return Route objects filtered by the ROU_UID column
 * @method     array findByRouParent(string $ROU_PARENT) Return Route objects filtered by the ROU_PARENT column
 * @method     array findByProUid(string $PRO_UID) Return Route objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return Route objects filtered by the TAS_UID column
 * @method     array findByRouNextTask(string $ROU_NEXT_TASK) Return Route objects filtered by the ROU_NEXT_TASK column
 * @method     array findByRouCase(int $ROU_CASE) Return Route objects filtered by the ROU_CASE column
 * @method     array findByRouType(string $ROU_TYPE) Return Route objects filtered by the ROU_TYPE column
 * @method     array findByRouCondition(string $ROU_CONDITION) Return Route objects filtered by the ROU_CONDITION column
 * @method     array findByRouToLastUser(string $ROU_TO_LAST_USER) Return Route objects filtered by the ROU_TO_LAST_USER column
 * @method     array findByRouOptional(string $ROU_OPTIONAL) Return Route objects filtered by the ROU_OPTIONAL column
 * @method     array findByRouSendEmail(string $ROU_SEND_EMAIL) Return Route objects filtered by the ROU_SEND_EMAIL column
 * @method     array findByRouSourceanchor(int $ROU_SOURCEANCHOR) Return Route objects filtered by the ROU_SOURCEANCHOR column
 * @method     array findByRouTargetanchor(int $ROU_TARGETANCHOR) Return Route objects filtered by the ROU_TARGETANCHOR column
 * @method     array findByRouToPort(int $ROU_TO_PORT) Return Route objects filtered by the ROU_TO_PORT column
 * @method     array findByRouFromPort(int $ROU_FROM_PORT) Return Route objects filtered by the ROU_FROM_PORT column
 * @method     array findByRouEvnUid(string $ROU_EVN_UID) Return Route objects filtered by the ROU_EVN_UID column
 * @method     array findByGatUid(string $GAT_UID) Return Route objects filtered by the GAT_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseRouteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRouteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Route', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RouteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RouteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RouteQuery) {
            return $criteria;
        }
        $query = new RouteQuery();
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
     * @return    Route|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RoutePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(RoutePeer::ROU_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(RoutePeer::ROU_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ROU_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRouUid('fooValue');   // WHERE ROU_UID = 'fooValue'
     * $query->filterByRouUid('%fooValue%'); // WHERE ROU_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouUid($rouUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouUid)) {
                $rouUid = str_replace('*', '%', $rouUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_UID, $rouUid, $comparison);
    }

    /**
     * Filter the query on the ROU_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByRouParent('fooValue');   // WHERE ROU_PARENT = 'fooValue'
     * $query->filterByRouParent('%fooValue%'); // WHERE ROU_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouParent($rouParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouParent)) {
                $rouParent = str_replace('*', '%', $rouParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_PARENT, $rouParent, $comparison);
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
     * @return    RouteQuery The current query, for fluid interface
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
        return $this->addUsingAlias(RoutePeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the TAS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasUid('fooValue');   // WHERE TAS_UID = 'fooValue'
     * $query->filterByTasUid('%fooValue%'); // WHERE TAS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByTasUid($tasUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasUid)) {
                $tasUid = str_replace('*', '%', $tasUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the ROU_NEXT_TASK column
     *
     * Example usage:
     * <code>
     * $query->filterByRouNextTask('fooValue');   // WHERE ROU_NEXT_TASK = 'fooValue'
     * $query->filterByRouNextTask('%fooValue%'); // WHERE ROU_NEXT_TASK LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouNextTask The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouNextTask($rouNextTask = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouNextTask)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouNextTask)) {
                $rouNextTask = str_replace('*', '%', $rouNextTask);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_NEXT_TASK, $rouNextTask, $comparison);
    }

    /**
     * Filter the query on the ROU_CASE column
     *
     * Example usage:
     * <code>
     * $query->filterByRouCase(1234); // WHERE ROU_CASE = 1234
     * $query->filterByRouCase(array(12, 34)); // WHERE ROU_CASE IN (12, 34)
     * $query->filterByRouCase(array('min' => 12)); // WHERE ROU_CASE > 12
     * </code>
     *
     * @param     mixed $rouCase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouCase($rouCase = null, $comparison = null)
    {
        if (is_array($rouCase)) {
            $useMinMax = false;
            if (isset($rouCase['min'])) {
                $this->addUsingAlias(RoutePeer::ROU_CASE, $rouCase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rouCase['max'])) {
                $this->addUsingAlias(RoutePeer::ROU_CASE, $rouCase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_CASE, $rouCase, $comparison);
    }

    /**
     * Filter the query on the ROU_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByRouType('fooValue');   // WHERE ROU_TYPE = 'fooValue'
     * $query->filterByRouType('%fooValue%'); // WHERE ROU_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouType($rouType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouType)) {
                $rouType = str_replace('*', '%', $rouType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_TYPE, $rouType, $comparison);
    }

    /**
     * Filter the query on the ROU_CONDITION column
     *
     * Example usage:
     * <code>
     * $query->filterByRouCondition('fooValue');   // WHERE ROU_CONDITION = 'fooValue'
     * $query->filterByRouCondition('%fooValue%'); // WHERE ROU_CONDITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouCondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouCondition($rouCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouCondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouCondition)) {
                $rouCondition = str_replace('*', '%', $rouCondition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_CONDITION, $rouCondition, $comparison);
    }

    /**
     * Filter the query on the ROU_TO_LAST_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByRouToLastUser('fooValue');   // WHERE ROU_TO_LAST_USER = 'fooValue'
     * $query->filterByRouToLastUser('%fooValue%'); // WHERE ROU_TO_LAST_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouToLastUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouToLastUser($rouToLastUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouToLastUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouToLastUser)) {
                $rouToLastUser = str_replace('*', '%', $rouToLastUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_TO_LAST_USER, $rouToLastUser, $comparison);
    }

    /**
     * Filter the query on the ROU_OPTIONAL column
     *
     * Example usage:
     * <code>
     * $query->filterByRouOptional('fooValue');   // WHERE ROU_OPTIONAL = 'fooValue'
     * $query->filterByRouOptional('%fooValue%'); // WHERE ROU_OPTIONAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouOptional The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouOptional($rouOptional = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouOptional)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouOptional)) {
                $rouOptional = str_replace('*', '%', $rouOptional);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_OPTIONAL, $rouOptional, $comparison);
    }

    /**
     * Filter the query on the ROU_SEND_EMAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByRouSendEmail('fooValue');   // WHERE ROU_SEND_EMAIL = 'fooValue'
     * $query->filterByRouSendEmail('%fooValue%'); // WHERE ROU_SEND_EMAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouSendEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouSendEmail($rouSendEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouSendEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouSendEmail)) {
                $rouSendEmail = str_replace('*', '%', $rouSendEmail);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_SEND_EMAIL, $rouSendEmail, $comparison);
    }

    /**
     * Filter the query on the ROU_SOURCEANCHOR column
     *
     * Example usage:
     * <code>
     * $query->filterByRouSourceanchor(1234); // WHERE ROU_SOURCEANCHOR = 1234
     * $query->filterByRouSourceanchor(array(12, 34)); // WHERE ROU_SOURCEANCHOR IN (12, 34)
     * $query->filterByRouSourceanchor(array('min' => 12)); // WHERE ROU_SOURCEANCHOR > 12
     * </code>
     *
     * @param     mixed $rouSourceanchor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouSourceanchor($rouSourceanchor = null, $comparison = null)
    {
        if (is_array($rouSourceanchor)) {
            $useMinMax = false;
            if (isset($rouSourceanchor['min'])) {
                $this->addUsingAlias(RoutePeer::ROU_SOURCEANCHOR, $rouSourceanchor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rouSourceanchor['max'])) {
                $this->addUsingAlias(RoutePeer::ROU_SOURCEANCHOR, $rouSourceanchor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_SOURCEANCHOR, $rouSourceanchor, $comparison);
    }

    /**
     * Filter the query on the ROU_TARGETANCHOR column
     *
     * Example usage:
     * <code>
     * $query->filterByRouTargetanchor(1234); // WHERE ROU_TARGETANCHOR = 1234
     * $query->filterByRouTargetanchor(array(12, 34)); // WHERE ROU_TARGETANCHOR IN (12, 34)
     * $query->filterByRouTargetanchor(array('min' => 12)); // WHERE ROU_TARGETANCHOR > 12
     * </code>
     *
     * @param     mixed $rouTargetanchor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouTargetanchor($rouTargetanchor = null, $comparison = null)
    {
        if (is_array($rouTargetanchor)) {
            $useMinMax = false;
            if (isset($rouTargetanchor['min'])) {
                $this->addUsingAlias(RoutePeer::ROU_TARGETANCHOR, $rouTargetanchor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rouTargetanchor['max'])) {
                $this->addUsingAlias(RoutePeer::ROU_TARGETANCHOR, $rouTargetanchor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_TARGETANCHOR, $rouTargetanchor, $comparison);
    }

    /**
     * Filter the query on the ROU_TO_PORT column
     *
     * Example usage:
     * <code>
     * $query->filterByRouToPort(1234); // WHERE ROU_TO_PORT = 1234
     * $query->filterByRouToPort(array(12, 34)); // WHERE ROU_TO_PORT IN (12, 34)
     * $query->filterByRouToPort(array('min' => 12)); // WHERE ROU_TO_PORT > 12
     * </code>
     *
     * @param     mixed $rouToPort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouToPort($rouToPort = null, $comparison = null)
    {
        if (is_array($rouToPort)) {
            $useMinMax = false;
            if (isset($rouToPort['min'])) {
                $this->addUsingAlias(RoutePeer::ROU_TO_PORT, $rouToPort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rouToPort['max'])) {
                $this->addUsingAlias(RoutePeer::ROU_TO_PORT, $rouToPort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_TO_PORT, $rouToPort, $comparison);
    }

    /**
     * Filter the query on the ROU_FROM_PORT column
     *
     * Example usage:
     * <code>
     * $query->filterByRouFromPort(1234); // WHERE ROU_FROM_PORT = 1234
     * $query->filterByRouFromPort(array(12, 34)); // WHERE ROU_FROM_PORT IN (12, 34)
     * $query->filterByRouFromPort(array('min' => 12)); // WHERE ROU_FROM_PORT > 12
     * </code>
     *
     * @param     mixed $rouFromPort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouFromPort($rouFromPort = null, $comparison = null)
    {
        if (is_array($rouFromPort)) {
            $useMinMax = false;
            if (isset($rouFromPort['min'])) {
                $this->addUsingAlias(RoutePeer::ROU_FROM_PORT, $rouFromPort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rouFromPort['max'])) {
                $this->addUsingAlias(RoutePeer::ROU_FROM_PORT, $rouFromPort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_FROM_PORT, $rouFromPort, $comparison);
    }

    /**
     * Filter the query on the ROU_EVN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRouEvnUid('fooValue');   // WHERE ROU_EVN_UID = 'fooValue'
     * $query->filterByRouEvnUid('%fooValue%'); // WHERE ROU_EVN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rouEvnUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByRouEvnUid($rouEvnUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rouEvnUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rouEvnUid)) {
                $rouEvnUid = str_replace('*', '%', $rouEvnUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::ROU_EVN_UID, $rouEvnUid, $comparison);
    }

    /**
     * Filter the query on the GAT_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByGatUid('fooValue');   // WHERE GAT_UID = 'fooValue'
     * $query->filterByGatUid('%fooValue%'); // WHERE GAT_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gatUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function filterByGatUid($gatUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gatUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gatUid)) {
                $gatUid = str_replace('*', '%', $gatUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(RoutePeer::GAT_UID, $gatUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Route $route Object to remove from the list of results
     *
     * @return    RouteQuery The current query, for fluid interface
     */
    public function prune($route = null)
    {
        if ($route) {
            $this->addUsingAlias(RoutePeer::ROU_UID, $route->getRouUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseRouteQuery