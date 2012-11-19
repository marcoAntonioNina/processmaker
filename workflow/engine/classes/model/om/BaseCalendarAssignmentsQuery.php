<?php


/**
 * Base class that represents a query for the 'CALENDAR_ASSIGNMENTS' table.
 *
 * 
 *
 * @method     CalendarAssignmentsQuery orderByObjectUid($order = Criteria::ASC) Order by the OBJECT_UID column
 * @method     CalendarAssignmentsQuery orderByCalendarUid($order = Criteria::ASC) Order by the CALENDAR_UID column
 * @method     CalendarAssignmentsQuery orderByObjectType($order = Criteria::ASC) Order by the OBJECT_TYPE column
 *
 * @method     CalendarAssignmentsQuery groupByObjectUid() Group by the OBJECT_UID column
 * @method     CalendarAssignmentsQuery groupByCalendarUid() Group by the CALENDAR_UID column
 * @method     CalendarAssignmentsQuery groupByObjectType() Group by the OBJECT_TYPE column
 *
 * @method     CalendarAssignmentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarAssignmentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarAssignmentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarAssignments findOne(PropelPDO $con = null) Return the first CalendarAssignments matching the query
 * @method     CalendarAssignments findOneOrCreate(PropelPDO $con = null) Return the first CalendarAssignments matching the query, or a new CalendarAssignments object populated from the query conditions when no match is found
 *
 * @method     CalendarAssignments findOneByObjectUid(string $OBJECT_UID) Return the first CalendarAssignments filtered by the OBJECT_UID column
 * @method     CalendarAssignments findOneByCalendarUid(string $CALENDAR_UID) Return the first CalendarAssignments filtered by the CALENDAR_UID column
 * @method     CalendarAssignments findOneByObjectType(string $OBJECT_TYPE) Return the first CalendarAssignments filtered by the OBJECT_TYPE column
 *
 * @method     array findByObjectUid(string $OBJECT_UID) Return CalendarAssignments objects filtered by the OBJECT_UID column
 * @method     array findByCalendarUid(string $CALENDAR_UID) Return CalendarAssignments objects filtered by the CALENDAR_UID column
 * @method     array findByObjectType(string $OBJECT_TYPE) Return CalendarAssignments objects filtered by the OBJECT_TYPE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCalendarAssignmentsQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCalendarAssignmentsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'CalendarAssignments', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CalendarAssignmentsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CalendarAssignmentsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CalendarAssignmentsQuery) {
            return $criteria;
        }
        $query = new CalendarAssignmentsQuery();
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
     * @return    CalendarAssignments|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CalendarAssignmentsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CalendarAssignmentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CalendarAssignmentsPeer::OBJECT_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CalendarAssignmentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CalendarAssignmentsPeer::OBJECT_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OBJECT_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByObjectUid('fooValue');   // WHERE OBJECT_UID = 'fooValue'
     * $query->filterByObjectUid('%fooValue%'); // WHERE OBJECT_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objectUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarAssignmentsQuery The current query, for fluid interface
     */
    public function filterByObjectUid($objectUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objectUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objectUid)) {
                $objectUid = str_replace('*', '%', $objectUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarAssignmentsPeer::OBJECT_UID, $objectUid, $comparison);
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
     * @return    CalendarAssignmentsQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CalendarAssignmentsPeer::CALENDAR_UID, $calendarUid, $comparison);
    }

    /**
     * Filter the query on the OBJECT_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByObjectType('fooValue');   // WHERE OBJECT_TYPE = 'fooValue'
     * $query->filterByObjectType('%fooValue%'); // WHERE OBJECT_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objectType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CalendarAssignmentsQuery The current query, for fluid interface
     */
    public function filterByObjectType($objectType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objectType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objectType)) {
                $objectType = str_replace('*', '%', $objectType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CalendarAssignmentsPeer::OBJECT_TYPE, $objectType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CalendarAssignments $calendarAssignments Object to remove from the list of results
     *
     * @return    CalendarAssignmentsQuery The current query, for fluid interface
     */
    public function prune($calendarAssignments = null)
    {
        if ($calendarAssignments) {
            $this->addUsingAlias(CalendarAssignmentsPeer::OBJECT_UID, $calendarAssignments->getObjectUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCalendarAssignmentsQuery