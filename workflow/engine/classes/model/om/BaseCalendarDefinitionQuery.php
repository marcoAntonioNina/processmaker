<?php


/**
 * Base class that represents a query for the 'CALENDAR_DEFINITION' table.
 *
 * 
 *
 * @method     CalendarDefinitionQuery orderByCalendarUid($order = Criteria::ASC) Order by the CALENDAR_UID column
 * @method     CalendarDefinitionQuery orderByCalendarName($order = Criteria::ASC) Order by the CALENDAR_NAME column
 * @method     CalendarDefinitionQuery orderByCalendarCreateDate($order = Criteria::ASC) Order by the CALENDAR_CREATE_DATE column
 * @method     CalendarDefinitionQuery orderByCalendarUpdateDate($order = Criteria::ASC) Order by the CALENDAR_UPDATE_DATE column
 * @method     CalendarDefinitionQuery orderByCalendarWorkDays($order = Criteria::ASC) Order by the CALENDAR_WORK_DAYS column
 * @method     CalendarDefinitionQuery orderByCalendarDescription($order = Criteria::ASC) Order by the CALENDAR_DESCRIPTION column
 * @method     CalendarDefinitionQuery orderByCalendarStatus($order = Criteria::ASC) Order by the CALENDAR_STATUS column
 *
 * @method     CalendarDefinitionQuery groupByCalendarUid() Group by the CALENDAR_UID column
 * @method     CalendarDefinitionQuery groupByCalendarName() Group by the CALENDAR_NAME column
 * @method     CalendarDefinitionQuery groupByCalendarCreateDate() Group by the CALENDAR_CREATE_DATE column
 * @method     CalendarDefinitionQuery groupByCalendarUpdateDate() Group by the CALENDAR_UPDATE_DATE column
 * @method     CalendarDefinitionQuery groupByCalendarWorkDays() Group by the CALENDAR_WORK_DAYS column
 * @method     CalendarDefinitionQuery groupByCalendarDescription() Group by the CALENDAR_DESCRIPTION column
 * @method     CalendarDefinitionQuery groupByCalendarStatus() Group by the CALENDAR_STATUS column
 *
 * @method     CalendarDefinitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarDefinitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarDefinitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarDefinition findOne(PropelPDO $con = null) Return the first CalendarDefinition matching the query
 * @method     CalendarDefinition findOneOrCreate(PropelPDO $con = null) Return the first CalendarDefinition matching the query, or a new CalendarDefinition object populated from the query conditions when no match is found
 *
 * @method     CalendarDefinition findOneByCalendarUid(string $CALENDAR_UID) Return the first CalendarDefinition filtered by the CALENDAR_UID column
 * @method     CalendarDefinition findOneByCalendarName(string $CALENDAR_NAME) Return the first CalendarDefinition filtered by the CALENDAR_NAME column
 * @method     CalendarDefinition findOneByCalendarCreateDate(string $CALENDAR_CREATE_DATE) Return the first CalendarDefinition filtered by the CALENDAR_CREATE_DATE column
 * @method     CalendarDefinition findOneByCalendarUpdateDate(string $CALENDAR_UPDATE_DATE) Return the first CalendarDefinition filtered by the CALENDAR_UPDATE_DATE column
 * @method     CalendarDefinition findOneByCalendarWorkDays(string $CALENDAR_WORK_DAYS) Return the first CalendarDefinition filtered by the CALENDAR_WORK_DAYS column
 * @method     CalendarDefinition findOneByCalendarDescription(string $CALENDAR_DESCRIPTION) Return the first CalendarDefinition filtered by the CALENDAR_DESCRIPTION column
 * @method     CalendarDefinition findOneByCalendarStatus(string $CALENDAR_STATUS) Return the first CalendarDefinition filtered by the CALENDAR_STATUS column
 *
 * @method     array findByCalendarUid(string $CALENDAR_UID) Return CalendarDefinition objects filtered by the CALENDAR_UID column
 * @method     array findByCalendarName(string $CALENDAR_NAME) Return CalendarDefinition objects filtered by the CALENDAR_NAME column
 * @method     array findByCalendarCreateDate(string $CALENDAR_CREATE_DATE) Return CalendarDefinition objects filtered by the CALENDAR_CREATE_DATE column
 * @method     array findByCalendarUpdateDate(string $CALENDAR_UPDATE_DATE) Return CalendarDefinition objects filtered by the CALENDAR_UPDATE_DATE column
 * @method     array findByCalendarWorkDays(string $CALENDAR_WORK_DAYS) Return CalendarDefinition objects filtered by the CALENDAR_WORK_DAYS column
 * @method     array findByCalendarDescription(string $CALENDAR_DESCRIPTION) Return CalendarDefinition objects filtered by the CALENDAR_DESCRIPTION column
 * @method     array findByCalendarStatus(string $CALENDAR_STATUS) Return CalendarDefinition objects filtered by the CALENDAR_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCalendarDefinitionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCalendarDefinitionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CalendarDefinition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CalendarDefinitionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CalendarDefinitionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CalendarDefinitionQuery) {
            return $criteria;
        }
        $query = new CalendarDefinitionQuery();
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
     * @return    CalendarDefinition|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CalendarDefinitionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CALENDAR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarUid('fooValue');   // WHERE CALENDAR_UID = 'fooValue'
     * $query->filterByCalendarUid('%fooValue%'); // WHERE CALENDAR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarUid($calendarUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarUid)) {
                $calendarUid = str_replace('*', '%', $calendarUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UID, $calendarUid, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarName('fooValue');   // WHERE CALENDAR_NAME = 'fooValue'
     * $query->filterByCalendarName('%fooValue%'); // WHERE CALENDAR_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarName($calendarName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarName)) {
                $calendarName = str_replace('*', '%', $calendarName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_NAME, $calendarName, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarCreateDate('2011-03-14'); // WHERE CALENDAR_CREATE_DATE = '2011-03-14'
     * $query->filterByCalendarCreateDate('now'); // WHERE CALENDAR_CREATE_DATE = '2011-03-14'
     * $query->filterByCalendarCreateDate(array('max' => 'yesterday')); // WHERE CALENDAR_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $calendarCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarCreateDate($calendarCreateDate = null, $comparison = null)
    {
        if (is_array($calendarCreateDate)) {
            $useMinMax = false;
            if (isset($calendarCreateDate['min'])) {
                $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_CREATE_DATE, $calendarCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($calendarCreateDate['max'])) {
                $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_CREATE_DATE, $calendarCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_CREATE_DATE, $calendarCreateDate, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarUpdateDate('2011-03-14'); // WHERE CALENDAR_UPDATE_DATE = '2011-03-14'
     * $query->filterByCalendarUpdateDate('now'); // WHERE CALENDAR_UPDATE_DATE = '2011-03-14'
     * $query->filterByCalendarUpdateDate(array('max' => 'yesterday')); // WHERE CALENDAR_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $calendarUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarUpdateDate($calendarUpdateDate = null, $comparison = null)
    {
        if (is_array($calendarUpdateDate)) {
            $useMinMax = false;
            if (isset($calendarUpdateDate['min'])) {
                $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UPDATE_DATE, $calendarUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($calendarUpdateDate['max'])) {
                $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UPDATE_DATE, $calendarUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UPDATE_DATE, $calendarUpdateDate, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_WORK_DAYS column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarWorkDays('fooValue');   // WHERE CALENDAR_WORK_DAYS = 'fooValue'
     * $query->filterByCalendarWorkDays('%fooValue%'); // WHERE CALENDAR_WORK_DAYS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarWorkDays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarWorkDays($calendarWorkDays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarWorkDays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarWorkDays)) {
                $calendarWorkDays = str_replace('*', '%', $calendarWorkDays);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_WORK_DAYS, $calendarWorkDays, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarDescription('fooValue');   // WHERE CALENDAR_DESCRIPTION = 'fooValue'
     * $query->filterByCalendarDescription('%fooValue%'); // WHERE CALENDAR_DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarDescription($calendarDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarDescription)) {
                $calendarDescription = str_replace('*', '%', $calendarDescription);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_DESCRIPTION, $calendarDescription, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarStatus('fooValue');   // WHERE CALENDAR_STATUS = 'fooValue'
     * $query->filterByCalendarStatus('%fooValue%'); // WHERE CALENDAR_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function filterByCalendarStatus($calendarStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarStatus)) {
                $calendarStatus = str_replace('*', '%', $calendarStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_STATUS, $calendarStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CalendarDefinition $calendarDefinition Object to remove from the list of results
     *
     * @return    CalendarDefinitionQuery The current query, for fluid interface
     */
    public function prune($calendarDefinition = null)
    {
        if ($calendarDefinition) {
            $this->addUsingAlias(CalendarDefinitionPeer::CALENDAR_UID, $calendarDefinition->getCalendarUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCalendarDefinitionQuery