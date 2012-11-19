<?php


/**
 * Base class that represents a query for the 'CALENDAR_BUSINESS_HOURS' table.
 *
 * 
 *
 * @method     CalendarBusinessHoursQuery orderByCalendarUid($order = Criteria::ASC) Order by the CALENDAR_UID column
 * @method     CalendarBusinessHoursQuery orderByCalendarBusinessDay($order = Criteria::ASC) Order by the CALENDAR_BUSINESS_DAY column
 * @method     CalendarBusinessHoursQuery orderByCalendarBusinessStart($order = Criteria::ASC) Order by the CALENDAR_BUSINESS_START column
 * @method     CalendarBusinessHoursQuery orderByCalendarBusinessEnd($order = Criteria::ASC) Order by the CALENDAR_BUSINESS_END column
 *
 * @method     CalendarBusinessHoursQuery groupByCalendarUid() Group by the CALENDAR_UID column
 * @method     CalendarBusinessHoursQuery groupByCalendarBusinessDay() Group by the CALENDAR_BUSINESS_DAY column
 * @method     CalendarBusinessHoursQuery groupByCalendarBusinessStart() Group by the CALENDAR_BUSINESS_START column
 * @method     CalendarBusinessHoursQuery groupByCalendarBusinessEnd() Group by the CALENDAR_BUSINESS_END column
 *
 * @method     CalendarBusinessHoursQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarBusinessHoursQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarBusinessHoursQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarBusinessHours findOne(PropelPDO $con = null) Return the first CalendarBusinessHours matching the query
 * @method     CalendarBusinessHours findOneOrCreate(PropelPDO $con = null) Return the first CalendarBusinessHours matching the query, or a new CalendarBusinessHours object populated from the query conditions when no match is found
 *
 * @method     CalendarBusinessHours findOneByCalendarUid(string $CALENDAR_UID) Return the first CalendarBusinessHours filtered by the CALENDAR_UID column
 * @method     CalendarBusinessHours findOneByCalendarBusinessDay(string $CALENDAR_BUSINESS_DAY) Return the first CalendarBusinessHours filtered by the CALENDAR_BUSINESS_DAY column
 * @method     CalendarBusinessHours findOneByCalendarBusinessStart(string $CALENDAR_BUSINESS_START) Return the first CalendarBusinessHours filtered by the CALENDAR_BUSINESS_START column
 * @method     CalendarBusinessHours findOneByCalendarBusinessEnd(string $CALENDAR_BUSINESS_END) Return the first CalendarBusinessHours filtered by the CALENDAR_BUSINESS_END column
 *
 * @method     array findByCalendarUid(string $CALENDAR_UID) Return CalendarBusinessHours objects filtered by the CALENDAR_UID column
 * @method     array findByCalendarBusinessDay(string $CALENDAR_BUSINESS_DAY) Return CalendarBusinessHours objects filtered by the CALENDAR_BUSINESS_DAY column
 * @method     array findByCalendarBusinessStart(string $CALENDAR_BUSINESS_START) Return CalendarBusinessHours objects filtered by the CALENDAR_BUSINESS_START column
 * @method     array findByCalendarBusinessEnd(string $CALENDAR_BUSINESS_END) Return CalendarBusinessHours objects filtered by the CALENDAR_BUSINESS_END column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCalendarBusinessHoursQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCalendarBusinessHoursQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CalendarBusinessHours', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CalendarBusinessHoursQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CalendarBusinessHoursQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CalendarBusinessHoursQuery) {
            return $criteria;
        }
        $query = new CalendarBusinessHoursQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     * @param     array[$CALENDAR_UID, $CALENDAR_BUSINESS_DAY, $CALENDAR_BUSINESS_START, $CALENDAR_BUSINESS_END] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    CalendarBusinessHours|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CalendarBusinessHoursPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_DAY, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_START, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_END, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CalendarBusinessHoursPeer::CALENDAR_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_DAY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_START, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_END, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_UID, $calendarUid, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_BUSINESS_DAY column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarBusinessDay('fooValue');   // WHERE CALENDAR_BUSINESS_DAY = 'fooValue'
     * $query->filterByCalendarBusinessDay('%fooValue%'); // WHERE CALENDAR_BUSINESS_DAY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarBusinessDay The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
     */
    public function filterByCalendarBusinessDay($calendarBusinessDay = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarBusinessDay)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarBusinessDay)) {
                $calendarBusinessDay = str_replace('*', '%', $calendarBusinessDay);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_DAY, $calendarBusinessDay, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_BUSINESS_START column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarBusinessStart('fooValue');   // WHERE CALENDAR_BUSINESS_START = 'fooValue'
     * $query->filterByCalendarBusinessStart('%fooValue%'); // WHERE CALENDAR_BUSINESS_START LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarBusinessStart The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
     */
    public function filterByCalendarBusinessStart($calendarBusinessStart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarBusinessStart)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarBusinessStart)) {
                $calendarBusinessStart = str_replace('*', '%', $calendarBusinessStart);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_START, $calendarBusinessStart, $comparison);
    }

    /**
     * Filter the query on the CALENDAR_BUSINESS_END column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendarBusinessEnd('fooValue');   // WHERE CALENDAR_BUSINESS_END = 'fooValue'
     * $query->filterByCalendarBusinessEnd('%fooValue%'); // WHERE CALENDAR_BUSINESS_END LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendarBusinessEnd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
     */
    public function filterByCalendarBusinessEnd($calendarBusinessEnd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendarBusinessEnd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendarBusinessEnd)) {
                $calendarBusinessEnd = str_replace('*', '%', $calendarBusinessEnd);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_END, $calendarBusinessEnd, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CalendarBusinessHours $calendarBusinessHours Object to remove from the list of results
     *
     * @return    CalendarBusinessHoursQuery The current query, for fluid interface
     */
    public function prune($calendarBusinessHours = null)
    {
        if ($calendarBusinessHours) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CalendarBusinessHoursPeer::CALENDAR_UID), $calendarBusinessHours->getCalendarUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_DAY), $calendarBusinessHours->getCalendarBusinessDay(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_START), $calendarBusinessHours->getCalendarBusinessStart(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CalendarBusinessHoursPeer::CALENDAR_BUSINESS_END), $calendarBusinessHours->getCalendarBusinessEnd(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseCalendarBusinessHoursQuery