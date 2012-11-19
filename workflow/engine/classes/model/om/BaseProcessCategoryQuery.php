<?php


/**
 * Base class that represents a query for the 'PROCESS_CATEGORY' table.
 *
 * 
 *
 * @method     ProcessCategoryQuery orderByCategoryUid($order = Criteria::ASC) Order by the CATEGORY_UID column
 * @method     ProcessCategoryQuery orderByCategoryParent($order = Criteria::ASC) Order by the CATEGORY_PARENT column
 * @method     ProcessCategoryQuery orderByCategoryName($order = Criteria::ASC) Order by the CATEGORY_NAME column
 * @method     ProcessCategoryQuery orderByCategoryIcon($order = Criteria::ASC) Order by the CATEGORY_ICON column
 *
 * @method     ProcessCategoryQuery groupByCategoryUid() Group by the CATEGORY_UID column
 * @method     ProcessCategoryQuery groupByCategoryParent() Group by the CATEGORY_PARENT column
 * @method     ProcessCategoryQuery groupByCategoryName() Group by the CATEGORY_NAME column
 * @method     ProcessCategoryQuery groupByCategoryIcon() Group by the CATEGORY_ICON column
 *
 * @method     ProcessCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProcessCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProcessCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProcessCategory findOne(PropelPDO $con = null) Return the first ProcessCategory matching the query
 * @method     ProcessCategory findOneOrCreate(PropelPDO $con = null) Return the first ProcessCategory matching the query, or a new ProcessCategory object populated from the query conditions when no match is found
 *
 * @method     ProcessCategory findOneByCategoryUid(string $CATEGORY_UID) Return the first ProcessCategory filtered by the CATEGORY_UID column
 * @method     ProcessCategory findOneByCategoryParent(string $CATEGORY_PARENT) Return the first ProcessCategory filtered by the CATEGORY_PARENT column
 * @method     ProcessCategory findOneByCategoryName(string $CATEGORY_NAME) Return the first ProcessCategory filtered by the CATEGORY_NAME column
 * @method     ProcessCategory findOneByCategoryIcon(string $CATEGORY_ICON) Return the first ProcessCategory filtered by the CATEGORY_ICON column
 *
 * @method     array findByCategoryUid(string $CATEGORY_UID) Return ProcessCategory objects filtered by the CATEGORY_UID column
 * @method     array findByCategoryParent(string $CATEGORY_PARENT) Return ProcessCategory objects filtered by the CATEGORY_PARENT column
 * @method     array findByCategoryName(string $CATEGORY_NAME) Return ProcessCategory objects filtered by the CATEGORY_NAME column
 * @method     array findByCategoryIcon(string $CATEGORY_ICON) Return ProcessCategory objects filtered by the CATEGORY_ICON column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseProcessCategoryQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProcessCategoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'ProcessCategory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProcessCategoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ProcessCategoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProcessCategoryQuery) {
            return $criteria;
        }
        $query = new ProcessCategoryQuery();
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
     * @return    ProcessCategory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ProcessCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CATEGORY_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryUid('fooValue');   // WHERE CATEGORY_UID = 'fooValue'
     * $query->filterByCategoryUid('%fooValue%'); // WHERE CATEGORY_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoryUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function filterByCategoryUid($categoryUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoryUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoryUid)) {
                $categoryUid = str_replace('*', '%', $categoryUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_UID, $categoryUid, $comparison);
    }

    /**
     * Filter the query on the CATEGORY_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryParent('fooValue');   // WHERE CATEGORY_PARENT = 'fooValue'
     * $query->filterByCategoryParent('%fooValue%'); // WHERE CATEGORY_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoryParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function filterByCategoryParent($categoryParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoryParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoryParent)) {
                $categoryParent = str_replace('*', '%', $categoryParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_PARENT, $categoryParent, $comparison);
    }

    /**
     * Filter the query on the CATEGORY_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryName('fooValue');   // WHERE CATEGORY_NAME = 'fooValue'
     * $query->filterByCategoryName('%fooValue%'); // WHERE CATEGORY_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoryName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function filterByCategoryName($categoryName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoryName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoryName)) {
                $categoryName = str_replace('*', '%', $categoryName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_NAME, $categoryName, $comparison);
    }

    /**
     * Filter the query on the CATEGORY_ICON column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryIcon('fooValue');   // WHERE CATEGORY_ICON = 'fooValue'
     * $query->filterByCategoryIcon('%fooValue%'); // WHERE CATEGORY_ICON LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoryIcon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function filterByCategoryIcon($categoryIcon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoryIcon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoryIcon)) {
                $categoryIcon = str_replace('*', '%', $categoryIcon);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_ICON, $categoryIcon, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     ProcessCategory $processCategory Object to remove from the list of results
     *
     * @return    ProcessCategoryQuery The current query, for fluid interface
     */
    public function prune($processCategory = null)
    {
        if ($processCategory) {
            $this->addUsingAlias(ProcessCategoryPeer::CATEGORY_UID, $processCategory->getCategoryUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseProcessCategoryQuery