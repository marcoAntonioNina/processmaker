<?php


/**
 * Base class that represents a query for the 'APP_NOTES' table.
 *
 * 
 *
 * @method     AppNotesQuery orderByNotesUid($order = Criteria::ASC) Order by the NOTES_UID column
 * @method     AppNotesQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppNotesQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     AppNotesQuery orderByNoteDate($order = Criteria::ASC) Order by the NOTE_DATE column
 * @method     AppNotesQuery orderByNoteContent($order = Criteria::ASC) Order by the NOTE_CONTENT column
 * @method     AppNotesQuery orderByNoteType($order = Criteria::ASC) Order by the NOTE_TYPE column
 * @method     AppNotesQuery orderByNoteAvailability($order = Criteria::ASC) Order by the NOTE_AVAILABILITY column
 * @method     AppNotesQuery orderByNoteOriginObj($order = Criteria::ASC) Order by the NOTE_ORIGIN_OBJ column
 * @method     AppNotesQuery orderByNoteAffectedObj1($order = Criteria::ASC) Order by the NOTE_AFFECTED_OBJ1 column
 * @method     AppNotesQuery orderByNoteAffectedObj2($order = Criteria::ASC) Order by the NOTE_AFFECTED_OBJ2 column
 * @method     AppNotesQuery orderByNoteRecipients($order = Criteria::ASC) Order by the NOTE_RECIPIENTS column
 *
 * @method     AppNotesQuery groupByNotesUid() Group by the NOTES_UID column
 * @method     AppNotesQuery groupByAppUid() Group by the APP_UID column
 * @method     AppNotesQuery groupByUsrUid() Group by the USR_UID column
 * @method     AppNotesQuery groupByNoteDate() Group by the NOTE_DATE column
 * @method     AppNotesQuery groupByNoteContent() Group by the NOTE_CONTENT column
 * @method     AppNotesQuery groupByNoteType() Group by the NOTE_TYPE column
 * @method     AppNotesQuery groupByNoteAvailability() Group by the NOTE_AVAILABILITY column
 * @method     AppNotesQuery groupByNoteOriginObj() Group by the NOTE_ORIGIN_OBJ column
 * @method     AppNotesQuery groupByNoteAffectedObj1() Group by the NOTE_AFFECTED_OBJ1 column
 * @method     AppNotesQuery groupByNoteAffectedObj2() Group by the NOTE_AFFECTED_OBJ2 column
 * @method     AppNotesQuery groupByNoteRecipients() Group by the NOTE_RECIPIENTS column
 *
 * @method     AppNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppNotes findOne(PropelPDO $con = null) Return the first AppNotes matching the query
 * @method     AppNotes findOneOrCreate(PropelPDO $con = null) Return the first AppNotes matching the query, or a new AppNotes object populated from the query conditions when no match is found
 *
 * @method     AppNotes findOneByNotesUid(int $NOTES_UID) Return the first AppNotes filtered by the NOTES_UID column
 * @method     AppNotes findOneByAppUid(string $APP_UID) Return the first AppNotes filtered by the APP_UID column
 * @method     AppNotes findOneByUsrUid(string $USR_UID) Return the first AppNotes filtered by the USR_UID column
 * @method     AppNotes findOneByNoteDate(string $NOTE_DATE) Return the first AppNotes filtered by the NOTE_DATE column
 * @method     AppNotes findOneByNoteContent(string $NOTE_CONTENT) Return the first AppNotes filtered by the NOTE_CONTENT column
 * @method     AppNotes findOneByNoteType(string $NOTE_TYPE) Return the first AppNotes filtered by the NOTE_TYPE column
 * @method     AppNotes findOneByNoteAvailability(string $NOTE_AVAILABILITY) Return the first AppNotes filtered by the NOTE_AVAILABILITY column
 * @method     AppNotes findOneByNoteOriginObj(string $NOTE_ORIGIN_OBJ) Return the first AppNotes filtered by the NOTE_ORIGIN_OBJ column
 * @method     AppNotes findOneByNoteAffectedObj1(string $NOTE_AFFECTED_OBJ1) Return the first AppNotes filtered by the NOTE_AFFECTED_OBJ1 column
 * @method     AppNotes findOneByNoteAffectedObj2(string $NOTE_AFFECTED_OBJ2) Return the first AppNotes filtered by the NOTE_AFFECTED_OBJ2 column
 * @method     AppNotes findOneByNoteRecipients(string $NOTE_RECIPIENTS) Return the first AppNotes filtered by the NOTE_RECIPIENTS column
 *
 * @method     array findByNotesUid(int $NOTES_UID) Return AppNotes objects filtered by the NOTES_UID column
 * @method     array findByAppUid(string $APP_UID) Return AppNotes objects filtered by the APP_UID column
 * @method     array findByUsrUid(string $USR_UID) Return AppNotes objects filtered by the USR_UID column
 * @method     array findByNoteDate(string $NOTE_DATE) Return AppNotes objects filtered by the NOTE_DATE column
 * @method     array findByNoteContent(string $NOTE_CONTENT) Return AppNotes objects filtered by the NOTE_CONTENT column
 * @method     array findByNoteType(string $NOTE_TYPE) Return AppNotes objects filtered by the NOTE_TYPE column
 * @method     array findByNoteAvailability(string $NOTE_AVAILABILITY) Return AppNotes objects filtered by the NOTE_AVAILABILITY column
 * @method     array findByNoteOriginObj(string $NOTE_ORIGIN_OBJ) Return AppNotes objects filtered by the NOTE_ORIGIN_OBJ column
 * @method     array findByNoteAffectedObj1(string $NOTE_AFFECTED_OBJ1) Return AppNotes objects filtered by the NOTE_AFFECTED_OBJ1 column
 * @method     array findByNoteAffectedObj2(string $NOTE_AFFECTED_OBJ2) Return AppNotes objects filtered by the NOTE_AFFECTED_OBJ2 column
 * @method     array findByNoteRecipients(string $NOTE_RECIPIENTS) Return AppNotes objects filtered by the NOTE_RECIPIENTS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppNotesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppNotesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppNotesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppNotesQuery) {
            return $criteria;
        }
        $query = new AppNotesQuery();
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
     * @return    AppNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppNotesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AppNotesPeer::NOTES_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AppNotesPeer::NOTES_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the NOTES_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByNotesUid(1234); // WHERE NOTES_UID = 1234
     * $query->filterByNotesUid(array(12, 34)); // WHERE NOTES_UID IN (12, 34)
     * $query->filterByNotesUid(array('min' => 12)); // WHERE NOTES_UID > 12
     * </code>
     *
     * @param     mixed $notesUid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNotesUid($notesUid = null, $comparison = null)
    {
        if (is_array($notesUid) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppNotesPeer::NOTES_UID, $notesUid, $comparison);
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
     * @return    AppNotesQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppNotesPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the USR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUid('fooValue');   // WHERE USR_UID = 'fooValue'
     * $query->filterByUsrUid('%fooValue%'); // WHERE USR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByUsrUid($usrUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrUid)) {
                $usrUid = str_replace('*', '%', $usrUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the NOTE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteDate('2011-03-14'); // WHERE NOTE_DATE = '2011-03-14'
     * $query->filterByNoteDate('now'); // WHERE NOTE_DATE = '2011-03-14'
     * $query->filterByNoteDate(array('max' => 'yesterday')); // WHERE NOTE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $noteDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteDate($noteDate = null, $comparison = null)
    {
        if (is_array($noteDate)) {
            $useMinMax = false;
            if (isset($noteDate['min'])) {
                $this->addUsingAlias(AppNotesPeer::NOTE_DATE, $noteDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noteDate['max'])) {
                $this->addUsingAlias(AppNotesPeer::NOTE_DATE, $noteDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_DATE, $noteDate, $comparison);
    }

    /**
     * Filter the query on the NOTE_CONTENT column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteContent('fooValue');   // WHERE NOTE_CONTENT = 'fooValue'
     * $query->filterByNoteContent('%fooValue%'); // WHERE NOTE_CONTENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteContent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteContent($noteContent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteContent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteContent)) {
                $noteContent = str_replace('*', '%', $noteContent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_CONTENT, $noteContent, $comparison);
    }

    /**
     * Filter the query on the NOTE_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteType('fooValue');   // WHERE NOTE_TYPE = 'fooValue'
     * $query->filterByNoteType('%fooValue%'); // WHERE NOTE_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteType($noteType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteType)) {
                $noteType = str_replace('*', '%', $noteType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_TYPE, $noteType, $comparison);
    }

    /**
     * Filter the query on the NOTE_AVAILABILITY column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteAvailability('fooValue');   // WHERE NOTE_AVAILABILITY = 'fooValue'
     * $query->filterByNoteAvailability('%fooValue%'); // WHERE NOTE_AVAILABILITY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteAvailability The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteAvailability($noteAvailability = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteAvailability)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteAvailability)) {
                $noteAvailability = str_replace('*', '%', $noteAvailability);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_AVAILABILITY, $noteAvailability, $comparison);
    }

    /**
     * Filter the query on the NOTE_ORIGIN_OBJ column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteOriginObj('fooValue');   // WHERE NOTE_ORIGIN_OBJ = 'fooValue'
     * $query->filterByNoteOriginObj('%fooValue%'); // WHERE NOTE_ORIGIN_OBJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteOriginObj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteOriginObj($noteOriginObj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteOriginObj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteOriginObj)) {
                $noteOriginObj = str_replace('*', '%', $noteOriginObj);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_ORIGIN_OBJ, $noteOriginObj, $comparison);
    }

    /**
     * Filter the query on the NOTE_AFFECTED_OBJ1 column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteAffectedObj1('fooValue');   // WHERE NOTE_AFFECTED_OBJ1 = 'fooValue'
     * $query->filterByNoteAffectedObj1('%fooValue%'); // WHERE NOTE_AFFECTED_OBJ1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteAffectedObj1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteAffectedObj1($noteAffectedObj1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteAffectedObj1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteAffectedObj1)) {
                $noteAffectedObj1 = str_replace('*', '%', $noteAffectedObj1);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_AFFECTED_OBJ1, $noteAffectedObj1, $comparison);
    }

    /**
     * Filter the query on the NOTE_AFFECTED_OBJ2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteAffectedObj2('fooValue');   // WHERE NOTE_AFFECTED_OBJ2 = 'fooValue'
     * $query->filterByNoteAffectedObj2('%fooValue%'); // WHERE NOTE_AFFECTED_OBJ2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteAffectedObj2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteAffectedObj2($noteAffectedObj2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteAffectedObj2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteAffectedObj2)) {
                $noteAffectedObj2 = str_replace('*', '%', $noteAffectedObj2);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_AFFECTED_OBJ2, $noteAffectedObj2, $comparison);
    }

    /**
     * Filter the query on the NOTE_RECIPIENTS column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteRecipients('fooValue');   // WHERE NOTE_RECIPIENTS = 'fooValue'
     * $query->filterByNoteRecipients('%fooValue%'); // WHERE NOTE_RECIPIENTS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteRecipients The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function filterByNoteRecipients($noteRecipients = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteRecipients)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteRecipients)) {
                $noteRecipients = str_replace('*', '%', $noteRecipients);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppNotesPeer::NOTE_RECIPIENTS, $noteRecipients, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppNotes $appNotes Object to remove from the list of results
     *
     * @return    AppNotesQuery The current query, for fluid interface
     */
    public function prune($appNotes = null)
    {
        if ($appNotes) {
            $this->addUsingAlias(AppNotesPeer::NOTES_UID, $appNotes->getNotesUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAppNotesQuery