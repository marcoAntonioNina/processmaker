<?php


/**
 * Base class that represents a query for the 'FIELDS' table.
 *
 * 
 *
 * @method     FieldsQuery orderByFldUid($order = Criteria::ASC) Order by the FLD_UID column
 * @method     FieldsQuery orderByAddTabUid($order = Criteria::ASC) Order by the ADD_TAB_UID column
 * @method     FieldsQuery orderByFldIndex($order = Criteria::ASC) Order by the FLD_INDEX column
 * @method     FieldsQuery orderByFldName($order = Criteria::ASC) Order by the FLD_NAME column
 * @method     FieldsQuery orderByFldDescription($order = Criteria::ASC) Order by the FLD_DESCRIPTION column
 * @method     FieldsQuery orderByFldType($order = Criteria::ASC) Order by the FLD_TYPE column
 * @method     FieldsQuery orderByFldSize($order = Criteria::ASC) Order by the FLD_SIZE column
 * @method     FieldsQuery orderByFldNull($order = Criteria::ASC) Order by the FLD_NULL column
 * @method     FieldsQuery orderByFldAutoIncrement($order = Criteria::ASC) Order by the FLD_AUTO_INCREMENT column
 * @method     FieldsQuery orderByFldKey($order = Criteria::ASC) Order by the FLD_KEY column
 * @method     FieldsQuery orderByFldForeignKey($order = Criteria::ASC) Order by the FLD_FOREIGN_KEY column
 * @method     FieldsQuery orderByFldForeignKeyTable($order = Criteria::ASC) Order by the FLD_FOREIGN_KEY_TABLE column
 * @method     FieldsQuery orderByFldDynName($order = Criteria::ASC) Order by the FLD_DYN_NAME column
 * @method     FieldsQuery orderByFldDynUid($order = Criteria::ASC) Order by the FLD_DYN_UID column
 * @method     FieldsQuery orderByFldFilter($order = Criteria::ASC) Order by the FLD_FILTER column
 *
 * @method     FieldsQuery groupByFldUid() Group by the FLD_UID column
 * @method     FieldsQuery groupByAddTabUid() Group by the ADD_TAB_UID column
 * @method     FieldsQuery groupByFldIndex() Group by the FLD_INDEX column
 * @method     FieldsQuery groupByFldName() Group by the FLD_NAME column
 * @method     FieldsQuery groupByFldDescription() Group by the FLD_DESCRIPTION column
 * @method     FieldsQuery groupByFldType() Group by the FLD_TYPE column
 * @method     FieldsQuery groupByFldSize() Group by the FLD_SIZE column
 * @method     FieldsQuery groupByFldNull() Group by the FLD_NULL column
 * @method     FieldsQuery groupByFldAutoIncrement() Group by the FLD_AUTO_INCREMENT column
 * @method     FieldsQuery groupByFldKey() Group by the FLD_KEY column
 * @method     FieldsQuery groupByFldForeignKey() Group by the FLD_FOREIGN_KEY column
 * @method     FieldsQuery groupByFldForeignKeyTable() Group by the FLD_FOREIGN_KEY_TABLE column
 * @method     FieldsQuery groupByFldDynName() Group by the FLD_DYN_NAME column
 * @method     FieldsQuery groupByFldDynUid() Group by the FLD_DYN_UID column
 * @method     FieldsQuery groupByFldFilter() Group by the FLD_FILTER column
 *
 * @method     FieldsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FieldsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FieldsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Fields findOne(PropelPDO $con = null) Return the first Fields matching the query
 * @method     Fields findOneOrCreate(PropelPDO $con = null) Return the first Fields matching the query, or a new Fields object populated from the query conditions when no match is found
 *
 * @method     Fields findOneByFldUid(string $FLD_UID) Return the first Fields filtered by the FLD_UID column
 * @method     Fields findOneByAddTabUid(string $ADD_TAB_UID) Return the first Fields filtered by the ADD_TAB_UID column
 * @method     Fields findOneByFldIndex(int $FLD_INDEX) Return the first Fields filtered by the FLD_INDEX column
 * @method     Fields findOneByFldName(string $FLD_NAME) Return the first Fields filtered by the FLD_NAME column
 * @method     Fields findOneByFldDescription(string $FLD_DESCRIPTION) Return the first Fields filtered by the FLD_DESCRIPTION column
 * @method     Fields findOneByFldType(string $FLD_TYPE) Return the first Fields filtered by the FLD_TYPE column
 * @method     Fields findOneByFldSize(int $FLD_SIZE) Return the first Fields filtered by the FLD_SIZE column
 * @method     Fields findOneByFldNull(int $FLD_NULL) Return the first Fields filtered by the FLD_NULL column
 * @method     Fields findOneByFldAutoIncrement(int $FLD_AUTO_INCREMENT) Return the first Fields filtered by the FLD_AUTO_INCREMENT column
 * @method     Fields findOneByFldKey(int $FLD_KEY) Return the first Fields filtered by the FLD_KEY column
 * @method     Fields findOneByFldForeignKey(int $FLD_FOREIGN_KEY) Return the first Fields filtered by the FLD_FOREIGN_KEY column
 * @method     Fields findOneByFldForeignKeyTable(string $FLD_FOREIGN_KEY_TABLE) Return the first Fields filtered by the FLD_FOREIGN_KEY_TABLE column
 * @method     Fields findOneByFldDynName(string $FLD_DYN_NAME) Return the first Fields filtered by the FLD_DYN_NAME column
 * @method     Fields findOneByFldDynUid(string $FLD_DYN_UID) Return the first Fields filtered by the FLD_DYN_UID column
 * @method     Fields findOneByFldFilter(int $FLD_FILTER) Return the first Fields filtered by the FLD_FILTER column
 *
 * @method     array findByFldUid(string $FLD_UID) Return Fields objects filtered by the FLD_UID column
 * @method     array findByAddTabUid(string $ADD_TAB_UID) Return Fields objects filtered by the ADD_TAB_UID column
 * @method     array findByFldIndex(int $FLD_INDEX) Return Fields objects filtered by the FLD_INDEX column
 * @method     array findByFldName(string $FLD_NAME) Return Fields objects filtered by the FLD_NAME column
 * @method     array findByFldDescription(string $FLD_DESCRIPTION) Return Fields objects filtered by the FLD_DESCRIPTION column
 * @method     array findByFldType(string $FLD_TYPE) Return Fields objects filtered by the FLD_TYPE column
 * @method     array findByFldSize(int $FLD_SIZE) Return Fields objects filtered by the FLD_SIZE column
 * @method     array findByFldNull(int $FLD_NULL) Return Fields objects filtered by the FLD_NULL column
 * @method     array findByFldAutoIncrement(int $FLD_AUTO_INCREMENT) Return Fields objects filtered by the FLD_AUTO_INCREMENT column
 * @method     array findByFldKey(int $FLD_KEY) Return Fields objects filtered by the FLD_KEY column
 * @method     array findByFldForeignKey(int $FLD_FOREIGN_KEY) Return Fields objects filtered by the FLD_FOREIGN_KEY column
 * @method     array findByFldForeignKeyTable(string $FLD_FOREIGN_KEY_TABLE) Return Fields objects filtered by the FLD_FOREIGN_KEY_TABLE column
 * @method     array findByFldDynName(string $FLD_DYN_NAME) Return Fields objects filtered by the FLD_DYN_NAME column
 * @method     array findByFldDynUid(string $FLD_DYN_UID) Return Fields objects filtered by the FLD_DYN_UID column
 * @method     array findByFldFilter(int $FLD_FILTER) Return Fields objects filtered by the FLD_FILTER column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseFieldsQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseFieldsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Fields', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FieldsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    FieldsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FieldsQuery) {
            return $criteria;
        }
        $query = new FieldsQuery();
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
     * @return    Fields|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = FieldsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(FieldsPeer::FLD_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(FieldsPeer::FLD_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FLD_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFldUid('fooValue');   // WHERE FLD_UID = 'fooValue'
     * $query->filterByFldUid('%fooValue%'); // WHERE FLD_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldUid($fldUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldUid)) {
                $fldUid = str_replace('*', '%', $fldUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_UID, $fldUid, $comparison);
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
     * @return    FieldsQuery The current query, for fluid interface
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
        return $this->addUsingAlias(FieldsPeer::ADD_TAB_UID, $addTabUid, $comparison);
    }

    /**
     * Filter the query on the FLD_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByFldIndex(1234); // WHERE FLD_INDEX = 1234
     * $query->filterByFldIndex(array(12, 34)); // WHERE FLD_INDEX IN (12, 34)
     * $query->filterByFldIndex(array('min' => 12)); // WHERE FLD_INDEX > 12
     * </code>
     *
     * @param     mixed $fldIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldIndex($fldIndex = null, $comparison = null)
    {
        if (is_array($fldIndex)) {
            $useMinMax = false;
            if (isset($fldIndex['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_INDEX, $fldIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldIndex['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_INDEX, $fldIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_INDEX, $fldIndex, $comparison);
    }

    /**
     * Filter the query on the FLD_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByFldName('fooValue');   // WHERE FLD_NAME = 'fooValue'
     * $query->filterByFldName('%fooValue%'); // WHERE FLD_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldName($fldName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldName)) {
                $fldName = str_replace('*', '%', $fldName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_NAME, $fldName, $comparison);
    }

    /**
     * Filter the query on the FLD_DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByFldDescription('fooValue');   // WHERE FLD_DESCRIPTION = 'fooValue'
     * $query->filterByFldDescription('%fooValue%'); // WHERE FLD_DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldDescription($fldDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldDescription)) {
                $fldDescription = str_replace('*', '%', $fldDescription);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_DESCRIPTION, $fldDescription, $comparison);
    }

    /**
     * Filter the query on the FLD_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByFldType('fooValue');   // WHERE FLD_TYPE = 'fooValue'
     * $query->filterByFldType('%fooValue%'); // WHERE FLD_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldType($fldType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldType)) {
                $fldType = str_replace('*', '%', $fldType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_TYPE, $fldType, $comparison);
    }

    /**
     * Filter the query on the FLD_SIZE column
     *
     * Example usage:
     * <code>
     * $query->filterByFldSize(1234); // WHERE FLD_SIZE = 1234
     * $query->filterByFldSize(array(12, 34)); // WHERE FLD_SIZE IN (12, 34)
     * $query->filterByFldSize(array('min' => 12)); // WHERE FLD_SIZE > 12
     * </code>
     *
     * @param     mixed $fldSize The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldSize($fldSize = null, $comparison = null)
    {
        if (is_array($fldSize)) {
            $useMinMax = false;
            if (isset($fldSize['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_SIZE, $fldSize['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldSize['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_SIZE, $fldSize['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_SIZE, $fldSize, $comparison);
    }

    /**
     * Filter the query on the FLD_NULL column
     *
     * Example usage:
     * <code>
     * $query->filterByFldNull(1234); // WHERE FLD_NULL = 1234
     * $query->filterByFldNull(array(12, 34)); // WHERE FLD_NULL IN (12, 34)
     * $query->filterByFldNull(array('min' => 12)); // WHERE FLD_NULL > 12
     * </code>
     *
     * @param     mixed $fldNull The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldNull($fldNull = null, $comparison = null)
    {
        if (is_array($fldNull)) {
            $useMinMax = false;
            if (isset($fldNull['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_NULL, $fldNull['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldNull['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_NULL, $fldNull['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_NULL, $fldNull, $comparison);
    }

    /**
     * Filter the query on the FLD_AUTO_INCREMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByFldAutoIncrement(1234); // WHERE FLD_AUTO_INCREMENT = 1234
     * $query->filterByFldAutoIncrement(array(12, 34)); // WHERE FLD_AUTO_INCREMENT IN (12, 34)
     * $query->filterByFldAutoIncrement(array('min' => 12)); // WHERE FLD_AUTO_INCREMENT > 12
     * </code>
     *
     * @param     mixed $fldAutoIncrement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldAutoIncrement($fldAutoIncrement = null, $comparison = null)
    {
        if (is_array($fldAutoIncrement)) {
            $useMinMax = false;
            if (isset($fldAutoIncrement['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_AUTO_INCREMENT, $fldAutoIncrement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldAutoIncrement['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_AUTO_INCREMENT, $fldAutoIncrement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_AUTO_INCREMENT, $fldAutoIncrement, $comparison);
    }

    /**
     * Filter the query on the FLD_KEY column
     *
     * Example usage:
     * <code>
     * $query->filterByFldKey(1234); // WHERE FLD_KEY = 1234
     * $query->filterByFldKey(array(12, 34)); // WHERE FLD_KEY IN (12, 34)
     * $query->filterByFldKey(array('min' => 12)); // WHERE FLD_KEY > 12
     * </code>
     *
     * @param     mixed $fldKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldKey($fldKey = null, $comparison = null)
    {
        if (is_array($fldKey)) {
            $useMinMax = false;
            if (isset($fldKey['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_KEY, $fldKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldKey['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_KEY, $fldKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_KEY, $fldKey, $comparison);
    }

    /**
     * Filter the query on the FLD_FOREIGN_KEY column
     *
     * Example usage:
     * <code>
     * $query->filterByFldForeignKey(1234); // WHERE FLD_FOREIGN_KEY = 1234
     * $query->filterByFldForeignKey(array(12, 34)); // WHERE FLD_FOREIGN_KEY IN (12, 34)
     * $query->filterByFldForeignKey(array('min' => 12)); // WHERE FLD_FOREIGN_KEY > 12
     * </code>
     *
     * @param     mixed $fldForeignKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldForeignKey($fldForeignKey = null, $comparison = null)
    {
        if (is_array($fldForeignKey)) {
            $useMinMax = false;
            if (isset($fldForeignKey['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_FOREIGN_KEY, $fldForeignKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldForeignKey['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_FOREIGN_KEY, $fldForeignKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_FOREIGN_KEY, $fldForeignKey, $comparison);
    }

    /**
     * Filter the query on the FLD_FOREIGN_KEY_TABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByFldForeignKeyTable('fooValue');   // WHERE FLD_FOREIGN_KEY_TABLE = 'fooValue'
     * $query->filterByFldForeignKeyTable('%fooValue%'); // WHERE FLD_FOREIGN_KEY_TABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldForeignKeyTable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldForeignKeyTable($fldForeignKeyTable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldForeignKeyTable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldForeignKeyTable)) {
                $fldForeignKeyTable = str_replace('*', '%', $fldForeignKeyTable);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_FOREIGN_KEY_TABLE, $fldForeignKeyTable, $comparison);
    }

    /**
     * Filter the query on the FLD_DYN_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByFldDynName('fooValue');   // WHERE FLD_DYN_NAME = 'fooValue'
     * $query->filterByFldDynName('%fooValue%'); // WHERE FLD_DYN_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldDynName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldDynName($fldDynName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldDynName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldDynName)) {
                $fldDynName = str_replace('*', '%', $fldDynName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_DYN_NAME, $fldDynName, $comparison);
    }

    /**
     * Filter the query on the FLD_DYN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFldDynUid('fooValue');   // WHERE FLD_DYN_UID = 'fooValue'
     * $query->filterByFldDynUid('%fooValue%'); // WHERE FLD_DYN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fldDynUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldDynUid($fldDynUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fldDynUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fldDynUid)) {
                $fldDynUid = str_replace('*', '%', $fldDynUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_DYN_UID, $fldDynUid, $comparison);
    }

    /**
     * Filter the query on the FLD_FILTER column
     *
     * Example usage:
     * <code>
     * $query->filterByFldFilter(1234); // WHERE FLD_FILTER = 1234
     * $query->filterByFldFilter(array(12, 34)); // WHERE FLD_FILTER IN (12, 34)
     * $query->filterByFldFilter(array('min' => 12)); // WHERE FLD_FILTER > 12
     * </code>
     *
     * @param     mixed $fldFilter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function filterByFldFilter($fldFilter = null, $comparison = null)
    {
        if (is_array($fldFilter)) {
            $useMinMax = false;
            if (isset($fldFilter['min'])) {
                $this->addUsingAlias(FieldsPeer::FLD_FILTER, $fldFilter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fldFilter['max'])) {
                $this->addUsingAlias(FieldsPeer::FLD_FILTER, $fldFilter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FieldsPeer::FLD_FILTER, $fldFilter, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Fields $fields Object to remove from the list of results
     *
     * @return    FieldsQuery The current query, for fluid interface
     */
    public function prune($fields = null)
    {
        if ($fields) {
            $this->addUsingAlias(FieldsPeer::FLD_UID, $fields->getFldUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseFieldsQuery