<?php


/**
 * Base class that represents a query for the 'PROCESS' table.
 *
 * 
 *
 * @method     ProcessQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ProcessQuery orderByProParent($order = Criteria::ASC) Order by the PRO_PARENT column
 * @method     ProcessQuery orderByProTime($order = Criteria::ASC) Order by the PRO_TIME column
 * @method     ProcessQuery orderByProTimeunit($order = Criteria::ASC) Order by the PRO_TIMEUNIT column
 * @method     ProcessQuery orderByProStatus($order = Criteria::ASC) Order by the PRO_STATUS column
 * @method     ProcessQuery orderByProTypeDay($order = Criteria::ASC) Order by the PRO_TYPE_DAY column
 * @method     ProcessQuery orderByProType($order = Criteria::ASC) Order by the PRO_TYPE column
 * @method     ProcessQuery orderByProAssignment($order = Criteria::ASC) Order by the PRO_ASSIGNMENT column
 * @method     ProcessQuery orderByProShowMap($order = Criteria::ASC) Order by the PRO_SHOW_MAP column
 * @method     ProcessQuery orderByProShowMessage($order = Criteria::ASC) Order by the PRO_SHOW_MESSAGE column
 * @method     ProcessQuery orderByProSubprocess($order = Criteria::ASC) Order by the PRO_SUBPROCESS column
 * @method     ProcessQuery orderByProTriDeleted($order = Criteria::ASC) Order by the PRO_TRI_DELETED column
 * @method     ProcessQuery orderByProTriCanceled($order = Criteria::ASC) Order by the PRO_TRI_CANCELED column
 * @method     ProcessQuery orderByProTriPaused($order = Criteria::ASC) Order by the PRO_TRI_PAUSED column
 * @method     ProcessQuery orderByProTriReassigned($order = Criteria::ASC) Order by the PRO_TRI_REASSIGNED column
 * @method     ProcessQuery orderByProShowDelegate($order = Criteria::ASC) Order by the PRO_SHOW_DELEGATE column
 * @method     ProcessQuery orderByProShowDynaform($order = Criteria::ASC) Order by the PRO_SHOW_DYNAFORM column
 * @method     ProcessQuery orderByProCategory($order = Criteria::ASC) Order by the PRO_CATEGORY column
 * @method     ProcessQuery orderByProSubCategory($order = Criteria::ASC) Order by the PRO_SUB_CATEGORY column
 * @method     ProcessQuery orderByProIndustry($order = Criteria::ASC) Order by the PRO_INDUSTRY column
 * @method     ProcessQuery orderByProUpdateDate($order = Criteria::ASC) Order by the PRO_UPDATE_DATE column
 * @method     ProcessQuery orderByProCreateDate($order = Criteria::ASC) Order by the PRO_CREATE_DATE column
 * @method     ProcessQuery orderByProCreateUser($order = Criteria::ASC) Order by the PRO_CREATE_USER column
 * @method     ProcessQuery orderByProHeight($order = Criteria::ASC) Order by the PRO_HEIGHT column
 * @method     ProcessQuery orderByProWidth($order = Criteria::ASC) Order by the PRO_WIDTH column
 * @method     ProcessQuery orderByProTitleX($order = Criteria::ASC) Order by the PRO_TITLE_X column
 * @method     ProcessQuery orderByProTitleY($order = Criteria::ASC) Order by the PRO_TITLE_Y column
 * @method     ProcessQuery orderByProDebug($order = Criteria::ASC) Order by the PRO_DEBUG column
 * @method     ProcessQuery orderByProDynaforms($order = Criteria::ASC) Order by the PRO_DYNAFORMS column
 * @method     ProcessQuery orderByProDerivationScreenTpl($order = Criteria::ASC) Order by the PRO_DERIVATION_SCREEN_TPL column
 *
 * @method     ProcessQuery groupByProUid() Group by the PRO_UID column
 * @method     ProcessQuery groupByProParent() Group by the PRO_PARENT column
 * @method     ProcessQuery groupByProTime() Group by the PRO_TIME column
 * @method     ProcessQuery groupByProTimeunit() Group by the PRO_TIMEUNIT column
 * @method     ProcessQuery groupByProStatus() Group by the PRO_STATUS column
 * @method     ProcessQuery groupByProTypeDay() Group by the PRO_TYPE_DAY column
 * @method     ProcessQuery groupByProType() Group by the PRO_TYPE column
 * @method     ProcessQuery groupByProAssignment() Group by the PRO_ASSIGNMENT column
 * @method     ProcessQuery groupByProShowMap() Group by the PRO_SHOW_MAP column
 * @method     ProcessQuery groupByProShowMessage() Group by the PRO_SHOW_MESSAGE column
 * @method     ProcessQuery groupByProSubprocess() Group by the PRO_SUBPROCESS column
 * @method     ProcessQuery groupByProTriDeleted() Group by the PRO_TRI_DELETED column
 * @method     ProcessQuery groupByProTriCanceled() Group by the PRO_TRI_CANCELED column
 * @method     ProcessQuery groupByProTriPaused() Group by the PRO_TRI_PAUSED column
 * @method     ProcessQuery groupByProTriReassigned() Group by the PRO_TRI_REASSIGNED column
 * @method     ProcessQuery groupByProShowDelegate() Group by the PRO_SHOW_DELEGATE column
 * @method     ProcessQuery groupByProShowDynaform() Group by the PRO_SHOW_DYNAFORM column
 * @method     ProcessQuery groupByProCategory() Group by the PRO_CATEGORY column
 * @method     ProcessQuery groupByProSubCategory() Group by the PRO_SUB_CATEGORY column
 * @method     ProcessQuery groupByProIndustry() Group by the PRO_INDUSTRY column
 * @method     ProcessQuery groupByProUpdateDate() Group by the PRO_UPDATE_DATE column
 * @method     ProcessQuery groupByProCreateDate() Group by the PRO_CREATE_DATE column
 * @method     ProcessQuery groupByProCreateUser() Group by the PRO_CREATE_USER column
 * @method     ProcessQuery groupByProHeight() Group by the PRO_HEIGHT column
 * @method     ProcessQuery groupByProWidth() Group by the PRO_WIDTH column
 * @method     ProcessQuery groupByProTitleX() Group by the PRO_TITLE_X column
 * @method     ProcessQuery groupByProTitleY() Group by the PRO_TITLE_Y column
 * @method     ProcessQuery groupByProDebug() Group by the PRO_DEBUG column
 * @method     ProcessQuery groupByProDynaforms() Group by the PRO_DYNAFORMS column
 * @method     ProcessQuery groupByProDerivationScreenTpl() Group by the PRO_DERIVATION_SCREEN_TPL column
 *
 * @method     ProcessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProcessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProcessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Process findOne(PropelPDO $con = null) Return the first Process matching the query
 * @method     Process findOneOrCreate(PropelPDO $con = null) Return the first Process matching the query, or a new Process object populated from the query conditions when no match is found
 *
 * @method     Process findOneByProUid(string $PRO_UID) Return the first Process filtered by the PRO_UID column
 * @method     Process findOneByProParent(string $PRO_PARENT) Return the first Process filtered by the PRO_PARENT column
 * @method     Process findOneByProTime(double $PRO_TIME) Return the first Process filtered by the PRO_TIME column
 * @method     Process findOneByProTimeunit(string $PRO_TIMEUNIT) Return the first Process filtered by the PRO_TIMEUNIT column
 * @method     Process findOneByProStatus(string $PRO_STATUS) Return the first Process filtered by the PRO_STATUS column
 * @method     Process findOneByProTypeDay(string $PRO_TYPE_DAY) Return the first Process filtered by the PRO_TYPE_DAY column
 * @method     Process findOneByProType(string $PRO_TYPE) Return the first Process filtered by the PRO_TYPE column
 * @method     Process findOneByProAssignment(string $PRO_ASSIGNMENT) Return the first Process filtered by the PRO_ASSIGNMENT column
 * @method     Process findOneByProShowMap(int $PRO_SHOW_MAP) Return the first Process filtered by the PRO_SHOW_MAP column
 * @method     Process findOneByProShowMessage(int $PRO_SHOW_MESSAGE) Return the first Process filtered by the PRO_SHOW_MESSAGE column
 * @method     Process findOneByProSubprocess(int $PRO_SUBPROCESS) Return the first Process filtered by the PRO_SUBPROCESS column
 * @method     Process findOneByProTriDeleted(string $PRO_TRI_DELETED) Return the first Process filtered by the PRO_TRI_DELETED column
 * @method     Process findOneByProTriCanceled(string $PRO_TRI_CANCELED) Return the first Process filtered by the PRO_TRI_CANCELED column
 * @method     Process findOneByProTriPaused(string $PRO_TRI_PAUSED) Return the first Process filtered by the PRO_TRI_PAUSED column
 * @method     Process findOneByProTriReassigned(string $PRO_TRI_REASSIGNED) Return the first Process filtered by the PRO_TRI_REASSIGNED column
 * @method     Process findOneByProShowDelegate(int $PRO_SHOW_DELEGATE) Return the first Process filtered by the PRO_SHOW_DELEGATE column
 * @method     Process findOneByProShowDynaform(int $PRO_SHOW_DYNAFORM) Return the first Process filtered by the PRO_SHOW_DYNAFORM column
 * @method     Process findOneByProCategory(string $PRO_CATEGORY) Return the first Process filtered by the PRO_CATEGORY column
 * @method     Process findOneByProSubCategory(string $PRO_SUB_CATEGORY) Return the first Process filtered by the PRO_SUB_CATEGORY column
 * @method     Process findOneByProIndustry(int $PRO_INDUSTRY) Return the first Process filtered by the PRO_INDUSTRY column
 * @method     Process findOneByProUpdateDate(string $PRO_UPDATE_DATE) Return the first Process filtered by the PRO_UPDATE_DATE column
 * @method     Process findOneByProCreateDate(string $PRO_CREATE_DATE) Return the first Process filtered by the PRO_CREATE_DATE column
 * @method     Process findOneByProCreateUser(string $PRO_CREATE_USER) Return the first Process filtered by the PRO_CREATE_USER column
 * @method     Process findOneByProHeight(int $PRO_HEIGHT) Return the first Process filtered by the PRO_HEIGHT column
 * @method     Process findOneByProWidth(int $PRO_WIDTH) Return the first Process filtered by the PRO_WIDTH column
 * @method     Process findOneByProTitleX(int $PRO_TITLE_X) Return the first Process filtered by the PRO_TITLE_X column
 * @method     Process findOneByProTitleY(int $PRO_TITLE_Y) Return the first Process filtered by the PRO_TITLE_Y column
 * @method     Process findOneByProDebug(int $PRO_DEBUG) Return the first Process filtered by the PRO_DEBUG column
 * @method     Process findOneByProDynaforms(string $PRO_DYNAFORMS) Return the first Process filtered by the PRO_DYNAFORMS column
 * @method     Process findOneByProDerivationScreenTpl(string $PRO_DERIVATION_SCREEN_TPL) Return the first Process filtered by the PRO_DERIVATION_SCREEN_TPL column
 *
 * @method     array findByProUid(string $PRO_UID) Return Process objects filtered by the PRO_UID column
 * @method     array findByProParent(string $PRO_PARENT) Return Process objects filtered by the PRO_PARENT column
 * @method     array findByProTime(double $PRO_TIME) Return Process objects filtered by the PRO_TIME column
 * @method     array findByProTimeunit(string $PRO_TIMEUNIT) Return Process objects filtered by the PRO_TIMEUNIT column
 * @method     array findByProStatus(string $PRO_STATUS) Return Process objects filtered by the PRO_STATUS column
 * @method     array findByProTypeDay(string $PRO_TYPE_DAY) Return Process objects filtered by the PRO_TYPE_DAY column
 * @method     array findByProType(string $PRO_TYPE) Return Process objects filtered by the PRO_TYPE column
 * @method     array findByProAssignment(string $PRO_ASSIGNMENT) Return Process objects filtered by the PRO_ASSIGNMENT column
 * @method     array findByProShowMap(int $PRO_SHOW_MAP) Return Process objects filtered by the PRO_SHOW_MAP column
 * @method     array findByProShowMessage(int $PRO_SHOW_MESSAGE) Return Process objects filtered by the PRO_SHOW_MESSAGE column
 * @method     array findByProSubprocess(int $PRO_SUBPROCESS) Return Process objects filtered by the PRO_SUBPROCESS column
 * @method     array findByProTriDeleted(string $PRO_TRI_DELETED) Return Process objects filtered by the PRO_TRI_DELETED column
 * @method     array findByProTriCanceled(string $PRO_TRI_CANCELED) Return Process objects filtered by the PRO_TRI_CANCELED column
 * @method     array findByProTriPaused(string $PRO_TRI_PAUSED) Return Process objects filtered by the PRO_TRI_PAUSED column
 * @method     array findByProTriReassigned(string $PRO_TRI_REASSIGNED) Return Process objects filtered by the PRO_TRI_REASSIGNED column
 * @method     array findByProShowDelegate(int $PRO_SHOW_DELEGATE) Return Process objects filtered by the PRO_SHOW_DELEGATE column
 * @method     array findByProShowDynaform(int $PRO_SHOW_DYNAFORM) Return Process objects filtered by the PRO_SHOW_DYNAFORM column
 * @method     array findByProCategory(string $PRO_CATEGORY) Return Process objects filtered by the PRO_CATEGORY column
 * @method     array findByProSubCategory(string $PRO_SUB_CATEGORY) Return Process objects filtered by the PRO_SUB_CATEGORY column
 * @method     array findByProIndustry(int $PRO_INDUSTRY) Return Process objects filtered by the PRO_INDUSTRY column
 * @method     array findByProUpdateDate(string $PRO_UPDATE_DATE) Return Process objects filtered by the PRO_UPDATE_DATE column
 * @method     array findByProCreateDate(string $PRO_CREATE_DATE) Return Process objects filtered by the PRO_CREATE_DATE column
 * @method     array findByProCreateUser(string $PRO_CREATE_USER) Return Process objects filtered by the PRO_CREATE_USER column
 * @method     array findByProHeight(int $PRO_HEIGHT) Return Process objects filtered by the PRO_HEIGHT column
 * @method     array findByProWidth(int $PRO_WIDTH) Return Process objects filtered by the PRO_WIDTH column
 * @method     array findByProTitleX(int $PRO_TITLE_X) Return Process objects filtered by the PRO_TITLE_X column
 * @method     array findByProTitleY(int $PRO_TITLE_Y) Return Process objects filtered by the PRO_TITLE_Y column
 * @method     array findByProDebug(int $PRO_DEBUG) Return Process objects filtered by the PRO_DEBUG column
 * @method     array findByProDynaforms(string $PRO_DYNAFORMS) Return Process objects filtered by the PRO_DYNAFORMS column
 * @method     array findByProDerivationScreenTpl(string $PRO_DERIVATION_SCREEN_TPL) Return Process objects filtered by the PRO_DERIVATION_SCREEN_TPL column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseProcessQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProcessQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Process', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProcessQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ProcessQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProcessQuery) {
            return $criteria;
        }
        $query = new ProcessQuery();
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
     * @return    Process|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ProcessPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ProcessPeer::PRO_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ProcessPeer::PRO_UID, $keys, Criteria::IN);
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
     * @return    ProcessQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ProcessPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the PRO_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByProParent('fooValue');   // WHERE PRO_PARENT = 'fooValue'
     * $query->filterByProParent('%fooValue%'); // WHERE PRO_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProParent($proParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proParent)) {
                $proParent = str_replace('*', '%', $proParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_PARENT, $proParent, $comparison);
    }

    /**
     * Filter the query on the PRO_TIME column
     *
     * Example usage:
     * <code>
     * $query->filterByProTime(1234); // WHERE PRO_TIME = 1234
     * $query->filterByProTime(array(12, 34)); // WHERE PRO_TIME IN (12, 34)
     * $query->filterByProTime(array('min' => 12)); // WHERE PRO_TIME > 12
     * </code>
     *
     * @param     mixed $proTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTime($proTime = null, $comparison = null)
    {
        if (is_array($proTime)) {
            $useMinMax = false;
            if (isset($proTime['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_TIME, $proTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proTime['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_TIME, $proTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TIME, $proTime, $comparison);
    }

    /**
     * Filter the query on the PRO_TIMEUNIT column
     *
     * Example usage:
     * <code>
     * $query->filterByProTimeunit('fooValue');   // WHERE PRO_TIMEUNIT = 'fooValue'
     * $query->filterByProTimeunit('%fooValue%'); // WHERE PRO_TIMEUNIT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proTimeunit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTimeunit($proTimeunit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proTimeunit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proTimeunit)) {
                $proTimeunit = str_replace('*', '%', $proTimeunit);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TIMEUNIT, $proTimeunit, $comparison);
    }

    /**
     * Filter the query on the PRO_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByProStatus('fooValue');   // WHERE PRO_STATUS = 'fooValue'
     * $query->filterByProStatus('%fooValue%'); // WHERE PRO_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProStatus($proStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proStatus)) {
                $proStatus = str_replace('*', '%', $proStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_STATUS, $proStatus, $comparison);
    }

    /**
     * Filter the query on the PRO_TYPE_DAY column
     *
     * Example usage:
     * <code>
     * $query->filterByProTypeDay('fooValue');   // WHERE PRO_TYPE_DAY = 'fooValue'
     * $query->filterByProTypeDay('%fooValue%'); // WHERE PRO_TYPE_DAY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proTypeDay The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTypeDay($proTypeDay = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proTypeDay)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proTypeDay)) {
                $proTypeDay = str_replace('*', '%', $proTypeDay);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TYPE_DAY, $proTypeDay, $comparison);
    }

    /**
     * Filter the query on the PRO_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByProType('fooValue');   // WHERE PRO_TYPE = 'fooValue'
     * $query->filterByProType('%fooValue%'); // WHERE PRO_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProType($proType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proType)) {
                $proType = str_replace('*', '%', $proType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TYPE, $proType, $comparison);
    }

    /**
     * Filter the query on the PRO_ASSIGNMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByProAssignment('fooValue');   // WHERE PRO_ASSIGNMENT = 'fooValue'
     * $query->filterByProAssignment('%fooValue%'); // WHERE PRO_ASSIGNMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proAssignment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProAssignment($proAssignment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proAssignment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proAssignment)) {
                $proAssignment = str_replace('*', '%', $proAssignment);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_ASSIGNMENT, $proAssignment, $comparison);
    }

    /**
     * Filter the query on the PRO_SHOW_MAP column
     *
     * Example usage:
     * <code>
     * $query->filterByProShowMap(1234); // WHERE PRO_SHOW_MAP = 1234
     * $query->filterByProShowMap(array(12, 34)); // WHERE PRO_SHOW_MAP IN (12, 34)
     * $query->filterByProShowMap(array('min' => 12)); // WHERE PRO_SHOW_MAP > 12
     * </code>
     *
     * @param     mixed $proShowMap The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProShowMap($proShowMap = null, $comparison = null)
    {
        if (is_array($proShowMap)) {
            $useMinMax = false;
            if (isset($proShowMap['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_MAP, $proShowMap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proShowMap['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_MAP, $proShowMap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_SHOW_MAP, $proShowMap, $comparison);
    }

    /**
     * Filter the query on the PRO_SHOW_MESSAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByProShowMessage(1234); // WHERE PRO_SHOW_MESSAGE = 1234
     * $query->filterByProShowMessage(array(12, 34)); // WHERE PRO_SHOW_MESSAGE IN (12, 34)
     * $query->filterByProShowMessage(array('min' => 12)); // WHERE PRO_SHOW_MESSAGE > 12
     * </code>
     *
     * @param     mixed $proShowMessage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProShowMessage($proShowMessage = null, $comparison = null)
    {
        if (is_array($proShowMessage)) {
            $useMinMax = false;
            if (isset($proShowMessage['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_MESSAGE, $proShowMessage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proShowMessage['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_MESSAGE, $proShowMessage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_SHOW_MESSAGE, $proShowMessage, $comparison);
    }

    /**
     * Filter the query on the PRO_SUBPROCESS column
     *
     * Example usage:
     * <code>
     * $query->filterByProSubprocess(1234); // WHERE PRO_SUBPROCESS = 1234
     * $query->filterByProSubprocess(array(12, 34)); // WHERE PRO_SUBPROCESS IN (12, 34)
     * $query->filterByProSubprocess(array('min' => 12)); // WHERE PRO_SUBPROCESS > 12
     * </code>
     *
     * @param     mixed $proSubprocess The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProSubprocess($proSubprocess = null, $comparison = null)
    {
        if (is_array($proSubprocess)) {
            $useMinMax = false;
            if (isset($proSubprocess['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SUBPROCESS, $proSubprocess['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proSubprocess['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SUBPROCESS, $proSubprocess['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_SUBPROCESS, $proSubprocess, $comparison);
    }

    /**
     * Filter the query on the PRO_TRI_DELETED column
     *
     * Example usage:
     * <code>
     * $query->filterByProTriDeleted('fooValue');   // WHERE PRO_TRI_DELETED = 'fooValue'
     * $query->filterByProTriDeleted('%fooValue%'); // WHERE PRO_TRI_DELETED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proTriDeleted The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTriDeleted($proTriDeleted = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proTriDeleted)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proTriDeleted)) {
                $proTriDeleted = str_replace('*', '%', $proTriDeleted);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TRI_DELETED, $proTriDeleted, $comparison);
    }

    /**
     * Filter the query on the PRO_TRI_CANCELED column
     *
     * Example usage:
     * <code>
     * $query->filterByProTriCanceled('fooValue');   // WHERE PRO_TRI_CANCELED = 'fooValue'
     * $query->filterByProTriCanceled('%fooValue%'); // WHERE PRO_TRI_CANCELED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proTriCanceled The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTriCanceled($proTriCanceled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proTriCanceled)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proTriCanceled)) {
                $proTriCanceled = str_replace('*', '%', $proTriCanceled);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TRI_CANCELED, $proTriCanceled, $comparison);
    }

    /**
     * Filter the query on the PRO_TRI_PAUSED column
     *
     * Example usage:
     * <code>
     * $query->filterByProTriPaused('fooValue');   // WHERE PRO_TRI_PAUSED = 'fooValue'
     * $query->filterByProTriPaused('%fooValue%'); // WHERE PRO_TRI_PAUSED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proTriPaused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTriPaused($proTriPaused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proTriPaused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proTriPaused)) {
                $proTriPaused = str_replace('*', '%', $proTriPaused);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TRI_PAUSED, $proTriPaused, $comparison);
    }

    /**
     * Filter the query on the PRO_TRI_REASSIGNED column
     *
     * Example usage:
     * <code>
     * $query->filterByProTriReassigned('fooValue');   // WHERE PRO_TRI_REASSIGNED = 'fooValue'
     * $query->filterByProTriReassigned('%fooValue%'); // WHERE PRO_TRI_REASSIGNED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proTriReassigned The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTriReassigned($proTriReassigned = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proTriReassigned)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proTriReassigned)) {
                $proTriReassigned = str_replace('*', '%', $proTriReassigned);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TRI_REASSIGNED, $proTriReassigned, $comparison);
    }

    /**
     * Filter the query on the PRO_SHOW_DELEGATE column
     *
     * Example usage:
     * <code>
     * $query->filterByProShowDelegate(1234); // WHERE PRO_SHOW_DELEGATE = 1234
     * $query->filterByProShowDelegate(array(12, 34)); // WHERE PRO_SHOW_DELEGATE IN (12, 34)
     * $query->filterByProShowDelegate(array('min' => 12)); // WHERE PRO_SHOW_DELEGATE > 12
     * </code>
     *
     * @param     mixed $proShowDelegate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProShowDelegate($proShowDelegate = null, $comparison = null)
    {
        if (is_array($proShowDelegate)) {
            $useMinMax = false;
            if (isset($proShowDelegate['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_DELEGATE, $proShowDelegate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proShowDelegate['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_DELEGATE, $proShowDelegate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_SHOW_DELEGATE, $proShowDelegate, $comparison);
    }

    /**
     * Filter the query on the PRO_SHOW_DYNAFORM column
     *
     * Example usage:
     * <code>
     * $query->filterByProShowDynaform(1234); // WHERE PRO_SHOW_DYNAFORM = 1234
     * $query->filterByProShowDynaform(array(12, 34)); // WHERE PRO_SHOW_DYNAFORM IN (12, 34)
     * $query->filterByProShowDynaform(array('min' => 12)); // WHERE PRO_SHOW_DYNAFORM > 12
     * </code>
     *
     * @param     mixed $proShowDynaform The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProShowDynaform($proShowDynaform = null, $comparison = null)
    {
        if (is_array($proShowDynaform)) {
            $useMinMax = false;
            if (isset($proShowDynaform['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_DYNAFORM, $proShowDynaform['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proShowDynaform['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_SHOW_DYNAFORM, $proShowDynaform['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_SHOW_DYNAFORM, $proShowDynaform, $comparison);
    }

    /**
     * Filter the query on the PRO_CATEGORY column
     *
     * Example usage:
     * <code>
     * $query->filterByProCategory('fooValue');   // WHERE PRO_CATEGORY = 'fooValue'
     * $query->filterByProCategory('%fooValue%'); // WHERE PRO_CATEGORY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proCategory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProCategory($proCategory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proCategory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proCategory)) {
                $proCategory = str_replace('*', '%', $proCategory);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_CATEGORY, $proCategory, $comparison);
    }

    /**
     * Filter the query on the PRO_SUB_CATEGORY column
     *
     * Example usage:
     * <code>
     * $query->filterByProSubCategory('fooValue');   // WHERE PRO_SUB_CATEGORY = 'fooValue'
     * $query->filterByProSubCategory('%fooValue%'); // WHERE PRO_SUB_CATEGORY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proSubCategory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProSubCategory($proSubCategory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proSubCategory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proSubCategory)) {
                $proSubCategory = str_replace('*', '%', $proSubCategory);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_SUB_CATEGORY, $proSubCategory, $comparison);
    }

    /**
     * Filter the query on the PRO_INDUSTRY column
     *
     * Example usage:
     * <code>
     * $query->filterByProIndustry(1234); // WHERE PRO_INDUSTRY = 1234
     * $query->filterByProIndustry(array(12, 34)); // WHERE PRO_INDUSTRY IN (12, 34)
     * $query->filterByProIndustry(array('min' => 12)); // WHERE PRO_INDUSTRY > 12
     * </code>
     *
     * @param     mixed $proIndustry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProIndustry($proIndustry = null, $comparison = null)
    {
        if (is_array($proIndustry)) {
            $useMinMax = false;
            if (isset($proIndustry['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_INDUSTRY, $proIndustry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proIndustry['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_INDUSTRY, $proIndustry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_INDUSTRY, $proIndustry, $comparison);
    }

    /**
     * Filter the query on the PRO_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByProUpdateDate('2011-03-14'); // WHERE PRO_UPDATE_DATE = '2011-03-14'
     * $query->filterByProUpdateDate('now'); // WHERE PRO_UPDATE_DATE = '2011-03-14'
     * $query->filterByProUpdateDate(array('max' => 'yesterday')); // WHERE PRO_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $proUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProUpdateDate($proUpdateDate = null, $comparison = null)
    {
        if (is_array($proUpdateDate)) {
            $useMinMax = false;
            if (isset($proUpdateDate['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_UPDATE_DATE, $proUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proUpdateDate['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_UPDATE_DATE, $proUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_UPDATE_DATE, $proUpdateDate, $comparison);
    }

    /**
     * Filter the query on the PRO_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByProCreateDate('2011-03-14'); // WHERE PRO_CREATE_DATE = '2011-03-14'
     * $query->filterByProCreateDate('now'); // WHERE PRO_CREATE_DATE = '2011-03-14'
     * $query->filterByProCreateDate(array('max' => 'yesterday')); // WHERE PRO_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $proCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProCreateDate($proCreateDate = null, $comparison = null)
    {
        if (is_array($proCreateDate)) {
            $useMinMax = false;
            if (isset($proCreateDate['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_CREATE_DATE, $proCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proCreateDate['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_CREATE_DATE, $proCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_CREATE_DATE, $proCreateDate, $comparison);
    }

    /**
     * Filter the query on the PRO_CREATE_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByProCreateUser('fooValue');   // WHERE PRO_CREATE_USER = 'fooValue'
     * $query->filterByProCreateUser('%fooValue%'); // WHERE PRO_CREATE_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proCreateUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProCreateUser($proCreateUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proCreateUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proCreateUser)) {
                $proCreateUser = str_replace('*', '%', $proCreateUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_CREATE_USER, $proCreateUser, $comparison);
    }

    /**
     * Filter the query on the PRO_HEIGHT column
     *
     * Example usage:
     * <code>
     * $query->filterByProHeight(1234); // WHERE PRO_HEIGHT = 1234
     * $query->filterByProHeight(array(12, 34)); // WHERE PRO_HEIGHT IN (12, 34)
     * $query->filterByProHeight(array('min' => 12)); // WHERE PRO_HEIGHT > 12
     * </code>
     *
     * @param     mixed $proHeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProHeight($proHeight = null, $comparison = null)
    {
        if (is_array($proHeight)) {
            $useMinMax = false;
            if (isset($proHeight['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_HEIGHT, $proHeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proHeight['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_HEIGHT, $proHeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_HEIGHT, $proHeight, $comparison);
    }

    /**
     * Filter the query on the PRO_WIDTH column
     *
     * Example usage:
     * <code>
     * $query->filterByProWidth(1234); // WHERE PRO_WIDTH = 1234
     * $query->filterByProWidth(array(12, 34)); // WHERE PRO_WIDTH IN (12, 34)
     * $query->filterByProWidth(array('min' => 12)); // WHERE PRO_WIDTH > 12
     * </code>
     *
     * @param     mixed $proWidth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProWidth($proWidth = null, $comparison = null)
    {
        if (is_array($proWidth)) {
            $useMinMax = false;
            if (isset($proWidth['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_WIDTH, $proWidth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proWidth['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_WIDTH, $proWidth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_WIDTH, $proWidth, $comparison);
    }

    /**
     * Filter the query on the PRO_TITLE_X column
     *
     * Example usage:
     * <code>
     * $query->filterByProTitleX(1234); // WHERE PRO_TITLE_X = 1234
     * $query->filterByProTitleX(array(12, 34)); // WHERE PRO_TITLE_X IN (12, 34)
     * $query->filterByProTitleX(array('min' => 12)); // WHERE PRO_TITLE_X > 12
     * </code>
     *
     * @param     mixed $proTitleX The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTitleX($proTitleX = null, $comparison = null)
    {
        if (is_array($proTitleX)) {
            $useMinMax = false;
            if (isset($proTitleX['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_TITLE_X, $proTitleX['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proTitleX['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_TITLE_X, $proTitleX['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TITLE_X, $proTitleX, $comparison);
    }

    /**
     * Filter the query on the PRO_TITLE_Y column
     *
     * Example usage:
     * <code>
     * $query->filterByProTitleY(1234); // WHERE PRO_TITLE_Y = 1234
     * $query->filterByProTitleY(array(12, 34)); // WHERE PRO_TITLE_Y IN (12, 34)
     * $query->filterByProTitleY(array('min' => 12)); // WHERE PRO_TITLE_Y > 12
     * </code>
     *
     * @param     mixed $proTitleY The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProTitleY($proTitleY = null, $comparison = null)
    {
        if (is_array($proTitleY)) {
            $useMinMax = false;
            if (isset($proTitleY['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_TITLE_Y, $proTitleY['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proTitleY['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_TITLE_Y, $proTitleY['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_TITLE_Y, $proTitleY, $comparison);
    }

    /**
     * Filter the query on the PRO_DEBUG column
     *
     * Example usage:
     * <code>
     * $query->filterByProDebug(1234); // WHERE PRO_DEBUG = 1234
     * $query->filterByProDebug(array(12, 34)); // WHERE PRO_DEBUG IN (12, 34)
     * $query->filterByProDebug(array('min' => 12)); // WHERE PRO_DEBUG > 12
     * </code>
     *
     * @param     mixed $proDebug The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProDebug($proDebug = null, $comparison = null)
    {
        if (is_array($proDebug)) {
            $useMinMax = false;
            if (isset($proDebug['min'])) {
                $this->addUsingAlias(ProcessPeer::PRO_DEBUG, $proDebug['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proDebug['max'])) {
                $this->addUsingAlias(ProcessPeer::PRO_DEBUG, $proDebug['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_DEBUG, $proDebug, $comparison);
    }

    /**
     * Filter the query on the PRO_DYNAFORMS column
     *
     * Example usage:
     * <code>
     * $query->filterByProDynaforms('fooValue');   // WHERE PRO_DYNAFORMS = 'fooValue'
     * $query->filterByProDynaforms('%fooValue%'); // WHERE PRO_DYNAFORMS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proDynaforms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProDynaforms($proDynaforms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proDynaforms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proDynaforms)) {
                $proDynaforms = str_replace('*', '%', $proDynaforms);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_DYNAFORMS, $proDynaforms, $comparison);
    }

    /**
     * Filter the query on the PRO_DERIVATION_SCREEN_TPL column
     *
     * Example usage:
     * <code>
     * $query->filterByProDerivationScreenTpl('fooValue');   // WHERE PRO_DERIVATION_SCREEN_TPL = 'fooValue'
     * $query->filterByProDerivationScreenTpl('%fooValue%'); // WHERE PRO_DERIVATION_SCREEN_TPL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proDerivationScreenTpl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function filterByProDerivationScreenTpl($proDerivationScreenTpl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proDerivationScreenTpl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proDerivationScreenTpl)) {
                $proDerivationScreenTpl = str_replace('*', '%', $proDerivationScreenTpl);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessPeer::PRO_DERIVATION_SCREEN_TPL, $proDerivationScreenTpl, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Process $process Object to remove from the list of results
     *
     * @return    ProcessQuery The current query, for fluid interface
     */
    public function prune($process = null)
    {
        if ($process) {
            $this->addUsingAlias(ProcessPeer::PRO_UID, $process->getProUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseProcessQuery