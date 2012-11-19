<?php


/**
 * Base class that represents a query for the 'REPORT_VAR' table.
 *
 * 
 *
 * @method     ReportVarQuery orderByRepVarUid($order = Criteria::ASC) Order by the REP_VAR_UID column
 * @method     ReportVarQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ReportVarQuery orderByRepTabUid($order = Criteria::ASC) Order by the REP_TAB_UID column
 * @method     ReportVarQuery orderByRepVarName($order = Criteria::ASC) Order by the REP_VAR_NAME column
 * @method     ReportVarQuery orderByRepVarType($order = Criteria::ASC) Order by the REP_VAR_TYPE column
 *
 * @method     ReportVarQuery groupByRepVarUid() Group by the REP_VAR_UID column
 * @method     ReportVarQuery groupByProUid() Group by the PRO_UID column
 * @method     ReportVarQuery groupByRepTabUid() Group by the REP_TAB_UID column
 * @method     ReportVarQuery groupByRepVarName() Group by the REP_VAR_NAME column
 * @method     ReportVarQuery groupByRepVarType() Group by the REP_VAR_TYPE column
 *
 * @method     ReportVarQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReportVarQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReportVarQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReportVar findOne(PropelPDO $con = null) Return the first ReportVar matching the query
 * @method     ReportVar findOneOrCreate(PropelPDO $con = null) Return the first ReportVar matching the query, or a new ReportVar object populated from the query conditions when no match is found
 *
 * @method     ReportVar findOneByRepVarUid(string $REP_VAR_UID) Return the first ReportVar filtered by the REP_VAR_UID column
 * @method     ReportVar findOneByProUid(string $PRO_UID) Return the first ReportVar filtered by the PRO_UID column
 * @method     ReportVar findOneByRepTabUid(string $REP_TAB_UID) Return the first ReportVar filtered by the REP_TAB_UID column
 * @method     ReportVar findOneByRepVarName(string $REP_VAR_NAME) Return the first ReportVar filtered by the REP_VAR_NAME column
 * @method     ReportVar findOneByRepVarType(string $REP_VAR_TYPE) Return the first ReportVar filtered by the REP_VAR_TYPE column
 *
 * @method     array findByRepVarUid(string $REP_VAR_UID) Return ReportVar objects filtered by the REP_VAR_UID column
 * @method     array findByProUid(string $PRO_UID) Return ReportVar objects filtered by the PRO_UID column
 * @method     array findByRepTabUid(string $REP_TAB_UID) Return ReportVar objects filtered by the REP_TAB_UID column
 * @method     array findByRepVarName(string $REP_VAR_NAME) Return ReportVar objects filtered by the REP_VAR_NAME column
 * @method     array findByRepVarType(string $REP_VAR_TYPE) Return ReportVar objects filtered by the REP_VAR_TYPE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseReportVarQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseReportVarQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ReportVar', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReportVarQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ReportVarQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReportVarQuery) {
            return $criteria;
        }
        $query = new ReportVarQuery();
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
     * @return    ReportVar|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ReportVarPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ReportVarPeer::REP_VAR_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ReportVarPeer::REP_VAR_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the REP_VAR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRepVarUid('fooValue');   // WHERE REP_VAR_UID = 'fooValue'
     * $query->filterByRepVarUid('%fooValue%'); // WHERE REP_VAR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repVarUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function filterByRepVarUid($repVarUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repVarUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repVarUid)) {
                $repVarUid = str_replace('*', '%', $repVarUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportVarPeer::REP_VAR_UID, $repVarUid, $comparison);
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
     * @return    ReportVarQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ReportVarPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the REP_TAB_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByRepTabUid('fooValue');   // WHERE REP_TAB_UID = 'fooValue'
     * $query->filterByRepTabUid('%fooValue%'); // WHERE REP_TAB_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repTabUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function filterByRepTabUid($repTabUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repTabUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repTabUid)) {
                $repTabUid = str_replace('*', '%', $repTabUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportVarPeer::REP_TAB_UID, $repTabUid, $comparison);
    }

    /**
     * Filter the query on the REP_VAR_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByRepVarName('fooValue');   // WHERE REP_VAR_NAME = 'fooValue'
     * $query->filterByRepVarName('%fooValue%'); // WHERE REP_VAR_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repVarName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function filterByRepVarName($repVarName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repVarName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repVarName)) {
                $repVarName = str_replace('*', '%', $repVarName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportVarPeer::REP_VAR_NAME, $repVarName, $comparison);
    }

    /**
     * Filter the query on the REP_VAR_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByRepVarType('fooValue');   // WHERE REP_VAR_TYPE = 'fooValue'
     * $query->filterByRepVarType('%fooValue%'); // WHERE REP_VAR_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repVarType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function filterByRepVarType($repVarType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repVarType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repVarType)) {
                $repVarType = str_replace('*', '%', $repVarType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ReportVarPeer::REP_VAR_TYPE, $repVarType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ReportVar $reportVar Object to remove from the list of results
     *
     * @return    ReportVarQuery The current query, for fluid interface
     */
    public function prune($reportVar = null)
    {
        if ($reportVar) {
            $this->addUsingAlias(ReportVarPeer::REP_VAR_UID, $reportVar->getRepVarUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseReportVarQuery