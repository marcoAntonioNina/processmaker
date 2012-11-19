<?php


/**
 * Base class that represents a query for the 'INPUT_DOCUMENT' table.
 *
 * 
 *
 * @method     InputDocumentQuery orderByInpDocUid($order = Criteria::ASC) Order by the INP_DOC_UID column
 * @method     InputDocumentQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     InputDocumentQuery orderByInpDocFormNeeded($order = Criteria::ASC) Order by the INP_DOC_FORM_NEEDED column
 * @method     InputDocumentQuery orderByInpDocOriginal($order = Criteria::ASC) Order by the INP_DOC_ORIGINAL column
 * @method     InputDocumentQuery orderByInpDocPublished($order = Criteria::ASC) Order by the INP_DOC_PUBLISHED column
 * @method     InputDocumentQuery orderByInpDocVersioning($order = Criteria::ASC) Order by the INP_DOC_VERSIONING column
 * @method     InputDocumentQuery orderByInpDocDestinationPath($order = Criteria::ASC) Order by the INP_DOC_DESTINATION_PATH column
 * @method     InputDocumentQuery orderByInpDocTags($order = Criteria::ASC) Order by the INP_DOC_TAGS column
 *
 * @method     InputDocumentQuery groupByInpDocUid() Group by the INP_DOC_UID column
 * @method     InputDocumentQuery groupByProUid() Group by the PRO_UID column
 * @method     InputDocumentQuery groupByInpDocFormNeeded() Group by the INP_DOC_FORM_NEEDED column
 * @method     InputDocumentQuery groupByInpDocOriginal() Group by the INP_DOC_ORIGINAL column
 * @method     InputDocumentQuery groupByInpDocPublished() Group by the INP_DOC_PUBLISHED column
 * @method     InputDocumentQuery groupByInpDocVersioning() Group by the INP_DOC_VERSIONING column
 * @method     InputDocumentQuery groupByInpDocDestinationPath() Group by the INP_DOC_DESTINATION_PATH column
 * @method     InputDocumentQuery groupByInpDocTags() Group by the INP_DOC_TAGS column
 *
 * @method     InputDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     InputDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     InputDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     InputDocument findOne(PropelPDO $con = null) Return the first InputDocument matching the query
 * @method     InputDocument findOneOrCreate(PropelPDO $con = null) Return the first InputDocument matching the query, or a new InputDocument object populated from the query conditions when no match is found
 *
 * @method     InputDocument findOneByInpDocUid(string $INP_DOC_UID) Return the first InputDocument filtered by the INP_DOC_UID column
 * @method     InputDocument findOneByProUid(string $PRO_UID) Return the first InputDocument filtered by the PRO_UID column
 * @method     InputDocument findOneByInpDocFormNeeded(string $INP_DOC_FORM_NEEDED) Return the first InputDocument filtered by the INP_DOC_FORM_NEEDED column
 * @method     InputDocument findOneByInpDocOriginal(string $INP_DOC_ORIGINAL) Return the first InputDocument filtered by the INP_DOC_ORIGINAL column
 * @method     InputDocument findOneByInpDocPublished(string $INP_DOC_PUBLISHED) Return the first InputDocument filtered by the INP_DOC_PUBLISHED column
 * @method     InputDocument findOneByInpDocVersioning(int $INP_DOC_VERSIONING) Return the first InputDocument filtered by the INP_DOC_VERSIONING column
 * @method     InputDocument findOneByInpDocDestinationPath(string $INP_DOC_DESTINATION_PATH) Return the first InputDocument filtered by the INP_DOC_DESTINATION_PATH column
 * @method     InputDocument findOneByInpDocTags(string $INP_DOC_TAGS) Return the first InputDocument filtered by the INP_DOC_TAGS column
 *
 * @method     array findByInpDocUid(string $INP_DOC_UID) Return InputDocument objects filtered by the INP_DOC_UID column
 * @method     array findByProUid(string $PRO_UID) Return InputDocument objects filtered by the PRO_UID column
 * @method     array findByInpDocFormNeeded(string $INP_DOC_FORM_NEEDED) Return InputDocument objects filtered by the INP_DOC_FORM_NEEDED column
 * @method     array findByInpDocOriginal(string $INP_DOC_ORIGINAL) Return InputDocument objects filtered by the INP_DOC_ORIGINAL column
 * @method     array findByInpDocPublished(string $INP_DOC_PUBLISHED) Return InputDocument objects filtered by the INP_DOC_PUBLISHED column
 * @method     array findByInpDocVersioning(int $INP_DOC_VERSIONING) Return InputDocument objects filtered by the INP_DOC_VERSIONING column
 * @method     array findByInpDocDestinationPath(string $INP_DOC_DESTINATION_PATH) Return InputDocument objects filtered by the INP_DOC_DESTINATION_PATH column
 * @method     array findByInpDocTags(string $INP_DOC_TAGS) Return InputDocument objects filtered by the INP_DOC_TAGS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseInputDocumentQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseInputDocumentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'InputDocument', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InputDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    InputDocumentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InputDocumentQuery) {
            return $criteria;
        }
        $query = new InputDocumentQuery();
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
     * @return    InputDocument|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = InputDocumentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the INP_DOC_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocUid('fooValue');   // WHERE INP_DOC_UID = 'fooValue'
     * $query->filterByInpDocUid('%fooValue%'); // WHERE INP_DOC_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpDocUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocUid($inpDocUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpDocUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inpDocUid)) {
                $inpDocUid = str_replace('*', '%', $inpDocUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_UID, $inpDocUid, $comparison);
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
     * @return    InputDocumentQuery The current query, for fluid interface
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
        return $this->addUsingAlias(InputDocumentPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the INP_DOC_FORM_NEEDED column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocFormNeeded('fooValue');   // WHERE INP_DOC_FORM_NEEDED = 'fooValue'
     * $query->filterByInpDocFormNeeded('%fooValue%'); // WHERE INP_DOC_FORM_NEEDED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpDocFormNeeded The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocFormNeeded($inpDocFormNeeded = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpDocFormNeeded)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inpDocFormNeeded)) {
                $inpDocFormNeeded = str_replace('*', '%', $inpDocFormNeeded);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_FORM_NEEDED, $inpDocFormNeeded, $comparison);
    }

    /**
     * Filter the query on the INP_DOC_ORIGINAL column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocOriginal('fooValue');   // WHERE INP_DOC_ORIGINAL = 'fooValue'
     * $query->filterByInpDocOriginal('%fooValue%'); // WHERE INP_DOC_ORIGINAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpDocOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocOriginal($inpDocOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpDocOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inpDocOriginal)) {
                $inpDocOriginal = str_replace('*', '%', $inpDocOriginal);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_ORIGINAL, $inpDocOriginal, $comparison);
    }

    /**
     * Filter the query on the INP_DOC_PUBLISHED column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocPublished('fooValue');   // WHERE INP_DOC_PUBLISHED = 'fooValue'
     * $query->filterByInpDocPublished('%fooValue%'); // WHERE INP_DOC_PUBLISHED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpDocPublished The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocPublished($inpDocPublished = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpDocPublished)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inpDocPublished)) {
                $inpDocPublished = str_replace('*', '%', $inpDocPublished);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_PUBLISHED, $inpDocPublished, $comparison);
    }

    /**
     * Filter the query on the INP_DOC_VERSIONING column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocVersioning(1234); // WHERE INP_DOC_VERSIONING = 1234
     * $query->filterByInpDocVersioning(array(12, 34)); // WHERE INP_DOC_VERSIONING IN (12, 34)
     * $query->filterByInpDocVersioning(array('min' => 12)); // WHERE INP_DOC_VERSIONING > 12
     * </code>
     *
     * @param     mixed $inpDocVersioning The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocVersioning($inpDocVersioning = null, $comparison = null)
    {
        if (is_array($inpDocVersioning)) {
            $useMinMax = false;
            if (isset($inpDocVersioning['min'])) {
                $this->addUsingAlias(InputDocumentPeer::INP_DOC_VERSIONING, $inpDocVersioning['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpDocVersioning['max'])) {
                $this->addUsingAlias(InputDocumentPeer::INP_DOC_VERSIONING, $inpDocVersioning['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_VERSIONING, $inpDocVersioning, $comparison);
    }

    /**
     * Filter the query on the INP_DOC_DESTINATION_PATH column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocDestinationPath('fooValue');   // WHERE INP_DOC_DESTINATION_PATH = 'fooValue'
     * $query->filterByInpDocDestinationPath('%fooValue%'); // WHERE INP_DOC_DESTINATION_PATH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpDocDestinationPath The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocDestinationPath($inpDocDestinationPath = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpDocDestinationPath)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inpDocDestinationPath)) {
                $inpDocDestinationPath = str_replace('*', '%', $inpDocDestinationPath);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_DESTINATION_PATH, $inpDocDestinationPath, $comparison);
    }

    /**
     * Filter the query on the INP_DOC_TAGS column
     *
     * Example usage:
     * <code>
     * $query->filterByInpDocTags('fooValue');   // WHERE INP_DOC_TAGS = 'fooValue'
     * $query->filterByInpDocTags('%fooValue%'); // WHERE INP_DOC_TAGS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpDocTags The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function filterByInpDocTags($inpDocTags = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpDocTags)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inpDocTags)) {
                $inpDocTags = str_replace('*', '%', $inpDocTags);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(InputDocumentPeer::INP_DOC_TAGS, $inpDocTags, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     InputDocument $inputDocument Object to remove from the list of results
     *
     * @return    InputDocumentQuery The current query, for fluid interface
     */
    public function prune($inputDocument = null)
    {
        if ($inputDocument) {
            $this->addUsingAlias(InputDocumentPeer::INP_DOC_UID, $inputDocument->getInpDocUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseInputDocumentQuery