<?php


/**
 * Base class that represents a query for the 'ADDITIONAL_TABLES' table.
 *
 * 
 *
 * @method     AdditionalTablesQuery orderByAddTabUid($order = Criteria::ASC) Order by the ADD_TAB_UID column
 * @method     AdditionalTablesQuery orderByAddTabName($order = Criteria::ASC) Order by the ADD_TAB_NAME column
 * @method     AdditionalTablesQuery orderByAddTabClassName($order = Criteria::ASC) Order by the ADD_TAB_CLASS_NAME column
 * @method     AdditionalTablesQuery orderByAddTabDescription($order = Criteria::ASC) Order by the ADD_TAB_DESCRIPTION column
 * @method     AdditionalTablesQuery orderByAddTabSdwLogInsert($order = Criteria::ASC) Order by the ADD_TAB_SDW_LOG_INSERT column
 * @method     AdditionalTablesQuery orderByAddTabSdwLogUpdate($order = Criteria::ASC) Order by the ADD_TAB_SDW_LOG_UPDATE column
 * @method     AdditionalTablesQuery orderByAddTabSdwLogDelete($order = Criteria::ASC) Order by the ADD_TAB_SDW_LOG_DELETE column
 * @method     AdditionalTablesQuery orderByAddTabSdwLogSelect($order = Criteria::ASC) Order by the ADD_TAB_SDW_LOG_SELECT column
 * @method     AdditionalTablesQuery orderByAddTabSdwMaxLength($order = Criteria::ASC) Order by the ADD_TAB_SDW_MAX_LENGTH column
 * @method     AdditionalTablesQuery orderByAddTabSdwAutoDelete($order = Criteria::ASC) Order by the ADD_TAB_SDW_AUTO_DELETE column
 * @method     AdditionalTablesQuery orderByAddTabPlgUid($order = Criteria::ASC) Order by the ADD_TAB_PLG_UID column
 * @method     AdditionalTablesQuery orderByDbsUid($order = Criteria::ASC) Order by the DBS_UID column
 * @method     AdditionalTablesQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     AdditionalTablesQuery orderByAddTabType($order = Criteria::ASC) Order by the ADD_TAB_TYPE column
 * @method     AdditionalTablesQuery orderByAddTabGrid($order = Criteria::ASC) Order by the ADD_TAB_GRID column
 * @method     AdditionalTablesQuery orderByAddTabTag($order = Criteria::ASC) Order by the ADD_TAB_TAG column
 *
 * @method     AdditionalTablesQuery groupByAddTabUid() Group by the ADD_TAB_UID column
 * @method     AdditionalTablesQuery groupByAddTabName() Group by the ADD_TAB_NAME column
 * @method     AdditionalTablesQuery groupByAddTabClassName() Group by the ADD_TAB_CLASS_NAME column
 * @method     AdditionalTablesQuery groupByAddTabDescription() Group by the ADD_TAB_DESCRIPTION column
 * @method     AdditionalTablesQuery groupByAddTabSdwLogInsert() Group by the ADD_TAB_SDW_LOG_INSERT column
 * @method     AdditionalTablesQuery groupByAddTabSdwLogUpdate() Group by the ADD_TAB_SDW_LOG_UPDATE column
 * @method     AdditionalTablesQuery groupByAddTabSdwLogDelete() Group by the ADD_TAB_SDW_LOG_DELETE column
 * @method     AdditionalTablesQuery groupByAddTabSdwLogSelect() Group by the ADD_TAB_SDW_LOG_SELECT column
 * @method     AdditionalTablesQuery groupByAddTabSdwMaxLength() Group by the ADD_TAB_SDW_MAX_LENGTH column
 * @method     AdditionalTablesQuery groupByAddTabSdwAutoDelete() Group by the ADD_TAB_SDW_AUTO_DELETE column
 * @method     AdditionalTablesQuery groupByAddTabPlgUid() Group by the ADD_TAB_PLG_UID column
 * @method     AdditionalTablesQuery groupByDbsUid() Group by the DBS_UID column
 * @method     AdditionalTablesQuery groupByProUid() Group by the PRO_UID column
 * @method     AdditionalTablesQuery groupByAddTabType() Group by the ADD_TAB_TYPE column
 * @method     AdditionalTablesQuery groupByAddTabGrid() Group by the ADD_TAB_GRID column
 * @method     AdditionalTablesQuery groupByAddTabTag() Group by the ADD_TAB_TAG column
 *
 * @method     AdditionalTablesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AdditionalTablesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AdditionalTablesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AdditionalTables findOne(PropelPDO $con = null) Return the first AdditionalTables matching the query
 * @method     AdditionalTables findOneOrCreate(PropelPDO $con = null) Return the first AdditionalTables matching the query, or a new AdditionalTables object populated from the query conditions when no match is found
 *
 * @method     AdditionalTables findOneByAddTabUid(string $ADD_TAB_UID) Return the first AdditionalTables filtered by the ADD_TAB_UID column
 * @method     AdditionalTables findOneByAddTabName(string $ADD_TAB_NAME) Return the first AdditionalTables filtered by the ADD_TAB_NAME column
 * @method     AdditionalTables findOneByAddTabClassName(string $ADD_TAB_CLASS_NAME) Return the first AdditionalTables filtered by the ADD_TAB_CLASS_NAME column
 * @method     AdditionalTables findOneByAddTabDescription(string $ADD_TAB_DESCRIPTION) Return the first AdditionalTables filtered by the ADD_TAB_DESCRIPTION column
 * @method     AdditionalTables findOneByAddTabSdwLogInsert(int $ADD_TAB_SDW_LOG_INSERT) Return the first AdditionalTables filtered by the ADD_TAB_SDW_LOG_INSERT column
 * @method     AdditionalTables findOneByAddTabSdwLogUpdate(int $ADD_TAB_SDW_LOG_UPDATE) Return the first AdditionalTables filtered by the ADD_TAB_SDW_LOG_UPDATE column
 * @method     AdditionalTables findOneByAddTabSdwLogDelete(int $ADD_TAB_SDW_LOG_DELETE) Return the first AdditionalTables filtered by the ADD_TAB_SDW_LOG_DELETE column
 * @method     AdditionalTables findOneByAddTabSdwLogSelect(int $ADD_TAB_SDW_LOG_SELECT) Return the first AdditionalTables filtered by the ADD_TAB_SDW_LOG_SELECT column
 * @method     AdditionalTables findOneByAddTabSdwMaxLength(int $ADD_TAB_SDW_MAX_LENGTH) Return the first AdditionalTables filtered by the ADD_TAB_SDW_MAX_LENGTH column
 * @method     AdditionalTables findOneByAddTabSdwAutoDelete(int $ADD_TAB_SDW_AUTO_DELETE) Return the first AdditionalTables filtered by the ADD_TAB_SDW_AUTO_DELETE column
 * @method     AdditionalTables findOneByAddTabPlgUid(string $ADD_TAB_PLG_UID) Return the first AdditionalTables filtered by the ADD_TAB_PLG_UID column
 * @method     AdditionalTables findOneByDbsUid(string $DBS_UID) Return the first AdditionalTables filtered by the DBS_UID column
 * @method     AdditionalTables findOneByProUid(string $PRO_UID) Return the first AdditionalTables filtered by the PRO_UID column
 * @method     AdditionalTables findOneByAddTabType(string $ADD_TAB_TYPE) Return the first AdditionalTables filtered by the ADD_TAB_TYPE column
 * @method     AdditionalTables findOneByAddTabGrid(string $ADD_TAB_GRID) Return the first AdditionalTables filtered by the ADD_TAB_GRID column
 * @method     AdditionalTables findOneByAddTabTag(string $ADD_TAB_TAG) Return the first AdditionalTables filtered by the ADD_TAB_TAG column
 *
 * @method     array findByAddTabUid(string $ADD_TAB_UID) Return AdditionalTables objects filtered by the ADD_TAB_UID column
 * @method     array findByAddTabName(string $ADD_TAB_NAME) Return AdditionalTables objects filtered by the ADD_TAB_NAME column
 * @method     array findByAddTabClassName(string $ADD_TAB_CLASS_NAME) Return AdditionalTables objects filtered by the ADD_TAB_CLASS_NAME column
 * @method     array findByAddTabDescription(string $ADD_TAB_DESCRIPTION) Return AdditionalTables objects filtered by the ADD_TAB_DESCRIPTION column
 * @method     array findByAddTabSdwLogInsert(int $ADD_TAB_SDW_LOG_INSERT) Return AdditionalTables objects filtered by the ADD_TAB_SDW_LOG_INSERT column
 * @method     array findByAddTabSdwLogUpdate(int $ADD_TAB_SDW_LOG_UPDATE) Return AdditionalTables objects filtered by the ADD_TAB_SDW_LOG_UPDATE column
 * @method     array findByAddTabSdwLogDelete(int $ADD_TAB_SDW_LOG_DELETE) Return AdditionalTables objects filtered by the ADD_TAB_SDW_LOG_DELETE column
 * @method     array findByAddTabSdwLogSelect(int $ADD_TAB_SDW_LOG_SELECT) Return AdditionalTables objects filtered by the ADD_TAB_SDW_LOG_SELECT column
 * @method     array findByAddTabSdwMaxLength(int $ADD_TAB_SDW_MAX_LENGTH) Return AdditionalTables objects filtered by the ADD_TAB_SDW_MAX_LENGTH column
 * @method     array findByAddTabSdwAutoDelete(int $ADD_TAB_SDW_AUTO_DELETE) Return AdditionalTables objects filtered by the ADD_TAB_SDW_AUTO_DELETE column
 * @method     array findByAddTabPlgUid(string $ADD_TAB_PLG_UID) Return AdditionalTables objects filtered by the ADD_TAB_PLG_UID column
 * @method     array findByDbsUid(string $DBS_UID) Return AdditionalTables objects filtered by the DBS_UID column
 * @method     array findByProUid(string $PRO_UID) Return AdditionalTables objects filtered by the PRO_UID column
 * @method     array findByAddTabType(string $ADD_TAB_TYPE) Return AdditionalTables objects filtered by the ADD_TAB_TYPE column
 * @method     array findByAddTabGrid(string $ADD_TAB_GRID) Return AdditionalTables objects filtered by the ADD_TAB_GRID column
 * @method     array findByAddTabTag(string $ADD_TAB_TAG) Return AdditionalTables objects filtered by the ADD_TAB_TAG column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAdditionalTablesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAdditionalTablesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AdditionalTables', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AdditionalTablesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AdditionalTablesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AdditionalTablesQuery) {
            return $criteria;
        }
        $query = new AdditionalTablesQuery();
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
     * @return    AdditionalTables|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AdditionalTablesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ADD_TAB_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabUid('fooValue');   // WHERE ADD_TAB_UID = 'fooValue'
     * $query->filterByAddTabUid('%fooValue%'); // WHERE ADD_TAB_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabUid($addTabUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabUid)) {
                $addTabUid = str_replace('*', '%', $addTabUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_UID, $addTabUid, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabName('fooValue');   // WHERE ADD_TAB_NAME = 'fooValue'
     * $query->filterByAddTabName('%fooValue%'); // WHERE ADD_TAB_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabName($addTabName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabName)) {
                $addTabName = str_replace('*', '%', $addTabName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_NAME, $addTabName, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_CLASS_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabClassName('fooValue');   // WHERE ADD_TAB_CLASS_NAME = 'fooValue'
     * $query->filterByAddTabClassName('%fooValue%'); // WHERE ADD_TAB_CLASS_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabClassName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabClassName($addTabClassName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabClassName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabClassName)) {
                $addTabClassName = str_replace('*', '%', $addTabClassName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_CLASS_NAME, $addTabClassName, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabDescription('fooValue');   // WHERE ADD_TAB_DESCRIPTION = 'fooValue'
     * $query->filterByAddTabDescription('%fooValue%'); // WHERE ADD_TAB_DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabDescription($addTabDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabDescription)) {
                $addTabDescription = str_replace('*', '%', $addTabDescription);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_DESCRIPTION, $addTabDescription, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_SDW_LOG_INSERT column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabSdwLogInsert(1234); // WHERE ADD_TAB_SDW_LOG_INSERT = 1234
     * $query->filterByAddTabSdwLogInsert(array(12, 34)); // WHERE ADD_TAB_SDW_LOG_INSERT IN (12, 34)
     * $query->filterByAddTabSdwLogInsert(array('min' => 12)); // WHERE ADD_TAB_SDW_LOG_INSERT > 12
     * </code>
     *
     * @param     mixed $addTabSdwLogInsert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabSdwLogInsert($addTabSdwLogInsert = null, $comparison = null)
    {
        if (is_array($addTabSdwLogInsert)) {
            $useMinMax = false;
            if (isset($addTabSdwLogInsert['min'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT, $addTabSdwLogInsert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addTabSdwLogInsert['max'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT, $addTabSdwLogInsert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT, $addTabSdwLogInsert, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_SDW_LOG_UPDATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabSdwLogUpdate(1234); // WHERE ADD_TAB_SDW_LOG_UPDATE = 1234
     * $query->filterByAddTabSdwLogUpdate(array(12, 34)); // WHERE ADD_TAB_SDW_LOG_UPDATE IN (12, 34)
     * $query->filterByAddTabSdwLogUpdate(array('min' => 12)); // WHERE ADD_TAB_SDW_LOG_UPDATE > 12
     * </code>
     *
     * @param     mixed $addTabSdwLogUpdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabSdwLogUpdate($addTabSdwLogUpdate = null, $comparison = null)
    {
        if (is_array($addTabSdwLogUpdate)) {
            $useMinMax = false;
            if (isset($addTabSdwLogUpdate['min'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE, $addTabSdwLogUpdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addTabSdwLogUpdate['max'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE, $addTabSdwLogUpdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE, $addTabSdwLogUpdate, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_SDW_LOG_DELETE column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabSdwLogDelete(1234); // WHERE ADD_TAB_SDW_LOG_DELETE = 1234
     * $query->filterByAddTabSdwLogDelete(array(12, 34)); // WHERE ADD_TAB_SDW_LOG_DELETE IN (12, 34)
     * $query->filterByAddTabSdwLogDelete(array('min' => 12)); // WHERE ADD_TAB_SDW_LOG_DELETE > 12
     * </code>
     *
     * @param     mixed $addTabSdwLogDelete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabSdwLogDelete($addTabSdwLogDelete = null, $comparison = null)
    {
        if (is_array($addTabSdwLogDelete)) {
            $useMinMax = false;
            if (isset($addTabSdwLogDelete['min'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE, $addTabSdwLogDelete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addTabSdwLogDelete['max'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE, $addTabSdwLogDelete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE, $addTabSdwLogDelete, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_SDW_LOG_SELECT column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabSdwLogSelect(1234); // WHERE ADD_TAB_SDW_LOG_SELECT = 1234
     * $query->filterByAddTabSdwLogSelect(array(12, 34)); // WHERE ADD_TAB_SDW_LOG_SELECT IN (12, 34)
     * $query->filterByAddTabSdwLogSelect(array('min' => 12)); // WHERE ADD_TAB_SDW_LOG_SELECT > 12
     * </code>
     *
     * @param     mixed $addTabSdwLogSelect The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabSdwLogSelect($addTabSdwLogSelect = null, $comparison = null)
    {
        if (is_array($addTabSdwLogSelect)) {
            $useMinMax = false;
            if (isset($addTabSdwLogSelect['min'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT, $addTabSdwLogSelect['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addTabSdwLogSelect['max'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT, $addTabSdwLogSelect['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT, $addTabSdwLogSelect, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_SDW_MAX_LENGTH column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabSdwMaxLength(1234); // WHERE ADD_TAB_SDW_MAX_LENGTH = 1234
     * $query->filterByAddTabSdwMaxLength(array(12, 34)); // WHERE ADD_TAB_SDW_MAX_LENGTH IN (12, 34)
     * $query->filterByAddTabSdwMaxLength(array('min' => 12)); // WHERE ADD_TAB_SDW_MAX_LENGTH > 12
     * </code>
     *
     * @param     mixed $addTabSdwMaxLength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabSdwMaxLength($addTabSdwMaxLength = null, $comparison = null)
    {
        if (is_array($addTabSdwMaxLength)) {
            $useMinMax = false;
            if (isset($addTabSdwMaxLength['min'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH, $addTabSdwMaxLength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addTabSdwMaxLength['max'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH, $addTabSdwMaxLength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH, $addTabSdwMaxLength, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_SDW_AUTO_DELETE column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabSdwAutoDelete(1234); // WHERE ADD_TAB_SDW_AUTO_DELETE = 1234
     * $query->filterByAddTabSdwAutoDelete(array(12, 34)); // WHERE ADD_TAB_SDW_AUTO_DELETE IN (12, 34)
     * $query->filterByAddTabSdwAutoDelete(array('min' => 12)); // WHERE ADD_TAB_SDW_AUTO_DELETE > 12
     * </code>
     *
     * @param     mixed $addTabSdwAutoDelete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabSdwAutoDelete($addTabSdwAutoDelete = null, $comparison = null)
    {
        if (is_array($addTabSdwAutoDelete)) {
            $useMinMax = false;
            if (isset($addTabSdwAutoDelete['min'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE, $addTabSdwAutoDelete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addTabSdwAutoDelete['max'])) {
                $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE, $addTabSdwAutoDelete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE, $addTabSdwAutoDelete, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_PLG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabPlgUid('fooValue');   // WHERE ADD_TAB_PLG_UID = 'fooValue'
     * $query->filterByAddTabPlgUid('%fooValue%'); // WHERE ADD_TAB_PLG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabPlgUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabPlgUid($addTabPlgUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabPlgUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabPlgUid)) {
                $addTabPlgUid = str_replace('*', '%', $addTabPlgUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_PLG_UID, $addTabPlgUid, $comparison);
    }

    /**
     * Filter the query on the DBS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDbsUid('fooValue');   // WHERE DBS_UID = 'fooValue'
     * $query->filterByDbsUid('%fooValue%'); // WHERE DBS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dbsUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByDbsUid($dbsUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dbsUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dbsUid)) {
                $dbsUid = str_replace('*', '%', $dbsUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::DBS_UID, $dbsUid, $comparison);
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
     * @return    AdditionalTablesQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AdditionalTablesPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabType('fooValue');   // WHERE ADD_TAB_TYPE = 'fooValue'
     * $query->filterByAddTabType('%fooValue%'); // WHERE ADD_TAB_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabType($addTabType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabType)) {
                $addTabType = str_replace('*', '%', $addTabType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_TYPE, $addTabType, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_GRID column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabGrid('fooValue');   // WHERE ADD_TAB_GRID = 'fooValue'
     * $query->filterByAddTabGrid('%fooValue%'); // WHERE ADD_TAB_GRID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabGrid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabGrid($addTabGrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabGrid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabGrid)) {
                $addTabGrid = str_replace('*', '%', $addTabGrid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_GRID, $addTabGrid, $comparison);
    }

    /**
     * Filter the query on the ADD_TAB_TAG column
     *
     * Example usage:
     * <code>
     * $query->filterByAddTabTag('fooValue');   // WHERE ADD_TAB_TAG = 'fooValue'
     * $query->filterByAddTabTag('%fooValue%'); // WHERE ADD_TAB_TAG LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addTabTag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function filterByAddTabTag($addTabTag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addTabTag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addTabTag)) {
                $addTabTag = str_replace('*', '%', $addTabTag);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_TAG, $addTabTag, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AdditionalTables $additionalTables Object to remove from the list of results
     *
     * @return    AdditionalTablesQuery The current query, for fluid interface
     */
    public function prune($additionalTables = null)
    {
        if ($additionalTables) {
            $this->addUsingAlias(AdditionalTablesPeer::ADD_TAB_UID, $additionalTables->getAddTabUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAdditionalTablesQuery