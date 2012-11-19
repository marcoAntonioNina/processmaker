<?php


/**
 * Base class that represents a query for the 'CONTENT' table.
 *
 * 
 *
 * @method     ContentQuery orderByConCategory($order = Criteria::ASC) Order by the CON_CATEGORY column
 * @method     ContentQuery orderByConParent($order = Criteria::ASC) Order by the CON_PARENT column
 * @method     ContentQuery orderByConId($order = Criteria::ASC) Order by the CON_ID column
 * @method     ContentQuery orderByConLang($order = Criteria::ASC) Order by the CON_LANG column
 * @method     ContentQuery orderByConValue($order = Criteria::ASC) Order by the CON_VALUE column
 *
 * @method     ContentQuery groupByConCategory() Group by the CON_CATEGORY column
 * @method     ContentQuery groupByConParent() Group by the CON_PARENT column
 * @method     ContentQuery groupByConId() Group by the CON_ID column
 * @method     ContentQuery groupByConLang() Group by the CON_LANG column
 * @method     ContentQuery groupByConValue() Group by the CON_VALUE column
 *
 * @method     ContentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ContentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ContentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Content findOne(PropelPDO $con = null) Return the first Content matching the query
 * @method     Content findOneOrCreate(PropelPDO $con = null) Return the first Content matching the query, or a new Content object populated from the query conditions when no match is found
 *
 * @method     Content findOneByConCategory(string $CON_CATEGORY) Return the first Content filtered by the CON_CATEGORY column
 * @method     Content findOneByConParent(string $CON_PARENT) Return the first Content filtered by the CON_PARENT column
 * @method     Content findOneByConId(string $CON_ID) Return the first Content filtered by the CON_ID column
 * @method     Content findOneByConLang(string $CON_LANG) Return the first Content filtered by the CON_LANG column
 * @method     Content findOneByConValue(string $CON_VALUE) Return the first Content filtered by the CON_VALUE column
 *
 * @method     array findByConCategory(string $CON_CATEGORY) Return Content objects filtered by the CON_CATEGORY column
 * @method     array findByConParent(string $CON_PARENT) Return Content objects filtered by the CON_PARENT column
 * @method     array findByConId(string $CON_ID) Return Content objects filtered by the CON_ID column
 * @method     array findByConLang(string $CON_LANG) Return Content objects filtered by the CON_LANG column
 * @method     array findByConValue(string $CON_VALUE) Return Content objects filtered by the CON_VALUE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseContentQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseContentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Content', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ContentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContentQuery) {
            return $criteria;
        }
        $query = new ContentQuery();
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
     * @param     array[$CON_CATEGORY, $CON_PARENT, $CON_ID, $CON_LANG] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    Content|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ContentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ContentPeer::CON_CATEGORY, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ContentPeer::CON_PARENT, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ContentPeer::CON_ID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ContentPeer::CON_LANG, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ContentPeer::CON_CATEGORY, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ContentPeer::CON_PARENT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ContentPeer::CON_ID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ContentPeer::CON_LANG, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the CON_CATEGORY column
     *
     * Example usage:
     * <code>
     * $query->filterByConCategory('fooValue');   // WHERE CON_CATEGORY = 'fooValue'
     * $query->filterByConCategory('%fooValue%'); // WHERE CON_CATEGORY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conCategory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByConCategory($conCategory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conCategory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conCategory)) {
                $conCategory = str_replace('*', '%', $conCategory);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ContentPeer::CON_CATEGORY, $conCategory, $comparison);
    }

    /**
     * Filter the query on the CON_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByConParent('fooValue');   // WHERE CON_PARENT = 'fooValue'
     * $query->filterByConParent('%fooValue%'); // WHERE CON_PARENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conParent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByConParent($conParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conParent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conParent)) {
                $conParent = str_replace('*', '%', $conParent);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ContentPeer::CON_PARENT, $conParent, $comparison);
    }

    /**
     * Filter the query on the CON_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByConId('fooValue');   // WHERE CON_ID = 'fooValue'
     * $query->filterByConId('%fooValue%'); // WHERE CON_ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByConId($conId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conId)) {
                $conId = str_replace('*', '%', $conId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ContentPeer::CON_ID, $conId, $comparison);
    }

    /**
     * Filter the query on the CON_LANG column
     *
     * Example usage:
     * <code>
     * $query->filterByConLang('fooValue');   // WHERE CON_LANG = 'fooValue'
     * $query->filterByConLang('%fooValue%'); // WHERE CON_LANG LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByConLang($conLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conLang)) {
                $conLang = str_replace('*', '%', $conLang);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ContentPeer::CON_LANG, $conLang, $comparison);
    }

    /**
     * Filter the query on the CON_VALUE column
     *
     * Example usage:
     * <code>
     * $query->filterByConValue('fooValue');   // WHERE CON_VALUE = 'fooValue'
     * $query->filterByConValue('%fooValue%'); // WHERE CON_VALUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function filterByConValue($conValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conValue)) {
                $conValue = str_replace('*', '%', $conValue);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ContentPeer::CON_VALUE, $conValue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Content $content Object to remove from the list of results
     *
     * @return    ContentQuery The current query, for fluid interface
     */
    public function prune($content = null)
    {
        if ($content) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ContentPeer::CON_CATEGORY), $content->getConCategory(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ContentPeer::CON_PARENT), $content->getConParent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ContentPeer::CON_ID), $content->getConId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ContentPeer::CON_LANG), $content->getConLang(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseContentQuery