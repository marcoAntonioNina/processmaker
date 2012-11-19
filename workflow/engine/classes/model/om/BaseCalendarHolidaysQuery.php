<?php


/**
 * Base class that represents a query for the 'CALENDAR_HOLIDAYS' table.
 *
 * 
 *
 * @method     CalendarHolidaysQuery orderByCalendarUid($order = Criteria::ASC) Order by the CALENDAR_UID column
 * @method     CalendarHolidaysQuery orderByCalendarHolidayName($order = Criteria::ASC) Order by the CALENDAR_HOLIDAY_NAME column
 * @method     CalendarHolidaysQuery orderByCalendarHolidayStart($order = Criteria::ASC) Order by the CALENDAR_HOLIDAY_START column
 * @method     CalendarHolidaysQuery orderByCalendarHolidayEnd($order = Criteria::ASC) Order by the CALENDAR_HOLIDAY_END column
 *
 * @method     CalendarHolidaysQuery groupByCalendarUid() Group by the CALENDAR_UID column
 * @method     CalendarHolidaysQuery groupByCalendarHolidayName() Group by the CALENDAR_HOLIDAY_NAME column
 * @method     CalendarHolidaysQuery groupByCalendarHolidayStart() Group by the CALENDAR_HOLIDAY_START column
 * @method     CalendarHolidaysQuery groupByCalendarHolidayEnd() Group by the CALENDAR_HOLIDAY_END column
 *
 * @method     CalendarHolidaysQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarHolidaysQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarHolidaysQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarHolidays findOne(PropelPDO $con = null) Return the first CalendarHolidays matching the query
 * @method     CalendarHolidays findOneOrCreate(PropelPDO $con = null) Return the first CalendarHolidays matching the query, or a new CalendarHolidays object populated from the query conditions when no match is found
 *
 * @method     CalendarHolidays findOneByCalendarUid(string $CALENDAR_UID) Return the first CalendarHolidays filtered by the CALENDAR_UID column
 * @method     CalendarHolidays findOneByCalendarHolidayName(string $CALENDAR_HOLIDAY_NAME) Return the first CalendarHolidays filtered by the CALENDAR_HOLIDAY_NAME column
 * @method     CalendarHolidays findOneByCalendarHolidayStart(string $CALENDAR_HOLIDAY_START) Return the first CalendarHolidays filtered by the CALENDAR_HOLIDAY_START column
 * @method     CalendarHolidays findOneByCalendarHolidayEnd(string $CALENDAR_HOLIDAY_END) Return the first CalendarHolidays filtered by the CALENDAR_HOLIDAY_END column
 *
 * @method     array findByCalendarUid(string $CALENDAR_UID) Return CalendarHolidays objects filtered by the CALENDAR_UID column
 * @method     array findByCalendarHolidayName(string $CALENDAR_HOLIDAY_NAME) Return CalendarHolidays objects filtered by the CALENDAR_HOLIDAY_NAME column
 * @method     array findByCalendarHolidayStart(string $CALENDAR_HOLIDAY_START) Return CalendarHolidays objects filtered by the CALENDAR_HOLIDAY_START column
 * @method     array findByCalendarHolidayEnd(string $CALENDAR_HOLIDAY_END) Return CalendarHolidays objects filtered by the CALENDAR_HOLIDAY_END column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCalendarHolidaysQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCalendarHolidaysQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CalendarHolidays', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CalendarHolidaysQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CalendarHolidaysQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CalendarHolidaysQuery) {
            return $criteria;
        }
        $query = new CalendarHolidaysQuery();
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
     * @param     array[$CALENDAR_UID, $CALENDAR_HOLIDAY_NAME] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    CalendarHolidays|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CalendarHolidaysPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CalendarHolidaysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_NAME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CalendarHolidaysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CalendarHolidaysPeer::CALENDAR_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CalendarHolidaysPeer::CALENDAR_HOLIDAY_NAME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    CalendarHolidaysQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_UID, $calendarUid, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_HOLIDAY_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarHolidayName('fooValue');   // WHERE CALENDAR_HOLIDAY_NAME = 'fooValue'
     * $query->filterByCalendarHolidayName('%fooValue%'); // WHERE CALENDAR_HOLIDAY_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarHolidayName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarHolidaysQuery The current query, for fluid interface
     */
    public function filterByCalendarHolidayName($calendarHolidayName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarHolidayName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarHolidayName)) {
                $calendarHolidayName = str_replace('*', '%', $calendarHolidayName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_NAME, $calendarHolidayName, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_HOLIDAY_START column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarHolidayStart('2011-03-14'); // WHERE CALENDAR_HOLIDAY_START = '2011-03-14'
     * $query->filterByCalendarHolidayStart('now'); // WHERE CALENDAR_HOLIDAY_START = '2011-03-14'
     * $query->filterByCalendarHolidayStart(array('max' => 'yesterday')); // WHERE CALENDAR_HOLIDAY_START > '2011-03-13'
     * </code>
     *
     * @param     mixed $calendarHolidayStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarHolidaysQuery The current query, for fluid interface
     */
    public function filterByCalendarHolidayStart($calendarHolidayStart = null, $comparison = null)
    {
        if (is_array($calendarHolidayStart)) {
            $useMinMax = false;
            if (isset($calendarHolidayStart['min'])) {
                $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_START, $calendarHolidayStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($calendarHolidayStart['max'])) {
                $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_START, $calendarHolidayStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_START, $calendarHolidayStart, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_HOLIDAY_END column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarHolidayEnd('2011-03-14'); // WHERE CALENDAR_HOLIDAY_END = '2011-03-14'
     * $query->filterByCalendarHolidayEnd('now'); // WHERE CALENDAR_HOLIDAY_END = '2011-03-14'
     * $query->filterByCalendarHolidayEnd(array('max' => 'yesterday')); // WHERE CALENDAR_HOLIDAY_END > '2011-03-13'
     * </code>
     *
     * @param     mixed $calendarHolidayEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarHolidaysQuery The current query, for fluid interface
     */
    public function filterByCalendarHolidayEnd($calendarHolidayEnd = null, $comparison = null)
    {
        if (is_array($calendarHolidayEnd)) {
            $useMinMax = false;
            if (isset($calendarHolidayEnd['min'])) {
                $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_END, $calendarHolidayEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($calendarHolidayEnd['max'])) {
                $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_END, $calendarHolidayEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CalendarHolidaysPeer::CALENDAR_HOLIDAY_END, $calendarHolidayEnd, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CalendarHolidays $calendarHolidays Object to remove from the list of results
     *
     * @return    CalendarHolidaysQuery The current query, for fluid interface
     */
    public function prune($calendarHolidays = null)
    {
        if ($calendarHolidays) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CalendarHolidaysPeer::CALENDAR_UID), $calendarHolidays->getCalendarUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CalendarHolidaysPeer::CALENDAR_HOLIDAY_NAME), $calendarHolidays->getCalendarHolidayName(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseCalendarHolidaysQuery