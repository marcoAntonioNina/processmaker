<?php


/**
 * Base class that represents a query for the 'TASK_USER' table.
 *
 * 
 *
 * @method     TaskUserQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     TaskUserQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     TaskUserQuery orderByTuType($order = Criteria::ASC) Order by the TU_TYPE column
 * @method     TaskUserQuery orderByTuRelation($order = Criteria::ASC) Order by the TU_RELATION column
 *
 * @method     TaskUserQuery groupByTasUid() Group by the TAS_UID column
 * @method     TaskUserQuery groupByUsrUid() Group by the USR_UID column
 * @method     TaskUserQuery groupByTuType() Group by the TU_TYPE column
 * @method     TaskUserQuery groupByTuRelation() Group by the TU_RELATION column
 *
 * @method     TaskUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TaskUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TaskUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TaskUser findOne(PropelPDO $con = null) Return the first TaskUser matching the query
 * @method     TaskUser findOneOrCreate(PropelPDO $con = null) Return the first TaskUser matching the query, or a new TaskUser object populated from the query conditions when no match is found
 *
 * @method     TaskUser findOneByTasUid(string $TAS_UID) Return the first TaskUser filtered by the TAS_UID column
 * @method     TaskUser findOneByUsrUid(string $USR_UID) Return the first TaskUser filtered by the USR_UID column
 * @method     TaskUser findOneByTuType(int $TU_TYPE) Return the first TaskUser filtered by the TU_TYPE column
 * @method     TaskUser findOneByTuRelation(int $TU_RELATION) Return the first TaskUser filtered by the TU_RELATION column
 *
 * @method     array findByTasUid(string $TAS_UID) Return TaskUser objects filtered by the TAS_UID column
 * @method     array findByUsrUid(string $USR_UID) Return TaskUser objects filtered by the USR_UID column
 * @method     array findByTuType(int $TU_TYPE) Return TaskUser objects filtered by the TU_TYPE column
 * @method     array findByTuRelation(int $TU_RELATION) Return TaskUser objects filtered by the TU_RELATION column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseTaskUserQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTaskUserQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'TaskUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TaskUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TaskUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TaskUserQuery) {
            return $criteria;
        }
        $query = new TaskUserQuery();
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
     * @param     array[$TAS_UID, $USR_UID, $TU_TYPE, $TU_RELATION] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    TaskUser|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TaskUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TaskUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TaskUserPeer::TAS_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TaskUserPeer::USR_UID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(TaskUserPeer::TU_TYPE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(TaskUserPeer::TU_RELATION, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TaskUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TaskUserPeer::TAS_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TaskUserPeer::USR_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(TaskUserPeer::TU_TYPE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(TaskUserPeer::TU_RELATION, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    TaskUserQuery The current query, for fluid interface
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
        return $this->addUsingAlias(TaskUserPeer::TAS_UID, $tasUid, $comparison);
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
     * @return    TaskUserQuery The current query, for fluid interface
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
        return $this->addUsingAlias(TaskUserPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the TU_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByTuType(1234); // WHERE TU_TYPE = 1234
     * $query->filterByTuType(array(12, 34)); // WHERE TU_TYPE IN (12, 34)
     * $query->filterByTuType(array('min' => 12)); // WHERE TU_TYPE > 12
     * </code>
     *
     * @param     mixed $tuType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskUserQuery The current query, for fluid interface
     */
    public function filterByTuType($tuType = null, $comparison = null)
    {
        if (is_array($tuType) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TaskUserPeer::TU_TYPE, $tuType, $comparison);
    }

    /**
     * Filter the query on the TU_RELATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTuRelation(1234); // WHERE TU_RELATION = 1234
     * $query->filterByTuRelation(array(12, 34)); // WHERE TU_RELATION IN (12, 34)
     * $query->filterByTuRelation(array('min' => 12)); // WHERE TU_RELATION > 12
     * </code>
     *
     * @param     mixed $tuRelation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskUserQuery The current query, for fluid interface
     */
    public function filterByTuRelation($tuRelation = null, $comparison = null)
    {
        if (is_array($tuRelation) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TaskUserPeer::TU_RELATION, $tuRelation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     TaskUser $taskUser Object to remove from the list of results
     *
     * @return    TaskUserQuery The current query, for fluid interface
     */
    public function prune($taskUser = null)
    {
        if ($taskUser) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TaskUserPeer::TAS_UID), $taskUser->getTasUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TaskUserPeer::USR_UID), $taskUser->getUsrUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(TaskUserPeer::TU_TYPE), $taskUser->getTuType(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(TaskUserPeer::TU_RELATION), $taskUser->getTuRelation(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseTaskUserQuery