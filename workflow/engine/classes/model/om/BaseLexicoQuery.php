<?php


/**
 * Base class that represents a query for the 'LEXICO' table.
 *
 * 
 *
 * @method     LexicoQuery orderByLexTopic($order = Criteria::ASC) Order by the LEX_TOPIC column
 * @method     LexicoQuery orderByLexKey($order = Criteria::ASC) Order by the LEX_KEY column
 * @method     LexicoQuery orderByLexValue($order = Criteria::ASC) Order by the LEX_VALUE column
 * @method     LexicoQuery orderByLexCaption($order = Criteria::ASC) Order by the LEX_CAPTION column
 *
 * @method     LexicoQuery groupByLexTopic() Group by the LEX_TOPIC column
 * @method     LexicoQuery groupByLexKey() Group by the LEX_KEY column
 * @method     LexicoQuery groupByLexValue() Group by the LEX_VALUE column
 * @method     LexicoQuery groupByLexCaption() Group by the LEX_CAPTION column
 *
 * @method     LexicoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LexicoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LexicoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Lexico findOne(PropelPDO $con = null) Return the first Lexico matching the query
 * @method     Lexico findOneOrCreate(PropelPDO $con = null) Return the first Lexico matching the query, or a new Lexico object populated from the query conditions when no match is found
 *
 * @method     Lexico findOneByLexTopic(string $LEX_TOPIC) Return the first Lexico filtered by the LEX_TOPIC column
 * @method     Lexico findOneByLexKey(string $LEX_KEY) Return the first Lexico filtered by the LEX_KEY column
 * @method     Lexico findOneByLexValue(string $LEX_VALUE) Return the first Lexico filtered by the LEX_VALUE column
 * @method     Lexico findOneByLexCaption(string $LEX_CAPTION) Return the first Lexico filtered by the LEX_CAPTION column
 *
 * @method     array findByLexTopic(string $LEX_TOPIC) Return Lexico objects filtered by the LEX_TOPIC column
 * @method     array findByLexKey(string $LEX_KEY) Return Lexico objects filtered by the LEX_KEY column
 * @method     array findByLexValue(string $LEX_VALUE) Return Lexico objects filtered by the LEX_VALUE column
 * @method     array findByLexCaption(string $LEX_CAPTION) Return Lexico objects filtered by the LEX_CAPTION column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseLexicoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLexicoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Lexico', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LexicoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    LexicoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LexicoQuery) {
            return $criteria;
        }
        $query = new LexicoQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$LEX_TOPIC, $LEX_KEY] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    Lexico|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = LexicoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LexicoPeer::LEX_TOPIC, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LexicoPeer::LEX_KEY, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LexicoPeer::LEX_TOPIC, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LexicoPeer::LEX_KEY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the LEX_TOPIC column
     *
     * Example usage:
     * <code>
     * $query->filterByLexTopic('fooValue');   // WHERE LEX_TOPIC = 'fooValue'
     * $query->filterByLexTopic('%fooValue%'); // WHERE LEX_TOPIC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lexTopic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function filterByLexTopic($lexTopic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lexTopic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lexTopic)) {
                $lexTopic = str_replace('*', '%', $lexTopic);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LexicoPeer::LEX_TOPIC, $lexTopic, $comparison);
    }

    /**
     * Filter the query on the LEX_KEY column
     *
     * Example usage:
     * <code>
     * $query->filterByLexKey('fooValue');   // WHERE LEX_KEY = 'fooValue'
     * $query->filterByLexKey('%fooValue%'); // WHERE LEX_KEY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lexKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function filterByLexKey($lexKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lexKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lexKey)) {
                $lexKey = str_replace('*', '%', $lexKey);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LexicoPeer::LEX_KEY, $lexKey, $comparison);
    }

    /**
     * Filter the query on the LEX_VALUE column
     *
     * Example usage:
     * <code>
     * $query->filterByLexValue('fooValue');   // WHERE LEX_VALUE = 'fooValue'
     * $query->filterByLexValue('%fooValue%'); // WHERE LEX_VALUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lexValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function filterByLexValue($lexValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lexValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lexValue)) {
                $lexValue = str_replace('*', '%', $lexValue);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LexicoPeer::LEX_VALUE, $lexValue, $comparison);
    }

    /**
     * Filter the query on the LEX_CAPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByLexCaption('fooValue');   // WHERE LEX_CAPTION = 'fooValue'
     * $query->filterByLexCaption('%fooValue%'); // WHERE LEX_CAPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lexCaption The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function filterByLexCaption($lexCaption = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lexCaption)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lexCaption)) {
                $lexCaption = str_replace('*', '%', $lexCaption);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(LexicoPeer::LEX_CAPTION, $lexCaption, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Lexico $lexico Object to remove from the list of results
     *
     * @return    LexicoQuery The current query, for fluid interface
     */
    public function prune($lexico = null)
    {
        if ($lexico) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LexicoPeer::LEX_TOPIC), $lexico->getLexTopic(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LexicoPeer::LEX_KEY), $lexico->getLexKey(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseLexicoQuery