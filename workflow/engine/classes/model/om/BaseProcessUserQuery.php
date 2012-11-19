<?php


/**
 * Base class that represents a query for the 'PROCESS_USER' table.
 *
 * 
 *
 * @method     ProcessUserQuery orderByPuUid($order = Criteria::ASC) Order by the PU_UID column
 * @method     ProcessUserQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ProcessUserQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     ProcessUserQuery orderByPuType($order = Criteria::ASC) Order by the PU_TYPE column
 *
 * @method     ProcessUserQuery groupByPuUid() Group by the PU_UID column
 * @method     ProcessUserQuery groupByProUid() Group by the PRO_UID column
 * @method     ProcessUserQuery groupByUsrUid() Group by the USR_UID column
 * @method     ProcessUserQuery groupByPuType() Group by the PU_TYPE column
 *
 * @method     ProcessUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProcessUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProcessUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProcessUser findOne(PropelPDO $con = null) Return the first ProcessUser matching the query
 * @method     ProcessUser findOneOrCreate(PropelPDO $con = null) Return the first ProcessUser matching the query, or a new ProcessUser object populated from the query conditions when no match is found
 *
 * @method     ProcessUser findOneByPuUid(string $PU_UID) Return the first ProcessUser filtered by the PU_UID column
 * @method     ProcessUser findOneByProUid(string $PRO_UID) Return the first ProcessUser filtered by the PRO_UID column
 * @method     ProcessUser findOneByUsrUid(string $USR_UID) Return the first ProcessUser filtered by the USR_UID column
 * @method     ProcessUser findOneByPuType(string $PU_TYPE) Return the first ProcessUser filtered by the PU_TYPE column
 *
 * @method     array findByPuUid(string $PU_UID) Return ProcessUser objects filtered by the PU_UID column
 * @method     array findByProUid(string $PRO_UID) Return ProcessUser objects filtered by the PRO_UID column
 * @method     array findByUsrUid(string $USR_UID) Return ProcessUser objects filtered by the USR_UID column
 * @method     array findByPuType(string $PU_TYPE) Return ProcessUser objects filtered by the PU_TYPE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseProcessUserQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProcessUserQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ProcessUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProcessUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ProcessUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProcessUserQuery) {
            return $criteria;
        }
        $query = new ProcessUserQuery();
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
     * @return    ProcessUser|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ProcessUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ProcessUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ProcessUserPeer::PU_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ProcessUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ProcessUserPeer::PU_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PU_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByPuUid('fooValue');   // WHERE PU_UID = 'fooValue'
     * $query->filterByPuUid('%fooValue%'); // WHERE PU_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $puUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessUserQuery The current query, for fluid interface
     */
    public function filterByPuUid($puUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($puUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $puUid)) {
                $puUid = str_replace('*', '%', $puUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessUserPeer::PU_UID, $puUid, $comparison);
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
     * @return    ProcessUserQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ProcessUserPeer::PRO_UID, $proUid, $comparison);
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
     * @return    ProcessUserQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ProcessUserPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the PU_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByPuType('fooValue');   // WHERE PU_TYPE = 'fooValue'
     * $query->filterByPuType('%fooValue%'); // WHERE PU_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $puType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessUserQuery The current query, for fluid interface
     */
    public function filterByPuType($puType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($puType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $puType)) {
                $puType = str_replace('*', '%', $puType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessUserPeer::PU_TYPE, $puType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ProcessUser $processUser Object to remove from the list of results
     *
     * @return    ProcessUserQuery The current query, for fluid interface
     */
    public function prune($processUser = null)
    {
        if ($processUser) {
            $this->addUsingAlias(ProcessUserPeer::PU_UID, $processUser->getPuUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseProcessUserQuery