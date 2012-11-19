<?php


/**
 * Base class that represents a query for the 'APP_FOLDER' table.
 *
 * 
 *
 * @method     AppFolderQuery orderByFolderUid($order = Criteria::ASC) Order by the FOLDER_UID column
 * @method     AppFolderQuery orderByFolderParentUid($order = Criteria::ASC) Order by the FOLDER_PARENT_UID column
 * @method     AppFolderQuery orderByFolderName($order = Criteria::ASC) Order by the FOLDER_NAME column
 * @method     AppFolderQuery orderByFolderCreateDate($order = Criteria::ASC) Order by the FOLDER_CREATE_DATE column
 * @method     AppFolderQuery orderByFolderUpdateDate($order = Criteria::ASC) Order by the FOLDER_UPDATE_DATE column
 *
 * @method     AppFolderQuery groupByFolderUid() Group by the FOLDER_UID column
 * @method     AppFolderQuery groupByFolderParentUid() Group by the FOLDER_PARENT_UID column
 * @method     AppFolderQuery groupByFolderName() Group by the FOLDER_NAME column
 * @method     AppFolderQuery groupByFolderCreateDate() Group by the FOLDER_CREATE_DATE column
 * @method     AppFolderQuery groupByFolderUpdateDate() Group by the FOLDER_UPDATE_DATE column
 *
 * @method     AppFolderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppFolderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppFolderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppFolder findOne(PropelPDO $con = null) Return the first AppFolder matching the query
 * @method     AppFolder findOneOrCreate(PropelPDO $con = null) Return the first AppFolder matching the query, or a new AppFolder object populated from the query conditions when no match is found
 *
 * @method     AppFolder findOneByFolderUid(string $FOLDER_UID) Return the first AppFolder filtered by the FOLDER_UID column
 * @method     AppFolder findOneByFolderParentUid(string $FOLDER_PARENT_UID) Return the first AppFolder filtered by the FOLDER_PARENT_UID column
 * @method     AppFolder findOneByFolderName(string $FOLDER_NAME) Return the first AppFolder filtered by the FOLDER_NAME column
 * @method     AppFolder findOneByFolderCreateDate(string $FOLDER_CREATE_DATE) Return the first AppFolder filtered by the FOLDER_CREATE_DATE column
 * @method     AppFolder findOneByFolderUpdateDate(string $FOLDER_UPDATE_DATE) Return the first AppFolder filtered by the FOLDER_UPDATE_DATE column
 *
 * @method     array findByFolderUid(string $FOLDER_UID) Return AppFolder objects filtered by the FOLDER_UID column
 * @method     array findByFolderParentUid(string $FOLDER_PARENT_UID) Return AppFolder objects filtered by the FOLDER_PARENT_UID column
 * @method     array findByFolderName(string $FOLDER_NAME) Return AppFolder objects filtered by the FOLDER_NAME column
 * @method     array findByFolderCreateDate(string $FOLDER_CREATE_DATE) Return AppFolder objects filtered by the FOLDER_CREATE_DATE column
 * @method     array findByFolderUpdateDate(string $FOLDER_UPDATE_DATE) Return AppFolder objects filtered by the FOLDER_UPDATE_DATE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppFolderQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppFolderQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppFolder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppFolderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppFolderQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppFolderQuery) {
            return $criteria;
        }
        $query = new AppFolderQuery();
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
     * @return    AppFolder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppFolderPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AppFolderPeer::FOLDER_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AppFolderPeer::FOLDER_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FOLDER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFolderUid('fooValue');   // WHERE FOLDER_UID = 'fooValue'
     * $query->filterByFolderUid('%fooValue%'); // WHERE FOLDER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $folderUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByFolderUid($folderUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($folderUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $folderUid)) {
                $folderUid = str_replace('*', '%', $folderUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppFolderPeer::FOLDER_UID, $folderUid, $comparison);
    }

    /**
     * Filter the query on the FOLDER_PARENT_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFolderParentUid('fooValue');   // WHERE FOLDER_PARENT_UID = 'fooValue'
     * $query->filterByFolderParentUid('%fooValue%'); // WHERE FOLDER_PARENT_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $folderParentUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByFolderParentUid($folderParentUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($folderParentUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $folderParentUid)) {
                $folderParentUid = str_replace('*', '%', $folderParentUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppFolderPeer::FOLDER_PARENT_UID, $folderParentUid, $comparison);
    }

    /**
     * Filter the query on the FOLDER_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByFolderName('fooValue');   // WHERE FOLDER_NAME = 'fooValue'
     * $query->filterByFolderName('%fooValue%'); // WHERE FOLDER_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $folderName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByFolderName($folderName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($folderName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $folderName)) {
                $folderName = str_replace('*', '%', $folderName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppFolderPeer::FOLDER_NAME, $folderName, $comparison);
    }

    /**
     * Filter the query on the FOLDER_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByFolderCreateDate('2011-03-14'); // WHERE FOLDER_CREATE_DATE = '2011-03-14'
     * $query->filterByFolderCreateDate('now'); // WHERE FOLDER_CREATE_DATE = '2011-03-14'
     * $query->filterByFolderCreateDate(array('max' => 'yesterday')); // WHERE FOLDER_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $folderCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByFolderCreateDate($folderCreateDate = null, $comparison = null)
    {
        if (is_array($folderCreateDate)) {
            $useMinMax = false;
            if (isset($folderCreateDate['min'])) {
                $this->addUsingAlias(AppFolderPeer::FOLDER_CREATE_DATE, $folderCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($folderCreateDate['max'])) {
                $this->addUsingAlias(AppFolderPeer::FOLDER_CREATE_DATE, $folderCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppFolderPeer::FOLDER_CREATE_DATE, $folderCreateDate, $comparison);
    }

    /**
     * Filter the query on the FOLDER_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByFolderUpdateDate('2011-03-14'); // WHERE FOLDER_UPDATE_DATE = '2011-03-14'
     * $query->filterByFolderUpdateDate('now'); // WHERE FOLDER_UPDATE_DATE = '2011-03-14'
     * $query->filterByFolderUpdateDate(array('max' => 'yesterday')); // WHERE FOLDER_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $folderUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function filterByFolderUpdateDate($folderUpdateDate = null, $comparison = null)
    {
        if (is_array($folderUpdateDate)) {
            $useMinMax = false;
            if (isset($folderUpdateDate['min'])) {
                $this->addUsingAlias(AppFolderPeer::FOLDER_UPDATE_DATE, $folderUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($folderUpdateDate['max'])) {
                $this->addUsingAlias(AppFolderPeer::FOLDER_UPDATE_DATE, $folderUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppFolderPeer::FOLDER_UPDATE_DATE, $folderUpdateDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppFolder $appFolder Object to remove from the list of results
     *
     * @return    AppFolderQuery The current query, for fluid interface
     */
    public function prune($appFolder = null)
    {
        if ($appFolder) {
            $this->addUsingAlias(AppFolderPeer::FOLDER_UID, $appFolder->getFolderUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAppFolderQuery