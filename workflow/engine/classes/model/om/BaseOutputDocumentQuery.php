<?php


/**
 * Base class that represents a query for the 'OUTPUT_DOCUMENT' table.
 *
 * 
 *
 * @method     OutputDocumentQuery orderByOutDocUid($order = Criteria::ASC) Order by the OUT_DOC_UID column
 * @method     OutputDocumentQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     OutputDocumentQuery orderByOutDocReportGenerator($order = Criteria::ASC) Order by the OUT_DOC_REPORT_GENERATOR column
 * @method     OutputDocumentQuery orderByOutDocLandscape($order = Criteria::ASC) Order by the OUT_DOC_LANDSCAPE column
 * @method     OutputDocumentQuery orderByOutDocMedia($order = Criteria::ASC) Order by the OUT_DOC_MEDIA column
 * @method     OutputDocumentQuery orderByOutDocLeftMargin($order = Criteria::ASC) Order by the OUT_DOC_LEFT_MARGIN column
 * @method     OutputDocumentQuery orderByOutDocRightMargin($order = Criteria::ASC) Order by the OUT_DOC_RIGHT_MARGIN column
 * @method     OutputDocumentQuery orderByOutDocTopMargin($order = Criteria::ASC) Order by the OUT_DOC_TOP_MARGIN column
 * @method     OutputDocumentQuery orderByOutDocBottomMargin($order = Criteria::ASC) Order by the OUT_DOC_BOTTOM_MARGIN column
 * @method     OutputDocumentQuery orderByOutDocGenerate($order = Criteria::ASC) Order by the OUT_DOC_GENERATE column
 * @method     OutputDocumentQuery orderByOutDocType($order = Criteria::ASC) Order by the OUT_DOC_TYPE column
 * @method     OutputDocumentQuery orderByOutDocCurrentRevision($order = Criteria::ASC) Order by the OUT_DOC_CURRENT_REVISION column
 * @method     OutputDocumentQuery orderByOutDocFieldMapping($order = Criteria::ASC) Order by the OUT_DOC_FIELD_MAPPING column
 * @method     OutputDocumentQuery orderByOutDocVersioning($order = Criteria::ASC) Order by the OUT_DOC_VERSIONING column
 * @method     OutputDocumentQuery orderByOutDocDestinationPath($order = Criteria::ASC) Order by the OUT_DOC_DESTINATION_PATH column
 * @method     OutputDocumentQuery orderByOutDocTags($order = Criteria::ASC) Order by the OUT_DOC_TAGS column
 * @method     OutputDocumentQuery orderByOutDocPdfSecurityEnabled($order = Criteria::ASC) Order by the OUT_DOC_PDF_SECURITY_ENABLED column
 * @method     OutputDocumentQuery orderByOutDocPdfSecurityOpenPassword($order = Criteria::ASC) Order by the OUT_DOC_PDF_SECURITY_OPEN_PASSWORD column
 * @method     OutputDocumentQuery orderByOutDocPdfSecurityOwnerPassword($order = Criteria::ASC) Order by the OUT_DOC_PDF_SECURITY_OWNER_PASSWORD column
 * @method     OutputDocumentQuery orderByOutDocPdfSecurityPermissions($order = Criteria::ASC) Order by the OUT_DOC_PDF_SECURITY_PERMISSIONS column
 *
 * @method     OutputDocumentQuery groupByOutDocUid() Group by the OUT_DOC_UID column
 * @method     OutputDocumentQuery groupByProUid() Group by the PRO_UID column
 * @method     OutputDocumentQuery groupByOutDocReportGenerator() Group by the OUT_DOC_REPORT_GENERATOR column
 * @method     OutputDocumentQuery groupByOutDocLandscape() Group by the OUT_DOC_LANDSCAPE column
 * @method     OutputDocumentQuery groupByOutDocMedia() Group by the OUT_DOC_MEDIA column
 * @method     OutputDocumentQuery groupByOutDocLeftMargin() Group by the OUT_DOC_LEFT_MARGIN column
 * @method     OutputDocumentQuery groupByOutDocRightMargin() Group by the OUT_DOC_RIGHT_MARGIN column
 * @method     OutputDocumentQuery groupByOutDocTopMargin() Group by the OUT_DOC_TOP_MARGIN column
 * @method     OutputDocumentQuery groupByOutDocBottomMargin() Group by the OUT_DOC_BOTTOM_MARGIN column
 * @method     OutputDocumentQuery groupByOutDocGenerate() Group by the OUT_DOC_GENERATE column
 * @method     OutputDocumentQuery groupByOutDocType() Group by the OUT_DOC_TYPE column
 * @method     OutputDocumentQuery groupByOutDocCurrentRevision() Group by the OUT_DOC_CURRENT_REVISION column
 * @method     OutputDocumentQuery groupByOutDocFieldMapping() Group by the OUT_DOC_FIELD_MAPPING column
 * @method     OutputDocumentQuery groupByOutDocVersioning() Group by the OUT_DOC_VERSIONING column
 * @method     OutputDocumentQuery groupByOutDocDestinationPath() Group by the OUT_DOC_DESTINATION_PATH column
 * @method     OutputDocumentQuery groupByOutDocTags() Group by the OUT_DOC_TAGS column
 * @method     OutputDocumentQuery groupByOutDocPdfSecurityEnabled() Group by the OUT_DOC_PDF_SECURITY_ENABLED column
 * @method     OutputDocumentQuery groupByOutDocPdfSecurityOpenPassword() Group by the OUT_DOC_PDF_SECURITY_OPEN_PASSWORD column
 * @method     OutputDocumentQuery groupByOutDocPdfSecurityOwnerPassword() Group by the OUT_DOC_PDF_SECURITY_OWNER_PASSWORD column
 * @method     OutputDocumentQuery groupByOutDocPdfSecurityPermissions() Group by the OUT_DOC_PDF_SECURITY_PERMISSIONS column
 *
 * @method     OutputDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OutputDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OutputDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OutputDocument findOne(PropelPDO $con = null) Return the first OutputDocument matching the query
 * @method     OutputDocument findOneOrCreate(PropelPDO $con = null) Return the first OutputDocument matching the query, or a new OutputDocument object populated from the query conditions when no match is found
 *
 * @method     OutputDocument findOneByOutDocUid(string $OUT_DOC_UID) Return the first OutputDocument filtered by the OUT_DOC_UID column
 * @method     OutputDocument findOneByProUid(string $PRO_UID) Return the first OutputDocument filtered by the PRO_UID column
 * @method     OutputDocument findOneByOutDocReportGenerator(string $OUT_DOC_REPORT_GENERATOR) Return the first OutputDocument filtered by the OUT_DOC_REPORT_GENERATOR column
 * @method     OutputDocument findOneByOutDocLandscape(int $OUT_DOC_LANDSCAPE) Return the first OutputDocument filtered by the OUT_DOC_LANDSCAPE column
 * @method     OutputDocument findOneByOutDocMedia(string $OUT_DOC_MEDIA) Return the first OutputDocument filtered by the OUT_DOC_MEDIA column
 * @method     OutputDocument findOneByOutDocLeftMargin(int $OUT_DOC_LEFT_MARGIN) Return the first OutputDocument filtered by the OUT_DOC_LEFT_MARGIN column
 * @method     OutputDocument findOneByOutDocRightMargin(int $OUT_DOC_RIGHT_MARGIN) Return the first OutputDocument filtered by the OUT_DOC_RIGHT_MARGIN column
 * @method     OutputDocument findOneByOutDocTopMargin(int $OUT_DOC_TOP_MARGIN) Return the first OutputDocument filtered by the OUT_DOC_TOP_MARGIN column
 * @method     OutputDocument findOneByOutDocBottomMargin(int $OUT_DOC_BOTTOM_MARGIN) Return the first OutputDocument filtered by the OUT_DOC_BOTTOM_MARGIN column
 * @method     OutputDocument findOneByOutDocGenerate(string $OUT_DOC_GENERATE) Return the first OutputDocument filtered by the OUT_DOC_GENERATE column
 * @method     OutputDocument findOneByOutDocType(string $OUT_DOC_TYPE) Return the first OutputDocument filtered by the OUT_DOC_TYPE column
 * @method     OutputDocument findOneByOutDocCurrentRevision(int $OUT_DOC_CURRENT_REVISION) Return the first OutputDocument filtered by the OUT_DOC_CURRENT_REVISION column
 * @method     OutputDocument findOneByOutDocFieldMapping(string $OUT_DOC_FIELD_MAPPING) Return the first OutputDocument filtered by the OUT_DOC_FIELD_MAPPING column
 * @method     OutputDocument findOneByOutDocVersioning(int $OUT_DOC_VERSIONING) Return the first OutputDocument filtered by the OUT_DOC_VERSIONING column
 * @method     OutputDocument findOneByOutDocDestinationPath(string $OUT_DOC_DESTINATION_PATH) Return the first OutputDocument filtered by the OUT_DOC_DESTINATION_PATH column
 * @method     OutputDocument findOneByOutDocTags(string $OUT_DOC_TAGS) Return the first OutputDocument filtered by the OUT_DOC_TAGS column
 * @method     OutputDocument findOneByOutDocPdfSecurityEnabled(int $OUT_DOC_PDF_SECURITY_ENABLED) Return the first OutputDocument filtered by the OUT_DOC_PDF_SECURITY_ENABLED column
 * @method     OutputDocument findOneByOutDocPdfSecurityOpenPassword(string $OUT_DOC_PDF_SECURITY_OPEN_PASSWORD) Return the first OutputDocument filtered by the OUT_DOC_PDF_SECURITY_OPEN_PASSWORD column
 * @method     OutputDocument findOneByOutDocPdfSecurityOwnerPassword(string $OUT_DOC_PDF_SECURITY_OWNER_PASSWORD) Return the first OutputDocument filtered by the OUT_DOC_PDF_SECURITY_OWNER_PASSWORD column
 * @method     OutputDocument findOneByOutDocPdfSecurityPermissions(string $OUT_DOC_PDF_SECURITY_PERMISSIONS) Return the first OutputDocument filtered by the OUT_DOC_PDF_SECURITY_PERMISSIONS column
 *
 * @method     array findByOutDocUid(string $OUT_DOC_UID) Return OutputDocument objects filtered by the OUT_DOC_UID column
 * @method     array findByProUid(string $PRO_UID) Return OutputDocument objects filtered by the PRO_UID column
 * @method     array findByOutDocReportGenerator(string $OUT_DOC_REPORT_GENERATOR) Return OutputDocument objects filtered by the OUT_DOC_REPORT_GENERATOR column
 * @method     array findByOutDocLandscape(int $OUT_DOC_LANDSCAPE) Return OutputDocument objects filtered by the OUT_DOC_LANDSCAPE column
 * @method     array findByOutDocMedia(string $OUT_DOC_MEDIA) Return OutputDocument objects filtered by the OUT_DOC_MEDIA column
 * @method     array findByOutDocLeftMargin(int $OUT_DOC_LEFT_MARGIN) Return OutputDocument objects filtered by the OUT_DOC_LEFT_MARGIN column
 * @method     array findByOutDocRightMargin(int $OUT_DOC_RIGHT_MARGIN) Return OutputDocument objects filtered by the OUT_DOC_RIGHT_MARGIN column
 * @method     array findByOutDocTopMargin(int $OUT_DOC_TOP_MARGIN) Return OutputDocument objects filtered by the OUT_DOC_TOP_MARGIN column
 * @method     array findByOutDocBottomMargin(int $OUT_DOC_BOTTOM_MARGIN) Return OutputDocument objects filtered by the OUT_DOC_BOTTOM_MARGIN column
 * @method     array findByOutDocGenerate(string $OUT_DOC_GENERATE) Return OutputDocument objects filtered by the OUT_DOC_GENERATE column
 * @method     array findByOutDocType(string $OUT_DOC_TYPE) Return OutputDocument objects filtered by the OUT_DOC_TYPE column
 * @method     array findByOutDocCurrentRevision(int $OUT_DOC_CURRENT_REVISION) Return OutputDocument objects filtered by the OUT_DOC_CURRENT_REVISION column
 * @method     array findByOutDocFieldMapping(string $OUT_DOC_FIELD_MAPPING) Return OutputDocument objects filtered by the OUT_DOC_FIELD_MAPPING column
 * @method     array findByOutDocVersioning(int $OUT_DOC_VERSIONING) Return OutputDocument objects filtered by the OUT_DOC_VERSIONING column
 * @method     array findByOutDocDestinationPath(string $OUT_DOC_DESTINATION_PATH) Return OutputDocument objects filtered by the OUT_DOC_DESTINATION_PATH column
 * @method     array findByOutDocTags(string $OUT_DOC_TAGS) Return OutputDocument objects filtered by the OUT_DOC_TAGS column
 * @method     array findByOutDocPdfSecurityEnabled(int $OUT_DOC_PDF_SECURITY_ENABLED) Return OutputDocument objects filtered by the OUT_DOC_PDF_SECURITY_ENABLED column
 * @method     array findByOutDocPdfSecurityOpenPassword(string $OUT_DOC_PDF_SECURITY_OPEN_PASSWORD) Return OutputDocument objects filtered by the OUT_DOC_PDF_SECURITY_OPEN_PASSWORD column
 * @method     array findByOutDocPdfSecurityOwnerPassword(string $OUT_DOC_PDF_SECURITY_OWNER_PASSWORD) Return OutputDocument objects filtered by the OUT_DOC_PDF_SECURITY_OWNER_PASSWORD column
 * @method     array findByOutDocPdfSecurityPermissions(string $OUT_DOC_PDF_SECURITY_PERMISSIONS) Return OutputDocument objects filtered by the OUT_DOC_PDF_SECURITY_PERMISSIONS column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseOutputDocumentQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseOutputDocumentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'OutputDocument', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OutputDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    OutputDocumentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OutputDocumentQuery) {
            return $criteria;
        }
        $query = new OutputDocumentQuery();
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
     * @return    OutputDocument|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = OutputDocumentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OUT_DOC_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocUid('fooValue');   // WHERE OUT_DOC_UID = 'fooValue'
     * $query->filterByOutDocUid('%fooValue%'); // WHERE OUT_DOC_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocUid($outDocUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocUid)) {
                $outDocUid = str_replace('*', '%', $outDocUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_UID, $outDocUid, $comparison);
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
     * @return    OutputDocumentQuery The current query, for fluid interface
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
        return $this->addUsingAlias(OutputDocumentPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_REPORT_GENERATOR column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocReportGenerator('fooValue');   // WHERE OUT_DOC_REPORT_GENERATOR = 'fooValue'
     * $query->filterByOutDocReportGenerator('%fooValue%'); // WHERE OUT_DOC_REPORT_GENERATOR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocReportGenerator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocReportGenerator($outDocReportGenerator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocReportGenerator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocReportGenerator)) {
                $outDocReportGenerator = str_replace('*', '%', $outDocReportGenerator);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_REPORT_GENERATOR, $outDocReportGenerator, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_LANDSCAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocLandscape(1234); // WHERE OUT_DOC_LANDSCAPE = 1234
     * $query->filterByOutDocLandscape(array(12, 34)); // WHERE OUT_DOC_LANDSCAPE IN (12, 34)
     * $query->filterByOutDocLandscape(array('min' => 12)); // WHERE OUT_DOC_LANDSCAPE > 12
     * </code>
     *
     * @param     mixed $outDocLandscape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocLandscape($outDocLandscape = null, $comparison = null)
    {
        if (is_array($outDocLandscape)) {
            $useMinMax = false;
            if (isset($outDocLandscape['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_LANDSCAPE, $outDocLandscape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocLandscape['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_LANDSCAPE, $outDocLandscape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_LANDSCAPE, $outDocLandscape, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_MEDIA column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocMedia('fooValue');   // WHERE OUT_DOC_MEDIA = 'fooValue'
     * $query->filterByOutDocMedia('%fooValue%'); // WHERE OUT_DOC_MEDIA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocMedia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocMedia($outDocMedia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocMedia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocMedia)) {
                $outDocMedia = str_replace('*', '%', $outDocMedia);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_MEDIA, $outDocMedia, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_LEFT_MARGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocLeftMargin(1234); // WHERE OUT_DOC_LEFT_MARGIN = 1234
     * $query->filterByOutDocLeftMargin(array(12, 34)); // WHERE OUT_DOC_LEFT_MARGIN IN (12, 34)
     * $query->filterByOutDocLeftMargin(array('min' => 12)); // WHERE OUT_DOC_LEFT_MARGIN > 12
     * </code>
     *
     * @param     mixed $outDocLeftMargin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocLeftMargin($outDocLeftMargin = null, $comparison = null)
    {
        if (is_array($outDocLeftMargin)) {
            $useMinMax = false;
            if (isset($outDocLeftMargin['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_LEFT_MARGIN, $outDocLeftMargin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocLeftMargin['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_LEFT_MARGIN, $outDocLeftMargin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_LEFT_MARGIN, $outDocLeftMargin, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_RIGHT_MARGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocRightMargin(1234); // WHERE OUT_DOC_RIGHT_MARGIN = 1234
     * $query->filterByOutDocRightMargin(array(12, 34)); // WHERE OUT_DOC_RIGHT_MARGIN IN (12, 34)
     * $query->filterByOutDocRightMargin(array('min' => 12)); // WHERE OUT_DOC_RIGHT_MARGIN > 12
     * </code>
     *
     * @param     mixed $outDocRightMargin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocRightMargin($outDocRightMargin = null, $comparison = null)
    {
        if (is_array($outDocRightMargin)) {
            $useMinMax = false;
            if (isset($outDocRightMargin['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN, $outDocRightMargin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocRightMargin['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN, $outDocRightMargin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN, $outDocRightMargin, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_TOP_MARGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocTopMargin(1234); // WHERE OUT_DOC_TOP_MARGIN = 1234
     * $query->filterByOutDocTopMargin(array(12, 34)); // WHERE OUT_DOC_TOP_MARGIN IN (12, 34)
     * $query->filterByOutDocTopMargin(array('min' => 12)); // WHERE OUT_DOC_TOP_MARGIN > 12
     * </code>
     *
     * @param     mixed $outDocTopMargin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocTopMargin($outDocTopMargin = null, $comparison = null)
    {
        if (is_array($outDocTopMargin)) {
            $useMinMax = false;
            if (isset($outDocTopMargin['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_TOP_MARGIN, $outDocTopMargin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocTopMargin['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_TOP_MARGIN, $outDocTopMargin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_TOP_MARGIN, $outDocTopMargin, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_BOTTOM_MARGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocBottomMargin(1234); // WHERE OUT_DOC_BOTTOM_MARGIN = 1234
     * $query->filterByOutDocBottomMargin(array(12, 34)); // WHERE OUT_DOC_BOTTOM_MARGIN IN (12, 34)
     * $query->filterByOutDocBottomMargin(array('min' => 12)); // WHERE OUT_DOC_BOTTOM_MARGIN > 12
     * </code>
     *
     * @param     mixed $outDocBottomMargin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocBottomMargin($outDocBottomMargin = null, $comparison = null)
    {
        if (is_array($outDocBottomMargin)) {
            $useMinMax = false;
            if (isset($outDocBottomMargin['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN, $outDocBottomMargin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocBottomMargin['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN, $outDocBottomMargin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN, $outDocBottomMargin, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_GENERATE column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocGenerate('fooValue');   // WHERE OUT_DOC_GENERATE = 'fooValue'
     * $query->filterByOutDocGenerate('%fooValue%'); // WHERE OUT_DOC_GENERATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocGenerate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocGenerate($outDocGenerate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocGenerate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocGenerate)) {
                $outDocGenerate = str_replace('*', '%', $outDocGenerate);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_GENERATE, $outDocGenerate, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocType('fooValue');   // WHERE OUT_DOC_TYPE = 'fooValue'
     * $query->filterByOutDocType('%fooValue%'); // WHERE OUT_DOC_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocType($outDocType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocType)) {
                $outDocType = str_replace('*', '%', $outDocType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_TYPE, $outDocType, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_CURRENT_REVISION column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocCurrentRevision(1234); // WHERE OUT_DOC_CURRENT_REVISION = 1234
     * $query->filterByOutDocCurrentRevision(array(12, 34)); // WHERE OUT_DOC_CURRENT_REVISION IN (12, 34)
     * $query->filterByOutDocCurrentRevision(array('min' => 12)); // WHERE OUT_DOC_CURRENT_REVISION > 12
     * </code>
     *
     * @param     mixed $outDocCurrentRevision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocCurrentRevision($outDocCurrentRevision = null, $comparison = null)
    {
        if (is_array($outDocCurrentRevision)) {
            $useMinMax = false;
            if (isset($outDocCurrentRevision['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_CURRENT_REVISION, $outDocCurrentRevision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocCurrentRevision['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_CURRENT_REVISION, $outDocCurrentRevision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_CURRENT_REVISION, $outDocCurrentRevision, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_FIELD_MAPPING column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocFieldMapping('fooValue');   // WHERE OUT_DOC_FIELD_MAPPING = 'fooValue'
     * $query->filterByOutDocFieldMapping('%fooValue%'); // WHERE OUT_DOC_FIELD_MAPPING LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocFieldMapping The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocFieldMapping($outDocFieldMapping = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocFieldMapping)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocFieldMapping)) {
                $outDocFieldMapping = str_replace('*', '%', $outDocFieldMapping);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_FIELD_MAPPING, $outDocFieldMapping, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_VERSIONING column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocVersioning(1234); // WHERE OUT_DOC_VERSIONING = 1234
     * $query->filterByOutDocVersioning(array(12, 34)); // WHERE OUT_DOC_VERSIONING IN (12, 34)
     * $query->filterByOutDocVersioning(array('min' => 12)); // WHERE OUT_DOC_VERSIONING > 12
     * </code>
     *
     * @param     mixed $outDocVersioning The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocVersioning($outDocVersioning = null, $comparison = null)
    {
        if (is_array($outDocVersioning)) {
            $useMinMax = false;
            if (isset($outDocVersioning['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_VERSIONING, $outDocVersioning['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocVersioning['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_VERSIONING, $outDocVersioning['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_VERSIONING, $outDocVersioning, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_DESTINATION_PATH column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocDestinationPath('fooValue');   // WHERE OUT_DOC_DESTINATION_PATH = 'fooValue'
     * $query->filterByOutDocDestinationPath('%fooValue%'); // WHERE OUT_DOC_DESTINATION_PATH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocDestinationPath The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocDestinationPath($outDocDestinationPath = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocDestinationPath)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocDestinationPath)) {
                $outDocDestinationPath = str_replace('*', '%', $outDocDestinationPath);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_DESTINATION_PATH, $outDocDestinationPath, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_TAGS column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocTags('fooValue');   // WHERE OUT_DOC_TAGS = 'fooValue'
     * $query->filterByOutDocTags('%fooValue%'); // WHERE OUT_DOC_TAGS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocTags The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocTags($outDocTags = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocTags)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocTags)) {
                $outDocTags = str_replace('*', '%', $outDocTags);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_TAGS, $outDocTags, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_PDF_SECURITY_ENABLED column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocPdfSecurityEnabled(1234); // WHERE OUT_DOC_PDF_SECURITY_ENABLED = 1234
     * $query->filterByOutDocPdfSecurityEnabled(array(12, 34)); // WHERE OUT_DOC_PDF_SECURITY_ENABLED IN (12, 34)
     * $query->filterByOutDocPdfSecurityEnabled(array('min' => 12)); // WHERE OUT_DOC_PDF_SECURITY_ENABLED > 12
     * </code>
     *
     * @param     mixed $outDocPdfSecurityEnabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocPdfSecurityEnabled($outDocPdfSecurityEnabled = null, $comparison = null)
    {
        if (is_array($outDocPdfSecurityEnabled)) {
            $useMinMax = false;
            if (isset($outDocPdfSecurityEnabled['min'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED, $outDocPdfSecurityEnabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outDocPdfSecurityEnabled['max'])) {
                $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED, $outDocPdfSecurityEnabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED, $outDocPdfSecurityEnabled, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_PDF_SECURITY_OPEN_PASSWORD column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocPdfSecurityOpenPassword('fooValue');   // WHERE OUT_DOC_PDF_SECURITY_OPEN_PASSWORD = 'fooValue'
     * $query->filterByOutDocPdfSecurityOpenPassword('%fooValue%'); // WHERE OUT_DOC_PDF_SECURITY_OPEN_PASSWORD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocPdfSecurityOpenPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocPdfSecurityOpenPassword($outDocPdfSecurityOpenPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocPdfSecurityOpenPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocPdfSecurityOpenPassword)) {
                $outDocPdfSecurityOpenPassword = str_replace('*', '%', $outDocPdfSecurityOpenPassword);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD, $outDocPdfSecurityOpenPassword, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_PDF_SECURITY_OWNER_PASSWORD column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocPdfSecurityOwnerPassword('fooValue');   // WHERE OUT_DOC_PDF_SECURITY_OWNER_PASSWORD = 'fooValue'
     * $query->filterByOutDocPdfSecurityOwnerPassword('%fooValue%'); // WHERE OUT_DOC_PDF_SECURITY_OWNER_PASSWORD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocPdfSecurityOwnerPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocPdfSecurityOwnerPassword($outDocPdfSecurityOwnerPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocPdfSecurityOwnerPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocPdfSecurityOwnerPassword)) {
                $outDocPdfSecurityOwnerPassword = str_replace('*', '%', $outDocPdfSecurityOwnerPassword);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD, $outDocPdfSecurityOwnerPassword, $comparison);
    }

    /**
     * Filter the query on the OUT_DOC_PDF_SECURITY_PERMISSIONS column
     *
     * Example usage:
     * <code>
     * $query->filterByOutDocPdfSecurityPermissions('fooValue');   // WHERE OUT_DOC_PDF_SECURITY_PERMISSIONS = 'fooValue'
     * $query->filterByOutDocPdfSecurityPermissions('%fooValue%'); // WHERE OUT_DOC_PDF_SECURITY_PERMISSIONS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outDocPdfSecurityPermissions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function filterByOutDocPdfSecurityPermissions($outDocPdfSecurityPermissions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outDocPdfSecurityPermissions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outDocPdfSecurityPermissions)) {
                $outDocPdfSecurityPermissions = str_replace('*', '%', $outDocPdfSecurityPermissions);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_PERMISSIONS, $outDocPdfSecurityPermissions, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     OutputDocument $outputDocument Object to remove from the list of results
     *
     * @return    OutputDocumentQuery The current query, for fluid interface
     */
    public function prune($outputDocument = null)
    {
        if ($outputDocument) {
            $this->addUsingAlias(OutputDocumentPeer::OUT_DOC_UID, $outputDocument->getOutDocUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseOutputDocumentQuery