<?php


/**
 * Base class that represents a query for the 'OBJECT_PERMISSION' table.
 *
 * 
 *
 * @method     ObjectPermissionQuery orderByOpUid($order = Criteria::ASC) Order by the OP_UID column
 * @method     ObjectPermissionQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ObjectPermissionQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     ObjectPermissionQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     ObjectPermissionQuery orderByOpUserRelation($order = Criteria::ASC) Order by the OP_USER_RELATION column
 * @method     ObjectPermissionQuery orderByOpTaskSource($order = Criteria::ASC) Order by the OP_TASK_SOURCE column
 * @method     ObjectPermissionQuery orderByOpParticipate($order = Criteria::ASC) Order by the OP_PARTICIPATE column
 * @method     ObjectPermissionQuery orderByOpObjType($order = Criteria::ASC) Order by the OP_OBJ_TYPE column
 * @method     ObjectPermissionQuery orderByOpObjUid($order = Criteria::ASC) Order by the OP_OBJ_UID column
 * @method     ObjectPermissionQuery orderByOpAction($order = Criteria::ASC) Order by the OP_ACTION column
 * @method     ObjectPermissionQuery orderByOpCaseStatus($order = Criteria::ASC) Order by the OP_CASE_STATUS column
 *
 * @method     ObjectPermissionQuery groupByOpUid() Group by the OP_UID column
 * @method     ObjectPermissionQuery groupByProUid() Group by the PRO_UID column
 * @method     ObjectPermissionQuery groupByTasUid() Group by the TAS_UID column
 * @method     ObjectPermissionQuery groupByUsrUid() Group by the USR_UID column
 * @method     ObjectPermissionQuery groupByOpUserRelation() Group by the OP_USER_RELATION column
 * @method     ObjectPermissionQuery groupByOpTaskSource() Group by the OP_TASK_SOURCE column
 * @method     ObjectPermissionQuery groupByOpParticipate() Group by the OP_PARTICIPATE column
 * @method     ObjectPermissionQuery groupByOpObjType() Group by the OP_OBJ_TYPE column
 * @method     ObjectPermissionQuery groupByOpObjUid() Group by the OP_OBJ_UID column
 * @method     ObjectPermissionQuery groupByOpAction() Group by the OP_ACTION column
 * @method     ObjectPermissionQuery groupByOpCaseStatus() Group by the OP_CASE_STATUS column
 *
 * @method     ObjectPermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ObjectPermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ObjectPermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ObjectPermission findOne(PropelPDO $con = null) Return the first ObjectPermission matching the query
 * @method     ObjectPermission findOneOrCreate(PropelPDO $con = null) Return the first ObjectPermission matching the query, or a new ObjectPermission object populated from the query conditions when no match is found
 *
 * @method     ObjectPermission findOneByOpUid(string $OP_UID) Return the first ObjectPermission filtered by the OP_UID column
 * @method     ObjectPermission findOneByProUid(string $PRO_UID) Return the first ObjectPermission filtered by the PRO_UID column
 * @method     ObjectPermission findOneByTasUid(string $TAS_UID) Return the first ObjectPermission filtered by the TAS_UID column
 * @method     ObjectPermission findOneByUsrUid(string $USR_UID) Return the first ObjectPermission filtered by the USR_UID column
 * @method     ObjectPermission findOneByOpUserRelation(int $OP_USER_RELATION) Return the first ObjectPermission filtered by the OP_USER_RELATION column
 * @method     ObjectPermission findOneByOpTaskSource(string $OP_TASK_SOURCE) Return the first ObjectPermission filtered by the OP_TASK_SOURCE column
 * @method     ObjectPermission findOneByOpParticipate(int $OP_PARTICIPATE) Return the first ObjectPermission filtered by the OP_PARTICIPATE column
 * @method     ObjectPermission findOneByOpObjType(string $OP_OBJ_TYPE) Return the first ObjectPermission filtered by the OP_OBJ_TYPE column
 * @method     ObjectPermission findOneByOpObjUid(string $OP_OBJ_UID) Return the first ObjectPermission filtered by the OP_OBJ_UID column
 * @method     ObjectPermission findOneByOpAction(string $OP_ACTION) Return the first ObjectPermission filtered by the OP_ACTION column
 * @method     ObjectPermission findOneByOpCaseStatus(string $OP_CASE_STATUS) Return the first ObjectPermission filtered by the OP_CASE_STATUS column
 *
 * @method     array findByOpUid(string $OP_UID) Return ObjectPermission objects filtered by the OP_UID column
 * @method     array findByProUid(string $PRO_UID) Return ObjectPermission objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return ObjectPermission objects filtered by the TAS_UID column
 * @method     array findByUsrUid(string $USR_UID) Return ObjectPermission objects filtered by the USR_UID column
 * @method     array findByOpUserRelation(int $OP_USER_RELATION) Return ObjectPermission objects filtered by the OP_USER_RELATION column
 * @method     array findByOpTaskSource(string $OP_TASK_SOURCE) Return ObjectPermission objects filtered by the OP_TASK_SOURCE column
 * @method     array findByOpParticipate(int $OP_PARTICIPATE) Return ObjectPermission objects filtered by the OP_PARTICIPATE column
 * @method     array findByOpObjType(string $OP_OBJ_TYPE) Return ObjectPermission objects filtered by the OP_OBJ_TYPE column
 * @method     array findByOpObjUid(string $OP_OBJ_UID) Return ObjectPermission objects filtered by the OP_OBJ_UID column
 * @method     array findByOpAction(string $OP_ACTION) Return ObjectPermission objects filtered by the OP_ACTION column
 * @method     array findByOpCaseStatus(string $OP_CASE_STATUS) Return ObjectPermission objects filtered by the OP_CASE_STATUS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseObjectPermissionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseObjectPermissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ObjectPermission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ObjectPermissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ObjectPermissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ObjectPermissionQuery) {
            return $criteria;
        }
        $query = new ObjectPermissionQuery();
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
     * @return    ObjectPermission|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ObjectPermissionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ObjectPermissionPeer::OP_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ObjectPermissionPeer::OP_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByOpUid('fooValue');   // WHERE OP_UID = 'fooValue'
     * $query->filterByOpUid('%fooValue%'); // WHERE OP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpUid($opUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opUid)) {
                $opUid = str_replace('*', '%', $opUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_UID, $opUid, $comparison);
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
     * @return    ObjectPermissionQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ObjectPermissionPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the TAS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasUid('fooValue');   // WHERE TAS_UID = 'fooValue'
     * $query->filterByTasUid('%fooValue%'); // WHERE TAS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByTasUid($tasUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasUid)) {
                $tasUid = str_replace('*', '%', $tasUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::TAS_UID, $tasUid, $comparison);
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
     * @return    ObjectPermissionQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ObjectPermissionPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the OP_USER_RELATION column
     *
     * Example usage:
     * <code>
     * $query->filterByOpUserRelation(1234); // WHERE OP_USER_RELATION = 1234
     * $query->filterByOpUserRelation(array(12, 34)); // WHERE OP_USER_RELATION IN (12, 34)
     * $query->filterByOpUserRelation(array('min' => 12)); // WHERE OP_USER_RELATION > 12
     * </code>
     *
     * @param     mixed $opUserRelation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpUserRelation($opUserRelation = null, $comparison = null)
    {
        if (is_array($opUserRelation)) {
            $useMinMax = false;
            if (isset($opUserRelation['min'])) {
                $this->addUsingAlias(ObjectPermissionPeer::OP_USER_RELATION, $opUserRelation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opUserRelation['max'])) {
                $this->addUsingAlias(ObjectPermissionPeer::OP_USER_RELATION, $opUserRelation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_USER_RELATION, $opUserRelation, $comparison);
    }

    /**
     * Filter the query on the OP_TASK_SOURCE column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskSource('fooValue');   // WHERE OP_TASK_SOURCE = 'fooValue'
     * $query->filterByOpTaskSource('%fooValue%'); // WHERE OP_TASK_SOURCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opTaskSource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpTaskSource($opTaskSource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opTaskSource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opTaskSource)) {
                $opTaskSource = str_replace('*', '%', $opTaskSource);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_TASK_SOURCE, $opTaskSource, $comparison);
    }

    /**
     * Filter the query on the OP_PARTICIPATE column
     *
     * Example usage:
     * <code>
     * $query->filterByOpParticipate(1234); // WHERE OP_PARTICIPATE = 1234
     * $query->filterByOpParticipate(array(12, 34)); // WHERE OP_PARTICIPATE IN (12, 34)
     * $query->filterByOpParticipate(array('min' => 12)); // WHERE OP_PARTICIPATE > 12
     * </code>
     *
     * @param     mixed $opParticipate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpParticipate($opParticipate = null, $comparison = null)
    {
        if (is_array($opParticipate)) {
            $useMinMax = false;
            if (isset($opParticipate['min'])) {
                $this->addUsingAlias(ObjectPermissionPeer::OP_PARTICIPATE, $opParticipate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opParticipate['max'])) {
                $this->addUsingAlias(ObjectPermissionPeer::OP_PARTICIPATE, $opParticipate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_PARTICIPATE, $opParticipate, $comparison);
    }

    /**
     * Filter the query on the OP_OBJ_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByOpObjType('fooValue');   // WHERE OP_OBJ_TYPE = 'fooValue'
     * $query->filterByOpObjType('%fooValue%'); // WHERE OP_OBJ_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opObjType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpObjType($opObjType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opObjType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opObjType)) {
                $opObjType = str_replace('*', '%', $opObjType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_OBJ_TYPE, $opObjType, $comparison);
    }

    /**
     * Filter the query on the OP_OBJ_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByOpObjUid('fooValue');   // WHERE OP_OBJ_UID = 'fooValue'
     * $query->filterByOpObjUid('%fooValue%'); // WHERE OP_OBJ_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opObjUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpObjUid($opObjUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opObjUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opObjUid)) {
                $opObjUid = str_replace('*', '%', $opObjUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_OBJ_UID, $opObjUid, $comparison);
    }

    /**
     * Filter the query on the OP_ACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByOpAction('fooValue');   // WHERE OP_ACTION = 'fooValue'
     * $query->filterByOpAction('%fooValue%'); // WHERE OP_ACTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpAction($opAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opAction)) {
                $opAction = str_replace('*', '%', $opAction);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_ACTION, $opAction, $comparison);
    }

    /**
     * Filter the query on the OP_CASE_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCaseStatus('fooValue');   // WHERE OP_CASE_STATUS = 'fooValue'
     * $query->filterByOpCaseStatus('%fooValue%'); // WHERE OP_CASE_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opCaseStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function filterByOpCaseStatus($opCaseStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opCaseStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opCaseStatus)) {
                $opCaseStatus = str_replace('*', '%', $opCaseStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ObjectPermissionPeer::OP_CASE_STATUS, $opCaseStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ObjectPermission $objectPermission Object to remove from the list of results
     *
     * @return    ObjectPermissionQuery The current query, for fluid interface
     */
    public function prune($objectPermission = null)
    {
        if ($objectPermission) {
            $this->addUsingAlias(ObjectPermissionPeer::OP_UID, $objectPermission->getOpUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseObjectPermissionQuery