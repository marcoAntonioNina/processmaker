<?php


/**
 * Base class that represents a query for the 'TRANSLATION' table.
 *
 * 
 *
 * @method     TranslationQuery orderByTrnCategory($order = Criteria::ASC) Order by the TRN_CATEGORY column
 * @method     TranslationQuery orderByTrnId($order = Criteria::ASC) Order by the TRN_ID column
 * @method     TranslationQuery orderByTrnLang($order = Criteria::ASC) Order by the TRN_LANG column
 * @method     TranslationQuery orderByTrnValue($order = Criteria::ASC) Order by the TRN_VALUE column
 * @method     TranslationQuery orderByTrnUpdateDate($order = Criteria::ASC) Order by the TRN_UPDATE_DATE column
 *
 * @method     TranslationQuery groupByTrnCategory() Group by the TRN_CATEGORY column
 * @method     TranslationQuery groupByTrnId() Group by the TRN_ID column
 * @method     TranslationQuery groupByTrnLang() Group by the TRN_LANG column
 * @method     TranslationQuery groupByTrnValue() Group by the TRN_VALUE column
 * @method     TranslationQuery groupByTrnUpdateDate() Group by the TRN_UPDATE_DATE column
 *
 * @method     TranslationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TranslationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TranslationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Translation findOne(PropelPDO $con = null) Return the first Translation matching the query
 * @method     Translation findOneOrCreate(PropelPDO $con = null) Return the first Translation matching the query, or a new Translation object populated from the query conditions when no match is found
 *
 * @method     Translation findOneByTrnCategory(string $TRN_CATEGORY) Return the first Translation filtered by the TRN_CATEGORY column
 * @method     Translation findOneByTrnId(string $TRN_ID) Return the first Translation filtered by the TRN_ID column
 * @method     Translation findOneByTrnLang(string $TRN_LANG) Return the first Translation filtered by the TRN_LANG column
 * @method     Translation findOneByTrnValue(string $TRN_VALUE) Return the first Translation filtered by the TRN_VALUE column
 * @method     Translation findOneByTrnUpdateDate(string $TRN_UPDATE_DATE) Return the first Translation filtered by the TRN_UPDATE_DATE column
 *
 * @method     array findByTrnCategory(string $TRN_CATEGORY) Return Translation objects filtered by the TRN_CATEGORY column
 * @method     array findByTrnId(string $TRN_ID) Return Translation objects filtered by the TRN_ID column
 * @method     array findByTrnLang(string $TRN_LANG) Return Translation objects filtered by the TRN_LANG column
 * @method     array findByTrnValue(string $TRN_VALUE) Return Translation objects filtered by the TRN_VALUE column
 * @method     array findByTrnUpdateDate(string $TRN_UPDATE_DATE) Return Translation objects filtered by the TRN_UPDATE_DATE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseTranslationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTranslationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Translation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TranslationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TranslationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TranslationQuery) {
            return $criteria;
        }
        $query = new TranslationQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     * @param     array[$TRN_CATEGORY, $TRN_ID, $TRN_LANG] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    Translation|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TranslationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TranslationPeer::TRN_CATEGORY, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TranslationPeer::TRN_ID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(TranslationPeer::TRN_LANG, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TranslationPeer::TRN_CATEGORY, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TranslationPeer::TRN_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(TranslationPeer::TRN_LANG, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the TRN_CATEGORY column
     *
     * Example usage:
     * <code>
     * $query->filterByTrnCategory('fooValue');   // WHERE TRN_CATEGORY = 'fooValue'
     * $query->filterByTrnCategory('%fooValue%'); // WHERE TRN_CATEGORY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trnCategory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByTrnCategory($trnCategory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trnCategory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trnCategory)) {
                $trnCategory = str_replace('*', '%', $trnCategory);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TranslationPeer::TRN_CATEGORY, $trnCategory, $comparison);
    }

    /**
     * Filter the query on the TRN_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByTrnId('fooValue');   // WHERE TRN_ID = 'fooValue'
     * $query->filterByTrnId('%fooValue%'); // WHERE TRN_ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trnId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByTrnId($trnId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trnId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trnId)) {
                $trnId = str_replace('*', '%', $trnId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TranslationPeer::TRN_ID, $trnId, $comparison);
    }

    /**
     * Filter the query on the TRN_LANG column
     *
     * Example usage:
     * <code>
     * $query->filterByTrnLang('fooValue');   // WHERE TRN_LANG = 'fooValue'
     * $query->filterByTrnLang('%fooValue%'); // WHERE TRN_LANG LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trnLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByTrnLang($trnLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trnLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trnLang)) {
                $trnLang = str_replace('*', '%', $trnLang);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TranslationPeer::TRN_LANG, $trnLang, $comparison);
    }

    /**
     * Filter the query on the TRN_VALUE column
     *
     * Example usage:
     * <code>
     * $query->filterByTrnValue('fooValue');   // WHERE TRN_VALUE = 'fooValue'
     * $query->filterByTrnValue('%fooValue%'); // WHERE TRN_VALUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trnValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByTrnValue($trnValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trnValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trnValue)) {
                $trnValue = str_replace('*', '%', $trnValue);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TranslationPeer::TRN_VALUE, $trnValue, $comparison);
    }

    /**
     * Filter the query on the TRN_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByTrnUpdateDate('2011-03-14'); // WHERE TRN_UPDATE_DATE = '2011-03-14'
     * $query->filterByTrnUpdateDate('now'); // WHERE TRN_UPDATE_DATE = '2011-03-14'
     * $query->filterByTrnUpdateDate(array('max' => 'yesterday')); // WHERE TRN_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $trnUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function filterByTrnUpdateDate($trnUpdateDate = null, $comparison = null)
    {
        if (is_array($trnUpdateDate)) {
            $useMinMax = false;
            if (isset($trnUpdateDate['min'])) {
                $this->addUsingAlias(TranslationPeer::TRN_UPDATE_DATE, $trnUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trnUpdateDate['max'])) {
                $this->addUsingAlias(TranslationPeer::TRN_UPDATE_DATE, $trnUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TranslationPeer::TRN_UPDATE_DATE, $trnUpdateDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Translation $translation Object to remove from the list of results
     *
     * @return    TranslationQuery The current query, for fluid interface
     */
    public function prune($translation = null)
    {
        if ($translation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TranslationPeer::TRN_CATEGORY), $translation->getTrnCategory(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TranslationPeer::TRN_ID), $translation->getTrnId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(TranslationPeer::TRN_LANG), $translation->getTrnLang(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseTranslationQuery