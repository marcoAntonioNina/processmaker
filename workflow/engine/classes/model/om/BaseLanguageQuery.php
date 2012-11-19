<?php


/**
 * Base class that represents a query for the 'LANGUAGE' table.
 *
 * 
 *
 * @method     LanguageQuery orderByLanId($order = Criteria::ASC) Order by the LAN_ID column
 * @method     LanguageQuery orderByLanName($order = Criteria::ASC) Order by the LAN_NAME column
 * @method     LanguageQuery orderByLanNativeName($order = Criteria::ASC) Order by the LAN_NATIVE_NAME column
 * @method     LanguageQuery orderByLanDirection($order = Criteria::ASC) Order by the LAN_DIRECTION column
 * @method     LanguageQuery orderByLanWeight($order = Criteria::ASC) Order by the LAN_WEIGHT column
 * @method     LanguageQuery orderByLanEnabled($order = Criteria::ASC) Order by the LAN_ENABLED column
 * @method     LanguageQuery orderByLanCalendar($order = Criteria::ASC) Order by the LAN_CALENDAR column
 *
 * @method     LanguageQuery groupByLanId() Group by the LAN_ID column
 * @method     LanguageQuery groupByLanName() Group by the LAN_NAME column
 * @method     LanguageQuery groupByLanNativeName() Group by the LAN_NATIVE_NAME column
 * @method     LanguageQuery groupByLanDirection() Group by the LAN_DIRECTION column
 * @method     LanguageQuery groupByLanWeight() Group by the LAN_WEIGHT column
 * @method     LanguageQuery groupByLanEnabled() Group by the LAN_ENABLED column
 * @method     LanguageQuery groupByLanCalendar() Group by the LAN_CALENDAR column
 *
 * @method     LanguageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LanguageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LanguageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Language findOne(PropelPDO $con = null) Return the first Language matching the query
 * @method     Language findOneOrCreate(PropelPDO $con = null) Return the first Language matching the query, or a new Language object populated from the query conditions when no match is found
 *
 * @method     Language findOneByLanId(string $LAN_ID) Return the first Language filtered by the LAN_ID column
 * @method     Language findOneByLanName(string $LAN_NAME) Return the first Language filtered by the LAN_NAME column
 * @method     Language findOneByLanNativeName(string $LAN_NATIVE_NAME) Return the first Language filtered by the LAN_NATIVE_NAME column
 * @method     Language findOneByLanDirection(string $LAN_DIRECTION) Return the first Language filtered by the LAN_DIRECTION column
 * @method     Language findOneByLanWeight(int $LAN_WEIGHT) Return the first Language filtered by the LAN_WEIGHT column
 * @method     Language findOneByLanEnabled(string $LAN_ENABLED) Return the first Language filtered by the LAN_ENABLED column
 * @method     Language findOneByLanCalendar(string $LAN_CALENDAR) Return the first Language filtered by the LAN_CALENDAR column
 *
 * @method     array findByLanId(string $LAN_ID) Return Language objects filtered by the LAN_ID column
 * @method     array findByLanName(string $LAN_NAME) Return Language objects filtered by the LAN_NAME column
 * @method     array findByLanNativeName(string $LAN_NATIVE_NAME) Return Language objects filtered by the LAN_NATIVE_NAME column
 * @method     array findByLanDirection(string $LAN_DIRECTION) Return Language objects filtered by the LAN_DIRECTION column
 * @method     array findByLanWeight(int $LAN_WEIGHT) Return Language objects filtered by the LAN_WEIGHT column
 * @method     array findByLanEnabled(string $LAN_ENABLED) Return Language objects filtered by the LAN_ENABLED column
 * @method     array findByLanCalendar(string $LAN_CALENDAR) Return Language objects filtered by the LAN_CALENDAR column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseLanguageQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLanguageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Language', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LanguageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    LanguageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LanguageQuery) {
            return $criteria;
        }
        $query = new LanguageQuery();
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
     * @return    Language|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = LanguagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(LanguagePeer::LAN_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(LanguagePeer::LAN_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LAN_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByLanId('fooValue');   // WHERE LAN_ID = 'fooValue'
     * $query->filterByLanId('%fooValue%'); // WHERE LAN_ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lanId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanId($lanId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lanId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lanId)) {
                $lanId = str_replace('*', '%', $lanId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_ID, $lanId, $comparison);
    }

    /**
     * Filter the query on the LAN_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByLanName('fooValue');   // WHERE LAN_NAME = 'fooValue'
     * $query->filterByLanName('%fooValue%'); // WHERE LAN_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lanName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanName($lanName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lanName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lanName)) {
                $lanName = str_replace('*', '%', $lanName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_NAME, $lanName, $comparison);
    }

    /**
     * Filter the query on the LAN_NATIVE_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByLanNativeName('fooValue');   // WHERE LAN_NATIVE_NAME = 'fooValue'
     * $query->filterByLanNativeName('%fooValue%'); // WHERE LAN_NATIVE_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lanNativeName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanNativeName($lanNativeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lanNativeName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lanNativeName)) {
                $lanNativeName = str_replace('*', '%', $lanNativeName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_NATIVE_NAME, $lanNativeName, $comparison);
    }

    /**
     * Filter the query on the LAN_DIRECTION column
     *
     * Example usage:
     * <code>
     * $query->filterByLanDirection('fooValue');   // WHERE LAN_DIRECTION = 'fooValue'
     * $query->filterByLanDirection('%fooValue%'); // WHERE LAN_DIRECTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lanDirection The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanDirection($lanDirection = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lanDirection)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lanDirection)) {
                $lanDirection = str_replace('*', '%', $lanDirection);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_DIRECTION, $lanDirection, $comparison);
    }

    /**
     * Filter the query on the LAN_WEIGHT column
     *
     * Example usage:
     * <code>
     * $query->filterByLanWeight(1234); // WHERE LAN_WEIGHT = 1234
     * $query->filterByLanWeight(array(12, 34)); // WHERE LAN_WEIGHT IN (12, 34)
     * $query->filterByLanWeight(array('min' => 12)); // WHERE LAN_WEIGHT > 12
     * </code>
     *
     * @param     mixed $lanWeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanWeight($lanWeight = null, $comparison = null)
    {
        if (is_array($lanWeight)) {
            $useMinMax = false;
            if (isset($lanWeight['min'])) {
                $this->addUsingAlias(LanguagePeer::LAN_WEIGHT, $lanWeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lanWeight['max'])) {
                $this->addUsingAlias(LanguagePeer::LAN_WEIGHT, $lanWeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_WEIGHT, $lanWeight, $comparison);
    }

    /**
     * Filter the query on the LAN_ENABLED column
     *
     * Example usage:
     * <code>
     * $query->filterByLanEnabled('fooValue');   // WHERE LAN_ENABLED = 'fooValue'
     * $query->filterByLanEnabled('%fooValue%'); // WHERE LAN_ENABLED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lanEnabled The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanEnabled($lanEnabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lanEnabled)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lanEnabled)) {
                $lanEnabled = str_replace('*', '%', $lanEnabled);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_ENABLED, $lanEnabled, $comparison);
    }

    /**
     * Filter the query on the LAN_CALENDAR column
     *
     * Example usage:
     * <code>
     * $query->filterByLanCalendar('fooValue');   // WHERE LAN_CALENDAR = 'fooValue'
     * $query->filterByLanCalendar('%fooValue%'); // WHERE LAN_CALENDAR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lanCalendar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function filterByLanCalendar($lanCalendar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lanCalendar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lanCalendar)) {
                $lanCalendar = str_replace('*', '%', $lanCalendar);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LanguagePeer::LAN_CALENDAR, $lanCalendar, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Language $language Object to remove from the list of results
     *
     * @return    LanguageQuery The current query, for fluid interface
     */
    public function prune($language = null)
    {
        if ($language) {
            $this->addUsingAlias(LanguagePeer::LAN_ID, $language->getLanId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseLanguageQuery